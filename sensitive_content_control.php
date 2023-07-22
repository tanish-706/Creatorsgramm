<?php include("include/header2.php"); ?>
<style>
    footer {
        display: none;
    }
</style>
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section class="full-height relative section_new" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">


                    <div class="col-lg-12 mx-auto wow fadeIn bg-color" data-wow-delay=".5s">
                        <div class="box-rounded padding40">

                            <div class="mb-4 main_heading_name heading_name">
                                <h3 class="mb10   change_name">Sensitive Content Control</h3>
                            </div>


                            <div class="account account_new px-2 mt-2 pb-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div>
                                        <span class="info_details">Choose amount of blur on sensitive content</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="img/sensitive1.png" class="img-fluid">
                                </div>

                            </div>
                            <div class="account account_new mt-4 px-2 pb-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div>
                                        <span class="info_details">Message content blur</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="img/sensitive1.png" class="img-fluid">
                                </div>

                            </div>
                            <!-- <button type="submit" class="follow_button div_button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<!-- modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="d-flex justify-content-center modal-dialog modal-dialog-centered">
        <div class="modal-content sensitive_content-modal">
            <div class="modal-header modal_section pt-4 account_new1">
                <div class="logo_sensitive d-flex justify-content-center pt-1 mb-3">
                    <img src="img/sensitive_logo.png" class="img-fluid">
                </div>
                <h5 class="modal-title noti_h6 modal_head head_sens" id="exampleModalLabel">Possible Age Restricted Content</h5>
                <!-- <button type="button" class="btn-close modal_close_btn" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>

            <div class="modal-body div_mod">

                <p>This website (C-Gramm) contains age-restricted content. If you are under the age of 18 years or under the age of majority in the location from where you are accessing this website, you do not have authorization or permission to enter this website or access any of its content. If you are over the age of 18 years or over the age of majority in the location from where you are accessing this website by entering the website you hereby agree to comply with the C-Gramm Terms of Service.
                    By clicking on the "Enter" button, and by entering this website you agree with all the above and certify under penalty of perjury that you are above the age of 18 or the age of majority in your location, whichever is greater.</p>
            </div>

            <div class="modal-footer modal_section d-flex justify-content-between my-0 pt-0">
                <button type="button" class="btn-main mt-0 color-2 rounded-3 button_page main_btn main_btn1" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn-main mt-0 color-2 rounded-3 button_page main_btn" data-bs-dismiss="modal">Enter</button>

            </div>
        </div>
    </div>
</div>
<!-- content close -->

<?php include("include/footer.php"); ?>