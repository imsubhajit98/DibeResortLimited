<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dibe Home</title>
    <link rel="icon" type="image/x-icon" href="asset/img/imgNavbar/fav.png">

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/global/style.css">

    <link rel="stylesheet" href="asset/css/cssHome/style1.css" />
    <link rel="stylesheet" href="asset/css/cssHome/responsive.css" />
    <!-- new gallery css -->
    <link rel="stylesheet" href="asset/css/cssHome/style.css" />

</head>

<body>

  <?php include_once('include/navbar.php') ?>

    <!-- Hero section Start -->
    <section class="banner" id="topBtn">
        <img src="asset/img/imgHome/home.jpg" loading="lazy" />
        <div class="banner-txt">
            <h1>A NEW AND IMPROVED WAY OF LIFE!</h1>
            <button class="btn btn-1" href="#">SEE MORE</button>
        </div>
    </section>
    <!-- Hero Section End -->




    <!-- Booking Section Start -->
    <section class="bookingSection">
        <div class="container booking-area" id="opacity">
            <form class="container row txtBoxMain">
                <div class="col-sm text-black p-3 txtBox txtBox1">
                    <select name="" class="from-select" id="date1">
                        <option selected class="selectOpt">Hotel or Destination</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-sm text-black p-3 txtBox txtBox2">
                    <input type="date" class="from-control" placeholder="date" id="date2" />
                    <h5>Check-In</h5>
                </div>
                <div class="col-sm text-black p-3 txtBox txtBox3">
                    <input type="date" class="from-control" placeholder="date" id="date3" />
                    <h5>Check-Out</h5>
                </div>

                <div class="col-sm text-black p-3 txtBox txtBox4" id="date4">
                    <button type="submit" class="main-btn from-select2 px-lg-3">
                        Check Availability
                    </button>
                </div>
            </form>

            <div class="w">
                <span><img class="leaf1" src="asset/img/imgHome/Leaf1.png" width="100%" /></span>
            </div>
        </div>
    </section>
    <!-- Booking Section End -->




    <!-- Eco About Start -->
    <div class="about">
        <div class="container about">
            <div class="about_img">
                <h1>ECO TOURISM</h1>
            </div>
            <div class="about_text">
                <p>
                    lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                    corrupti, culpa esse iusto rerum delectus quos ipsum deleniti
                    pariatur officia, libero dicta eos ad quibusdam debitis tenetur
                    doloribus tempora itaque. Ipsum tempore in minima incidunt.orem
                    ipsum dolor sit amet consectetur adipisicing elit. Nihil, corrupti,
                    culpa esse iusto rerum delectus quos ipsum deleniti pariatur
                    officia, libero dicta eos ad quibusdam debitis tenetur doloribus
                    tempora itaque. Ipsum tempore in minima incidunt.
                </p>
                <a href="#" class="from-select3">Read More</a>
            </div>
        </div>
    </div>
    <!-- Eco About End -->

<!-- Logo Section start-->
<div class="mainLogo">
        <div class="logoSection">
            <div class="clientLogo">
                <img src="asset/img/imgAbout/Eco1.png" alt="" />
            </div>
            <div class="clientLogo">
                <img src="asset/img/imgAbout/Eco2.png" alt="" />
            </div>
            <div class="clientLogo">
                <img src="asset/img/imgAbout/Eco3.png" alt="" />
            </div>
            <div class="clientLogo">
                <img src="asset/img/imgAbout/Eco4.png" alt="" />
            </div>
        </div>
    </div>
    <!-- Logo Section end -->



    <!-- About Section Start -->
    <section class="about2">
        <div class="container-fluid">
            <div class="about2-con">
                <div class="about2-img">
                    <div class="abt2-text">
                        <span> <img src="asset/img/imgHome/Group 622.png" width="100%" /></span>
                    </div>
                </div>

                <div class="about2-img">
                    <div class="abt2-text">
                        <h1>DESTINATION <br /><span>ON YOUR MIND?</span></h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit
                            corrupti, obcaecati suscipit numquam unde quibusdam fugit sequi,
                            quam incidunt consequuntur nobis error!
                        </p>
                        <button type="submit" class="main-btn from-select3 px-lg-3">
                            Check Availability
                        </button>
                    </div>
                </div>

                <div class="about2-img">
                    <div class="abt2-text">
                        <span> <img src="asset/img/imgHome/Group 624.png" width="100%" /></span>
                    </div>
                </div>

                <div class="w">
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->




    <!--Happy Client Start  -->
    <section class="happyclints" id="clintsdiv">
        <div class="abt3-text">
            <h1>WHAT OUR CLIENT SAY</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. natus
                tenethj obcaecati consectetur placeat.
            </p>
        </div>
    </section>
    <div class="reviewBox">
    <swiper-container class="mySwiper">
        <swiper-slide>
            <div class="clientBox">
            <div class="clientLogo">
                <img src="asset/img/imgHome/profile2.jpg" alt="">
            </div>
            <div class="clientText">
                <p class="clientFeedback"><b>❝ </b><i class="dibeReview">Really happy with the response to enquiries, and the helpfulness of staff when we needed to adjust a couple of little things. Great holiday and great experience with river mountion.</i><b> ❞</b></p>
                <p class="clientName">Vikash Thapa</p>
            </div>
            </div>
        </swiper-slide>

        <swiper-slide>
            <div class="clientBox">
            <div class="clientLogo">
                <img src="asset/img/imgHome/profile2.jpg" alt="">
            </div>
            <div class="clientText">
                <p class="clientFeedback"><b>❝ </b><i class="dibeReview">Really happy with Great holiday andresponse to enquiries, and the helpfulness of staff when we needed to adjust a couple of little things. Great holiday and great experience with river mountion. </i><b> ❞</b></p>
                <p class="clientName">Vikash Thapa</p>
            </div>
            </div>
        </swiper-slide>

        <swiper-slide>
            <div class="clientBox">
            <div class="clientLogo">
                <img src="asset/img/imgHome/profile2.jpg" alt="">
            </div>
            <div class="clientText">
                <p class="clientFeedback"><b>❝ </b><i class="dibeReview">Really happy with the response to enquiries, and the helpfulness of staff when we needed to adjust a couple of little things. Great holiday and great experience with river mountion.</i><b> ❞</b></p>
                <p class="clientName">Vikash Thapa</p>
            </div>
            </div>
        </swiper-slide>

        <swiper-slide>
            <div class="clientBox">
            <div class="clientLogo">
                <img src="asset/img/imgHome/profile2.jpg" alt="">
            </div>
            <div class="clientText">
                <p class="clientFeedback"><b>❝ </b><i class="dibeReview">Really happy with the response to enquiries, and the helpfulness of staff when we needed to adjust a couple of little things. Great holiday and great experience with river mountion.</i><b> ❞</b></p>
                <p class="clientName">Vikash Thapa</p>
            </div>
            </div>
        </swiper-slide>

        <swiper-slide>
            <div class="clientBox">
            <div class="clientLogo">
                <img src="asset/img/imgHome/profile2.jpg" alt="">
            </div>
            <div class="clientText">
                <p class="clientFeedback"><b>❝ </b><i class="dibeReview">Really happy with the response to enquiries, and the helpfulness of staff when we needed to adjust a couple of little things. Great holiday and great experience with river mountion.</i><b> ❞</b></p>
                <p class="clientName">Vikash Thapa</p>
            </div>
            </div>
        </swiper-slide>

        <swiper-slide>
            <div class="clientBox">
            <div class="clientLogo">
                <img src="asset/img/imgHome/profile2.jpg" alt="">
            </div>
            <div class="clientText">
                <p class="clientFeedback"><b>❝ </b><i class="dibeReview">Really happy with the response to enquiries, and the helpfulness of staff when we needed to adjust a couple of little things. Great holiday and great experience with river mountion.</i><b> ❞</b></p>
                <p class="clientName">Vikash Thapa</p>
            </div>
            </div>
        </swiper-slide>

        <swiper-slide>
            <div class="clientBox">
            <div class="clientLogo">
                <img src="asset/img/imgHome/profile2.jpg" alt="">
            </div>
            <div class="clientText">
                <p class="clientFeedback"><b>❝ </b><i class="dibeReview">Really happy with the response to enquiries, and the helpfulness of staff when we needed to adjust a couple of little things. Great holiday and great experience with river mountion.</i><b> ❞</b></p>
                <p class="clientName">Vikash Thapa</p>
            </div>
            </div>
        </swiper-slide>
        <!-- Add Pagination -->
<!-- <div class="swiper-pagination"></div> -->
    </swiper-container>
    </div>
    <!--Happy Client End  -->



    <!-- Gallery Section Start -->
    <div class="abt3-text">
        <h1>OUR TOURISM</h1>
      </div>
      <div class="gallery1">
        <div class="galSlider">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide swiper-slide--one">
                <!-- <span>domestic</span>   //This service tag -->
                <div>
                  <!-- <h2>Enjoy the exotic of sunny Hawaii</h2>    //This is heading tag -->
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    Maui, Hawaii
                  </p>
                </div>
              </div>
              <div class="swiper-slide swiper-slide--two">
                <!-- <span>subtropical</span> -->
                <div>
                  <!-- <h2>The Island of Eternal Spring</h2> -->
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    Lanzarote, Spanien
                  </p>
                </div>
              </div>
    
              <div class="swiper-slide swiper-slide--three">
                <!-- <span>history</span> -->
                <div>
                  <!-- <h2>Awesome Eiffel Tower</h2> -->
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    Paris, France
                  </p>
                </div>
              </div>
    
              <div class="swiper-slide swiper-slide--four">
                <!-- <span>Mayans</span> -->
                <div>
                  <!-- <h2>One of the safest states in Mexico</h2> -->
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    The Yucatan, Mexico
                  </p>
                </div>
              </div>
    
              <div class="swiper-slide swiper-slide--five">
                <!-- <span>native</span> -->
                <div>
                  <!-- <h2>The most popular yachting destination</h2> -->
                  <p>
    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    Whitsunday Islands, Australia
                  </p>
                </div>
              </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    <!-- Gallery Section End -->
    
    <!-- Top button -->
    <a class="topBtn" id="button"><i class="fa-solid fa-arrow-up"></i></a>

    <?php include_once('include/footer.php') ?>
  
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>

<!-- Gallery script -->
<script src="asset/js/jsHome/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="asset/global/script.js"></script>
</body>

</html>