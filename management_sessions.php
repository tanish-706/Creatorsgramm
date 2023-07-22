<?php include("include/header2.php"); ?>
<style>
    header {
        display: none;
    }

    footer {
        display: none;
    }
</style>
<section class="full-height relative no-top no-bottom vertical-center">
    <div class="overlay-gradient t50">
        <div class="center-y relative">
            <div class="container">


                <div class="col-lg-12 col-md-7 mx-auto wow fadeIn bg-color my-5" data-wow-delay=".5s">
                    <div class="box-rounded padding40">
                        <div class="account px-2">
                            <h6 class="noti_h6 py-3">Management Sessions</h6>
                            <div>
                                <p>Create a new Management Session you can share with a trusted person to grant them access to your account.</p>
                                <p>Note: By default Management Sessions have access to most of your account. below you can uncheck certain permissions you do not want your manager to have access to:</p>
                            </div>
                            <div class="session_check d-flex justify-content-between">
                                <p class="sess_p my-1">Create Posts</p>
                                <div class="form-check">
                                    <input class="form-check-input form-check2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            <div class="session_check d-flex justify-content-between">
                                <p class="sess_p my-1">Send Messages</p>
                                <div class="form-check">
                                    <input class="form-check-input form-check2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            <div class="session_check d-flex justify-content-between">
                                <p class="sess_p my-1">Request Payouts</p>
                                <div class="form-check">
                                    <input class="form-check-input form-check2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            <div class="session_check d-flex justify-content-between">
                                <p class="sess_p my-1">Subscribe to Creators</p>
                                <div class="form-check">
                                    <input class="form-check-input form-check2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            <div class="mt-4">
                                <p>The following list of actions are always blocked for security reasons
                                <p>
                                <ul type="square">
                                    <li>Viewing, creating or updating management sessions</li>
                                    <li>Creating or deleting Payout Methods</li>
                                    <li>Viewing active account sessions in settings</li>
                                    <li>Closing active account sessions in settings</li>
                                    <li>Deleting your account</li>
                                </ul>
                            </div>
                            <div class="mt-4">
                                <p>By creating a management session, you acknowledge the following.</p>

                                <ul type="square">
                                    <li> You are responsible for everything someone</li>
                                    <li>Creating or deleting Payout Methods</li>
                                    <li>Viewing active account sessions in settings</li>
                                    <li>Closing active account sessions in settings</li>
                                    <li>Deleting your account</li>
                                </ul>
                            </div>
                            <div class="field-set mb-4">

                                <a href="#" class="btn-main all-btn-width btn-fullwidth color-2 py-3 rounded-3 button_page" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="d-flex justify-content-center modal-dialog modal-dialog-centered ">
        <div class="modal-content profile_modal profile_modal1">
            <div class="modal-header modal_section pt-4">
                <h5 class="modal-title noti_h6 modal_head" id="exampleModalLabel">Management Session</h5>
                <button type="button" class="btn-close modal_close_btn" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body div_mod div_mod1">
                <label class="modal_lab mb-2">Your Link:</label>
                <input type="text" name="link" value="" class="modal_inpt" placeholder="12345zfdgfhggjhgyhteb4werr32fv32t32g">
                <div class="modal_icon">
                    <img src="img/modal1.png" class="img-fluid modal_icon_img">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>