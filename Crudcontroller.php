<?php
class Crudcontroller extends CI_controller{



    
     function index(){
        $this->load->model('HomeModel');
        $users = $this->HomeModel->all();
        $data = array();
        $data['users']= $users;
        $this->load->view('list',$data);

    }


    function create(){
        $this->load->model('HomeModel');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('hobby_h[]', 'Hobby', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('Ajaigarh', 'MalAkodiae Number','Alampur','Alirajpur', 'trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('create');
        }else{

            $student_t = array();
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['gender'] = $this->input->post('gender');
            $formArray['hobby_h'] = json_encode($this->input->post('hobby_h'));
             //student  table
 
             $student_t['city'] = $this->input->post('city');
             $student_t['country'] = $this->input->post('country');
            // libraby table

             $this->HomeModel->create($formArray,$student_t );
            $this->session->set_flashdata('success','recoard added successfully');
            redirect(base_url().'index.php/Crudcontroller/index');
             }

        
    
          }
          function edit($userId)
          {
           $this->load->model('HomeModel');
            $user = $this->HomeModel->getUser($userId);
            $data = array();
            $data['user'] = $user;
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            if ($this->form_validation->run() == false){
              $this->load->view('edit' ,$data);
            } else {
                $formArray= array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('email');
                $formArray['gender'] = $this->input->post('gender');
                $formArray['hobby_h'] = json_encode($this->input->post('hobby_h'));

                
                $student_t['city'] = $this->input->post('city');
                $student_t['country'] = $this->input->post('country');


               
                
            $this->HomeModel->updateUser($userId,$formArray);
            $this->session->set_flashdata('success','Recoard updated successfully');
            redirect(base_url().'index.php/Crudcontroller/index');
          }
        }
        function delete($userId){

            $this->load->model('HomeModel');
            $user = $this->HomeModel->getUser($userId);
            if(empty($user)){
                $this->session->set_flashdata('failure','Record not fount in database');
                redirect(base_url().'index.php/Crudcontroller/index');
                
            }
            $this->HomeModel->deleteUser($userId);
            $this->session->set_flashdata('success','Record deleted successfully');
                redirect(base_url().'index.php/Crudcontroller/index');
        }
        
         
}





?>