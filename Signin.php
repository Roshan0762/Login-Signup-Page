<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <form id="myform" action="adddata.php" method="POST">
                <h2>Sign-in Page</h2>

                <div class="inputBox">
                    <div class="input">
                        <span>User ID</span>
                        <input type="text" id="user" value="" placeholder="Enter User Id" name="user" required>
                    </div>
                </div>
                <br>

                <div class="inputBox">
                    <div class="input">
                        <span>Email</span>
                        <input type="text" id="email" value="" placeholder="Enter Email Address" name="email" required>
                    </div>
                </div>
                <br>

                <div class="inputBox">
                    <div class="input">
                        <span>Password</span>
                        <input type="text" id="pass" value="" placeholder="Enter Password" name="pass" required>
                    </div>    
                </div>
                <br>

                <div class="inputBox">
                    <div class="input">
                        <span>Confirm</span>
                        <input type="text" id="cpass" value="" placeholder="Confirm Password" name="cpass" required>
                    </div>    
                </div>
                <br>

                <div class="inputBox">
                    <div class="input">
                        <span>Mobile No.</span>
                        <input type="number" id="cno" value="" placeholder="Enter Contact Number" name="num" required>
                    </div>  
                </div>
                <br>
                <input type="Submit" name="Submit" id="submitButton">
            </form>
        </div>
    </div>
</body>
</html>

