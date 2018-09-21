<!DOCTYPE html>
<html>
<head>
	<title>Tech Help Request Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<center><h1>I.S 230 Unofficial Tech Support Form</h1>
      <h3>By NOOR UL KARIM, I.T Intern</h3></center>
      <link rel="stylesheet" type="text/css" href="videostyle.css">
</head>


<video autoplay loop id="video-background" muted plays-inline>
  <source src="nature3.mp4" type="video/mp4">
</video>



<body>
<div id="form-main">
  <div id="form-div">
      
    <form action="second.php" method="POST">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Your Name" id="name" required/>
      </p>
      
      <p class="email">
        <input name="room" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Your Room number" required/>
      </p>
      
      <p class="text">
        <textarea name="issue" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Your Issue" required></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" name="submit" value="SUBMIT" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
</body>
</html>