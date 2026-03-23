<?php include "db.php";
if(!isset($_SESSION['admin'])) header("location:login.php");
?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h1>Admin Dashboard</h1>
<a href="report.php" class="btn btn-success">Report Item</a>
<a href="index.php" class="btn btn-primary">View Items</a>
<a href="logout.php" class="btn btn-danger">Logout</a>
</div>