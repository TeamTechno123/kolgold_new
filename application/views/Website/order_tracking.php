<?php include('header.php'); ?>


<section class="page-default">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-white">Order Tracking</h1>
      <p class="text-white text-center">Home / Order Tracking </p>
      </div>
    </div>
  </div>
</section>

<section class="profile-container ">
  <div class="container d-none d-sm-block">
    <div class="row ">
      <div class="col-md-12">
        <div class="card py-5 ">
          <!-- Desktop View -->          
          <ol class="progtrckr" data-progtrckr-steps="5">           
             <!--  <li class="<?php if($order_status_list2->order_status_id == $order_status){ echo 'progtrckr-done'; }else{ echo 'progtrckr-todo'; } ?>"><?php echo $order_status_list2->order_status_name; ?></li> -->
            <li class="progtrckr-todo">Order Confirm</li>
            <li class="progtrckr-todo">Order Placed</li>
            <li class="progtrckr-todo">Order Received</li>
            <li class="progtrckr-done">Order-Processing</li>
            <li class="progtrckr-todo">Delivered</li>         
          </ol>         
        </div>
      </div>
    </div>
  </div>

  <div class="container mobiletrack d-block d-sm-none">
    <div class="timeline-block timeline-block-right">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3>Order Confirmed</h3>
         <span></span>
         <p></p>
      </div>
   </div>

   <div class="timeline-block timeline-block-left">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3>Order Placed</h3>
         <span></span>
         <p></p>
      </div>
   </div>

   <div class="timeline-block timeline-block-right">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3 class="text-success">Order Received</h3>
         <span class="text-success">Your Order Recived By Courier Station Pune </span>
         <p></p>
      </div>
   </div>

   <div class="timeline-block timeline-block-left">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3>Order-Processing</h3>
         <span></span>
         <p></p>
      </div>
   </div>

   <div class="timeline-block timeline-block-right">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3>Delivered</h3>
         <span></span>
         <p></p>
      </div>
   </div>
  </div>
</section>



  <?php include('footer.php'); ?>