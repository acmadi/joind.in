<?php 
menu_pagetitle('Contact');
?>
<h1 class="icon-about">Contact</h1>
<?php if (!empty($msg)): ?>
<?php $this->load->view('msg_info', array('msg' => $msg)); ?>
<?php endif; ?>

<div class="box">
	<p>
    We value any and all feedback you can give us about the site or what features you might like to see.
	Use the form below to contact us directly! Thanks for your comments!
    </p>
    
    <?php echo form_open('about/contact', array('class' => 'form-contact')); ?>
    
    <?php if (!empty($this->form_validation->error_string)): ?>
            <?php $this->load->view('msg_error', array('msg' => $this->form_validation->error_string)); ?>
    <?php endif; ?>
    
    <div class="row">
    	<label for="your_name">Your Name <span style="color:#FF1800">*</span></label>
    	<?php echo form_input(array('name' => 'your_name', 'id' => 'your_name'), $this->input->post('your_name')); ?>
    
        <div class="clear"></div>
    </div>
    
    <div class="row">
    	<label for="your_email">Your Email <span style="color:#FF1800">*</span></label>
    	<?php echo form_input(array('name' => 'your_email', 'id' => 'your_email'), $this->input->post('your_email')); ?>
    
        <div class="clear"></div>
    </div>
    
    <div class="row">
    	<label for="your_com">Comments <span style="color:#FF1800">*</span></label>
    	<?php 
		$attr=array(
			'name'	=> 'your_com',
			'id'	=> 'your_com',
			'cols'	=> 40,
			'rows'	=> 5,
			'value'	=> $this->input->post('your_com')
		);
		echo form_textarea($attr); 
	    ?>
        <div class="clear"></div>
    </div>
	
	<div class="row row-buttons">
    	<?php echo form_submit(array('name' => 'sub', 'class' => 'btn-big'), 'Submit'); ?>
    </div>

    <?php echo form_close(); ?>
</div>