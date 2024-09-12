<header>
    <nav class="navbar navbar-expand-lg shadow py-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <div class="navbar__btn" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?= base_url('about-us') ?>">About</a>
                    </li>

                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?= base_url('our-blog') ?>">Blog</a>
                    </li>

                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?= base_url('our-service') ?>">Service</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Design</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Resion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Digital</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact-us') ?>">Contact</a>
                    </li>

                </ul>

                <div class="d-flex">
                    <a href="<?=base_url('contact-us')?>" class="nav__btn">Get in touch</a>
                </div>

            </div>
        </div>
    </nav>

</header>

<!-- <div class="header__img">
    <img alt="lights" decoding="async" src="<?= base_url('assets/images/lights.png') ?>" class="lights">
</div> -->