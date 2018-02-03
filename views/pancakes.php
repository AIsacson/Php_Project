<?php
    ob_start();
    if($this->session->get('id') > 0){
        $logout = "Logout";
    } else{
        $logout = "Login";
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tasty Recipes - Pancakes</title>
		<meta charset="UTF-8">
                <link href="../../resources/css/reset.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/tasty.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/header.css" type="text/css" rel="stylesheet">
                <link href="../../resources/css/comment-style.css" type="text/css" rel="stylesheet">
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
                    <img src="../../resources/images/pancakes1920.jpg" alt="A picture of delicious pancakes">
		</div>
                <br>
		<div class="content">
			<div class="recipetitle">
				<h1>Pancakes</h1>
			</div>
			<div class="ingredients">
				<h2>Ingredients</h2>
				<ul>
					<li>1 cup all-purpose flour</li>
					<li>1/4 cup confectioners' sugar</li>
					<li>1 cup milk</li>
					<li>2 large eggs</li>
					<li>3 tablespoons butter, melted</li>
					<li>1 teaspoon vanilla extract</li>
					<li>1/4 teaspoon salt</li>
				</ul>
			</div>
			<br>
			<br>
			<div class="directions">
				<h2>Directions</h2>
				<ol>
				<li>1. Sift flour and confectioners' sugar into a bowl. Add milk, eggs, butter, vanilla and salt; beat until smooth.</li>
				<li>2. Heat a lightly greased 6 inch skillet; add about 3 tablespoons batter, spreading to almost cover bottom of skillet. Cook until lightly browned; turn and brown the other side. Remove to a wire rack. Repeat with remaining batter (make 10-12 pancakes), greasing skillet as needed.</li>
				</ol>
			</div>
		</div>
		<br>
		<div class="additionalcontent">
			<div class="nutrition">
				<h2>Nutritional Facts</h2>
				<p>403 calories: 2 each, 18g fat (11g saturated fat), 117mg cholesterol, 284mg sodium, 55g carbohydrate (35g sugars, 3g fiber), 7g protein</p>
			</div>
			<br>
                </div>
                <?php
                if($this->session->get('id') > 0) {
                    echo "<form method='POST' action='SetCommentHandler2'>
                            <input type='hidden' name='username' value='id'>
                            <textarea name='message'></textarea><br>
                            <button value='commentSubmit' type='submit'>Comment</button>
                        </form>";

                }
                else {
                    echo "Please login to comment!<br><br>";
                }?>
        </body>
</html>