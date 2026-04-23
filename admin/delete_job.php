<?php
include("../config/db.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM jobs WHERE id=$id");

header("location: manage_jobs.php");
?>
<footer style="background:#2c3e50; color:white; text-align:center; padding:15px; margin-top:20px;">
    <p>© 2026 Online Job Portal System | All Rights Reserved</p>
</footer>