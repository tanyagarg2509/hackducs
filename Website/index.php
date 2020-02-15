<!DOCTYPE html>
<html>
<title>BOOKBUD</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }
    
    .myimage {
        height: 300px;
    }
    
    .mySocialIcons {
        margin-top: 30px;
    }
    
    .mySocialIcons i {
        padding: 5px;
    }
    
    #signupModal {
        display: none;
    }
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <div id="signupModal">
        <?php 
            include('signupModal.html');
        ?>
    </div>
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:250px;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                <i class="fa fa-remove"></i>
            </a>
            <!-- <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br> -->
            <!-- <h4><b>BookBud</b></h4> -->
            <button class="w3-button w3-white" onclick="openSignupModal()"><h4><b>Login/SignUp</b></h4> </button>

        </div>
        <div class="w3-bar-block">
            <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PROFILE</a>
            <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
            <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
        </div>
        <div class="w3-panel w3-large mySocialIcons">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:250px">

        <!-- Header -->
        <header id="portfolio">
            <a href="#"><img src="images/1.jfif" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            <div class="w3-container">
                <h1><b>BOOKBUD</b></h1>
                <div class="w3-section w3-bottombar w3-padding-16">
                    <span class="w3-margin-right">Filter:</span>
                    <button class="w3-button w3-black">Educational</button>
                    <button class="w3-button w3-white"><i class="w3-margin-right"></i>Romance</button>
                    <button class="w3-button w3-white"><i class="w3-margin-right"></i>Comic</button>
                    <button class="w3-button w3-white"><i class="w3-margin-right"></i>Thriller</button>
                    <!-- <button class="w3-button w3-white  w3-hide-small"><i class="w3-margin-right"></i>Drama</button> -->
                    <button class="w3-button w3-white"><i class="w3-margin-right"></i>Drama</button>
                </div>
            </div>
        </header>

        <!-- First Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="images/1.jfif" alt="Norway" style="width:100%" class="w3-hover-opacity myimage">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Some Text</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="images/2.jfif" alt="Norway" style="width:100%" class="w3-hover-opacity myimage">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Some Text</p>
                </div>
            </div>
            <div class="w3-third w3-container">
                <img src="images/3.jfif" alt="Norway" style="width:100%" class="w3-hover-opacity myimage">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Some Text</p>
                </div>
            </div>
        </div>

        <!-- Second Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="images/3.jfif" alt="Norway" style="width:100%" class="w3-hover-opacity myimage">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Some Text</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="images/2.jfif" alt="Norway" style="width:100%" class="w3-hover-opacity myimage">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Some Text</p>
                </div>
            </div>
            <div class="w3-third w3-container">
                <img src="images/1.jfif" alt="Norway" style="width:100%" class="w3-hover-opacity myimage">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Some Text</p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
        </div>

        <!-- Images of Me -->


        <!-- End page content -->
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        function openSignupModal() {
            document.getElementById('signupModal').style.display = 'block';
            document.getElementById('signup').style.display = 'block';
        }
    </script>

</body>

</html>