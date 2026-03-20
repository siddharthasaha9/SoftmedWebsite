<!DOCTYPE html>
<html lang="en">
<head>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XRZP2LH2MT"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XRZP2LH2MT');
  </script>
  <script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TKNZS2D6');
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="Contact Softmed Technologies, send us a message">
  <meta name="keywords" content="contact us, get in touch, development center, send message">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/favicon.png" type="image/png">
   <link rel="canonical" href="https://www.softmedtech.com/index1.php">
  <title>Softmed Technologies</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/animate-css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <style>
        .button {
    font-family: "Open Sans", sans-serif;}
                .sub_head1{ 
        border-left: 5px solid #c80d23;
    padding: 4px 10px 7px;
    font-weight: 600;
    font-size: 18px;
        color: #585858;
    background-color: #c80d23c9;
    border-radius: 0px 50px 50px 50px;
        }
        .area-heading h3 {
    margin: 0;
    font-size: 24px;
    color: #fff;
    position: relative;
    font-weight: 600;
    font-family: 'Roboto', sans-serif;
  }
  .banner-pacs{
  position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 350px;
    background: url(img/home-banner.jpg) no-repeat scroll center center;
    z-index: 1;
    background-size: cover;
  }
  .thank_u{color: #06C; font-weight:700; display:none;margin-top: -39px;margin-left: 186px;}

  p{margin-bottom: 10px;}


  @media only screen and (max-width: 600px) {
    
  .thank_u{color: #06C; font-weight:700; display:none;margin-top: 0px;margin-left: 0px;} 
  .banner-pacs{
  position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 171px;
    background: url(img/home-banner.jpg) no-repeat scroll center center;
    z-index: 1;
    background-size: cover;
  }
  }
  </style>
  <script>
  function send_message()
  {
        var Name=$('#name').val();
        var Company=$('#company').val();
        var Email=$('#email').val();
        var Contact=$('#contact').val();
        var Message=$('#message').val();
        if(Name=='')
        {
                $('#name').css('border-color','red');
                $('#name').focus();
                $('#nme').show();
                return false;
        }
        else if(Company=='')
        {
                $('#company').css('border-color','red');
                $('#company').focus();
                $('#cmp').show();
                return false;
        }
        else if(Email=='')
        {
                $('#email').css('border-color','red');
                $('#email').focus();
                $('#eml').show();
                return false;
        }
        else if(Contact=='')
        {
                $('#contact').css('border-color','red');
                $('#contact').focus();
                $('#mob').show();
                return false;
        }
        else if(Message=='')
        {
                $('#message').css('border-color','red');
                $('#message').focus();
                $('#msg').show();
                return false;
        }
        else
        {
                //alert(12345);
                $.ajax({
                                url:'contact_process.php',
                                type:'POST',
                                data:'Name='+Name+'&Company='+Company+'&Email='+Email+'&Contact='+Contact+'&Message='+Message,
                                success:function(f)
                                {
                                        //alert(f);
                                        $('#err').show();
                                        setTimeout(function(){ window.location.href='index.php'; }, 3000);
                                }
                        
                })
        }
  }
  </script>
  <script>
  function emptyborders()
  {
        var Name=$('#name').val();
        var Company=$('#company').val();
        var Email=$('#email').val();
        var Contact=$('#contact').val();
        var Message=$('#message').val();
        if(Name!='')
        {
                $('#name').css('border-color','');              
                $('#nme').hide();
                
        }
        if(Company!='')
        {
                $('#company').css('border-color','');           
                $('#cmp').hide();
                
        }
        if(Email!='')
        {
                $('#email').css('border-color','');             
                $('#eml').hide();
                
        }
        if(Contact!='')
        {
                $('#contact').css('border-color','');
                $('#mob').hide();
                
        }
        if(Message!='')
        {
                $('#message').css('border-color','');
                $('#msg').hide();
                
        }
  }
  </script>
</head>
<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKNZS2D6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <?php include'header-button.php'?> <?php include'header_link.php'?>
  <section class="banner_area">
    <div class="d-flex align-items-center">
      <div class="container-fluid" style="padding:0px;">
        <div class="banner-pacs"></div>
      </div>
    </div>
  </section>
  <div class="container" style="">
    <div class="section-top-border">
      <div class="area-heading row" style="margin: 20px 0px 20px;">
        <div class="col-md-12 col-xl-12 p-0">
          <div class="page_link text-left" style="margin-bottom: 20px;">
            <a href="index.php">Home</a> / <a href="contact.php">Contact</a>
          </div>
        </div>
        <div class="col-md-12 col-xl-12 text-left p-0">
          <h3 style="color: #000;">Get in Touch</h3>
        </div>
      </div>
    </div>
  </div>
  <section class="contact-section area-padding">
    <div class="container">
      <div class="mb-5 pb-4">
        <div class="row">
          <div class="col-lg-8">
            <form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate" name="contactForm">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" autocomplete="off" onkeypress="emptyborders()"><span id="nme" style="color: #F00; font-weight:700;display:none;">come on, you have a name, don't you?</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="company" id="company" type="text" placeholder="Enter Company name" autocomplete="off" onkeypress="emptyborders()"><span id="cmp" style="color: #F00; font-weight:700;display:none;">come on, you have a company name, don't you?</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter Your Email" autocomplete="off" onkeypress="emptyborders()"><span id="eml" style="color: #F00; font-weight:700;display:none;">no email, no message</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <input class="form-control" name="contact" id="contact" type="text" placeholder="Enter Phone number" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onkeypress="emptyborders()" maxlength="10"><span id="mob" style="color: #F00; font-weight:700;display:none;">come on, you have a number, don't you?</span>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message" onkeypress="emptyborders()"></textarea><span id="msg" style="color: #F00; font-weight:700; display:none;">um...yea, you have to write something to send this form.</span>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button type="button" name="send_submit" class="button button-contactForm" onclick="send_message()">Send Message</button> <span class="thank_u" id="err" style="">Thank You. Your message is successfully sent...</span>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="media contact-info">
              <div class="media-body">
                <h4 style="color: #000;">Development Center :</h4>
                <h3>ASO 728, 7th Floor, South Block Astra Tower, Rajarhat IT Part Ltd.</h3>
                <p>Kolkata - 700 156, West Bengal, India.</p>
              </div>
            </div>
            <div class="media contact-info">
              <div class="media-body">
                <h4 style="color: #000;">Registered Address :</h4>
                <h3>15B, Indian Mirror Street,</h3>
                <p>Kolkata - 700013, West Bengal, India.</p>
              </div>
            </div>
            <div class="media contact-info">
              <div class="media-body">
                <h4 style="color: #000;">Branch locations:</h4>
                <p><img src="img/map.png" style="width: 13px;margin-right: 5px;" alt="map">Kolkata | <img src="img/map.png" style="width: 13px;margin-right: 5px;" alt="map">Hyderabad | <img src="img/map.png" style="width: 13px;margin-right: 5px;" alt="map">Mumbai</p>
              </div>
            </div>
            <div class="media contact-info" style="margin-left: 15px;">
              <div class="media-body">
                <h4><a href="tel:33-40441055" style="color: #000;">+91-33-40441055</a></h4>
                <p>Mon to Fri 9am to 6pm</p>
              </div>
            </div>
            <div class="media contact-info" style="margin-left: 15px;">
              <div class="media-body" style="margin-top: 15px!important;">
                <h4><a href="mailto:inform@softmedtech.com" style="color: #000;">inform@softmedtech.com</a></h4>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2>Thank you</h2>
          <p>Your message is successfully sent...</p>
        </div>
      </div>
    </div>
  </div><?php include'footer.php'?>
  <script src="js/jquery-2.2.4.min.js"></script> 
  <script src="js/popper.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/stellar.js"></script> 
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script> 
  <script src="js/jquery.ajaxchimp.min.js"></script> 
  <script src="js/waypoints.min.js"></script> 
  <script src="js/mail-script.js"></script> 
  <script src="js/jquery.form.js"></script> 
  <script src="js/mail-script.js"></script> 
  <script src="js/theme.js"></script>
</body>
</html>