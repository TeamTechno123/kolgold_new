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

				<p>Hello admin (not admin? Log out)</p>

				<p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>

				<div class="menu">
				<div class="row">
					<div class="col-md-4 text-center">
					<a class="m-center" href="">
						<p class="m-center" > <i class="fas fa-clipboard-list f-60 text-center"></i> </p>
						<h4 class="m-center">Order</h4>
					</a>
					</div>
			

					<div class="col-md-4 text-center">
						<a href="">
						<p> <i class="fas fa-map-marked-alt f-60"></i> </p>
						<h4>Address</h4>
					</div>

					<div class="col-md-4 text-center">
						<a href="">
						<p> <i class="far fa-user f-60"></i> </p>
						<h4>User Profile</h4>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 text-center">
						<a href="">
						<p> <i class="far fa-heart f-60"></i> </p>
						<h4>Wish List</h4>
						</a>
					</div>

					<div class="col-md-4 text-center">
						<a href="">
						<p> <i class="fas fa-sign-out-alt f-60"></i> </p>
						<h4>Logout</h4>
						</a>
					</div>

					<div class="col-md-4 text-center">
						<a href="">
						<p> <i class="fas fa-tachometer-alt f-60"></i> </p>
						<h4>Dashboard</h4>
						</a>
					</div>
				</div>
			</div>
				
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>