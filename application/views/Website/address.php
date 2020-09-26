<?php include('header.php'); ?>

<section class="page-default">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-white">My Account</h1>
			<p class="text-white text-center">Home / My Account </p>
			</div>
		</div>
	</div>
</section>

<section class="page-sec-two">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php include('account_menu.php'); ?>
			</div>
			<div class="col-md-9">
					<p>The following addresses will be used on the checkout page by default.</p>
				<div class="address">
					<div class="row">
					<div class="col-md-6">
							<h4>BILLING ADDRESS <span class="f-14"><a  href="<?php echo base_url(); ?>website/edit_address">Edit</a> </span></h4> 
							<p>Rajarampuri</p>
							<p>2Nd Lane Kolhapur</p>
							<p>Dist- Kolhapur</p>
							<p>Maharashtra</p>
					</div>
					<div class="col-md-6">
							<h4>SHIPPING ADDRESS  <span class="f-14"><a href="<?php echo base_url(); ?>website/edit_address">Edit</a> </span></h4>
							<p>Rajarampuri</p>
							<p>2Nd Lane Kolhapur</p>
							<p>Dist- Kolhapur</p>
							<p>Maharashtra</p>
					</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>