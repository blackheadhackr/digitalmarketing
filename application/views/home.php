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

      <div class="who__we__are__inner py-5">

        <div class="container mt-5 mb-5">

          <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col-md-8">

              <div class="who__we__are__left h-100">

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

              <div class="who__we__are__right h-100">

                <img src="<?= base_url('assets/images/about.jpg') ?>" alt="">

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>




    <!--==================== SERVICES SECTION ====================-->

    <section class="home__service">

      <div class="home__service__inner py-5">

        <div class="home__section__head text-center">

          <p class="sub__title">Most experienced services</p>
          <h2 class="title">services</h2>

        </div>

        <div class="container">

          <div class="row row-cols-1 row-cols-lg-2 justify-content-center g-4">


            <div class="col-lg-5 col-md-6">

              <div class="home__service__card">
                <span class="service__num">01</span>
                <h3 class="border_effect"><a href="<?=base_url('our-service')?>">Development</a></h3>
                <div class="service__image service__img text-end">
                  <img src="<?= base_url('assets/images/service__1.png') ?>" alt="">
                </div>
                <a class="xb-overlay" href="<?= base_url('our-service') ?>"></a>
              </div>

            </div>


            <div class="col-lg-7 col-md-6">

              <div class="home__service__card">
                <span class="service__num">02</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">Marketing Strategy</a></h3>
                <div class="service__image service__img1">
                  <img src="<?= base_url('assets/images/service__2.png') ?>" alt="">
                </div>
                <a class="xb-overlay" href="<?= base_url('our-service') ?>"></a>
              </div>

            </div>


            <div class="col-lg-4 col-md-6">

              <div class="home__service__card">
                <span class="service__num">03</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">UI Design</a></h3>
                <div class="service__image service__img2 text-end">
                  <img src="<?= base_url('assets/images/service__3.png') ?>" alt="">
                </div>
                <a class="xb-overlay" href="<?= base_url('our-service') ?>"></a>
              </div>

            </div>


            <div class="col-lg-4 col-md-6">
              <div class="home__service__card">
                <span class="service__num">04</span>
                <h3 class="border-effect"><a href="<?=base_url('our-service')?>">Marketing Strategy</a></h3>
                <div class="service__image service__img3 text-end">
                  <img src="<?= base_url('assets/images/service__4.png') ?>" alt="">
                </div>
                <a class="xb-overlay" href="<?= base_url('our-service') ?>"></a>

              </div>
            </div>


            <div class="col-lg-4 col-md-6">
              <div class="home__service__card">
                <span class="service__num">05</span>
                <h3 class="border_effect"><a href="<?=base_url('our-service')?>">App Design</a></h3>
                <div class="service__image service__img4 text-end">
                  <img src="<?= base_url('assets/images/service__5.png') ?>" alt="">
                </div>
                <a class="xb-overlay" href="<?= base_url('our-service') ?>"></a>

              </div>
            </div>


          </div>


        </div>


        <div class="section__btn text-center mt-5">
          <a href="#" class="button">See All Services</a>
        </div>
        

      </div>

    </section>




    <!--==================== BLOG SECTION ====================-->

    <section class="home__article">

      <div class="article__inner py-5">

        <div class="home__section__head text-center">

          <p class="sub__title">Explore our most recent agency articles</p>
          <h2 class="title">recent blog</h2>

        </div>

        <div class="container mb-5">


          <div class="home__article__wrapper">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

              <?php 
              foreach($blog as $a){
                $id = base64_encode($a->id)
                ?>
              <div class="col-lg-4">

                <div class="article__card">

                  <div class="article__img">
                    <a href="<?= base_url('blog-details') ?>">
                      <img src="<?= base_url('assets/image/blog_img/'.$a->img) ?>" alt="">
                    </a>
                  </div>

                  <div class="article__content">

                    <div class="article__meta d-flex justify-content-between">

                      <span class="article__meta__span">By: <span>Admin</span></span>
                      <span class="article__meta__span"><?=$a->dateofupdation?></span>

                    </div>


                    <h3 class="article__title border_effect">
                      <a href="<?= base_url('blog-details') ?>"><?=$a->title?></a>
                    </h3>

                    <div class="article__btn mt-4">
                      <a href="<?=base_url('blog-detail/'.$id)?>" class="button">Read more</a>
                    </div>

                  </div>


                </div>

              </div>

              <?php  } ?>
              


              <!-- <div class="col-lg-4">

                <div class="article__card">

                  <div class="article__img">
                    <a href="<?= base_url('blog-details') ?>">
                      <img src="<?= base_url('assets/images/blog_rec_02.png') ?>" alt="">
                    </a>
                  </div>

                  <div class="article__content">

                    <div class="article__meta d-flex justify-content-between">

                      <span class="article__meta__span">By: <span>Admin</span></span>
                      <span class="article__meta__span">September 2024</span>

                    </div>


                    <h3 class="article__title border_effect">
                      <a href="<?= base_url('blog-details') ?>">How Analytics Can Drive Business Success</a>
                    </h3>

                    <div class="article__btn mt-4">
                      <a href="<?=base_url('contact-us')?>" class="button">Read more</a>
                    </div>

                  </div>


                </div>

              </div> -->


              <!-- <div class="col-lg-4">

                <div class="article__card">

                  <div class="article__img">
                    <a href="<?= base_url('blog-details') ?>">
                      <img src="<?= base_url('assets/images/blog_rec_03.png') ?>" alt="">
                    </a>
                  </div>

                  <div class="article__content">

                    <div class="article__meta d-flex justify-content-between">

                      <span class="article__meta__span">By: <span>Admin</span></span>
                      <span class="article__meta__span">September 2024</span>

                    </div>


                    <h3 class="article__title border_effect">
                      <a href="<?= base_url('blog-details') ?>">How Analytics Can Drive Business Success</a>
                    </h3>

                    <div class="article__btn mt-4">
                      <a href="<?=base_url('contact-us')?>" class="button">Read more</a>
                    </div>

                  </div>


                </div>

              </div> -->

            </div>


            <div class="section__btn text-center mt-5">
              <a href="#" class="button">See All Blogs</a>
            </div>

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