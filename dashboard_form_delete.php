<?php

include 'config.php';

$id  = $_GET['iddl'];

$deletequery = "delete from customer_details where id=$id";

$query = mysqli_query($conn, $deletequery);
header('location:dashboard_OrderList.php');



?>