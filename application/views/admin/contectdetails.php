<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Contect</title>
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
                    <div class="subm"></div>
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <div class="subm"></div>
                                <form id="conactform">
                                    <div class="mb-3">
                                        <label for="formFileLg" class="form-label">Address<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" id="formFileLg" type="text" name="Address">
                                    </div>
                                    <div class="addr text-danger"></div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="phone" name="Phone">
                                    </div>
                                    <div class="phon text-danger"></div>
                                    <div class="mb-3">
                                        <label for="mail" class="form-label">Mail<span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="mail" name="Mail">
                                    </div>
                                    <div class="mal text-danger"></div>
                                    <div class="mb-3">
                                        <label for="whatsapp" class="form-label">Whatsapp<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="whatsapp" name="Whatsapp">
                                    </div>
                                    <div class="What text-danger"></div>

                                    <div class="text-danger"><?=form_error('alt')?></div>
                                    <button class="btn btn-primary sub">Add Contact Data</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <!-- <hr> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" id="userdata">
                            <thead class="text-center">

                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Phone No.</th>
                                    <th scope="col">Whatsapp No.</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <?php
                                $i = 1;
                                foreach($cont as $a){?>
                                    <tr>
                                    <td><?=$i?></td>
                                    <td scope="col"><?=$a->address ?></td>
                                    <td scope="col"><?=$a->mail?></td>
                                    <td scope="col"><?=$a->phone?></td>
                                    <td scope="col"><?=$a->whatsapp?></td>
                                    <td>
                                        <a class="btn btn-outline-success edit" id="<?=$a->id?>" data-bs-toggle="modal"
                                            data-bs-target="#myModal"><i class="fa-solid fa-pen-to-square"></i></a>
                                        
                                    </td>
                                </tr>
                              <?php  } ?>
                                
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
                    <h4 class="modal-title">Update contact data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="mrg"></div>
                        <form id="conactform">
                        <input class="form-control" id="iidd" type="hidden" name="id">
                            <div class="mb-3">
                                <label for="formFileLg" class="form-label">Address<span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="formFileLg" type="text" name="Address">
                            </div>
                            <div class="addr text-danger"></div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="phone" name="Phone">
                            </div>
                            <div class="phon text-danger"></div>
                            <div class="mb-3">
                                <label for="mail" class="form-label">Mail<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="mail" name="Mail">
                            </div>
                            <div class="mal text-danger"></div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="whatsapp" name="Whatsapp">
                            </div>
                            <div class="What text-danger"></div>

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
        $('#conactform').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?=base_url("admin/contectdetadd")?>',
                type: 'POST',
                dataType: 'Json',
                data: $("#conactform").serialize(),
                success: function(data) {
                    if(data.result == "error"){
                        // alert("error");
                        $(".addr").html(data.address);
                        $(".phon").html(data.Phone);
                        $(".mal").html(data.Mail);
                        $(".What").html(data.Whatsapp);
                    }else{
                        $(".subm").html(data.message);
                        $('#conactform')[0].reset();
                        $('#myModal').modal('hide');
                    }
                }
            });
        });
    });
    $(document).ready(function(){
        $('.edit').on('click',function(){
           var id = $(this).attr('id');
           $.ajax({
            type: 'POST',
            url: '<?=base_url("admin/getcont")?>',
            data:{"id":id},
            dataType: 'Json',
            success:function(data){
                if(data.result == "success"){
                        // alert("error");
                        $("#formFileLg").val(data.address);
                        $("#phone").val(data.Phone);
                        $("#mail").val(data.Mail);
                        $("#whatsapp").val(data.Whatsapp);
                        $("#iidd").val(data.id);
                    }else{
                        alert(data.message);
                        
                    }

            }
           });
        });
    });
    </script>
</body>

</html>