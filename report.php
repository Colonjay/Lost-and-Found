<?php include "db.php";
if(isset($_POST['save'])){
$t=$_POST['title'];
$d=$_POST['desc'];
$type=$_POST['type'];
$img=$_FILES['img']['name'];
$tmp=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp,"upload/".$img);
mysqli_query($conn,"INSERT INTO items(title,description,image,type)
VALUES('$t','$d','$img','$type')");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Report Item</h2>
<form method="POST" enctype="multipart/form-data">
<input name="title" class="form-control mb-3" placeholder="Title">
<textarea name="desc" class="form-control mb-3"></textarea>
<select name="type" class="form-control mb-3">
<option value="lost">Lost</option>
<option value="found">Found</option>
</select>
<input type="file" name="img" class="form-control mb-3">
<button name="save" class="btn btn-success">Submit</button>
</form>
</div>