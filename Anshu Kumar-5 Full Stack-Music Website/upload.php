<?php
error_reporting(0);
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>


    <style>
    /* input[type="file"]{
         padding: 6px 12px;
    cursor: pointer;
    font-family: calibri;
    }
    
    ::-webkit-file-upload-button {
    background: #FF4B2B;
    color: white;
    padding: 8px 25px;
    font-size: 10px;
    border-radius: 20px;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    border-color: #FF4B2B;
    transition: all 0.15s ease;
    letter-spacing: 1px;
    box-sizing: border-box;
    outline: none;
    cursor: pointer;
    line-height: 1.5;
    display: inline-block;
    font-weight: bold;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
} */
    </style>
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="padding: 10%;">
<pre style="color:tomato;">Please do not provide space in file name that you are chooseing!Other wise song will be not played!</pre>
<a href="index.php"><span style="
    background-color:tomato;
     border-radius:50%;
     color:antiquewhite;
     font-size:xx-large;
     position:relative;
     /* top:20px;
     left:20px; */
     " class="material-icons"><span class="material-icons-outlined">
keyboard_backspace
</span></span></a>
    <div class="upload" style="margin: auto;">

        <form action="" enctype="multipart/form-data" method="post">
            Images: <input type="file" name="imagefile" class="form-control"><br><br><br>
            Title: <input type="text" name="title" id="title" class="form-control" required><br><br>
            Artist: <input type="text" name="artist" class="form-control" id="artist" required><br><br>
            <input type="file" name="audiofile" class="form-control" required><br><br><br>
            <input type="submit" value="upload" class="btn btn-success " name="submit">
        </form>

    </div>
</body>

</html>
<?php

// $a= $_GET['audio'];

if(isset($_POST['submit'])){
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if($_FILES["imagefile"]["name"]!=null){

            $image =  $_FILES["imagefile"]["name"];
            $title = $_POST['title'];
            $artist = $_POST['artist'];
            $a = $_FILES["audiofile"]["name"];
            $b = $_FILES["audiofile"]["tmp_name"];
            $bb = $_FILES["imagefile"]["tmp_name"];
            $folder = "audios/" . $a;
            $image_folder = "images/u_images/". $image;
            move_uploaded_file($b, $folder);
            move_uploaded_file($bb, $image_folder);
           $Q =  "INSERT INTO `songs`(`title`, `path`, `artist`,`images`) VALUES ('$title','$a','$artist','$image')";
           if(mysqli_query($conn, $Q)){
               
           }
           else{
               echo mysqli_error($conn);
           }
        }
        else{
            $image =  'song_image.png';
            $title = $_POST['title'];
            $artist = $_POST['artist'];
            $a = $_FILES["audiofile"]["name"];
            $b = $_FILES["audiofile"]["tmp_name"];
            $folder = "audios/" . $a;
    
            move_uploaded_file($b, $folder);
           $Q =  "INSERT INTO `songs`(`title`, `path`, `artist`, `images`) VALUES ('$title','$a','$artist','$image')";
           if(mysqli_query($conn, $Q)){
               
           }
           else{
            echo mysqli_error($conn);
        }
        }
        }
        }

     

?>