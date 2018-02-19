<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class contr extends CI_Controller {
  public function __construct(){
    parent:: __construct();
    $this->load->library('migration');

if ( ! $this->migration->current())
{
  show_error($this->migration->error_string());
}
  }
  public function index(){
     $this->load->helper('form');
     $this->load->model("model5");
    $data5['approve_com']=$this->model5->getapprove_view();
    $this->load->view("home",$data5);
  }
    public function options_user(){
    $email = $this->input->post("email");
    $name = $this->input->post("name");
    $comment = $this->input->post("comment");
    $status = 0;
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $a = $this->upload->data();
        $image=$a['client_name'];      
      $config1 = array(
           'image_library'=>'gd2',
           'source_image'=>$a['full_path'],
           'new_image'=>APPPATH.'./images/Thumbs',
            'create_thumb'=> TRUE,
            'maintain_ratio'=> TRUE,
            'width'=>320,
            'height'=>240,
        );
       $this->load->library('image_lib', $config1); 
       $this->image_lib->resize();  
       $this->load->model("model5");
      $this->model5->getall_comments($email,$name,$comment,$image,$status);  
  }
    public function admin(){
       $this->load->view("admin");
    }
    public function check_admin(){
        $login = $this->input->post("login");
        $password = $this->input->post("password");
        $this->load->model("model5");
        if($this->model5->check_admin($login,$password)){
           $data['all_comments'] = $this->model5->get_comm();
            $data['app_comments'] = $this->model5->getapprove_view();
            $data['rej_comments'] = $this->model5->getreject_view();
          $this->load->view('adminhome', $data);
        }
    } 
    public function approve(){
      $id = $this->input->post("id");
    $this->load->model("model5");
     $this->model5->getapprove_comments($id); 
    }
   public function reject(){
    $id = $this->input->post("id");
    $this->load->model("model5");
     $this->model5->getreject_comments($id); 
    }
    public function update_comm(){
      $id = $this->input->post("id");
      $value = $this->input->post("value");
      $this->load->model("model5");
     $this->model5->update_comm($id,$value);

    }
}
