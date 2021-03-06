<!DOCTYPE HTML>
<html>
<title>
	Paola Ortega - Interests
</title>
	
<head>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	
	<style>
	
html, body, {
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
}

html {
  background: url(praise.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.prof2-box{
	width: 900px;
	height: 370px;
	background: rgba(0,0,0,0);
	padding: 40px;
	color: white;
	margin: 0 auto;
	margin-top: 60px;
	text-align: center;
}

.social-icons {
	font-size: 20px;
	text-align: Center;
	position: relative;
	top: 100px;
}

.social-icons a {
	color: white;
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
	background: #030001;
	line-height: 80px;
	color: white;
	margin-right: 15px;
}

#navdiv ul a{
	text-decoration: none;
	color: white;
	padding: 20px;
}

#navdiv ul li{
	list-style-type: none;
	display: inline-block;
	float: right;
}

#navdiv ul li:hover{
	background: #23002b;
	transition:all 0.40s;
}

#navdiv h1{
	width: 300px;
	float: left;
	cursor: pointer;
	margin-left: 15px;
}

.name{
	color: white;
	text-align: center;
	margin-top: 50px;
	font-size: 40px;
}

.trBorder {
    height: 150px;
    width: 835px;
    margin: 30px;
    border: 5px solid rgba(255,255,255,.5);
	position: relative;
	left: center;
	top: -150px;
}
 .vincent{
	 font-size: 25px;
	 margin-left: 610px;
 }
 
 .dictionary{
	 font-size: 20px;
	 text-align: left;
	 width: 400px;
	 margin-left: 270px;
	 margin-top: -140px;
 }

 .next {
	font-size: 100px;
	margin-left: 320px;
	margin-top: -190px;
	padding: 40px;
}

 .next a {
	color: white;
}
	</style>
</head>
<body>
<div id="Maindiv">
	<div id="navdiv">
		
		<ul>
			<h1 style="font-family:Source Sans Pro Light;"><a href="<?php echo base_url('index.php/user/controller/mypage')?>"target="_self">Paola Ortega</h1></a></li>
			<li><a href="<?php echo base_url('index.php/user/controller/mypage')?>"target="_self"">Home</a></li>
			<li><a href="<?php echo base_url('index.php/user_controller/hobbies')?>" target="_self">Hobbies</a></li>
			<li><a href="<?php echo base_url('index.php/user_controller/interests')?>" target="_self">Interests</a></li>
			<li><a href="<?php echo base_url('index.php/user_controller/trivias')?>" target="_self">Trivia</a></li>
			<li><a href="<?php echo site_url('users'); ?>">Feedback</a></li>
			<li><a href="<?php echo site_url('users/create'); ?>">Add User</a></li>
		</ul>
	</div>
</div>

<div class="prof2-box">
	<div class="name">
	<p style= "font-family:Helvetica;"> "A man who limits his interests limits his life" </p></font>
	<p class="vincent" style= "font-family:Helvetica;"> - Vincent Price </p></font>
	<div class ="trBorder">
	</div>
	
	<p class="dictionary" style="font-family:Helvetica;"> <big><big>interest</big></big><br> [<strong>in</strong>-ter-ist, -trist]<br> noun<br>
	<small>the feeling of a person whose<br> attention, concern, or curiosity<br> is particularly engaged<br> by something.</small></p></font>
	
	<div class="next">
		<a href="<?php echo base_url('index.php/user_controller/myinterests')?>" target="_self"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
	</div>
</div>
	
	<div class="social-icons">
			<a href="http://www.facebook.com/paolafrancesca.ortega" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="http://www.twitter.com/paochipaoch" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/pf.ortega" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	</div>
</body>

</html>
