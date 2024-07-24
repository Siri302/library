<?php
session_start();
$conn = new mysqli('localhost','root','','libpro');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
    body{
    background: url("static/img1/walp.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    
    display: flex;
    height: 100%;
    width:100%;
    justify-content: center;
    align-items: center;
    padding: 10px; 
    
    }
    .container{
        max-width: 500px;
        width: 500%;
        background: #4c9e9e;
        padding: 25px 30px;
        border-radius: 5px;
        float: none;
    
    }
    .login-form input[type="text"],
    .login-form input[type="password"],
    .login-form textarea {
        width: 50%;
        padding: 10px;
        margin-top: 15px;
        border: 1px solid #5d5959;
        border-radius: 5px;
        box-sizing: border-box;
    }

.login-form input[type="submit"] {
  width: 50%;
  padding: 10px;
  margin-top: 10px;
  background-color: rgb(13, 14, 14);
  color: rgb(233, 231, 232);
  border:none;
  border-radius: 15px;
  cursor: pointer;
}

.login-form input[type="submit"]:hover {
  background-color:rgb(96, 118, 118);
}
</style>
</head>
<body>
    
            <div class="container">
                <center><h1>ADMIN LOGIN</h1>
                <form action="adminconnect.php" method="post">
                <div class="login-form">
                    <label for="username">Username:</label>
                    <input type="text" id="aname" name="aname" required><br><br>
                    <label for="pwd">Password:</label>
                    <input type="password" id="apassword" name="apassword"required><br><br>
                    
                    <a href="addbook.php"><input type="submit" value="Submit" name="submit"></a><br><br>
                
               <a href="demo.php">back</a></lable>
                </center>
</div>
</form>

            </div>
           
        </body> 
        </html>  
