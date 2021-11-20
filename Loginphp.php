<?php

 $usernamee = $_POST['username'];
 $passwordd = $_POST['password'];

 


 $dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = "";
 $db = "Itqan";
 $conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db");
 
 
 $roro = "select * from StudentInfo where Username =  '$usernamee' and Passwords = '$passwordd'";
 $hh = mysqli_query($conn, $roro)
      or die("Failed ".mysqli_connect_error()());
 $row = mysqli_fetch_array($hh);
 
  if ($usernamee == ""  ||  $passwordd == ""){
    echo "<script>alert('Enter Username and password!');</script>";
      echo "<script>location.href='/login.html';</script>";
 }
 elseif ($row['Username'] == $usernamee && $row['Passwords'] == $passwordd){
      echo "<script>alert('You are successfully Logged in');</script>";
      echo "<script>location.href='alphabet1.php';</script>";
 }
 else {
   echo "<script>alert('Username or password is invalid!');</script>";
     echo "<script>location.href='/login.html';</script>";
   
 }

?>