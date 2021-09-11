<?php

/*include 'application/models/NameModel.php';*/

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('addname');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{			

		$NameModel = new NameModel();
		$data = [
			'name' => $this->request->getVar('name'),
			'email'  => $this->request->getVar('email'),
		];
		$NameModel->insert($data);
		return $this->response->redirect(site_url('/namelist'));
	}

	public function register1()
	{			
		$this->load->model('NameModel');
		$this->NameModel->insertUserData();
	}

}
