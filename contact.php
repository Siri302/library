<?php
$page='contact';
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
<style>
    body{
        background-image: url("static/img1/a5.webp");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }
.container {
  float:left;
  width: 500px;
  margin: 0 auto;
  padding: 50px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #5f9295;
}
.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
  width: 100%;
  padding: 15px;
  margin-top: 25px;
  border: 1px solid #5d5959;
  border-radius: 5px;
  box-sizing: border-box;
}

.contact-form input[type="submit"] {
  width: 100%;
  padding: 20px;
  margin-top: 10px;
  background-color: rgb(13, 14, 14);
  color: rgb(233, 231, 232);
  border:none;
  border-radius: 25px;
  cursor: pointer;
}

.contact-form input[type="submit"]:hover {
  background-color:rgb(96, 118, 118);
}
.h1{
  color: aliceblue;
}
</style>
</head>
<body>

    <h1>CONTACT US</h1>
    <div class="container">
    
        <form  class="contact-form">
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name" required><br>
      
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" required><br>
      
          <label for="message">Message:</label><br>
          <textarea id="message" name="message" required></textarea><br>
      
          <input type="submit" value="Submit">
          <input type="submit" value="Back"><a href="demo.php" ></a>
          
        </form>
      </div>

</body>    
</html>