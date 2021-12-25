<?php
 function cartElement($product_title,$product_price,$product_image,$product_id)
 {
   $element="<form action=\"cart.php?action=remove&id=$product_id\" method=\"post\" class=\"cart-items\">
   <div class=\"border rounded\">
       <div class=\"row bg-white\">
           <div class=\"col-md-3 pl-0\">
               <img src=$product_image alt=\"Image1\" class=\"img-fluid\">
           </div>
           <div class=\"col-md-6\">
               <h5 class=\"pt-2\">$product_title</h5>
               <small class=\"text-secondary\">Seller:dailytuition</small>
               <h5 class=\"pt-2\">$product_price</h5>
               <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
               <button type=\"submi\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
           </div>
           <div class=\"col-md-3 py-5\">
               <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
               <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\"/> 
               <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
           </div>
       </div>
   </div>
</form>";
echo $element;
 }
?>
 