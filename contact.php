<?php
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['website']) && isset($_POST['comments'])){
		$from = $_POST["email"]; // sender
	    $subject = "product Comment";
	    $website = $_POST["website"];
	    $message = $_POST['name'].", ".$_POST["comments"];

	    $message = wordwrap($message, 70);
	    mail("paliwal.ck@gmail.com",$subject,$message,"From: $from\n");
	}
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Leather Bags Now/Contact us</title>
<meta name="description" content="" />
<meta name="keywords" content="" />


<link href='assets/theme font/style.css' rel='stylesheet' type='text/css'>


<!-- Styles -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="assets/font-awesome-4.0.3/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->	
<link rel="stylesheet" href="assets/css/animate.css" type="text/css" /><!-- Animation -->	



<link rel="stylesheet" href="assets/css/style.css" type="text/css" /><!-- Style -->	
<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" /><!-- Responsive -->
<link rel="stylesheet" type="text/css" href="assets/css/revolution.css" media="screen" /> <!-- Slider Revolution -->
<link rel="stylesheet" href="assets/css/custom-header.css" type="text/css" /><!-- Responsive -->	
<link rel="alternate stylesheet" type="text/css" href="assets/css/orange.css" title="orange" /> <!-- Orange -->


	
</head>
<body>
<div class="theme-layout">
	<?php
	include_once("header.php");
	?>

<!-- <section class="block" id="inner-head">
	<div class="fixed-img sec-bg4"></div>
	<div class="container">	
		<h1>CONTACT PAGE</h1>
	</div>
</section> -->

<section class="block">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact-details">
					<div class="heading1">
						<h2><i>CONTACT </i>US</h2>
						<span>BRAND FOR EVERY STYLE. FIND YOURS.</span>
					</div>
					
					<p>Nisi proin sagittis proin porta, tortor pid purus elit a duis nunc. In tristique, in? Dictumst dictumst, ac ac, aenean nascetur magna ultricies in ac aliquam, augue ultrices turpis dictumst sociis pulvinar cursus placerat sit.</p>
					<div class="row">
						<div class="col-md-6">
							<ul class="social-btns">
								<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<div class="col-md-6 contact-info">
							<span><i class="fa fa-map-marker"></i>Purus Elit A Duis Nunc Winf</span>
							<span><i class="fa fa-envelope-o"></i>Simple@your.com</span>
							<span><i class="fa fa-mobile"></i>(123.123.777)  (123.123.777)</span>
						</div>
					</div>
					
					<iframe height="400" src="https://maps.google.com/?ie=UTF8&amp;ll=24.5800,73.6800&amp;spn=24.5800,73.6800&amp;t=m&amp;z=4&amp;output=embed"></iframe><br />
				</div>
				
				
				<div class="contact-form">
					<div class="heading1">
						<h2><i>CONTACT </i>FORM</h2>
						<span>BRAND FOR EVERY STYLE. FIND YOURS.</span>
					</div>
					
					<div id="message"></div>
					<form method="post" action="contact.php" name="contactform" id="contactform">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<input name="name" class="input-style" id="name" type="text" placeholder="NAME" />
								</div>
								<div class="form-group">
									<input name="email" type="text" id="email" class="input-style" placeholder="EMAIL" />
								</div>
								<div class="form-group">
									<input name="website" id="website" class="input-style" type="text" placeholder="WEBSITE" />
								</div>
							</div>	
							<div class="col-md-11">
								<textarea name="comments" id="comments" class="input-style" placeholder="YOUR MESSAGE"></textarea>
								<input type="submit" class="submit" id="submit" value="Submit" value="SEND MAIL" />
							</div>
						</div>	
					</form>
				</div>
			</div>
			
			<!-- <div class="col-md-4">
				<div class="best-deals">
					<span>BEST DEALS</span>
					<ul>
						<li>
							<span><img src="http://placehold.it/133x115" alt="" /></span>
							<h4>Best Offer Samsung Galaxy <i>N9000 ( Jet Black )</i></h4>
							<p>$454<strong></strong></p>
							<a href="#" title="">SHOP NOW</a>
						</li>
						
						<li>
							<span><img src="http://placehold.it/133x115" alt="" /></span>
							<h4>Best Offer Samsung Galaxy <i>N9000 ( Jet Black )</i></h4>
							<p>$454<strong></strong></p>
							<a href="#" title="">SHOP NOW</a>
						</li>
						
						<li>
							<span><img src="http://placehold.it/133x115" alt="" /></span>
							<h4>Best Offer Samsung Galaxy <i>N9000 ( Jet Black )</i></h4>
							<p>$485 <strong>$454</strong></p>
							<a href="#" title="">SHOP NOW</a>
						</li>
						
					</ul>
				</div>
			</div> -->
			
		</div>
	</div>
</section>

<!-- footer -->
<?php
	include_once("footer.php");
?>

</div>

	
<!-- Script -->
<script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script><!-- Jquery -->
<script type="text/javascript" src="assets/js/script.js"></script><!-- Common -->
<script type="text/javascript"  src="assets/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript"  src="assets/js/modernizr.js"></script><!-- modernizr -->
<script type="text/javascript"  src="assets/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript"  src="assets/js/onscreen.js"></script><!-- On Screen -->
<!-- <script type="text/javascript" src="assets/js/jquery.jigowatt.js"></script> -->
<!-- AJAX Form Submit -->
<script type="text/javascript"  src="assets/js/jquery.validate.js"></script><!-- form validation -->

<script type="text/javascript">
	$(document).ready(function() {
		$(".footer-deal").owlCarousel({
			autoPlay :true,
			stopOnHover : true,
			goToFirstSpeed : 2000,
			slideSpeed:1500,
			singleItem : true,
			autoHeight : true,
			transitionStyle:"goDown",
			paginationNumbers:true
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#contactform").validate({
			rules:{
				name:"required",
				email:{
					required:true,
					email:true
				},
				website:"required",
				comments:"required"
			},
			messages:{
				name:"Enter the Name Please",
				email:{
					required:"Enter the Email Please",
					email:"Please enter correct Email "
				},
				website:"Please enter the website !",
				comments:"Please enter the Comment !"
			},
			submitHandler: function (form) {
				$("#submit").html("Process...");
                form.submit();
            }
		});
	});
</script>

</body>
</html>