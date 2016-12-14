<html>
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

	<div class="social-icons">
			<a href="http://www.facebook.com/paolafrancesca.ortega" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="http://www.twitter.com/paochipaoch" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/pf.ortega" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	</div>
</body>

</html>
