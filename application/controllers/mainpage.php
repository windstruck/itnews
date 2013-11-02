<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mainpage extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            //$this->load->database();
			$this->load->helper('url');

       }	
	public function index(){
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
	
	function inner(){
		$this->load->view('header');
		$this->load->view('inner');
		$this->load->view('footer');
	}
}
?>