<?php
ini_set('display_errors', 'on');
require("../backend/database.php");
test();
if(isset($_POST['username']) && isset($_POST['password'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $conn = cnxDB();
   $results = $conn->query("SELECT * FROM user WHERE username = '$username'");
   $row = $results->fetch_assoc();

   if($row["password"]==$password){
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
?>