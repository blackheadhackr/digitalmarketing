<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Catogery</title>
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
                    <h1 class="h2">Add Catogery</h1>

                </div>
                <hr> 
               <!--
                    =================    dummy page contact from here change title also ==============
                -->
                <div class="container">
                <div class="container dashcol">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <?=$this->session->flashdata('addbanner');?>
                                <form id="catgform" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="Catogery1" class="form-label">Catogery<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="Catogery1" name="catg">
                                    </div>
                                    <div class="text-danger er"></div>
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
                                    <th scope="col">Img Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $i = 1;
                                foreach($catg as $a){ ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        
                                        <td><?=$a->name?></td>
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
                </div>
                <hr>
                
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
                        <form id="upcatg">
                            <input type="hidden" name="catid" id="idid">
                            
                            <div class="mb-3">
                                <label for="alter" class="form-label">Category<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="alter" name="category">
                            </div>
                            <div class="text-danger uper"></div>
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
    </script>
    <!-- data insert -->
    <script>
        $(document).ready(function(){
            $('#catgform').on('submit',function(e){
                e.preventDefault();
                var catg = $('#Catogery1').val();
                $.ajax({
                    url: "<?=base_url('welcome/add_catg')?>",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:"json",
                    success: function(data){
                        if(data.result == 'error'){
                            $('.er').html(data.catg);
                            if(data.msg != null){
                                Swal.fire({
                                position: "top-end",
                                icon: "error",
                                title: data.msg,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            }
                        }else{
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: data.msg,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $("#catgform")[0].reset();
                            setTimeout(location.reload.bind(location), 1500);
                        }
                    }
                })
            });
            $(document).on('click','.edit',function(){
                var id = $(this).attr('id');
                $.ajax({
                    url : "<?=base_url('welcome/getsinglecatg')?>",
                    type: "post",
                    data : {'id':id},
                    dataType:"json",
                    success:function(data){
                        if(data.result == 'error'){
                            Swal.fire({
                                position: "top-end",
                                icon: "error",
                                title: data.msg,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }else{
                            $('#idid').val(data.id);
                            $('#alter').val(data.name);
                        }
                    }
                });
            });
            $('#upcatg').on('submit',function(e){
                e.preventDefault();
                var catg = $('#Catogery1').val();
                $.ajax({
                    url: "<?=base_url('welcome/update_catg')?>",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:"json",
                    success: function(data){
                        if(data.result == 'error'){
                            $('.uper').html(data.catg);
                            if(data.msg != null){
                                Swal.fire({
                                position: "top-end",
                                icon: "error",
                                title: data.msg,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            }
                        }else{
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: data.msg,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $("#catgform")[0].reset();
                            setTimeout(location.reload.bind(location), 1600);
                        }
                    }
                })
            });
            $(document).on('click','.delete', function(){
                var id = $(this).attr('id')
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
                            url:"<?=base_url('welcome/delete_catg')?>",
                            type : 'post',
                            dataType:"json",
                            data : {id:id},
                            success:function(data){
                                if(data.result == 'error'){
                                    Swal.fire({
                                    title: "oohh! :)",
                                    text: data.message,
                                    icon: "error"
                                    });
                                }else{
                                    Swal.fire({
                                    title: "Deleted!",
                                    text: data.message,
                                    icon: "success"
                                    });
                                    setTimeout(location.reload.bind(location), 1600);
                                }
                            }
                        });
                    }
                });
            });

        });
    </script>
</body>

</html>