<?php include('db.php'); ?>
<?php session_start(); ?>
<?php //print_r($_SESSION['cart']); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
<?php
    $jim = new Data();
    $countproduct = $jim->countproduct();
    
    $cat = $jim->getcategory();
    class Data {
        function countproduct(){
            $count = 0;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
            foreach($cart as $row):
                if($row['qty']!=0){
                    $count = $count + 1;
                }
            endforeach;
            
            return $count;
        }
        function getcategory(){
        	global $conn;
            $result = mysqli_query($conn,"SELECT * FROM category");
            return $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Digital Works</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- CSS only -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 1123445</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> rohastationary@gmail.com</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-bottom navbar navbar-inverse"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header navbar-default">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                            $cat = $jim->getcategory();
                                            while($row = mysqli_fetch_array($cat)){
                                                echo '<li><a href="category.php?filter='.$row['title'].'">'.$row['title'].'</a></li>';
                                            }
                                        ?>
    
                                    </ul>
                                </li> 
								<li><a href="about.php">About Us</a></li> 
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php">Cart <span class="badge"></span></a></li>
								<li><a href="in.php"> User Login</a></li>
								<li><a href="register.php">Register user</a></li>
							    <li><a href="login.php">Admin Login</a></li>
							</ul>
						</div>
					</div>
                    <div class="col-sm-3">
						<div class="search_box pull-right">
                            <form action="index.php" method="post">
							     <input type="text" placeholder="Search" name="filter" />
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
		
	    <!-- <div class="header-middle">
			<div class="container">
				<div class="row">
					
						<div class="logo pull-left">

						<center><a href="index.php"><img src="https://previews.123rf.com/images/serezniy/serezniy1108/serezniy110801023/10354937-bright-stationery-and-books-isolated-on-white.jpg" alt="" class="img-responsive"/></a></center> 

					
						</div>

						
					
					
				</div>
			</div>
		</div> -->
		 
		
		 <!-- <h1 class="w3-center" align="center";>Welcome to our Shop</h1>
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
      <div class="carousel-cell">
        <img class="w3-image" src="https://previews.123rf.com/images/serezniy/serezniy1108/serezniy110801023/10354937-bright-stationery-and-books-isolated-on-white.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="https://envato-shoebox-0.imgix.net/20d7/57ce-3081-4c45-b3c2-ac69f5acbfc1/Pencils+case+Blackboard+misc+colors++back.jpg?auto=compress%2Cformat&fit=max&mark=https%3A%2F%2Felements-assets.envato.com%2Fstatic%2Fwatermark2.png&markalign=center%2Cmiddle&markalpha=18&w=1600&s=04d54212bf7c79b7e6adb7cd617e4744">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="https://previews.123rf.com/images/serezniy/serezniy1108/serezniy110801479/10394959-bright-stationery-and-books-isolated-on-white.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="https://www.homestratosphere.com/wp-content/uploads/2019/05/All-kinds-of-stationary-may16.jpg">
      </div> -->
      

    </div> 
	</header>
    