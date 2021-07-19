<!DOCTYPE html>
<html>
<head>
  <title>Confirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel = "stylesheet" href = "style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="animations.html">Animations</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
		Here is the information you submitted!
        <br/>
		<?php
			foreach($_POST as $key => $value) {
				echo "$key : $value<br/>";
			}
		?>
	</body>
<footer class="container-fluid text-center">
  <a href = "https://www.youtube.com/user/NBA" target = "_blank" class = "footer_links">NBA on Youtube</a>
  <a href = "https://www.instagram.com/nba/?hl=en" target = "_blank" class = "footer_links">NBA on Instagram</a>
</footer>
