<?php
    App::uses('CakeEmail', 'Network/Email');
    class UsersController extends AppController{
        public $uses=array('User','Student','Contributor','Teacher');
        public function register(){
            $this->layout="site_layout";
        }
        public function signup(){
            if($this->request->is('post')){
                $user = $this->request->data;

                unset($user['User']['confirm_password']);

                $findUser = $this->User->findByusername($user['User']['username']);

                if($findUser != null){
                    $this->Session->setFlash('Looks like you are already registered.', 'default', array('class' => 'alert alert-box radius') , 'error');
                    $this->redirect($this->referer()."#login-register");
                }

                if($this->User->save($user))
                {
                    $body='<br/>
                        <div class="row">
                            <div class="columns large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                                <div class="panel">
                                    <h3>One step to Successfull Registration.</h3>
                                    <hr/>
                                    <p>You have registered successfully to E-Vidyalay Portal with below username.
                                    Username: '.$user['User']['username'].'
                                    <br/>
                                    Confirm your Registration by Clicking the Below link:
                                    <a href="http://frontend.evidyalay.net/users/activate_user/'
                                    .$this->User->getLastInsertId().'">http://frontend.evidyalay.net/users/activate_user/'
                                    .$this->User->getLastInsertId().'</a>
                                    <br/>
                                    Login with your registered username and password.
                                    <hr/>
                                    Please do not reply to this mail. This is a system generated email.
                                    </div>
                                    <br/>
                                </div>
                            </div>
                        </div>';
                        $Email = new CakeEmail();
                        $Email->from(array('noreply@evidyalay.net' => 'ઈ-વિદ્યાલય Team'))
                            ->to($user['User']['username'])
                            ->subject('Welcome to E-Vidyalay')
                            ->template('default')
                            ->emailFormat('html')
                            ->send($body);

                    $user_id = $this->User->getInsertId();

                    $user = $this->User->findById($user_id);
                        if($user['User']['user_type']=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                            $student=array();
                            $student['user_id']=$user_id;
                            $this->Student->save($student);
                        }
                        if($user['User']['user_type']=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                            $teacher=array();
                            $teacher['user_id']=$user_id;
                            $this->Teacher->save($teacher);
                        }
                        if($user['User']['user_type']=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                            $parent=array();
                            $parent['user_id']=$user_id;
                            $this->Parent->save($parent);
                        }
                        if($user['User']['user_type']=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                            $contri=array();
                            $contri['user_id']=$user_id;
                            $this->Contributor->save($contri);
                        }

                    $this->Session->setFlash('Thank you for registering. Check your mail to activate your account.', 'default', array('class' => 'alert-box success radius') , 'success');
                    $this->redirect(array('controller'=>'Pages','action'=>'home'));

                }
                else{
                    $this->Session->setFlash('Sorry, could not register you.', 'default', array('class' => 'alert-box alert radius') , 'error');
                    $this->redirect($this->referer()."#login-register");
                }
            }
            else{
                $this->redirect(array('controller'=>'Pages','action'=>'home'));
            }


        }

        public function callback(){
        $auth_details = unserialize(base64_decode($this->request->data['opauth']));
        //echo json_encode($auth_details); die();
        $newUser = array();
        if(isset($auth_details['auth']['info']['email'])){
            $newUser['User']['name'] = $auth_details['auth']['info']['name'];
            $newUser['User']['username'] = $auth_details['auth']['info']['email'];
            $newUser['User']['password'] = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 6)), 0, 6);
            $newUser['User']['is_active'] = 1;
            if($auth_details['auth']['provider']=="Google")
            {
                $newUser['User']['google_token'] = $auth_details['auth']['uid'];
            }
            else if($auth_details['auth']['provider']=="Facebook")
            {
                $newUser['User']['fb_token'] = $auth_details['auth']['uid'];
            }

            $userEmail = $newUser['User']['username'];

            $user = $this->User->find('first',array('conditions'=>array('User.username'=>$userEmail)));

            if($user != null)
            {

                if($auth_details['auth']['provider']=="Google")
                {
                    $user['User']['google_token'] = $auth_details['auth']['uid'];
                }
                else if($auth_details['auth']['provider']=="Facebook")
                {
                    $user['User']['fb_token'] = $auth_details['auth']['uid'];
                }

                if($this->User->save($user)){
                }
                $authUser=array();
                $authUser=$user['User'];
                $authUser['UserType']=$user['UserType'];
                $this->Auth->login($authUser);

                $this->Session->setFlash('Welcome back!', 'default', array('class' => 'alert-box success radius') , 'success');

            }
            else{

                if($this->User->save($newUser))
                {
                    $user_id = $this->User->getInsertID();
                    $user = $this->User->findById($user_id);
                    if(isset($newUser['User']['fb_token'])){
                        $welcome='Facebook';
                    }
                    else{
                        $welcome='Google';    
                    }
                    $body='<br/>
                        <div class="row">
                            <div class="columns large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                                <div class="panel">
                                    <h3>Welcome to E-Vidyalay</h3>
                                    <hr/>
                                    <p>You have registered successfully to E-Vidyalay Portal with below username.
                                    Username: '.$userEmail.'
                                    You have registered through your '.$welcome.' account.
                                    <br/>
                                    Login with your registered username and password.
                                    <hr/>
                                    Please do not reply to this mail. This is a system generated email.
                                    </div>
                                    <br/>
                                </div>
                            </div>
                        </div>';
                        $Email = new CakeEmail();
                        $Email->from(array('noreply@evidyalay.net' => 'ઈ-વિદ્યાલય Team'))
                            ->to($userEmail)
                            ->subject('Welcome to E-Vidyalay')
                            ->template('default')
                            ->emailFormat('html')
                            ->send($body);
                    $this->Auth->login($user['User']);
                    $this->Session->setFlash('Thank you for joining E Vidyalay!', 'default', array('class' => 'alert-box radius success') , 'success');
                }
                else
                {
                    $this->Session->setFlash('Sorry, an error occurred. Please try again.', 'default', array('class' => 'alert-box alert radius') , 'error');
                }
            }
            if(empty($user['User']['user_type'])) {
                $this->redirect(array('controller'=>'users','action'=>'set_user_type',$user['User']['id']));
            }
            else{
                if($user['User']['user_type']=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'students','action'=>'home'));
                }
                if($user['User']['user_type']=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'teachers','action'=>'home'));
                }
                if($user['User']['user_type']=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'parents','action'=>'home'));
                }
                if($user['User']['user_type']=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                    $this->redirect(array('controller'=>'contributors','action'=>'index'));
                }
            }
        }
        else{
            $this->Session->setFlash('Sorry, an error occurred. Seems like other api is not sharing data', 'default', array('class' => 'alert-box alert radius') , 'error');
            $this->redirect(array('controller'=>'Pages','action'=>'home'));
        }
    }
    public function login(){
        $this->layout='site_layout';
        if(isset($this->request->query['quiz'])){
            $this->set('quiz',$this->request->query['quiz']);
        }
        else{
            $this->set('quiz',null);   
        }
        if($this->Session->check('Auth.User')){
                if(empty($activeUser['User']['user_type'])){
                        $this->redirect(array('controller'=>'users','action'=>'set_user_type',$activeUser['User']['user_type']));
            }
            else{
                if($activeUser['User']['user_type']=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'students','action'=>'home'));
                }
                if($activeUser['User']['user_type']=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'teachers','action'=>'home'));
                }
                if($activeUser['User']['user_type']=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'parents','action'=>'home'));
                }
                if($activeUser['User']['user_type']=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                    $this->redirect(array('controller'=>'contributors','action'=>'index'));
                }

            }
        }
    }
    public function custom_login(){
            if($this->Session->check('Auth.User')){
                //pr($this->Auth->user());
                if(empty($activeUser['User']['user_type'])){
                        $this->redirect(array('controller'=>'users','action'=>'set_user_type',$this->Auth->user('id')));
                }
                else{
                    if($this->Auth->user('user_type')=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                            $this->redirect(array('controller'=>'students','action'=>'home'));
                    }
                    if($this->Auth->user('user_type')=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                        $this->redirect(array('controller'=>'teachers','action'=>'home'));
                    }
                    if($this->Auth->user('user_type')=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                        $this->redirect(array('controller'=>'parents','action'=>'home'));
                    }
                    if($this->Auth->user('user_type')=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                        $this->redirect(array('controller'=>'contributors','action'=>'index'));
                    }

                }
            }

        if($this->request->is('post')){

            if($this->Auth->login()){
                $this->Session->setFlash('Logged in successfully','default',array('class'=>'alert-box radius success'),'success');
                $user=$this->User->find('first',array('conditions'=>array('User.username'=>$this->data['User']['username'])));
                if(empty($user['User']['user_type'])) {
                    $this->redirect(array('controller'=>'users','action'=>'set_user_type',$user['User']['id']));
                }
                else{
                    if($user['User']['user_type']=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                        if(isset($this->request->data['User']['quiz']) ){
                            $this->redirect(array('controller'=>'students','action'=>'test_application'));
                        }
                        else{
                            $this->redirect(array('controller'=>'students','action'=>'home'));
                        }
                    }
                    if($user['User']['user_type']=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                        $this->redirect(array('controller'=>'teachers','action'=>'home'));
                    }
                    if($user['User']['user_type']=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                        $this->redirect(array('controller'=>'parents','action'=>'home'));
                    }
                    if($user['User']['user_type']=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                        $this->redirect(array('controller'=>'contributors','action'=>'index'));
                    }

                }
            }
            else{
                $this->Session->setFlash('Sorry invalid username or password OR Inactive user','default',array('class'=>'alert-box radius alert'),'error');
                $this->redirect(array('controller'=>'Pages','action'=>'home'));
            }
        }
    }
    public function logout(){
        if($this->Auth->logout()){
            $this->Session->setFlash('Logged out successfully','default',array('class'=>'alert-box radius success'),'success');
            $this->redirect(array('controller'=>'Pages','action'=>'home'));
        }
        else{
            die("error");
        }
    }

    public function set_user_type($id=NULL){
        $this->layout='site_layout';
        $this->set('uid',$id);
        if($this->request->is('post')){

            if($this->User->save($this->data)){
                $user=$this->User->find('first',array('conditions'=>array('User.id'=>$this->Auth->user('id'))));
                $authUser=array();
                $authUser=$user['User'];
                $authUser['UserType']=$user['UserType'];
                $this->Session->write('Auth.User', $authUser);
                if($this->data['User']['user_type']=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                    $student=array();
                    $student['user_id']=$this->data['User']['id'];
                    $this->Student->save($student);
                    $this->redirect(array('controller'=>'students','action'=>'home'));
                }
                if($this->data['User']['user_type']=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'teachers','action'=>'home'));
                }
                if($this->data['User']['user_type']=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->redirect(array('controller'=>'parents','action'=>'home'));
                }
                if($user['User']['user_type']=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                    $contri=array();
                    $contri['user_id']=$this->data['User']['id'];
                    $this->Contributor->save($contri);
                    $this->redirect(array('controller'=>'contributors','action'=>'index'));
                }
            }
        }
    }
    public function edit_pro(){
        $this->layout="site_layout";
            if(empty($this->data))
            {
                $this->data=$this->User->findById($this->Auth->user('id'));
            }
        if($this->request->is('post')){
            $data=$this->Auth->user();
            $u=$this->Auth->user();
            $data['id']=$this->data['User']['id'];
            $data['name']=$this->data['User']['name'];
            if($this->data['User']['newpassword']!=NULL){
                $data['password']=$this->data['User']['newpassword'];
            }
            $u=$data;
            //pr($u);die();
            if($this->data['User']['path']['name']!=NULL){
                $data['path']=$this->data['User']['path'];
                $u['path']=$this->data['User']['path']['name'];
            }
            if($this->data['User']['newusername']!=NULL){
                $data['username']=$this->data['User']['newusername'];
                $u['username']=$this->data['User']['newusername'];
            }
            // if($u['path']==NULL){
            //     $file =new File(www_ROOT.'files/user/path'.$id.DR.)
            // }
            if($this->User->save($data)){
                $this->Session->write('Auth.User', $u);
                if($this->Auth->user('user_type')=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->Session->setFlash('Profile Updated','default',array('class'=>'alert-box radius success'),'success');
                    $this->redirect(array('controller'=>'students','action'=>'edit_profile',$id));
                }
                if($this->Auth->user('user_type')=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->Session->setFlash('Profile Updated','default',array('class'=>'alert-box radius success'),'success');
                    $this->redirect(array('controller'=>'teachers','action'=>'home'));
                }
                if($this->Auth->user('user_type')=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->Session->setFlash('Profile Updated','default',array('class'=>'alert-box radius success'),'success');
                    $this->redirect(array('controller'=>'parents','action'=>'home'));
                }
                if($this->Auth->user('user_type')=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                    $this->redirect(array('controller'=>'contributors','action'=>'index'));
                }
            }
            else{
                $this->Session->setFlash('Email id already exist','default',array('class'=>'alert-box radius alert'),'error');
                $this->redirect(array('controller'=>'students','action'=>'edit_profile',$id));
            }
         }
    }
    public function edit_profile($id){
        // if($this->request->is('post')){
            $data=$this->Auth->user();
            $u=$this->Auth->user();
            $data['id']=$this->data['User']['id'];
            $data['name']=$this->data['User']['name'];
            if($this->data['User']['newpassword']!=NULL){
                $data['password']=$this->data['User']['newpassword'];
            }
            $u=$data;
            //pr($u);die();
            if($this->data['User']['path']['name']!=NULL){
                $data['path']=$this->data['User']['path'];
                $u['path']=$this->data['User']['path']['name'];
            }
            if($this->data['User']['newusername']!=NULL){
                $data['username']=$this->data['User']['newusername'];
                $u['username']=$this->data['User']['newusername'];
            }
            // if($u['path']==NULL){
            //     $file =new File(www_ROOT.'files/user/path'.$id.DR.)
            // }
            if($this->User->save($data)){
                $this->Session->write('Auth.User', $u);
                if($this->Auth->user('user_type')=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->Session->setFlash('Profile Updated','default',array('class'=>'alert-box radius success'),'success');
                    $this->redirect(array('controller'=>'students','action'=>'edit_profile',$id));
                }
                if($this->Auth->user('user_type')=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->Session->setFlash('Profile Updated','default',array('class'=>'alert-box radius success'),'success');
                    $this->redirect(array('controller'=>'teachers','action'=>'home'));
                }
                if($this->Auth->user('user_type')=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                    $this->Session->setFlash('Profile Updated','default',array('class'=>'alert-box radius success'),'success');
                    $this->redirect(array('controller'=>'parents','action'=>'home'));
                }
                if($this->Auth->user('user_type')=='ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d'){
                    $this->redirect(array('controller'=>'contributors','action'=>'index'));
                }
            }
            else{
                $this->Session->setFlash('Email id already exist','default',array('class'=>'alert-box radius alert'),'error');
                $this->redirect(array('controller'=>'students','action'=>'edit_profile',$id));
            }
        // }
    }
    public function removeProfile_pic(){
        $this->layout="ajax";
        $a['User']=$this->Auth->user();
        $a['User']['path']=NULL;
        $file = new File(WWW_ROOT.'files/user/path'.DS.$this->Auth->user('id').DS.$this->Auth->user('path'),false,0777);
        $file2 = new File(WWW_ROOT.'files/user/path'.DS.$this->Auth->user('id').DS.'small_'.$this->Auth->user('path'),false,0777);
        //pr($file);die();
        if($file->delete() && $file2->delete()){
            if($this->User->save($a)){
            $this->set('activeUser',$a);
            $this->Session->write('Auth.User', $a['User']);
        }
        }
        else{
            $this->Session->setFlash('Unable to remove Profile Picture','default',array('class'=>'alert-box radius alert'),'error');
        }


    }
    public function forgot_password(){
            $this->layout='site_layout';
            if($this->request->is('post')){
                $data=$this->request->data;
                $result=$this->User->find('first',array('conditions'=>array('username'=>$data['User']['username'])));
                if(!empty($result)){
                    $pass=substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',5)),0,6);
                    $result['User']['password']=$pass;
                    if($this->User->save($result)){
                        $body="<h1>Forgot password</h1>";
                        $body.="Your new password is: ".$pass;
                        $body.="<br/>";
                        $body.="<hr/>";
                        $body.="Please do not reply to this mail. This is a system generated email.";
                        $Email = new CakeEmail();
                        $Email->from(array('noreply@evidyalay.net' => 'ઈ-વિદ્યાલય Team'))
                             ->to($data['User']['username'])
                             ->subject('Forgot password')
                             ->viewVars(array('value' => $data['User']))
                             ->emailFormat('html')
                             ->send($body);
                        $this->Session->setFlash('Thank you, new password is sent to your email address','default',array('class'=>'alert-box success radius'),'success');
                        $this->redirect(array('controller'=>'users','action'=>'login'));
                    }
                }
                else{
                    $this->Session->setFlash('Sorry, email not found','default',array('class'=>'alert-box alert radius'),'error');
                }
            }
        }
        public function activate_user($id){
            $user['User']['id']=$id;
            $user['User']['is_active']=1;
            if($id==NULL){
                $this->Session->setFlash('ID, not found','default',array('class'=>'alert-box alert radius'),'error');
                $this->redirect(array('controller'=>'Pages','action'=>'home'));
            }
            else{
                //add update query
                if($this->User->save($user)){
                    $this->Session->setFlash('Approved Successfully now Login here','default',array('class'=>'alert-box success radius'),'success');
                    $this->redirect(array('controller'=>'users','action'=>'login'));
                }
                else{
                    $this->Session->setFlash('ID, not found','default',array('class'=>'alert-box alert radius'),'error');
                    $this->redirect(array('controller'=>'Pages','action'=>'home'));
                }
            }
        }
}
?>