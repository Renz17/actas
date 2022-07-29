<?php
include "db_conn.php";
session_start();

if(isset($_POST['User']) && isset($_POST['Pass'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $User = validate($_POST['User']);
    $Pass = validate($_POST['Pass']);

    if(empty($User)){
        header("Location: index.php?error=UserName is required");
        exit();

     }else if(empty($Pass)){
        header("Location: index.php?error=Password is required");
        exit();
     }else{
         $sql = "SELECT * FROM users WHERE Username = '$User' AND Password = '$Pass'";
         $result = mysqli_query($conn, $sql);
         if(mysqli_num_rows($result) ===1){
             $row = mysqli_fetch_assoc($result);
             if($row['Username'] === $User && $row['Password'] === $Pass) {
                  $_SESSION['Username'] = $row['Username'];
                  $_SESSION['id'] = $row['id'];
                  header("Location: home.php ");
                exit(); 
             }else{
                header("Location: index.php?error=incorrect UserName or Password");
                exit(); 
             }
         }
         else{
            header("Location: index.php?error=incorrect UserName or Password");
            exit(); 
         }
        
    }
}else{
    header("Location: index.php");
}
    

