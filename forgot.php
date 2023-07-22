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
		<div class="overlay-gradient t50 mt-5">
			<div class="center-y relative">
				<div class="container">


					<div class="col-lg-5 mx-auto wow fadeIn mt-3  bg-color" data-wow-delay=".5s">
						<div class="box-rounded padding40">
							<div class="row align-items-center mt-100">
								<div class="">
									<div class="back_img  mt-5 ms-3">
										<img src="img/arrow.png" class="img-fluid arrow_hide_img">
									</div>
								</div>
							</div>
							<h3 class="mb10 text-center mt-4">Forgot Password</h3>
							<p class="text-center mt-3">Please, enter your email to receive a <br> reset link</p>
							<form name="contactForm" id='contact_form' class="form-border mt-5" method="post" action=''>
								<div class="field-set">
									<label for="email">Email</label>
									<input type='text' name='email' id='email' class="form-control coustom_input1" placeholder="samsmith67@gmail.com">
								</div>
								<a href="reset_psw_step1.php" class="">
									<div class="field-set">
										<input type='' id='send_message' value='Confirm' class="btn  btn-main btn-fullwidth color-2 py-3 rounded-3">
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