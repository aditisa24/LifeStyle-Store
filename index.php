<?php
    session_start();
    require 'common.php';
    if (isset($_SESSION['email'])) 
    	{ header('location: products.php'); 
}

  ?>
<!doctype html>
<html>
<head>
	<title>Lifestyle Store</title>
	<meta charset="UTF-8">
   	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style type="text/css">
		
		body{ 
	width: 100%; 
	height: 100%; 
	margin: 0; 
	}
a
{ 
	text-decoration: none; 
	background-color: 
	transparent;
	 color:#ededed; 
}

.content
{
	min-height: 600px;
}

.banner-image
{
	padding-bottom: 50px; 
	margin-bottom: 20px; 
	text-align: center; 
	color: #f8f8f8; 
	background: url(intro-bg_1.jpg) no-repeat center;
	 background-size: cover;
}
.inner-banner-image
{
	padding-top: 12%;
	 width:80%; 
	 margin:auto;
}
.banner-content
{
	position: relative;
	 padding-top: 6%; 
	 padding-bottom: 6%; 
	 overflow:hidden;
	  margin-bottom: 12%; 
	  background-color: rgba(0, 0, 0, 0.7);
	   max-width: 660px;

}
.button
{
	color: #fff; 
	background-color: #c9302c;
	 border-color: #ac2925; 
	 box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125); 
	 padding: 10px 16px; 
	 font-size: 18px; 
	 border-radius: 6px;
}
.container
{
	width:90%; 
	margin:auto;
	 overflow:hidden;
}
.items
{
	width:30%; 
	display: block; 
	padding: 4px; 
	margin-bottom: 20px; 
	line-height: 1.42857143;
	 background-color: #fff; 
	 border: 1px solid #ddd;
	  border-radius: 4px; 
	  float:left; 
	  margin-left:1%;
}
.thumbnail
{
	
	display: block;
	 max-width: 100%;
	  height: auto;

}
.caption
{
	color:#000; 
	padding:0px 10px 10px; 
	font-weight: bold;
	 text-align: center;
}
	</style>
</head>
<body>
	<?php
    
    require 'header.php';
    ?>
	
	
	<div class="content">
		
		<div class="banner-image">
			<div class="inner-banner-image">
				
				<div class="banner-content">
					
					<h1>We sell LifeStyle</h1>
					<p>Flat 40% OFF on premium brands</p>
					<a href="products.php" class="button">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="items">
				
					<img src="camera.jpg" alt="" class="thumbnail"> 
					<div class="caption">
					 <h2>Cameras</h2>
					  <p>Choose among the best available in the world.</p> 
					</div> 
				
			 </div>
		
		<div class="items">
				
					<img src="watch.jpg" alt="" class="thumbnail"> 
					
					<div class="caption">
					 <h2>Watches</h2>
					  <p>Choose among the best available in the world.</p> 
					</div> 
				
		</div>
		<div class="items">
				
					<img src="shirt.jpg" alt="" class="thumbnail"> 
					
					<div class="caption">
					 <h2>Shirts</h2>
					  <p>Choose among the best available in the world.</p> 
					</div> 
			
		</div>
		</div>
	<?php
    
    require 'footer.php';
    ?>
	


</body>
</html>
