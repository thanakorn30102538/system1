<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stu extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
        $this->load->model('User_model');
		
        $this->load->helper('url');
        $this->load->library('session');
        
    } 


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		$this->load->view('student/login');
    }

    public function login_process()
    {
		$user_login=array(
	   
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password')
	   
		);
	   
		$data=$this->User_model->login_user($user_login['username'],$user_login['password']);
		if($data['status'] == 'Student')
			{
			  $this->session->set_userdata('user_id',$data['user_id']);
			  $this->session->set_userdata('username',$data['username']);
			  $this->session->set_userdata('password',$data['password']);
			  $this->session->set_userdata('name',$data['name']);
			  $this->session->set_userdata('surname',$data['surname']);
			  $this->session->set_userdata('status',$data['status']);
			  $this->session->set_userdata('phone',$data['phone']);
			  $this->session->set_userdata('email',$data['email']);
			  $this->session->set_userdata('image',$data['image']);
			  
				
			  redirect('index.php/stu/home');
	        }else{
			  redirect('index.php/stu/error');
		    }
        
    }

    public function error()
	{
		$this->load->view('student/wrong');
	}	
	public function home()
	{
		$this->load->view('student/home');
	}
	public function show_project()
	{
		$data['project'] = $this->Project_model->get_all_project();
		$this->load->view('student/show_project.php',$data);
	}

	public function view_project($project_id)
	{

		$data['project'] = $this->Project_model->get_project($project_id);
		$this->load->view('student/information.php',$data);
	}
}