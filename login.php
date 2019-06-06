<?php
    require 'common.php';
    session_start();
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
				<div class="panel panel-default">
					<div class="panel-body"> 
						<p class="text-warning">Login to make purchases</p> 
						<form method="POST" action="login_submit.php">
							<div class="form-group">
							E-mail:<input type="E-mail" class="form-control" name="email">
							</div>
							<div class="form-group">
							Password:<input type="Password" class="form-control" name="password" >
							</div>
							<div class="form-group">
								<input type="submit" value="Login" class="btn btn-primary">
						</form>
							
					</div>
					<div class="panel-footer">Don't have an account?<a href="signup.php"> Register</div>
				</div>
			</div>
		</div>
	</div>
	<?php
    
    require 'footer.php';
    ?>

</body>
</html>