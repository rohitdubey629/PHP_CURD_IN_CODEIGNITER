<?php

class StudentController extends CI_Controller{

    public function index(){

      
        $this->load->model('StudentModel','stumd');

        /*first method to call
        $studentData = $this->stumd->student_data();
        */

        /* secound method to call
          $student = new stumd;
          $studentData = $student->student_data();
          echo "Student Name : ".$studentData; 
         */

       /* private method direct not accessable wrong aproch
        $studentClass = $this->stumd->student_class();
        echo "Student Name : ".$studentData; 
        */

     
    }

    public function show($id){
        $this->load->model('StudentModel','stumd');
        $studentShow = $this->stumd->student_show($id);

        echo $studentShow; 
    }

    public function demo(){

        $this->load->model('StudentModel');
        $title = $this->StudentModel->demo();
        $data['title'] = $title;
        $data['body'] = "welcome to my channel";
        $this->load->view('demoPage',$data);
    }
}
?>