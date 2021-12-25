<?php
session_start();
include("../db.php");
include 'header.php';
include 'sidebar.php';
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <?php

    if (isset($_POST['btn_save'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $user_password = $_POST['password'];
        $mobile = $_POST['phone'];
        $address = $_POST['address'];


        mysqli_query($con, "insert into user_info(first_name, last_name,email,password,mobile,address) values ('$first_name','$last_name','$email','$user_password','$mobile','$address')")
            or die("Query 1 is inncorrect........");

        mysqli_close($con);
    }


    ?>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Add Users</h4>
                        <p class="card-category">Complete User profile</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" name="form" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">First Name</label>
                                        <input type="text" id="first_name" name="first_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">phone number</label>
                                        <input type="text" id="phone" name="phone" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" name="address" id="address" class="form-control" required>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right" style="background-color: #1c374144; border:none;">Update User</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>