<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->template->load('Template','index');
	}

	public function permintaanlogistik()
	{
		$data = array(
			'logistik' => $this->Model_utama->logistik()
			);
		$this->template->load('Template','permintaanlogistik',$data);
	}

	public function daftarfeedback()
	{
		$this->template->load('Template','feedback');
	}

	public function permintaandetail()
	{
		$this->template->load('Template','permintaandetail');
	}
}
