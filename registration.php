<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "style.css">
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
  <?php 
    include "validate.php";
  ?>
  <form action="registration.php" method= "POST" id = "form" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="firstName">First name: (Max. 50 characters)</label><br/>
    <input id="firstName" type="text" name="firstName" value = "<?php echo $firstName; ?>"/><br/>
    <p style = "color: red"> <?php echo $firstNameError?> </p>
    <label for="lastName">Last name:</label><br/>
    <input id="lastName" type="text" name="lastName" value = "<?php echo $lastName; ?>"/><br/>
    <p style = "color: red"> <?php echo $lastNameError?> </p>
    <hr/>
    <label for="username">Username: (Max. 50 characters, Min. 6 characters)</label><br/>
    <input id="username" type="text" name="username" value = "<?php echo $username; ?>"/><br/>
    <p style = "color: red"> <?php echo $usernameError?> </p>
    <label for="password">Password: (Must have 1 capital, 1 lowercase, 1 digit, and 1 special character. Max. 50 characters, Min. 8 characters)</label><br/>
    <input id="password" type="password" name="password" value = "<?php echo $password; ?>"/><br/>
    <label for="repeat_password">Repeat Password:</label><br/> 
    <input id="repeat_password" type="password" name="repeat_password" value = "<?php echo $repeat_password; ?>"/>
    <p style = "color: red"> <?php echo $passwordError?> </p>
    <hr/>
    <label for="city">City:</label><br/>
    <input id="city" type="text" name="city" value = "<?php echo $city; ?>"/><br/>
    <p style = "color: red"> <?php echo $cityError?> </p>
    <label for="state">State:</label><br/>
    <select id = "state" style = "margin-bottom: 10px" name = "state">
      <option value="NA">select a state</option>
      <option value="AL" <?php if ($state == "AL") {?> selected = true <?php } ?> >Alabama</option>
      <option value="AK" <?php if ($state == "AK") {?> selected = true <?php } ?> >Alaska</option>
      <option value="AZ" <?php if ($state == "AZ") {?> selected = true <?php } ?> >Arizona</option>
      <option value="AR" <?php if ($state == "AR") {?> selected = true <?php } ?> >Arkansas</option>
      <option value="CA" <?php if ($state == "CA") {?> selected = true <?php } ?> >California</option>
      <option value="CO" <?php if ($state == "CO") {?> selected = true <?php } ?> >Colorado</option>
      <option value="CT" <?php if ($state == "CT") {?> selected = true <?php } ?> >Connecticut</option>
      <option value="DE" <?php if ($state == "DE") {?> selected = true <?php } ?> >Delaware</option>
      <option value="DC" <?php if ($state == "DC") {?> selected = true <?php } ?> >District Of Columbia</option>
      <option value="FL" <?php if ($state == "FL") {?> selected = true <?php } ?> >Florida</option>
      <option value="GA" <?php if ($state == "GA") {?> selected = true <?php } ?> >Georgia</option>
      <option value="HI" <?php if ($state == "HI") {?> selected = true <?php } ?> >Hawaii</option>
      <option value="ID" <?php if ($state == "ID") {?> selected = true <?php } ?> >Idaho</option>
      <option value="IL" <?php if ($state == "IL") {?> selected = true <?php } ?> >Illinois</option>
      <option value="IN" <?php if ($state == "IN") {?> selected = true <?php } ?> >Indiana</option>
      <option value="IA" <?php if ($state == "IA") {?> selected = true <?php } ?> >Iowa</option>
      <option value="KS" <?php if ($state == "KS") {?> selected = true <?php } ?> >Kansas</option>
      <option value="KY" <?php if ($state == "KY") {?> selected = true <?php } ?> >Kentucky</option>
      <option value="LA" <?php if ($state == "LA") {?> selected = true <?php } ?> >Louisiana</option>
      <option value="ME" <?php if ($state == "ME") {?> selected = true <?php } ?> >Maine</option>
      <option value="MD" <?php if ($state == "MD") {?> selected = true <?php } ?> >Maryland</option>
      <option value="MA" <?php if ($state == "MA") {?> selected = true <?php } ?> >Massachusetts</option>
      <option value="MI" <?php if ($state == "MI") {?> selected = true <?php } ?> >Michigan</option>
      <option value="MN" <?php if ($state == "MN") {?> selected = true <?php } ?> >Minnesota</option>
      <option value="MS" <?php if ($state == "MS") {?> selected = true <?php } ?> >Mississippi</option>
      <option value="MO" <?php if ($state == "MO") {?> selected = true <?php } ?> >Missouri</option>
      <option value="MT" <?php if ($state == "MT") {?> selected = true <?php } ?> >Montana</option>
      <option value="NE" <?php if ($state == "NE") {?> selected = true <?php } ?> >Nebraska</option>
      <option value="NV" <?php if ($state == "NV") {?> selected = true <?php } ?> >Nevada</option>
      <option value="NH" <?php if ($state == "NH") {?> selected = true <?php } ?> >New Hampshire</option>
      <option value="NJ" <?php if ($state == "NJ") {?> selected = true <?php } ?> >New Jersey</option>
      <option value="NM" <?php if ($state == "NM") {?> selected = true <?php } ?> >New Mexico</option>
      <option value="NY" <?php if ($state == "NY") {?> selected = true <?php } ?> >New York</option>
      <option value="NC" <?php if ($state == "NC") {?> selected = true <?php } ?> >North Carolina</option>
      <option value="ND" <?php if ($state == "ND") {?> selected = true <?php } ?> >North Dakota</option>
      <option value="OH" <?php if ($state == "OH") {?> selected = true <?php } ?> >Ohio</option>
      <option value="OK" <?php if ($state == "OK") {?> selected = true <?php } ?> >Oklahoma</option>
      <option value="OR" <?php if ($state == "OR") {?> selected = true <?php } ?> >Oregon</option>
      <option value="PA" <?php if ($state == "PA") {?> selected = true <?php } ?> >Pennsylvania</option>
      <option value="RI" <?php if ($state == "RI") {?> selected = true <?php } ?> >Rhode Island</option>
      <option value="SC" <?php if ($state == "SC") {?> selected = true <?php } ?> >South Carolina</option>
      <option value="SD" <?php if ($state == "SD") {?> selected = true <?php } ?> >South Dakota</option>
      <option value="TN" <?php if ($state == "TN") {?> selected = true <?php } ?> >Tennessee</option>
      <option value="TX" <?php if ($state == "TX") {?> selected = true <?php } ?> >Texas</option>
      <option value="UT" <?php if ($state == "UT") {?> selected = true <?php } ?> >Utah</option>
      <option value="VT" <?php if ($state == "VT") {?> selected = true <?php } ?> >Vermont</option>
      <option value="VA" <?php if ($state == "VA") {?> selected = true <?php } ?> >Virginia</option>
      <option value="WA" <?php if ($state == "WA") {?> selected = true <?php } ?> >Washington</option>
      <option value="WV" <?php if ($state == "WV") {?> selected = true <?php } ?> >West Virginia</option>
      <option value="WI" <?php if ($state == "WI") {?> selected = true <?php } ?> >Wisconsin</option>
      <option value="WY" <?php if ($state == "WY") {?> selected = true <?php } ?> >Wyoming</option>
    </select default = <?php echo $state?> >	
    <p style = "color: red"> <?php echo $stateError?> </p>
    <br/>
    <label for="address_1">Address Line 1:</label><br/>
    <input id="address_1" type="text" name="address_1" value = "<?php echo $address_1; ?>"/><br/>
    <p style = "color: red"> <?php echo $address1Error; ?> </p>
    <label for="address_2">Address Line 2:</label><br/>
    <input id="address_2" type="text" name="address_2" value = "<?php echo $address_2; ?>"/><br/>
    <p style = "color: red"> <?php echo $address2Error; ?> </p>
    <label for="zip">Zip Code:</label><br/>
    <input id="zip" type="text" name="zip" placeholder = "XXXXX or XXXXX-XXXX" value = "<?php echo $zip; ?>"/><br/>
    <p style = "color: red"> <?php echo $zipError; ?> </p>
    <hr/>
    <label for="birthDay">Date of birth:</label><br/>
    <input id="birthday" type="date" name="birthDay" value = "<?php echo $birthday; ?>"/><br/>
    <p style = "color: red"> <?php echo $birthdayError; ?> </p>
    <hr/>
    <label for="number">Phone Number:</label><br/>
    <input id="number" type="text" name="number" placeholder = "XXX-XXX-XXXX" value = "<?php echo $phone; ?>"/><br/>
    <p style = "color: red"> <?php echo $phoneError; ?> </p>
    <label for="email">Email:</label><br/>
    <input id="email" type="text" name="email" placeholder="x@x.x" value = "<?php echo $email; ?>"/><br/>
    <p style = "color: red"> <?php echo $emailError; ?> </p>
    <hr/>
    <input type="radio" name="gender" id="maleGender" value="male" <?php if ($gender == "male") { ?> checked = true <?php } ?>/> 
    <label for="maleGender">Male</label><br/>
    <input type="radio" name="gender" id="femaleGender"value="female" <?php if ($gender == "female") { ?> checked = true <?php } ?>/> 
    <label for="femaleGender">Female</label><br/>
    <input type="radio" name="gender" id="otherGender"value="other" <?php if ($gender == "other") { ?> checked = true <?php } ?>/> 
    <label for="otherGender">Other</label>
    <p style = "color: red"> <?php echo $genderError; ?> </p>
    <hr/>
    <input type="radio" name="mar_status" id="single"value="single" <?php if ($marital == "single") { ?> checked = true <?php } ?>/> 
    <label for="mar_status">Single</label><br/>
    <input type="radio" name="mar_status" id="married" value="married" <?php if ($marital == "married") { ?> checked = true <?php } ?>/>
    <label for="mar_status">Married</label><br/>
    <p style = "color: red"> <?php echo $maritalError; ?> </p>
    <hr/>
    <button>Submit</button>
    <form method = "GET" action = "registration.php">
      <button formmethod = "GET">Reset Data</button>
    </form>
  </form>
  <?php
			if ($isValid) {
	?>
				<form id="hiddenForm" name="hiddenForm" method="POST" action="confirmation.php">
				<?php
					foreach($_POST as $key => $value) {
				?>
						<input name="<?php echo $key;?>" value="<?php echo $value;?>" type="hidden"/>
						<?php
					}
					  ?>
				</form>
				<script>
					document.createElement('form').submit.call(document.getElementById('hiddenForm'));
				</script>
			<?php
			}
		  ?>
</body>
<footer class="container-fluid text-center">
  <a href = "https://www.youtube.com/user/NBA" target = "_blank" class = "footer_links">NBA on Youtube</a>
    <a href = "https://www.instagram.com/nba/?hl=en" target = "_blank" class = "footer_links">NBA on Instagram</a>
</footer>


</body>
</html>
