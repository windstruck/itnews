<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Technology News</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=base_url()?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

<script type="text/javascript" src="<?=base_url()?>bootstrap/js/jquery.js" rel="stylesheet"></script>
<script type="text/javascript" src="<?=base_url()?>bootstrap/js/bootstrap.min.js" rel="stylesheet"></script>
<script type="text/javascript" src="<?=base_url()?>bootstrap/js/bootstrap.js" rel="stylesheet"></script>



<!--slide script-->
<link rel="stylesheet" href="<?=base_url()?>style/css/slide/refineslide.css" />
<link rel="stylesheet" href="<?=base_url()?>style/css/slide/refineslide-theme-dark.css" />
<script src="<?=base_url()?>style/js/slide/modernizr.js"></script>


<!--[if lt IE 9]>
        <script src="<?=base_url()?>style/js/slide/respond.min.js"></script>
<![endif]-->
<!--slide script-->
</head>
<body>
<div class="container">

	<div class="navbar">
		<div class="navbar-inner">
			  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a>
				
			  <!-- Be sure to leave the brand out there if you want it shown -->
			  <a class="brand" href="#">IT Techz</a>
				<ul class="nav">
				  <li class="active">
					<a href="#">Control Panel</a>
				  </li>
				  <li><a href="#">Menu</a></li>
				  <li><a href="#">Content</a></li>
				</ul>
				
				
			  <!-- Everything you want hidden at 940px or less, place within here -->
			  <div class="nav-collapse collapse">
				<form class="navbar-search pull-right">
				  <input type="text" class="search-query" placeholder="Search">
				</form>
			  </div> 
		  </div>
	</div>
	
	<ul class="breadcrumb">
		<li><a href="#">Home</a> <span class="divider">/</span></li>
		<li><a href="#">Library</a> <span class="divider">/</span></li>
		<li class="active">Data</li>
	</ul>
	
	<div class="row">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail center">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/page_settings.png" >
                  <div class="caption text-center">
                    <h4>ตั้งค่าระบบ</h4>
                    <p><a href="#" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/prize_winner.png" >
                  <div class="caption text-center">
                    <h4>ข่าวไฮไลท์</h4>
                    <p><a href="#" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/text_page.png" >
                  <div class="caption text-center">
                    <h4>หมวดหมู่ข่าวสาร</h4>
                    <p><a href="<?=base_url()?>index.php/tools/news" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/add_notes.png" >
                  <div class="caption text-center">
                    <h4>ข่าวสาร</h4>
                    <p><a href="#" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/edit_user.png" >
                  <div class="caption text-center">
                    <h4>สมาชิก</h4>
                    <p><a href="#" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/add_comment.png" >
                  <div class="caption text-center">
                    <h4>comment</h4>
                    <p><a href="#" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/radio.png" >
                  <div class="caption text-center">
                    <h4>โฆษณา</h4>
                    <p><a href="#" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/160x120" alt=""  src="<?=base_url()?>style/images/admin/tool/directions.png" >
                  <div class="caption text-center">
                    <h4>เมนู</h4>
                    <p><a href="#" class="btn btn-primary">Action</a></p>
                  </div>
                </div>
              </li>
            </ul>
    </div>
 
</div>
</body>
</html>