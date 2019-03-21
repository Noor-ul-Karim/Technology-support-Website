<?php


if(isset($_POST["choice"])) $choice=$_POST["choice"]; else $choice="";


if($choice=="deleteall")
{
 $dbc=mysqli_connect("") OR DIE ("ERROR:FAILED TO CONNECT TO SERVER".mysqli_connect_error());
 $name=(isset($_POST['name']) ? $_POST['name']:null);  
 $room=(isset($_POST['room']) ? $_POST['room']:null);
 $issue=(isset($_POST['issue']) ? $_POST['issue']:null);
 $query='TRUNCATE form';
 $fetch=mysqli_query($dbc,$query) OR DIE ("QUERY ERROR".mysqli_error($dbc));
 mysqli_close($dbc);


 header("Location:all.php");
   


}

?>
