<?php
    ob_start();
    ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tasty Recipes</title>
		<meta charset="UTF-8">
                <link href="../../resources/css/reset.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/tasty.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/header.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/login-style.css" type="text/css" rel="stylesheet">
                
	</head>
	<body>
            <h1>Tasty Recipes</h1>
		<div class="menu">
                    <ul>
                        <li><a href="FirstPageHandler" class="dropbtn">Home</a></li>
                        <li><a href="CalendarPageHandler" class="dropbtn">Calendar</a></li>
                        <li class="dropdown">
                            <a class="dropbtn">Recipes</a>
                                <div class="dropdown-content">
                                    <a href="MeatballsHandler">Swedish Meatballs</a>
                                    <a href="PancakesHandler">Pancakes</a>
    				</div>
  			</li>
                        <li><a href="SignupHandler" class="dropbtn">Signup</a></li>
                        <li id='logout'><a href='LoginHandler' class='dropbtn'><?php $logout?></a></li>
                    </ul>
		</div>
            <div class="login-box">
                <form action='LoginHandler' method='POST'>
                    <div class='container'>
                        <label><b>Username</b></label>
                        <input type='text' placeholder='Enter Username' name='username' required>
                        
                        <label><b>Password</b></label>
                        <input type='password' placeholder='Enter Password' name='password' required>
                        
                        <button class='loginButton' type='submit' value='loginSubmit'>Login</button>
                    </div>
                </form>
            </div>
	</body>
</html>