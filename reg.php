
<?php

$name = $_POST['name'];
$usernamee = $_POST['username'];
$passwordd = $_POST['password'];

 


 $dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = "";
 $db = "Itqan";
 $conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db");
 


$sel = "select * from StudentInfo where Username =  '$usernamee'";

$connec = mysqli_query($conn, $sel)
      or die("Failed ".mysqli_connect_error()());
$row = mysqli_fetch_array($connec);

$sql = "INSERT INTO StudentInfo (Name, Username, Passwords) VALUES ('$name', '$usernamee', '$passwordd')";

session_start();
$_SESSION["sn"] = $name;


 if ($name == "" || $usernamee == ""  ||  $passwordd == ""){
    echo "<script>alert('أدخل جميع البيانات المطلوبة');</script>";
      echo "<script>location.href='/registration.html';</script>";
    
 }
 elseif($row['Username'] == $usernamee) {
    echo "<script>alert('اسم المستخدم موجود مسبقًا');</script>";
      echo "<script>location.href='/registration.html';</script>";
 }
 elseif(mysqli_query($conn, $sql)){
   echo "<script>alert('تم تسجيلك بنجاح!');</script>";
      echo "<script>location.href='/alphabet1.php';</script>";
    

 } 

 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }
 
 // Close connection
 mysqli_close($conn);







?>