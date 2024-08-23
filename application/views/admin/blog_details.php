<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Blog Edit</title>
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
                    <h2>Update Blog</h2>

                </div>
                <div class="container dashcol">
                    <div class="seccessdata"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                
                                <form id="update_blog"enctype="multipart/form-data">
                                    <div class="img">
                                        <img src="<?=base_url()?>assets/image/blog_img/<?=$blog->img?>" alt="<?=$blog->img?>" style="width:10%; height:auto;"><span>Your current Image</span>
                                    </div>
                                    <input type="hidden" name="id" value="<?=$blog->id?>">
                                    <div class="mb-3">
                                        <label for="formFileLg" class="form-label">Image<span
                                                class="text-danger">* (img size: 750X750 , 1MB)</span></label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="blogimg">
                                    </div>
                                    <div class="text-danger imgerror"></div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" value="<?=$blog->title?>" name="title">
                                        </div><div class="text-danger"><?= form_error('title');?></div>
                                    <div class="mb-3">
                                        <label for="sdesc" class="form-label">Short Discription<span
                                                class="text-danger">* (max 155 char. to 160 char.)</span></label>
                                        <input type="text" class="form-control" id="sdesc"  value="<?=$blog->desc?>" name="sdesc">
                                    </div><div class="text-danger"><?=form_error('sdesc');?></div>
                                  

                                    <div class="form-group">
                                        <label for="editor">Discription <span class="text-danger">*</span></label>
                                        <textarea class="form-control ckeditor" id="editor"  name="desc" rows="10"
                                            placeholder="Meta Description"><?=$blog->content?></textarea>
                                    </div>
                                    <div class="text-danger"><?=form_error('desc');?></div>
                                    <button type="submit" class="btn btn-primary my-2">Update Blog</button>
                                </form>
                            </div>
                        </div>
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
        $("#update_blog").on("submit", function(e){
            e.preventDefault();

            $.ajax({
                url:"<?=base_url('blog/update_blog')?>",
                type:"post",
                dataType:"json",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success:function(data){
                    if(data.result == "success"){
                       alert("your data is updated successfully");
                        top.location.href="<?=base_url('blog')?>";
                    }else{
                       $(".imgerror").html(data.error);
                    }
                }
            });
        });
    });
    
    </script>
</body>

</html>