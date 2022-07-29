<?php 

 if(isset($_GET['id'])){
     header("location: home.php");
 };
 include ('db_conn.php');
 $id = $_GET['id'];
$query = "DELETE FROM acta WHERE id = '$id' ";
 $delete = mysqli_query($conn, $query);
 if($delete){
     header("location: home.php");
 }
?>