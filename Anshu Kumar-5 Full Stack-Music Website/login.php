<?php 
include 'connection.php';
session_start();
$e =$o="";
if(isset($_POST['Login'])){
     
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $querry = "SELECT * FROM signup WHERE username = '$username' AND password = '$password' ";
        $op = mysqli_query($conn, $querry);
        if(mysqli_fetch_row($op)>0){
            $_SESSION['name'] = $username;
            header("Location: index.php");
        }else{
            $e= "username/email is wrong!!";
        }
    }
}

?>
  <head>
<title>Login</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="style/login.css">
    <div id="login"  class="log">
    <div class="main">
    <a href="index.php"><span style="
    background-color: antiquewhite;
     border-radius:50%;
     font-size:xx-large;
     position:relative;
     
     " class="material-icons"><span class="material-icons-outlined">
keyboard_backspace
</span></span></a>
    </div>
    <div class="login">
        <h3>Login</h3>
        <pre style="text-align: center;">Continue to login</pre>
        <hr>
        
        <span style="color: red;"><?php echo $e ?></span>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username"><b>Enter Your Username</b></label>
                <input type="text" name="username" placeholder="Enter Your username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password"><b>Enter Your Password</b></label>
                <input type="password" name="password" id="" placeholder="Enter Your Password" class="form-control" required>
            </div>
            
            <div class="form-group">
               <input type="submit" name="Login" id="Login" value="Login">
            </div>
            
        </form>
    </div>

    </div>