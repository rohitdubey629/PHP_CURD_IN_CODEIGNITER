<?php

class StudentModel extends CI_Model{

    public function student_data(){
        //private method outside class is not accessable thats way create here
        $stuClass = $this->student_class();
        return $stu_name = "rohit his class is ".$stuClass;
    }
    private function student_class(){
       return $stuClass = "BCA";
    }

    public function student_show($id){
        if($id=='1'){
           return "User 1";
        }elseif($id=='2'){
            return "User 2";
        }
    }

    public function demo(){
        return "Hello i am found of web it";
    }
}

?>