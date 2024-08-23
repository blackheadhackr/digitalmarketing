<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Add Blog</title>
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
                    <h2>Add Blog</h2>

                </div>
                <div class="container dashcol">
                    <?= $this->session->flashdata('blogmsg')?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <?=$this->session->flashdata('addbanner');?>
                                <form action="<?=base_url('blog/add_blog')?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="formFileLg" class="form-label">Image<span
                                                class="text-danger">* (img size: 750X750 , 1MB)</span></label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="blogimg">
                                    </div>
                                    <div class="text-danger"><?=$this->upload->display_errors();?></div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title">
                                        </div><div class="text-danger"><?= form_error('title');?></div>
                                    <div class="mb-3">
                                        <label for="sdesc" class="form-label">Short Discription<span
                                                class="text-danger">* (max 155 char. to 160 char.)</span></label>
                                        <input type="text" class="form-control" id="sdesc" name="sdesc">
                                    </div><div class="text-danger"><?=form_error('sdesc');?></div>
                                  

                                    <div class="form-group">
                                        <label for="editor">Discription <span class="text-danger">*</span></label>
                                        <textarea class="form-control ckeditor" id="editor" name="desc" rows="10"
                                            placeholder="Meta Description"></textarea>
                                    </div>
                                    <div class="text-danger"><?=form_error('desc');?></div>
                                    <button type="submit" class="btn btn-primary my-2">Add Blog</button>
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Img Name</th>
                                    <th scope="col">blog title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php 
                                $i = 1;
                                    foreach($blog as $a){
                                    $id = base64_encode($a->id);    
                                    ?>
                                    <tr>
                                    <td><?=$i?></td>
                                    <td><img src="<?=base_url()?>assets/image/blog_img/<?=$a->img?>" alt="<?=$a->img?>" style="width:30%; height:30px;"> </td>
                                    <td><?=$a->img?></td>
                                    <td><?=$a->title?></td>
                                    <td>
                                        <a href="<?=base_url('blog-details/'.$id)?>" class="btn btn-outline-success edit"><i class="fa-solid fa-pen-to-square"></i></a>
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

   

    <!-- footer links include -->
    <?php $this->load->view('admin/include/footerlink')?>
    <?php $this->load->view('admin/include/CKeditor')?>
   

    
    <script>
    $(document).ready(function() {
        $('#userdata').DataTable();
    });
    
    $(document).ready(function() {
        $(".delete").on('click',function(){
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
                    url:"<?=base_url('blog/deleteblog')?>",
                    type:"post",
                    dataType:"json",
                    data:{"id":id},
                    success:function(data){
                        if(data.result == "success"){
                            // $(this).closest("tr").hide();
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                                });
                            setTimeout(function() { location.reload(); }, 800);
                            
                        }else{
                            alert("error");
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