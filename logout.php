<?php

session_start();

session_destroy();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" href="x3dom/x3dom.css" type="text/css" />
		<title>Pizza Blast - Bitte loggen Sie sich ein</title>
</head>

<body>
 <div id="header">
   <div>
			<ul class="first">
				<li><a href="index.php">Home</a></li>
				<li><a href="pizzacreator.php">Pizza Creator</a></li>
			</ul>
			<div>
				<a href="index.php"><img src="images/logo2.png" alt="Logo" width="180" height="163"></a>
	   </div>
			<ul>
				<li><a href="support.php">Support</a></li>
				<li><a href="login.html">Login</a></li>
			</ul>
		</div>
	</div>
    
    <div id="content">
      	<div id="login">
	    		<h2>Login</h2>
            	<p><br /></p>
            		<p>Sie wurden erfolgreich abgemeldet!</p>
                    <p><a href="pizzacreator.php">Zum Pizza Creator</a></p>
      	</div>
	</div>          
	<div id="footer">
		<div>
			<ul>
				<li id="pasta">
					<div>
						<span>Pizza Creator</span>
						<p>Bla bla bla</p>
						<a href="index.html" class="more">More</a>
					</div>
				</li>
				<li id="pizza">
					<div>
						<span>Pizza</span>
						<p> More Bla</p>
						<a href="index.html" class="more">More</a>
					</div>
				</li>
				<li id="callus">
					<div>
						<span>Call us now!</span>
						<b>NUMBER</b>
					</div>
				</li>
			</ul>
		</div>
		<div class="section">
			<div>
				<p>&copy; Copyright &copy; 2013. Erstellt für die Hochschule Fulda von Tobias Brückner, Jenny Wüstrich, Nena Zimmermann und Juliane Gehb</p>
				<div>
					<span>Finde uns </br> auf:</span>
					<div>
						<a href="http://facebook.com/" class="facebook" target="_blank"></a>
						<a href="http://linkedin.com/" class="linked-in" target="_blank"></a>
						<a href="http://twitter.com/" class="twitter" target="_blank"></a>
					</div>
                </div>
			</div>
		</div>
	</div>
</body>
</html>
           