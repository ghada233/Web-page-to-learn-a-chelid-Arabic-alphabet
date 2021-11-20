<?php

session_start();
$name = $_POST["Name"];


$_SESSION["ChildName"] = $name;

echo '<div style="border: 5px grey; width: 80px; height: 60px;">'.$_SESSION["ChildName"].'</div';


?>

<html>
    <style>
        dv{
            background-color: cadetblue;
            display: none;
            width: 160px;
            height: 180px;
            
        }
    
    
    
    </style>
 <body>
    <script>
     function open(){
         document.getElementById("dv").style.display = "block";
     }
     
     
     
     </script>
   <button onclick="open()">go</button>  
     
    <center><div id="dv"> </div></center> 
     
     
     
     
     
     
     
    
    
    
    
    
    
</body>

</html>