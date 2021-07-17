<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$this->load->view('header');
		$this->load->view('blank');
	}
	public function GiziKu()
	{
		$this->load->view('header');
		//$this->load->view('blank');
		
	}
	public function Home()
	{
		$this->load->view('header');
		//$this->load->view('blank');
		
	}
	public function Pasien()
	{
		
		$this->load->view('AnggotaLanding');
		
	}
	public function InputPasien()
	{
		$this->load->view('AnggotaLanding1');
		$this->load->view('InputPasien');
		
	}
	public function InformasiPasien()
	{
		$this->load->view('AnggotaLanding1');
		$this->load->view('readpasien');
		
		
	}
	public function CariPasien()
	{
		$this->load->view('AnggotaLanding1');
		$this->load->view('updatepasien');
	}
	public function HapusP()
	{
		$this->load->view('AnggotaLanding1');
		$this->load->view('hapuspasien');
	}
	public function LayananRuangInap()
	{
		$this->load->view('ruanginaplanding');
		
	}
	public function InputRawatInap()
	{
		$this->load->view('ruanginaplanding1');
		$this->load->view('inputruanginap');
		
	}
	public function InformasiPasien1()
	{
		$this->load->view('ruanginaplanding1');
		$this->load->view('readruanginap');
		
	}
	public function CariPasien1()
	{
		$this->load->view('ruanginaplanding1');
		$this->load->view('updatelayananruanginap');
	}
	public function HapusP1()
	{
		$this->load->view('ruanginaplanding1');
		$this->load->view('hapusruanginap');
	}
	public function LayananGizi()
	{
		$this->load->view('layanangizilanding');
	}
	public function InputGizi()
	{
		$this->load->view('layanangizilanding1');
		$this->load->view('inputlayanangizi');
	}
	public function InformasiGizi()
	{
		$this->load->view('layanangizilanding1');
		$this->load->view('readlayanangizi');
		
	}
	public function CariGizi()
	{
		$this->load->view('layanangizilanding1');
		$this->load->view('updatelayanangizi');
	}
	public function HapusGizi()
	{
		$this->load->view('layanangizilanding1');
		$this->load->view('hapuslayanangizi');
	}
	
}
