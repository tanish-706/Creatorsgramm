<?php include("include/header.php"); ?>
<style>
    header {
        display: none;
    }

    footer {
        display: none;
    }
</style>
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section class="full-height relative no-top no-bottom " data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">

                    <div>
                        <div class="col-lg-5 mx-auto wow fadeIn mt-5 bg-color" data-wow-delay=".5s">

                            <div class="box-rounded padding40 ">
                                <div class="row align-items-center ">
                                    <div class="">
                                        <div class="back_img ms-3 mt-5">
                                            <img src="img/arrow.png" class="img-fluid arrow_hide_img">
                                        </div>
                                        <div class="text-center">
                                            <a href="" class="set-cls">Set new password</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center">Amet minim mollit non deserunt ullamco <br> est sit aliqua dolor do amet sint Velit


                                </p>
                                <div class="mt-5">
                                    <form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                        <div class="field-set">
                                            <label for="email">Email</label>
                                            <input type='text' name='email' id='email' class="form-control " placeholder="******">
                                        </div>

                                        <div class="field-set">
                                            <label for="phone">Phone</label>
                                            <input type='passeword' name='psw' id='psw' class="form-control  input_color" placeholder="******">
                                        </div>


                                    </form>
                                   
                                </div>
                                <a href="password_changed.php" class="">
                                    <div class="field-set mt-5">
                                        <input type='button' id='send_message' value='Confirm' class="  btn-main btn-fullwidth  py-3 rounded-3">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- content close -->

<?php include("include/footer.php"); ?>