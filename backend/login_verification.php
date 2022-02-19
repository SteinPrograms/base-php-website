<?php
include "database.php";

if($password = isset($_POST['code'])){
   $conn = cnxDB();
   $results = $conn->query("SELECT * FROM user WHERE username = 'hugo'");
   $row = $results->fetch_assoc();

   if($row["password"]==$password){
      session_start();
      $_SESSION['username'] = "hugo";
      $_SESSION['auth'] = 1;
      $_SESSION['password'] = $password;
      header('Location: ../frontend/home.php');
   }
   else
   {
      header('Location: ../index.php?probleme');
   }
   
}
else
   {
      header('Location: ../index.php?erreur=1');
   }
?>