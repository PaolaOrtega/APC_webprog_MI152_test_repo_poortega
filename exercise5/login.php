<!DOCTYPE HTML>
<html>
<title>
	Paola Ortega - Login
</title>
	
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<body>
<div id="Maindiv">
	<div id="navdiv">
		
		<ul>
			<h1 style="font-family:Source Sans Pro Light;"><a href="http:/mypage.html" target="_blank">Paola Ortega</h1></a></li>
			<li><a href="http:/mypage.html" target="_blank">Home</a></li>
			<li><a href="http:/hobbies.html" target="_blank">Hobbies</a></li>
			<li><a href="http:/interests.html" target="_blank">Interests</a></li>
			<li><a href="http:/trivias.html" target="_blank">Trivia</a></li>
			<li><a href="http:/login.php">Feedback</a></li>
		</ul>
	</div>
</div>

<div class="form">
	<p class="feedback">We Appreciate Your Feedback!<p>
	<p id="form">Please enter the following: </p>
	
<div class="php">	
	<?php
		// define variables and set to empty values
		$nameErr = $nicknameErr = $emailErr = $genderErr =$cpnumErr = "";
		$name = $nickname = $email = $hadd = $gender = $cpnum = $comment = "";
		
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	if (empty($_POST["name"])) {
				$nameErr = "Name required";
		  	} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed";
					$name = "";
				}
		  	}

			
			
			if(empty($_POST["nickname"])){
		  		$nicknameErr = "Nickname required";
			}else{
		  		$nickname = test_input($_POST["nickname"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
				$nicknameErr = "Only letters and white space allowed";
				$nickname = "";
				}
			}
		  
		  
		  
			if (empty($_POST["email"])) {
			$emailErr = "Email required";
		  	} else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailErr = "Invalid email format";
			  	$email = "";
				}
		  	}

			
			
			if(empty($_POST["hadd"])){
			  	$hadd = "";
			}else{
			  	$hadd = test_input($_POST["hadd"]);
			}

			

		  	if (empty($_POST["gender"])) {
				$genderErr = "Gender required";
		  	} else {
				$gender = test_input($_POST["gender"]);
		  	}
			
			

			if (empty($_POST["cpnum"])) {
				$cpnumErr = "Mobile number required";
		  	} else {
				$cpnum = test_input($_POST["cpnum"]);
				if(!preg_match("/^[0-9]*$/",$cpnum)){
					$cpnumErr = "Only numbers are allowed";
					$cpnum = "";
				}
		  	}
			
			
			
			if (empty($_POST["comment"])) {
				$comment = "";
		  	} else {
				$comment = test_input($_POST["comment"]);
		  	}	
		}


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
			}
			?>
	
	
			<p><span class="error">* required field.</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		

			Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>  
			Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknameErr;?></span>
			 <br><br>
			E-mail: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Home Address: <textarea name="hadd" rows ="2" cols="35"><?php echo $hadd;?></textarea>
			<br><br>
			Gender:  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			Cellphone Number: <input type="text" name="cpnum" value="<?php echo $cpnum;?>">
			<span class="error">* <?php echo $cpnumErr;?></span>
			<br><br>
			Comment: <textarea name="comment" rows="3" cols="39"><?php echo $comment;?></textarea>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
</form>

	<?php
			
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $nickname;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $hadd;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $cpnum;
		echo "<br>";
		echo $comment;
		echo "<br>";
	
?>
</div>
</div>

<div class="social-icons">
			<a href="http://www.facebook.com/paolafrancesca.ortega" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="http://www.twitter.com/paochipaoch" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/pf.ortega" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	</div>
</body>

</html>