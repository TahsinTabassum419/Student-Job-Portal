<?php include("../config/db.php"); session_start(); ?>
<link rel="stylesheet" href="../css/style.css">

<div class="container">
<div class="card">

<h2>Admin Login</h2>

<form method="POST">
    <input name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" name="login">Login</button>
</form>

</div>
</div>

<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$pass' AND role='admin'");
    $row = mysqli_fetch_assoc($res);

    if($row){
        $_SESSION['admin'] = $row['name'];
        header("location: dashboard.php");
    } else {
        echo "Invalid Admin Login";
    }
}
?>