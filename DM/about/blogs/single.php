
<?php
 include('topics.php');
 include('post.php'); 

 
$post = array();
$postTitle = 'Recent post';


if (isset($_POST['search-term'])) {
	$postTitle ="You searched for '"  . $_POST['search-term'] . " ' ";
	$post = searchPost($_POST['search-term']);
}else{
	$post = getPublishedPost();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Blogs</title>
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
        <li>
          <a href="#" class="desktop-item">Services</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Services</label>
          <ul class="drop-menu">
            <li><a href="blogs/webdesign.php">Social media marketing</a></li>
            <li><a href="#">Search engine Optimization</a></li>
            <li><a href="#">Content marketing</a></li>
             <li><a href="#">Web Design</a></li>
            <li><a href="#">Digital marketing strategy</a></li>
          </ul>
        </li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="about/about.php">Blogs</a></li>
         <li><a href="../Admin/login.php">Admin</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</div>
<div class="bodsizing">
</div>

<!-- Main content -->
	<div class="content clearfix">
		<div class="main-content single">
			<h2 class="post-title">This is the title of the post</h2>
      <div class="post-content">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ratione  dolor sit amet consectetur adipisicing elit. Ullam, quisquam! Fuga ration consequatur iusto laboriosam necessitatibus</p>

      </div>
		</div>

		<div class="sidebar single">

    <div class="section popular">
        <h2 class="section-title">Popular </h2>
        <div class="post">
          <img src="../../images/about.jpeg" alt="">
           <a href="" class="title">How to overcome your fears</a>
        </div>
        <div class="post">
          <img src="../../images/about.jpeg" alt="">
           <a href="" class="title">How to overcome your fears</a>
        </div>
        <div class="post">
          <img src="../../images/about.jpeg" alt="">
           <a href="" class="title">How to overcome your </a>
        </div>
        <div class="post">
          <img src="../../images/about.jpeg" alt="">
           <a href="" class="title">How to overcome your </a>
        </div>
        <div class="post">
          <img src="../../images/about.jpeg" alt="">
           <a href="" class="title">How to overcome your </a>
        </div>
       

    </div>
    
<!-- //Main content -->
			<div class="section topics">
				<h2 class="section-title single" >Topics</h2>
				     <ul>
					    <?php foreach ($topics as $key => $topic): ?>
						  <li><a href="#"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach ?>
				    </ul>
			</div>
		</div>
	</div>



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
         <a href="contactus.php"><li>Contact Us</li></a>
         <a href="blog.php"><li>Blogs</li></a>
         <a href="#"><li>Privacy plolicy</li></a>
       </ul>
     </div>
     <div class="footer-section contact-form" >
       <h2>Contact us</h2>
       <br>
       <form action="blog.php" method="post">
         <input type="email" name="email" class="text-input contact-input" style="width: 100%;" placeholder="Your email address.....">

         <textarea name="message" class="text-input contact-input" style="width: 100%;"  placeholder="Type your message here....."></textarea>

         <button type="submit" name="sendmessage" class="btn btn-big contact-btn">
          <i class="fas fa-envelope"></i> Send</button>
       </form>
     </div>
  </div>
    <div class="footer-bottom">&copy; Reasons | All rights reserved</div>

</div>


</body>
</html>