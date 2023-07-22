<?php include("include/header2.php"); ?>
<style>
    footer {
        display: none;
    }

    header {
        display: none;
    }
</style>

<section class="full-height relative section_new" data-stellar-background-ratio=".5">
    <div class="overlay-gradient t50">
        <div class="center-y relative">
            <div class="container">


                <div class="col-lg-12 mx-auto wow fadeIn  bg-color" data-wow-delay=".5s">
                    <div class="box-rounded padding40 padding_new">

                        <div class=" mb-4 mt-5 main_heading_name heading_name">
                            <h3 class="mb10   change_name">Payment Methods</h3>
                        </div>
                        <div class="payment_information_div d-flex justify-content-around mb-3">
                            <div class="card_img w-25">
                                <img src="img/master_card.svg" class="img-fluid setting_imgs">
                            </div>
                            <div class="card_info w-25">
                                <span class="card_no">1234 5678 9012 3456</span>
                                <p class="card_date">01/25</p>
                            </div>
                            <div class="card_action w-auto">

                                <div class="dropdown coustom_menu">
                                    <img src="img/image (19).png" class=" dropdown-toggle dot_img" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Edit Card</a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#edit_card"><a class="dropdown-item" href="#">Delete Card</a></li>

                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="payment_information_div d-flex justify-content-around mb-3">
                            <div class="card_img w-25">
                                <img src="img/visa.svg" class="img-fluid">
                            </div>
                            <div class="card_info w-25">
                                <span class="card_no">1234 5678 9012 3456</span>
                                <p class="card_date">01/25</p>
                            </div>
                            <div class="card_action w-auto">
                                <div class="dropdown coustom_menu">
                                    <img src="img/image (19).png" class=" dropdown-toggle dot_img" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Edit Card</a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#edit_card"><a class="dropdown-item" href="#">Delete Card</a></li>

                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class="payment_information_div d-flex justify-content-around mb-3">
                            <div class="card_img w-25">
                                <img src="img/creatoe_coin.svg" class="img-fluid ">
                            </div>
                            <div class="card_info w-25">
                                <span class="card_no">Creatorcoin</span>
                                <!-- <p class="card_date">01/25</p> -->
                            </div>
                            <div class="card_action w-auto">
                                <div class="dropdown coustom_menu">
                                    <img src="img/image (19).png" class=" dropdown-toggle dot_img" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Edit Card</a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#edit_card"><a class="dropdown-item" href="#">Delete Card</a></li>

                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class="payment_information_div d-flex justify-content-around mb-3">
                            <div class="card_img w-25">
                                <img src="img/bitcoin.svg" class="img-fluid ">
                            </div>
                            <div class="card_info w-25">
                                <span class="card_no">Bitcoin</span>
                                <p class="card_date">BTC</p>
                            </div>
                            <div class="card_action w-auto">
                                <div class="dropdown coustom_menu">
                                    <img src="img/image (19).png" class=" dropdown-toggle dot_img" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Edit Card</a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#edit_card"><a class="dropdown-item" href="#">Delete Card</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-2 px-2">
                            <button type="btn" type="button" class=" add_card_btn mb-4" data-bs-toggle="modal" data-bs-target="#add_card">
                                Add Card
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- edit_card_modal -->
<div class="modal fade" id="edit_card" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content edit_card_modal">
            <div class="modal-header justify-content-center ">
                <h5 class="modal-title text-white" id="exampleModalLabel">Delete Card</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <p class="text-center delete_content mt-2">Are you sure you want to delete this card?</p>
            </div>
            <div class="modal-footer justify-content-center border-0 ">
                <button type="button" class=" btn delete_card_btn">Delete</button>
                <button type="button" class="btn cancel_btn" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- add_new_card_modal -->
<div class="modal fade" id="add_card" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="d-flex justify-content-center modal-dialog modal-dialog-centered ">
        <div class="modal-content add_card_modal">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white card_heading" id="staticBackdropLabel">Add New Card</h5>
                <button type="button" class="btn-close tt" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="card_form" id='card_form' class="form-border" method="post" action=''>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="field-set">
                                <label for="name" class="card_input_label">Card Number</label>
                                <input type='text' name='name' id='name' class="form-control card_input1" placeholder="Samsmith1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field-set">
                                <label for="name" class="card_input_label">Expiry Date</label>
                                <input type='text' name='name' id='name' class="form-control " placeholder="MM/YY">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field-set">
                                <label for="name" class="card_input_label">CVV/CVC</label>
                                <input type='text' name='name' id='name' class="form-control " placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="field-set">
                                <label for="name" class="card_input_label">Cardholder Name</label>
                                <input type='text' name='name' id='name' class="form-control card_input1" placeholder="Enter cardholder’s full name">
                            </div>
                        </div>
                    </div>

                </form>
                <div class="modal-footer justify-content-center border-0">
                    <!-- <button type="button" class=" add_to_card_btn" data-bs-dismiss="modal">Add Card</button> -->
                    <button type="button" class="btn-main btn-fullwidth mt-0 color-2 rounded-3 button_page modal_button" data-bs-dismiss="modal">Add Card</button>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>





