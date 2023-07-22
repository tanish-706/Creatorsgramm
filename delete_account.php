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

    <section class="full-height relative " data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">


                    <div class="col-lg-5 mx-auto wow fadeIn mt-3  bg-color" data-wow-delay=".5s">
                        <div class="box-rounded padding40">
                            <div class="row align-items-center ">
                                <!-- <div class="">
									<div class="back_img  mt-5 ms-3">
										<img src="img/arrow.png" class="img-fluid arrow_hide_img">
									</div>
								</div> -->
                            </div>
                            <h3 class="mb10 text-center mt-4 change_name">Delete Account</h3>

                            <form>
                                <div class="field-set mb-3 mt-4">
                                    <label for="">Select Reason</label>
                                    <select class="form-select coustom_input1" aria-label="Default select example">
                                        <option selected>Lorem Ipsum</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="field-set">
                                    <label for="name">Enter Password</label>
                                    <input type="password" id="pwd" name="pwd" class="form-control coustom_input1" placeholder="">
                                </div>
                                <div class="desc mt-4">
                                    <p>
                                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                    </p>
                                </div>
                                <a href="deactivate_account.php" class="">
                                    <div class="field-set">
                                        <input type='' id='send_message' value='Deactivate your account' class="btn  btn-main btn-fullwidth color-2 py-3 rounded-3">
                                    </div>
                                </a>
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

<?php include("include/footer.php"); ?>