<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XRZP2LH2MT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XRZP2LH2MT');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKNZS2D6');</script>
<!-- End Google Tag Manager -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="canonical" href="https://www.softmedtech.com/index1.php">
    <title>Softmed Technologies</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <script src="https://kit.fontawesome.com/5b7bbad616.js" crossorigin="anonymous"></script>
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        
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
    color: #000;
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
.area-heading{margin: 20px 0px 20px;}
.about_laptop{margin-left: 63px;}
@media only screen and (max-width: 600px) {
  .banner-pacs{
  position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 171px;
    background: url(img/home-banner.jpg) no-repeat scroll center center;
    z-index: 1;
    background-size: cover;
} 
.area-heading{margin: -100px 0px 20px;}
.about_laptop{margin-left: 15px;}
}
    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKNZS2D6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!--================Header Menu Area =================-->
    <?php include'header_link.php'?>
   

    <section class="banner_area">
      <div class="d-flex align-items-center">
        <div class="container-fluid" style="padding:0px;">
          <div class="banner-pacs">
           
           
          </div>
        </div>
      </div>
    </section>

          
  
            
            <div class="container" style="">
            <div class="section-top-border">
                
            <div class="area-heading row" style="">
			    <div class="col-md-12 col-xl-12 p-0">    
					<div class="page_link text-left" style="margin-bottom: 20px;">
					  <a href="index.php">Home</a> /
					  	  <a href="aboutus.php">Company Profile</a>
					</div>
			    </div>
					<cms:editable name='aboutheader' type='richtext'>
                <div class="col-md-12 col-xl-12 text-left p-0">
                    <h3>Company Profile</h3> 
                </div>
                 </cms:editable>
				
            </div>
			
			</div>
			</div>
            
            
            <div class="container" style="padding-bottom: 50px;">
            <div class="section-top-border">
			<div class="row">
                <div class="col-md-8">
                    <cms:editable name='about' type='richtext'>
              <div class="about-content">
                        
<p style="text-align: justify;">Softmed Technologies provides innovative and cost effective software solutions for the healthcare industry. We develop 
new age solutions and systems for automation of medical imaging procedures.<br><br>
Our strong focus is to innovate software solutions in the field of Medical Imaging & Telehealth indigenously. Our mission is to provide 
innovative technology solutions to enhance accessibility of healthcare - to reach the unreachable.<br><br>
We provide Healthcare process automation, solution design, cost effective radiology reporting. Our services include 
innovative software solutions for Invasive and non-Invasive Diagnostic Procedures, which can be leveraged to increase 
the business practice of a wide range of Healthcare Service providers e.g. Hospitals, Nursing Homes and Diagnostics 
Centres and to provide the much needed timely medical care support services to the needy mass.</p>

                    </div>  
                    </cms:editable>
               </div> 
               <cms:editable name='aboutimage' label='About Image' desc='AboutUs image in the page' width='300' height='300' crop='1' group='group_img' type='image'>
                <div class="col-md-4">
                <img src="img/banner/about1.png" style="height: 285px;" class="about_laptop">
                </div>
                </cms:editable>
                </div>
            </div>
    </div>
    
    
    
   
    

 <?php include'footer.php'?>
<!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
<script>
   $('.count').each(function (){
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
           $(this).text(Math.ceil(now));
        }
    });
});
        
    </script>
</body>
</html>
<?php COUCH::invoke(); ?>