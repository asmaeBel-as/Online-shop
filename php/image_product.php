<?php
function image_product( $product_image)
{
    $element = "
<div class=\"col-md-5 col-md-push-2\">
                                <div class=\"product-main-img\">
                                    <div class=\"product\">
                                        <img src=\"product_images/$product_image\" alt=\"\" style=\"height: 100%;width:100%;\">
                                    </div>
                                </div>
                            </div>
                            ";
    echo $element;
}