<?php

 class Users extends CI_Controller{

    public function user(){
        echo "hello <br>";
        $this->load->view('users/UserList');
            $this->load->model('UserModels');
            $data = $this->UserModels->getUsersModel();
            print_r($data);
    }
 }
?>