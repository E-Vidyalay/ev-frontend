<?php
    class LinksCounter extends AppModel{
        //IP FROM USER
        private $IP;
        private $link_id;
        //HobbylobbyPost model
        private $linksPost;
        function _constructDB($link=null){

            /*
            *@ Set user IP and time out expired
            */
            $this->IP = $_SERVER['REMOTE_ADDR'];
            $this->link_id=$link;
            $this->linksPost = ClassRegistry::init('Link');
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
                'conditions' => array('ip' => $this->IP,'link_id'=>$this->link_id),
                'order' => 'id DESC'
            ));
            if (empty($user) ){
                //Update new data to DB
                // pr($this->IP);
                $data['ip'] = $this->IP;
                $data['link_id']=$this->link_id;
                $post_data=$this->linksPost->find('first',array('conditions'=>array('Link.id'=>$this->link_id)));
                $post_data['Link']['views']=$post_data['Link']['views']+1;
                // pr($data);
                $this->linksPost->save($post_data);
                $this->save($data);

            }
        }
    }
?>