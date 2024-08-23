<!doctype html>
<html lang="en">

<head>
    
    <title>Signin</title>

    <!-- top css file include -->
    <?php $this->load->view('admin/include/head');?>
    


    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 530px;
            padding: 15px;
            margin: auto;
        }

        .sub {
            background: #ff5a1e;
            color: #fff;
            opacity: 0.7;
            transition: 0.3s ease-in-out;
        }

        .sub:hover {
            opacity: 1;
            color: #fff;
        }
        .inp:focus {
            outline:none !important;
            box-shadow:none !important;
        }
        .sub:focus {
            outline:none !important;
            box-shadow:none !important;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

      
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body >

    <main class="form-signin">
        <form id="login">
            <div class="text-center">
                <img class="mb-4" src="<?=base_url('assets/image/icon/log.png')?>" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal">Enter Username and Password</h1>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control inp" id="floatingInput" name="username" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
            </div>
            <div class="uname text-danger mx-3"></div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control inp" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="upass text-danger mx-3"></div>


            </div>
            <button class="w-100 btn btn-lg sub" type="submit">Sign in</button>
            <div class="upmsg text-danger my-3"></div>
            <p class="mt-5 mb-3 text-muted text-center">&copy; parasparivaar - 2017 </p>
        </form>
    </main>



    <!-- footer links include -->
    <?php $this->load->view('admin/include/footerlink')?>
<script>
    
    $(document).ready(function(){
        $('#login').on("submit",function(e){
            e.preventDefault();
            $.ajax({
                url:"<?=base_url('login_admin/login')?>",
                type:"POST",
                data:$(this).serialize(),
                dataType:"json",
                success:function(data){
                   if(data.result == "success"){
                    top.location.href="<?=base_url('dashbord')?>";
                   }else{
                    $('.uname').html(data.username);
                    $('.upass').html(data.password);
                    $('.upmsg').html(data.message);
                   }
                }
            });
        });
    });
</script>
</body>

</html>