<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?=base_url()?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>bootstrap/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>bootstrap/js/bootstrap.js"></script>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<script type="text/javascript">

$(document).ready(function(){

	$('#check-parent').click(function(){
		if ($('#check-parent').is(':checked')) {
		    $("#select-parent").attr('disabled', false);
		} else {
			$("#select-parent").attr('disabled', true);
		} 
	});


});

</script>
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
					<a href="<?=base_url()?>index.php/tool">Control Panel</a>
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
		<blockquote>
		<p>Add news category</p>
		</blockquote>
		
		<div class="row">
		    <form class="form-horizontal" action="<?=base_url()?>index.php/tools/news/addCat" method="post">
		    <div class="control-group">
		    <label class="control-label" for="inputName">Name</label>
		    <div class="controls">
		    <input type="text" id="inputName" class="input-block-level" placeholder="Name" name="name">
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputName">Alias</label>
		    <div class="controls">
		    <input type="text" id="inputName" class="input-block-level" placeholder="Name" name="alias">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputDescription">Description</label>
		    <div class="controls">
			<textarea rows="5" id="inputDescription" class="input-block-level" placeholder="Description" name="desc"></textarea>
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputImages">Add images</label>
		    <div class="controls">
		    	<input type="file" id="inputImages" name="images" />
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-desc">Meta Description</label>
		    <div class="controls">
			<textarea rows="5" id="inputDescription" class="input-block-level" placeholder="Description" name="metadesc"></textarea>
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-key">Meta Key</label>
		    <div class="controls">
		    <input type="text" id="inputMeta-key" class="input-block-level" placeholder="Meta Key" name="metakey">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-data">Meta Data</label>
		    <div class="controls">
		    <input type="text" id="inputMeta-data" class="input-block-level" placeholder="Meta Data" name="metadata" >
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="select-parent">Select Parent</label>
		    <div class="controls">
			    <select id="select-parent" disabled="disabled" class="input-block-level" name="idparent">
			    	<option value="select">-select-</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<input type="checkbox" value="" id="check-parent">
		    </div>
		    </div>
		    
		        <div class="form-actions">
			    <button type="submit" class="btn btn-primary">Save changes</button>
			    <input class="btn btn-danger" type="reset" value="Reset">
			    </div>
		    </form>		
		</div>
	</div>


</body>
</html>