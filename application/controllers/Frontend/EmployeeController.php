<?php
class EmployeeController extends CI_Controller{

    public function index(){
        $this->load->view('templete/header');
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->getEmployeeData();

        $this->load->view('frontend/employee',$data);
        $this->load->view('templete/footer');
    }
    public function create(){
        $this->load->view('templete/header');
        $this->load->view('frontend/create');
        $this->load->view('templete/footer');
    }

    public function store(){
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required');

        if($this->form_validation->run()){
            $data = [
                'first_name' => $this->input->post('first_name'),   
                'last_name' => $this->input->post('last_name'),      
                'phone' => $this->input->post('phone'),      
                'email' => $this->input->post('email'),         
            ];
            $this->load->model('EmployeeModel','empm');
            $this->empm->insertEmployeeData($data);
            $this->session->set_flashdata('status','Employee data inserted successfully');
            redirect(base_url('employee'));
       
        }else{
               //redirect the page
        //  $this->create();
         redirect(base_url('employee/add'));
        }
    }

    public function edit($id){
        $this->load->view('templete/header');
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->editEmployeeData($id);
        $this->load->view('frontend/edit',$data);
        $this->load->view('templete/footer');
    }

  public function update($id){
     $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('email', 'Email Address', 'required');

        if($this->form_validation->run()){
         $data = [
               'first_name' => $this->input->post('first_name'),   
               'last_name' => $this->input->post('last_name'),      
                'phone' => $this->input->post('phone'),      
                'email' => $this->input->post('email'),  
           ];
             $this->load->model('EmployeeModel');
             $this->EmployeeModel->updateEmployeeData($data,$id);
             redirect(base_url('employee'));
        }else {
               $this->edit($id);
        }   
   }


    public function delete($id){
         $this->load->model('EmployeeModel');
         $this->EmployeeModel->deleteEmployeeData($id);
         redirect(base_url('employee'));

    }
}

?>