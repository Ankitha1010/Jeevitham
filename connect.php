<?php

$servername= "localhost";
$uname= "root";
$password = "";

$db_name = "db";

$conn = mysqli_connect($servername, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $dob = $_POST["dob"];
    $longitude = $_POST["longitude"];
    $latitude = $_POST["latitude"];
    $delivery_mode = $_POST["delivery_mode"];


    $sql = "INSERT INTO agent (name, mobile, email, pwd, address, city, dob, longi, lati, modd) 
            VALUES ('$name', '$mobile', '$email', '$password', '$address', '$city', '$dob', '$longitude', '$latitude', '$delivery_mode')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>