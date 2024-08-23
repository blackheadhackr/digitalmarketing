<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Add Banner</title>
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
                    <h2>Upload Banner</h2>

                </div>
                <div class="container dashcol">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <?=$this->session->flashdata('addbanner');?>
                                <form action="<?=base_url('allimg/banneradd')?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="formFileLg" class="form-label">Select Banner Image<span
                                                class="text-danger">* (size = w=1500, h=500, 1MB)</span></label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file"
                                            name="banner">
                                    </div>
                                    <div class="text-danger"><?=$this->upload->display_errors();?></div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Img alt. text<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="alt">
                                    </div>
                                    <div class="text-danger"><?=form_error('alt')?></div>
                                    <button type="submit" class="btn btn-primary">Add Banner</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" id="userdata">
                            <thead class="text-center">

                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">Img Name</th>
                                    <th scope="col">Alternate</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php 
                                    $i = 1;
                                    foreach($banner as $a){ ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><img src="<?=base_url()?>assets/image/banner/<?=$a->img?>"
                                            alt="<?=$a->alternate?>" style="width:30%; height:30px;"></td>
                                    <td><?=$a->img?></td>
                                    <td><?=$a->alternate?></td>
                                    <td>
                                        <a class="btn btn-outline-success edit" id="<?=$a->id?>" data-bs-toggle="modal"
                                            data-bs-target="#myModal"><i class="fa-solid fa-pen-to-square"></i></a>
                                        /
                                        <a class="btn btn-outline-danger delete" id="<?=$a->id?>"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </main>
        </div>
    </div>
    <!-- model alert -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Banner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="mrg text-center color-success"></div>
                        <form id="upban" enctype="multipart/form-data">
                            <input type="hidden" name="banid" id="idid">
                            <div class="mb-3">
                                <label for="formFileLg" class="form-label">Select Banner Image<span
                                        class="text-danger">* (size = w=1500, h=500, 1MB)</span></label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" name="banner">
                            </div>
                            <div class="uper text-danger"></div>
                            <div class="mb-3">
                                <label for="alter" class="form-label">Img alt. text<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="alter" name="alt">
                            </div>
                            <div class="alter text-danger"></div>
                            <button class="btn btn-primary subm">Add Banner</button>
                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- footer links include -->
    <?php $this->load->view('admin/include/footerlink')?>
    <script>
    $(document).ready(function() {
        $('#userdata').DataTable();
    });
    $(document).ready(function() {
        $('.edit').on('click', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: '<?=base_url("allimg/getban")?>',
                type: 'post',
                data: {
                    "banid": id
                },
                dataType: 'json',
                success: function(data) {
                    $('.img').html(data.img);
                    $('#alter').val(data.alt);
                    $('#idid').val(data.id);
                }
            });
        });

        $('#upban').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?=base_url("allimg/upban")?>',
                type: "post",
                dataType: 'json',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    if (data.result == "success") {
                        $(".mrg").html(data.massage);
                    } else {
                        $(".uper").html(data.massage);
                        $(".alter").html(data.maassage);
                    }

                }
            });
        });

        $('.delete').on('click', function() {
            var id = $(this).attr('id');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?=base_url('Allimg/del_banner')?>",
                        type: "post",
                        dataType: "json",
                        data: {
                            "id": id
                        },
                        success: function(data) {
                            if (data.result == "success") {
                                // $(this).closest("tr").hide();
                                Swal.fire({
                                    title: "Deleted!",
                                    text: data.result,
                                    icon: "success"
                                });
                                setTimeout(function() {
                                    location.reload();
                                }, 800);

                            } else {
                                alert("error");
                            }
                        }
                    });


                }
            });
        })
    });
    </script>
</body>

</html>