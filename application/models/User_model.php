<?php
class User_model extends CI_Model{
    public function add_user($formArray){
        $this->db->insert('users',$formArray);
    }
    public function getUsers(){
      $users =  $this->db->get('users')->result_array();
      return $users;
    }
    public function editUser($id){
      $query = $this->db->get_where('users',['id' => $id]);
      return $query->row_array();
    }
    
    public function updateUser($data,$id){
      return $this->db->update('users', $data ,['id' => $id]);

    }
    public function deleteUser($id){

      return $this->db->delete('users',['id' => $id]);
    }
}
