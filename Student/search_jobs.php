<?php include("../config/db.php"); ?>
<link rel="stylesheet" href="../css/style.css">

<div class="container">

<div class="card">
<h2>Search Jobs</h2>

<form method="GET">
    <input name="location" placeholder="Location">
    <input name="title" placeholder="Job Title">
    <button>Search</button>
</form>
</div>

<?php
$query = "SELECT * FROM jobs WHERE 1=1";

if(!empty($_GET['location'])){
    $loc = $_GET['location'];
    $query .= " AND location LIKE '%$loc%'";
}

if(!empty($_GET['title'])){
    $title = $_GET['title'];
    $query .= " AND title LIKE '%$title%'";
}

$res = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($res)){
    echo "
    <div class='card'>
        <h3>{$row['title']}</h3>
        <p>{$row['description']}</p>
        <p>{$row['location']} | {$row['salary']}</p>

        <a href='../apply/apply.php?job_id={$row['id']}'>
            <button>Apply</button>
        </a>
    </div>
    ";
}
?>

</div>
<footer style="background:#2c3e50; color:white; text-align:center; padding:15px; margin-top:20px;">
    <p>© 2026 Online Job Portal System | All Rights Reserved</p>
</footer>