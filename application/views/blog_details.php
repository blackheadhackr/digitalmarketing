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

        <!--==================== BLOG DETAILS HEAD SECTION ====================-->

        <section class="page__head">

            <div class="page__head__inner py-5">

                <div class="container text-center mt-5 mb-5">
    
                    <div class="page__heading">
                        <h2>Blog Details</h2>
                    </div>

                    <div class="page_breadcrumb">
                        <p><a href="<?= base_url() ?>">Home</a> | <span>Blog Details</span> </p>
                    </div>
    
                </div>

            </div>


        </section>


        <!--==================== BLOG DETAILS BODY SECTION ====================-->

        
        <section class="blog__cards">

            <div class="blog__cards__inner py-5">

                <div class="container mt-5">

                    <div class="row row-cols-1 row-cols-lg-2 g-5">

                        <div class="col-lg-8">
                            <div class="blog__post__wrapper">
                                
                                <article class="post__details">

                                    <div class="post__thumb">
                                        <img src="<?=base_url()?>assets/image/blog_img/<?=$blog->img?>" alt="<?=$blog->title?>">
                                    </div>

                                    <ul class="post__meta list-unstyled">
                                        <li class="list__meta">
                                            <span>
                                                <i class="far fa-user"></i>
                                                <span class="author vcard">Admin</span>
                                            </span>
                                        </li>
                                        <li class="list__meta">
                                            <a href="#!">
                                                <i class="far fa-comments"></i> Comments (3)
                                            </a>
                                        </li>

                                        <li class="list__meta">
                                            <span class="posted-on">
                                                <i class="far fa-clock"></i> <a href="#!"><?=$blog->dateofupdation?></a>
                                            </span>
                                        </li>
                                    </ul>

                                    <?=$blog->content?>

                                </article>

                                <!-- <article class="post__details">

                                    <div class="post__thumb">
                                    <img src="<?=base_url()?>assets/image/blog_img/<?=$blog->img?>" alt="<?=$blog->title?>">
                                    </div>

                                    <ul class="post__meta list-unstyled">
                                        <li><span><i class="far fa-user"></i><span class="author vcard">Admin</span></span></li>
                                        <li><a href="#!"><i class="far fa-comments"></i> Comments (3)</a></li>
                                        <li><span class="posted-on"><i class="far fa-clock"></i> <a href="#!"><?=$blog->dateofupdation?></a></span></li>
                                    </ul>

                                    <h2>Power of Digital Product Design for Series A Funding</h2>
                                    <p>Financial growth and wealth accumulation are common goals for individuals and businesses alike. However, navigating the complex world of finance, investments, and money management can be challenging. This is where a financial consultant can make a significant difference. Let's explore. </p>
                                    <p>One of the key ways to grow wealth is through investments. Financial consultants are experts in various investment opportunities, from stocks and bonds to real estate and alternative investments. They can guide you in making informed investment decisions based on your financial objectives.</p>

                                    <blockquote>
                                        <p>"Creativity is allowing yourself to make mistakes. You only have to do a few things right in your life so long as you don’t do too many things."</p>
                                        <span>Cameron Williamson</span>
                                        <div class="quote"><img src="<?= base_url('assets/images/b-quote.png') ?>" alt=""></div>
                                    </blockquote>

                                    <p>The phrase "with confidence" signifies that seeking expert guidance can provide you with a sense of assurance and self-assuredness throughout the application journey. It highlights that you're not alone in facing the challenges of the application process.It positions expert guidance as a powerful tool that can significantly impact.</p>
                                    <p>consultants provide continuous support, helping you navigate any additional requests from immigration authorities and addressing any concerns that may arise during the processing period.</p>

                                    <div class="row align-items-center mb-5">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="<?= base_url('assets/images/post_05.jpg') ?>" alt="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <ul class="post__info__list list-unstyled">
                                                <li>Personalized Financial Planning</li>
                                                <li>Expert Investment Strategies</li>
                                                <li>Tax Optimization</li>
                                                <li>Education and Awareness</li>
                                                <li>Long-Term Perspective</li>
                                                <li>Estate Planning</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Design that drives growth: a wellness
                                        app</h3>
                                    <p>consulting is an invaluable resource for anyone navigating the complexities of international travel, work, or family reunification. By enlisting the expertise of consultant, you can save time, reduce stress, and increase your chances of a successful application. Make sure to do your due diligence when choosing a consultant, and you'll be well on your way to realizing your global aspirations.</p>

                                </article> -->


                                <!-- <div class="post__footer">
                                    
                                    <div class="post__tags">
                                        <h5 class="post__footer__title">Tags:</h5>
                                        <span class="tags__links">
                                            <a href="#!" rel="tag">Consulting</a>
                                            <a href="#!" rel="tag">Management</a>
                                            <a href="#!" rel="tag">Data</a>
                                        </span>
                                    </div>

                                    <div class="social__share">
                                        <h5 class="post__footer__title">Share:</h5>
                                        <ul class="post__share list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
        
                                            <li>
                                                <a href="#!">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
        
                                            <li>
                                                <a href="#!">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
        
                                            <li>
                                                <a href="#!">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div> -->

                            </div>

                        </div>



                        <div class="col-lg-4">

                            <div class="blog__sidebar sidebar__area">

                                <div class="widget">
                                    <!-- <h2 class="widget__title">Search</h2>
                                    <form class="widget__search" action="#">
                                        <input type="text" placeholder="Search...">
                                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form> -->
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
                                        <a href="#!"><?=$cat->name?></a>
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