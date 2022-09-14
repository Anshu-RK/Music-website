<?php 
include 'connection.php';
session_start();
$_SESSION['name'] =" ";

?>
<?php
$error = $username = $email =$password = $birth = "";
if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $birth = $_POST['birth'];
        $qer = "SELECT * FROM signup WHERE email = '$email' AND username = '$username' ";
        $r = mysqli_query($conn, $qer);
        if (mysqli_fetch_row($r) > 0) {
            $error =  "username/email already exist!!";
        } else {
            $q = "INSERT INTO `signup`( `email`, `password`, `username`, `dob`) VALUES ('$email','$password','$username','$birth')";
            if (mysqli_query($conn, $q)) {
                $_SESSION['name'] = $username;
                header("Location: index.php");
            }
        }
    }
}

?>
<head>
<title>Signup</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="style/signup.css">
<div class="sign" id="sign">
    <div class="main" id=""> 
    <a href="index.php"><span style="
    background-color: antiquewhite;
     border-radius:50%;
     font-size:xx-large;
     position:relative;
     
     " class="material-icons">arrow_back</span></a>
    </div>
    <div class="signup">
        <h3>Signup</h3>
        <pre style="text-align: center;">" <span style="color: tomato;">Welcome </span>To The World Of <span style="color:#1e90ff ;">Songs</span> "</pre>
        <hr>
        <span style="color: red;"><?php echo $error ?></span>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="email"><b>Whats your email?</b></label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password"><b>Create Password</b></label>
                <input type="password" name="password" id="password" placeholder="Create Password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username"><b>What should we call you?</b></label>
                <input type="text" name="username" id="username" placeholder="Enter Username" class="form-control" required>
                <pre>This Appear on your profile</pre>
            </div>
            <div class="form-group">
                <label for="birth"><b>What's your date of birth?</b></label>
                <input type="date" name="birth" id="birth" placeholder="Enter your birth date" class="form-control" required>
            </div>
            <!-- <div class="form-group">
                <label for="gender"><b>What's your gender?</b></label>
                <div style="display: flex;justify-content: space-evenly;align-items: center;">
                    <input type="radio" name="gender" id="gender">
                    <span><b>Male</b></span>
                    <input type="radio" name="gender" id="gender">
                    <span><b>Female</b></span>
                    <input type="radio" name="gender" id="gender">
                    <span><b>Other</b></span>
                </div>
            </div> -->
            <div class="form-group">
                <input type="submit"- name="submit" id="submit" value="Submit">
            </div>
        </form>
    </div>
</div>

