<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "sweet_db";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 

 $sql = "DELETE FROM tbl_user WHERE id='$id'";
 $result = $conn->query($sql);
 if($result){
     header('location:index.php?m=1');
 }

?>