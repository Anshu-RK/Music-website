<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-World</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="menu" id="menu">

        <a href="#" class="cook"><span onclick="closeNav()" style="
    background-color: antiquewhite;
     border-radius:50%;
     font-size:xx-large;
     position:relative;
     top:10px;
     left:3%;" class="material-icons">
                keyboard_backspace
            </span></a>

        <nav class="navbar navbar-expand" style="justify-content:flex-end;">
            <span class="navbar-brand" style="color:white; font-size:x-large;"><i class="far fa-user-circle"></i></span>
            <?php
            if (isset($_SESSION['name'])) {
            ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link menu-a">logout</a>
                    </li>
                </ul>
            <?php
            } else {
            ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link menu-a">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="" style="color:white;" class="nav-link">/</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link menu-a">Signup</a>
                    </li>
                </ul>
            <?php
            }
            ?>

        </nav>
        <nav class="navbar menu-b" id="active">
            <ul class="navbar-nav">
                <li class="nav-item mb-2" style="display: flex;">

                    <span class="material-icons nav-link mr-3" style="cursor: pointer;">
                        roofing
                    </span> <a href="#hom" onclick="closeNav()" class="nav-link life activate" id="pp">Home</a>

                </li>
                <li class="nav-item mb-2 " style="display: flex;">
                    <span class="material-icons nav-link mr-3">
                        library_music
                    </span>
                    <a href="#lib" onclick="closeNav()" class="nav-link life ">My Library</a>
                </li>
                <li class="nav-item mb-2" style="display: flex;">
                    <span class="material-icons nav-link mr-3">
                        search
                    </span>
                    <a href="#serch" onclick="closeNav()" class="nav-link life">Search</a>
                </li>
                <li class="nav-item mb-2" style="display: flex;">
                    <span class="material-icons nav-link mr-3">
                        playlist_add
                    </span>
                    <a href="#boy" onclick="closeNav()" class="nav-link life">Create Playlist</a>
                </li>
                <li class="nav-item mb-2" style="display: flex;">
                    <span class="material-icons nav-link mr-3">
                        favorite_border
                    </span>
                    <a href="#girlb" onclick="closeNav()" class="nav-link life">Liked songs</a>
                </li>
            </ul>
        </nav>

        <?php
        if (isset($_SESSION['name'])) {
            if($_SESSION['name']=="admincontrol"){
        ?>
            <div class="pre">
                <h4 style="margin-left: 30px; color:antiquewhite;">For Admin</h4>
                <ul class="navbar-nav ">
                    <li class="nav-item" style="display: flex; margin:auto;"><span class="material-icons nav-link">file_upload</span>
                        <a href="upload.php" class="nav-link " style="color:#05c46b;">Upload</a>
                    </li>
                </ul>
            </div>
        <?php
        }
    }
        ?>


    </div>

    <div class="toggle">
        <!-- <input type="checkbox" name="tog" id="press"> -->
        <label for="press" onclick="openNav()" style="margin-top: 15px;margin-left: 40px;cursor:pointer;">
            <div class="line a"></div>
            <div class="line bb"></div>
            <div class="line c"></div>
        </label>

    </div>

    <div class="main-content" id="deep">

        <!--  -->
        <?php include 'home.php' ?>
        <?php include 'search.php' ?>
        <?php include 'like.php' ?>
        <?php include 'playlist.php' ?>
        <?php include 'library.php' ?>
    </div>

    <div class="aud">
       
        <audio controls autoplay style="margin-top: 10px;background-color:black;width:100%;">
            <source src='audios/<?php echo $_GET['rock'] ?>' type='audio/mp3'>
        </audio>
        
        
    </div>

    <script>
        // Get the container element
        var btnContainer = document.getElementById("active");
        // Get all buttons with class="btn" inside the container
        var bn = btnContainer.getElementsByClassName("life");
        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < bn.length; i++) {
            bn[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("activate");
                current[0].className = current[0].className.replace(" activate", "");
                this.className += " activate";
            });
        }

        function openNav() {
            document.getElementById("menu").style.transform = "translateX(0px)";
            //document.getElementById("main").style.marginLeft = "250px";
        }

        if (window.innerWidth < 1000) {
            function closeNav() {
                document.getElementById("menu").style.transform = "translateX(-350px)";
                //document.getElementById("main").style.marginLeft= "0";
            }
        }
    </script>
</body>

</html>