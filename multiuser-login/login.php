<!DOCTYPE html>
<html>
    <head>photo ADDIS</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css ">   
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="row justify-content-between align-item-ceter">
                     <div class="brand-name">
                        <a href="home.php">Photo Addis</a>   
                     </div>
                      <nav class="nav">
                         <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="gallary.php">Gallary</a></li>
                            <li><a href="service.php">Service</a></li>
                            <li><a href="index.php" class="active">Login</a></li>
                            <li><a href="Registeration.php">Registeration</a></li>
                            <li><a href="home.php">Logout</a></li>
                         </ul>   
                      </nav>
                </div>
            </div>
        </header>
        <?php
       require ('database.php');
        ?>  
    <form class="form" method="post" name="Login">
    <h1 class="form-box">Sign In To Your Account</h1>
    <div class="input-field">
      <input type="text" class="login-input" name="email" placeholder="email" autofocus="true"/>
      </div>
      <div class="input-field">
      <input type="password" class="login-input" name="password" placeholder="Password"/>
    </div>
   <!-- Select user type: <select name="usertype">
        <option value="Admin">Admin</option>
        <option value="photo Editor">Photo Editor</option>
        <option value="video Editor">Video Editor</option>
        <option value="Graphics Designer">Graphics Designer</option>
    </select> -->
    <div class="input">
      <input type="submit" value="Login" name="submit" class="login-button"/>
</div> 
 <div class="forgot">
    <a href="forgot.php">Forgot Password</a>
 </div>
</form>
<!--home section start-->
<!--footer start-->
<footer class="footer">
    <div class="footer-container container">
        <div>
            <h2>About Photo Addis</h2>
              <p>This business is a family business which is started by my father photo Alemayehu since 1971 G.C.
                And now the name change into Photo Addis Jimma comes with a new digital technology
                Starting 0n 1995 G.c till now it gives a different types of photographic services and printing Banner.
              </p>
      </div>
      <div>
         <h2>Free Subscription</h2>
            <p> In their stay, their communication skill with the staff personal,
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