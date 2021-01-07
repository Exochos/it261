<?php ?>
<!doctype html>
<html lang="en">
<head>
    <title>IT261 - Page</title>
    <meta charset="utf-8">
    <!-- Viewport so we can change depending on device size -->
    <meta name='viewport' content='width=device-width,initial-scale=1,user-scalable=no'>
    <!-- Style sheet lives here -->
    <link rel="stylesheet" href="css/style.css"> 
    <!-- javascript -->
    <script src="project.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery.connections.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
</head>

<body style="width:100%">
    <!--Flexbox container-->
    <div class='container'>
        <div class='left'> </div>
        <div class='middle'>
	<?php 
    	include "php/header.php"; head();
	?>
	<p>Info PHP is here with error reporting set to on,
		<a href="http://35.226.47.22/it261/homework/info.php">http://35.226.47.22/it261/homework/info.php</a><br>
	<img src="images/error.png" width="50%"><br>
	Test.php is here so you can see that error reporting is on:
	<a href="http://35.226.47.22/it261/homework/test.php">http://35.226.47.22/it261/homework/test.php</a><br>
	<img src="images/test.png" width="50%">
	</p>
	<span style="height:30%"></span>

        <footer style="font-family: 'Audiowide', cursive;">Jeremy Ward	&copy;2021 </footer>
        </div>
        <div class='right'></div>
    </div>
</body>
