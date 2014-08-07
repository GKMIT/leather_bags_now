<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
<meta name="description" content="" />
<meta name="keywords" content="" />


<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.0.3/css/fonts.css">

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

<section class="block">
	<div class="container">
		<div class="row">
			<div class="col-md-9">				
				<div class="post one-column">
					<div class="">
						<img src="http://placehold.it/849x363" class="img-responsive" alt="" />
					</div>
					<h2>
						<a href="#" title="">WE GIVE YOU BEST HOSTING SERVER IN THE WAY OF OFFER </a>
					</h2>
					<!-- <span class="view-post"><i class="fa fa-eye"></i>66</span> -->
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<ul>
						<li><a href="#blog-1" data-toggle="modal" title="">0 Comments</a></li>
						<li><a href="#" title="">Oct 08, 2013</a></li>
						<li class="share-post"><a href="#" title=""><i class="fa fa-random"></i></a>
							<ul>
								<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<?php
					include_once("partial_latest_top_sold.php");
				?>
			</div>
		</div>
	</div>
</section>

<?php
	include_once("footer.php");
?>
</div>

<!-- Script -->
<script src="assets/js/jquery-1.10.2.js"></script><!-- Jquery -->
<script src="assets/js/script.js"></script><!-- Common -->
<script type="text/javascript"  src="assets/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript"  src="assets/js/modernizr.js"></script><!-- modernizr -->
<script type="text/javascript"  src="assets/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript"  src="assets/js/onscreen.js"></script><!-- On Screen -->
<script type="text/javascript"  src="assets/js/jquery.isotope.js"></script><!-- Masonary -->
<script type="text/javascript"  src="assets/js/masonary.js"></script><!-- Masonary -->
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

	$(document).ready(function() {	
	
	$("#tab-recent").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});

	$("#tab-popular").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
	
	$("#product-post").owlCarousel({
	autoPlay: 20000, //Set AutoPlay to 20 seconds
	navigation:true,
	items : 1
	});
	
	
	});

	$(document).ready(function(){
	    $(".btn").click(function(){
	        $("#blog-1").modal('show');
	    });
	});
	
</script>

<div id="blog-1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Leave Comment</h4>
            </div>
            <div class="modal-body">
            	<form id='blog-form-1' method='post'>
	            	<div class="row blog-comment-form-parent">
	            		<div class="col-md-12 blog-comment-form">
	            			<input type='hidden' value='1'  class='blog' name='blog'/>
	            			<div class="form-group">
	            				<input type="text" class="form-control name" placeholder="Name" name='name'/>
	            			</div>
	            			<div class="form-group">
	            				<input type="email" class="form-control email" placeholder="Email" name='email'/>
	            			</div>
            				<div class="form-group">
		            			<textarea placeholder="Comment" class="form-control comment-data" name='comment_data'></textarea>
		            		</div>
	            		</div>
	            		<div class="col-md-offset-8 col-md-4">
	            			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            			<button type="submit" class="btn btn-primary comment">Comment</button>
	            		</div>
	            	</div>
	            </form>
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#blog-form-1").validate({
			rules:{
				name:"required",
				email:{
					required:true,
					email:true
				},
				comment_data:"required"
			},
			messages:{
				name:"Enter the Name Please",
				email:{
					required:"Enter the Email Please",
					email:"Please enter correct Email "
				},
				comment_data:"Please enter the Comment !"
			},
			submitHandler: function (form) {
				// alert($(".comment").parent().parent().find(".blog-comment-form").find(".name").val());
				var name = $(".comment").parent().parent().find(".blog-comment-form").find(".name").val();
				var blog=$(".comment").parent().parent().find(".blog-comment-form").find(".blog").val();
				var email=$(".comment").parent().parent().find(".blog-comment-form").find(".email").val();
				var comment=$(".comment").parent().parent().find(".blog-comment-form").find(".comment-data").val();
				$(".comment").html("Process...");
                // form.submit();
                $.get('ajax_comment.php',{'blog':blog, 'name':name, 'email':email, 'comment':comment},function(data,success) {
                	$(".comment").html("Comment");
                	$(".comment").parent().parent().find(".blog-comment-form").find(".name").val("");
					$(".comment").parent().parent().find(".blog-comment-form").find(".email").val("");
					$(".comment").parent().parent().find(".blog-comment-form").find(".comment-data").val("");
			        $("#blog-1").modal('hide');
			    });
            }
		});
	});
</script>



</body>
</html>