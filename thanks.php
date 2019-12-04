<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>BorvoCare - Thanks</title>

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
  
  <!-- Thanks start -->
  
  <?php 
  if(isset($_POST['btn-book']))
  {
    //Recipient's email addreess
    $to="care@borvocare.com";        
    
    //Change subject field.
    $subject="Appointment - Borvo Care";
    $bname=$_POST['bname'];
    $bemail=$_POST['bemail'];
    $bphone=$_POST['bphone'];  
	  $bmessage=$_POST['bmessage'];     

    //Sender's email addreess
    $from=$_POST['bemail'];
              
    //Email Body
    $message = '<html><body>';
    $message .= '<table cellpadding="10" cellspacing="0" border="0" width="100%">';
    $message .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $message .= "<tr style='background: #f6f6f6;'><td width='30%'><strong>Name:</strong> </td><td width='70%'>" . $bname . "</td></tr>";      
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $bemail . "</td></tr>";
    $message .= "<tr style='background: #f6f6f6;'><td><strong>Phone: </strong> </td><td>" . $bphone . "</td></tr>";
	  $message .= "<tr><td><strong>Message: </strong> </td><td>" . $bmessage . "</td></tr>";     
    $message .= "</table>";
    $message .= "</body></html>";     
    
    //Headers
    $headers .= "Organization: Borvo Care\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
      
    $headers .= 'From: '. $bemail . "\r\n";
    $headers .= "Reply-To: ". $bemail . "\r\n";     
    
    mail($to, $subject, $message, $headers);      
  }

  if(isset($_POST['btn-contact']))
  {
    //Recipient's email addreess
    $to="care@borvocare.com";        
    
    //Change subject field.
    $subject="Contact - Borvo Care";
    $cname=$_POST['cname'];
    $cemail=$_POST['cemail'];
    $cphone=$_POST['cphone'];  
    $cmessage=$_POST['cmessage'];     

    //Sender's email addreess
    $from=$_POST['email'];
              
    //Email Body
    $message = '<html><body>';
    $message .= '<table cellpadding="10" cellspacing="0" border="0" width="100%">';
    $message .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $message .= "<tr style='background: #f6f6f6;'><td width='30%'><strong>Name:</strong> </td><td width='70%'>" . $cname . "</td></tr>";      
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $cemail . "</td></tr>";
    $message .= "<tr style='background: #f6f6f6;'><td><strong>Phone: </strong> </td><td>" . $cphone . "</td></tr>";
    $message .= "<tr><td><strong>Message: </strong> </td><td>" . $cmessage . "</td></tr>";     
    $message .= "</table>";
    $message .= "</body></html>";     
    
    //Headers
    $headers .= "Organization: Borvo Care\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
      
    $headers .= 'From: '. $cemail . "\r\n";
    $headers .= "Reply-To: ". $cemail . "\r\n";     
    
    mail($to, $subject, $message, $headers);      
  }

?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="font72 text-pink text-center font-bold mb3 wow fadeInUp" data-wow-delay="100ms">Thank You!</h1>
          <h4 class="text-center mb6 wow fadeInUp" data-wow-delay="200ms">You are precious to us. We promise you that we will revert. <br>One of our professionals will contact you soon.</h4>
          <div class="text-center wow fadeInUp" data-wow-delay="200ms"><a href="index.php" class="btn btn-pink">Back to Home</a></div>
        </div>
      </div>
      
      </div>

     

  </section>
  <!-- Thanks ends --> 
    
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
