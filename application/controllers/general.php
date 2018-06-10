<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class general extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
		$this->load->model('Project_model');
		
		$this->load->helper('url');
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
	public function home()
    {
        $data['project'] = $this->Project_model->get_all_project();
	
		
		$this->load->view('general/home2.php',$data);
	
    }
	public function view_project($project_id)
	{

		$data['project'] = $this->Project_model->get_project($project_id);
		$this->load->view('general/information.php',$data);
	}
}
