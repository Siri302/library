<?php
   $fullname = $_POST['fullname'];
   $dob = $_POST['dob'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $gender  =  $_POST['gender'];
   

$conn = new mysqli('localhost','root','','libpro');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
    $stmt = $conn->prepare("insert into registration(fullname, dob, email, password, gender)
         values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $fullname, $dob, $email, $password, $gender);
    $stmt->execute();
    echo "<script>alert('Registration is successful'); window.location='stlogin.php'</script>";
    
    $stmt->close();
    $conn->close();

?>
