<?php
    class UsersController extends AppController{
         public function beforeFilter()
        {
                AppController::beforeFilter();

                //Set the overall layout
                $this->layout = 'site_layout';

                // Basic setup
                $this->Auth->authenticate = array('Form');

                // Pass settings in
                $this->Auth->authenticate = array(
                    'Form' => array('userModel' => 'User')
                );

                $this->Auth->allow('login','signup','callback');
        }

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
                // die('bitch');
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
        $this->redirect(array('controller' => 'pages', 'action' => 'home'));
    }
    public function login(){
        $this->layout='login';
        if($this->Session->check('Auth.User')){
            $this->redirect(array('controller'=>'pages','action'=>'home'));
        }

        if($this->request->is('post')){
            if($this->Auth->login()){
                $this->Session->setFlash('Logged in successfully','default',array('class'=>'alert-box radius success'),'success');
                $this->redirect(array('controller'=>'pages','action'=>'home'));
            }
            else{
                $this->Session->setFlash('Sorry invalid username or password','default',array('class'=>'alert-box radius alert'),'error');
                $this->redirect(array('controller'=>'pages','action'=>'home'));
            }
        }
    }

    public function logout(){
        $this->layout='ev_admin';
        if($this->Auth->logout()){
            $this->Session->setFlash('Logged out successfully','default',array('class'=>'alert-box radius success'),'success');
            $this->redirect(array('controller'=>'pages','action'=>'home'));
        }
        else{
            die("error");
        }
    }
    public function isAuthorized($user)
    {
        return true;
    }
    }
?>