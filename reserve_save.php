<!-- reserve a new customer  -->
<?php 
session_start();
include('./admin/db_conn.php');

if (isset($_POST['reserve'])) {
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $cnumber = $_POST['cnumber'];
    $customer = $_POST['customer'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    mysqli_query($conn, "INSERT INTO reservation (fname, address, cnumber, customer, date, time) VALUES ('$fname', '$address', '$cnumber', '$customer', '$date', '$time')"); 
    $_SESSION['message'] = "Customer Reserve"; 
    header('location: homepage.php');
}

	
?>