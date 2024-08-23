<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Web Contact</title>
    <!-- top css file include -->
    <?php $this->load->view('admin/include/head');?>

</head>

<body>
    <!-- header include -->
    <?php $this->load->view('admin/include/header')?>
    <div class="container-fluid">
        <div class="row">
            <!-- sidebaar include -->
            <?php $this->load->view('admin/include/sidebar');?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Web Contact Data </h1>

                </div> 
                <!-- 
                    =================    dummy page contact from here ==============
                -->
                <div class="table-responsive dashcol">
                <h1 class="text-center">ALL DATA</h1>
                <hr>
                <div class="table-responsive">
                    <table id="userdata" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Service</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                foreach($web_data as $a){?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$a->firstname?></td>
                                        <td><?=$a->email?></td>
                                        <td><?=$a->phone?></td>
                                        <td><?=$a->service?></td>
                                        <td class="web-con-message"><p><?=$a->message?></p></td>
                                        <td><?=$a->date?></td>

                                    </tr>
                               <?php $i++; }
                            ?>
                            
                            
                        </tbody>
                    </table>
                </div>
                </div>
                <hr>
                
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