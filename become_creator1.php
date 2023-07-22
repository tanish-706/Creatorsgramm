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

                                <h3 class="mb13 text-center">What’s your Last name?</h3>

                                <form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                    <div class="field-set">

                                        <input type='text' name='name' id='name' class="form-control" placeholder="Sam">
                                    </div>



                                    <div class="field-set all_button_center">
                                        <a href="become_creator2.php" class="btn-main btn-fullwidth color-2 py-3 rounded-3 button_page">continue </a>

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