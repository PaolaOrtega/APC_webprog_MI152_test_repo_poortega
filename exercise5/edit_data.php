
<html>
<title>
	Paola Ortega - Login
</title>
	
<head>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	
	<style>
	<link rel="stylesheet" href="style.css" type="text/css" />
		
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
	font-size: 15px;
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

label{
	font-size: 15px;
}

#cover{
	width: 390px;
	height: 370px;
	background: rgba(0,0,0,0.3);
	padding: 10px;
	color: white;
	margin: 0;
	margin-top: 5px;
	margin-left: 110px;
	text-align: left;
	position: fixed;
	}
	
.h1{
	font-weight: bold;
	font-size: 23px;
	color: #82192c;
	margin-left: 7px;
}

#header{
	font-size: 15px;
	margin-left: 7px;
}

</style>

<center>

<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	$hadd = $_POST['hadd'];
	$gender = $_POST['gender']; 
	$cpnum = $_POST['cpnum'];
	$comment = $_POST['comment']; 
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET name='$name', nickname='$nickname',email='$email',hadd='$hadd',gender='$gender',cpnum='$cpnum',comment='$comment' WHERE user_id=".$_GET['edit_id'];   
 // sql query for update data into database 
 
// sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  window.location.href='index.php';
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>

</head>
</center>
<body>
<div id="Maindiv">
	<div id="navdiv">
		
		<ul>
			<h1 style="font-family:Source Sans Pro Light;"><a href="mypage.php">Paola Ortega</h1></a></li>
			<li><a href="mypage.php">Home</a></li>
			<li><a href="hobbies.php">Hobbies</a></li>
			<li><a href="interests.php">Interests</a></li>
			<li><a href="trivias.php">Trivia</a></li>
			<li><a href="add_data.php">Feedback</a></li>
		</ul>
	</div>
</div>

<center>
	</br>
</br>
</br>
</br>
<center>
<div id="cover">
<p class="h1">Form</p>
<br>

<div id="header">
 <div id="content">
    <label>Please update the form.</label>
    </div>
	<br>
	<div id="body">		
	<div id="content">
    <form method="post">
    <table align="center">
   <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required/></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname'];?>"required/></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email'];?>" required></td>
    </tr>
	<tr>
    <td><textarea name="hadd" placeholder ="Home Address" rows ="3" cols="50"><?php echo $fetched_row['hadd'];?></textarea></td>
    </tr>
	<tr>
    <td><input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="female">Female
	<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="male">Male
	</td>
    </tr>
	<tr>
    <td><input type="text" name="cpnum" placeholder="Cellphone Number" value="<?php echo $fetched_row['cpnum'];?>"required></td>
    </tr>
	<tr>
    <td><textarea name="comment" placeholder="Comment" rows="5" cols="50"><?php echo $fetched_row['comment'];?></textarea></td>
    </tr>
	<tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
	 </table>
    </form>
    </div>
</div>

</center>
</body>
</html>