<?php 
include '_top.php'; 
?>
<!doctype html>
<html class="no-js" lang="en">
 
<head>
        <?php include '_header.php'; ?>
    </head>
    <body>
        
        <!-- Header Section -->
        <?php include '_menu.php'; ?>
        <!-- End Header Section -->
		<!-- Breadcrumb Section -->
		<section class="breadcrumb-section">
		    <div class="section-overlay">
                <div class="container">
                    <div class="breadcrumb-area">
                        <h2 class="breadcrumb-title">Contact Info</h2>
                        <ul class="breadcrumb-ul">
                          <li><a href="./">Home</a></li>
                          <li class="active-breadcrumb">Contact</li>
                        </ul>
                    </div>
                </div>		        
		    </div>
		</section>
		<!-- End Breadcrumb Section -->		            
        <!-- Contact Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="contact-details">
                                <ul class="contact-ul">
                                    <li>
                                        <span class="flaticon-placeholder"></span>
                                        <div class="contact-content">
                                            <h5>Our Address</h5>
                                            <h6>Suite 02, Level 12, Sahera Tropical Center 218 New Elephant Road,</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="flaticon-letter"></span>
                                        <div class="contact-content">
                                            <h5>Email Address</h5>
                                            <h6>support@admin.com
                                            http://dominname.com</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="flaticon-phone"></span>
                                        <div class="contact-content">
                                            <h5>Phone Number</h5>
                                            <h6>+8801678170593, 01919-264687, Office: 02-9611936</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="social-icon">
                                            <ul>
                                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>    
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="submit-opinion">
                                <h4>Get In Touch</h4>
                                <form method="post" id="contactForm">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="text" id="name" name="name" placeholder="Name*" class="input" />
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="email" id="emailid" name="emailid" placeholder="Email*" class="input" />
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="text" id="phone" name="phone" placeholder="Phone*" class="input" />
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <input type="text" id="subject" name="subject" placeholder="Subject*" class="input" />
                                        </div>
                                    </div>
                                    <textarea id="message" class="input" name="message" rows="4" placeholder="Comment*" style="padding: 30px 20px; height: 170px;"></textarea>
                                    <input type="submit" value="Submit Comment" id="submit-contact" class="button"></input>
                                    <div class="rh col-xs-12 outmsg" style="margin-top: 20px;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
        <!-- Contact Map -->
        <!-- <div id="contact_map" data-hue="#ffc400"></div> -->
        <!-- End Contact Map --> 
		<!-- Footer section -->
        <?php include '_footer.php'; ?>
        <script>
    $(document).ready(function(){
    $("#contactForm").on('submit',(function(e){
    e.preventDefault();
    var url="_check_contact";
    var data = new FormData(this);
    $.ajax({
      type: "POST",
      url: url,
      data: data,
      contentType: false,
      cache: false,
      processData:false, 
      dataType:"json",
      beforeSend: function(){$('.actionbtn').addClass('is-loading');},
      error: function(res){$('.actionbtn').removeClass('is-loading');},
      success: function(res){
        $('.actionbtn').removeClass('is-loading');
        $(".outmsg").html(res.msg);
        if(res.status){$("#contactForm").trigger('reset');}
      }
    })
  }));
});
</script>
    </body>
</html>
