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

<section class="page-sec-login">
  <div class="container">
    <div class="row">    
           

            
          <div class="col-md-6" id="register"> 
           <div class="">
              <h4 class="f-22 mb-3">Register </h4>
            </div>              
               <div class="form-group">
                  <label >Email Address *</label>
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Emter Email ">
                </div>
                <p class="f-12">A password will be sent to your email address.</p>
                <p class="f-12">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                <div class="text-center mt-5">
                  <button type="button" class="btn btn-success round">REGISTER</button>
                </div>
                
          </div>

          <div class="col-md-6" id="login"> 
          <div class="">
              <h4 class="f-22 mb-3">Login </h4>
            </div>              
               <div class="form-group">
                  <label >Username or email *</label>
                  <input type="text" class="form-control form-control-sm" id="username" placeholder="Emter Username or email ">
                </div>

                 <div class="form-group">
                  <label >Password *</label>
                  <input type="text" class="form-control form-control-sm" id="password" placeholder="Emter Password">
                </div>
                <p class="f-14 text-right text-green">Forgot Password.</p>               
                <div class="text-center mt-5">
                  <button type="button" class="btn btn-success round">Login</button>
                </div>
                
          </div>

          <div class="col-md-6"> 
           <div class="">
              <h4 class="f-22 mb-3 text-center">Login </h4>
            </div>            
            <p class="text-center f-14">Registering for this site allows you to access your order status and history. Just fill in the fields below, and we'll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>

            <div class="text-center mt-5">
                  <button type="button" class="btn btn-light round" id="showlogin">LOGIN</button>
                  <button type="button" class="btn btn-light round" id="showregister">Register</button>
                </div>
          </div>
        </div>
      </div> 
        
</section>



<?php include('footer.php'); ?>

<script type="text/javascript">
$(document).ready(
    function(){
        $("#showlogin").click(function () {
            $("#register").hide("slow");
            $("#showlogin").hide("slow");
            $("#login").show("slow");
            $("#showregister").show("slow");
        });

         $("#showregister").click(function () {
            $("#login").hide("slow");
            $("#showregister").hide("slow");
            $("#register").show("slow");
            $("#showlogin").show("slow");
        });

    });
  
</script>