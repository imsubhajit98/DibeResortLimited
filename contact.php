
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibe Contact</title>
    <link rel="icon" type="image/x-icon" href="asset/img/imgNavbar/fav.png">
    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- custom_css  -->
    <link rel="stylesheet" href="asset/global/style.css">
    <link rel="stylesheet" href="asset/css/cssContact/style.css">
    <link rel="stylesheet" href="asset/css/cssContact/responsive.css">
</head>
<body>
    
<?php include_once('include/navbar.php') ?>
        <!-- Hero text section start-->
        <section class="Contact_banner" id="topBar">
            <img src="asset/img/imgContact/Contact_banner.jpg" loading="lazy"/>
    
            <div class="Contact_bannerContain">
                <div class="Contact_bannerContainWrap">
                    <h1>CONTACT US</h1>
                    <div class="Contact_bannerLink">
                        <b><a href="index.php" class="Contact_homeLink">HOME</a></b>
                        <b><i class="fa-solid fa-play"></i></b>
                        <b><a href="#">CONTACT US</a></b>
                    </div>
    
                </div>
            </div>
    
        </section>
        <!-- Hero text section end-->

        <!-- contact_card_start -->
         
        <div class="contact_card">

            <div class="contact_card_wrap">
                <div class="contect_img"><img src="asset/img/imgContact/mission.png"></div>
                <h3>OUR MISSION</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto corporis mollitia officia sunt adipisci quidem omnis tenetur ratione Lorem ipsum dolor sit amet. consequuntur </p>
            </div>

            <div class="contact_card_wrap">
                <div class="contect_img"><img src="asset/img/imgContact/24-hours-support.png"></div>
                <h3>OUR SUPPORT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto corporis mollitia officia sunt adipisci quidem omnis tenetur ratione Lorem ipsum dolor sit amet. consequuntur </p>
            </div>

            <div class="contact_card_wrap">
                <div class="contect_img"><img src="asset/img/imgContact/mail-truck.png"></div>
                <h3>OUR SERVICE</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto corporis mollitia officia sunt adipisci quidem omnis tenetur ratione Lorem ipsum dolor sit amet. consequuntur </p>
            </div>

        </div>
 <!-- contact_card_end -->

<!-- contact_start -->


<section class="Contact">
    <div class="contact_wrap">

        <form action="#" method="" class="contactForm">
             <label for="the-name">First Name</label>
             <input type="text" name="name" id="the-name" placeholder="Your First Name" required>
             <br>
             <label for="the-name">Last Name</label>
             <input type="text" name="name" id="the-name" placeholder="Your Last Name" required>
             <br>
             <label for="the-email">Email Address</label>
              <input type="email" name="email" id="the-email" placeholder="Your Email" required>
             <br>
             <label for="the-phone">Phone Number</label>
              <input type="tel" name="phone" id="the-phone" placeholder="Your No" required>
             <br>
             <label for="the-message">Message</label>
             <textarea name="message" id="the-message" cols="30" rows="5" placeholder="Message" required></textarea>
            <div class="cotect_btn">
             <a href="#" type="submit" class="btn">submit</a>
            </div>
        </form>

        <div class="map_wrap">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7370.439511648551!2d88.35144514577765!3d22.533439271503212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02773d6ddeb62f%3A0xa285912d700a4398!2sForum%20Courtyard%20Mall!5e0!3m2!1sen!2sin!4v1676636269324!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section>
<!-- contact_end -->

 <!-- Newsletter start -->
      <div class="newsletter_main">
          <div class="newsletter_wrep">
            <div class="newsletter_box_left">
                <h2>Sign Up for Our Newsletter</h2>
                <p>Save up to 50% on tours and trips. Get instant access to lower prices.</p>
                <div class="chat_gorop_1">
                    <input type="text">
                    <a href="#" class="btn_1">SUBSCRIBE</a>
                </div>
            </div>
            <div class="newsletter_box_right">
                <h2>Sign Up for Our Newsletter</h2>
                <p>Save up to 50% on tours and trips. Get instant access to lower prices.</p>
                <div class="carcel_main">
                <div class="carcel">
                    <img src="asset/img/imgContact/carcal_1.jpg">
                    <img src="asset/img/imgContact/carcal_2.jpg">
                    <img src="asset/img/imgContact/carcal_3.jpg">
                    <img src="asset/img/imgContact/carcal_4.jpg">
                    <img src="asset/img/imgContact/carcal_5.jpg">
                    <img src="asset/img/imgContact/carcal_6.jpg">
                </div>
                    <a href="#" class="btn_1">CHAT NOW</a>
                </div>

            </div>
          </div>
      </div>
  <!-- Newsletter end -->

 <!-- Service start  -->

  <div class="sarvis">
    <div class="sarvis_wrap">
        <div class="sarvis_laft">
            <img src="asset/img/imgContact/support.png">
            <h4>Need any support <br>
             for tour & travels?</h4>
        </div>
        <div class="sarvis_right">
            <img src="asset/img/imgContact/travel.png">
            <h4>Need any support <br>
             for tour & travels?</h4>
        </div>
    </div>
  </div>
  <!-- Service end -->
  
  <!-- Top button -->
  <a class="topBtn" id="button"><i class="fa-solid fa-arrow-up"></i></a>
  
  <?php include_once('include/footer.php') ?>

     
    <!-- External js  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- custom_js  -->
    <script src="asset/js/jsContact/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="asset/global/script.js"></script>
    
</body>
</html>