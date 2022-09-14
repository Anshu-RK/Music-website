<!-- <?php session_start() ?> -->
<div class="about" id="hom">
    <div class="bar">
        <h3 style="font-size: xx-large; color:#60a3bc;">M-World</h3>
        <div style="float: right;margin-top:-50px;">
            <span><?php
                    if (isset($_SESSION['name'])) {
                        echo $_SESSION['name'];
                    } else {
                        echo 'M-world';
                    }

                    ?></span>
            <div style=" display:flex;margin-top:-20px;">
                <a href="https://www.facebook.com/"><i style="color:dodgerblue" class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i style="color:violet" class="fab fa-instagram-square"></i></a>
                <a href="https://twitter.com/?lang=en-in"><i style="color:dodgerblue" class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="fake  trending" style=" box-sizing:border-box;border:2px solid white;">
                    <h1 style="color:#32ff7e">Trending Songs</h1>
        <?php
        include 'connection.php';
        $rocket = "SELECT title, path, artist,images FROM songs";
        $res = mysqli_query($conn, $rocket);
        if (mysqli_num_rows($res) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($res)) {
                echo '
            <div class="row">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6 trend">
                    <img src="images/u_images/' . $row['images'] . '" width="100%" height="100%" alt="No image">
                </div>
                <div class="col-6 col-sm-12 col-md-6 col-lg-6" trend>
                  <div style="margin-top:20px;">
                  <pre style="color:white;">Title:   ' . $row['title'] . '</pre>
                  <pre style="color:white;">Artist:   ' . $row['artist'] . '</pre>
                  <pre style="color:white;">Song Name:    ' . $row['path'] . '
                   </pre>
                   <a style="color:white;" href=index.php?rock=' . $row['path'] .'>
                   <span style="color:white;font-size:50px;" class="material-icons ">
                   play_circle_filled
                   </span>Play Me</a>
                  </div>
                </div>
            </div>
            ';
            }
        }

        ?>


    </div>
    <!-- <div class="trending">
        <h5 style="padding: 1%; color:#32ff7e;">In Trending</h5>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 trend">

                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>

            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 trend">
                <div class="song">
                    <audio src=""></audio>
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>
            </div>
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>
            </div>
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>
            </div>
        </div>
    </div>
    <div class="mood">
        <h5 style="padding: 1%; color:#32ff7e;">Mood Swing</h5>
        <div class="row">
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">

                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Love</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">BollyWood Hits</pre>

                </div>

            </div>
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Sad</h6>
                    <pre style="margin-left:5px; margin-top: -5px; overflow:-moz-hidden-unscrollable; color:tomato;">Top Bollywood sad sonds</pre>

                </div>
            </div>
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>
            </div>
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>
            </div>
        </div>
    </div>
    <div class="Old_Is_Gold">
        <h5 style="padding: 1%; color:#32ff7e;">Old Is Gold</h5>
        <div class="row">
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">

                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Love</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">BollyWood Hits</pre>

                </div>

            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Sad</h6>
                    <pre style="margin-left:5px; margin-top: -5px; overflow:-moz-hidden-unscrollable; color:tomato;">Top Bollywood sad sonds</pre>

                </div>
            </div>
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>
            </div>
            <div class="col-12 col-sm-6  col-md-3 col-lg-3 trend">
                <div class="song">
                    <a class="trend-song" href="">
                        <img src="images/shershaah.jpg" width=" 100%" height="100%" alt="">

                        <span class="material-icons icon">
                            play_circle_filled
                        </span>
                    </a>
                    <h6 style="margin-left: 5px; color:tomato;">Ranjha</h6>
                    <pre style="margin-left:5px; margin-top: -5px; color:tomato;">Sing By:Arman Malik</pre>

                </div>
            </div>
        </div>
    </div> -->
</div>
<?php




?>