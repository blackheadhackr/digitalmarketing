<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark text-light sidebar collapse"
    style="position:fixed;height:100vh">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('dashbord')?>"> <i class="fa-solid fa-house-chimney"></i> Dashboard </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('update-banner')?>">
                    <i class="fa-solid fa-image"></i> Add Banner
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Contact')?>">
                    <i class="fa-solid fa-address-card"></i>Contact Details
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('blog')?>"><i class="fa-solid fa-blog"></i>
                    Blog Page
                </a>
            </li>
        <?php if($this->session->userdata('usertype') == 'admin' || $this->session->userdata('usertype') == 'super admin') { ?> 
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('web-contact-data')?>"><i class="fa-regular fa-clipboard"></i>
                    Contect Data
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('New-Joiner')?>"><i class="fa-solid fa-person-harassing"></i>
                    Join Data
                </a>
            </li>
        <?php } ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('gallery')?>"><i class="fa-solid fa-icons"></i>
                    Image Gallery
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('services')?>"><i class="fa-solid fa-screwdriver-wrench"></i>
                service
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Last quarter
                </a>
            </li>
            <?php if($this->session->userdata('usertype') == 'admin' || $this->session->userdata('usertype') == 'super admin') { ?> 
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('create-user')?>"><i class="fa-solid fa-user-plus"></i>
                    Add User
                </a>
            </li>
            <?php }?>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Login_admin/logout')?>"><i class="fa-solid fa-right-from-bracket"></i>
                    logout
                </a>
            </li>
        </ul>
    </div>
</nav>