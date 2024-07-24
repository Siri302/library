<!DOCTYPE html>
<html>
<head>
<title>bookrequest</title>
<style>
  body{
    background: url("static/img1/walp.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    font-family: cursive;

  }
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}
.container {
  
  width: 500px;
  margin: 0 auto;
  padding: 75px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #5f9295;
}
#customers {
    font-family: Arial, Helvetica, sans-serif;
    
    
     margin: auto;
  }
  
  #customers td, #customers th {
    background-color: white;
    padding: 28px;
  }
  
  #customers tr:{
    background-color: white;
  }
  
  #customers tr:hover {background-color: #f2f2f2;}
  
  #customers th {
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: left;
    background-color: #a13c88;
    color: rgb(14, 9, 9);
  }
  </style>    
</head>
<bpdy>
    <div class="container">
    <a href="demo.php">back</a>
      <center><h1>Book Details</h1></center>
    <table id="customers">
        <tr>
            <th>Book Name</th>
            <th>Author</th>
            <th>Isbn</th>
            <th>Stream</th>
            
            
          

        </tr> 
        <?php
        $conn = new mysqli('localhost','root','','libpro');
        if($conn->connect_error){
            die('Connection Failed :'.$conn->connect_error);
        }
        $sql = "SELECT title, author, isbn, stream from book_details";
        $result = $conn-> query($sql);
        if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
               echo "<tr><td>".$row["title"]."</td><td>".$row["author"]."</td><td>".$row["isbn"]."</td><td>".$row["stream"]."</td></tr>";
            }
            echo "</table>";
            }
            else{
                echo "0 result";
            }
            $conn->close();
        ?>
</table>   
        </div>
</body>
</html>    