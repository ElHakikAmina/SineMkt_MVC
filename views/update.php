<?php
    if(isset($_POST['id']))
    {
        $existProduct = new ProductController();
        $product = $existProduct->getOneProduct();
    }else
    {
        header("location:index"); 
    }
if(isset($_POST['update']))
{
    $exitProduct = new ProductController();
    $exitProduct->updateProduct();
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<meta name="description" content="High Quality Furniture with Competitive Price. Safe Trading Functional chair on Leading sineMKT Platform.">
        <meta name="keywords" content="chairs,best-chair,wood,furniture,sofa,bed,">
		<title>Contact us | SineMkt High Quality Furniture </title>
        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <!-- title of site -->
        
        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="views/assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="views/assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="views/assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="views/assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="views/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="views/assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="views/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="views/assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="views/assets/css/responsive.css">

		<!-- style-contact-inputs.css -->
		<link rel="stylesheet" href="views/assets/css/style-contact-inputs.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <?php include('header.php'); ?>
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->	
		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->
        <div class="contact-form">
			<h1>Modify Product</h1> <br>
			<form method="post" action="#" enctype="multipart/form-data">
            <input type="text" name="name" value="<?= $product->Nom;?>" class="contact_input_NameEmail" placeholder="Product Name ..." style="align:center;"> <br><br><br>
            <input type="text" name="price" value="<?= $product->Prix;?>"  class="contact_input_NameEmail" placeholder="Product Price ..."><br><br><br>
            <input type="file" name="image" class="contact_input_NameEmailK" placeholder="Product Price ..."><br><br><br>
            <!-- <textarea name="" class="contact_input_textarea" placeholder="Enter your message ..." id="" cols="30" rows="10"></textarea>
			<a href=""><img src="assets/images/contact/4png.png" alt="" style=" position:absolute; bottom:1%; right:20%;"></a> -->
			<div class="hm-foot-email">
				<div class="foot-email-box">
				<input type="hidden" name="id" value="<?php echo $product->Id;?>"/>
                    <button name="update" style="border-radius:5px; padding-top:10px; padding-bottom:10px; background-color: #e99c6b; color: white; width:200px; text-align: center;">
                        Add Product</button>
		</form>
				</div><!--/.foot-email-box-->
				
			</div><!--/.hm-foot-email-->
        </div>
		<?php include('footer.php'); ?>

		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="views/assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="views/assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="views/assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="views/assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="views/assets/js/custom.js"></script>
        
    </body>
	
</html>