<?php

class HomeModel extends CI_model{


    function create($formArray,$student_t){
      $this->db->insert('student',$formArray);
      
     
       //student table


       $student_t['student_id'] =  $this->db->insert_id();
       $this->db->insert('library',$student_t);
       
         //return $insert_id = $this->db->insert_id();
        //student table
      
         }
        public function all(){
          //return $users = $this->db->get('student')->result_array();


          $this->db->select('*');
          $this->db->from('student');
          $this->db->join('library','student.id = library.student_id');
          $users= $this->db->get();
          return $users->result_array();
        }


          function getUser($userId){

            
            $this->db->select('student.*,library.city,library.country');
            $this->db->from('student');
            $this->db->join('library','student.id = library.student_id');
            $this->db->where('student.id',$userId);
            $users= $this->db->get();
            return $users->row_array();


            //$this->db->where('id',$userId);
            //return $user = $this->db->get('student')->row_array();

          } 
          
          
          function updateUser($userId,$formArray){
            $this->db->where('id',$userId);
            $this->db->update('student',$formArray);


          } 
          function deleteUser($userId){
            $this->db->where('id',$userId);
            $this->db->delete('student');

          } 
          
       }


?>