<?php
require_once "db.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


if (isset($_POST["email"]) && isset($_POST["password"])) {
	$email = mysqli_real_escape_string($con, $_POST["email"]);
	$password = $_POST["password"];
	$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con, $sql);
	$count = mysqli_num_rows($run_query);
	$row = mysqli_fetch_array($run_query);
	$_SESSION["uid"] = $row["user_id"];
	$_SESSION["name"] = $row["first_name"];

	if ($count == 1) {


		//if user is login from page we will send login_success
		echo "login_success";
		$BackToMyPage = $_SERVER['HTTP_REFERER'];
		if (!isset($BackToMyPage)) {
			
			header('Location: index.php'); // default page
		} else {
		
			exit();
			
		}
	
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	}
}
?>
<div class="wait overlay">
	<div class="loader"></div>
</div>
<div class="container-fluid">
	<!-- row -->


	<div class="login-marg">
		<!-- Billing Details -->


		<!-- /Billing Details -->


		<form id="login" class="login100-form " method="POST">
			<div class="billing-details jumbotron">
				<div class="section-title">
					<h2 class="login100-form-title p-b-49">Login Here</h2>
				</div>


				<div class="form-group">
					<label for="email">Email</label>
					<input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
				</div>

				<div class="form-group">
					<label for="email">Password</label>
					<input class="input input-borders" type="password" name="password" placeholder="password" id="password" required>
				</div>

				<div class="text-pad">
					<a href="#">
						forget password ?
					</a>

				</div>

				<input class="primary-btn btn-block" type="submit" Value="Login">

		</form>
		


	</div>



</div>

</div>