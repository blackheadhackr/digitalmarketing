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


        <!--==================== BLOG HEAD SECTION ====================-->

        <section class="page__head">

            <div class="page__head__inner py-5">

                <div class="container text-center mt-5 mb-5">
    
                    <div class="page__heading">
                        <h2>Our Blog</h2>
                    </div>

                    <div class="page_breadcrumb">
                        <p><a href="<?= base_url() ?>">Home</a> | <span>Our Blog</span> </p>
                    </div>
    
                </div>

            </div>

        </section>



        <!--==================== BLOG CARDS SECTION ====================-->

        <section class="blog__cards">

            <div class="blog__cards__inner py-5">

                <div class="container mt-5">

                    <div class="row row-cols-1 row-cols-lg-2 g-5">

                        <!--==================== BLOG CARD SECTION ====================-->
                        <div class="col-lg-8">

                            <div class="blog__post__wrapper">

                                <?php foreach($blog as $a){
                                    $id = base64_encode($a->id);
                                    ?>
                                    
                                    <article class="single__post__item">

                                        <div class="post__thumbnail__wrapper">
                                            <a href="<?= base_url('blog-detail/'.$id) ?>">
                                                <!-- <img src="<?= base_url('assets/images/post_01.jpg') ?>" alt=""> -->
                                                <img src="<?=base_url()?>assets/image/blog_img/<?=$a->img?>" alt="<?=$a->title?>">
                                            </a>
                                        </div>

                                        <div class="post__content__wrapper">

                                            <ul class="post__meta list-unstyled">
                                                <li class="list__meta">
                                                    <span>
                                                        <i class="far fa-user"></i><span class="author vcard"> Admin</span>
                                                    </span>
                                                </li>
                                                <li class="list__meta">
                                                    <a href="#!"><i class="far fa-comments"></i> Comments (3)</a>
                                                </li>
                                                <li class="list__meta">
                                                    <span class="posted-on">
                                                        <i class="far fa-clock"></i> <a href="#!"><?=$a->dateofupdation?></a>
                                                    </span>
                                                </li>
                                            </ul>

                                            <h3 class="post__title border_effect">
                                                <a href="<?= base_url('blog-detail/'.$id) ?>"><?=$a->title?></a>
                                            </h3>

                                            <div class="post__excerpt">
                                                <p><?=$a->desc?></p>
                                            </div>

                                            <div class="post__read__more">
                                                <a href="#!" class="btn__link">Read More <span><img src="assets/images/arrow-right2.svg" alt=""></span></a>
                                            </div>

                                        </div>

                                    </article>

                                <?php } ?>

                                
                                <!-- <article class="single__post__item">

                                    <div class="post__thumbnail__wrapper">
                                        <a href="<?= base_url('blog-details') ?>">
                                            <img src="<?= base_url('assets/images/post_01.jpg') ?>" alt="">
                                        </a>
                                    </div>

                                    <div class="post__content__wrapper">

                                        <ul class="post__meta list-unstyled">
                                            <li>
                                                <span>
                                                    <i class="far fa-user"></i><span class="author vcard">Admin</span>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="far fa-comments"></i> Comments (3)</a>
                                            </li>
                                            <li>
                                                <span class="posted-on">
                                                    <i class="far fa-clock"></i> <a href="#!">August 4, 2023</a>
                                                </span>
                                            </li>
                                        </ul>

                                        <h3 class="post__title border_effect">
                                            <a href="<?= base_url('blog-details') ?>">Design that drives growth: a wellness
                                            app elevates retention rates by 42%</a>
                                        </h3>

                                        <div class="post__excerpt">
                                            <p>Financial growth and wealth accumulation are common goals for individuals and businesses alike. However, navigating the complex world of finance, investments, and money management can be challenging. This is where a financial consultant can make a significant difference. Let’s explore. One of the key [...]</p>
                                        </div>

                                        <div class="post__read__more">
                                            <a href="#!" class="btn__link">Read More <span><img src="assets/images/arrow-right2.svg" alt=""></span></a>
                                        </div>

                                    </div>

                                </article> -->

                            </div>

                        </div>


                        <!--==================== BLOG RIGHT SECTION ====================-->
                        <div class="col-lg-4">

                            <div class="blog__sidebar sidebar__area">

                                <div class="widget">
                                    <h2 class="widget__title">Search</h2>
                                    <form class="widget__search" action="#">
                                        <input type="text" placeholder="Search...">
                                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                                

                                <div class="widget">
                                    <h2 class="widget__title">Recent Posts</h2>

                                    <div class="widget__post">
                                        <?php foreach($blogs as $b){ $id = base64_encode($b->id)?>
                                            <div class="widget__post__item">
                                            <div class="post__thumb">
                                                <a href="<?= base_url('blog-detail/'.$id) ?>"><img src="<?=base_url()?>assets/image/blog_img/<?=$b->img?>" alt="<?=$b->title?>"></a>
                                            </div>
                                            <div class="post__content">
                                                <div class="post__meta">
                                                    <a href="#!"><i class="invite-text-gr-color far fa-user"></i>By Admin</a>
                                                    <a href="#!"><i class="invite-text-gr-color far fa-calendar"></i><?=$b->dateofupdation?></a>
                                                </div>
                                                <h4 class="post__title border__effect__2"><a href="<?= base_url('blog-detail/'.$id) ?>"><?=$b->title ?></a></h4>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        


                                        <!-- <div class="widget__post__item">
                                            <div class="post__thumb">
                                                <a href="<?= base_url('blog-details') ?>"><img src="assets/images/post_01.jpg" alt=""></a>
                                            </div>
                                            <div class="post__content">
                                                <div class="post__meta">
                                                    <a href="#!"><i class="invite-text-gr-color far fa-user"></i>By Admin</a>
                                                    <a href="#!"><i class="invite-text-gr-color far fa-calendar"></i>19 feb/21</a>
                                                </div>
                                                <h4 class="post__title border__effect__2"><a href="<?= base_url('blog-details') ?>">WHAT IS DESIGN RESEARCH?</a></h4>
                                            </div>
                                        </div>


                                        <div class="widget__post__item">
                                            <div class="post__thumb">
                                                <a href="<?= base_url('blog-details') ?>"><img src="assets/images/post_02.jpg" alt=""></a>
                                            </div>
                                            <div class="post__content">
                                                <div class="post__meta">
                                                    <a href="#!"><i class="invite-text-gr-color far fa-user"></i>By Admin</a>
                                                    <a href="#!"><i class="invite-text-gr-color far fa-calendar"></i>19 feb/21</a>
                                                </div>
                                                <h4 class="post__title border__effect__2"><a href="<?= base_url('blog-details') ?>">LAZAREV. WON RED DOT FOR UKRAINIAN CHARITY PROJECT</a></h4>
                                            </div>
                                        </div>


                                        <div class="widget__post__item">
                                            <div class="post__thumb">
                                                <a href="<?= base_url('blog-details') ?>"><img src="assets/images/post_04.jpg" alt=""></a>
                                            </div>
                                            <div class="post__content">
                                                <div class="post__meta">
                                                    <a href="#!"><i class="invite-text-gr-color far fa-user"></i>By Admin</a>
                                                    <a href="#!"><i class="invite-text-gr-color far fa-calendar"></i>19 feb/21</a>
                                                </div>
                                                <h4 class="post__title border__effect__2"><a href="<?= base_url('blog-details') ?>">WEBBY HONOREE - LAZAREV. IS KEEPING TO WIN</a></h4>
                                            </div>
                                        </div> -->

                                    </div>
                                </div>
                                
                                <div class="widget">
                                    <h2 class="widget__title">
                                        <span>Categories</span>
                                    </h2>
                                    <ul class="widget__category list-unstyled">
                                        <?php foreach($catg as $cat) { ?>
                                            <li><a href="<?=base_url('blog-category/').$cat->name?>"><?=$cat->name?><span><?=$cat->number_of_blogs?></span></a></li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>

                                
                                <div class="widget">
                                    <h2 class="widget__title">
                                        <span>Tags</span>
                                    </h2>
                                    <div class="tagcloud">
                                    <?php foreach($catg as $cat) { ?>
                                        <a href="<?=base_url('blog-category/').$cat->name?>"><?=$cat->name?></a>
                                        <?php } ?>
                                    </div>
                                </div>

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