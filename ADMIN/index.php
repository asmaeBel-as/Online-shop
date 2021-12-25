<?php
include "../db.php";
session_start();

if (isset($_POST["submit"])) {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($con, $_POST['uname']);
    $mypassword = mysqli_real_escape_string($con, $_POST['pswd']);

    $sql = "SELECT * FROM admin_info WHERE admin_email = '$myusername' and admin_password = '$mypassword'";
    $result = mysqli_query($con, $sql);
    $row = $result->fetch_array(MYSQLI_BOTH);
    $count = $result->num_rows;

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

        $_SESSION['admin_name'] = $myusername;

        header("location: dashboard.php");
        die();
    } else {
       $error= urlencode("Wrong Username or Password");
        header("Location:adminLogin.php?errorMssg=" . $error);
        die();
       
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">

        <h2>Admin Login</h2>

        <form action="" class="login-marg" method="POST">
            <div class="mb-3 mt-3">

                <input type="email" class="form-control" id="uname" placeholder="Enter AdminEmail" name="uname" required>

            </div>


            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>

            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  


        </form>


    </div>

</body>

</html>