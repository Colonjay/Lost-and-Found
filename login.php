<?php
include "db.php";
if(isset($_POST['login'])){
$u=$_POST['username'];
$p=$_POST['password'];
$q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p'");
if(mysqli_num_rows($q)>0){
$_SESSION['admin']=$u;
header("location:dashboard.php");
}
}
?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="center-box">
<form method="POST">
<h2>Admin Login</h2>
<input name="username" class="form-control mb-3">
<input type="password" name="password" class="form-control mb-3">
<button name="login" class="btn btn-primary w-100">Login</button>
</form>
</div>