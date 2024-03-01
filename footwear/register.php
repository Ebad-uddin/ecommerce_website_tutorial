<?php 
include('includes/header.php');
include('../adminpanel/config.php');

if(isset($_POST['register'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$haspass = password_hash($password, PASSWORD_BCRYPT);

	// echo $fname, $lname, $email, $password;
	$check_email =  mysqli_query($connection, "SELECT * from user where email = '$email'");
	if(mysqli_num_rows($check_email) > 0){
		echo '<script>
		alert("Email already exist");
		</script>';
	}else{
		$insertintoDb = mysqli_query($connection, "INSERT INTO `user` (`userid`, `fname`, `lname`, `email`, `password`) VALUES (NULL, '$fname', '$lname', '$email', '$haspass')
		");
		if($insertintoDb){
			echo '<script>
			alert("Regsitration successfull");
			</script>';
			
		}
}
}




?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.php">Home</a></span> / <span>Register</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>User Registration</h3>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							<form action="register.php" method="POST" class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">First Name</label>
											<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="pass">Password</label>
											<input type="password" name="pass" id="password" class="form-control" placeholder="Enter Password">
										</div>
									</div>
									<div class="w-100"></div>
									
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" name="register" value="Register" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>		
						</div>
					</div>
					
				</div>
			</div>
			<?php 
include('includes/footer.php');
?>

