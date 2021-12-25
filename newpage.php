<?php
include "header.php";
require_once('./php/fonction.php');

require_once('./php/image_product.php');
?>
<!-- container -->
<div class="container" style="padding-top:5%">
  <!-- row -->
  <div class="row">
    <?php

    $id = $_GET["p"];
    $sql = "SELECT * FROM products,categories WHERE product_cat = '$id' AND product_cat=cat_id";
    $run_query = mysqli_query($con, $sql);
    if (mysqli_num_rows($run_query) > 0) {
      while ($row = mysqli_fetch_array($run_query)) {
        $pro_id = $row['product_id'];
        $pro_cat = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_image = $row['product_image'];
        $s_desc = $row['s_desc'];
        $cat_name = $row["cat_title"];
          require_once 'action.php';
         
        fonction($pro_id, $pro_title, $pro_price, $pro_image,$s_desc, $pro_cat);
      }
    }




    ?>
  </div>
</div>

    <!-- container -->
    <div class="container" style="padding-top:5%">
      <!-- row -->
      <div class="row">
        <?php




        $sql = " SELECT * FROM products ";
        $sql = " SELECT * FROM products WHERE product_id = $id ";
        $result = $con->query($sql);

        if ($result !== false && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $pro_image = $row['product_image'];
            $pro_id = $row['product_id'];
            $pro_image = $row['product_title'];
            $pro_price = $row['product_price'];
            $product_desc = $row['product_desc'];
            $pro_title = $row['product_title'];



            $con->close();


            echo '    <div class="col-md-5 col-md-push-2">
            
                                <div id="product-main-img">
                                    <div class="product-preview">
                                        <img src="product_images/' . $row['product_image'] . '" alt="">
                                    </div>

                                   
                                
                            </div>
                            </div>';
        ?>
        <?php
         
            echo '
									
                                    
                                
                             
                                 
								
									
                                    
                                   
                    <div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">' . $row['product_title'] . '</h2>
							<div>
								
									<i class="fa fa-star" ></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
							
							
							</div>
							<div>
								<h3 class="">$' . $row['product_price'] . '</h3>
							
							</div>
							<p>' . $row['product_desc'] . '</p>

							<div class="product-options">
							
								<label>
									Color
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
							
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
							<button pid='.$pro_id.' id="product" href="#" tabindex="0" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></div>
                                
								
								';
            require_once 'action.php';
          }
        }


        ?>





      </div>
    </div>
  </div>
</div>
</div>
<?php

include "footer.php";
?>