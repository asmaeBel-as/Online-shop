<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="wait overlay">
    <div class="loader"></div>
</div>
<style>
    .input-borders {
        border-radius: 30px;
    }
</style>
<!-- row -->

<div class="container-fluid">



    <!-- /Billing Details -->

    <form id="signup_form" onsubmit="return false" class="login100-form">
        <div class="billing-details jumbotron">
            <div class="section-title">
                <h2 class="login100-form-title p-b-49">Register Here</h2>
            </div>
            <div class="form-group ">

                <input class="input form-control input-borders" type="text" name="f_name" id="f_name" placeholder="First Name">
            </div>
            <div class="form-group">

                <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input class="input form-control input-borders" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="input form-control input-borders" type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="form-group">
                <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="confirm password">
            </div>
            <div class="form-group">
                <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="mobile">
            </div>
            <div class="form-group">
                <input class="input form-control input-borders" type="text" name="address" id="address" placeholder="Address">
            </div>

            <input class="primary-btn btn-block" type="submit" Value="SignUp" name="submit">
        </div>
        <div class="text-pad">
            <a href="" data-toggle="modal" data-target="#Modal_login">Already signed up?</a>

        </div>


    </form>
    <div class="login-marg">
        <!-- Billing Details -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">


            </div>
            <!--Alert from signup form-->
        </div>
        <div class="col-md-2"></div>
    </div>


</div>
</div>