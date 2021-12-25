<?php
function fonction1($product_id, $product_title, $product_price, $product_desc,$product_brand)
{
    $element = "
    <a href='newpage.php?p=$product_id'> </a>
   
    <div class=\"col-md-5\">
    <div class=\"product-details\">
        <h2 class=\"product-name\">$product_title</h2>
        <div>
            <h6 class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </h6>
        </div>
        
         <h6 class=\"brand\">$product_brand</h6>
         
         
         <div class=\"product-options1\">
         <label>
            <h1 class=\"selectcolor\">Car Brand:</h1>
             <select class=\"input-select\">
             <h3 class=\"price\">$$product_price</h3>
             
         </label>
         </div>
        
        <h1 class=\"description\">Description:<br></h1>
        <p class=\"description1\">$product_desc</p>				
        <div class=\"add-to-cart\">
        <div class=\"btn-group\" style=\"margin-left: 25px; margin-top: 15px\">
        <button class=\"add-to-cart-btn\" name=\"addToCart\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
        </div>
        </div> 
        </div>



       	
";


    echo $element;


    require_once 'action.php';
}
