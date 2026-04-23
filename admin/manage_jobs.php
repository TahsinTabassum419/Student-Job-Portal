<?php include("../config/db.php"); ?>
<link rel="stylesheet" href="../css/style.css">

<div class="container">

<h2>Manage Jobs</h2>

<?php
$res = mysqli_query($conn,"SELECT * FROM jobs");

while($row = mysqli_fetch_assoc($res)){
    echo "
    <div class='card'>
        <h3>{$row['title']}</h3>
        <p>{$row['location']} | {$row['salary']}</p>

        <a href='delete_job.php?id={$row['id']}'>
            <button style='background:red;'>Delete</button>
        </a>
    </div>
    ";
}
?>

</div>
<footer style="background:#2c3e50; color:white; text-align:center; padding:15px; margin-top:20px;">
    <p>© 2026 Online Job Portal System | All Rights Reserved</p>
</footer>