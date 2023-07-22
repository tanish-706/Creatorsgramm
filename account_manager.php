<?php include("include/header2.php"); ?>
<style>
    header {
        display: none;
    }

    footer {
        display: none;
    }
</style>
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section class="full-height relative" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">


                    <div class="col-lg-12 mx-auto wow fadeIn bg-color mt-4" data-wow-delay=".5s">

                        <div class="box-rounded padding40">
                            
                                <div class="main_heading_name heading_name padding_new">
                                    <h6 class="noti_h6 py-2 change_name">Account Manager</h6>
                                </div>
                                <div class="account px-2">
                                    <div class="my-2">
                                        <p>Add, Remove and Edit your account managers. Your account managers can perform actions on your behalf such as removing comments under your posts and more.</p>
                                    </div>
                                    <div class="d-flex justify-content-between my-2 align-items-center">
                                        <div class="img_div d-flex align-items-center">
                                            <div class="first_img">
                                                <img src="img/account.png" class="img-fluid img_follow">
                                            </div>
                                            <div class="follow_content">
                                                <h6 class="follow_h6">Veronica</h6>
                                                <p class="follow_p">Loremipsum</p>
                                            </div>
                                        </div>

                                        <div class="d-flex">

                                            <button type="submit" class="follow_button div_button me-1 ac_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>

                                            <button type="submit" class="div_button div_button2 ac_btn">Delete</button>

                                        </div>

                                    </div>
                                    <div class="field-set all_button_center mt-4">

                                        <!-- <a href="#" class="btn-main btn-fullwidth color-2 py-3 rounded-3 button_page" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</a> -->
                                        <button type="button" class="btn-main btn-fullwidth all-btn-width color-2 py-3 rounded-3 button_page mb-3">
                                            Add New
                                        </button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

                </div>
            </div>
    </section>
</div>
<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="d-flex justify-content-center modal-dialog modal-dialog-centered ">
        <div class="modal-content profile_modal">
            <div class="modal-header modal_section pt-4">
                <h5 class="modal-title noti_h6 modal_head" id="exampleModalLabel">Management Session</h5>
                <button type="button" class="btn-close tt" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body div_mod">
                <h6 class="modal_h6">Delete Post Replies</h6>
                <span class="d-flex justify-content-between">
                    <p class="modal_p">Allow moderator to remove post replies</p>
                    <label class="ma-switch mt-2">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </span>
                <h6 class="modal_h6">Chat Room Persissions</h6>
                <span class="d-flex justify-content-between">
                    <p class="modal_p">Allow moderator to ba, timeout and unban users in your chat room</p>
                    <label class="ma-switch mt-2">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </span>
            </div>

            <div class="modal-footer modal_section my-0 all_button_center pt-0">
                <button type="button" class="btn-main btn-fullwidth mt-0 color-2 rounded-3 button_page modal_button" data-bs-dismiss="modal">Save</button>

            </div>
        </div>
    </div>
</div>


<?php include("include/footer.php"); ?>