<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
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
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

<style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
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
.coming{text-align: center;padding: 100px 0px;color: #c80d23;}
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
.coming{text-align: center;margin: -45px 0px -50px;color: #c80d23;}
    
}
  </style>
</head>
<body>

    <!--================Header Menu Area =================-->
    <?php include'header_link.php'?>
   
 

    <!-- ================ Hotline Area Starts ================= -->  
    <section class="banner_area">
      <div class="d-flex align-items-center">
        <div class="container-fluid" style="padding:0px;">
          <div class="banner-pacs">
           
           
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="container coming" style="">
        <h1>COMING SOON</h1>
                       <h5>STAY TUNED!</h5>
                       </div>
    </section>
    <!-- ================ Hotline Area End ================= -->  




 
    

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