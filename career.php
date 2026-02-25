<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php include('default.php'); ?>
    <title>Career || <?php echo $heading; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.html" rel="apple-touch-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="">
    <!-- Vendor CSS Files -->

    <!-- Main CSS File -->
    <?php include('includes/css.php'); ?>




</head>

<body>

  <?php include('includes/header.php'); ?>


 <!-- ======= Banner Section ======= -->
  <section id="aboutbanner" 

  style="background: url(assets/img/Banner/1.png);background-size: cover; background-position: inherit; background-repeat: no-repeat; position: relative; width: 100%;margin-top: 50px;padding: 190px 0px 100px 0px; ">    <div class="container-fluid p-0">
      <h1>Career</h1>
      
    </div>
  </section>
  <!-- End Banner -->




	<!--==================================================-->
	<!-- Start Appoinment Section -->
	<!--===================================================-->
	<div class=" my-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-12 pl-0 pr-0">
					<div class="contact_from_box">
						<div class="contact_title pb-4">
							<h3 class="Apply text-center">Apply Now</h3>
						</div>
						<form action="formhandler.php" method="POST">
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text"
											oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ' ').replace(/(\  *?)\  */g, '$1')"
											id="name" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" oninput="this.value = this.value.toUpperCase()" id="email"
											name="email" placeholder="Email Address">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text"
											oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
											maxlength="10" id="phone" name="phone" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="subject" id="subject" placeholder="Subject">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="message" id="message" cols="30" rows="10"
											placeholder="Your Message"></textarea>
									</div>
									<div class="col-sm-12 mt-3">
										<div class="outer-box">
											<div class="inner-box1 d-flex justify-content-around  align-items-center "
												style="border:0.2px solid black;padding: 8px 10px;border-radius:10px">
												<span class="text-black fw-bolder">Captcha:-</span>
												<div class="captcha-box-in d-flex align-items-center ">
													<div class="in-colo">
														<span id="first"></span>
														<span id="plus">+</span>
														<span id="second"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 my-3">
										<input type="text" id="num" placeholder="Enter Captcha Here"
											class="set-sum p-2 w-100" onkeyup="myFunction()" />
									</div>
									<div class="quote_button">
										<button class="btn" onClick="return validate();" name="submit"
											type="submit">Submit
										</button>
									</div>
								</div>
							</div>
						</form>
						<div id="status"></div>
					</div>
				</div>
				<!-- <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 ">
					<div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12037.190966736323!2d85.09973267552483!3d25.541455300000035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2a7ce1959fd77%3A0x5c5346cace166b7d!2sParsa%20Bazar%20Post%20Office!5e1!3m2!1sen!2sin!4v1761735158164!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	
        <!-- start -->
    <div class="call-do-action-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="dued-section-title white upper mb-30">
              <h2 data-aos="flip-up" data-aos-duration="2000">Get in Touch With Us</h2>
              <p class="mb-0" data-aos="fade-in" data-aos-duration="2000">Get in Touch with Laxmi Saraswati Real Estate
                – Have questions or need assistance? Contact us today for expert guidance and support.</p>
            </div>
            <div class="new-button ">
              <a href="contact.php">Contact Us</a>
            </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-3 man-sec">
            <div class="wow zoomInRight" data-aos-duration="3000">
              <!-- <img src="" title=""
                style="border-radius:50%;height:200px;padding:6px;border:1px dashed white;" alt=""> -->
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- end -->
	<!--==================================================-->
	<!-- Start Contact Location Section -->
	<!--===================================================-->



	<script>
		var firstNu = document.getElementById("first");
		var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
		console.log("number1", num1);
		var secNum = document.getElementById("second");
		var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));
		console.log("number2", num2);

		function myFunction() {
			var userInput = document.getElementById("num");
			var inputValu = userInput.value;
			return inputValu;
		}

		var storeRandomValue = parseInt(num1) + parseInt(num2);

		function validate() {
			const Name = document.getElementById("name").value;
			const Email = document.getElementById("email").value;
			const Phone = document.getElementById("phone").value;
			const Message = document.getElementById("message").value;
			var namePattern = /^[A-Za-z\s\-]+$/;
			var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
			var dued = myFunction();
			if (!Name) {
				alert("Enter Name");
				return false;
			} else if (!namePattern.test(!Name)) {
				alert("Enter Correct Name");
				return false;
			} else if (!Email) {
				alert("Enter Email Here");
				return false;
			} else if (!emailRegex.test(Email)) {
				alert("Enter Correct Email");
				return false;
			} else if (!Phone) {
				alert("Enter Phone Number");
				return false;
			}
			if (Phone.length < 10) {
				alert("Enter Correct Number");
				return false;
			} else if (!Message) {
				alert("Enter Message");
				return false;
			} else if (!dued) {
				alert("Please Enter Captcha");
				return false;
			} else if (namePattern.test(dued)) {
				alert("Enter Only Number");
				return false;
			} else if (dued != storeRandomValue) {
				alert("Enter Correct Captcha");
				return false;
			}
		}
	</script>
	<style>
		.apps-visiblity {
			display: block;
		}
	</style>












  <?php include('includes/footer.php'); ?>

  <!-- Back to Top -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
</body>

</html>