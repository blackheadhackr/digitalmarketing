<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Dashboard</title>
    <!-- top css file include -->
    <?php $this->load->view('admin/include/head');?>

</head>

<body class="dashboard__page">
    <!-- header include -->
    <?php $this->load->view('admin/include/header')?>
    <div class="container-fluid">
        <div class="row">
            <!-- sidebaar include -->
            <?php $this->load->view('admin/include/sidebar');?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div class="table-responsive dashcol">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                       
                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #4747A1; color:#fff">
                                <h4><a href="<?=base_url('blog')?>" class="text-white text-decoration-none">Total Blog Upload</a></h4>
                                <p><?=count($blog)?> Blog</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #7978E9; color:#fff">
                                <h4><a href="<?=base_url('web-contact-data')?>" class="text-white text-decoration-none">Get Contact Data</a></h4>
                                <p><?=count($web_data)?> Contact</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #F3797E; color:#fff">
                                <h4><a href="<?=base_url('create-user')?>" class="text-white text-decoration-none">Total Admin User </a></h4>
                                <p><?=count($table)?> admin user</p>
                            </div>
                        </div>

                        <!-- secound row card  -->
                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #944E63; color:#fff">
                                <h4> <a href="<?=base_url('gallery')?>" class="text-white text-decoration-none"></a>Portfolio Image</h4>
                                <p><?=count($gallery)?> Portfolio Image</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #CAA6A6;color:#fff">
                            <h4> <a href="<?=base_url('load-catg')?>" class="text-white text-decoration-none">Total Category</a></h4>
                            <p><?=count($catg)?> Category</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #B47B84;color:#fff">
                            <h4> <a href="<?=base_url('services')?>" class="text-white text-decoration-none">Total Services</a></h4>
                            <p><?=count($services_data)?> Services</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #944E63;color:#fff">
                            <h4> <a href="<?=base_url('new-joiner')?>" class="text-white text-decoration-none">Collaboration</a></h4>
                            <p><?=count($joiner)?> Collaboration</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="well h-100" style="background: #7978E9; color:#fff">
                            <h4> <a href="<?=base_url('new-joiner')?>" class="text-white text-decoration-none">Jobs (future)</a></h4>
                            <p><?=count($joiner)?> Jobs</p>
                            </div>
                        </div>
                        <!-- Third row card  -->
                        
                    </div>
                </div>
                
            </main>
        </div>
    </div>

    <!-- footer links include -->
    <?php $this->load->view('admin/include/footerlink')?>
    <script>
    $(document).ready(function() {
    $('#userdata').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
</body>

</html>