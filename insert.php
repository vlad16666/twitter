<?php 
$connect = mysqli_connect("127.0.0.1","root","","twitter"); 
$zapros_vstavit = "INSERT INTO tweets (author,post,img) VALUES(' " . $_GET["author"] . "', '" . $_GET["tweet"] . "', '" . $_GET["img"] . "')";
$zapros_mrr = "INSERT INTO mrr (names,channel,ic) VALUES(' " . $_GET["names"] . "', '" . $_GET["channel"] . "', '" . $_GET["ic"] . "')";
$zapros_new = mysqli_query($connect,$zapros_vstavit);
$zapros_read = mysqli_query($connect,$zapros_mrr);
header("Location: index.php")
 ?>