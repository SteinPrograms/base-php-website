<?php
ini_set('display_errors', 'on');
include "database.php";



if(isset(isset($_POST['password'])){
   $username = "hugo";
   $password = $_POST['password'];
   $conn = cnxDB();
   $results = $conn->query("SELECT * FROM user WHERE username = '$username'");
   $row = $results->fetch_assoc();

   if($row["username"]==$username && $row["password"]==$password){
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['auth'] = 1;
      $_SESSION['password'] = $password;
      header('Location: ../frontend/home.php');
   }
   else
   {
      header('Location: ../index.php?erreur=1');
   }
   
}
else
   {
      header('Location: ../index.php?erreur=1');
   }
?>