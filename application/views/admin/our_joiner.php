<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3"> 
    <title>Sanatan sewadaar - Our Joiner</title>
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
                    <h1 class="h2">Dashboard</h1>

                </div>
                
               <!--
                    =================    dummy page contact from here change title also ==============
                -->
                <div class="container">
                <div class="table-responsive">
                        <table class="table table-striped table-sm" id="userdata">
                            <thead class="text-center">

                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Home no.</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">City</th>
                                    <th scope="col">State</th>
                                    <th scope="col">Zipcode</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">I'd proof</th>
                                    <th scope="col">Religion</th>
                                    <!-- <th scope="col">Action</th> -->

                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php 
                                $i = 1;
                                foreach($joiner as $a){?>

                                <tr>
                                    <td scope="col"><?=$i?></td>
                                    <td scope="col"><?=$a->fname?></td>
                                    <td scope="col"><?=$a->email?></td>
                                    <td scope="col"><?=$a->phone?></td>
                                    <td scope="col"><?=$a->DOB?></td>
                                    <td scope="col"><?=$a->gender?></td>
                                    <td scope="col"><?=$a->address?></td>
                                    <td scope="col"><?=$a->address1?></td>
                                    <td scope="col"><?=$a->city?></td>
                                    <td scope="col"><?=$a->state?></td>
                                    <td scope="col"><?=$a->zipcode?></td>
                                    <td scope="col"><?=$a->country?></td>
                                    <td scope="col"><?=$a->idproof?></td>
                                    <td scope="col"><?=$a->religion?></td>
                                    <!-- <td scope="col"style="display:flex;">
                                        <a class="btn btn-success edit" data-bs-toggle="modal" data-bs-target="#myModal"
                                            id="<?=$a->id;?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        /
                                        <a class="btn btn-danger delete" id="<?=$a->id?>"><i
                                                class="fa-solid fa-trash-can"></i></a>
                                    </td> -->
                                </tr>
                                <?php $i++; } ?>


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