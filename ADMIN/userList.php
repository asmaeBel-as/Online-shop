 <?php
  include 'header.php';
  include 'sidebar.php';

  ?>
 <div class="page-wrapper" style="min-height: 250px;">
   <?php

    include("../db.php");
    error_reporting(0);
    if (isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete') {
      $user_id = $_GET['user_id'];

      mysqli_query($con, "delete from user_info where user_id='$user_id'") or die("query is incorrect...");
    }

    ///pagination

    $page = $_GET['page'];

    if ($page == "" || $page == "1") {
      $page1 = 0;
    } else {
      $page1 = ($page * 10) - 10;
    }

    ?>
   <!-- End Navbar -->

   <div class="content">

     <div class="container-fluid">

       <div class="col-md-14">
         <div class="card ">
           <div class="card-header card-header-primary">
             <h4 class="card-title"> User List</h4>

           </div>
           <div class="card-body">
             <div class="table-responsive ps">
               <table class="table tablesorter " id="page1">
                 <thead class=" text-primary">
                   <tr>
                     <th>First name</th>
                     <th>last Name</th>
                     <th>Email</th>
                     <th>Mobile</th>
                     <th>Address</th>
                     <th>
                       <a class=" btn btn-primary" href="addUser.php" style="background-color: #1c374144; border:none;">Add New</a>
                     </th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php

                    $result = mysqli_query($con, "select user_id,first_name, last_name,email,mobile,address from user_info Limit $page1,12") or die("query 1 incorrect.....");
                    while (list($user_id, $first_name, $last_name, $email, $mobile, $address) = mysqli_fetch_array($result)) {
                      echo "<tr><td>$first_name</td>
                        <td>$last_name</td>
                        <td>$email</td>
                        <td>$mobile</td>
                        <td>$address</td>
                        <td>

                        <a style='background-color: #1c374144; border:none;' class=' btn btn-success' href='userList.php?user_id=$user_id&action=delete'>Delete</a>
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

              $paging = mysqli_query($con, "select user_id,first_name, last_name,email,mobile,address from user_info");
              $count = mysqli_num_rows($paging);

              $a = $count / 10;
              $a = ceil($a);

              for ($b = 1; $b <= $a; $b++) {
              ?>
               <li class="page-item"><a class="page-link" href="userList.php?page=<?php echo $b; ?>"><?php echo $b . " "; ?></a></li>
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