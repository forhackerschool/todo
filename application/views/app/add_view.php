<div class="container">
  <div class="page-header">
	<h1>Edit</h1>
  </div>
	<?php 
		if(validation_errors()): echo validation_errors(); endif;  
		
		$attributes = array('id' => 'form-add-edit'); 
		echo form_open('app/add_validation', $attributes);   
	?>
    <h3>Task:</h3>
    <?php
		$title = array('id' => 'title', 'name' => 'title');
		echo form_textarea($title, $this->input->post('title'), 'class="form-control"');
		 echo "<br>";
		echo form_submit('submit', 'Submit', 'class="btn btn-default"');
		echo form_close();
	?>
</div>