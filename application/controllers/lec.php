<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lec extends CI_Controller 
{
	public function __construct()
	{
 
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('News_model');
		$this->load->model('User_model');
		$this->load->model('Project_model');  
        $this->load->library('session');
 
	}

	public function login()
	{
		$this->load->view('lecturer/login');
	}

	public function login_process(){
		$user_login=array(
	   
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password')
	   
		);
	   
		$data=$this->User_model->login_user($user_login['username'],$user_login['password']);
		if($data['status'] == 'Lecturer')
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
			  
				
			  redirect('index.php/lec/home');
	   
		}else{
			  
			  
			  redirect('index.php/lec/error');
		}

	}

	public function error()
	{
		$this->load->view('lecturer/wrong');
	}

	public function home()
	{
		$this->load->view('lecturer/home');
	}

	public function manage_project()
	{
		
		$data['project'] = $this->Project_model->get_all_project();
		$this->load->view('lecturer/manage_project.php',$data);
	}

	public function add_project()
	{
		
		if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'project_name' => $this->input->post('project_name'),
				'year' => $this->input->post('year'),
				'category' => $this->input->post('category'),
				'maker1' => $this->input->post('maker1'),
				'maker2' => $this->input->post('maker2'),
				'teacher' => $this->input->post('teacher'),
				'Abstract' => $this->input->post('Abstract'),
				'date_upload' => $this->input->post('date_upload'),
				'date_comp' => $this->input->post('date_comp'),
				
            );
            
            $project_id = $this->Project_model->add_project($params);
            redirect('index.php/lec/manage_project');
        }
        else
        {   
			$this->load->view("lecturer/add_project.php");
        }
	}

	public function edit_project($project_id)
	{
        // check if the student exists before trying to edit it
        $data['project'] = $this->Project_model->get_project($project_id);
        $this->load->view('lecturer/Edit_project.php',$data);
        
        if(isset($data['project']['project_id']))
        {
			if(isset($_POST) && count($_POST) > 0)     
            {   
				$params = array(
					
					'project_name' => $this->input->post('project_name'),
					'year' => $this->input->post('year'),
					'category' => $this->input->post('category'),
					'maker1' => $this->input->post('maker1'),
					'maker2' => $this->input->post('maker2'),
					'teacher' => $this->input->post('teacher'),
					'Abstract' => $this->input->post('Abstract'),
					'date_upload' => $this->input->post('date_upload'),
					'date_comp' => $this->input->post('date_comp'),
					);
	
				$project_id = $this->Project_model->update_project($project_id,$params);
				redirect('index.php/lec/manage_project');
	
            }
            else
            {
                $this->load->view("lecturer/edit_project.php",$data);
            }
		}    
    }
	
	public	function delete_project($project_id)
	{
		$project = $this->Project_model->get_project($project_id);

        // check if the user exists before trying to delete it
        if(isset($project['project_id']))
        {
            $this->Project_model->delete_project($project_id);
            redirect('index.php/lec/manage_project');
        }
		else
		{
		show_error('The user you are trying to delete does not exist.');
		}
	}
	public function manage_news()
	{
		$data['news'] = $this->News_model->get_all_news();
		$this->load->view('lecturer/manage_news.php',$data);
	}

	public function add_news()
	{
		
		if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'about' => $this->input->post('about'),
				'information' => $this->input->post('information'),
				'date_post' => $this->input->post('date_post'),
				
            );
            
            $news_id = $this->News_model->add_news($params);
            redirect('index.php/lec/manage_news');
        }
        else
        {   
			$this->load->view("lecturer/add_news.php");
        }
	}

	public function edit_news($news_id)
	{
        // check if the student exists before trying to edit it
        $data['news'] = $this->News_model->get_news($news_id);
        $this->load->view('lecturer/Edit_project.php',$data);
        
        if(isset($data['project']['project_id']))
        {
			if(isset($_POST) && count($_POST) > 0)     
            {   
				$params = array(
					
					'about' => $this->input->post('about'),
					'information' => $this->input->post('information'),
					'date_post' => $this->input->post('date_post'),
				
				);
	
				$project_id = $this->News_model->update_news($news_id,$params);
				redirect('index.php/lec/manage_news');
	
            }
            else
            {
                $this->load->view("lecturer/edit_news.php",$data);
            }
		}    
    }
	
	public	function delete_news($news_id)
	{
		$project = $this->User_model->get_news($news_id);

        // check if the user exists before trying to delete it
        if(isset($news['news_id']))
        {
            $this->News_model->delete_news($news_id);
            redirect('index.php/lec/manage_news.php');
        }
		else
		{
		show_error('The user you are trying to delete does not exist.');
		}
	}

	public function show_project()
	{
		$data['project'] = $this->Project_model->get_all_project();
		$this->load->view('lecturer/show_project.php',$data);
	}

	public function view_project($project_id)
	{

		$data['project'] = $this->Project_model->get_project($project_id);
		$this->load->view('lecturer/information.php',$data);
	}
}