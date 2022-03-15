<!-- THIS SHOULD BE USED TO INSERT INTO THE AGENT VIEW TABLE -->
<?php
// Fetch the result of the query:
include "pdo_cap_connection.php";

function echoPre ($y){
    echo '<pre>';
    print_r($y);
    echo '</pre>';
}

// 2a) Create the query string:
$sql = "SELECT * FROM customers";
// LEFT JOIN ON SQL statement used to create our new table pulling from customers, vehicles and services_v tables
$sql_agent = 
"SELECT customers.cus_id, 
customers. fname, 
customers. lname, 
customers. phone_num, 
customers. email, 
vehicles.brand, 
vehicles.model, 
vehicles.type_ve, 
vehicles.year_v, 
services_v.type_ser, 
services_v.date_service, 
services_v. 
time_service 
FROM Customers LEFT JOIN vehicles ON vehicles.vehicle_id = customers.cus_id 
LEFT JOIN services_v ON service_id = vehicles.vehicle_id";

// echo $sql_agent;
// exit();

// 2b) Perform the query:
// $result = $db->query( $sql); // E.g. SELECT * FROM inventory
$result_two = $db_agent->query( $sql_agent); // E.g. SELECT * FROM inventory
?>




<div class= "card m-1 p-2  agent_php_table  " >

    <table class=" col-lg "> <!--Test table -->
        <!-- TEST TABLE HEADING ROW -->
        <tr>
            <th colspan= "" class="thead_test">Customer #</th>
            <th colspan= "" class="thead_test">First Name</th>
            <th colspan= "" class="thead_test">Last Name</th>
            <th colspan= "" class="thead_test">Phone Number</th>
            <th colspan= "" class="thead_test">Email</th>
            <th colspan= "" class="thead_test">Brand Vehicle</th>
            <th colspan= "" class="thead_test">Model Vehicle</th>
            <th colspan= "" class="thead_test">Year Vehicle</th>
            <th colspan= "" class="thead_test">Service Required</th>
            <th colspan= "" class="thead_test">Date</th>
            <th colspan= "" class="thead_test">Time</th>
            <th colspan= "" class="thead_test">Status</th> <!--incomplete and completed-->

        </tr>

        <?php
        // Fetch the results of the query:
        while ( $row = $result_two->fetch( PDO::FETCH_ASSOC ) ) {
            // print_r($row);
            // echoPre($row);
        ?>

        <!-- Test row 1 -->
        <tr >
            <td colspan= "" class="t_data"><?=$row ["cus_id"]?></td>
            <td colspan= "" class="t_data"><?=$row ["fname"]?></td>
            <td colspan= "" class="t_data"><?=$row ["lname"]?></td>
            <td colspan= "" class="t_data"><?=$row ["phone_num"]?></td>
            <td colspan= "" class="t_data"><?=$row ["email"]?></td>
            <td colspan= "" class="t_data"><?=$row ["brand"]?></td>
            <td colspan= "" class="t_data"><?=$row ["model"]?></td>
            <td colspan= "" class="t_data"><?=$row ["year_v"]?></td> 
            <td colspan= "" class="t_data"><?=$row ["type_ser"]?></td>
            <td colspan= "" class="t_data"><?=$row ["date_service"]?></td>
            <td colspan= "" class="t_data"><?=$row ["time_service"]?></td>
            <!-- <td colspan= "" class="tdata_test"><?=$row [""]?></td> --> 

            <td colspan= "" class="tdata_test"> </td> <!--Added as a place holder-->
            <!-- Button for test data here -->
            <td colspan= "" class="tdata_test"> </td> <!--Added as a place holder-->
            <!-- Button for test data here -->
            <td> 
            <td>                        
                <form class= "submit_button">
                    <button type="submit" class="btn btn-primary mb-2">Edit</button>
                </form>
            </td> 
            
            <td>                        
                <form class= "submit_button">
                    <button type="submit" class="btn btn-primary mb-2">submit</button>
                </form>
            </td>

            <td class="px-2">                        
                <form class= "submit_button">
                    <button type="submit" class="btn btn-primary mb-2">delete</button>
                </form>
            </td>

        </tr>



        <?php
        }
        ?>

    </table>

</div>