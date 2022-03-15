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
                                <li><a class="px-2  " href="original_sign_up_form.php" >Sign Up</a></li>                       <!-- "target="_blank" This code allow our link to go open in new page-->
                                <li><a class="px-2  " href="original_sign_in.php" >Login</a> </li>                              <!-- "target="_blank" This code allow our link to go open in new page-->
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
<!------------------------------------ADD PLACE HOLDER TO NEW  NAV BAR----------------------------------------->
<section class="row mt-5" style="height: 100px;" >


</section>
 

<!------------------------------------ADD PLACE HOLDER TO NEW  NAV BAR----------------------------------------->
    <!------------------------------------TEST NAV BAR START----------------------------------------->

 

<!--------------------------------------------TEST NAV BAR END----------------------------------------->


    <!-- MAIN CONTAINER BEGINS -->
    <div class="container-fluid main_div  ">
            <!-- INFORMATION FOR DATABASE SECTION START -->
        <!-- THIS ADD A PLACE HOLDER ABOVE OUR FORM FOR SPACING START-->
        <section class="row">
            <div class="spacing_box " style="height: 100px; width:100%;"></div>
        </section>
        <!-- THIS ADD A PLACE HOLDER ABOVE OUR FORM FOR SPACING END-->
        <section class="row mt-5">

    
        </section>


        <!-- TEST SECTION STARTS -->
<section class="test_sectionM">

    <article class="">

        <div class="t_box_table">
            <table class="test_table"> <!--Test table -->
                    <!-- TEST TABLE HEADING ROW -->
                    <!-- <tr>
                        <th colspan= "" class="thead_test">Customer #</th>
                        <th colspan= "" class="thead_test">Customer Name</th>
                        <th colspan= "" class="thead_test">Phone Number</th>
                        <th colspan= "" class="thead_test">Appointment Date</th>
                        <th colspan= "" class="thead_test">Time</th>
                        <th colspan= "" class="thead_test">Brand Vehicle</th>
                        <th colspan= "" class="thead_test">Model  Vehicle</th>
                        <th colspan= "" class="thead_test">Year Vehicle</th>
                        <th colspan= "" class="thead_test">Service</th>
                        <th colspan= "" class="thead_test">Status</th> incomplete and completed
      
                    </tr> -->

                       <!-- Start PHP Test row 1 information feed from php_customer_details.php -->
                       <?php
                       
                       ?>
                       <!-- END PHP Test row 1 information feed from php_customer_details.php -->





            </table>
        </div>
    </article>


</section>
        <!-- TEST SECTION ENDS -->




    <!-- TABLE TWO SECTION 2 -->
        <section class="row mt-5">
            <div class=" card table_box1">

            </div>
    
        </section>


        <!--INFORMATION FORM DATABASE SECTION ENDS-->

        <!-- <div class= "submit_button" >
            <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </div> -->

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




    