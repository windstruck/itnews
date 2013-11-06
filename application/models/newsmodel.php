<?php
class newsModel extends CI_Model {
	public function __construct()
       {
            parent::__construct();
            $this->load->database();
			$this->load->helper('url');
       }	
	function add_category($data){
	
		$input_category = $data['category'];	
		//--------------------------------------------------------
		$result = $this->db->insert('itt_category',$input_category);
			
		if($result){
			echo "insert complete";
		}else{
			echo "insert error";
		}
		

	}
	
	function get_category(){
		$query = $this->db->query('select * from itt_category order by id');
		$result = $query->result();
		return $result;
	}
	
	function add_article($data){
	
		$input_article = $data['article'];
		//--------------------------------------------------------
		$result = $this->db->insert('itt_article',$input_article);
			
		if($result){
			echo "insert complete";
		}else{
			echo "insert error";
		}
	
	
	}
	
}
?>