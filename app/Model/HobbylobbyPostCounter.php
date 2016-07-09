<?php
    class HobbylobbyPostCounter extends AppModel{
        //IP FROM USER
        private $IP;
        private $post_id;
        //HobbylobbyPost model
        private $HobbylobbyPost;
        function _constructDB($post=null){

            /*
            *@ Set user IP and time out expired
            */
            $this->IP = $_SERVER['REMOTE_ADDR'];
            $this->post_id=$post;
            $this->HobbylobbyPost = ClassRegistry::init('HobbylobbyPost');
            /*
            *@ Call Counter's functions
            */
            $this->UserRequest();
            // $this->GetDetail();
            // $this->ShowDetail();
        }
        private function UserRequest(){

            /*
            *@ If IP already set
            */
            $data=array();
            $user = $this->find("first", array(
                'conditions' => array('ip' => $this->IP,'post_id'=>$this->post_id),
                'order' => 'id DESC'
            ));
            if (empty($user) ){
                //Update new data to DB
                // pr($this->IP);
                $post_data=array();
                $data['ip'] = $this->IP;
                $data['post_id']=$this->post_id;
                $post=$this->HobbylobbyPost->find('first',array('conditions'=>array('HobbylobbyPost.id'=>$this->post_id)));
                $post['HobbylobbyPost']['views']=$post['HobbylobbyPost']['views']+1;
                $post_data=$post['HobbylobbyPost'];
                // pr($post_data);
                $this->HobbylobbyPost->save($post_data);
                $this->save($data);


            }
        }
    }
?>