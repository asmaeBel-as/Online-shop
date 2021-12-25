<?php
session_start();
include("../db.php");
include 'header.php';
include 'sidebar.php';
?>

<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add product page</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        <br>
        <?php



        if (isset($_POST['btn_save'])) {

            $product_name = $_POST['product_name'];
            $details = $_POST['details'];
            $ldetails = $_POST['ldetails'];
            $price = $_POST['price'];
            $product_type = $_POST['product_type'];
            $brand = $_POST['brand'];
            $tags = $_POST['tags'];
            //picture coding
            $picture_name = $_FILES['picture']['name'];
            $picture_type = $_FILES['picture']['type'];
            $picture_tmp_name = $_FILES['picture']['tmp_name'];
            $picture_size = $_FILES['picture']['size'];

            if ($picture_type == "image/jpeg" || $picture_type == "image/jpg" || $picture_type == "image/png" || $picture_type == "image/gif") {
                if ($picture_size <= 500000000)

                    $pic_name = time() . "_" . $picture_name;
                move_uploaded_file($picture_tmp_name, "../product_images/" . $pic_name);


                mysqli_query($con, "INSERT INTO products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords,s_desc)  VALUES ('$product_type','$brand' ,'$product_name','$price','$details','$pic_name','$tags','$ldetails')") or
                    die("Error description: " . mysqli_error($con));
            }

            mysqli_close($con);
        }
        ?>
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                    <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
                        <div class="row">


                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h5 class="title">Add Product</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Title</label>
                                                    <input type="text" id="product_name" required name="product_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="">
                                                    <label for="">Add Image</label>
                                                    <input type="file" name="picture" required class="btn btn-fill btn-success" style="background-color: #1c374144; border:none" id="picture">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Little Description</label>
                                                    <textarea rows="2" cols="60" id="details" required name="ldetails" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Pricing</label>
                                                    <input type="text" id="price" name="price" required class="form-control">
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h5 class="title">Categories</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Product Category</label>
                                                    <select name="product_type" class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>SuperCars</option>
                                                        <option value="2">Van</option>
                                                        <option value="3">Sedan</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Product Brand</label>
                                                    <input type="text" id="brand" name="brand" required class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Keywords</label>
                                                    <input type="text" id="tags" name="tags" required class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary" style="background-color: #1c374144; border:none;">Update Product</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>