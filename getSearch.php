<!DOCTYPE html>
<html>



<?php
include 'header.php';
require_once 'db.php';
$search = $_GET['k'];
$query = "SELECT * FROM products WHERE product_title = '$search' OR product_keywords = '$search'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));


?>
<!-- container -->
<div class="container" style="padding-top:5%">
    <!-- row -->
    <div class="row">

        <?php



        if (mysqli_num_rows($result) < 1) { ?>
            <div class="panel panel-success col-md-6 col-md-offset-3" style="padding: 15% 0; margin:auto;">
                <h1 class="panel-heading" >Sorry! didn't find anything.<br /> Try different keyword!</h1>
            </div>

        <?php }
        while ($row = mysqli_fetch_array($result)) {
            $pro_id    = $row['product_id'];
            $pro_cat   = $row['product_cat'];
            $pro_brand = $row['product_brand'];
            $pro_title = $row['product_title'];
            $pro_price = $row['product_price'];
            $pro_image = $row['product_image'];
            $sdesc=$row["s_desc"];


            echo "


	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
   
    <a href='newpage.php?p=$pro_id'>
        <div class=\"product\">
            <div>
                <img src=\"product_images/$pro_image\" alt=\"image1\" class=\"img-fluid card-img-top\" style=\"height: 100%;width:100%;\">
            </div></a>
            <div class=\"product-body\">
                   <h5 class='title'>$pro_title</h5>
                
                <h6>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                </h6>
                <p class=\"text\">
                $sdesc
                </p>
                <h5>
                    <span class=\"price\">$$pro_price</span>
                </h5>
                <div class=\"add-to-cart\">
                <div class=\"btn-group\" style=\"margin-left: 25px; margin-top: 15px\">
                <button pid='$pro_id' id='product' href='#' tabindex='0' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button></div>
                </div>

            </div>
            
</div>    
 
</div>
	";
        }

        ?>
    </div>
</div>
    </div>
    <!-- /row -->

</div>
<!-- /container -->
</div>

</body>

</html>