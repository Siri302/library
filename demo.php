<?php
$page='home';
?>
<!DOCTYPE html>
<html>
<head>
<title>demo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body{
    background-image:url("static/img1/b3.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    font-family: cursive;
}

* {
  margin: 0;
  padding: 0;
  
}

a{
  text-decoration: none;
}

li{
  list-style: none;
}
/* NAVBAR STYLING STARTS */
.navbar{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
  background-color: teal;
  color: #fff;
}

.nav-links a {
  color: white;
}


.logo {
  font-size: 32px;
}

/* NAVBAR MENU */
.menu {
  display: flex;
  gap: 1em;
  font-size: 18px;
}

.menu li:hover {
  background-color: #4c9e9e;
  border-radius: 5px;
  transition: 0.3s ease;
}

.menu li {
  padding: 5px 14px;
}


.services {
  position: relative;
}


/* RESPONSIVE NAVBAR MENU STARTS */
/* CHECKBOX HACK */
input[type=checkbox] {
  display: none;
}

/* HAMBURGER MENU */
.hamburger {
  display: none;
  font-size: 24px;
  user-select: none;
}

/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
  .menu {
    display: none;
    position: absolute;
    background-color: #4c9e9e;
    color: #fff;
    width: 100%;
    height: 100vh;
    flex-direction: column;
    text-align: center;
  }

  .menu li {
    padding: 20px;
  }

  .hamburger {
    display: block;
    color: #fff;
  }
}

.header {
  background-image:url(" ");
  padding: 150px;
  text-align: center;
  color:white;
  background-size:100% 100%;
  
}
.header h1 {
  font-size: 60px;
}
.btn {
  background-color: teal;
  border: 2px solid teal;
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
</style>
</head>
    <body>
           <nav class="navbar">
              <div class="logo">Knowledge</div>
              <ul class="nav-links">
                
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                
                <div class="menu">
                <div class="dropdown">
                  <li><i class="fa fa-fw fa-user"></i><class="dropbtn">Login</a></li>
                  <div class="dropdown-content">
                    <a href="adminlogin.php">Admin</a>
                    <a href="stlogin.php">Student</a>
                  </div>
                </div>
                  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact us</a></li>
                  <li><a href="demo.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
               </ul>
              </nav>
               <div class="hero">
                <div class="header">
                   <h1><font size="+12">EASY LIBRARY</font></h1>
                      <p><font size="+3">"Nothing is Pleasanter than exploring a library"</font></p> 
                </div>
                <center>
                <button type="button" class="btn" >
                <a href="reg.php"><font size="+1">Registration</a></font></a>
                </button>
                </center>
              </div>
    </body>
</html>
