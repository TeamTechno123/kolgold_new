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
				<div class="address">
					<div class="row">
						<div class="col-md-12">
							<h4>Account Details</h4>
						</div>
					<div class="col-md-6">							 
							 <div class="form-group">
							    <label >First Name</label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="First Name">
							  </div>
					</div>
					<div class="col-md-6">							 
							 <div class="form-group">
							    <label >Last Name</label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Last Name">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Display Name</label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Display Name">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Email Address </label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Email Address ">
							  </div>
					</div>


					<div class="col-md-12">
							<h4>Change Password</h4>
						</div>
					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Current Password</label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Current Password">
							  </div>
					</div>
					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >New Password</label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="New Password">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Confirm Password</label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Confirm Password">
							  </div>
					</div>

					
					<div class="col-md-12 mt-3 ">
						<button type="button" class="btn btn-primary plr-2 bg-green round">Save Address </button>
					</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>