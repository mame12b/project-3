<?php
session_start();


if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE email ='$email' AND  password = '$password'");
    if(mysqli_num_query($query)==0){
        echo "<script>alert('you loged seccussfully'); document.location.href='login.php'</script>/n";

    }else {
        $row=mysqli_fetch_assoc($query);
        $_SESSION['email']     =$row['email'];
        $_SESSION['level']      =$row['level'];

     
     if ($row['level']=="admin") {
        echo "<script>alert('welcome to Admin page'); document.location.href='admin/admin.php'</script>/n";

     }elseif ($row['level']=="PhotoEditor") {
        echo "<script>alert('welcome to Photo editor page'); document.location.href='PhotoEditor/photoEditor.php'</script>/n";

        
     }elseif ($row['level']=="videoEditor") {
        echo "<script>alert('welcome to videoEditor page'); document.location.href='videoEditor/videoEditor.php'</script>/n";

     }elseif ($row['level']=="GraphicsDesigner") {
        echo "<script>alert('welcome to GraphicsDesigner page'); document.location.href='GraphicsDesigner/GraphicsDesigner.php'</script>/n";
     }else {
        echo "<script>alert('login gagel'); document.location.href='home.php'</script>/n";
     }
    }
}
else {
   echo "<div class='form'>
         <h3>Incorrect Username/password.</h3><br/>
         <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
         </div>";
}
?>