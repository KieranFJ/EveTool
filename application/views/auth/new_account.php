<?php

$this->load->view('includes/header');

$this->load->view('includes/navbar');

?>

<div class='mainInfo'>

	<h1>Create User</h1>
	<p>Please enter the users information below.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("auth/new_account");?>
      <p>Username:<br />
      <?php echo form_input($username);?>
      </p>      

      <p>Email:<br />
      <?php echo form_input($email);?>
      </p>      

      <p>Password:<br />
      <?php echo form_input($password);?>
      </p>
      
      <p>Confirm Password:<br />
      <?php echo form_input($password_confirm);?>
      </p>
      
      <p>API Key</br>
      <?php echo form_input($api_key);?>
      </p>
      
      <p>Verification Code</br>
      <?php echo form_input($verification);?>
      </p>
      
      
      <p><?php echo form_submit('submit', 'Create User');?></p>

      
    <?php echo form_close();?>

</div>

<?php

$this->load->view('includes/footer'); 
?>