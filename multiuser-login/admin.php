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



<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) &&  isset($_SESSION['id'])) { ?>
  
<!DOCTYPE html>
<html>
    
    <head>
        <title>multi-user login</title>
        <meta name="viewports" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  type="text/css" href="style.css">
        <link rel="stylesheet"  type="text/css" href="admin.css">
        <link rel="stylesheet"  type="text/css" href="upload.css">

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
crossorigin="anonymous">

</head>
<body>
 <!--header start-->
 <header class="header">
        <div class="nav-section">
           
                <div class="brand-and-navBtn">
                   <span class="brand-name">
                    Photo Addis
                   </span>
                    
                    <span class="navBtn flex">
                        <i class="fas fa-bars"></i>
                    </span>
                </div>
                  <!--navigation start-->
                
                    <nav class="nav">
                        <ul>
                          <li><a href="home.php" class="active">Home</a></li>
                          <li><a href="gallary.php">Gallary</a></li>
                          <li><a href="contact us.php">Contact us</a></li>
                          <li><a href="about us.php">About us</a></li>
                          <li><a href="service.php">Service</a></li>
                          <li><a href="index.php">Login</a></li>
                        </ul>
                    </nav>
                 <!--navigation end-->
        </div>
    </header>
    <!--header end-->
    <Section class="section-seven">
   <div class="col">
<div class="container d-flex justify-content-center align-items-center"
   style="min-height: 100vh">
   <?php if ($_SESSION['role']== 'admin') { ?>
   <!--for admin-->
   <div class="card" style="width: 18rem;">
  <img src="img/th.jpg"
   class="card-img-top" alt="admin image">
  <div class="card-body text-center">
    <h5 class="card-title">
      <?=$_SESSION['name']?></h5>
    <a href="index.php" class="btn btn-dark">logout</a>
  </div>
</div>
<div class="p-3">
  <?php
  include 'php/members.php';
  if (mysqli_num_rows($res) >0 ) {?>
  <h1 class="display-4 fs-1">members</h1>
  <table class="table" style="width: 32rem;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">user name</th>
        <th scope="col">role</th>
     </tr>
   </thead>
   <tbody>
    <?php
    $i=1;
    while ($rows=mysqli_fetch_assoc($res)) {?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']?></td>
      <td><?=$rows['username']?></td>
      <td><?=$rows['role']?></td>
    </tr>
    <?php $i++; } ?>
   </tbody>
  </table>
  <?php }?>

</div>
   <?php } else {?>
    <!-- FOR USERs-->
    <div class="card" style="width: 18rem;">
  <img src="img/th.jpg"
   class="card-img-top" alt="admin image">
  <div class="card-body text-center">
    <h5 class="card-title">
      <?=$_SESSION['name']?></h5>
    <a href="index.php" class="btn btn-dark">logout</a>
  </div>
</div>

    <?php  } ?>

<?php } else {
    header("Location: index.php");
}?>

<div class="upload" id ="content">
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
    </div>
    </section>
<!--footer start-->
<footer class="footer">
        <div class="footer-container container">
            <div>
                <h2>About Photo Addis</h2>
               <p>Internship student : Chrinet Terefe has been assigned to
                 municipality of Jimma from  March to July, 2014 to gain 
                 practical experience in the civil engineering activates.
                 Fortunately I was assigned in both the site works and office works .
                 this enables we to be came experience and introduce our self to the work environment. 
               </p>
          </div>
         
          <div>
             <h2>Free Subscription</h2>
               <p>In their stay, their communication skill with the staff personal,
                   work ethics and related issues, professional skills have been 
                   increasedand also change my  theoretical knowledge
                </p>
                 <div class="subs">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" placeholder="Email Address">
                    <button type="submit">Subscribe</button>
                </div>
            </div>
        </div>
        <p>&copy; copyright About Photo Addis, Simple And Good Template</p>
    </footer>
    <!--footer end-->
    </body>
</html>