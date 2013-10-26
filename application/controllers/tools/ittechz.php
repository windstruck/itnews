<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ittechz extends CI_Controller {
	
	public function __construct()
       {
            parent::__construct();
            $this->load->database();
			$this->load->helper('url');		
       }	
	   
	public function index(){	
		$this->load->view('tools/header_tool');
		$this->load->view('tools/template');
		$this->load->view('tools/footer_tool');
	}
	
	function includemenu(){	
		$this->load->view('tools/menu_tool');
	}
}
?>