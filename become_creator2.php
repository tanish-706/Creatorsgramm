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
                    <div class="row align-items-center">

                        <div class="col-lg-5 mx-auto wow fadeIn bg-color" data-wow-delay=".5s">
                            <div class="box-rounded padding40">

                                <h3 class="mb10 text-center">How should we contact you?</h3>

                                <form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                    <div class="field-set">
                                        <label for="email">Email</label>
                                        <input type='text' name='email' id='email' class="form-control" placeholder="samsmith67@gmail.com">
                                    </div>

                                    <div class="field-set">
                                        <label for="phone">Phone</label>
                                        <input type='number' name='number' id='number' class="form-control input_color" placeholder="">
                                    </div>

                                    <div class="field-set all_button_center">
                                        <a href="become_creator3.php" class="btn-main btn-fullwidth color-2 py-3 mt-3 rounded-3 button_page">continue</a>

                                    </div>
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