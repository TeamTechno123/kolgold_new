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
						<div class="col-md-12">
							<h4>BILLING ADDRESS</h4>
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
							    <label >Company Name</label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Company Name">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Country / Region </label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Country / Region ">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Street address  </label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Street address  ">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >State / Country  </label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="State / Country">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Postcode / ZIP   </label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Postcode / ZIP ">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Phone  </label>
							    <input type="text" class="form-control form-control-sm" id="" placeholder="Phone">
							  </div>
					</div>

					<div class="col-md-12">							 
							 <div class="form-group">
							    <label >Email address  </label>
							    <input type="email" class="form-control form-control-sm" id="" placeholder="Email address">
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