
<html>
<title>
	Paola Ortega - Feedback
</title>
	
<head>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	<style>
html, body, {
	position:fixed;
	top:0;
	bottom:0;
	left:0;
	right:0;
}
		
html {
  	background: url(ferris.jpg) no-repeat center center fixed; 
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}

.social-icons {
	font-size: 20px;
	text-align: Center;
	position: relative;
	top: 586px;
}

.social-icons a {
	color: black;
}

body{
	font-family: Century Gothic, sans-serif;
}

*{
	padding: 0px;
	margin: 0px;
}

#navdiv{
	opacity: 0.7;
	filter: (opacity=70);
}

#navdiv ul{
	width: 100%;
	height: 80px;
	background: #d7cab3;
	line-height: 80px;
	color: gray;
	margin-right: 15px;
}

#navdiv ul a{
	text-decoration: none;
	color: black;
	padding: 20px;
}

#navdiv ul li{
	list-style-type: none;
	display: inline-block;
	float: right;
}

#navdiv ul li:hover{
	background: #f2e2c9;
	transition:all 0.40s;
}

#navdiv h1{
	width: 300px;
	float: left;
	cursor: pointer;
	margin-left: 15px;
}

.form{
	width: 400px;
	height: 800px;
	background: rgba(0,0,0,0.3);
	padding: 10px;
	color: white;
	margin: 0;
	margin-top: 15px;
	margin-left: 110px;
	text-align: left;
	position: fixed;
}

#form{
	 font-size: 18px;
	 text-align: left;
	 width: 400px;
	 margin-left: 7px;
	 margin-top: 10px;
}

.feedback{
	font-weight: bold;
	font-size: 23px;
	color: #82192c;
	margin-left: 7px;
}

.php{
	font-size: 14px;
	margin-top: 10px;
	margin-left: 7px;
}

h2{
	font-family: sans serif;
	margin-top: 5px;
}

.error{
	color: maroon;
}
	</style>
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
	
<div class="php">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $hadd = $_POST['hadd'];
$gender = $_POST['gender']; 
 $cpnum = $_POST['cpnum'];
 $comment = $_POST['comment']; 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name,nickname,email,hadd,gender,cpnum,comment) VALUES('$name','$nickname','$email','$hadd','$gender','$cpnum','$comment')";
 mysql_query($sql_query);
        
        // sql query for inserting data into database
 }
?>


<div id="header">
 <div id="content">
    <label>Fill out the form.</label>
    </div>
</div>
<div id="body">

<p id="form">enter the following: </p>
	
<?php
		// define variables and set to empty values
		$nameErr = $nicknameErr = $emailErr = $genderErr =$cpnumErr = "";
		$name = $nickname = $email = $hadd = $gender = $cpnum = $comment = "";
		
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	if (empty($_POST["name"])) {
				$nameErr = "Name is required";
		  	} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed";
					$name = "";
				}
		  	}

			
			
			if(empty($_POST["nickname"])){
		  		$nicknameErr = "Nickname is required";
			}else{
		  		$nickname = test_input($_POST["nickname"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
				$nicknameErr = "Only letters and white space allowed";
				$nickname = "";
				}
			}
		  
		  
		  
			if (empty($_POST["email"])) {
			$emailErr = "Email is required";
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
				$genderErr = "Gender is required";
		  	} else {
				$gender = test_input($_POST["gender"]);
		  	}
			
			

			if (empty($_POST["cpnum"])) {
				$cpnumErr = "Mobile number is required";
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
		
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to display data</a></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br> </td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknameErr;?></span></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span></td>
    </tr>
	<tr>
    <td><textarea name="hadd" placeholder ="hadd" rows ="2" cols="30"><?php echo $hadd;?></textarea>></span></td>
    </tr>

	<tr>
    <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
    </tr>

	<tr>
    <td><input type="text" name="cpnum" placeholder="Cellphone Number" value="<?php echo $cpnum;?>">
			<span class="error">* <?php echo $cpnumErr;?></span></td>
    </tr>

	<tr>
    <td><textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $comment;?></textarea></span></td>
    </tr>
	
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</body>
</html>