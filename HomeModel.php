<?php

class HomeModel extends CI_model{


    function create($formArray,$student_t,$student_address,$cost_t)
    {

        $this->db->insert('student',$formArray);
        $last_id = $this->db->insert_id();

       $student_t['student_id'] =  $last_id;
       $this->db->insert('library',$student_t);     

       $student_address['student_id'] = $last_id;
       $this->db->insert('add',$student_address); 

       $cost_t['student_id'] =  $last_id;
       $this->db->insert('cost',$cost_t);

    }

         public function all()
         {
          //return $users = $this->db->get('student')->result_array();


          $this->db->select('*');
          $this->db->from('student');
          $this->db->join('library','student.id = library.student_id');
          $this->db->join('add','add.student_id = student.id');
          $this->db->join('cost','cost.student_id = student.id');
          
          $users= $this->db->get();
          return $users->result_array();
        }


          function getUser($userId)
          {
            $this->db->select('student.*,library.city,library.country,add.address,cost.category');
            $this->db->from('student');
            $this->db->join('library','student.id = library.student_id');
            $this->db->join('add','add.student_id = student.id');
            $this->db->join('cost','cost.student_id = student.id');
           

            $this->db->where('student.id',$userId);
            $users= $this->db->get();
            return $users->row_array();
                                   //$this->db->where('id',$userId);
                                   //return $user = $this->db->get('student')->row_array();
              }

           function updateUser($userId,$formArray,$student_address,$cost_t)
           {
            $this->db->where('id',$userId);
            $this->db->update('student',$formArray);
            $this->db->update('add',$student_address);
            $this->db->update('cost',$cost_t);
            } 

          function deleteUser($userId)
          {
            $this->db->where('id',$userId);
            $this->db->delete('student');
            $this->db->delete('add');
            $this->db->delete('cost');
          
          } 
          
       }


?>