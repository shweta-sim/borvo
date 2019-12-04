<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>BorvoCare - Plans - Social</title>

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
  <section class="banner banner-inner banner-social"> </section>
  <!-- Banner end --> 
  
  <!-- Section start -->
  <section class="plans-inner">
    <div class="container">
      <div class="row">        
        <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms">
          <div class="icon-circle social"><img src="imgs/icon-social-white.svg"></div>
          <h1 class="text-social font-bold mb3">Social</h1>
            <p class="mb2">Research shows best way to keep the brain sharp is to socialize. As simple as it seems it is very effective in retaining the youthfulness. <br>
          That's why we provide:</p>
        <ul class="list social">
          <li>Invites to social events</li>
          <li>Birthday and anniversary</li>
          <li>Movie tickets celebrations</li>
          <li>Eat-out nights</li>
          <li>Discounts with rejuvenation trips</li>
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
      <!-- <li class="social wow fadeInUp" data-wow-delay="300ms"> <a href="plan-social.php"><i><img src="imgs/icon-social-white.svg" /></i>
        <h2>Social</h2></a>
      </li> -->
      <li class="mind wow fadeInUp" data-wow-delay="400ms"> <a href="plan-mind.php"><i><img src="imgs/icon-mind-white.svg" /></i>
        <h2>Mind</h2></a>
      </li>
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
