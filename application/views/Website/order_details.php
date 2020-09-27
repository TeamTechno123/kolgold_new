<?php include('header.php'); ?>



<section class="page-default">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-white"> Order Details</h1>
          <p class="text-white text-center">Home / Order Details </p>
      </div>
    </div>
  </div>
</section>


<section class="page-sec-two">
  <div class="container">
    <div class="row">
     
      <div class="col-md-12">

        <div class="table">
          <table class="table">
            <thead>
              <tr>                
                <th scope="col">Order</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Total</th>
                <th scope="col text-right">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td>#7111</td>
                <td>13/09/2020</td>
                <td>Failed</td>
                <td> <span class="text-green">  ₹ 239.00 </span> for 1 item</td>
                <td> 
                  <span><button type="button" class="btn btn-primary plr-2 bg-green round">Track Order </button></span> 
                  <span><button type="button" class="btn btn-primary plr-2 bg-green round">View</button></span> 
                  <span><button type="button" class="btn btn-primary plr-2 bg-green round">cancel</button></span> 
                </td>
              </tr>
             
            </tbody>
          </table>        
        </div>        
      </div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>



