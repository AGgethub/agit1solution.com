<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet"  href="css_folder/capstone.css">
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
                                <li><a class="px-2 d-none d-md-block "  href="index.php">Home</a></li>  <!-- "target=_blank" This code allow our link to go open in new page-->
                                <li><a class="px-2 d-none d-md-block " href="#services_section" >Services</a></li>           
                                <!-- <li><a class="px-2 d-none d-md-block " href="general_information.php" >Information</a></li>     -->
                                <!-- <li><a class="px-2 " href="original_sign_in.php" >Book Appointment</a></li>                       -->
                                <li><a class="px-2 d-none d-md-block " href="general_information.php" >News</a></li>                 
                                <!-- <li><a class="px-2  " href="original_sign_up_form.php" >Sign Up</a></li>               -->
                                <!-- <li><a class="px-2  " href="original_sign_in.php" >Login</a> </li>                            -->
                                <!-- <li><a class="px-2 d-none d-md-block  " href="general_information.php" >Contact Us</a></li> -->
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
    <!-- NAV BAR ENDS -->
    <!------------------------------------ADD PLACE HOLDER TO NEW  NAV BAR----------------------------------------->
<section class="row mt-5" style="height: 100px;" >


</section>
 

<!------------------------------------ADD PLACE HOLDER TO NEW  NAV BAR----------------------------------------->

  <!-- MAIN CONTAINER START HERE -->
  <div class="container signUpForm info  ">

    <!-- THIS ADD A PLACE HOLDER ABOVE OUR FORM FOR SPACING START-->
    <section>
      <div class="spacing_box" style="height: 100px; width:100%;"></div>
    </section>
    <!-- THIS ADD A PLACE HOLDER ABOVE OUR FORM FOR SPACING END-->

    <!--message if password in incorrect-->

          <!--message if password in incorrect-->
 

    <!-- SECTION1 SIGN IN FORM STARTS-->
      <section class= "row mx-2    form_section mt-5 mb-3 card  ">  <!--col-md-6 offset-md-3-->
        
        <h3 class=" sub_headings">Agent sign in to process customers request</h3>

        <div class="  form_box  ">
            <form action="original_agent_view.php" class="   pd-2 m-6 p-5  form_size   " > <!--Need to add link action-->

              <label for="email" class="mb-2 mr-sm-2">Email:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Enter email" name="email"> 

              <label for="password" class="mb-2 mr-sm-2">Password:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="password" placeholder="Enter Password " name="password">

              <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="remember"> Remember me
                </label>
              </div>    
              <button type="submit" name="login" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
      </section>
      <!-- SECTION1 SIGN IN FORM ENS-->

      <!-- THIS ADD A PLACE HOLDER BELOW OUR FORM FOR SPACING  START-->
      <section>
        <div class="spacing_box" style="height: 320px; width:100%;"></div>
      </section>
      <!-- THIS ADD A PLACE HOLDER BELOW OUR FORM FOR SPACING  END-->

      
  </div>
  <!-- MAIN CONTAINER ENDS -->
<!-- FOOTER STARTS -->
<?php
include "or_footer_capstone.php";
?>

<!-- FOOTER ENDS -->

    <!-- AG JAVASCRIPT FILE LINK -->
    <script src="js_folder/capstone.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>