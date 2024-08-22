<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>web4bit</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('frontend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend') }}/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/client-slider.css">
  <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/hero-logo.css"> -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">WEB<span>4</span>BIT</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          {{-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <div class="w-100 mx-auto">
          <h1>WE PURSUE <span>EXCELLENCE</span></h1>
          <h2>Our aim is to help businesses all around the world by providing the digital solutions.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#contact" class="btn-get-started scrollto">Contact Us</a>
            <a href="https://youtu.be/mq508HXzccI" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
          </div>

        </div>
        <div class="col-lg-6  order-1 order-lg-2 text-center hero-img " data-aos="zoom-in" data-aos-delay="200">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($banners as $key => $banner)
                    @if($key == 0)
                    <div class="carousel-item active">
                        <img src="{{ asset($banner->banner) }}" class="d-block w-100" alt="...">
                      </div>


                      @else
                  <div class="carousel-item">
                    <img src="{{ asset($banner->banner) }}" class="d-block w-100" alt="...">
                  </div>
                  @endif
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              “We’ve been able to build something in 3 years that a lot of brands haven’t actually gotten to in 10 years.”
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Get all the marketing and business strategy tips you need to help you run an online business.</li>
              <li><i class="ri-check-double-line"></i> Learn from the best with instant access to lessons from successful entrepreneurs around the world.</li>
              <li><i class="ri-check-double-line"></i> Find answers in a flash with your dedicated resource for articles and videos from our Support team.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Over a decade ago, we started a store to sell snowboards online. None of the ecommerce solutions at the time gave us the control we needed to be successful—so we built our own. Today, businesses of all sizes use our ecommerce store whether they’re selling online, in retail stores, or on-the-go.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Start dropshipping  <strong>Now</strong></h3>

            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> What is Dropshipping? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Dropshipping is when you sell products to customers but use a third party to hold your inventory and ship your orders. Dropshipping business owners focus on the branding, marketing, and customer management part of their business while a third party handles their logistics for them.                     </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> How Profitable is dropshipping? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dropshipping has the potential to be profitable. For starters, online shopping continues on an upward trajectory. Further, merchants don’t need to make inventory investments upfront, so this keeps more capital at the ready for other purposes.                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> How do i start dropshipping business? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Here’s how to start a dropshipping business:

                      Choose a dropshipping business idea
                      Do competitive research
                      Choose a dropshipping supplier
                      Build your ecommerce store
                      Decide on a business structure
                      Get your finances in order
                      Market your dropshipping store
                      Analyze and improve your offering                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('frontend') }}/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section> -->
    <!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('frontend') }}/assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Team Skills</h3>


            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section> -->
    <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>We Are Offering All Kinds of IT Solutions Services</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box text-center w-100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Web Development</a></h4>
              <!-- <p>We provide top-of-the-line website design and development to clients. Our forte is the creation of the most appealing and functional face for your product or service online.</p> -->
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box text-center w-100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Graphic Design</a></h4>
              <!-- <p>Graphic design is one of the lifelines of website design and development. We focuses on graphic design that conveys businesses' messages explicitly.</p> -->
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box text-center w-100">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Digital Marketing</a></h4>
              <!-- <p>Digital marketing allows businesses to promote and sell their products and services using online platforms like search engine marketing, social media marketing, email marketing.</p> -->
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center w-100">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Search Engine Optimization</a></h4>
              <!-- <p>We provide strategic and value-based marketing grounded in the best SEO practices to our clients to help them grow their businesses.</p> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> For more information press the button and call now</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

     <!-- ======= Our Clients ======= -->
     <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Clients</h2>
          <p>We are trusted by industry leaders</p>
        </div>

        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-1.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-2.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-3.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-4.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-5.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-6.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-1.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-2.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-3.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-4.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-5.png" />
            </div>
            <div class="slide">
              <img src="{{ asset('frontend') }}/assets/img/clients/client-6.png" />
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Our Clients -->

    <!-- ======= Technology section======= -->
    <section id="technology" class="technology section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>technology we use</h2>
        </div>

        <div class="row">

          <div class="col-lg-3">
            <div class="tech d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/technology/tech (1).svg" class="img-fluid" alt=""></div>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="tech d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/technology/tech (2).svg" class="img-fluid" alt=""></div>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="tech d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/technology/tech (3).svg" class="img-fluid" alt=""></div>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="tech d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/technology/tech (4).svg" class="img-fluid" alt=""></div>

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- ======= End Technology section ======= -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>We Believe in the team</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Walter White CEO, Chief Executive Officer, leading the company as it builds a platform that empowers creative entrepreneurs around the world. He is also a member of Etsy's board of directors.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>She leads the company's digital marketing, advertising, communications, brand, market research and international growth initiatives</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Chief Technology Officer</span>
                <p>William Anderson is Chief Technology Officer, setting our technology strategy and helping to further scale our global platform.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Chief Financial Officer</span>
                <p>Amanda Jepson CFO, bringing more than 30 years of senior financial experience. She’s responsible for overseeing our global financial operations.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

      <!-- ======= industry Section ======= -->
    <section id="industry" class="industry section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>industry we serve</h2>
          <p>We Believe in the team</p>
        </div>

        <div class="row">

          <div class="col-lg-2 mt-4">
            <div class="serve" data-aos="zoom-in" data-aos-delay="100">
              <div class="text-center ">
                <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/union-1.svg" class="img-fluid" alt=""></div>
                <p class="mb-0 pt-3">Constraction</p>
              </div>

            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/bank.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Bank</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/education.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Education</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/elearning.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">E-Learning</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/hands.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Government</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/healthcare.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">HealthCare</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/house.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Real State</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/media.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Media</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/medical.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Medical</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/ngo.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">NGO</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/retail.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Retail</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4">
            <div class="serve text-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('frontend') }}/assets/img/industry/transport.svg" class="img-fluid" alt=""></div>
              <p class="mb-0 pt-3">Transport</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End industry Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 1000MB Disk Space</li>
                <li><i class="bx bx-check"></i>20GB Bandwidth</li>
                <li><i class="bx bx-check"></i>Free Domain Registration</li>
                <li class="na"><i class="bx bx-x"></i> <span>ASP.Net, PHP, Email</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>99.9% Server Uptime</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 2000MB Disk Space</li>
                <li><i class="bx bx-check"></i> 40GB Bandwidth</li>
                <li><i class="bx bx-check"></i>Free Domain Registration</li>
                <li><i class="bx bx-check"></i> ASP.Net, PHP, Email</li>
                <li><i class="bx bx-check"></i> 99.9% Server Uptime</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>3000MB Disk Space</li>
                <li><i class="bx bx-check"></i>60GB Bandwidth</li>
                <li><i class="bx bx-check"></i> Free Domain Registration</li>
                <li><i class="bx bx-check"></i> ASP.Net, PHP, Email</li>
                <li><i class="bx bx-check"></i> 99.9% Server Uptime</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section> -->


    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>You Are Confused! Question & Answers.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What services do you provide?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  We provide top-of-the-range website design and development, graphic designing, digital marketing, SEO services, and Mobile Apps development, among others
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How do you guarantee quality product<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  We evaluate the result after every two weeks, we test our work (we conduct both development and acceptance tests), we present it to you, we apply your feedback so you know you get what you are paying for.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Why should i choose you?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Hiring your own software developers can be a really smart choice, however, recruitment process is time-consuming and the costs of keeping an in-house programming team are very high. You'll probably need to employ your own software engineers sooner or later but hiring us can help you save a lot of money and time
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Please complete the form below to send us your business requirements and one of our representative shall get in touch with you shortly. All the information provided by you below will be kept strictly confidential and will not be shared with anyone.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ @$contact->location }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <a href="mailto:@$contact->email"><p>{{ @$contact->email }}</p></a>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{@$contact->number  }}</p>
              </div>

              <iframe src="{{ $contact->ifram_link }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('send.email') }}" method="POST" class="php-email-form">
                @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email"  required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="content" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe Our Newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>WEB4BIT</h3>
            <p>
             Bohaddarhat<br>
              Chottogram<br>
              Bangladesh <br><br>
              <strong>Phone:</strong> {{ $contact->number }}<br>
              <strong>Email:</strong> {{ $contact->email }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
              <a href="https://www.facebook.com/web4bit" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/web4bit.bd?igshid=YmMyMTA2M2Y" target="_blank"  class="instagram" ><i class="bx bxl-instagram"></i></a>
              {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
              {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">

      <div class="credits">

      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




  <script>
      @if(Session::has('message'))
   toastr.options =
   {
       "closeButton" : true,
       "progressBar" : true
   }
           toastr.success("{{ session('message') }}");
   @endif
  </script>
</body>

</html>

