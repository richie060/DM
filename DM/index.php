<?php include ('Admin/server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
        <li><a href="index.php">Home</a></li>
        
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
        <li><a href="about/contactus/contactus.php">Contact Us</a></li>
        <li><a href="about/blogs/blog.php">Blogs</a></li>
         <li><a href="Admin/login.php">Admin</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</div>

<!-- //NAVBAR -->

<!-- LOADER -->
<!-- <div class="loader-contaniner">
      <div class="loader">
    </div>
          <h2>Loading...</h2>

    </div> -->
    <!--// LOADER -->
<div class="bodsizing">
  
</div>
<div class="bodtitle">
  <h >RESULTS<span>DRIVEN</span></h>
  <h4 style="font-size: 20px; padding: 10px;" >DIGITAL MARKETING AGENCY</h4>
  <p style=" color=red;">Reasons Internet Marketing Agency is a full-service digital marketing agency.<br>Attract, Impress,
  <br>
  and Convert more leads online and get results with Reasons <br></p>
  <div class="btnset">
    <button class="btn1"><span>GET MY FREE PROPOSAL</button>
    </div>
</div>
<div class="whatwedo" style=" padding-top: 30px; ">
  <h style="font-size: 50px; padding-top: 30px; font-weight: 1000;">What we Do</h>
  <p style="font-size: 20px; text-align: center;" >We are a Creative Digital Marketing Agency based in kenya with a clear focus on attracting & converting leads &<br>
  prospects to clients.<br>
Our team of proffessional about digital, but more to see your business succeed.</p>
</div>
<div class="services-wrapper">
    <div class="wrapper">
      <div class="box">
        <div class="front-face">
          <div class="icon">
<i class="fas fa-code"></i></div>
<span>Content marketing</span>
        </div>
<div class="back-face">
          <span>Content marketing</span>
          <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.</p>
</div>
</div>
     <div class="box">
        <div class="front-face">
          <div class="icon">
<i class="fas fa-code"></i></div>
<span>Search engine Optimization</span>
        </div>
<div class="back-face">
          <span>Search engine Optimization</span>
          <p>
Through careful keyword
research and white hat practices, we can help you achieve high rankings in the major search engines.</p>
</div>
</div>
<div class="box">
        <div class="front-face">
          <div class="icon">
<i class="fas fa-code"></i></div>
<span>Account management</span>
        </div>
<div class="back-face">
          <span>Account Management</span>
          <p>
Account Management responsibilities include also answer client queries and identify new business opportunities among existing customer</p>
</div>
</div>
   <div class="box">
        <div class="front-face">
          <div class="icon">
<i class="fas fa-code"></i></div>
<span>Web Design</span>
        </div>
<div class="back-face">
          <span>Web Design</span>
          <p>
With millions of websites on the internet you want to be sure your website stands out, represents you well, and most importantly, helps your organization grow.</p>
</div>
</div>

<div class="box">
        <div class="front-face">
          <div class="icon">
<i class="fas fa-chart-line"></i></div>
<span>Advertising</span>
        </div>
<div class="back-face">
          <span>Advertising</span>
          <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.</p>
</div>
</div>
<div class="box">
        <div class="front-face">
          <div class="icon">
<i class="fas fa-rocket"></i></div>
<span>Planning</span>
        </div>
<div class="back-face">
          <span>Planning</span>
          <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.</p>
</div>
</div>
</div>
</div>
<!-- newsletter -->
<form action="index.php" method="post">
  <div class="container"><h2>Subscribe to our newsletter</h2>
   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="container" style="background-color: white;">
  <input type="text" name="name" placeholder="name" required>
  <input type="text" name="mail" placeholder="Email address" required>
  <label>
    <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
  </label>
</div>
<div class="container">
  <input type="submit" value="subscribe" name="subscribe">
</div>
</form>

<!-- footer -->
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <h1 class="logo-text"><span>Dig</span>ital</h1>
        <p>Reasons Internet Marketing Agency is a full-service digital marketing agency. Attract, Impress, and Convert more leads online and get results with Reasons.
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
         <a href="index.php"><li>Home</li></a>
         <a href="#"><li>Services</li></a>
         <a href="about/contactus/contactus.php"><li>Contact Us</li></a>
         <a href="about/blog/blog.php"><li>Blogs</li></a>
         <a href="#"><li>Privacy plolicy</li></a>
       </ul>
     </div>
     <div class="footer-section contact-form" >
       <h2>Contact us</h2>
       <br>
       <form action="index.php" method="post">
         <input type="email" name="email" class="text-input contact-input" style="width: 100%;" placeholder="Your email address.....">

         <textarea name="message" class="text-input contact-input" style="width: 100%;"  placeholder="Type your message here....."></textarea>

         <button type="submit" name="sendmessage" class="btn btn-big contact-btn">
          <i class="fas fa-envelope"></i> Send</button>
       </form>
     </div>
  </div>
    <div class="footer-bottom">&copy; Reasons | All rights reserved</div>

</div>


<body>
</html>
