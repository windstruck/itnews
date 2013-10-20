<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            //$this->load->database();
			$this->load->helper('url');

       }	
	public function index(){
	$data['test1'] = "aaaa";
	$data['menu'] = 'menu may';
	$this->load->view('template' , $data);
	}
	
	function test2(){
	
	}
	
	
}
?>