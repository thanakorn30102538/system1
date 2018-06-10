<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ad extends CI_Controller 
{
	public function __construct()
	{
 
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
  	 	$this->load->model('User_model');
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
		$this->load->view('admin/login.php');
	}
	public function login_process(){
		$user_login=array(
	   
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password')
	   
		);
	   
		$data=$this->User_model->login_user($user_login['username'],$user_login['password']);
		if($data['status'] == 'Admin')
			{
			  $this->session->set_userdata('user_id',$data['user_id']);
			  $this->session->set_userdata('username',$data['username']);
			  $this->session->set_userdata('password',$data['password']);
			  $this->session->set_userdata('name',$data['name']);
			  $this->session->set_userdata('surname',$data['surname']);
			  $this->session->set_userdata('status',$data['status']);
			  $this->session->set_userdata('phone',$data['phone']);
			  $this->session->set_userdata('email',$data['email']);
			  
				
			  redirect('index.php/ad/home',$data);
	   
		}else{
			  
			  
			  redirect('index.php/ad/error');
		}

	}	
	public function error()
	{
		$this->load->view('admin/wrong.php');
	}   
	
	public function home()
	{
		$data['users'] = $this->User_model->get_all_users();
		$this->load->view('admin/home.php',$data);
	}

	function profile()
	{

		$this->load->view('admin/profile.php');
	}

	public function manage_user()
	{
		$data['users'] = $this->User_model->get_all_users();
		$this->load->view('admin/Manage_user.php',$data);
	}
	public function add_user()
	{
		
		if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(

				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'surname' => $this->input->post('surname'),
				'status'=> $this->input->post('status'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'image' => $this->input->post('image'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('index.php/ad/manage_user');
        }
        else
        {   
			$this->load->view("admin/add_user.php");
        }
	}

	public function query_user($user_id){
		if($user_id != 0){
			$data['result'] = $this->User_model->get_user($user_id);
			$this->load->view('admin/edit_user',$data);
		}else{
			redirect('ad/home');
		}
		
	}

	public function edit_user($user_id)
    {   
		$data['users'] = $this->User_model->get_user($user_id);
		$this->load->view('admin/edit_user',$data);
        
        if(isset($data['users']['user_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'name' => $this->input->post('name'),
					'surname' => $this->input->post('surname'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'image' => $this->input->post('image'),
                );

                $this->User_model->update_user($user_id,$params);            
                redirect('index.php/ad/manage_user');
            }
            else
            {
                $this->load->view('admin/edit_user.php',$data);
            }
        }
        else
            show_error('The news you are trying to edit does not exist.');
	}
		
	function delete_user($user_id)
	{
		$user = $this->User_model->get_user($user_id);

        // check if the user exists before trying to delete it
        if(isset($user['user_id']))
        {
            $this->User_model->delete_user($user_id);
            redirect('index.php/ad/manage_user');
        }
		else
		{
		show_error('The user you are trying to delete does not exist.');
		}
	}	


			
    public function logout() {

		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		redirect('ad');
	}	
		
}