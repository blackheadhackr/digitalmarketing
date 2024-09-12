<?php
if ($this->session->userdata('userid') == false) {
  redirect(base_url('login'));
}
?><header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?= base_url('dashbord'); ?>">Welcome <?= $this->session->userdata('username'); ?></a>
  <a class="tgl-btn" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
    aria-expanded="true" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
  </a>
</header>