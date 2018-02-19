<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class model5 extends CI_Model {
  public function getall_comments($email,$name,$comment,$image,$status){
   $this->db->insert('allcomments', array('email'=>$email, 'name'=>$name,'comment'=>$comment,'image'=>$image,'status'=>$status)); 
  }
  public function getapprove_view(){
      $this->db->order_by('allcomments.date','DESC');
  	 $query = $this->db->get_where('allcomments', array('status' => 1));

     return $query->result_array();
  }
    public function getreject_view(){
       $query = $this->db->get_where('allcomments', array('status' => -1));
     return $query->result_array();
  }
  public function check_admin($login,$password){
  	     $query = $this->db->get_where('admin', array('login' => $login, 'password' => $password));
    	 if($query->num_rows() > 0){
    	 	return true;
    	 }
    	 return false;
  }
  public function get_comm(){
       $query = $this->db->get_where('allcomments', array('status' => 0));
     return $query->result_array();
  }

  public function getapprove_comments($id){
    $data = array(
     'status' => 1,
   );
     $this->db->where('id', $id);
     $this->db->update('allcomments', $data); 

  }
    public function getreject_comments($id){
    $data = array(
     'status' => -1,
   );
     $this->db->where('id', $id);
     $this->db->update('allcomments', $data); 
  }
  public function update_comm($id,$value){
      $data = array(
     'comment' => $value,
   );

$this->db->where('id', $id);
$this->db->update('allcomments', $data); 
  }
}