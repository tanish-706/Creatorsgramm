<!--  -->
<?php include("include/header2.php"); ?>
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

    <section class="   full-height relative  " data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                    <div class="row align-items-center mx-auto ">

                        <div class="col-lg-12 mx-auto wow fadeIn bg-color" data-wow-delay=".5s">
                            <div class="box-rounded padding40 paading_new">

                                <div class="row">
                                    <div class="heading_name">
                                        <span class="mb10  change_name ">Password</span>
                                        <p class="text-start mt-5"> Amet minim mollit non deserunt ullamco est <br> sit aliqua dolor do amet sint. Velit officia</p>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <form name="" id='' class="form-border mt-3" method="post" action=''>

                                                <div class="field-set">
                                                    <label for="name">Current Password</label>
                                                    <input type="password" id="pwd" name="pwd" class="form-control coustom_input1" placeholder="">
                                                </div>
                                                <div class="field-set">
                                                    <label for="name">New Password</label>
                                                    <input type="password" id="pwd2" name="pwd2" class="form-control coustom_input1" placeholder="">
                                                </div>
                                                <div class="field-set">
                                                    <label for="name">Confirm New Password</label>
                                                    <input type="password" id="pwd3" name="pwd3" class="form-control coustom_input1" placeholder="">
                                                </div>
                                                <a href="change_password.php" class="">
                                                    <div class="field-set mb-5">
                                                        <input type='' id='send_message' value='Save Changes' class="btn all-btn-width  btn-main btn-fullwidth color-2 py-3 rounded-3">
                                                    </div>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- </div> -->
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