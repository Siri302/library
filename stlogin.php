
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
    
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
background: url("static/img1/walp.jpg");
font-family: cursive;
}

.btn {
background-color: #04AA6D;
border: 2px solid #04AA6D;
color: black;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
transition-duration: 0.4s;
cursor:pointer;
}

.btn:hover {
background-color: teal; 
color: rgb(11, 11, 11);
}
.dropbtn {
background-color: teal;
color: white;
padding: 16px;
font-size: 16px;
border: none;
cursor: pointer;
}
.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #edebeb;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
color: rgb(8, 8, 8);
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {background-color: #d6dad8}

.dropdown:hover .dropdown-content {
display: block;
}

.dropdown:hover .dropbtn {
background-color: #858785;
}


    body{
    background: url("static/img1/a4.avif");
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

    .login-form input[type="email"],
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
  display:inline;
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
      
    <a href="demo.php">back</a>
    <center> <h1>USER LOGIN</h1>
        <form action="logback.php" method="post">
            <div class="login-form">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required=""/><br><br>
                <label for="pwd">Password:</label>
                <input type="password" id="password" name="password" minlength="8" /><br><br>
                <a href="bookrequest.php"><input type="submit" value="Submit"></a><br><br>
            </lable>
        </center>
</form>
     </div>
    </form>
</body> 
</html>
