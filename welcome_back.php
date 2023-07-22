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

    <section class="full-height relative no-top no-bottom"  data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                <div class="row align-items-center mx-auto ">
                        <div class="col-lg-5 mx-auto wow fadeIn bg-color mt-5" data-wow-delay=".5s">
                            <div class="box-rounded padding40 ">
                             
                                <h3 class="mb10 text-center">Welcome Back!</h3>
                                <p class="text-center">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint Velit </p>
                                <form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                    <div class="field-set">
                                        <label for="email">Email</label>
                                        <input type='text' name='email' id='email' class="form-control coustom_input1" placeholder="">
                                    </div>

                                    <div class="field-set">
                                        <label for="password">Password</label>
                                        <input type='password' name='password' id="password-field"  class="form-control coustom_input1"  placeholder="">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>

                                    <div class="field-set">
                                        <input type='submit' id='send_message' value='Login' class=" custom_btn btn btn-main btn-fullwidth color-2 py-3 rounded-3">
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
                        </div>
                        <div class="chat_div" >
                       <a href="support.php">   <img src="img/Frame 326.png" alt="" class="chat"></a>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>

</div>
<!-- content close -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
    $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>

<?php include("include/footer.php"); ?>