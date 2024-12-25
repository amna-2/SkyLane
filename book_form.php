<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}




if (isset($_POST['send'])) {
    echo "Form submitted successfully.<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    
    
    $request = "INSERT INTO book_form(Name, Email, Phone, Address, Location, Guests, Arrivals, Leaving, price) 
                VALUES('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '735')";

    if (mysqli_query($connection, $request)) {
        header('Location: book.php');
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo "Form was not submitted properly.";
}
?>



