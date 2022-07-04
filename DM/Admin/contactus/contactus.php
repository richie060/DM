<?php include ('server.php'); ?>
<?php include ('../Admin/db.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lets talk over coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- NAVBAR -->
  <div>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.html"> <span style="color: yellow;">Dig</span>ital</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="../index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li>
          <a href="#" class="desktop-item">Services</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Services</label>
          <ul class="drop-menu">
            <li><a href="about/blogs/webdesign.php">Social media marketing</a></li>
            <li><a href="#">Search engine Optimization</a></li>
            <li><a href="#">Content marketing</a></li>
             <li><a href="#">Web Design</a></li>
            <li><a href="#">Digital marketing strategy</a></li>
          </ul>
        </li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="../Admin/login.php">Admin</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</div>

<!-- //NAVBAR -->
<br>
<br>

     <!--  <div class="contact-header">
        <h6>SWING BY</h6>
        <h2>Let's talk over coffee</h2>
      </div>
 -->    <!-- <br><br>
    <br><br> -->

    <!-- <section >
     <div class="container">
        <div class="cards">
            <i></i>
            <br>
            <h3>Office Address</h3><br>
            <p>Nakuru</p>
        </div>
        <div class="cards">
            <i></i>
            <br>
            <h3>Contact Us</h3><br>
            <a href="">www.reasons.com</a><br><br>
            <a href="tel:0720936863">Phone</a>

        </div>
        <div class="cards">
            <i></i>
            <h3>House Operations</h3><br>
            <p>Everyday 24/7</p>
        </div>

        <div class="social-media">
            <a href=""><img src="/IMAGES/iconfinder_1_Facebook2_colored_svg_5296500.png" alt=""></a>
            <a href=""><img src="/IMAGES/twitter.webp" alt=""></a>
            <a href=""><img src="/IMAGES/whatsapp.webp" alt=""></a>
        </div>
     </div>
    </section>
 -->

    <form action="contactus.php" method="post">
        <div class="container">
            <h4 style="color:#000; font-size: 20px;" >Book an appointment with us</h4><br>
           <div class="gridmsg" style="width:60%; float: right;">
            <input type="text" name="name" placeholder="Name">
             <input type="email" name="email" placeholder="Email">
               <input type="number" name="phoneno" placeholder="Phone number">
               <input type="text" name="companyname" placeholder="Company Name">
               <input type="text" name="businessname" placeholder="Business Name">
               <input type="url" name="link" placeholder="Company Website">
               <textarea name="msg"  cols="50" rows="7" placeholder="Message"></textarea>
                <button class="btn btn-success" name="booking" type="submit" style="margin: 10px auto; ">Submit</button>
          </div>
        </div>
    </form>

    <!-- footer -->
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <h1 class="logo-text"><span>Rea</span>sons</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt int occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <div class="contact">
        <span><i class="fas fa-phone"></i>&nbsp;071840400</span>
        <span><i class="fas fa-envelope"></i>&nbsp;reasonsdigital@gmail.com</span>

      </div>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
     <div class="footer-section links">
       <h2>Quick links</h2>
       <br>
       <ul>
         <a href="#"><li>Home</li></a>
         <a href="#"><li>Services</li></a>
         <a href="#"><li>Contact Us</li></a>
         <a href="../../about/blogs/blog.php"><li>Blogs</li></a>
         <a href="#"><li>Privacy plolicy</li></a>
       </ul>
     </div>
     <div class="footer-section contact-form" >
       <h2>Contact us</h2>
       <br>
       <form action="contactus.php" method="post">
         <input type="email" name="email" class="text-input contact-input" style="width: 100%;" placeholder="Your email address.....">
         <textarea name="message" class="text-input contact-input" style="width: 100%;"  placeholder="Type your message here....."></textarea>
         <button type="submit" class="btn btn-big contact-btn">
          <i class="fas fa-envelope"></i> Send</button>
       </form>
     </div>
  </div>
    <div class="footer-bottom">&copy; Reasons | All rights reserved</div>
</div>
</body>
</html>