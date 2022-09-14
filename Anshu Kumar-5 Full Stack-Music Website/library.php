<!-- <?php session_start() ?> -->
 <link rel="stylesheet" href="style/library.css">
    <div class="library " id="lib">
        <div class="top">
            <span style="color:white; font-size:x-large;float: right;line-height: 115px; margin-right: 21px;"><i class="far fa-user-circle"></i>
            <?php 
            if(isset($_SESSION['name'])){
                echo $_SESSION['name'];
            }else{
                echo 'M-world';
            }

        ?> 
             
             </span>
        </div>
        <div class="play">
            <h1>Playlist</h1>
            <div class="king">
                <div style="margin-top: 188px;">
                    <h1>Liked Song</h1>
                    <pre style="color: antiquewhite;font-size:larger;margin-right:3px;">0 liked song</pre>
                </div>
               <a href="#girl" class="girl"> <span style=" font-size:50px;" class="material-icons ">
                    play_circle_filled
                </span></a>
            </div>
        </div>
    </div>
