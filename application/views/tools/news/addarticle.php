<?php 

/* echo '<pre>';
 print_r($catList);
echo '</pre>'; */
/* 
foreach ($catList as $key => $val){
	// 	print_r($val);
	echo $val->name;
	echo '<br>';
}
exit; */
?>	
	
	<div class="container">
	<?php $this->load->view('tools/menu_tool'); ?>
	<blockquote>
		<p>Add news Content</p>
	</blockquote>
		
		<div class="row">
		    <form class="form-horizontal" action="<?=base_url()?>index.php/tools/news/InsertArticle" method="post">
		    <div class="control-group">
		    <label class="control-label" for="inputTitle">Title</label>
		    <div class="controls">
		    <input type="text" id="inputTitle" class="input-block-level" placeholder="Title" name="title">
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputAlias">Alias</label>
		    <div class="controls">
		    <input type="text" id="inputAlias" class="input-block-level" placeholder="Alias" name="alias">
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="select-parent">Select Category</label>
		    <div class="controls">
			    <select id="select-parent" class="input-block-level" name="idparent">
			    <?php foreach ($catList as $key => $val){ ?>
			    	<option value="<?=$val->id;?>"><?=$val->name;?></option>
			    <?php } ?>
				</select>
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="">Status</label>
		    <div class="controls">
			<label class="radio">
			  <input type="radio" name="status" id="optionsRadios1" value="1" checked>
			  Public
			 </label> 
			 <label class="radio">
			  <input type="radio" name="status" id="optionsRadios2" value="0">
			  Unpublic
			</label>
			 </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputAutor">Autor</label>
		    <div class="controls">
		    <input type="text" id="inputAutor" class="input-block-level" placeholder="Autor" name="autor">
		    </div>
		    </div>
		    
			<div class="control-group">
		    <label class="control-label" for="">Add images Short Description</label>
		    <div class="controls">
		    	<a id ="addImages" href="<?=base_url()?>index.php/tools/news/addImages">Add Images</a>
		    	<img src="<?=base_url()?>uploads/<?= $imgNameCrop; ?>" />
		    	<input type="hidden" name="imgname" value="<?= $imgNameCrop; ?>">
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputShortDescription">Short Description</label>
		    <div class="controls">
			<textarea rows="5" id="inputShortDescription" class="input-block-level" placeholder="Short Description" name="s_desc"></textarea>
		    </div>
		    </div>
			
			
		    <div class="control-group">
		    <label class="control-label" for="inputDescription">Description</label>
		    <div class="controls">
			<textarea rows="10" id="inputDescription" class="input-block-level" placeholder="Description" name="desc"></textarea>
		    </div>
		    </div>
		    
		    
		    <div class="control-group">
		    <label class="control-label" for="inputMeta-desc">Meta Description</label>
		    <div class="controls">
			<textarea rows="5" id="inputMeta-desc" class="input-block-level" placeholder="Description" name="metadesc"></textarea>
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
		    
		    
		    
		        <div class="form-actions">
			    <button type="submit" class="btn btn-primary">Save changes</button>
			    <input class="btn btn-danger" type="reset" value="Reset">
			    </div>
		    </form>		
		</div>
	</div>
	
<script type="text/javascript">	

// ckeditor & ckfinder
CKEDITOR.replace('inputDescription',{
	language        : 'th', 
	filebrowserBrowseUrl : '<?=base_url()?>plugin/ckfinder/ckfinder.html',
	filebrowserImageBrowseUrl : '<?=base_url()?>plugin/ckfinder/ckfinder.html?Type=Images',
	filebrowserFlashBrowseUrl : '<?=base_url()?>plugin/ckfinder/ckfinder.html?Type=Flash',
	filebrowserUploadUrl : '<?=base_url()?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl : '<?=base_url()?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl : '<?=base_url()?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
	
$(document).ready(function(){

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

		//$.cookie('addArticleFlag', '1');
		$.cookie('addArticleFlag', '1', { expires: 1, path: '/' });

	});

});

</script>