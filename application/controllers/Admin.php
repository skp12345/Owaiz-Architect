<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('admin/pages-login');
	}


	public function login_process()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Admin_model');
		$Iscorrect = $this->Admin_model->login($email, $password);
		if ($Iscorrect) {
			redirect('projectsList');
		} else {
			echo '<script>alert("Wrong email or id")</script>';
			$this->load->view('admin/pages-login');
		}
	}

	public function logout()
	{
		session_unset();
		session_destroy();
		redirect('', 'refresh');
	}

	public function projects()
	{
		$data['project'] = $this->Admin_model->getProjects();
	// 	  echo "<pre>";
    // print_r($data->result());
		$this->load->view('admin/include/header');
		$this->load->view('admin/projects', $data);
		$this->load->view('admin/include/footer');
	}


	public function addproject()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/addproject');
		$this->load->view('admin/include/footer');
	}


	public function addproject_process()
	{
//get the form values
$data['category'] = $this->input->post('category', TRUE);
$data['title'] = $this->input->post('title', TRUE);
$data['location'] = $this->input->post('location', TRUE);
$data['director'] = $this->input->post('director', TRUE);
$data['description'] = $this->input->post('description', TRUE);

$config['upload_path']          = APPPATH . '../assets/upload/gallery/';
$config['allowed_types']        = 'png|jpg|jpeg|PNG|JPG|JPEG|webp';
$config['max_size']        = '1024';
$this->load->library('upload', $config);
//  first image
if (!$this->upload->do_upload('img1')) {
	$error = $this->upload->display_errors();
	// Display error message to user in an alert
	echo $error . "(in first image)";
} else {
	//file is uploaded successfully
	//now get the file uploaded data 
	$upload_data = $this->upload->data();
	//get the uploaded file name
	$data['img1'] = $upload_data['file_name'];
}
//  second image
if (!$this->upload->do_upload('img2')) {
	$error = $this->upload->display_errors('', '');
	// Display error message to user in an alert
	echo $error . "(in second image)";
} else {
	//file is uploaded successfully
	//now get the file uploaded data 
	$upload_data = $this->upload->data();
	//get the uploaded file name
	$data['img2'] = $upload_data['file_name'];
}
//  third image
if (!$this->upload->do_upload('img3')) {
	$error = $this->upload->display_errors('', '');
	// Display error message to user in an alert
	echo $error . "(in third image)";
} else {
	//file is uploaded successfully
	//now get the file uploaded data 
	$upload_data = $this->upload->data();
	//get the uploaded file name
	$data['img3'] = $upload_data['file_name'];
}
//  fourth image
if (!$this->upload->do_upload('img4')) {
	$error = $this->upload->display_errors('', '');
	// Display error message to user in an alert
	echo $error . "(in third image)";
} else {
	//file is uploaded successfully
	//now get the file uploaded data 
	$upload_data = $this->upload->data();
	//get the uploaded file name
	$data['img4'] = $upload_data['file_name'];
}

// images collecion
// $data = [];
   
$count = count($_FILES['files']['name']);

for($i=0;$i<$count;$i++){

  if(!empty($_FILES['files']['name'][$i])){

	$_FILES['file']['name'] = $_FILES['files']['name'][$i];
	$_FILES['file']['type'] = $_FILES['files']['type'][$i];
	$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
	$_FILES['file']['error'] = $_FILES['files']['error'][$i];
	$_FILES['file']['size'] = $_FILES['files']['size'][$i];

	$config['upload_path'] = APPPATH . '../assets/upload/gallery/'; 
	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	$config['max_size'] = '5000';
	$config['file_name'] = $_FILES['files']['name'][$i];

	$this->load->library('upload',$config); 

	if($this->upload->do_upload('file')){
	  $uploadData = $this->upload->data();
	  $filename = $uploadData['file_name'];

	  $data['totalFiles'][] = $filename;
	}
  }

}

// var_dump($data);

// $this->load->view('imageUploadForm', $data); 

// images collecion

if ($this->upload->do_upload('img1') || $this->upload->do_upload('img2') || $this->upload->do_upload('img3') || $this->upload->do_upload('img4')) {
	$this->Admin_model->add_project($data,$data['totalFiles']);
	// echo "<pre>";
	// $data['totalFiles'];
	// print_r($data['totalFiles']);
}
	}


	public function mail_process() {
        // Get the form data
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $subject = $this->input->post('subject');
        $project = $this->input->post('project');
     
// echo $name."</br>";
// echo $phone."</br>";
// echo $subject."</br>";
// echo $project."</br>";
        // Upload the PDF file
        $config['upload_path'] = APPPATH . '../assets/upload/pdf/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 20480; // 2MB
        $this->load->library('upload', $config);

if($project=="career"){
	if (!$this->upload->do_upload('pdf')) {
		// Handle file upload error
		$upload_error = $this->upload->display_errors();
		echo $upload_error;
		log_message('error',$upload_error);
		// You can redirect or display an error message as per your requirement
	} else {
		// File uploaded successfully
		$pdf_data = $this->upload->data();
		$pdf_path = $pdf_data['full_path'];
}

    
    $mdata = array();
			$mdata['name'] = 'Admin';
			$mdata['from'] = EMAIL_FROM;
			$mdata['admin_full_name'] = SITE_NAME;
			$mdata['to'] = 'admin@owaizarchitects.com';
			$mdata['subject'] = "Form Submission with PDF";
			$mdata['title'] = 'Form Submission with Attachment';
			$mdata['message'] = $this->input->post();
            $this->Admin_model->send_mail($mdata, 'contact_mail',$pdf_path);
			$isTrue1= $this->Admin_model->send_mail($mdata, 'contact_mail');
			
		    echo '<script>alert("Mail sent successfully")</script>';
			redirect(base_url().'contact-us');
			
			
}
if($project=="project"){
                $mdata = array();
			$mdata['name'] = 'Admin';
			$mdata['from'] = EMAIL_FROM;
			$mdata['admin_full_name'] = SITE_NAME;
			$mdata['to'] = 'principal@owaizarchitects.com';
			$mdata['subject'] = "Form Submission";
			$mdata['title'] = 'Form Submission';
			$mdata['message'] = $this->input->post();
// $mdata['message'] = 'Hiii ';
           $isTrue2= $this->Admin_model->send_mail($mdata, 'contact_mail');
		   echo '<script>alert("Mail sent successfully")</script>';
		   redirect(base_url().'contact-us');
        }
        redirect(base_url().'contact-us');
}


	public function editProject($id)
	{
		$data['project'] = $this->Admin_model->getProjects();
		$this->load->view('admin/include/header');
		$this->load->view('admin/editProject', $data);
		$this->load->view('admin/include/footer');
	}
	public function editProjectbyid($id)
	{
		$data['project'] = $this->Admin_model->editProjectbyid($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/editProject', $data);
		$this->load->view('admin/include/footer');
	}

	public function editProject_process($id)
	{
		//get the form values
		$data['category'] = $this->input->post('category', TRUE);
		$data['title'] = $this->input->post('title', TRUE);
		$data['location'] = $this->input->post('location', TRUE);
		$data['director'] = $this->input->post('director', TRUE);
		$data['description'] = $this->input->post('description', TRUE);

		$config['upload_path']          = APPPATH . '../assets/upload/gallery/';
		$config['allowed_types']        = 'png|jpg|jpeg|PNG|JPG|JPEG|webp';
		$config['max_size']        = '1024';
		$this->load->library('upload', $config);
		//  first image
		if (!$this->upload->do_upload('img1')) {
			$data['img1'] = $this->input->post('selected_img1', TRUE);
		} else {
			$upload_data = $this->upload->data();
			$data['img1'] = $upload_data['file_name'];
		}
		//  second image
		if (!$this->upload->do_upload('img2')) {
			$data['img2'] = $this->input->post('selected_img2', TRUE);
		} else {

			$upload_data = $this->upload->data();
			$data['img2'] = $upload_data['file_name'];
		}
		//  third image
		if (!$this->upload->do_upload('img3')) {
			$data['img3'] = $this->input->post('selected_img3', TRUE);
		} else {
			$upload_data = $this->upload->data();

			$data['img3'] = $upload_data['file_name'];
		}
		//  third image
		if (!$this->upload->do_upload('img4')) {
			$data['img4'] = $this->input->post('selected_img4', TRUE);
		} else {
			$upload_data = $this->upload->data();

			$data['img4'] = $upload_data['file_name'];
		}


// images collecion
// $data = [];
   
$count = count($_FILES['files']['name']);

for($i=0;$i<$count;$i++){

  if(!empty($_FILES['files']['name'][$i])){

	$_FILES['file']['name'] = $_FILES['files']['name'][$i];
	$_FILES['file']['type'] = $_FILES['files']['type'][$i];
	$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
	$_FILES['file']['error'] = $_FILES['files']['error'][$i];
	$_FILES['file']['size'] = $_FILES['files']['size'][$i];

	$config['upload_path'] = APPPATH . '../assets/upload/gallery/'; 
	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	$config['max_size'] = '5000';
	$config['file_name'] = $_FILES['files']['name'][$i];

	$this->load->library('upload',$config); 

	if($this->upload->do_upload('file')){
	  $uploadData = $this->upload->data();
	  $filename = $uploadData['file_name'];

	  $data['totalFiles'][] = $filename;
	}
  }

}

		$this->Admin_model->update_project($data,$data['totalFiles'], $id);
	}

	public function deleteProject($id)
	{
		$this->Admin_model->deleteProject($id);
	}



}
