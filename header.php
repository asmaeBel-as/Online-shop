<?php
session_start();
include_once "action.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>ASA shopping</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->


	<link rel="icon" type="image/png" sizes="16x16" href="logo2.png">
	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="js/action.js"></script>







	<style>
		#navigation {
			background: #FF4E50;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #F9D423, #FF4E50);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


		}




		#header {

			background: #E0E7E9;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #354649, #A3C6C4);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #354649, #A3C6C4);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


		}

		#top-header {

			height: 50px;
			background: #354649;
			/* fallback for old browsers */



		}

		#footer {
			background-color: #354649;
			/* fallback for old browsers */



			color: white;
		}


		.footer-links li a {
			color: #fff;
		}

		.mainn-raised {

			margin: -7px 0px 0px;
			border-radius: 6px;
			box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

		}

		.glyphicon {
			display: inline-block;
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		.glyphicon-chevron-left:before {
			content: "\f053"
		}

		.glyphicon-chevron-right:before {
			content: "\f054"
		}

		.search {
			color: blanchedalmond;
			height: 40px;
			width: 100px;
			background: #1f2f33;
			border-radius: 0px 40px 40px 0px;
			font-weight: 700;
			border: none;
		}

		.input-b {
			border-radius: 40px 0px 0px 40px;
			height: 40px;
			width: 250px;
			border: none;
			padding-left: 40px;
		}

		.row a {
			color: black;
			text-decoration: none;
		}

		.row a :hover {

			text-decoration: underline;
		}

		.dropdownn {
			text-decoration: none;
		}

		.blaaa {
			width: 30px;
			height: 30px;
			color: white;
			position: relative;
			animation-name: example;
			animation-duration: 4s;
			animation-iteration-count: infinite;
		}

		@keyframes example {
			0% {

				left: 0px;
				top: 0px;
			}

			25% {

				left: 100px;
				top: 0px;
			}

			50% {

				left: 100px;
				top: 0px;
			}

			75% {

				left: 0px;
				top: 0px;
			}

			100% {

				left: 0px;
				top: 0px;
			}
		}
	</style>
	<script>
		$(document).ready(function() {
			$('#myCarousel').carousel({
				//options here
			});
		});
	</script>
</head>

<body style="background-color: white;">
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">

				<ul class="header-links pull-right">

					<li><?php
						include "db.php";
						if (isset($_SESSION["uid"])) {
							$sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
							$query = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($query);

							echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI ' . $row["first_name"] . '</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';
						} else {
							echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
						}
						?>

					</li>
				</ul>

			</div>
		</div>
		<!-- /TOP HEADER -->



		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="blaaa">
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
									ASA SHOP
								</font>

							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form action="getSearch.php" methode="GET">
								<input class="input-b" id="search" type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Search here..." />
								<input id="search_btn" class="search" type="submit" name="" value="Search" />

							</form>
						</div>
					</div>

					</form>


					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">


							<!-- Cart -->

							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="badge qty" style='background-color:#354649;'>0</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list" id="cart_product">


									</div>

									<div class="cart-btns">
										<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i> edit cart</a>

									</div>
								
								</div>

							</div>
							<!-- /Cart -->
							<!-- /Cart -->


							<!-- /Menu Toogle -->
						</div>

					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
		</div>

		<!-- container -->
		</div>
		<!-- /MAIN HEADER -->

	</header>
	<!-- /HEADER -->
	<nav id='navigation'>
		<!-- container -->
		<div class="container" id="get_category_home">

		</div>
		<!-- responsive-nav -->

		<!-- /container -->
	</nav>


	<!-- NAVIGATION -->

	<div class="modal fade" id="Modal_login" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>
				<div class="modal-body">
					<?php
					include "login.php";



					?>

				</div>

			</div>

		</div>
	</div>
	<div class="modal fade" id="Modal_register" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>
				<div class="modal-body">
					<?php
					include "register_form.php";
					if (isset($_GET['err']) && ($_GET['err'] == 2)) {
						echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
					}



					?>

				</div>

			</div>

		</div>
	</div>