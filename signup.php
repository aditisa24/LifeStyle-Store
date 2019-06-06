<?php
    session_start();
    require 'common.php';
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>LifestyleStore</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
	.row_style
	{
		margin-top: 75px;
	}
	

</style>
</head>
<body>
	<?php
    
    require 'header.php';
    ?>
	
	<div class="container">
		<div class="row row_style">
			<div class="col-xs-6">
				<h1>SignUp</h1>
				<form method="POST" action="signup_script.php"> 
					<div class="form-group">
						<input type="text" name="name" placeholder="Name" class="form-control">
					</div>
					<div class="form-group">
						<input type="E-mail" name="email" placeholder="E-mail" class="form-control">
					</div>
					<div class="form-group">
						<input type="Password" name="password" placeholder="Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="Phone" name="contact" placeholder="Contact" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="city" placeholder="City" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="address" placeholder="Address" class="form-control">
					</div>
					<input type="submit" value="Submit" class="btn btn-primary"> 

				</form>
			</div>
		</div>
	</div>

<?php
    
    require 'footer.php';
 ?>

</body>
</html>