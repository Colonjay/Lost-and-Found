<?php include "db.php"; ?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<h1 class="text-center mt-3">Lost & Found Items</h1>
<input id="search" onkeyup="liveSearch()" class="form-control w-50 m-auto mt-3" placeholder="Search">
<div id="items" class="slider"></div>
<script>
function liveSearch(){
let s=search.value
fetch("search.php?s="+s)
.then(res=>res.text())
.then(data=>items.innerHTML=data)
}
</script>