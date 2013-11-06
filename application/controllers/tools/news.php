<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {
	
	public function __construct()
       {
            parent::__construct();
            $this->load->database();
			$this->load->helper('url');	
			$this->load->model('newsModel');
			$this->load->helper(array('form', 'url'));
			
       }	
	   
	public function index(){	
		
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); // don't show warning
		
		//ckeditor
/* 		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
		
		$this->ckeditor->basePath = base_url().'plugin/ckeditor/';
		$this->ckeditor->config['toolbar'] = array(
				array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
		);
		$this->ckeditor->config['language'] = 'th';
		$this->ckeditor->config['width'] = '730px';
		$this->ckeditor->config['height'] = '300px';
		
		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor, '../../plugin/ckfinder');
 */		
		//
		
		$imgNameCrop =$this->input->get("imgNameCrop");
		$data['imgNameCrop'] = $imgNameCrop;
				
		$this->load->view('tools/header_tool');
		$this->load->view('tools/news/addnews', $data);
		$this->load->view('tools/footer_tool');
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
		$dataMC['image'] = $CPOST['imgname'];
		
		$dataAll['category'] = $dataMC;
		echo $this->newsModel->add_category($dataAll);
	}
	

	function addImages(){	
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); // don't show warning
		
		$this->load->view('tools/news/addImages');
	}
	
	function do_upload()
	{
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg';
// 		$config['max_size']	= '100';
// 		$config['max_width']  = '1024';
// 		$config['max_height']  = '768';
	
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('fileUpload'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo 'error';exit;
			$this->load->view('tools/news/addImages', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
	
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); // don't show warning
			
			$this->load->view('tools/news/addImages', $data);
		}
	}
	
	function do_crop(){
		// สำหรับเซฟรูปที่ถูก crop แล้วลงโฟเดอร์เก็บรูป
		$CPOST = $this->input->post();
		
		if ($CPOST['chCrop']=="ok"){
			
			$targ_w = $targ_h = 150;
			$jpeg_quality = 90;
			$imgNameFull = $CPOST['imgnameFull'];
			$imgPath = $CPOST['imgPath'];
			$imgName = $CPOST['imgname'];
			
// 			$src = "images/".$imgName;
			$src = $imgNameFull;
			$img_r = imagecreatefromjpeg($src);
			$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
			
			imagecopyresampled($dst_r,$img_r,0,0,$CPOST['x'],$CPOST['y'],
					$targ_w,$targ_h,$CPOST['w'],$CPOST['h']);
			
			// 		header('Content-type: image/jpeg');
			// 		imagejpeg($dst_r,null,$jpeg_quality);
			imagejpeg($dst_r, $imgPath.time().$imgName,$jpeg_quality);
			
			// Free up memory
			imagedestroy($dst_r);
			// 		exit;
			
			$data['imgNameCrop'] = time().$imgName;
			
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); // don't show warning
			
			$this->load->view('tools/news/addImages', $data);
			
		}else{
			echo 'error';exit;
		}
	}
	
	function addArticle(){
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); // don't show warning
		
		$imgNameCrop =$this->input->get("imgNameCrop");
		$data['imgNameCrop'] = $imgNameCrop;
		$data['catList'] = $this->newsModel->get_category();
		
		$this->load->view('tools/header_tool');
		$this->load->view('tools/news/addarticle', $data);	
		$this->load->view('tools/footer_tool');
		
		
	}
	
	function InsertArticle(){
		$CPOST = $this->input->post();
	
		$dataMC['title'] = $CPOST['title'];
		$dataMC['alias'] = $CPOST['alias'];
		$dataMC['intro_text'] = $CPOST['s_desc'];
		$dataMC['full_text'] = $CPOST['desc'];
		$dataMC['cat_id'] = $CPOST['idparent'];
		$dataMC['status'] = $CPOST['status'];
		$dataMC['create_date'] = $CPOST['metadata'];
		$dataMC['image'] = $CPOST['imgname'];
		$dataMC['meta_desc'] = $CPOST['metadesc'];
		$dataMC['meta_key'] = $CPOST['metakey'];
		$dataMC['meta_data'] = $CPOST['metadata'];
		$dataMC['author'] = $CPOST['autor'];
	
		$dataAll['article'] = $dataMC;
		echo $this->newsModel->add_article($dataAll);
	}
}

?>