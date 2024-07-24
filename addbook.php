
<!DOCTYPE html>
<html>
<head>
  <title>addbook</title>
<style>
body{
  background: url("static/img1/loginbg..avif");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  font-family: cursive;
}

.container{
        max-width: 500px;
        width: 500%;
        background: #4c9e9e;
        padding: 25px 30px;
        border-radius: 5px;
        float: none;
        text-align:left;
    
    }
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  align-items: center;
  background-color: teal;
  color: white;
  padding: 15px 30px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #a3a2a4;
}
</style>
</head>
<body>
<center>
  <div class="container">
    
      <button onclick="showSpinner"><span style='font-size:20px;'><a href="adminlogin.php">&#8592;</a></span></button></p>
    <div class="title"> 
      <center><h1>Add Book</h1></center>
      <form action="add_book.php" method="POST">
        <label for="title">Title:</label> 
        <input type="text"  id="title" name="title" size="40" required><br>
        <label for="author">Author:</label> 
        <input type="text"  id="author" name="author" size="40" required><br>
        <label for="isbn">ISBN No:</label> 
        <input type="text"  id="isbn" name="isbn" required><br>
        <label for="stream" >Stream:</label>
        <select name="stream">
          <option  value="cs">Computer Science</option>
          <option value="c">Commerce</option>
          <option value="a">Arts</option>
          <option value="l">Language</option>
      </select><br><br>
        <input type="submit" value="Add"><br><br>
       
      </form>

       
    </div>
</center>
   </div> 
  </body>
</html>       
