<!-- //MySQLi approcach, using user we created and database -->
<!-- connect to data base -->
<?php 
    $connection = mysqli_connect("localhost", "hala", "halaspizza", "car_dealership");

    if(!$connection){
        echo "connection error: ". mysqli_connect_error();
    }

?>