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

  <!-- BANNER JUMBROTRON -->
  <!--JUMBOTRON START-->
  <!-- This section is our banner picture after our nav bar note d-none d-sm-block are used to show and hide content at different page size -->
  <div class= "jumbotron jumbotron-fluid .d-*-none d-*-* slideshow_box " style="height: 450px; width:100%;"   >

    <div class="mySlides edits ">
      <div class="numbertext edits">1 / 3</div>
      <img class=" banner_image " src="../images/banner-1.jpg" style=" width:100%;"  >  <!--d-none d-sm-block--><!--remove ../ when in general folder for picture to show-->
      <!-- <div class="text">Caption One</div> -->
    </div>
    <div class="mySlides edits ">
      <div class="numbertext edits">2 / 3</div>
      <img class=" banner_image " src="../images/banner-2.jpg" style=" width:100%;"  >  <!--d-none d-sm-block--><!--remove ../ when in general folder for picture to show-->
      <!-- <div class="text">Caption Two</div> -->
    </div>
    <div class="mySlides edits ">
      <div class="numbertext edits">3 / 3</div>
      <img class=" banner_image " src="../images/banner-3.jpg" style=" width:100%;"  >  <!--d-none d-sm-block--><!--remove ../ when in general folder for picture to show-->
      <!-- <div class="text">Caption Three</div> -->
    </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>


  </div>

   <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <!--JUMBOTRON END-->

  <!-- MAIN CONTAINER START HERE -->
  <div class="container-fluid info  ">

    <!-- SECTION 1 services box and images-->
    <section class="row align-items-center mt-5 sec_one  " id="services_section">
      <article class="col-lg info left_b mx-2  " >
      <a href="original_choose_sign_in.php" class=" remove_link_style">
        <div class= "card m-3 p-5  first_box  " >
          <img class="card card-img-top image_size " src="../Images/tire_servicebetter.jpg" ><!--remove ../ when in general folder for picture to show-->
          <h4 class="service_heading_h4"> Tire Change</h4>
          <h6 class="text_color"> Look For A Safe Place. It is critical to get off the road in a safe manner when you realise that 
            your car has a flat tire.Do not swerve suddenly as it will be dangerous for you and other vehicles cruising on the road.</h6>
       
        </div>
      </a>
      </article>

      <article class="col-lg info middle_b mx-2 ">
       <a href="original_choose_sign_in.php" class=" remove_link_style">     <div class= "card m-3 p-5 first_box  " >
          <img class="card card-img-top image_size" src="../Images/oil_change1.jpg"><!--remove ../ when in general folder for picture to show-->
          <h4 class="service_heading_h4">Oil Change</h4>
          <h6 class="text_color" >If you’re using conventional oil, changes are recommended every 3,000 to 5,000 miles.
             Synthetic oil may allow for longer intervals between changes. Consult your owner’s manual, a repair guide, the oil jug</h6>
        </div>
      </a>
      </article>
      <article class="col-lg info right_b mx-2 ">
       <a href="original_choose_sign_in.php" class=" remove_link_style">
        <div class= "card m-3 p-5  first_box " >
          <img class="card card-img-top image_size" src="../Images/testing.jpg"><!--remove ../ when in general folder for picture to show-->
          <h4 class="service_heading_h4">Vehicle Inspection</h4>
          <h6 class="text_color">Vehicle inspection is a procedure mandated by national or subnational governments in many countries,
             in which a vehicle is inspected to ensure that it conforms to regulations governing safety,</h6>
        </div>
      </a>
      </article>


    </section>
    <!-- SECTON 1 ENDS -->

            <!-- SECTION 2 NEW services box and images-->
            <section class="row align-items-center mt-5 sec_one">
              <article class="col-lg info left_b  mx-2  ">
              <a href="general_information.php" class=" remove_link_style">
                <div class= "card m-3 p-5  first_box  " >
                  <img class="card card-img-top image_size " src="../Images/All_you_need1.jpg"><!--remove ../ when in general folder for picture to show-->
                  <h4 class="service_heading_h4">All information about your vehicle</h4>
                  <h6 class="text_color">Select for details regarding subject and more</h6>
                </div>
              </a>
              </article>
    
              <article class="col-lg info middle_b  mx-2  ">
              <a href="general_information.php" class=" remove_link_style">
                <div class= "card m-3 p-5 first_box  " >
                  <img class="card card-img-top image_size" src="../Images/oil_change1.jpg"><!--remove ../ when in general folder for picture to show-->
                  <h4 class="service_heading_h4">Oil Purchase and details</h4>
                  <h6 class="text_color">Select for details regarding subject and more</h6>
                </div>
              </a>
              </article>
              <article class="col-lg info right_b  mx-2  ">
              <a href="general_information.php" class=" remove_link_style">
                <div class= "card m-3 p-5  first_box " >
                  <img class="card card-img-top image_size" src="../Images/All_your_checksbest.jpg"><!--remove ../ when in general folder for picture to show-->
                  <h4 class="service_heading_h4">Vehicle checks needed</h4>
                  <h6 class="text_color">Select for details regarding subject and more</h6>
                </div>
              </a>
              </article>
    
    
            </section>
      <!-- SECTON 1 ENDS -->

  <!-- SECTION SIGN UP AND LOGIN LINKS SECITON -->
    <section class= " row">
    <h3 class="sub_headings"> BOOK YOUR APPOINTMENT TODAY </h3>
    <section class="row align-items-center">
      <article class="col-lg info ">
        <div class= "card m-4 p-5  border border-info" >
          <img class="card card-img-top border border-info" src="">  <!--this create a line over our heading -->
          <h5> If you are a <strong>member</strong> select login to go to sign in page.</h5>
          <!-- Login Button -->
          <div class="form-check mb-2 mr-sm-2">
              <form action="original_choose_sign_in.php"><!--Need to add action -->
                <button action="original_sign_in.php" type="submit" class="btn btn-primary mb-2" >
                    Login <!--<a href="sign_in.html" >Login</a> -->
                </button>
              </form>
              <img class="card card-img-top border border-info" src="">  <!--this create a ling under our button -->
          </div>
        </div>
      </article>

      <article class="col-lg info ">
        <div class= "card m-4 p-5  border border-info" >
          <img class="card card-img-top border border-info" src="">  <!--this create a line over our heading -->
          <h5>If you are an <strong>agent</strong> select login to go to sign in page.</h5>
          <!-- Sign up button -->
          <div class="form-check mb-2 mr-sm-2 ">
            <form action="original_choose_sign_in.php">  <!--Need to add action -->
              <label class="form-check-label">
              </label>
              <button type="submit" class="btn btn-primary mb-2">
                Sign Up  <!--<a class="nav-link " href="sign_up_form.html" >Sign Up</a>-->
              </button>
            </form>
            <img class="card card-img-top border border-info" src="">  <!--this create a ling under our button -->
          </div>
        </div>
      </article>

    </section>
    <!-- SECTION SIGN UP AND LOGIN LINKS SECITON ENDS -->

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




    