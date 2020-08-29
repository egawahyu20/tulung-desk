<?php

class Dashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data = $this->admin_model->get_data_admin();
		$this->load->view("templates/admin/header", $data);
		$this->load->view("templates/admin/sidebar", $data);
		$this->load->view("templates/admin/topbar", $data);
		$this->load->view("admin/dashboard", $data);
		$this->load->view("templates/admin/footer");
	}
}