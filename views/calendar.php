<?php
    ob_start();
    if($this->session->get('id') > 0){
        $logout = "Logout";
    } else{
        $logout = "Login";
    }
    ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tasty Recipes - Calendar</title>
		<meta charset="UTF-8">
                <link href="../../resources/css/reset.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/tasty.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/header.css" type="text/css" rel="stylesheet">
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
                            <li id="logout"><a href="LoginHandler" class="dropbtn"><?php echo $logout; ?></a></li>
			</ul>
		</div>
		<div class="header">
                    <img src="../../resources/images/header.jpg" alt="This is supposed to be a header picture">
		</div>
		<br>
		<br>
		<div id="calendar">
			<div id="month">
  				<ul>
    				<li>August</li>
  				</ul>
			</div>
			<div id="weekdays">
				<ul class="weekdays">
  					<li>Mon</li>
  					<li>Tue</li>
					<li>Wed</li>
					<li>Thu</li>
					<li>Fri</li>
					<li>Sat</li>
					<li>Sun</li>
				</ul>
			</div>
			<div id="days">
				<ul class="days">
					<li>1
						<br>
                                                <a href="MeatballsHandler" class="recipeday"><img src="../../resources/images/meatballsicon.jpg" alt="A meatball icon"></a>
					</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
					<li>9</li>
  					<li>10</li>
  					<li>11</li>
  					<li>12</li>
					<li>13</li>
					<li>14</li>
					<li>15</li>
					<li>16</li>
					<li>17</li>
					<li>18
						<br>
                                                <a href="PancakesHandler" class="recipeday"><img src="../../resources/images/pancakesicon.jpg" alt="A pancake icon"></a></li>
					<li>19</li>
					<li>20</li>
					<li>21</li>
					<li>22</li>
					<li>23</li>
					<li>24</li>
					<li>25</li>
					<li>26</li>
					<li>27</li>
					<li>28</li>
					<li>29</li>
					<li>30</li>
					<li>31</li>
				</ul>
			</div>
		</div>		
	</body>
</html>