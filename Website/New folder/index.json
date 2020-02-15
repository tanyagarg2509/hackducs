<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
</head>

<body>


    <div id="navbar">
        <?php
            include('header.php');
        ?> 
    </div>
    <div id="sidenav">
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="main">
        <?php 
            $i=0;
            while($i>10)
            {
                $i--;
                include ('post.html');
            }
        ?>
    </div>
    <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
                document.getElementById("navbar").style.padding = "20px 10px";
                document.getElementById("sidenav").style.top = "70px";
            } else {
                document.getElementById("navbar").style.padding = "40px 10px";
                document.getElementById("sidenav").style.top = "100px";
            }
        }
    </script>

</body>

</html>