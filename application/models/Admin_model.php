<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  public function __construct() 
  {
    
    parent::__construct(); 
  }

  public function login($email,$password){
 
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('admin');
    if ($query->num_rows() == 1) {
      $row = $query->row();
      $_SESSION["email"] = $email;
    //   echo "Logged in successfully";
      return true;
    } else {
        // echo "Wrong credential";
    //   return false;
    }
  }

  // echo "<pre>";
    // print_r($value);


    public function add_project($data,$value){
    // echo "<pre>";
    // print_r($value);
      $data["totalFiles"]=json_encode($value);
          $query = $this->db->insert('projects', $data);
          redirect('projectsList');
        }



  public function getProjects(){
    $this->db->select('*');
    $this->db->from('projects');
    return $this->db->get();
  }

  public function getProjects_by_ajax($category){
    $this->db->where('category', $category);
    $this->db->from('projects');
     $value=$this->db->get();
     return $value->result();
  }

  public function getProjects_normal($category){
    $this->db->where('category', $category);
    $this->db->from('projects');
     $value=$this->db->get();
     return $value;
  }

  public function getProjectsByid($id){
    $this->db->where('id', $id);
    $this->db->from('projects');
    return $this->db->get();
  }

  public function getProjectBycategory($category,$Id){
    $this->db->where('category', $category);
    // $this->db->from('projects');
    $this->db->where('id !=', $Id);
    return $this->db->get('projects', 2);;
  }

  public function getProject_category($id){
    $this->db->where('id', $id);
    $this->db->from('projects');
    $data= $this->db->get();
    foreach($data->result() as $data){
     return  $data->category;
    }
  }

  public function deleteProject($id){
    $this->db->where('id', $id);
    $this->db->delete('projects');
    redirect('projectsList','refresh');
  }




  public function editProjectbyid($id){
    $this->db->where('id', $id);
    $this->db->from('projects');
    return $this->db->get();
  }


    


  public function update_project($data,$value,$id){
    $data["totalFiles"]=json_encode($value);
    $this->db->where('id',$id);
		$query = $this->db->update('projects', $data);
    redirect('projectsList');
  }
  
  
  public function send_mail($data, $template_name,$attachment='')
    {
        $config = array();
        // $config['protocol'] = 'smtp';
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_host'] = EMAIL_SMTP_HOST;
        $config['smtp_user'] = EMAIL_SMTP_USER;
        $config['smtp_pass'] = EMAIL_SMTP_PASS;
        $config['smtp_port'] = EMAIL_SMTP_PORT;
        $config['smtp_timeout'] = '80';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->set_mailtype('html');
        $this->email->from($data['from']);
        $this->email->to($data['to']);
        $this->email->subject($data['subject']);
        $message_body = $this->load->view("mailscripts/" . $template_name, $data, true);
        // echo $message_body;
        // exit();
        $this->email->message($message_body);
        if(!empty($attachment)){
        $this->email->attach($attachment);
        }
        $result = $this->email->send();
        log_message('error',$result);
        $this->email->clear();
        return 1;
    }

  

}