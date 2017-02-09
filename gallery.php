<?php

  require_once('admin/phpscripts/connect.php');
  $sqlCompile = "SELECT img_id, img_title, img_src, img_thumb, img_mobile FROM tbl_imgs";


  $initialRun = mysqli_query($link, $sqlCompile);


   ?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Chantry Island</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/app.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Lora:400,700" rel="stylesheet">
</head>
<body>

<h1 class="hide">Chantry Island</h1>
<header id="topNav">
  <section class="row">
    <nav class="small-12 large-8 columns large-push-2 end">
      <h2 class="hide">Main Navigation</h2>
      <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="large">
        <button class="menu-icon float-right" type="button" data-toggle> </button>
      </div>
      <div id="main-menu">
        <div id="" class="small-8 small-centered columns"> <a href="index.html"><img src="images/logo.svg" alt="logo" id="logo"></a> </div>
        <ul id="menuLinks">
          <li><a href="about.html">About</a></li>
          <li><a href="newsandevents.html">News & Events</a></li>
          <li><a href="booking.html">Booking</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="donate.html">Donations</a></li>
        </ul>
      </div>
    </nav>
    <div class="small-12 large-1 large-offset-1 columns large-pull-10"> <a href="index.html"><img src="images/logo.svg" alt="logo" id="logoDesktop"></a> </div>
  </section>
</header>
<section class="gallery">
  <section class="row">
    <div class="large-10 large-centered columns">
      <h2 class="topHeader text-center">Gallery</h2>
    </div>
  </section>


  <?php 
  
  
  while ($row = mysqli_fetch_array($initialRun)){
    echo "<div id='mainImg-{$row['img_id']}' class='full-img-cont hide'>";
    echo "<img class='closer' id='closer-{$row['img_id']}' src='images/closer.png'>";
    //will make prev and next into SVGs later on
    echo "<img class='prev arrow' id='prev-{$row['img_id']}' src='images/left-arrow.png'>";
    echo "<img class='next arrow' id='next-{$row['img_id']}' src='images/right-arrow.png'>";
    // removed src='images/gallery/{$row['img_src']}' 
    echo "<img data-interchange='[images/gallery/{$row['img_mobile']}, small], [images/gallery/{$row['img_src']}, large]'  class='full-gal-img' alt='{$row['img_title']}'>";
    echo "</div>";  
    echo "<section class='row small-12 medium-4 large-2' id='workGallery'>";  
    echo "<img class='galImg' id='{$row['img_id']}'src='images/gallery/{$row['img_thumb']}' alt='{$row['img_title']}'>";
    echo "</section>";  
  }  
   ?>



  <section class="row">
    <div class="small-4 small-centered large-2 large-centered columns" id="arrow"> <a href="#"><img src="images/arrow.svg" alt="Up Arrow"></a> </div>
  </section>
  <section class="row">
    <div class="large-12 large-centered columns" id="backToTop"> <a href="#">Back To Top</a> </div>
  </section>
</section>
<footer id="footerCon">
  <section class="row">
    <div class="large-4 columns">
      <h4>Sitemap</h4>
      <ul id="">
        <li><a href="about.html">About</a></li>
        <li><a href="newsandevents.html">News & Events</a></li>
        <li><a href="booking.html">Booking</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="donate.html">Donations</a></li>
      </ul>
    </div>
    <div class="large-4 columns">
      <h4>Contact Us</h4>
      <ul id="">
        <li>Call: 519-797-5862</li>
        <li>Toll Free: 1-866-797-5862</li>
        <li>Marine Heritage Society</li>
        <li>Box 421</li>
        <li>Southampton, Ontario</li>
        <li>Canada, N0H 2L0</li>
      </ul>
    </div>
    <div class="large-4 columns">
      <h4>Other Attractions</h4>
      <ul id="">
        <li><a href="index.php" id="">Saugeen Shores</a></li>
        <li><a href="index.php#page2" id="">Bruce County Museum & Cultural Centre</a></li>
        <li><a href="work.html" id="">Bruce Coast</a></li>
        <li><a href="index.php#page3" id="">Lighthouse Tour</a></li>
        <li><a href="index.php#page3" id="">Explore the Bruce</a></li>
        <li><a href="index.php#page3" id="">Southampton Tennis Club</a></li>
      </ul>
    </div>
  </section>
</footer>
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html
