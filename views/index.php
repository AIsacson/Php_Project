<?php
    if($this->session->get('id') > 0) {
        \header('Location: /Tastymvc/MVC/View/AfterLoggingInPageHandler');
    }
    if($this->session->get('id') > 0){
        $logout = "Logout";
    } else{
        $logout = "Login";
    }
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
                        <li id='logout'><a href='LoginHandler' class='dropbtn'><?php echo $logout; ?></a></li>                      
                    </ul>
		</div>
            
		<div class="header">
                    <img src="../../resources/images/header.jpg" alt="En närbild föreställandes gafflar samt en hög med salt- och pepparkorn som ligger på ett träbord">
		</div>
		<div class="main-wrap">
			<p>
			<br/>
			<br/>
			<br/>
                        Welcome to the web site for the recipe company named Tasty Recipes.<br>The web site has a front page, a calendar page and two recipe pages.<br>You can find the calendar page by clicking <a href="CalendarPageHandler">here</a> or by clicking "Calendar" in the navigation bar above.</p>
		</div>
	</body>
</html>