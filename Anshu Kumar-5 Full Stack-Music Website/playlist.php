<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/playlist.css">
</head>

<body>
    <div class="playlist" id="boy">
    <pre class="g" style="color: antiquewhite;">Playlist</pre>
        <div class="sister">
            <div class="add-box">
                <span class="material-icons a">music_note</span>
                <div class="b">
                <span class="material-icons">add_a_photo</span>
                <pre style="font-size: small;">Add Photo</pre>
                </div>

            </div>
            <div class="sis">
                <pre style="color: antiquewhite;">Playlist</pre>
                <h1 id="change" class="playlist_title" onclick="change()">
                    MyPlaylist#1
                </h1>
                <span class="user-name"></span>
            </div>
        </div>
        <div style="margin-top: 20px; ">
        <span class="material-icons">more_horiz</span>
        </div>

    </div>
    <script>
        function change(){
            let s = document.getElementById("change").innerText;
            let a = prompt("Enter Playlist Name",s);
            if(a != null){
                let v = document.getElementById("change").innerText = a;
                console.log(v);
            }else{
                let v = document.getElementById("change").innerText;
                console.log(v);
            }
           
        }
    </script>
</body>

</html>