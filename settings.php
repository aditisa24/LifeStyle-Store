<?php
    session_start();
    require 'common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
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
				<h1>Change Password</h1>
				<form method="POST" action="settings_script.php"> 
					<div class="form-group">
						<input type="Password" name="opassword" placeholder="Old Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="Password" name="npassword" placeholder="New Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="Password" name="npassword" placeholder="Re-Type New Password" class="form-control">
					</div>
					
					<input type="submit" value="Change" class="btn btn-primary"> 

				</form>
			</div>
		</div>
	</div>







	<?php
    
    require 'footer.php';
    ?>
	
</div>
</body>
</html>