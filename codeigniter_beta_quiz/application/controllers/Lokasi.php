<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('perusahaan_model');
	}
	public function index($id)
	{
		$data['lokasi']=$this->perusahaan_model->getlokasi($id);
		$this->load->view('lokasi',$data);	
	}
	

}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>