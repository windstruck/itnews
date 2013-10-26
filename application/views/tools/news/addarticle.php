	<div class="container">
	<?php $this->load->view('tools/menu_tool'); ?>
	<blockquote>
		<p>Add news Content</p>
	</blockquote>
		
		<div class="row">
		    <form class="form-horizontal" action="<?=base_url()?>index.php/tools/news/addCat" method="post">
		    <div class="control-group">
		    <label class="control-label" for="inputName">Title</label>
		    <div class="controls">
		    <input type="text" id="inputTitle" class="input-block-level" placeholder="Title" name="title">
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputName">Alias</label>
		    <div class="controls">
		    <input type="text" id="inputAlias" class="input-block-level" placeholder="Alias" name="alias">
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="select-parent">Select Category</label>
		    <div class="controls">
			    <select id="select-parent" class="input-block-level" name="idparent">
			    	<option value="select">-Category-</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputName">Status</label>
		    <div class="controls">
			<label class="radio">
			  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
			  Public
			 </label> 
			 <label class="radio">
			  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			  Unpublic
			</label>
			 </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputName">Autor</label>
		    <div class="controls">
		    <input type="text" id="inputAlias" class="input-block-level" placeholder="Autor" name="autor">
		    </div>
		    </div>
		    
			<div class="control-group">
		    <label class="control-label" for="inputImages">Add images Short Description</label>
		    <div class="controls">
		    	<input type="file" id="inputShortImages" name="images" />
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputDescription">Short Description</label>
		    <div class="controls">
			<textarea rows="5" id="inputShortDescription" class="input-block-level" placeholder="Short Description" name="s_desc"></textarea>
		    </div>
		    </div>
			
			<div class="control-group">
		    <label class="control-label" for="inputImages">Add images Description</label>
		    <div class="controls">
		    	<input type="file" id="inputShortImages" name="images" />
		    </div>
		    </div>
			
		    <div class="control-group">
		    <label class="control-label" for="inputDescription">Description</label>
		    <div class="controls">
			<textarea rows="10" id="inputDescription" class="input-block-level" placeholder="Description" name="desc"></textarea>
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
		    
		    
		    
		        <div class="form-actions">
			    <button type="submit" class="btn btn-primary">Save changes</button>
			    <input class="btn btn-danger" type="reset" value="Reset">
			    </div>
		    </form>		
		</div>
	</div>