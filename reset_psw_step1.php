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

                 
                        <div class="col-lg-5 mx-auto wow fadeIn mt-5 bg-color" data-wow-delay=".5s">

                            <div class="box-rounded padding40 ">
                                <div class="row align-items-center ">
                                    
                                        <div class="back_img ms-3 mt-5">
                                            <img src="img/arrow.png" class="img-fluid arrow_hide_img">
                                        </div>
                                        <div class="text-center mt-4">
                                            <span class="forgot1">Forgot Password</span>
                                        </div>
                                        <div class="back_img  text-center mt-5">
                                            <img src="img/eye_img.png" class="img-fluid">
                                        </div>
                                        <div class="text-center mt-5">
                                            <span href="" class="set-cls ">Reset Password</span>

                                        </div>
                                  
                                </div>
                                <div class="fix-content">
                                    <p class="text-center ">Please, check your email.<br>
                                        We have sent you a reset password link to
                                    </p>


                                    <p class="text-center email">samsmith67@gmail.com</p>
                                </div>

                                <a href="reset_password.php" class="">
                                    <div class="field-set mt-5">
                                        <input type='button' id='send_message' value='Open mail box' class=" position_fixed_btn mx-auto btn-main btn-fullwidth  py-3 rounded-3">
                                    </div>
                                </a>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>
    </section>

</div>
<!-- content close -->

<?php include("include/footer.php"); ?>