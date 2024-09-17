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

        <!--==================== PAGE HEAD SECTION ====================-->

        <section class="page__head">

            <div class="page__head__inner py-5">

                <div class="container text-center mt-5 mb-5">

                    <div class="page__heading">
                        <h2>Services</h2>
                    </div>

                    <div class="page_breadcrumb">
                        <p><a href="<?= base_url() ?>">Home</a> | <span>Services</span> </p>
                    </div>

                </div>

            </div>


        </section>



        <!--==================== SERVICE SECTION ====================-->

        <section class="services">

            <div class="container py-5">

                <!--==================== SERVICE CARD SECTION ====================-->

                <div class="services__inner mt-5 mb-5">

                    <div class="row row-cols-1 row-cols-lg-2">

                        <!--==================== SERVICE CARD HEAD SECTION ====================-->
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub__title">Core Services</span>
                                <div class="clearfix"></div>
                                <h2 class="title">Discover Our <br> <span>Capabilities</span></h2>
                            </div>
                        </div>

                        <!--==================== SERVICE CARDS SECTION ====================-->
                        <div class="col-lg-6">

                            <div class="services__cards">

                                <div class="row row-cols-1 row-cols-md-2 g-5">

                                    <div class="col-md-6">

                                        <div class="services__card">

                                            <div class="services__icon">
                                                <img src="<?= base_url('assets/images/sv_01.svg') ?>" alt="">
                                            </div>

                                            <div class="card__body">
                                                <h3 class="card__title">UI/UX Design</h3>
                                                <p class="card__text">I've created a user interface and user experience with some process and method</p>
                                            </div>

                                            <div class="card__ref mt-4">
                                                <a class="down__arrow" href="<?= base_url() ?>">
                                                    <i class="bi bi-box-arrow-in-down-right"></i>
                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="services__card">

                                            <div class="services__icon">
                                                <img src="<?= base_url('assets/images/sv_02.svg') ?>" alt="">
                                            </div>

                                            <div class="card__body">
                                                <h3 class="card__title">Visual Branding</h3>
                                                <p class="card__text">I've created a user interface and user experience with some process and method</p>
                                            </div>

                                            <div class="card__ref mt-4">
                                                <a class="down__arrow" href="<?= base_url() ?>">
                                                    <i class="bi bi-box-arrow-in-down-right"></i>
                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="services__card">

                                            <div class="services__icon">
                                                <img src="<?= base_url('assets/images/sv_03.svg') ?>" alt="">
                                            </div>

                                            <div class="card__body">
                                                <h3 class="card__title">Web Development</h3>
                                                <p class="card__text">I've created a user interface and user experience with some process and method</p>
                                            </div>

                                            <div class="card__ref mt-4">
                                                <a class="down__arrow" href="<?= base_url() ?>">
                                                    <i class="bi bi-box-arrow-in-down-right"></i>
                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="services__card">

                                            <div class="services__icon">
                                                <img src="<?= base_url('assets/images/sv_04.svg') ?>" alt="">
                                            </div>

                                            <div class="card__body">
                                                <h3 class="card__title">App Development</h3>
                                                <p class="card__text">I've created a user interface and user experience with some process and method</p>
                                            </div>

                                            <div class="card__ref mt-4">
                                                <a class="down__arrow" href="<?= base_url() ?>">
                                                    <i class="bi bi-box-arrow-in-down-right"></i>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>




                <!--==================== SERVICE LIST ====================-->

                <div class="sevices__wrapper py-5">

                    <div class="col-lg-7 sevices__head">
                        <div class="section__title">
                            <h2 class="title">We offer comprehensive services that help businesses establish a <span>strong online presence.</span></h2>
                        </div>
                    </div>

                    <div class="services__list">
                        <a href="#">WEBFLOW DEVELOPMENT</a>
                        <a href="#">BRANDING</a>
                        <a href="#">WEB DESIGN</a>
                        <a href="#">VIDEOGRAPHY</a>
                        <a href="#">COPYWRITING</a>
                        <a href="#">M0T10N GRAPHICS</a>
                        <a href="#">GRAPHIC DESIGN</a>
                        <a href="#">VIDEO EDITING</a>
                    </div>

                </div>


            </div>

        </section>



        <!--==================== SERVICE LIST ====================-->

        <section class="what__we__do">

            <div class="container-fluid what__we__do__inner py-5">

                <!--==================== SERVICE ACCORDION SECTION ====================-->
                <div class="mt-5 mb-5">

                    <div class="row row-cols-1 row-cols-lg-2">

                        <div class="col-lg-6">

                            <div class="what__we__do__left">

                                <div class="section__title">
                                    <span class="sub__title">what we offer</span>
                                    <div class="clearfix"></div>
                                    <h2 class="title">Discover Our <br> <span>Capabilities</span></h2>
                                </div>

                                <div class="collapsible-tabs__wrapper">

                                    <div class="collapsibles-wrapper">
                                        <button type="button" class="collapsible-trigger-btn">High Standards</button>

                                        <div class="collapsible-content">
                                            <div class="collapsible-content__inner">
                                                <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapsibles-wrapper">
                                        <button type="button" class="collapsible-trigger-btn">Focus on People</button>

                                        <div class="collapsible-content">
                                            <div class="collapsible-content__inner">
                                                <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapsibles-wrapper">
                                        <button type="button" class="collapsible-trigger-btn">Different Thinking</button>

                                        <div class="collapsible-content">
                                            <div class="collapsible-content__inner">
                                                <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapsibles-wrapper">
                                        <button type="button" class="collapsible-trigger-btn">Business Innovation</button>

                                        <div class="collapsible-content">
                                            <div class="collapsible-content__inner">
                                                <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>



                        <div class="what__we__do__right col-lg-6">

                            <div class="what__we__do__image">
                                <img src="<?= base_url('assets/images/faq01.jpg') ?>" alt="">
                            </div>

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