<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="container">
        <form id="myform" action="check.php" method="POST">
                <h2>Log-in Page</h2>

                <div class="inputBox">
                    <div class="input">
                        <span>User ID</span>
                        <input type="text" id="user" value="" placeholder="Enter User Id" name="user">
                    </div>
                </div>
                <br>

                <div class="inputBox">
                    <div class="input">
                        <span>Password</span>
                        <input type="text" id="pass" value="" placeholder="Enter Password" name="pass">
                    </div>    
                </div>
                <br>
                <a href="signin.php">new user?</a>
                <input type="Submit" name="Submit" id="submitButton">
            </form>
        </div>
    </div>
</body>
</html>