<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "data";
    
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the username and password from the form data
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Prepare the SQL query to fetch the user details
    $sql = "SELECT * FROM details WHERE username='$username' AND Pass='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>
        alert('Invalid data!');
        window.location.href = 'login.php';
        </script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>