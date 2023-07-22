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
                    <div class="row align-items-center mx-auto ">

                        <div class="col-lg-5 mx-auto wow fadeIn bg-color" data-wow-delay=".5s">
                            <div class="box-rounded padding40">
                                <h3 class="mb10 text-center">Create an account</h3>
                                <p class="text-center">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint Velit </p>
                                <form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                    <div class="field-set">
                                        <label for="name">Name</label>
                                        <input type='text' name='name' id='name' class="form-control coustom_input1" placeholder="">
                                    </div>
                                    <div class="field-set">
                                        <label for="name">Username</label>
                                        <input type='text' name='Username' id='Username' class="form-control coustom_input1" placeholder="samsmith67">
                                    </div>
                                    <!-- <a><small class="user_name">username</small></a>
                                    <div class="field-set">
                                        <label for="name">Username</label>
                                        <input type='text' name='Username' id='Username' class="form-control custom_user_name" placeholder="samsmith67">
                                    </div>
                                    <a><small class="user_name" style="float:right;">Username is already taken</small></a>
                               -->
                                    <div class="field-set">
                                        <label for="email">Email</label>
                                        <input type='text' name='email' id='email' class="form-control  coustom_input1" placeholder="samsmith67@gmail.com">
                                    </div>

                                    <div class="field-set">
                                        <label for="password">Password</label>
                                        <input type='password' name='password' id="password-field" class="form-control coustom_input1" placeholder="">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password">
                                    </div>

                                    <div class="field-set">
                                        <label for="DOB">DOB</label>
                                        <input type='date' name='DOB' id='DOB' class="form-control coustom_input1" placeholder="">
                                    </div>

                                    <div class="field-set">
                                        <label for="rcode">Referral Code (Optional)</label>
                                        <input type='text' name='rcode' id='rcode' class="form-control coustom_input1 mb-0" placeholder="">
                                    </div>
                                    <a href="#">
                                        <small>Check referral</small>
                                    </a>
                                    <div class="form-check my-3">
                                        <input class="bg-transparent border form-check-input" type="checkbox" value="" id="tnc">
                                        <label class="form-check-label" for="tnc">
                                            I agree to all T&C and Privacy Policy
                                        </label>
                                    </div>
                                    <a href="index.php">
                                        <div class="field-set">
                                            <input type='submit' id='send_message' value='Continue' class=" custom_btn  btn-main btn-fullwidth color-2 py-3 rounded-3">
                                        </div>
                                    </a>

                                    <div class="clearfix"></div>

                                    <div class="spacer-single"></div>

                                    <!-- social icons -->
                                    <ul class="d-flex justify-content-center list s3">
                                        <li>Already have an account?</li>
                                        <li><a href="login.php">Log In</a></li>
                                    </ul>
                                    <!-- social icons close -->
                                </form>
                            </div>
                        </div>
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