<?php
    session_start();
    require 'common.php';
    ?>
   
 <!DOCTYPE html>
<html>
<head>
<title>LifestyleStore</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
	.dec
	{
		margin-top: 45px;
	}
	.dec1
	{
		margin-left: 25px;
	}

	footer
{
	padding: 10px 0;
    background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
 width: 100%;
 height: 25px;
 
}
	
</style>

</head>
<body>
	<?php
    
    require 'header.php';
    require 'check_if_added,php.php';
    ?>
	
	<div class="container dec">
		<div class="jumbotron dec">
			<h1>Welcome to our Lifestyle Store!</h1>
			<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-6 dec1">
			<div class="thumbnail"><img src="c1.jpg" alt="Responsive image">
				<div class="caption">
					<h3>CannonEs</h3>
					<p>Price:Rs.46000</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                               echo  '<a href="" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>

				</div>
			</div>
		</div>
			<div class="col-md-3 col-sm-6">
			    <div class="thumbnail"><img src="c2.jpg" alt="Responsive image">
				    <div class="caption">
					<h3>Peartree</h3>
					<p>Price:Rs.60000</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
				    </div>

			    </div>
		</div>
		<div class="col-md-3 col-sm-6">
			    <div class="thumbnail"><img src="c3.jpg" alt="Responsive image">
				    <div class="caption">
					<h3>Lumux</h3>
					<p>Price:Rs.40000</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
				    </div>

			    </div>
		</div>
		
		
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-6 dec1">
			<div class="thumbnail"><img src="c4.jpg" alt="Responsive image">
				<div class="caption">
					<h3>Slyvi</h3>
					<p>Price:Rs.2000</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
				</div>
			</div>
		</div>
			<div class="col-md-3 col-sm-6">
			    <div class="thumbnail"><img src="c5.jpg" alt="Responsive image">
				    <div class="caption">
					<h3>Milan</h3>
					<p>Price:Rs.2500</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
				    </div>

			    </div>
		</div>
		<div class="col-md-3 col-sm-6">
			    <div class="thumbnail"><img src="c6.jpg" alt="Responsive image">
				    <div class="caption">
					<h3>Titan</h3>
					<p>Price:Rs.3000</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
				    </div>

			    </div>
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-3 col-sm-6 dec1">
			<div class="thumbnail"><img src="c7.jpg" alt="Responsive image">
				<div class="caption">
					<h3>Ralph Lauren</h3>
					<p>Price:Rs.2000</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
				</div>
			</div>
		</div>
			<div class="col-md-3 col-sm-6">
			    <div class="thumbnail"><img src="c8.jpg" alt="Responsive image">
				    <div class="caption">
					<h3>SiyaRam</h3>
					<p>Price:Rs.2500</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
				    </div>

			    </div>
		</div>
		<div class="col-md-3 col-sm-6">
			    <div class="thumbnail"><img src="c9.jpg" alt="Responsive image">
				    <div class="caption">
					<h3>Versace</h3>
					<p>Price:Rs.3000</p>
					<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
					
				    </div>

			    </div>
		</div>
	</div>
		
	
<div class="footer navbar-fixed-bottom">
	<footer class="fixed-bottom">
		<div class="container">
			<p><center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
			</p>
		</div>
	</footer>
	


</body>
</html>