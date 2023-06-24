<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  }
  public function errorPage()
  {
    $this->load->view('error_page');
  }
  public function index()
  {
    $data['project'] = $this->Admin_model->getProjects();
    $data['title'] = "Home";
    $data['content'] = $this->load->view('frontend/home/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }

  public function aboutUs()
  {
    $data['title'] = "Firm";
    $data['content'] = $this->load->view('frontend/about/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }
  public function team()
  {
    $data['title'] = "Team";
    $data['content'] = $this->load->view('frontend/team/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }
  public function portfolio()
  {
    $data['project'] = $this->Admin_model->getProjects();

    $data['title'] = "Portfolio";
    $data['category'] = 'ALL';
    $data['content'] = $this->load->view('frontend/portfolio/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }


  public function project_ajax() {
		// $query = $this->input->post('query');
		// $data['results'] = $this->Admin_model->getProjects_by_ajax($query);
		$this->load->view('portfolio/project_view');
	}

  public function project_normal($category){
    $data['project'] = $this->Admin_model->getProjects_normal($category);
    $data['title'] = "Portfolio";
    $data['category'] = $category;
    $data['content'] = $this->load->view('frontend/portfolio/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }

  public function xcb($id)
  {
    $data['project'] = $this->Admin_model->getProjectsByid($id);
    $data['title'] = "project details";
    $data['content'] = $this->load->view('frontend/project/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }
  public function career()
  {
    $data['title'] = "career details";
    $data['content'] = $this->load->view('frontend/career/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }

  public function contactUs()
  {
    $data['title'] = "Contact Us";
    $data['content'] = $this->load->view('frontend/contact/index', $data, true);
    return $this->load->view('frontend/layout/master_front', $data);
  }
  public function project($id)
  {
    $data['title'] = "project details";
    $category=$this->Admin_model->getProject_category($id);
    $data['related_project'] = $this->Admin_model->getProjectBycategory($category,$id);
    $data['project'] = $this->Admin_model->getProjectsByid($id);
    $data['content']= $this->load->view('frontend/project/index', $data,true);
    return $this->load->view('frontend/layout/master_front', $data);
    
  }
}
