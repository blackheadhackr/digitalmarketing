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

        <!--==================== ABOUT HEAD SECTION ====================-->

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




        <section class="blog__cards">

            <div class="blog__cards__inner py-5">

                <div class="container mt-5">

                    <div class="row row-cols-1 row-cols-lg-2 g-5">

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

                                <!-- <article class="single__post__item">

                                    <div class="post__thumbnail__wrapper">
                                        <a href="<?= base_url('blog-details') ?>">
                                            <img src="<?= base_url('assets/images/post_02.jpg') ?>" alt="">
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
                                            <a href="<?= base_url('blog-details') ?>">How to maximize startup value with digital product design: Strategies for growth</a>
                                        </h3>

                                        <div class="post__excerpt">
                                            <p>Tax planning is a crucial aspect of financial management, yet it's a terrain riddled with complexities and constant changes. With an ever-evolving tax code, deductions, credits, and regulations.</p>
                                        </div>

                                        <div class="post__read__more">
                                            <a href="#!" class="btn__link">Read More <span><img src="assets/images/arrow-right2.svg" alt=""></span></a>
                                        </div>

                                    </div>

                                </article>

                                <article class="single__post__item">

                                    <div class="post__thumbnail__wrapper">
                                        <a href="<?= base_url('blog-details') ?>">
                                            <img src="<?= base_url('assets/images/post_03.jpg') ?>" alt="">
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
                                            <a href="<?= base_url('blog-details') ?>">A1-backed marketing SaaS raises a 3,8M USD funding</a>
                                        </h3>

                                        <div class="post__excerpt">
                                            <p>Tax planning is a crucial aspect of financial management, yet it's a terrain riddled with complexities and constant changes. With an ever-evolving tax code, deductions, credits, and regulations.</p>
                                        </div>

                                        <div class="post__read__more">
                                            <a href="#!" class="btn__link">Read More <span><img src="assets/images/arrow-right2.svg" alt=""></span></a>
                                        </div>

                                    </div>

                                </article> -->

                            </div>

                        </div>



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
                                            <li><a href="#!"><?=$cat->name?><span>(
                                                    <?php $num = 0; foreach($blogs as $c){ if($c->category == $cat->name){echo $num;} } ?>
                                                )</span></a></li>
                                        <?php } ?>
                                        <!--<li><a href="#!">DEVELOPMENT <span>(22)</span></a></li>
                                        <li><a href="#!">STRATEGY <span>(30)</span></a></li>
                                        <li><a href="#!">DESIGN <span>(24)</span></a></li>
                                        <li><a href="#!">UI/UX Experience <span>(15)</span></a></li>
                                        <li><a href="#!">WORK CULTURE <span>(10)</span></a></li>
                                        <li><a href="#!">Digital Marketing <span>(13)</span></a></li>
                                        <li><a href="#!">Product Design <span>(05)</span></a></li>
                                        <li><a href="#!">Web Development <span>(03)</span></a></li> -->
                                    </ul>
                                </div>

                                
                                <!-- <div class="widget">
                                    <h2 class="widget__title">
                                        <span>Tags</span>
                                    </h2>
                                    <div class="tagcloud">
                                        <a href="#!">Design</a>
                                        <a href="#!">Development</a>
                                        <a href="#!">Startup</a>
                                        <a href="#!">Strategu</a>
                                        <a href="#!">Management</a>
                                        <a href="#!">UI/UX</a>
                                        <a href="#!">Optimization</a>
                                        <a href="#!">Planning</a>
                                    </div>
                                </div> -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

    
    <!--==================== FOOTER SECTION ====================-->

    <?php $this->load->view('include/footer') ?>
    <?php $this->load->view('include/footlink') ?>


    
</body>
</html>