<?php
// defined('BASEPATH') OR exit('No direct script access allowed');


class PageController extends CI_Controller{

    public function page(){
        // echo "hello ";
        $this->load->view('about');

    }
}