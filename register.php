<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet"  href="<?php echo base_url().'boots/css/bootstrap.css';?>">
	<link rel="stylesheet"  href="<?php echo base_url().'boots/css/style.css';?>">
</head>
<body>
	<dev class="row">
		<dev class="container">
			<dev class="col-md-2">
			<div class="card-header">
						    <h2> Register Here! </h2> 
						</div>
						<form action="<?php echo base_url().'index.php/Reg/register'?>" name="registerform" id="registerform" method="post">
							<div class="card-body register">
							    <h5 class="card-title">Fill your details </h5>
							    
								<div class="from-group">
								    <lebel for="name">First Name</lebel>
								    <input type="text" name="first_name" id="first_name" value="" class="form-control <?php echo (form_error('first_name') !="") ? 'is-invalid' :'';?>" placeholder="First Name">
								    <p class="invalid-feedback"><?php echo form_error('first_name');?></p>
								</div><br>

								<div class="from-group">
								    <lebel for="name">Last Name</lebel>
								    <input type="text" name="second_name" id="last_name" value="" class="form-control" placeholder="Last Name">
								    <p class="invalid-feedback"><?php echo form_error('last_name');?></p>
								</div><br>

								<div class="from-group">
								    <lebel for="name">Phone No.</lebel>
								    <input type="text" name="phone_no." id="phone_no." value="" class="form-control" placeholder="Phone no.">
								    <p class="invalid-feedback"><?php echo form_error('phone_no');?></p>
								</div><br>

								<div class="from-group">
								    <lebel for="name">Email</lebel>
								    <input type="text" name="email" id="email" value="" class="form-control" placeholder="Email">
								    <p class="invalid-feedback"><?php echo form_error('email');?></p>
								</div><br>

								<div class="from-group">
								    <lebel for="name">Password</lebel>
								    <input type="Password" name="Password" id="Password" value="" class="form-control" placeholder="Password">
								    <p class="invalid-feedback"><?php echo form_error('password');?></p>
								</div><br>

								<div class="from-group">
								    <button class="btn btn-block btn-primary">REGISTER</button>
								</div>	
							</div>
						</form>	  		
			</dev>
		</dev>			 		
	</dev>
</body>
</html>
