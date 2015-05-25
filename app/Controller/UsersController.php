<?php
    class UsersController extends AppController{
        public $uses=array('User','Student');

        public function signup(){

            if($this->request->is('post')){
                $user = $this->request->data;

                unset($user['User']['confirm_password']);

                $findUser = $this->User->findByusername($user['User']['username']);

                if($findUser != null){
                    $this->Session->setFlash('Looks like you are already registered.', 'default', array('class' => 'message error') , 'error');
                    $this->redirect($this->referer()."#login-register");
                }

                if($this->User->save($user))
                {

                    //Get EmailTemplate
                    // $registerEmailTemplate = $this->EmailTemplate->find('first',array('conditions'=>array('EmailTemplate.alias'=>'register_success')));

                    // if($registerEmailTemplate != null)
                    // {
                    //     //Send Mail
                    //     $Email = new CakeEmail('default');

                    //     $subject = $registerEmailTemplate['EmailTemplate']['title'];
                    //     $message =  html_entity_decode($registerEmailTemplate['EmailTemplate']['content']);

                    //     $message = str_replace("{user_name}",$user['User']['first_name'],$message);


                    //     $Email->emailFormat('html');
                    //     $Email->template('default');
                    //     $Email->to($user['User']['username']);
                    //     $Email->subject($subject);
                    //     $Email->send($message);

                    // }
                    // $user_id = $this->User->getInsertId();

                    // $user = $this->User->findById($user_id);

                    $this->Auth->login($user['User']);
                    $user=$this->data;
                    $user_id=$this->User->getInsertID();
                    $usr=$this->Auth->user();
                    $usr['id']=$user_id;
                    $this->Session->write('Auth.User', $usr);
                    if(empty($user['User']['user_type'])) {
                        $this->redirect(array('controller'=>'users','action'=>'set_user_type',$user_id));
                    }
                    else{
                        if($user['User']['user_type']=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
                            $student=array();
                            $student['user_id']=$this->User->getInsertID();
                            $this->Student->save($student);
                            $this->redirect(array('controller'=>'students','action'=>'home'));
                        }
                        if($user['User']['user_type']=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                            $this->redirect(array('controller'=>'teachers','action'=>'home'));
                        }
                        if($user['User']['user_type']=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                            $this->redirect(array('controller'=>'parents','action'=>'home'));
                        }
                    }

                    $this->Session->setFlash('Thank you for registering.', 'default', array('class' => 'alert-box success radius') , 'success');
                    $this->redirect(array('controller'=>'pages','action'=>'home'));

                    
                }
                else{
                    $this->Session->setFlash('Sorry, could not register you.', 'default', array('class' => 'alert-box alert radius') , 'error');
                    $this->redirect($this->referer()."#login-register");
                }
            }
            else{
                $this->redirect(array('controller'=>'pages','action'=>'home'));
            }


        }

        public function callback(){
        $auth_details = unserialize(base64_decode($this->request->data['opauth']));

        //echo json_encode($auth_details); die();
        $newUser = array();
        $newUser['User']['first_name'] = $auth_details['auth']['info']['first_name'];
        $newUser['User']['last_name'] = $auth_details['auth']['info']['last_name'];
        $newUser['User']['username'] = $auth_details['auth']['info']['email'];
        $newUser['User']['password'] = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 6)), 0, 6);

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

            $this->Auth->login($user['User']);

            $this->Session->setFlash('Welcome back!', 'default', array('class' => 'alert-box success radius') , 'success');

        }
        else{

            if($this->User->save($newUser))
            {
                $user_id = $this->User->getInsertID();
                $user = $this->User->findById($user_id);

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
        }
    }
    public function login(){
        $this->layout='site_layout';
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

            }
        }
    }
    public function custom_login(){
            if($this->Session->check('Auth.User')){
                //pr($this->Auth->user());
                if(empty($this->Auth->user('user_type'))){
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
                        $this->redirect(array('controller'=>'students','action'=>'home'));
                    }
                    if($user['User']['user_type']=='cb6f95fe-fbbc-11e4-b148-01f8d649e9b6'){
                        $this->redirect(array('controller'=>'teachers','action'=>'home'));
                    }
                    if($user['User']['user_type']=='d0cf96fc-fbbc-11e4-b148-01f8d649e9b6'){
                        $this->redirect(array('controller'=>'parents','action'=>'home'));
                }

                }
            }
            else{
                $this->Session->setFlash('Sorry invalid username or password','default',array('class'=>'alert-box radius alert'),'error');
                $this->redirect(array('controller'=>'pages','action'=>'home'));
            }
        }
    }
    public function logout(){
        if($this->Auth->logout()){
            $this->Session->setFlash('Logged out successfully','default',array('class'=>'alert-box radius success'),'success');
            $this->redirect(array('controller'=>'pages','action'=>'home'));
        }
        else{
            die("error");
        }
    }

    public function set_user_type($id=NULL){
        $this->layout='profile_layout';
        $this->set('uid',$id);
        if($this->request->is('post')){
            
            if($this->User->save($this->data)){
                $usr=$this->Auth->user();
                $usr['path']=$this->data['User']['path']['name'];
                $usr['path_dir']=$id;
                if(isset($this->data['User']['name'])){
                    $usr['name']=$this->data['User']['name'];
                }
                $this->Session->write('Auth.User', $usr);
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
            }
        }
    }
    }
?>