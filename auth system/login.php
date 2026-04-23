<?php include("../config/db.php"); session_start(); ?>

<link rel="stylesheet" href="../css/style.css">

<div class="container">
<div class="card">

<h2>Login</h2>

<form method="POST">
    <input name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" name="login">Login</button>
</form>

<a href="register.php">Register</a>

</div>
</div>

<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$pass'");
    $row = mysqli_fetch_assoc($res);

    if($row){
        $_SESSION['user'] = $row['name'];
        $_SESSION['role'] = $row['role'];

        if($row['role']=="admin"){
            header("location: ../admin/dashboard.php");
        } else {
            header("location: ../student/dashboard.php");
        }
    } else {
        echo "Invalid login";
    }
}
?>