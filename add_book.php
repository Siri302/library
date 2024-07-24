<?php
   $title = $_POST['title'];
   $author = $_POST['author'];
   $isbn = $_POST['isbn'];
   $stream= $_POST['stream'];

$conn = new mysqli('localhost','root','','libpro');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
    $stmt = $conn->prepare("insert into book_details(title, author, isbn, stream)
         values(?,?,?,?)");
    $stmt->bind_param("ssss", $title, $author, $isbn, $stream);
    $stmt->execute();
    echo "<script>alert('book is added successful'); window.location='addbook.php'</script>";
    
    $stmt->close();
    $conn->close();

?>
