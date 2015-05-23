<?php
class User extends AppModel
{

    public function beforeSave($options = array())
    {
        parent::beforeSave($options);

        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }

        return true;
    }

}
?>