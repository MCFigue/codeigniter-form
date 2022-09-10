<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('getMenu','url'));
	}
	public function index()
	{
		$data['menu']=main_menu();
		$this->load->view('perfil',$data);
	}
}
