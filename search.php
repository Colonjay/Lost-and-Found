<?php
include "db.php";
$search=$_GET['s'];
$q=mysqli_query($conn,"SELECT * FROM items WHERE title LIKE '%$search%'");
while($r=mysqli_fetch_assoc($q)){
?>
<div class="card item">
<img src="upload/<?php echo $r['image']?>" height="120">
<h6><?php echo $r['title']?></h6>
</div>
<?php } ?>