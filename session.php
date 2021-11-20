<?php
session_start();
$Name = $_POST['kidname'];

$_SESSION["dname"] = $Name;


 echo '<div style="padding: 1em; border: 5px solid grey; width: 50px"><img style="width: 30px; height: 30px" src="settings.png">'.$_SESSION["dname"].'</div>';



    

?>

<html>
    
    <script>
    function show(){
        var f =  document.getElementById('fl');
        if(f.value == ""){
            alert("wrong");
        }
         else{
                alert("good job");
            }
    }
      function play() {
        var audio = document.getElementById("audio");
       
        audio.play();
      }
    </script>
<input type="image" src="settings.png" onclick="play()">
<audio id="audio" src="rec.m4a"></audio>


<input id="fl" type="file">
<button onclick="show()">submit</button>


</html>

