<?php

$db=mysqli_connect("localhost","root","","photos");
$sql="SELECT * FROM `images`";
$result=mysqli_query($db,$sql);
while ($row=mysqli_fetch_array($result)) {
   echo "<div id='img_div'>";
   echo "<img src='images/".$row['image']. "'>";
   echo "<p>".$row['text']. "</p>";
   echo "</div>";
}