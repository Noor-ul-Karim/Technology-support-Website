<?php

$dbc=mysqli_connect(") OR DIE ("ERROR:FAILED TO CONNECT TO SERVER".mysqli_connect_error());

$name=(isset($_POST['name']) ? $_POST['name']:null);  
  $room=(isset($_POST['room']) ? $_POST['room']:null);
  $issue=(isset($_POST['issue']) ? $_POST['issue']:null);


  $query='insert into form(full_name,room,issue) values ("'.$name.'","'.$room.'","'.$issue.'")';
  $fetch=mysqli_query($dbc,$query) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));




echo <<<END

<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>$name is an Awesome Person!</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
		body{    
		background:url("wp.png") no-repeat;
        background-size: cover;
        height:110%;
}
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU $name!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<h4><p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p></h4><br/><br/>
		
		<b><p>Have A Good Day!</p><b/>
	</div>


</body>
</html>
END;
?>
