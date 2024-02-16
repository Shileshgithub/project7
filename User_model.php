<?php

class User_model extends CI_model{


    function create($formArray , $student_s){

        $this->db->insert('student',$formArray);

        $student_s['student_id'] = $this->db->insert_id();

        $this->db->insert('library',$student_s);



         }
        public function all(){
              //return $users = $this->db->get('student')->result_array();
              $this->db->select('*');
              $this->db->from('student');
              $this->db->join('library','student.id = library.student_id');
              $users = $this->db->get();
              return  $users->result_array();
             

              }

          function getUser($userId){
            $this->db->where('id',$userId);
            return $user = $this->db->get('student')->row_array();

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