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
		<title>Tasty Recipes - Swedish Meatballs</title>
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
                    <img src="../../resources/images/meatballs1920.jpg" alt="A picture of delicious meatballs">
		</div>
		<br>
		<div class="content">
			<div class="recipetitle">
				<h1>Swedish Meatballs</h1>
			</div>
			<div class="ingredients">
				<h2>Ingredients</h2>
				<ul>
					<li>4 eggs</li>
					<li>1 cup milk</li>
					<li>8 slices white bread, torn</li>
					<li>2 pounds ground beef</li>
					<li>1/4 cup finely chopped onion</li>
					<li>4 teaspoons baking powder</li>
					<li>1-2 teaspoons salt</li>
					<li>1 teaspoon pepper</li>
					<li>2 tablespoons shortening</li>
					<li>2 cans (10-3/4 ounces each) condensed cream of chicken soup, undiluted</li>
					<li>2 cans (10-3/4 ounces each) condensed cream of mushroom soup, undiluted</li>
					<li>1 can (12 ounces) evaporated milk</li>
					<li>minced fresh parsley</li>
				</ul>
			</div>
			<br>
			<br>
			<div class="directions">
				<h2>Directions</h2>
				<ol>
					<li>1. In a large bowl, beat eggs and milk. Add bread; mix gently and let stand for 5 minutes. Add beef, onion, baking powder, salt and pepper; mix well (mixture will be soft). Shape into 1 inch balls.</li>
					<li>2. In a large skillet, brown meatballs, a few at a time, in shortening. Place in ungreased 3-qt. baking dish. In a bowl, stir soups and milk until smooth; pour over meatballs. Bake, uncovered, at 350 degrees for 1 hour. Sprinkle with parsley.
					</li>
				</ol>
			</div>
		</div>
		<br>
		<div class="additionalcontent">
			<div class="nutrition">
				<h2>Nutritional Facts</h2>
				<p>399 calories: 1 each, 23g fat (9g saturated fat), 164mg cholesterol, 1065mg sodium, 20g carbohydrate (7g sugars, 1g fiber), 27g protein</p>
			</div>
			<br>

		</div>
                <?php
                if($this->session->get('id') > 0) {
                
                echo "<form method='POST' action='SetCommentHandler'>
                    <input type='hidden' name='username' value='id'>
                    <textarea name='message'></textarea><br>
                    <button value='commentSubmit' type='submit'>Comment</button>
                </form>";
                }
                else {
                    echo "Please login to comment!<br><br>";
                }
                ?>
	</body>
</html>