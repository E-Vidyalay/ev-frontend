<?php
    class InformationPostCounter extends AppModel{
        //IP FROM USER
        private $IP;
        private $post_id;
        //HobbylobbyPost model
        private $InformationPost;
        function _constructDB($post=null){

            /*
            *@ Set user IP and time out expired
            */
            $this->IP = $_SERVER['REMOTE_ADDR'];
            $this->post_id=$post;
            $this->InformationPost = ClassRegistry::init('InformationPost');
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
                $post_data=$this->InformationPost->find('first',array('conditions'=>array('InformationPost.id'=>$this->post_id)));
                $post_data['InformationPost']['views']=$post_data['InformationPost']['views']+1;
                // pr($data);
                $this->InformationPost->save($post_data);
                $this->save($data);

            }
        }
    }
?>