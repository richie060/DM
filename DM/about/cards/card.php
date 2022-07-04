<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
	  <!-- NAVBAR -->
  <div>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#"> <span style="color: yellow;">Rea</span>sons</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../about.php">About Us</a></li>
        <li>
          <a href="#" class="desktop-item">Services</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Services</label>
          <ul class="drop-menu">
            <li><a href="../blogs/webdesign.php">Social media marketing</a></li>
            <li><a href="#">Search engine Optimization</a></li>
            <li><a href="#">Content marketing</a></li>
             <li><a href="#">Web Design</a></li>
            <li><a href="#">Digital marketing strategy</a></li>
          </ul>
        </li>
       
        <li><a href="../contactus.php">Contact Us</a></li>
        <li><a href="../../Admin/login.php">Admin</a></li>

      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</div>

<!-- //NAVBAR -->
<div class="bodsizing">
  
</div>
<!--grid -->
<div class="grid">
  <div class="grid-item">
    <div class="card1 about">
    	<div class="card1">
				<img src="../../images/content.jpeg" class="card1-img">
				<div class="card1-content">
					<h7 class="card1-header">Landing pages<br></h7>
					<p class="card1-text"> Lorem in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt 
						
					</p>
					<button class="card1-btn">Visit<span> &rarr;</span></button>
				</div>
			</div>
    </div>
    <div class="card1 about">
    	<div class="card1">
				<img src="../../images/content.jpeg" class="card1-img">
				<div class="card1-content">
					<h7 class="card1-header"> The digital express</h7>
					<p class="card1-text"> Lorem in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt 
						
					</p>
					<button class="card1-btn">Visit<span> &rarr;</span></button>
				</div>
			</div>
    </div>
    <div class="card1 about">
    	<div class="card1">
				<img src="../../images/content.jpeg" class="card1-img">
				<div class="card1-content">
					<h7 class="card1-header"> Web Planning </h7>
					<p class="card1-text"> Lorem in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt 
						
					</p>
					<button class="card1-btn">Visit<span> &rarr;</span></button>
				</div>
			</div>
    </div>
  </div>
</div>

<!-- newsletter -->
<form action="/action_page.php">
  <div class="container"><h2>Subscribe to our newsletter</h2>
   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="container" style="background-color: white;">
  <input type="text" name="Name" placeholder="name" required>
  <input type="text" name="mail" placeholder="Email address" required>
  <label>
    <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
  </label>
</div>
<div class="container">
  <input type="submit" value="Subscribe">
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
         <a href="about/cards/php.html"><li>Blogs</li></a>
         <a href="#"><li>Privacy plolicy</li></a>
       </ul>
     </div>
     <div class="footer-section contact-form" >
       <h2>Contact us</h2>
       <br>
       <form action="index.html" method="post">
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
