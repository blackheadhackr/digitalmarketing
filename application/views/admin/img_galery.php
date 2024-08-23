<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Gallery</title>
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
                    <h2>Image Gellery</h2>

                </div>
                <div class="container dashcol">
                    <div class="row">
                        <div class="messase"></div>
                        <div class="col-sm-12">
                            <div class="container">
                                <form id="gellery" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="formFileLg" class="form-label">Select Banner Image<span
                                                class="text-danger">* (max - 1MB)</span></label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file"
                                            name="image">
                                    </div>
                                    <div class="text-danger imgage"></div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Image alt. Title<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="title">
                                    </div>
                                    <div class="text-danger title"></div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Img Alt. Tag<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="alt">
                                    </div>
                                    <div class="text-danger alt"></div>
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
                                    <th scope="col">Title</th>
                                    <th scope="col">Alternate</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php 
                                    $i = 1;
                                    foreach($gallery as $a){ ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><img src="<?=base_url()?>assets/image/gallery/<?=$a->img?>" alt="<?=$a->alt?>"
                                            style="width:30%; height:30px;"></td>
                                    <td><?=$a->title?></td>
                                    <td><?=$a->alt?></td>
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
    <!-- ----------------------model -------------------------  -->
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
                        <div class="galimg  text-center"></div>
                        <div class="up_message"></div>
                        <form id="up_gellery" enctype="multipart/form-data">
                        <input class="form-control form-control-lg idid" id="formFileLg" type="hidden" name="id2">
                            <div class="mb-3">
                                <label for="formFileLg" class="form-label">Select Banner Image<span
                                        class="text-danger">* (max - 1MB)</span></label>
                                <input class="form-control form-control-lg " id="formFileLg" type="file" name="image">
                            </div>
                            <div class="text-danger up_imgage"></div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Image Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control titlesas" id="exampleInputPassword1" name="title">
                            </div>
                            <div class="text-danger up_title"></div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Img Alt. Tag<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control alssas" id="exampleInputPassword1" name="alt">
                            </div>
                            <div class="text-danger up_alt"></div>
                            <button type="submit" class="btn btn-primary">Add Banner</button>
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
        $('#userdata').DataTable()
    });
    </script>
    <script>
        $(document).ready(function(){
            /* image insert in database */
                $('#gellery').submit(function(e) {
                    e.preventDefault();
                    // alert("hello bhai");
                    $.ajax({
                        url: '<?=base_url("allimg/gallery_img")?>',
                        type: "post",
                        dataType: 'json',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        success: function(data) {
                            if (data.result == "success") {
                                $(".messase").html(data.message);
                                $('#gellery')[0].reset();
                            } else {
                                $(".title").html(data.title);
                                $(".alt").html(data.alt);
                                $(".imgage").html(data.img_error);
                                $(".messase").html(data.message);
                            }
            
                        }
                    });
                });
            /* image Delete in database */
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
                                url: "<?=base_url('Allimg/gellery_delete')?>",
                                type: "post",
                                dataType: "json",
                                data: {
                                    "id": id
                                },
                                success: function(data) {
                                    if (data.result == "success") {
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
                });
            /* image get perticular in database */
                $('.edit').on('click',function(){
                    var id = $(this).attr('id');
                    $.ajax({
                        url : '<?=base_url("Allimg/get_single_image")?>',
                        type:'post',
                        data:{"id":id},
                        dataType:'json',
                        success:function(data){
                            if(data.result == 'success'){
                                $('.galimg').html(data.img);
                                $('.titlesas').val(data.title);
                                $('.alssas').val(data.alt);
                                $('.idid').val(data.id);
                            }else{
                                alert('error');

                            }
                        }
                    })
                });
            /* image Update perticular in database */
                $('#up_gellery').on('submit',function(e){
                    e.preventDefault();
                    $.ajax({
                        url: '<?=base_url("allimg/up_gallery_img")?>',
                        type: "post",
                        dataType: 'json',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        success: function(data) {
                            if (data.result == "success") {
                                $(".up_message").html(data.message);
                                $('#up_gellery')[0].reset();
                                // setTimeout(function() { location.reload(); }, 800);
                            } else {
                                $(".up_title").html(data.title);
                                $(".up_alt").html(data.alt);
                                $(".up_message").html(data.message);
                            }
                        }
                    });
                });
        });
    </script>
</body>

</html>