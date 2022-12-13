<?php
    $config = \App\Models\Admin\Configuration::latest()->first();
?>
<section class="footer">
	<div class="footer-mid">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 me-auto col-sm-8">
					<div class="footer-logo mb-3">
						
                        <h2><?php echo e($config->name); ?></h2>
					</div>
					<div class="widget footer-widget mb-5 mb-lg-0">
						<?php echo $config->address; ?>

					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title">Explore</h5>
						<ul class="list-unstyled footer-links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Support</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title ">Categories</h5>
						<ul class="list-unstyled footer-links">
							<li><a href="#">SEO Business</a></li>
							<li><a href="#">Digital Marketing</a></li>
							<li><a href="#">Graphic Design</a></li>
							<li><a href="#">Social Marketing</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title">Links</h5>
						<ul class="list-unstyled footer-links">
							<li><a href="#">News & Blogs</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Return Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title">Address</h5>
						<ul class="list-unstyled footer-links">
							<li><h6 class="text-white">Phone</h6><a href="#">+0800 327 8534</a></li>
							<li><h6 class="text-white">Email</h6><a href="#">support@tutori.com</a></li>
						</ul>
						<div class="footer-socials mt-4">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-btm">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-sm-12 col-lg-6">
					<p class="mb-0 copyright text-sm-center text-lg-start">© <?php echo e(date('Y')); ?> APTII All rights reserved </p>
				</div>
				<div class="col-xl-6 col-sm-12 col-lg-6">

				</div>
			</div>
		</div>
	</div>

	<div class="fixed-btm-top">
		<a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
	</div>

</section>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/client/layouts/footer.blade.php ENDPATH**/ ?>