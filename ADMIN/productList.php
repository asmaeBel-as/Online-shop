 <?php
    session_start();
    include("../db.php");
    include 'header.php';
    include 'sidebar.php';
    error_reporting(0);
    if (isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete') {
        $product_id = $_GET['product_id'];
        ///////picture delete/////////
        $result = mysqli_query($con, "select product_image from products where product_id='$product_id'")
            or die("query is incorrect...");

        list($picture) = mysqli_fetch_array($result);
        $path = "../product_images/$picture";

        if (file_exists($path) == true) {
            unlink($path);
        } else {
        }
        /*this is delet query*/
        mysqli_query($con, "delete from products where product_id='$product_id'") or die("query is incorrect...");
    }

    ///pagination

    $page = $_GET['page'];

    if ($page == "" || $page == "1") {
        $page1 = 0;
    } else {
        $page1 = ($page * 10) - 10;
    }
    include "sidenav.php";
    include "topheader.php";
    ?>
 <!-- End Navbar -->
 <div class="page-wrapper" style="min-height: 250px;">
     <div class="content">
         <div class="container-fluid">


             <div class="col-md-14">
                 <div class="card ">
                     <div class="card-header card-header-primary">
                         <h4 class="card-title"> Products List</h4>

                     </div>
                     <div class="card-body">
                         <div class="table-responsive ps">
                             <table class="table tablesorter " id="page1">
                                 <thead class=" text-primary">
                                     <tr>
                                         <th>Image</th>
                                         <th>Name</th>
                                         <th>Price</th>
                                         <th>
                                             <a class=" btn btn-primary" href="addProduct.php" style="background-color: #1c374144; border:none;">Add New</a>
                                         </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php

                                        $result = mysqli_query($con, "select product_id,product_image, product_title,product_price from products  where  product_cat=1 or product_cat=2 or product_cat=3 Limit $page1,12") or die("query 1 incorrect.....");

                                        while (list($product_id, $image, $product_name, $price) = mysqli_fetch_array($result)) {
                                            echo "<tr><td><img src='../product_images/$image' style='width:60%; height:60%; border:groove #000'></td><td>$product_name</td>
                        <td>$price</td>
                        <td>

                        <a style='background-color: #1c374144; border:none;' class=' btn btn-success' href='productList.php?product_id=$product_id&action=delete' >Delete</a>
                        </td></tr>";
                                        }

                                        ?>
                                 </tbody>
                             </table>
                             <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                 <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                             </div>
                             <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                 <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <nav aria-label="Page navigation example">
                     <ul class="pagination">
                         <li class="page-item">
                             <a class="page-link" href="#" aria-label="Previous">
                                 <span aria-hidden="true">&laquo;</span>
                                 <span class="sr-only">Previous</span>
                             </a>
                         </li>
                         <?php
                            //counting paging

                            $paging = mysqli_query($con, "select product_id,product_image, product_title,product_price from products");
                            $count = mysqli_num_rows($paging);

                            $a = $count / 10;
                            $a = ceil($a);

                            for ($b = 1; $b <= $a; $b++) {
                            ?>
                             <li class="page-item"><a class="page-link" href="productlist.php?page=<?php echo $b; ?>"><?php echo $b . " "; ?></a></li>
                         <?php
                            }
                            ?>
                         <li class="page-item">
                             <a class="page-link" href="#" aria-label="Next">
                                 <span aria-hidden="true">&raquo;</span>
                                 <span class="sr-only">Next</span>
                             </a>
                         </li>
                     </ul>
                 </nav>



             </div>


         </div>
     </div>
 </div>
 <script src="bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="/dist/js/bootstrap.bundle.min.js"></script>
 <script src="js/app-style-switcher.js"></script>
 <!--Wave Effects -->

 <!--Menu sidebar -->
 <script src="js/sidebarmenu.js"></script>
 <!--Custom JavaScript -->
 <script src="js/custom.js"></script>