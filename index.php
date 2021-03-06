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
        <div class='left'> </div><!-- left block -->
        <div class='middle' style="flex-direction: column;"><!-- Middle is going to hold everything -->
            <header>
                <h1 style="font-family: 'Audiowide', cursive;">Jeremy's <sub>Portal Page</sub></h1>
                <nav style="text-align: right;font-family: 'Audiowide', cursive;margin-bottom: 1em; word-spacing: 10px;" class='nav'>
                    <a link href="#index.html">Home</a>
                    <a link href="/it261/weeks/week3/switch.php">Switch-3</a>
                    <a link href="#index.html">Troubleshoot 4</a>
                    <a link href="#index.html">Calculator</a>
                    <a link href="#index.html">Email</a>
                </nav>
            </header>
            
            <main style="height:80%; width:100%;flex-direction: row;">
                <img src="images/Jeremy-Profile.jpg" style="margin:2em;float: right;height: 20%; border-radius: 50%;">
                <div style="flex-direction: row; margin: 1em;padding:1em;width:65%;background-color: azure;border-radius: 15%;">
                    Hi! My name is Jeremy and here are some things about me:<br>
                    I grew up in California and moved up to the greater Seattle area when I was 9 and have lived here ever since.
                    I initially went to College at Shoreline CC back in 2000 for Computer Science but dropped out cause my mother moved and never got back into it.
                    Its only been in the last couple of years that I have had the fortitude to get myself back into Computer Science. Now that I'm back into it however I
                    am very much enjoying myself with HTML javascript, python, java, and all the rest of the stuff, and now hopefully PHP. :)<br>
                    I should be getting myself a puppy soon if all goes well and hoping that covid / coups are over soon.
            </div>
                <span style="height:2em;">&nbsp;</span>
                <div style="flex-direction: column-reverse;border-style: solid;border-color:cornflowerblue;border-radius: 25%;width:40%;">
                <UL style="margin-left: 2em;">
                    <h2>List of Assignments:</h2>
                    <li><a href="">MAMP</a></li>
                    <li><a href="index.php">Portal Page</a></li>                    
                    <li><a href="">PHP Fundamentals</a></li>
                    <li><a href="">Using a Switch</a></li>
                </UL><br>
            </div>
            <span style="height: 20px;">&nbsp;</span>
                <aside style="height: 20%;">
                    <h2>Weekly class Exercises</h2>
                    <li><a href="https://docs.google.com/document/d/1OygAPim_GKQCoMrjDjWs0qm5HNj-ZPv9RA6R5HpvnHQ/edit?usp=sharing">Week 2 Class Exercises</a></li>
                    <li><a href="">Week 3 Class Exercises</a></li>
                    <li><a href="">Week 4 Class Exercises</a></li>
                    <li><a href="">Week 5 Class Exercises</a></li>
                    <li><a href="">Week 6 Class Exercises</a></li>
                    <li><a href="">Week 7 Class Exercises</a></li>
                    <li><a href="">Week 8 Class Exercises</a></li>
                </aside>
            </main>
            <span style="height:20%"></span>
            <footer style="font-family: 'Audiowide', cursive;">
                Jeremy Ward	&copy; 2021<br>
                <a href="http://validator.w3.org/check/referer" rel="nofollow" title="Validate as HTML5">HTML5</a>
                <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate as CSS3">CSS3</a>
             </footer>
        </div>

        <div class='right'></div> <!-- right block-->
    </div>
</body>
