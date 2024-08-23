<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Add Banner</title>
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
                    <h2>Contact Details</h2>

                </div>
                <div class="container dashcol">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <div class="subm text-success"></div>
                                <div class="submz text-danger"></div>
                                <form id="adduser">
                                    <div class="mb-3">
                                        <label for="formFileLg" class="form-label">Username<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" id="formFileLg" type="text" name="username">
                                    </div>
                                    <div class="name text-danger"></div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Password<span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="phone" name="password">
                                    </div>
                                    <div class="pass text-danger"></div>
                                    <div class="mb-3">
                                        <label for="mail" class="form-label">select user<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" aria-label="Default select example" name="usertype">
                                            <option value="" selected>Select</option>
                                            <option value="user">Make a User</option>
                                            <option value="admin">Make a Admin</option>

                                        </select>
                                    </div>
                                    <div class="user text-danger"></div>

                                    <div class="text-danger"><?=form_error('alt')?></div>
                                    <button class="btn btn-primary sub">Add Contact Data</button>
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
                                    <th scope="col">username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Admin Type</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php 
                                $i = 1;
                                foreach($table as $a){
                                   $pass= base64_encode($a->password);
                                   if($a->user_type == 'super admin'){
                                    
                                   }else{

                                   
                                    ?>

                                <tr>
                                    <td scope="col"><?=$i?></td>
                                    <td scope="col"><?=$a->username?></td>
                                    <td scope="col"><?=$pass?></td>
                                    <td scope="col"><?=$a->user_type?></td>
                                    <td scope="col">
                                        <a class="btn btn-success edit" data-bs-toggle="modal" data-bs-target="#myModal"
                                            id="<?=$a->id;?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        /
                                        <a class="btn btn-danger delete" id="<?=$a->id?>"><i
                                                class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; } } ?>


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
                    <h4 class="modal-title">Update user data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="mrg text-center color-success"></div>
                        <form id="update_user">
                        <input class="form-control" id="u_id" type="hidden" name="id">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username<span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="username" type="text" name="username">
                            </div>
                            <div class="uname text-danger"></div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="upass text-danger"></div>
                            <div class="mb-3">
                                <label for="mail" class="form-label">select user<span
                                        class="text-danger">*</span></label>
                                <select class="form-select ssss" aria-label="Default select example" name="usertype">
                                    <option value="" id="u_type"selected>Select</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>

                                </select>
                            </div>
                            <div class="usert text-danger"></div>

                            <div class="text-danger"><?=form_error('alt')?></div>
                            <button class="btn btn-primary sub">Add Contact Data</button>
                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger clc" data-bs-dismiss="modal">Close</button>
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
        $('#adduser').on('submit', function(e) {
            e.preventDefault();
            // var form = $(this).serialize();
            $.ajax({
                url: "<?=base_url('Login_admin/add_user')?>",
                type: 'POST',
                dataType: 'json',
                data: $(this).serialize(),
                success: function(data) {
                    if (data.result == "success") {
                        $('.subm').html(data.message);
                        setTimeout(function() { location.reload(); }, 800);
                    } else {
                        $('.name').html(data.username);
                        $('.pass').html(data.password);
                        $('.user').html(data.usertype);
                        $('.submz').html(data.message);

                    }
                }
            });
        });
        $(".edit").on('click', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: "<?=base_url('Login_admin/get_user_det')?>",
                type: 'POST',
                dataType: 'json',
                data: {
                    "id": id
                },
                success: function(data) {
                    if (data.result == "success") {
                        $('#username').val(data.uname);
                        $('#u_id').val(data.id);
                        $('#password').val(data.pass);
                        $('.ssss').val(data.u_type);
                    } else {
                        alert('nhi mila bhai');

                    }
                }
            });
        });
        $('#update_user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?=base_url('Login_admin/update_user')?>",
                type: 'POST',
                dataType: 'json',
                data: $(this).serialize(),
                success: function(data) {
                    if (data.result == "success") {
                        $('.mrg').html(data.message);
                    } else {
                        $('.uname').html(data.username);
                        $('.upass').html(data.password);
                        $('.usert').html(data.usertype);
                        $('.mrg').html(data.message);

                    }
                }
            });
        });
        $(".delete").on('click',function(){
           var id = $(this).attr('id');
           Swal.fire({
            title: "Are you sure?",
            text: "Are you sure you want to delete is ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"<?=base_url('Login_admin/delete_user')?>",
                    type:"post",
                    dataType:"json",
                    data:{"id":id},
                    success:function(data){
                        if(data.result == "success"){
                            // $(this).closest("tr").hide();
                            Swal.fire({
                                title: "Deleted!",
                                text: data.message,
                                icon: "success"
                                });
                            setTimeout(function() { location.reload(); }, 800);
                            
                        }else{
                            $(".mrg").html(data.message);
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