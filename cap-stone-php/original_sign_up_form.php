<?php
  session_start();// this is needed to use the session below
    //1 THIS INFORMATION CONNECT US TO THE DATABASE
        include "pdo_cap_connection.php";

        //
        if(isset($_POST["submit"])){
         // 1 customer insert section
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $tel=$_POST['phone_num'];
          $address=$_POST['address'];
          $city=$_POST['city'];
          $state=$_POST['state'];
          $areacode=$_POST['area_code'];
          $email=$_POST['email'];
          $date=$_POST['date'];
          $password=$_POST['password'];
          //The code below state where in the database we want our information to be stored table name ,and columns
          $sql_one="insert into customers (fname, lname, phone_num, address, city, state, area_code, email, birth, password) 
          values ('$fname','$lname', '$tel', '$address', '$city','$state','$areacode','$email','$date','$password')";

          // echo $sql_one;
          // this is needed to insert in table Customer_information table
          $db->query($sql_one);

         //retrieve the last ID inserted and store it in the session:
          $id= $db->lastInsertId();
          $_SESSION['id'] = $id; //store customer id in session to be used on the next page


          //2 vehicle inputinsert section section
          $brand=$_POST['brand'];
          $model=$_POST['model'];
          $type_ve=$_POST['type_ve'];
          $year_v=$_POST['year_v'];
           //The code below state where in the database we want our information to be stored table name ,and columns
          $sql_two="insert into vehicles (vehicle_id, brand, model, type_ve, year_v) 
          values ($id,'$brand', '$model', '$type_ve', '$year_v')";

          // echo $sql_two;
          // this is needed to insert in table vehicles_list table
          $db->query($sql_two);


          //3 service insert section
          $type_ser=$_POST['type_ser'];
          $date_service=$_POST['date_service'];
          $time_service=$_POST['time_service'];
          //The code below state where in the database we want our information to be stored table name ,and columns
          $sql_three="insert into services_v (service_id, type_ser, date_service, time_service) 
          values ($id, '$type_ser', '$date_service', '$time_service')";

          // echo $sql_three;
          // this is needed to insert in table vehicles_list table
          $db->query($sql_three);
        
        
          //this tells the borwser to go to the next page
          header('Location:original_customer_view.php');  
          exit();// this mean stop here and stop outputing everything
        }
?>

<!-----------------PHP CODE TO SUBMIT FORM TO DATABASE END------------------------------------------- -->
<!-- MAIN HEADER AND NAV BAR SECTION STARTS HERE OR PHP INCLUDE -->
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
                    <div class="navbar-header d-none d-md-block">
                        <a class=" navbar-brand" href="#"><img class=" logo banner_image " src="../images/banner-1.jpg" style=" width:20%; height:15%;"  ><br>AG.TECH</a>
                    </div><!--DO NOT DELETE THIS </div> it helps keep our table content in line-->
                       
                         <!--other nav section note any li that has "d-none d-md-block' in class it hides these on small screens--->
                            <ul class=" nav collaps navbar-collapse nav-link ">
                                <li><a class="px-2 "  href="../index.php">Home</a></li>
                                <li><a class="px-2 d-none d-md-block  " href="general_information.php" >Information</a></li>      <!-- "target="_blank" This code allow our link to go open in new page-->
                                <li><a class="px-2 d-none d-md-block " href="general_information.php" >News</a></li>                    <!-- "target="_blank" This code allow our link to go open in new page-->
                                <li><a class="px-2 d-none d-md-block " href="original_sign_in.php" >Login</a> </li>                              <!-- "target="_blank" This code allow our link to go open in new page-->
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
    <!-- NAV BAR ENDS -->
    <!-- NAV BAR ENDS -->
<!-- MAIN HEADER AND NAV BAR SECTION END HERE OR PHP INCLUDE -->
<!-- MAIN HEADER AND NAV BAR SECTION END HERE OR PHP INCLUDE -->

<!------ -----MAIN HEADER SECTION STARTS HAERE ------------->


    <!-- NAV BAR ENDS -->

    <!-- THIS ADD A PLACE HOLDER ABOVE OUR FORM FOR SPACING START-->
    <section>
      <div class="spacing_box" style="height: 170px; width:100%;"></div>
    </section>
    <!-- THIS ADD A PLACE HOLDER ABOVE OUR FORM FOR SPACING END-->

  <!-- MAIN CONTAINER START HERE -->
  <div class="container signUpForm info  ">

    <!-- SECTION 1 services box and images-->
    <section>
      <div class="spacing_box" style="height: 15px; width:100%;"></div>
    </section>

    <!-- SECTON 1 ENDS -->
    <!--PHP SECTION 1-->


    <!--------------------- SECTION1  FORM SIGN UPFORM-------------------->
      <section class= "row mx-2  form_section mt-5  mb-5 card ">  <!--col-md-6 offset-md-3-->
      <!-- <a class="" href = "vehicle_selection.php">NEXT STEP</a> -->
        <h2 class=" sub_headings mt-2"> Step 1 Sign up to schedule service appointment</h2>
        <div class="   form_box p-5">
          <form action="original_sign_up_form.php"  method="post" class="   pd-2 mx-5 p-2   form_size    " > <!--id="service_form" is added to form to show option but can use--> 
            <label for ="fname" class="mb-2  ">First Name:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="fname" placeholder ="First Name" name="fname">
            <label for="lname2" class="mb-2 mr-sm-2">Last Name:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="lname" placeholder="Last Name" name="lname"> 

            <label for="tel" class="mb-2 mr-sm-2">Phone:</label>
            <input type="tel" class="form-control mb-2 mr-sm-2" id="tel" placeholder="Phone" name="phone_num">

            <label for="address" class="mb-2 mr-sm-2">Address Line:</label>
            <input type="address" class="form-control mb-2 mr-sm-2" id="address" placeholder="Enter Address" name="address">

            <label for="city" class="mb-2 mr-sm-2">City:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="city" placeholder="Enter City" name="city">

            <label for="state" class="mb-2 mr-sm-2">State:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="state" placeholder="Enter State" name="state">

            <label for="areacode" class="mb-2 mr-sm-2">Area Code:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="areacode" placeholder="Enter Area Code" name="area_code">

            <label for="email" class="mb-2 mr-sm-2">Email:</label>
            <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Enter email" name="email"> 

            <label for="date" class="mb-2 mr-sm-2">Date of Birth:</label>
            <input type="date" class="form-control mb-2 mr-sm-2" id="date" placeholder="Select date " name="date">

            <label for="password" class="mb-2 mr-sm-2">Create Password:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="password" placeholder="password" name="password">

            <div class="form-check mb-2 mr-sm-2">

            </div>    


<!-------------------VEHICLE SECTION OF FORM------------------------------>
                <label for ="brand_vehicle" class="mb-2  ">Brand vehicle:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="brand" placeholder =" Enter brand vehicle" name="brand">

                <label for="model_vehicle" class="mb-2 mr-sm-2"> Vehicle Modle:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="model" placeholder=" Enter model vehicle" name="model"> 

                <label for="type_vehicle" class="mb-2 mr-sm-2"> Vehicle type:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="type_ve" placeholder="Enter type car or van" name="type_ve"> 

                <label for="year_vehicle" class="mb-2 mr-sm-2">Year:</label>
                <input type="number" class="form-control mb-2 mr-sm-2" id="year_v" placeholder=" Enter year vehicle" name="year_v">

                

<!-------------------SERVICE SECTION OF FORM----------------------------------->


                <label for="date" class="mb-2 mr-sm-2">Date of service:</label>
                <input type="date" class="form-control mb-2 mr-sm-2" id="date" placeholder="Select date " name="date_service">

                <label for="time" class="mb-2 mr-sm-2">Time:</label>
                <input type="time" class="form-control mb-2 mr-sm-2" id="time" placeholder="Select time" name="time_service"><br>
                <!--try radio option to select on form------->
                <label>SERVICES</label><br>
                <label for="html">Tire Change $30.00</label>
                <input type="radio" id="tire" name="type_ser" value="Tire Change"><br>
                <label for="html">Tire Purchase $100.00 per Tire</label>
                <input type="radio" id="purchase" name="type_ser" value="Tire Purchase"><br>
                <label for="html">Oil Change $70.00</label>
                <input type="radio" id="oil" name="type_ser" value="Oil change"><br>
                <label for="html">Vehicle Testing $50.00</label>
                <input type="radio" id="vehicle" name="type_ser" value="Vehicle Check"><br><br>
                
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>

          </form>
                <!-- Service 1
                <label for="service_type">Choose service:</label><br>
                <select id="service_type" name="service_type" form="service_form" >
                <option value="Tire Change"></option>
                <option value="Tire Change">Tire Change $30.00</option>
                <option value="Tire Purchase">Tire Purchase $100.00 per Tire </option>
                <option value="Oil Change">Oil Change $70.00</option>
                <option value="Vehicle Testing">Vehicle Testing $50.00</option>
                </select>
                <br><br> -->

        </div>



      </section>
      <!-- THIS ADD A PLACE HOLDER BELOW OUR FORM FOR SPACING  START-->
       <section>
        <div class="spacing_box" style="height: 50px; width:100%;"></div>
      </section>
      <!-- THIS ADD A PLACE HOLDER BELOW OUR FORM FOR SPACING  END-->

      
    

  </div>
  <!-- MAIN CONTAINER ENDS -->
<!-- FOOTER STARTS -->
<!------- MAIN FOOTER SECTION STARTS HERE OR PHP INCLUDE----- -->
<!------- MAIN FOOTER SECTION STARTS HERE OR PHP INCLUDE----- -->
<?php
include "or_footer_capstone.php";
?>
<!-- MAIN FOOTER SECTION END HERE OR PHP INCLUDE -->
<!-- MAIN FOOTER SECTION END HERE OR PHP INCLUDE -->

    <!-- AG JAVASCRIPT FILE LINK -->
    <script src="js_folder/capstone.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>