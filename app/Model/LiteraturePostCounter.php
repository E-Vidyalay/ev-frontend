<?php
    class LiteraturePostCounter extends AppModel{
        //IP FROM USER
        private $IP;
        private $post_id;
        //HobbylobbyPost model
        private $LiteraturePost;
        function _constructDB($post=null){

            /*
            *@ Set user IP and time out expired
            */
            $this->IP = $_SERVER['REMOTE_ADDR'];
            $this->post_id=$post;
            $this->LiteraturePost = ClassRegistry::init('LiteraturePost');
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
                $data['ip'] = $this->IP;
                $data['post_id']=$this->post_id;
                $post=$this->LiteraturePost->find('first',array('conditions'=>array('LiteraturePost.id'=>$this->post_id)));
                $post['LiteraturePost']['views']=$post['LiteraturePost']['views']+1;
                $post_data=$post['LiteraturePost'];
                // pr($data);
                $this->LiteraturePost->save($post_data);
                $this->save($data);

            }
        }
    }
?>