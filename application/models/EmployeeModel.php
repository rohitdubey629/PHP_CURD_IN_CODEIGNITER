<?php

class EmployeeModel extends CI_Model{

    public function insertEmployeeData($data){
    return $this->db->insert('employee',$data);
    }

    public function getEmployeeData(){
        $query = $this->db->get('employee');
        return $query;
    }

    public function editEmployeeData($id){
        $query = $this->db->get_where('employee', ['id'=>$id]);
         return $query->row();
    }

    public function updateEmployeeData($data,$id){
        return $this->db->update('employee',$data,['id'=>$id]);
    }

    public function deleteEmployeeData($id){
       return $this->db->delete('employee',['id'=>$id]);
    }
}
?>