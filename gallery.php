<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibe Gallery</title>
    <link rel="icon" type="image/x-icon" href="asset/img/imgNavbar/fav.png">
    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/global/style.css">
    <link rel="stylesheet" href="asset/css/cssGallery/style.css">
    <link rel="stylesheet" href="asset/css/cssGallery/lightbox.css">
</head>

<body>

<?php include_once('include/navbar.php') ?>

    <!-- Hero text section start-->
    <section class="banner">
        <img src="asset/img/imgGallery/gallery-2.jpg" width="100%" loading="lazy"/>

        <div class="banner-txt">
            <h1>KEEP CALM AND TRAVEL ON!</h1>
        </div>

        <div class="bannerContain">
            <div class="bannerContainWrap">
                <h1>GALLERY</h1>
                <div class="bannerLink">
                    <b><a href="index.php" class="homeLink">HOME</a></b>
                    <b><i class="fa-solid fa-play"></i></b>
                    <b><a href="gallery.php">GALLERY</a></b>
                </div>

            </div>
        </div>

    </section>
    <!-- Hero text section end-->


    <!-- Main Gallery Banner Start -->
    <div class="mainBanner">
        <h3>Lorem ipsum, dolor sit amet</h3>
        <div class="bannerPart">
            <div class="bannerPart1">
                <h1>YOUR WAY WITH THROUGH</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
                    soluta minima ab sint. Qui nesciunt voluptatibus placeat quam quas
                    accusantium. Alias blanditiis iste, cum animi
                </p>
            </div>
            <div class="bannerPart2">
                <img src="asset/img/imggallery/h2-img-01.png" alt="" />
            </div>
        </div>
    </div>
    <!-- Main Gallery Banner End -->


    <!-- Gallery Post -->
    <div class="cardGallery">
        <h1>LET'S GO WITH US</h1>

        <div class="mainItem">
            <!-- card 1 -->
            <div class="cardContain">
                <div class="card">
                    <div class="post_header">
                        <div class="post_img">
                            <a href="#galleryView" data-filter=".mountelbrus">
                                <img src="asset/img/imgGallery/img2.png" /></a>
                        </div>
                        <div class="post_footer">
                            <div class="left_side">
                                <i class="fa fa-heart loveIcon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Lets goto Mountain</h2>
                <!-- <button>CHECK AVAILABILITY</button> -->
            </div>

            <!-- card 2 -->
            <div class="cardContain">
                <div class="card">
                    <div class="post_header">
                        <div class="post_img">
                            <a href="#galleryView">
                                <img src="asset/img/imgGallery/img4.png" /></a>
                        </div>
                        <div class="post_footer">
                            <div class="left_side">
                                <i class="fa fa-heart loveIcon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Lets goto Beach</h2>
                <!-- <button>CHECK AVAILABILITY</button> -->
            </div>

            <!-- card 3 -->
            <div class="cardContain">
                <div class="card">
                    <div class="post_header">
                        <div class="post_img">
                            <a href="#galleryView">
                                <img src="asset/img/imgGallery/img3.png" /></a>
                        </div>
                        <div class="post_footer">
                            <div class="left_side">
                                <i class="fa fa-heart loveIcon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Lets goto Waterfall</h2>
                <!-- <button>CHECK AVAILABILITY</button> -->
            </div>

            <!-- card 4 -->
            <div class="cardContain">
                <div class="card">
                    <div class="post_header">
                        <div class="post_img">
                            <a href="#galleryView">
                                <img src="asset/img/imgGallery/img1.png" /></a>
                        </div>

                        <div class="post_footer">
                            <div class="left_side">
                                <i class="fa fa-heart loveIcon"></i>
                            </div>
                        </div>

                        <!-- <div class="like-button ">
            <div class="">
              <div class="heart-icon"></div>
            </div>
          </div>
           -->
                    </div>
                </div>
                <h2>Lets go to Forest</h2>
                <!-- <button>CHECK AVAILABILITY</button> -->
            </div>
        </div>
    </div>
    <!-- Gallery Post End-->


    <!--  Gallery View Start---->
    <div class="mainGalleryView" id="galleryView">
        <img class="galleryImg" src="asset/img/imgGallery/Leaf1.png" alt="">
        <!-- <h1>MOUNTAIN VIEW</h1> -->


        <section class="portfolio">

            <header class="section-head">
                <h1 id="galleryHeading">GALLERY VIEW</h1>
            </header>

            <main class="mainContainer">

                <!--  *****  Buttons Section Starts  *****  -->
                <div class="button-group">
                    <button class="button active" id="all" data-filter=".*">All</button>
                    <button class="button " id="mountain" data-filter=".mountelbrus">Mountain</button>
                    <button class="button" id="beach" data-filter=".kangchenjunga">Beach</button>
                    <button class="button" id="waterfall" data-filter=".aconcagua">Waterfall</button>
                    <button class="button" id="forest" data-filter=".forest">Forest</button>
                </div>
                <!--  *****  Buttons Section Ends  *****  -->

                <div class="gallery">
                    <!-- ------------ All Section start--------------->


                    <!--  *****  Card 1 Starts  *****  -->
                    <div class="item mountelbrus">
                        <a href="asset/img/imgGallery/mountain/img_1.png" data-lightbox="models" data-title="caption1">
                            <img src="asset/img/imgGallery/mountain/img_1.png">
                        </a>
                        <!-- <img src="img/design1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 1 Ends  *****  -->

                    <!--  *****  Card 2 Starts  *****  -->
                    <div class="item mountelbrus">
                        <a href="asset/img/imgGallery/mountain/img_2.png" data-lightbox="models" data-title="caption2">
                            <img src="asset/img/imgGallery/mountain/img_2.png">
                        </a>
                        <!-- <img src="img/design2.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 2 Ends  *****  -->

                    <!--  *****  Card 2 Starts  *****  -->
                    <div class="item mountelbrus">
                        <a href="asset/img/imgGallery/mountain/img_4.png" data-lightbox="models" data-title="caption2">
                            <img src="asset/img/imgGallery/mountain/img_3.png">
                        </a>
                        <!-- <img src="img/design2.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 2 Ends  *****  -->

                    <!--  *****  Card 2 Starts  *****  -->
                    <div class="item mountelbrus">
                        <a href="asset/img/imgGallery/mountain/img_4.png" data-lightbox="models" data-title="caption2">
                            <img src="asset/img/imgGallery/mountain/img_4.png">
                        </a>
                        <!-- <img src="img/design2.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 2 Ends  *****  -->

                    <!--  *****  Card 2 Starts  *****  -->
                    <div class="item mountelbrus">
                        <a href="asset/img/imgGallery/mountain/img_5.png" data-lightbox="models" data-title="caption2">
                            <img src="asset/img/imgGallery/mountain/img_5.png">
                        </a>
                        <!-- <img src="img/design2.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 2 Ends  *****  -->

                    <!--  *****  Card 2 Starts  *****  -->
                    <div class="item mountelbrus">
                        <a href="asset/img/imgGallery/mountain/img_6.png" data-lightbox="models" data-title="caption2">
                            <img src="asset/img/imgGallery/mountain/img_6.png">
                        </a>
                        <!-- <img src="img/design2.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 2 Ends  *****  -->



                    <!--  *****  Card 3 Starts  *****  -->
                    <div class="item kangchenjunga">
                        <a href="asset/img/imgGallery/mountain/beach (1).jpg" data-lightbox="models" data-title="caption3">
                            <img src="asset/img/imgGallery/mountain/beach (1).jpg">
                        </a>
                        <!-- <img src="img/website1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 3 Ends  *****  -->

                    <!--  *****  Card 4 Starts  *****  -->
                    <div class="item kangchenjunga">
                        <a href="asset/img/imgGallery/mountain/beach (2).jpg" data-lightbox="models" data-title="caption4">
                            <img src="asset/img/imgGallery/mountain/beach (2).jpg">
                        </a>
                        <!-- <img src="img/website2.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 4 Ends  *****  -->

                    <!--  *****  Card 5 Starts  *****  -->
                    <div class="item kangchenjunga">
                        <a href="asset/img/imgGallery/mountain/beach (3).jpg" data-lightbox="models" data-title="caption5">
                            <img src="asset/img/imgGallery/mountain/beach (3).jpg">
                        </a>
                        <!-- <img src="img/website3.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 5 Ends  *****  -->

                    <!--  *****  Card 5 Starts  *****  -->
                    <div class="item kangchenjunga">
                        <a href="asset/img/imgGallery/mountain/beach (4).jpg" data-lightbox="models" data-title="caption5">
                            <img src="asset/img/imgGallery/mountain/beach (4).jpg">
                        </a>
                        <!-- <img src="img/website3.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 5 Ends  *****  -->

                    <!--  *****  Card 5 Starts  *****  -->
                    <div class="item kangchenjunga">
                        <a href="asset/img/imgGallery/mountain/beach (5).jpg" data-lightbox="models" data-title="caption5">
                            <img src="asset/img/imgGallery/mountain/beach (5).jpg">
                        </a>
                        <!-- <img src="img/website3.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 5 Ends  *****  -->

                    <!--  *****  Card 5 Starts  *****  -->
                    <div class="item kangchenjunga">
                        <a href="asset/img/imgGallery/mountain/beach (6).jpg" data-lightbox="models" data-title="caption5">
                            <img src="asset/img/imgGallery/mountain/beach (6).jpg">
                        </a>
                        <!-- <img src="img/website3.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 5 Ends  *****  -->


                    <!--  *****  Card 6 Starts  *****  -->
                    <div class="item aconcagua">
                        <a href="asset/img/imgGallery/mountain/waterfall (1).jpg" data-lightbox="models" data-title="caption8">
                            <img src="asset/img/imgGallery/mountain/waterfall (1).jpg">
                        </a>
                        <!-- <img src="img/logo1.jpg">
               <div class="overlay">
               <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 6 Ends  *****  -->

                    <!--  *****  Card 6 Starts  *****  -->
                    <div class="item aconcagua">
                        <a href="asset/img/imgGallery/mountain/waterfall (2).jpg" data-lightbox="models" data-title="caption8">
                            <img src="asset/img/imgGallery/mountain/waterfall (2).jpg">
                        </a>
                        <!-- <img src="img/logo1.jpg">
               <div class="overlay">
               <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 6 Ends  *****  -->

                    <!--  *****  Card 6 Starts  *****  -->
                    <div class="item aconcagua">
                        <a href="asset/img/imgGallery/mountain/waterfall (3).jpg" data-lightbox="models" data-title="caption8">
                            <img src="asset/img/imgGallery/mountain/waterfall (3).jpg">
                        </a>
                        <!-- <img src="img/logo1.jpg">
               <div class="overlay">
               <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 6 Ends  *****  -->

                    <!--  *****  Card 6 Starts  *****  -->
                    <div class="item aconcagua">
                        <a href="asset/img/imgGallery/mountain/waterfall (4).jpg" data-lightbox="models" data-title="caption8">
                            <img src="asset/img/imgGallery/mountain/waterfall (4).jpg">
                        </a>
                        <!-- <img src="img/logo1.jpg">
               <div class="overlay">
               <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 6 Ends  *****  -->

                    <!--  *****  Card 6 Starts  *****  -->
                    <div class="item aconcagua">
                        <a href="asset/img/imgGallery/mountain/waterfall (5).jpg" data-lightbox="models" data-title="caption8">
                            <img src="asset/img/imgGallery/mountain/waterfall (5).jpg">
                        </a>
                        <!-- <img src="img/logo1.jpg">
               <div class="overlay">
               <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 6 Ends  *****  -->

                    <!--  *****  Card 6 Starts  *****  -->
                    <div class="item aconcagua">
                        <a href="asset/img/imgGallery/mountain/waterfall (6).jpg" data-lightbox="models" data-title="caption8">
                            <img src="asset/img/imgGallery/mountain/waterfall (6).jpg">
                        </a>
                        <!-- <img src="img/logo1.jpg">
               <div class="overlay">
               <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 6 Ends  *****  -->

                    <!--  *****  Card 1 Starts  *****  -->
                    <div class="item forest">
                        <a href="asset/img/imgGallery/mountain/forest (1).jpg" data-lightbox="models" data-title="caption1">
                            <img src="asset/img/imgGallery/mountain/forest (1).jpg">
                        </a>
                        <!-- <img src="img/design1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 1 Ends  *****  -->

                    <!--  *****  Card 1 Starts  *****  -->
                    <div class="item forest">
                        <a href="asset/img/imgGallery/mountain/forest (2).jpg" data-lightbox="models" data-title="caption1">
                            <img src="asset/img/imgGallery/mountain/forest (2).jpg">
                        </a>
                        <!-- <img src="img/design1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 1 Ends  *****  -->

                    <!--  *****  Card 1 Starts  *****  -->
                    <div class="item forest">
                        <a href="asset/img/imgGallery/mountain/forest (3).jpg" data-lightbox="models" data-title="caption1">
                            <img src="asset/img/imgGallery/mountain/forest (3).jpg">
                        </a>
                        <!-- <img src="img/design1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 1 Ends  *****  -->

                    <!--  *****  Card 1 Starts  *****  -->
                    <div class="item forest">
                        <a href="asset/img/imgGallery/mountain/forest (4).jpg" data-lightbox="models" data-title="caption1">
                            <img src="asset/img/imgGallery/mountain/forest (4).jpg">
                        </a>
                        <!-- <img src="img/design1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 1 Ends  *****  -->

                    <!--  *****  Card 1 Starts  *****  -->
                    <div class="item forest">
                        <a href="asset/img/imgGallery/mountain/forest (7).jpg" data-lightbox="models" data-title="caption1">
                            <img src="asset/img/imgGallery/mountain/forest (7).jpg">
                        </a>
                        <!-- <img src="img/design1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 1 Ends  *****  -->

                    <!--  *****  Card 1 Starts  *****  -->
                    <div class="item forest">
                        <a href="asset/img/imgGallery/mountain/forest (6).jpg" data-lightbox="models" data-title="caption1">
                            <img src="asset/img/imgGallery/mountain/forest (6).jpg">
                        </a>
                        <!-- <img src="img/design1.jpg">
            <div class="overlay">
              <a href="#">VIEW MORE</a>
            </div> -->
                    </div>
                    <!--  *****  Card 1 Ends  *****  -->

                </div>
                <!--  *****  Gallery Section Ends  *****  -->

            </main>
        </section>

    </div>
    <!-- Gallery View End  -->


    <!-- Slider section Start-->
    <div class="mainSlider">
        <h1>MEMORY BRING BACK</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (1).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (2).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (3).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (4).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (5).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (6).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (7).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (1).jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="asset/img/imgGallery/mountain/slider (2).jpg" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Slider Section End -->


    <!-- Gallery Footer Banner Start-->
  <div class="mainFooterBanner">
    <img class="footerImg" src="asset/img/imgGallery/h5-bckg-img-02.png" alt="" />
    <div class="footerBannerPart">
      <div class="footerBannerPart1">
        <img src="asset/img/imgGallery/planning-traveling-trip-notes-wanderkust.png" alt="" />
      </div>
      <div class="footerBannerPart2">
        <h1>FINDING PERFECT TRAILS TO HIKE </h1>
        <h3>IS EASY WITH US</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
          soluta minima ab sint. Qui nesciunt
        </p>
      </div>
    </div>
  </div>
  <!-- Gallery Footer Banner End-->

  <!-- Top button -->
  <a class="topBtn" id="button"><i class="fa-solid fa-arrow-up"></i></a>

  <?php include_once('include/footer.php') ?>




    <!-- External JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="asset/global/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="asset/js/jsGallery/lightbox1.js"></script>
    <script src="asset/js/jsGallery/lightbox.js"></script>
    <script src="asset/js/jsGallery/script.js"></script>
    <script src="asset/js/jsGallery/slider.js"></script>
</body>

</html>