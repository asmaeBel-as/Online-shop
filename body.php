<!-- Carousel -->


<div id="demo" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/cars/welcome-bg.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/cars/BBT-Wallpapers-Download-Free-HD-.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/cars/find-your-own-lane-hero-d.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="section mainn mainn-raised">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Categories</h3>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="container1">
                    <img src="./product_images/van.jpg" class="img">
                    <div class="shop-img">
                        <div class="shop-body">
                            <h3>Vancars collection </h3>
                            <a href="newpage.php?p=2" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="container1">
                    <img src="./product_images/supercar.jpg" class="img">
                    <div class="shop-img">
                        <div class="shop-body">
                            <h3>Supercars collection </h3>
                            <a href="newpage.php?p=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="container1">
                    <img src="./product_images/sedan.jpg" class="img">
                    <div class="shop-img">
                        <div class="shop-body">
                            <h3>Sedancars collection </h3>
                            <a href="newpage.php?p=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


















<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Products</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <?php
                include "db.php";


                $sql = "SELECT * FROM products";

                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $cat_name = $row['product_cat'];
                        $pro_id = $row['product_id'];

                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $sdesc = $row['s_desc'];


                        echo "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
     
    <a href ='newpage.php?p=$pro_id'>
        <div class=\"product\">
            <div>
                <img src= \"product_images/$pro_image\" alt=\"image1\" class=\"img-fluid card-img-top\" height: 150pxwidth:200px>
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
                            <div class='add-to-cart'>
									<button pid='$pro_id' id='product' href='#' tabindex='0' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button></div>
							</div>
                                </div>
                                

            </div>
            
</div>    

</div>
    ";
                    }
                } else {
                    echo "0 results";
                }


                $con->close();

                ?>
            </div>
        </div>
    </div>
</div>
</div>