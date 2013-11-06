<?php 


?>
	<div class="container">
	<?php 
	$this->load->view('tools/menu_tool');
	?>
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
		    <label class="control-label" for="inputAlias">Alias</label>
		    <div class="controls">
		    <input type="text" id="inputAlias" class="input-block-level" placeholder="Alias" name="alias">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="editor1">Description</label>
		    <div class="controls">
			<textarea rows="5" id="desc" name="desc" placeholder="Description"></textarea>
		    <?php //echo $this->ckeditor->editor("desc","default textarea value"); ?>
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputImages">Add images</label>
		    <div class="controls">
		    	<a id ="addImages" href="<?=base_url()?>index.php/tools/news/addImages">Add Images</a>
		    	<img src="<?=base_url()?>uploads/<?= $imgNameCrop; ?>" />
		    	<input type="hidden" name="imgname" value="<?= $imgNameCrop; ?>">
		    </div>
		    </div>
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-desc">Meta Description</label>
		    <div class="controls">
			<textarea rows="5" id="inputMeta-desc" class="input-block-level" placeholder="Meta Description" name="metadesc"></textarea>
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
			    <button id="saveCat" type="submit" class="btn btn-primary">Save changes</button>
			    <input class="btn btn-danger" type="reset" value="Reset">
			    </div>
		    </form>		
		</div>
	</div>
	
	
<script type="text/javascript">	

// ckeditor & ckfinder
CKEDITOR.replace('desc',{
	language        : 'th', 
	filebrowserBrowseUrl : '<?=base_url()?>plugin/ckfinder/ckfinder.html',
	filebrowserImageBrowseUrl : '<?=base_url()?>plugin/ckfinder/ckfinder.html?Type=Images',
	filebrowserFlashBrowseUrl : '<?=base_url()?>plugin/ckfinder/ckfinder.html?Type=Flash',
	filebrowserUploadUrl : '<?=base_url()?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl : '<?=base_url()?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl : '<?=base_url()?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
	
$(document).ready(function(){

	$.removeCookie('addArticleFlag', { path: '/' });
	
	$('#check-parent').click(function(){
		if ($('#check-parent').is(':checked')) {
		    $("#select-parent").attr('disabled', false);
		} else {
			$("#select-parent").attr('disabled', true);
		} 
	});

// fancybox
//	$("a#addImages").fancybox();

	$("a#addImages").fancybox({
		'width'				: '75%',
		'height'			: '75%',
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
	});

	// set cookie
	$('#addImages').click(function(){

		$.cookie('catName', $('#inputName').val(), { expires: 1 });
		$.cookie('catAlias', $('#inputAlias').val(), { expires: 1 });
		$.cookie('catDescription', $('#inputDescription').val(), { expires: 1 });

	});

	// get cookie value
	var catName = $.cookie('catName');
	var catAlias = $.cookie('catAlias');
	var catDescription = $.cookie('catDescription');
	$('#inputName').val(catName);
	$('#inputAlias').val(catAlias);
	$('#inputDescription').val(catDescription);

});

</script>