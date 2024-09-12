<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!--==================== ALL LINK/CDN ====================-->

  <?php $this->load->view('include/headlink') ?>

</head>

<body>

  <!--==================== HEADER SECTION ====================-->

  <?php $this->load->view('include/header') ?>


  <main>

    <!--==================== HERO SECTION ====================-->

    <section class="home__page">

      <div class="container py-5">

        <div class="home__hero text-center mt-5 mb-5">

          <p class="hero__top__headline">Struggling To <span class="text__span">Market Your Business</span>?</p>
          <h1>Meet APS TeQ</h1>
          <h5>Creative Digital Marketing Agency</h5>

          <p class="hero__text">Getting People To Your Business And Turning Them Into <span class="text__span">Happy Paying Customers</span> Is What We Do Best</p>
          <p class="hero__note"><strong>Double Your ROI</strong> In The next 90 Days <strong>Guaranteed!</strong></p>


          <div class="home__btn mt-5">
            <a href="#"><i class="bi bi-check-square-fill me-2"></i> Book A free strategy Session now!</a>
          </div>

        </div>
      </div>

    </section>



    <!--==================== GOAL SECTION ====================-->

    <section class="goal__section">

      <div class="container py-5">

        <div class="text-center mt-4 mb-5">

          <div class="section__heading">
            <h2>Achieve Your <span class="text__span">Business Goals</span> Faster</h2>
          </div>

          <div class="heading__text py-4">

            <p>
              At APS TeQ, we're committed to helping your business thrive in today's competitive landscape. With our expertise in digital marketing, creative solutions, and data-driven strategies, we empower you to unlock your full potential and achieve your growth objectives.
            </p>

            <p>
              Whether you're looking to expand your online presence, increase brand awareness, or drive revenue, our team of seasoned professionals is here to support you every step of the way. From developing innovative marketing campaigns to optimizing your digital assets, we're dedicated to delivering measurable results that propel your business forward.
            </p>

          </div>

        </div>

      </div>

    </section>



    <!--==================== WHO WE ARE SECTION ====================-->

    <section class="who__we__are">

      <div class="who__we__are__inner">

        <div class="container py-5">

          <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col-md-8">

              <div class="who__we__are__left mt-5 mb-5">

                <div class="section__heading">
                  <h2>Who We Are</h2>
                </div>

                <div class="heading__text">
                  <p>At APS TeQ, we're dedicated to your success. Our mission is simple: to empower your business to thrive in the digital age. With a team of passionate experts, we're committed to providing you with innovative solutions tailored to your needs.</p>
                  <p>When you partner with us, you're not just gaining a service provider – you're gaining a trusted ally on your journey to growth and success.</p>
                </div>

              </div>

            </div>



            <div class="col-md-4">

              <div class="who__we__are__right">



              </div>

            </div>

          </div>

        </div>

      </div>

    </section>




    <!--==================== SERVICES SECTION ====================-->

    <section class="home__service">

      <div class="home__service__inner py-5">

        <div class="container">


          <div class="row row-cols-1 justify-content-center g-4">

            <div class="col-lg-5 col-md-6">

              <div class="home__service__card">
                <span class="service__num">01</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">Development</a></h3>
                <div class="service__img text-end">
                  <img src="<?= base_url('assets/images/service__1.png') ?>" alt="">
                </div>
              </div>

            </div>

            <div class="col-lg-7 col-md-6">

              <div class="home__service__card">
                <span class="service__num">02</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">Marketing Strategy</a></h3>
                <div class="service__img text-end">
                  <img src="<?= base_url('assets/images/service__2.png') ?>" alt="">
                </div>
              </div>

            </div>

            <div class="col-lg-4 col-md-6">
              <div class="home__service__card">
                <span class="service__num">03</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">UI Design</a></h3>
                <div class="service__img text-end">
                  <img src="<?= base_url('assets/images/service__3.png') ?>" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="home__service__card">
                <span class="service__num">04</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">Marketing Strategy</a></h3>
                <div class="service__img text-end">
                  <img src="<?= base_url('assets/images/service__4.png') ?>" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="home__service__card">
                <span class="service__num">05</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">App Design</a></h3>
                <div class="service__img text-end">
                  <img src="<?= base_url('assets/images/service__5.png') ?>" alt="">
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6">
              <div class="ds-service pos-rel mb-30">
                <span class="xb-item--number">03</span>
                <h3 class="xb-item--title border-effect"><a href="service-single.html">Ul Design</a></h3>
                <div class="xb-item--img xb-item--img2">
                  <img src="assets/img/digital-studio/ds-service/ds-ser03.png" alt="">
                </div>
                <a class="xb-overlay" href="service-single.html"></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="ds-service pos-rel mb-30">
                <span class="xb-item--number">04</span>
                <h3 class="xb-item--title border-effect"><a href="service-single.html">Marketing strategy</a></h3>
                <div class="xb-item--img xb-item--img3">
                  <img src="assets/img/digital-studio/ds-service/ds-ser04.png" alt="">
                </div>
                <a class="xb-overlay" href="service-single.html"></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="ds-service pos-rel mb-30">
                <span class="xb-item--number">05</span>
                <h3 class="xb-item--title border-effect"><a href="service-single.html">App Design</a></h3>
                <div class="xb-item--img xb-item--img4">
                  <img src="assets/img/digital-studio/ds-service/ds-ser05.png" alt="">
                </div>
                <a class="xb-overlay" href="service-single.html"></a>
              </div>
            </div> -->

          </div>


        </div>

      </div>

    </section>

    <!--==================== BLOG SECTION ====================-->

    <section class="home__article">

      <div class="article__inner py-5">

        <div class="container">

          <div class="article__head">

            <p>Explore our most recent agency articles</p>
            <h2>recent blog</h2>

          </div>

        </div>


      </div>

    </section>



  </main>


  <!--=============== SCROLL TOP SECTION ===============-->
  <div class="scroll__top__button">
    <a href="#" class="scroll__top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </div>



  <!--==================== FOOTER SECTION ====================-->

  <?php $this->load->view('include/footer') ?>
  <?php $this->load->view('include/footlink') ?>



</body>

</html>