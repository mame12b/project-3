<?php
$msg= "";
//if upload button is pressed
if(isset($_POST['upload'])) {
// the path to store uploaded image 
$target="images/".basename($_FILES['image']['name']);
//connect to the database
$db=mysqli_connect("localhost","root","","photos");
//get all the submitted data from the the form 
$image=$_FILES['image']['name']; 
$text=$_POST['text'];
// stores the submitted data into the database table:image
$sql="INSERT INTO images (image, text) VALUES('$image','$text')";
mysqli_query($db, $sql);
// now lets move the uploaded images into the folder:images
if (move_uploaded_file($_FILES['image']['name'],$target)) {
    $msg="image uploaded seccussfully";

}else {
    $msg="there was a problem uploading image";
}
}

?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>PHOTO ADDIS </title>
        <meta name="viewports" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  type="text/css" href="upload.css">

</head>
<body>
    <div id ="content">
        <?php

$db=mysqli_connect("localhost","root","","photos");
$sql="SELECT * FROM `images`";
$result=mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
   echo "<div id='img_div'>";
   echo "<img src='images/".$row['image']."' >";
   echo "<p>".$row['text']."</p>";
   echo "</div>";
}
        ?>
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div> 
            <div>
                <textarea name="text"  cols="40" rows="4" placeholder="say something about this image..."></textarea>
            </div>
            <div>
                <input type="submit" name="upload" value="upload_images">
            </div>

    </div>
    
</body>
</html>