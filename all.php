<!DOCTYPE html>
<html>
<head>
	<title>All Issues</title>
</head>
<body>
    <center>
	<form action=all3.php method=POST>
		
		<input type="submit" name="delete" value="DELETE ALL RECORDS">
		<input type="hidden" name="choice" value="deleteall">
	</form>
</center>
  <table>
  <tr>
  	<link rel="stylesheet" type="text/css" href="tablestyle.css">
    <th>Teacher's Name</th>
    <th>Room Number</th>
    <th>Issue</th>
  </tr>
  <?php
  $dbc=mysqli_connect("localhost","id3752895_noor","9s6ftt4","id3752895_practice") OR DIE ("ERROR:FAILED TO CONNECT TO SERVER".mysqli_connect_error());

 $name=(isset($_POST['name']) ? $_POST['name']:null);  
 $room=(isset($_POST['room']) ? $_POST['room']:null);
 $issue=(isset($_POST['issue']) ? $_POST['issue']:null);

	
	$query='SELECT * FROM form';
	$fetch=mysqli_query($dbc,$query) OR DIE ("QUERY ERROR".mysqli_error($dbc));
	
	$i=1;
        
	while($result=mysqli_fetch_array($fetch))
	{
		echo "<tr><td>".$result['full_name']."</td>
				  <td>".$result['room']."</td>
				  <td>".$result['issue']."</td></tr>";
		$i++;
	}	
	mysqli_close($dbc);

?>



</table>
</center>
</body>
</html>