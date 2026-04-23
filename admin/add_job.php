<?php include("../config/db.php"); ?>
<link rel="stylesheet" href="../css/style.css">

<div class="container">
<div class="card">

<h2>Add Job</h2>

<form method="POST">
    <input name="title" placeholder="Job Title" required><br>
    <input name="location" placeholder="Location" required><br>
    <input name="salary" placeholder="Salary" required><br>
    <input name="description" placeholder="Description" required><br>

    <button type="submit" name="save">Save Job</button>
</form>

<?php
if(isset($_POST['save'])){
    $title = $_POST['title'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO jobs(title,location,salary,description)
            VALUES('$title','$location','$salary','$desc')";

    if(mysqli_query($conn,$sql)){
        echo "<p style='color:green;'>Job Added Successfully!</p>";
        echo "<a href='dashboard.php'><button>Back to Dashboard</button></a>";
    } else {
        echo "<p style='color:red;'>Failed to add job</p>";
    }
}
?>

</div>
</div>
<footer style="background:#2c3e50; color:white; text-align:center; padding:15px; margin-top:20px;">
    <p>© 2026 Online Job Portal System | All Rights Reserved</p>
</footer>