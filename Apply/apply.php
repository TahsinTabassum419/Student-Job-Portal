<?php include("../config/db.php"); ?>
<link rel="stylesheet" href="../css/style.css">

<div class="container">

<div class="card">

<h2>Apply Job</h2>

<form method="POST" enctype="multipart/form-data">
    <input name="name" placeholder="Your Name"><br>
    <input type="file" name="resume"><br>
    <button type="submit" name="apply">Submit</button>
</form>

</div>

</div>


<footer style="background:#2c3e50; color:white; text-align:center; padding:15px; margin-top:20px;">
    <p>© 2026 Online Job Portal System | All Rights Reserved</p>
</footer>