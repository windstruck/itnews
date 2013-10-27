<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {
	
	public function __construct()
       {
            parent::__construct();
            $this->load->database();
			$this->load->helper('url');	
			$this->load->model('newsModel');
       }	
	   
	public function index(){	
		$this->load->view('tools/news/addnews');
	}
	
	function addCat(){
	$CPOST = $this->input->post();	
    
		$dataMC['name'] = $CPOST['name'];		
		$dataMC['description'] = $CPOST['desc'];		
		$dataMC['status'] = "1";
		$dataMC['create_date'] =   date('Y-m-d H:i:s');
		$dataMC['meta_desc'] = $CPOST['metadesc'];		
		$dataMC['meta_key'] = $CPOST['metakey'];
		$dataMC['meta_data'] = $CPOST['metadata'];
		
		$dataAll['category'] = $dataMC;
		echo $this->newsModel->add_category($dataAll);
	}
	
	public function addImages(){
		$this->load->view('tools/news/addImages');
	}
}
?>