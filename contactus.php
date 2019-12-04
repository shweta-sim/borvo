<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>BorvoCare - Contact Us</title>

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
  <section class="banner banner-inner banner-contactus"> </section>
  <!-- Banner end --> 
  
  <!-- Contact start -->
  <section class="contactus p0">
    <!-- <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-purple font-bold text-center mb2 wow fadeInUp" data-wow-delay="100ms">Contact Us</h1>
        </div>
      </div>      
      </div> -->

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.10469323154!2d75.87890211580755!3d30.911697659771416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a833e7ec52165%3A0x9086be2c675762b8!2sSamrala+Chowk%2C+Shivajinagar%2C+Ludhiana%2C+Punjab+141008!5e0!3m2!1sen!2sin!4v1541068049819" width="100%" height="500" frameborder="0" allowfullscreen></iframe>
          </div>


      <div class="container">
      <div class="row wow fadeInUp" data-wow-delay="100ms">
        <div class="col-md-12">
          <div class="contact-form dark">
            <h2 class="text-white font-bold text-center mb3">Drop us a line or just say <span class="text-pink font-bold">Hello!</span></h2>
            <form action="thanks.php" method="post" name="form-contact" id="form-contact">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="cname" id="cname" class="form-control" placeholder="Name*">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="cemail" id="cemail" class="form-control" placeholder="Email Address*">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="cphone" id="cphone" class="form-control" placeholder="Phone No.">
              </div>
              <div class="form-group">
                <textarea name="cmessage" id="cmessage" rows="5" class="form-control" placeholder="Your Message*"></textarea>
              </div>
              <div class="text-center">
                <input type="submit" name="btn-contact" id="btn-contact" class="btn btn-pink" value="Send Message">
              </div>
            </form>
          </div>
        </div>
      </div>

      


    </div>
  </section>
  <!-- Contact ends --> 
  
  <!-- Features start -->
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center wow fadeInUp" data-wow-delay="200ms"><a href="mailto:care@borvocare.com">Email us</a> with any questions or inquiries or <span class="font-weight-bold text-pink">Call +91-91223-00044</span>.</p><br>

          <p class="text-center wow fadeInUp" data-wow-delay="200ms">We would be happy to answer your questions and set up a meeting with you.</p>
          <hr class="mtb60 wow fadeInUp" data-wow-delay="200ms">
        </div>
      </div>

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
        <div class="col-md-6 col-lg-3 mb6-sm">
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

<!-- Form Validation --> 
<script type="text/javascript">
$(document).ready(function() {

  $('form[id="form-contact"]').validate({
    rules: {
      cname: 'required',
      cemail: {
        required: true,
        email: true,
      },
      cmessage: 'required',
    },
    messages: {
      cname: 'This field is required',
      cemail: 'Enter a valid email',
      cphone: 'This field is required',
      cmessage: 'This field is required',
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script> 
<script type="text/javascript" src="plugins/validate/jquery.validate.min.js"></script> 

<!-- Parallax Effect -->
<script src="plugins/parallax/parallax.min.js"></script>

</body>
</html>
