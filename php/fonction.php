
           <?php


            function fonction($pid, $product_title, $product_price, $product_image,$s_desc, $product_cat)
            {
                require_once 'action.php';
                include 'db.php';

                $element = "

    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
   <form action=\"..\action.php\" method=\"post\">
    <a href ='newpage.php?p=$pid'>
        <div class=\"product\">
            <div>
                <img src= \"product_images/$product_image\" alt=\"image1\" class=\"img-fluid card-img-top\" height: 150pxwidth:200px>
            </div></a>
            <div class=\"product-body\">
                   <h5 class='title'>$product_title</h5>
                
                <h6>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                </h6>
                <p class=\"text\">
                $s_desc
                </p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>
               		<div class=\"add-to-cart\">
							
								<div class=\"btn-group\" style=\"margin-left: 25px; margin-top: 15px\">
								<button pid='$pid' id='product' href='#' tabindex='0' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
                               
                </div>
                </div>

            </div>
            
</div>    
</form>
    </div>



    ";
                echo $element;
            }

       require_once 'action.php';    
            ?>