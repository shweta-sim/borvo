<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>BorvoCare - Plans - Mind</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/png" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css"/>
</head>

<body class="inner-page">

<!-- ########## Header start ########## -->
<?php include("header.php"); ?>
<!-- ########## Header end ########## --> 

<!-- ########## Main start ########## -->
<div class="main"> 
  <!-- Banner start -->
  <section class="banner banner-inner banner-mind"> </section>
  <!-- Banner end --> 
  
  <!-- Section start -->
  <section class="plans-inner">
    <div class="container">
      <div class="row">        
        <div class="col-md-10 wow fadeInUp" data-wow-delay="200ms">
          <div class="icon-circle mind"><img src="imgs/icon-mind-white.svg"></div>
          <h1 class="text-mind font-bold mb3">Mind</h1>
            <p class="mb2">With so many distractions and information overflow, our mind becomes tired and need help to relax. Our aromatherapist, meditation instructor, reiki gurus and massagist can help you relax and be happy. <br>
          You get:</p>
        <ul class="list mind">
          <li>Mind assessment </li>
          <li>Good sleep techniques</li>
          <li>Stress management program </li>
          <li>Counseling session </li>
          <li>Meditation </li>
          <li>Massages</li>
        </ul>
        </div>

      </div>
      
    </div>
  </section>
  <!-- Section ends -->
  
  <!-- Plans List start -->
  <div class="plans-list">
    <ul>
      <li class="lifestyle wow fadeInUp" data-wow-delay="200ms"> <a href="plan-lifestyle.php"><i><img src="imgs/icon-lifestyle-white.svg" /></i>
        <h2>Lifestyle</h2></a>
      </li>
      <li class="social wow fadeInUp" data-wow-delay="300ms"> <a href="plan-social.php"><i><img src="imgs/icon-social-white.svg" /></i>
        <h2>Social</h2></a>
      </li>
      <!-- <li class="mind wow fadeInUp" data-wow-delay="400ms"> <a href="plan-mind.php"><i><img src="imgs/icon-mind-white.svg" /></i>
        <h2>Mind</h2></a>
      </li> -->
      <li class="body wow fadeInUp" data-wow-delay="500ms"> <a href="plan-body.php"><i><img src="imgs/icon-body-white.svg" /></i>
        <h2>Body</h2></a>
      </li>
      <li class="health wow fadeInUp" data-wow-delay="600ms"><a href="plan-health.php"> <i><img src="imgs/icon-health-white.svg" /></i>
        <h2>Health</h2></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!-- Plans List end -->


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
