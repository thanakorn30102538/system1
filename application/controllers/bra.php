<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bra extends CI_Controller {
	public function __construct()
	{
 
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('User_model');
		$this->load->model('Project_model');   
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
		$this->load->view('branch/login');
	}
	public function login_process(){
		$user_login=array(
	   
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password')
	   
		);
	   
		$data=$this->User_model->login_user($user_login['username'],$user_login['password']);
		if($data['status'] == 'Branch Leader')
			{
			  $this->session->set_userdata('user_id',$data['user_id']);
			  $this->session->set_userdata('username',$data['username']);
			  $this->session->set_userdata('password',$data['password']);
			  $this->session->set_userdata('name',$data['name']);
			  $this->session->set_userdata('surname',$data['surname']);
			  $this->session->set_userdata('status',$data['status']);
			  $this->session->set_userdata('phone',$data['phone']);
			  $this->session->set_userdata('email',$data['email']);
			  
				
			  redirect('index.php/bra/home');
	   
		}else{
			  
			  
			  redirect('index.php/bra/error');
		}

	}	
	public function error()
	{
		$this->load->view('branch/wrong');
	}  	
	public function home()
	{
		$this->load->view('branch/home');
	}
}
