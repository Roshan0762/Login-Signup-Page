<?php
$host="localhost";
$user="root";
$pass="";
$dbname="data";
$conn= mysqli_connect($host,$user,$pass,$dbname) or die();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST["user"];
    $email=$_POST["email"]; 
    $password=$_POST["pass"]; 
    $cpassword=$_POST["cpass"]; 
    $number=$_POST["num"];

    $sql = "INSERT INTO details (Username, Email, Pass, cpass, Contact) VALUES ('$username', '$email', '$password', '$cpassword', '$number')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
