<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibe Blogs</title>
    <link rel="icon" type="image/x-icon" href="asset/img/imgNavbar/fav.png">
    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/global/style.css">
    <link rel="stylesheet" href="asset/css/cssBlogs/style.css">

</head>

<body>
    <?php include_once('include/navbar.php') ?>

    <!-- Hero text section start-->
    <section class="banner">
        <!-- <img src="imgGallery/aboutherocover.png" width="100%" /> -->
        <img src="asset/img/imgBlogs/banner.png" width="100%" height="100%" loading="lazy" />

        <div class="banner-txt">
            <h1>LIFE WITH NO EXCUSES AND TRAVEL WITH NO REGRETS</h1>
        </div>

        <div class="bannerContain">
            <div class="bannerContainWrap">
                <h1>BLOGS</h1>
                <div class="bannerLink">
                    <b><a href="#" class="homeLink">HOME</a></b>
                    <b><i class="fa-solid fa-play"></i></b>
                    <b><a href="#">BLOGS</a></b>
                </div>

            </div>
        </div>

    </section>
    <!-- Hero text section end-->
    <!-- prodact start -->
    <div class="mainSlider">
        <img class="leftImg" src="asset/img/imgBlogs/left.png">
        <!-- Swiper -->
        <div class="swiper mySwiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product1.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product2.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product3.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product4.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product5.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product1.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product2.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product3.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product4.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product5.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product1.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product2.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product3.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product4.png" width=100%></span></div>
                <div class="swiper-slide"><span><img src="asset/img/imgBlogs/product5.png" width=100%></span></div>

            </div>

            <div class="swiper-pagination"></div>
        </div>
        <img class="rightImg" src="asset/img/imgBlogs/right.png">
    </div>
    <!-- prodact end -->


    <!-- gallery section start -->
    <div class="title">
        <h1>BEST PLACES TO VISIT?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ut deserunt ipsam beatae? Voluptatibus
            fugiat sed tempora.</p>
    </div>

    <div class="container-fluid">
        <section class="gallery">


            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/india.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/india_map.png"></div>
                <div class="card_text">
                    <span>India</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>

            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/bangladesh.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/bangladesh_map.png"></div>
                <div class="card_text">
                    <span>Bangladesh</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>

            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/srilanka.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/srilanka_map.png"></div>
                <div class="card_text">
                    <span>Srilanka</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>

            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/peru.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/peru_map.png"></div>
                <div class="card_text">
                    <span>Peru</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>


            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/unitedkingdom.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/united_kingdom_map.png"></div>
                <div class="card_text">
                    <span>United Kingdom</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>


            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/Italy.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/italy_map.png"></div>
                <div class="card_text">
                    <span>Italy</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>



            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/greece.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/greece_map.png"></div>
                <div class="card_text">
                    <span>Greece</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>


            <div class="card">
                <div class="main_img"><img src="asset/img/imgBlogs/australia.jpg"></div>
                <div class="map"><img src="asset/img/imgBlogs/australia_map.png"></div>
                <div class="card_text">
                    <span>Australia</span>
                    <p>BEACHES / FLIGHTS / GUIDES</p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>

        </section>
    </div>
    <div class="btn_2"><a href="#">load more</a></div>

    <!-- gallery section end -->


    <!-- melissa section start -->
    <section class="animation-part1">
        <div class="banner-animation">
            <div class="mainAnimation">

                <div class="part1">

                    <div class="mainImage">
                        <img class="parentImage" src="asset/img/imgBlogs/carcale_img_1.png">
                    </div>

                    <div class="circle">
                        <img class="circle1 " src="asset/img/imgBlogs/carcale_img_2.png">
                        <img class="circle2 " src="asset/img/imgBlogs/carcale_img_3.png">
                    </div>


                </div>


                <div class="part2">
                    <h2>Hi I'm Melissa:) <br /> Let's go travel </h2>
                    <p>In id cursus diam, vel faucibus metus. Mauris felis erat, rhoncus a sem id, consequat consequat
                        tellus. Nam vitae euismod orci, ac vehicula quam. Vestibulum quis dui et turpis scelerisque
                        lacinia et. Et nunc aecenas semper au auris felis erat, rhoncus a sem id, consequat consequat
                        tellus.</p>
                    <p>Vestibulum quis dui et turpis scelerisque lacinia et. Et nunc aecenas semper au auris felis erat,
                        rhoncus a sem id, consequat consequat tellus.</p>


                </div>
            </div>
        </div>
    </section>
    <!-- melissa section end -->



    <!-- money savings trips Start-->
    <div class="mySaving">
      <div class="mySavingWrap">
        <div class="mySavingTxt">
          <h1 class="savingHeading"> BEST MONEY-SAVING</h1>
          <h4 class="savingSubHeading"> TRAVELS TIPS</h4>
          <p class="savingSubPara">Go on the trip of a lifetime. And
            get See how I helped real readers
            plan, save the Go on the trip of
            lifetime. And get See how I help
            real readers plan, save the plan,
            save the Go on the trip of alifet
            And get See how I helped real
            readers plan.Go on the trip of a lifetime. And
            get See how I helped real readers
            plan, save the Go on the trip of
            lifetime. And get See how I help
            real readers plan, save the plan,
            save the Go on the trip of alifet
            And get See how I helped real
            readers plan.</p>
          </div>
          <div class="mySavingImg">
            <img src="asset/img/imgBlogs/OPEN BOOK 3D.png" alt="">
          </div>
        </div>
      </div>
      <!-- money savings trips End -->
      





    <!-- sponsors section start -->
    <section class="sponsors">
        <h1>OUR SPONSORS</h1>
        <div class="container">
            <div class="eco">
                <div class="img_wrap"><img src="asset/img/imgBlogs/Eco1.png"></div>
                <div class="img_wrap"><img src="asset/img/imgBlogs/Eco2.png"></div>
                <div class="img_wrap"><img src="asset/img/imgBlogs/Eco3.png"></div>
                <div class="img_wrap"><img src="asset/img/imgBlogs/Eco4.png"></div>
            </div>
        </div>
    </section>
    <!-- sponsors section end -->

    <!-- social-media section -->
    <div class="logoContainer">
        <div class="mainLogo">
            <div class="box-1 box"><a href="https://www.facebook.com/"><img src="asset/img/imgBlogs/facebook.png"
                        alt=""></a></div>
            <div class="box-2 box"><a href="https://web.whatsapp.com/"><img src="asset/img/imgBlogs/whatsapp.png"
                        alt=""></a></div>
            <div class="box-3 box"><a href="https://www.instagram.com/accounts/login/"><img
                        src="asset/img/imgBlogs/instagram.png" alt=""></a></div>
            <div class="box-4 box"><a href="https://www.youtube.com/account"><img src="asset/img/imgBlogs/youtube.png"
                        alt=""></a></div>
            <div class="box-5 box"><a href="https://twitter.com/i/flow/login"><img src="asset/img/imgBlogs/twitter.png"
                        alt=""></a></div>
            <div class="box-6 box"><a href="https://in.pinterest.com/login/"><img src="asset/img/imgBlogs/pinsart.png"
                        alt=""></a></div>
        </div>
    </div>
    <!-- social media section end -->

    <!-- Top button -->
    <a class="topBtn" id="button"><i class="fa-solid fa-arrow-up"></i></a>

    <?php include_once('include/footer.php') ?>


    <!-- External JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="asset/global/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="asset/js/jsBlogs/script.js"></script>
    
</body>

</html>