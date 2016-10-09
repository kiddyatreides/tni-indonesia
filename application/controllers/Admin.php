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
		$data = array(
			'pesans' => $this->Model_utama->inboxatas()
		);
		$this->template->load('Template','index',$data);
	}

	public function permintaanlogistik()
	{
		$data = array(
			'pesans' => $this->Model_utama->inboxatas(),
			'logistik' => $this->Model_utama->logistik()
			);
		$this->template->load('Template','permintaanlogistik',$data);
	}

	public function kodamdetail($id)
	{
		$data = array(	'pesans' => $this->Model_utama->inboxatas(),
						'logistik' => $this->Model_utama->logistik(),
						'kodam' => $this->Model_utama->kodamdetail($id),
						'laporankodam' => $this->Model_utama->laporankodam($id),
						'laporankodam2' => $this->Model_utama->laporankodam2($id),
						'countlogistik' => $this->Model_utama->countlogistik($id)
			);
		$this->template->load('Template','permintaandetail',$data);
	}

	public function daftarfeedback()
	{
		$data = array(
			'pesans' => $this->Model_utama->inboxatas(),
			'feedback' => $this->Model_utama->feedback()
			);
		$this->template->load('Template','feedback', $data);
	}

	public function isifeedback()
	{
		$data = array(
			'pesans' => $this->Model_utama->inboxatas(),
			'feedback' => $this->Model_utama->feedback()
			);
		$this->template->load('Template','isifeedback', $data);
	}

	public function pesanmasuk()
	{
		$data = array(
			'pesans' => $this->Model_utama->inboxatas(),
			'pesan' => $this->Model_utama->inbox()
		);
		$this->template->load('Template','inbox',$data);
	}

	public function mintalogistik()
	{
		$data = array(
			'pesans' => $this->Model_utama->inboxatas()
			);
		$this->template->load('Template','mintalogistik');
	}


	public function mintalogistikprocess()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
				$id_fungsi = $this->input->post("idfungsi");
				$qty = $this->input->post("qty");

				$q = $this->Model_utama->addMintaLogistik($id_fungsi,$qty);
				if($q!=0)
				{	
					$data = array(
						'pesans' => $this->Model_utama->inboxatas()
						);
					$this->template->load('Template','mintalogistik');
				}
				else{
					echo "error";
				}
	}

	public function apitni()
	{

		$this->template->load('Template','api');
	}
}
