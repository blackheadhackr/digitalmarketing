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
                        <h2>About Us</h2>
                    </div>

                    <div class="page_breadcrumb">
                        <p><a href="<?= base_url() ?>">Home</a> | <span>About us</span> </p>
                    </div>
    
                </div>

            </div>

        </section>



        <!--==================== ABOUT SECTION ====================-->

        <section class="about">

            <div class="about__inner py-5">

                <div class="container">

                    <div class="section__title">
                        <span class="sub__title">About Digital Solution</span>
                        <div class="clearfix"></div>
                        <h2 class="title">Discover Our <br> <span>Capabilities</span></h2>
                    </div>

                    <div class="about__details">

                        <div class="about__wrapper">
                            <p>Our vision is to be a trailblazing force in the world of web design and development, recognized for our unwavering commitment to excellence, integrity, and customer satisfaction.</p>
                        </div>

                        <div class="about__img">
                            <img src="<?= base_url('assets/images/img02.jpg') ?>" alt="">
                            <div class="about__box" id="counter-1">
                                <p>22 years</p>
                                <p>Experience</p>
                            </div>
                        </div>
                        
                        <div class="about__wrapper">
                            <p class="text">Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape. We are committed to delivering innovative web solutions that not only meet but exceed our clients' expectations. Through creativity, collaboration.</p>
                        </div>

                        <div class="funfact">

                            <div class="row row-cols-2 row-cols-md-4 g-4">

                                <div class="col-md-3">

                                    <div class="funfact__wrap h-100">
                                        <p class="mb-0">90+</p>
                                        <h3>Project Delivered</h3>
                                    </div>
                                    
                                </div>

                                <div class="col-md-3">

                                    <div class="funfact__wrap h-100">
                                        <p class="mb-0">13</p>
                                        <h3>Awards</h3>
                                    </div>
                                    
                                </div>

                                <div class="col-md-3">

                                    <div class="funfact__wrap h-100">
                                        <p class="mb-0">19+</p>
                                        <h3>Years Experience</h3>
                                    </div>
                                    
                                </div>

                                <div class="col-md-3">

                                    <div class="funfact__wrap h-100">
                                        <p class="mb-0">82+</p>
                                        <h3>Happy CLients</h3>
                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>




        <!--==================== WHY US SECTION ====================-->

        <section class="why__us">

            <div class="why__us__inner py-5">

                <div class="container mt-4 mb-5">

                    <div class="row row-cols-1 row-cols-lg-2 g-5">

                        <div class="col-lg-6">

                            <div class="why__us__image">
                                <img src="<?= base_url('assets/images/img01.jpg') ?>" alt="">
                            </div>

                        </div>



                        <div class="col-lg-6">

                            <div class="why__us__right">

                                <div class="section__title">
                                    <span class="sub__title">Why us</span>
                                    <div class="clearfix"></div>
                                    <h2 class="title">Discover Our <br> <span>Capabilities</span></h2>
                                </div>

                                <p>connecting businesses with their audiences, and individuals with their dreams. Our path forward is one of continuous growth</p>

                                <ul class="why__us__list list-unstyled">

                                    <li>
                                        <p>Frontend</p>
                                        <img src="<?= base_url('assets/images/prc_01.png') ?>" class="" alt="">
                                    </li>

                                    <li>
                                        <p>backend</p>
                                        <img src="<?= base_url('assets/images/prc_02.png') ?>" class="" alt="">
                                    </li>

                                    <li>
                                        <p>Digital marketing</p>
                                        <img src="<?= base_url('assets/images/prc_03.png') ?>" class="" alt="">
                                    </li>
                                </ul>

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