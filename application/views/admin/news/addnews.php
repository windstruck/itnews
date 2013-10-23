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
		<h1>Add news category</h1>
		    <form class="form-horizontal">
		    <div class="control-group">
		    <label class="control-label" for="inputName">Name</label>
		    <div class="controls">
		    <input type="text" id="inputName" placeholder="Name">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputDescription">Description</label>
		    <div class="controls">
		    <input type="text" id="inputDescription" placeholder="Description">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputImages">Add images</label>
		    <div class="controls">
		    	<input type="file" name="inputImages" id="inputImages" />
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-desc">Meta Description</label>
		    <div class="controls">
		    <input type="text" id="inputMeta-desc" placeholder="Meta Description">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-key">Meta Key</label>
		    <div class="controls">
		    <input type="text" id="inputMeta-key" placeholder="Meta Key">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-data">Meta Data</label>
		    <div class="controls">
		    <input type="text" id="inputMeta-data" placeholder="Meta Data">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="select-parent">Select Parent</label>
		    <div class="controls">
			    <select id="select-parent" disabled="disabled">
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


</body>
</html>