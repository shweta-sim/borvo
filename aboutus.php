<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>BorvoCare - About Us</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/png" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css"/>
</head>

<body>

<!-- ########## Header start ########## -->
<?php include("header.php"); ?>
<!-- ########## Header end ########## --> 

<!-- ########## Main start ########## -->
<div class="main"> 
  <!-- Banner start -->
  <section class="banner banner-inner banner-aboutus"> </section>
  <!-- Banner end --> 
  
  <!-- About start -->
  <section>
    <div class="container">
      <div class="row mb6">
        <div class="col-md-12">
          <h1 class="text-purple font-bold text-center mb2 wow fadeInUp" data-wow-delay="100ms">About Us</h1>
          <h1 class="slogan text-pink font-bold text-center wow fadeInUp" data-wow-delay="200ms">"The best way to live is by embracing a healthy life." </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-center mb6 wow fadeInUp" data-wow-delay="100ms">We at <span class="text-purple font-weight-bold">Borvo</span> <span class="text-pink font-weight-bold">Care</span> take your well-being and that of your loved ones seriously and continuously work towards 
            providing <span class="text-pink">more value to you</span>. We know it is difficult to find time to take care of yourself in your busy schedule, that's why we design <span class="text-pink">personalized yearly package</span> for you and your family to meet your specific wellness needs. Our total wellness plan focuses on <span class="text-pink">improving your wellbeing and happiness</span> and we provide most of these services at your doorstep, so you can save time to do things that you enjoy doing. At Borvo Care, we strive to provide you with the best experience possible and go the extra mile to <span class="text-pink">help you achieve your goals</span> and have fun while doing so.</p>
          <p class="text-center wow fadeInUp" data-wow-delay="100ms">We at <span class="text-purple font-weight-bold">Borvo</span> <span class="text-pink font-weight-bold">Care</span> aggregate the services of best service providers in the health and wellness industry and make the best buffet for you. We try to inculcate a proactiveness in you to be more responsible for your <span class="text-lifestyle font-weight-bold">lifestyle</span>, <span class="text-social font-weight-bold">social</span>, <span class="text-mind font-weight-bold">mind</span>, <span class="text-body font-weight-bold">body</span> and <span class="text-health font-weight-bold">health</span> needs. Also, we value your time and comfort and hence try to deliver maximum services at your place. Also, our systematic line of action streamlines the annual process for you.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- About ends -->
  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <hr class="m0 wow fadeInUp" data-wow-delay="100ms">
      </div>
    </div>
  </div>
  
  <!-- Features start -->
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb6-md">
          <div class="feature-bl wow fadeInUp" data-wow-delay="100ms"> <i><img src="imgs/icon-feature1-pink.svg" /></i>
            <h5>Personalized Service</h5>
            <p>Our services are highly customizable to suite the needs of your family members</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb6-md">
          <div class="feature-bl wow fadeInUp" data-wow-delay="200ms"> <i><img src="imgs/icon-feature2-pink.svg" /></i>
            <h5>Care with love</h5>
            <p>We are passionate about giving the care that your family members deserve</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb6-md">
          <div class="feature-bl wow fadeInUp" data-wow-delay="300ms"> <i><img src="imgs/icon-feature3-pink.svg" /></i>
            <h5>Security</h5>
            <p>Your security is important to us, thats why all our staff is police verified</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature-bl wow fadeInUp" data-wow-delay="400ms"> <i><img src="imgs/icon-feature4-pink.svg" /></i>
            <h5>Privacy</h5>
            <p>We follow best of privacy and security guidelines to protect you online</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features end --> 
</div>
<!-- ########## Main end ########## --> 

<!-- ########## Footer start ########## -->
<?php include("footer.php"); ?>
<!-- ########## Footer end ########## --> 

<!-- Bootstrap JavaScript --> 
<script src="plugins/jquery/jquery-3.3.1.min.js"></script> 
<script src="plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- Animate Script --> 
<script type="text/javascript" src="plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
</script> 

<!-- Menu JavaScript --> 
<script src="plugins/menu/menu.js"></script> 

<!-- Parallax Effect -->
<script src="plugins/parallax/parallax.min.js"></script>

<!-- Go To Top -->
<script type="text/javascript">
  var offset = 200;
    var duration = 500;
    $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
        $('.back-to-top').fadeIn(400);
      } else {
        $('.back-to-top').fadeOut(400);
      }
    });
    $('.back-to-top').click(function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, 600);
      return false;
    })
</script>

</body>
</html>
