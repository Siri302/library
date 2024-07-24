<!DOCTYPE html>
<html>
<head>
<title>registration</title>
<link rel="stylesheet" href="i.css">
<style>
body{
    background: url("static/img1/walp.jpg");
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background-position: center;
    background-repeat: no-repeat;
    background-size:110%;
    height: 500%;
    font-family: cursive; 
}
.container{
    float :left;
    max-width: 700px;
    width: 100%;
    background: #4c9e9e;
    padding: 50px ;
    border-radius: 5px;
    

}
.container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}
form .user-details .input-box{

    margin-bottom: 15px;
    width: 100%;
    
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 2s ease;

}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #490553;
}

form .button{
    height: 45px;
    margin: 45px 0;

}
form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #5b0e65, #ac45be);;
    
    
}
form .button input:hover{
  background: linear-gradient;
}
.input-box input[type="submit"] {
  width: 25%;
  padding: 10px;
  margin-top: 10px;
  background-color: rgb(13, 14, 14);
  color: rgb(233, 231, 232);
  border:none;
  border-radius: 15px;
  cursor: pointer;
}

.input-box input[type="submit"]:hover {
  background-color:rgb(96, 118, 118);
}
.radio-inline{
    width: 0.5em;
    height: 0.5em;
}

</style>
</head>
<body>
     <form action="connect.php" method="post">
      <div class="container">
      <a href="demo.php">back</a>
            <p align="left">
            <div class="title">Registration </div><br>
      <div class="user-details">
                <div class="input-box">
                  <span class="details">Full name</span>
                  <input type="text" placeholder="enter your name" name="fullname" required>
                </div>
                <div class="input-box">
                  <span class="details">DoB</span>
                  <input type="date"required name="dob"required>
                </div>
                <div class="input-box">
                  <span class="details">Email</span>
                  <input type="email" placeholder="enter your email" name="email"required>
                </div>
                <div class="input-box">
                  <span class="details">Password</span>
                  <input type="password" placeholder="enter your password" name="password" id="password" minlength="8"required/>
</div>
                <p>Gender</p>
              <input type="radio" id="male" name="gender" value="m">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="f">
                <label for="female">Female</label> 
                <input type="radio" id="others" name="gender" value="o">
                <label for="others">Others</label>
              </div>

        <div class="input-box">
        <a href="stlogin.php"><input type="submit" value="Submit"></a><br><br>
        
        </div>
</div>
</div>
</div>
</form>
<script>
</body>
</html>



