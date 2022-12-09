<!DOCTYPE html>
<html>
    <head>
        <title>image slider</title>
        <meta name="viewports" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  type="text/css" href="image-slider.css">
        <link rel="stylesheet"  type="text/css" href="style.css">

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
                          <li><a href="home.php">Home</a></li>
                          <li><a href="gallary.php">Gallary</a></li>
                          <li><a href="contact us.php">Contact us</a></li>
                          <li><a href="about us.php">About us</a></li>
                          <li><a href="service.php">Service</a></li>
                          <li><a href="login.php">Login</a></li>
                        </ul>
                    
                
                    </nav>
                 <!--navigation end-->
                
         

        </div>
       
      
   
    </header>
    <!--header end-->
        
    
     <!--image slider start-->
     
    
       <section class="slider"> 
          <div class="slides">
          
            <!--radio button-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <input type="radio" name="radio-btn" id="radio6">
            <input type="radio" name="radio-btn" id="radio7">
            <input type="radio" name="radio-btn" id="radio8">
            <input type="radio" name="radio-btn" id="radio9">
            <input type="radio" name="radio-btn" id="radio10">

         <!--radio button-->
         <div class="slide first">
          <img src="images\logo.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\ima-0.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\che.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\insta-3.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\insta-4.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\ima-12.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\ima-9.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\ima-8.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\ima-7.jpg" alt="">
         </div>
         <div class="slide ">
          <img src="images\ima-6.jpg" alt="">
         </div>
         <!--automatic navigation start-->
         <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
          <div class="auto-btn6"></div>
          <div class="auto-btn7"></div>
          <div class="auto-btn8"></div>
          <div class="auto-btn9"></div>
          <div class="auto-btn10"></div>
         </div>
         <!--automatic navigation end-->
     
          <!--manual navigation start-->
          <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
            <label for="radio6" class="manual-btn"></label>
            <label for="radio7" class="manual-btn"></label>
            <label for="radio8" class="manual-btn"></label>
            <label for="radio9" class="manual-btn"></label>
            <label for="radio10" class="manual-btn"></label>
            
          </div>
        </div>
          <script type="text/javascript">
              var counter=1;
                   setInterval(function(){
                   document.getElementById('radio'+ counter).checked=true;
                   counter++;
                   if (counter > 4) {
                    count=1;
                    
                   }
                      },5000
                   );
            </script>
        

                <div>
                       <p style="text-align: center;">
                        <a class="button" href="bookNow.php">book now !!</a>
                       </p>
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
    


    </div>
     
     </body>

     </html>