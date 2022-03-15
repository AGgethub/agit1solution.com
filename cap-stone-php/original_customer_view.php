<?php
  session_start();// this is needed to use the session below
  //1 THIS INFORMATION CONNECT US TO THE DATABASE
include "pdo_cap_connection.php";

$id_pre =(int) $_SESSION['id']; //This saves the id varible from the previous page us use in sql statement below 
$sql_one ='SELECT * FROM customers WHERE cus_id ='.$id_pre; // this pull the information form our CUSTOMER_INFORMATION TABLE IN database with id as reference
$sql_two ='SELECT * FROM vehicles WHERE vehicle_id ='.$id_pre;  //.$id;
$sql_three ='SELECT * FROM services_v WHERE service_id ='.$id_pre;   //.$id;

// 2b) Perform the query:
    $results_one = $db->query($sql_one); //E.g. SELECT * FROM customer_information
    $results_two = $db_two->query($sql_two); //E.g. SELECT * FROM customer_information
    $results_three = $db_three->query($sql_three); //E.g. SELECT * FROM customer_information

//print an array in a format for testing to see what was returned
function echoPre ($x){
    echo '<pre>';
    print_r($x);
    echo '</pre>';
}

// echo $sql_one;
// exit();
                                 
?>
<!------------------------------ PHP TABLE DATE ENDS HERE-------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet"  href="../css_folder/capstone.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <!-- NAV BAR STARTS -->
        <nav class= "navbar  navbar-expand-lg navbar-dark fixed-top pb-2">  <!--navbar  navbar-expand-lg navbar-dark fixed-top pb-2 -->
                <!-- <div class="logo mx-4 "></div> -->
                <!-- Actual Nav Bar Section-->
                <div class="container-fluid">
                    <!-- <div class="logo mx-4 "></div> previous logo --><!-- This is for our logo on the page -->
                    <div class="navbar-header">
                        <a class=" navbar-brand" href="#"><img class=" logo banner_image " src="../images/banner-1.jpg" style=" width:20%; height:15%;"  ><br>AG.TECH</a>
                    </div><!--DO NOT DELETE THIS </div> it helps keep our table content in line-->
                       
                         <!--other nav section note any li that has "d-none d-md-block' in class it hides these on small screens--->
                            <ul class=" nav collaps navbar-collapse nav-link ">
                                <li><a class="px-2 d-none d-md-block "  href="index.php">Home</a></li>
                                <li><a class="px-2 d-none d-md-block " href="#services_section" >Services</a></li>             <!-- "target=_blank" This code allow our link to go open in new page-->
                                <li><a class="px-2 d-none d-md-block " href="general_information.php" >Information</a></li>      <!-- "target="_blank" This code allow our link to go open in new page-->
                                <li><a class="px-2 " href="original_sign_in.php" >Book Appointment</a></li>                        <!-- "target="_blank" This code allow our link to go open in new page-->
                                <li><a class="px-2 d-none d-md-block " href="general_information.php" >News</a></li>                    <!-- "target="_blank" This code allow our link to go open in new page-->
                                <!-- <li><a class="px-2  " href="original_sign_up_form.php" >Sign Up</a></li> -->
                                <!-- <li><a class="px-2  " href="original_sign_in.php" >Login</a> </li> -->
                                <li><a class="px-2 d-none d-md-block  " href="general_information.php" >Contact Us</a></li>
                                <!-- <li class="px-2"><input type="text" value="submit" ><button>search</button></li>  -->
                           </ul>
                           <form class="d-flex me-5">
                            <input class="form-control me-3 " type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success me-3" type="submit">Search</button>
                          </form>
                       </div>
                </div>
        </nav>
    <!-- NAV BAR ENDS -->

    <!-- MAIN CONTAINER BEGINS -->
    <div class="container " style="background-color:#deebea;">
            <!-- INFORMATION FOR DATABASE SECTION START -->
        <!-- THIS section div ADDS A PLACE HOLDER ABOVE OUR FORM FOR SPACING START-->
        <section class="row">
            <div class="spacing_box " style="height: 100px; width:100%;"></div>
        </section>

<!---------------------------LOGIN LOG OUT BUTTON--------------------------------------->
<!-- BUTTON AND LOGOUT LINKS GOOD -->
<section class="row ">
<div class=" col mt-4 ">
        <form class= "submit_button">
            <!-- <button type="submit" class="btn btn-primary mb-2 ">Edit</button> -->
        </form>
</div>
<div class=" col mt-3  ">
        <form class= "submit_button ">
            <!-- <button type="submit" class="btn btn-primary mb-2 float-end">Edit</button> -->
        </form>
</div>
<div class=" col  mt-3  ">
      <a href="index.php" class=" float-end"><h5>Log out</h5></a>
</div>

</section>
<!-- BUTTON AND LOGOUT LINKS GOOD -->

<!---------------------------LOGIN LOG OUT BUTTON--------------------------------------->

<!---------------------------SECTION 1 CUSTOMER INFORMATION STARTS--------------------------------------->

        <section class="row mt-3">
            <article class="col-lg ">
                <div class= "card m-1 p-2  " > <!--cus_info_box-->
                    
                    <h4 class="service_heading_h4"> CUSTOMER INFORMATION</h4>
                    <table class="test_table"> <!--TABLE DATA table -->
                        <!-- TEST TABLE HEADING ROW -->
                        <tr>
                            <th colspan= "" class="thead_test">First Name</th>
                            <th colspan= "" class="thead_test">Last Name</th>
                            <th colspan= "" class="thead_test">Phone Number</th>
                            <th colspan= "" class="thead_test">Email</th>

                        </tr>

                    <!------------------ 1 PHP TABLE DATE START HERE-------------------------->

                    <?php
                            // Fetch the results of the query:
                            while ( $row = $results_one ->fetch( PDO::FETCH_ASSOC ) ) {
                                // print_r($row);
                                // echoPre($row);
                                // exit();
                                 
                                
                            ?>
                            <!-- Test row 1 -->
                        <tr >
                            <td colspan= "" class="t_data "><?=$row ["fname"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["lname"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["phone_num"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["email"]?></td>
                            <td colspan= "" class="t_data "> </td> <!--Added as a place holder-->
                            <!-- Button for test data here -->
                            <td colspan= "" class="tdata_test"> </td> <!--Added as a place holder-->
                            <!-- Button for test data here -->
                            
                            <!-- <td> <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button</td> -->

                        </tr>

                        <?php
                            }
                            ?>

                    </table>
                </div>
           </article>

        </section>
<!------------------------------- SECTION 1 CUSTOMER INFORMATION ENDS--------------------------->




<!------------------- SECTION 2 CUSTOMER INFORMATION STARTS-------------------------------------->
        <section class="row">
            <!--CARS/VEHICLES-->
            <article class="col-lg ">
                <div class= "card m-1 p-2 " >  <!--cus_car_serv_boxes-->

                    <h4 class="service_heading_h4"> Customer Vehicles</h4>

                    <table class="test_table"> <!--Test table -->
                        <!-- VEHICLE TABLE HEADING ROW -->
                        <tr>
                            <th colspan= "" class="thead_test">Brand Vehicle</th>
                            <th colspan= "" class="thead_test">Model</th>
                            <th colspan= "" class="thead_test">Type Vehicle</th>
                            <th colspan= "" class="thead_test">Year</th>

                        </tr>

                   <!------------------------------2 PHP TABLE DATE START HERE-------------->
                        <?php
                            // Fetch the results of the query:
                            while ( $row = $results_two->fetch( PDO::FETCH_ASSOC ) ) {
                                // print_r($row);
                                // echoPre($row);
                                
                            ?>
                            <!-- Test row 1 -->
                        <tr >
                            <td colspan= "" class="t_data "><?=$row ["brand"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["model"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["type_ve"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["year_v"]?></td>
                            <td colspan= "" class="t_data "> </td> <!--Added as a place holder-->
                            <td> 

                        </tr>

                            <?php
                            }
                            ?>
                   <!--------------------------- 2 PHP TABLE DATE START HERE----------------->
                    </table>
                </div>
           </article>


<!------------------------3-SERVICE-------3-USED----------------------------------------------------------->
           <article class="col-lg ">
                <div class= "card m-1 p-2 " >  <!--cus_car_serv_boxes-->
                    
              <h4 class="service_heading_h4"> Services Used</h4>
                <table class="test_table"> <!--Test table -->
                    <!-- SERVICES TABLE HEADING ROW -->
                    <tr>
                        <th colspan= "" class="thead_test">Service Type</th>
                        <th colspan= "" class="thead_test">Appointment date</th>
                        <th colspan= "" class="thead_test">Time</th>
                        <!-- <th colspan= "" class="thead_test">Cost</th> -->

                    </tr>
                 <!----------------------- 3 PHP TABLE DATE START HERE------------------------>

                      <?php
                            // Fetch the results of the query:
                            while ( $row = $results_three->fetch( PDO::FETCH_ASSOC ) ) {
                                // print_r($row);
                                // echoPre($row);
                                
                            ?>
                            <!-- Test row 1 -->
                        <tr >
                            <td colspan= "" class="t_data "><?=$row ["type_ser"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["date_service"]?></td>
                            <td colspan= "" class="t_data "><?=$row ["time_service"]?></td>
                            <td colspan= "" class="t_data "> </td> <!--Added as a place holder-->
                            <!-- Button for test data here -->
                            <td colspan= "" class="tdata_test"> </td> <!--Added as a place holder-->
                            <!-- Button for test data here -->
                            <td> 

                        </tr>

                            <?php
                            }
                            ?>
                  <!------------------------------ 3 PHP TABLE DATE START HERE---------------------->
                </table>
                </div>
           </article>

        </section>
            <!-- BUTTON AND LOGOUT LINKS GOOD -->
            <section class="row ">
        <div class=" col mt-3  ">
                <form class= "submit_button ">
                    <!-- <button type="submit" class="btn btn-primary mb-2 float-end">Edit</button> -->
                </form>
        </div>
        <div class=" col  mt-3  ">
            <!-- <a href="index.php" class=" float-end"><h5>Log out</h5></a> -->
        </div>
        <div class=" col mt-4 ">
                <form class= "submit_button">
                    <button type="submit" class="btn btn-primary mb-2 float-end ">SUBMIT</button>
                </form>
        </div>

        </section>
    <!-- BUTTON AND LOGOUT LINKS GOOD -->
<!--------------------- SECTION 2 CUSTOMER INFORMATION ENDS-------------------------------------------->

        <!-- THIS section div ADDS A PLACE HOLDER ABOVE OUR FORM FOR SPACING START-->
        <section class="row">
            <div class="spacing_box " style="height: 400px; width:100%;"></div>
        </section>

        <!-- SECTION1 SIGN IN FORM-->
 
        </div>
  <!-- MAIN CONTAINER ENDS -->

<!--------- FOOTER STARTS------------------------->
<!--------- FOOTER STARTS------------------------->

<footer class=" footer display ">
  <div class="container-fluid">
    <section class="row  footer_main"><!----------------SOCIAL LINKS----------------------------------------------------->
      <article class="col-4 col-lg"  >
        <div class="footer_certer">
          <h5 class=" pt-4 footh5">Social Links</h5><hr>
          <ul class="footer_L_edits">
            <li><a href="#linkpage"><img src="../Images/social_icons/Facebook_icon.png" ></a></span></li><!--remove ../ when in general folder for picture to show-->
            <li><a href="#linkpage"><img src="../Images/social_icons/twitter_icon.png" ></a></span></li><!--remove ../ when in general folder for picture to show-->
            <li><a href="#linkpage"><img src="../Images/social_icons/gmail_icon.png" ></a></li><!--remove ../ when in general folder for picture to show-->
            <li><a href="#linkpage"><img src="../Images/social_icons/P_icons.png" ></a></li><!--remove ../ when in general folder for picture to show-->
          </ul>
       </div>
    
      </article>
<!----------------COMPAN INFORMATION----------------------------------------------->
      <article class="col-4 col-lg" >
        <h5 class=" pt-4 footh5">Company Address and contact</h5><hr>
        <div class=" footer_certer">
            <ul class=" footer_the_middle">
            <li>1111 West Palm Beach</li>
            <li>000-000-0000</li>
            <li><p>All rights reserved &copy; Copy </p></li>
            </ul>
       </div>

      </article>
<!-----------------COMPANY LINKS---------------------------------------------------->
      <article class=" col-lg col-4 col-lg" >   <!-- GOOD TO TRY card " style="    background-color: #486e80;"-->
        <h5 class="pt-4 footh5">Company Links</h5><hr>
        <div class="footer_certer">
            <ul class="footer_m_edits">
            <li><a href="" >Home</a></li>
            <li><a href="" >About our Company</a></li>
            <li><a href="">Services Offerred</a></li> 
            <li><a href="">Other Information</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Join Us</a></li>
            <li><a href="">Contact</a></li>
            </ul>
       </div>
      </article>
  
    </section>
  
  </div>

</footer>
<!----- FOOTER ENDS-------------------->
<!----- FOOTER ENDS-------------------->

    <!-- AG JAVASCRIPT FILE LINK -->
    <script src="../js_folder/capstone.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
