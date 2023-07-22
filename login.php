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

    <section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-lg-5 mx-auto wow fadeIn bg-color" data-wow-delay=".5s">
                            <div class="box-rounded padding40">
                                <img src="img/creatorsgramm_logo.png" alt="" class="logo_new d-flex logo_new mb-3 mx-auto">
                                <h3 class="mb10 text-center">Sign In</h3>
                                <p class="text-center">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint Velit </p>
                                <form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                    <div class="field-set">
                                        <label for="email">Email</label>
                                        <input type='text' name='email' id='email' class="form-control" placeholder="">
                                    </div>

                                    <div class="field-set">
                                        <label for="password">Password</label>
                                        <input type='password' name='password' id='password' class="form-control" placeholder="">
                                    </div>

                                    <div class="field-set">
                                        <input type='submit' id='send_message' value='Login' class="btn btn-main btn-fullwidth color-2 py-3 rounded-3">
                                    </div>
                                    <h5 class="text-center pt-2">or</h5>

                                    <!-- <div class="clearfix"></div> -->

                                    <!-- <div class="spacer-single"></div> -->

                                    <!-- social icons -->
                                    <ul class="d-flex justify-content-center list s3">
                                        <li> <img src="img/twitter-img.png" alt="" class=""></li>
                                        <li><img src="img/fb.png" alt="" class=""></li>
                                    </ul>
                                    <ul class="d-flex justify-content-center list s3 mb-4">
                                        <li>Don’t have an account?</li>
                                        <li><a href="signup.php">Sign Up</a></li>
                                    </ul>
                                    <!-- social icons close -->
                                </form>
                            </div>
                        </div>
                        <div class="chat_div" >
                       <a href="support.php">   <img src="img/Frame 326.png" alt="" class="chat"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- content close -->

<?php include("include/footer.php"); ?>