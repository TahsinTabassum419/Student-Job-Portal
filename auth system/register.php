<?php include("../config/db.php"); ?>

<link rel="stylesheet" href="../css/style.css">

<div class="container">
<div class="card">

<h2>Register</h2>

<form method="POST">

    <input name="name" placeholder="Full Name" required><br>
    <input name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <button type="submit" name="register">Register</button>

</form>

</div>
</div>

<?php
if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // default role = student
    $role = "student";

    // check duplicate email
    $check = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    
    if(mysqli_num_rows($check) > 0){
        echo "<p style='color:red;'>Email already exists!</p>";
    }
    else{

        $sql = "INSERT INTO users(name,email,password,role)
                VALUES('$name','$email','$password','$role')";

        if(mysqli_query($conn,$sql)){
            echo "<p style='color:green;'>Registration Successful!</p>";
            echo "<a href='login.php'><button>Go to Login</button></a>";
        } else {
            echo "<p style='color:red;'>Registration Failed!</p>";
        }
    }
}
?>