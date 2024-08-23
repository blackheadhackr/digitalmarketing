<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Services</title>
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
                    <h1 class="h2">Services</h1>

                </div>
               <!--
                    =================    dummy page contact from here change title also ==============
                -->
                <div class="container">
                    <!-- <h1 class="text-danger text-center"> DUMMY PAGE :( </h1> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="message"></div>
                            <div class="container">
                                <form id="servicesadd" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="formFileLg" class="form-label">Image<span
                                                class="text-danger">* (img size: 500X500 , 1MB)</span></label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="servicesimage">
                                    </div>
                                    <div class="text-danger img_error"></div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title">
                                        </div><div class="text-danger title_error"></div>
                                    <div class="mb-3">
                                        <label for="sdesc" class="form-label">Short Discription<span
                                                class="text-danger">* (Min - 155chr & max - 160chr)</span></label>
                                        <input type="text" class="form-control" id="sdesc" name="sdesc">
                                    </div><div class="text-danger desc_error"></div>
                                  

                                    
                                    <button type="submit" class="btn btn-primary my-2">Add Blog</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                        <table class="table table-striped table-sm" id="userdata">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Services title</th>
                                    <th scope="col">Discription</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php 
                                $i = 1;
                                    foreach($services_data as $a){
                                    $id = base64_encode($a->id);    
                                    ?>
                                    <tr>
                                    <td><?=$i?></td>
                                    <td><img src="<?=base_url()?>assets/image/services/<?=$a->image?>" alt="<?=$a->image?>" style="width:30%; height:30px;"> </td>
                                    
                                    <td><?=$a->title?></td>
                                    <td class="web-con-message"><p><?=$a->disc?></p></td>
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
            </main>
        </div>
    </div>
    <!-- Model -->
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
                    <div class="message"></div>
                    <div class="container">
                        <div class="image text-center p-4"></div>
                        <form id="servicesupd" enctype="multipart/form-data">
                        <input type="hidden" class="form-control id" name="id">
                            <div class="mb-3">
                                <label for="formFileLg" class="form-label">Image<span
                                        class="text-danger">* (img size: 500X500 , 1MB)</span></label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" name="servicesimage">
                            </div>
                            <div class="text-danger img_error_modl"></div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control title" id="title" name="title">
                                <div class="title_error_modl text-center"></div>
                                
                            <div class="mb-3">
                                <label for="sdesc" class="form-label">Short Discription<span
                                        class="text-danger">* (Min - 155chr & max - 160chr)</span></label>
                                <input type="text" class="form-control disc" id="sdesc" name="sdesc"> 
                                <div class="disc_error_modl text-center"></div>

                            
                            <button type="submit" class="btn btn-primary my-2">Add Blog</button>
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
        //  insert services ---------------------------->         
        $('#servicesadd').on('submit',function(e){
            e.preventDefault();

            $.ajax({
                url : "<?=base_url('services/add_services')?>",
                type:"post",
                data: new FormData(this),
                dataType:"json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success:function(data){
                    if(data.result == 'error'){
                        $('.img_error').html(data.image);
                        $('.title_error').html(data.title);
                        $('.desc_error').html(data.desc);
                    }else{
                        $('.message').html(data.message);
                        $('#servicesadd')[0].reset();
                    }
                }
            })
        });

        //  get specific services ---------------------------->
        $(".edit").on("click",function(e){
            var id = $(this).attr('id');
            $.ajax({
                url: '<?=base_url("services/get_specific_services")?>',
                type: 'post',
                data: {
                    "serid": id
                },
                dataType: 'json',
                success: function(data) {
                    if(data.result == 'success'){
                        $('.image').html(data.img);
                        $('.title').val(data.title);
                        $('.disc').val(data.desc);
                        $('.id').val(data.id);
                    }
                }
            })
        });

        //  Update services ---------------------------->
        $('#servicesupd').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                url : "<?=base_url('services/upd_services')?>",
                type:"post",
                data: new FormData(this),
                dataType:"json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success:function(data){
                    if(data.result == 'error'){
                        $('.img_error_modl').html(data.image);
                        $('.title_error_modl').html(data.title);
                        $('.disc_error_modl').html(data.desc);
                        $('.message').html(data.message);
                    }else{
                        $('.message').html(data.message);
                        $('#servicesupd')[0].reset();
                    }
                }
            })
        });
        //  Delete services ---------------------------->
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
                        url: "<?=base_url('services/del_specific_services')?>",
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