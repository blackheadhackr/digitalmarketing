<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--==================== ALL LINK/CDN ====================-->

    <?php $this->load->view('include/headlink') ?>

</head>

<body>

    <!--==================== HEADER SECTION ====================-->

    <?php $this->load->view('include/header') ?>


    <main>

        <!--==================== CONTACT HEAD SECTION ====================-->

        <section class="page__head">

            <div class="page__head__inner py-5">

                <div class="container text-center mt-5 mb-5">

                    <div class="page__heading">
                        <h2>Contact us</h2>
                    </div>

                    <div class="page_breadcrumb">
                        <p><a href="<?= base_url() ?>">Home</a> | <span>Contact Us</span> </p>
                    </div>

                </div>

            </div>


        </section>


        <!--==================== CONTACT BODY SECTION ====================-->

        <section class="contact py-5">
            <div class="contact__inner">
                <div class="container">

                    <div class="row mt-5 mb-5">
                        <div class="section__title pb-5">
                            <h3 class="title">WE CREATE DIGITAL <br> <span>SOLUTIONS</span></h3>
                        </div>
                        <ul class="contact__location">
                            <li>
                                <h3>Location</h3><span><?=$condta->address?></span>
                            </li>
                            <li class="text__lowercase">
                                <h3>Contact</h3><span> <a href="mailto:"><?=$condta->mail?></a> , <a href="tel:+"><?=$condta->phone?></a></span>
                            </li>
                            <li>
                                <h3>Social</h3><span><a href="#">Instagram</a> <a href="#">Behance</a> <a href="#">Dribbble</a> <a href="#">Facebook</a> <a href="#">Twitter</a></span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">

                        <div class="section__title contact__title mb-5">
                            <span class="sub__title">Share your creative ideas with us and <br>
                                get back designs that impres <br>
                                and engage</span>
                        </div>

                        <div class="contact__form__inner">
                            <form class="contact__form" id="cont_form">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="item__field" id="fullname">
                                            <label for="name">Your Name</label>
                                            <input id="name" name="name" type="text" placeholder="Goutam Rana">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="item__field" id="Email">
                                            <label for="mail">Email</label>
                                            <input id="mail" name="email" type="text" placeholder="dheetdev@gmail.com">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="item__field" id="Contact">
                                            <label for="number">Contact</label>
                                            <input id="number" name="number" type="text" placeholder="+91 0000 000 000">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="item__field" id="Company">
                                            <label for="service">Company</label>
                                            <input id="service" name="service" type="text" placeholder="JokesPoint Digital Solutions">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="item__field item__textarea" id="message">
                                            <label for="message">Your message</label>
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Hello need your support......."></textarea>
                                        </div>

                                        <button type="submit" class="circle__btn port__btn">
                                            <span class="button__bg"></span>Send
                                        </button>
                                    </div>

                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </section>



    </main>

    <!--=============== SCROLL TOP SECTION ===============-->
    <div class="scroll__top__button">
        <a href="#" class="scroll__top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>

    <!--==================== FOOTER SECTION ====================-->

    <?php $this->load->view('include/footer') ?>
    <?php $this->load->view('include/footlink') ?>


    <!--==================== CONTACT VALIDATION SCRIPT ====================-->

    <script>
        $(document).ready(function() {
            $('#cont_form').on('submit', function(e) {
                e.preventDefault();
                // var a = $('#cont_form').serialize();
                // alert(a);
                $.ajax({
                    url: "<?= base_url('Web_contact/addcontact') ?>",
                    type: "post",
                    data: $('#cont_form').serialize(),
                    dataType: "json",
                    success: function(data) {
                        if (data.result == "error") {
                            if (data.name != "") {
                                $("#fullname").css({
                                    "border-bottom": "1px solid red"
                                });
                            } else {
                                $("#fullname").css({
                                    "border-bottom": "1px solid rgba(255, 255, 255, .18)"
                                });
                            }
                            if (data.email != "") {
                                $("#Email").css({
                                    "border-bottom": "1px solid red"
                                });
                            } else {
                                $("#Email").css({
                                    "border-bottom": "1px solid rgba(255, 255, 255, .18)"
                                });
                            }
                            if (data.number != "") {
                                $("#Contact").css({
                                    "border-bottom": "1px solid red"
                                });
                            } else {
                                $("#Contact").css({
                                    "border-bottom": "1px solid rgba(255, 255, 255, .18)"
                                });
                            }
                            if (data.service != "") {
                                $("#Company").css({
                                    "border-bottom": "1px solid red"
                                });
                            } else {
                                $("#Company").css({
                                    "border-bottom": "1px solid rgba(255, 255, 255, .18)"
                                });
                            }
                            if (data.message != "") {
                                $("#message").css({
                                    "border-bottom": "1px solid red"
                                });
                            } else {
                                $("#message").css({
                                    "border-bottom": "1px solid rgba(255, 255, 255, .18)"
                                });
                            }
                        } else {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: data.message,
                                showConfirmButton: false,
                                timer: 2000
                            });
                            $(".item__field").css({
                                "border-bottom": "1px solid rgba(255, 255, 255, .18)"
                            });
                            $('#cont_form')[0].reset();
                        }
                    }
                })
            })

        })
    </script>

</body>

</html>