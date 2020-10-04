<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css//owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">
    <title>Kolgold</title>
  </head>
  <body>
    <section class="top-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <p class="marquee"> <span>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. </span>  </p>
          </div>
        </div>

      </div>
    </section>

  <section class="home-nav">
    <div class="row" id="scrollmenu">
      <div class="col-md-5 col-12">
        <div class="nav-main">
         <nav class="navbar navbar-expand-lg navbar-light  ">
          <a class="navbar-brand d-block d-sm-none" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>assets/images/website/logo.png"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mr-auto navbar-mobile">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>About-Us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Shop">Shop</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Blog-List">Blog</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Contact-Us">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
       </div>

       <div class="col-md-2 d-none d-sm-block">
          <img class="logo " src="<?php echo base_url(); ?>assets/images/website/logo.png" width="100%">
       </div>

      <div class="col-md-5 d-none d-sm-block">
          <p class="login mt-3 text-center">
            <a href="#" class="f-14 text-grey" data-toggle="modal" data-target="#exampleModal" >  Login / Register</a>
            <span class="ml-2 f-20"><i class="far fa-heart"></i></span>
            <span class="ml-2 f-20"> <i class="fas fa-search f-16"></i>  </span>
            <span class="ml-2 f-20"> <i class="fas fa-cart-plus"></i></span>
            <span class="f-14 ml-2"> <i class="fas fa-rupee-sign"></i> 0.00 </span>
          </p>
       </div>
    </div>



      <div class="banner-slider">
        <div class="row">
        <div class="owl-carousel owl-theme owl-one">
          <?php if($slider_list){
            foreach ($slider_list as $list) {
              if($list->slider_possition == '1'){ ?>
              <div class="item">
                <div class="main-slide">
                  <div class="row">
                    <div class=" col-md-6 col-12">
                        <h1><?php echo $list->slider_name; ?> </h1>
                        <p><?php echo $list->slider_descr; ?></p>
                        <p class=""><a href="#"> Reand More  <span class="ml-3 arrow">
                          <img class="svg-arw" src="<?php echo base_url(); ?>assets/images/website/arrow.svg">
                        </span> </a>  </p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $list->slider_image; ?>" width="100px">
                    </div>
                  </div>
                </div>
              </div>
          <?php } } } ?>
      </div>
    </div>
    </section>


    <section class="place">
      <div class="container-fluid">
        <div class="row">
          <div class="owl-carousel owl-theme owl-two">
            <?php if($tourism_list){
              foreach ($tourism_list as $list) { ?>
              <div class="item">
                <div class="main-second">
                   <div class="row">
                    <div class="col-md-6 col-12">
                      <img class="left-img" src="<?php echo base_url(); ?>assets/images/tourism/<?php echo $list->tourism_image; ?>" width="100%">
                    </div>
                    <div class="col-md-6 col-12">
                      <h1><?php echo $list->tourism_name; ?> </h1>
                      <p><?php echo $list->tourism_short_descr; ?></p>
                       <p class="text-left m-center"><a href="#"> Reand More  <span class="arrow">
                       </span> </a>  </p>
                    </div>
                  </div>
                </div>
              </div>
            <?php  } } ?>
          </div>
        </div>
      </div>
    </section>


    <section class="category-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-4">
              <h1>Speciality Of Kolhapur</h1>
              <p class="text-center f-16">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
          </div>
          <div class="owl-carousel owl-theme owl-three">
            <?php if($main_product_category_list){
              foreach ($main_product_category_list as $list) { ?>
                <div class="item">
                  <a class="text-dark" style="text-decoration: none;" href="<?php echo base_url(); ?>Shop">
                    <div class="card">
                      <img class="card-img-top p-30" src="<?php echo base_url(); ?>assets/images/product_category/<?php echo $list->product_category_image; ?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $list->product_category_name; ?></h5>
                      </div>
                    </div>
                  </a>
                </div>
            <?php } } ?>
          </div>
        </div>
      </div>
    </section>

    <section class="masala-banner">
        <div class="container">
          <div class="content">
             <div class="row">
            <div class="col-md-6">
              <h1>Kolhapuri Spices</h1>
              <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            </div>
            <div class="col-md-6">
              <img class="spice1" src="<?php echo base_url(); ?>assets/images/website/spice1.png">
            </div>
          </div>
          </div>

        </div>
    </section>


    <section class="featured">
        <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Featured Product</h1>
        </div>

        <!-- <div class="col-md-12" align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="new">New </button>
            <button class="btn btn-default filter-button" data-filter="treding">Treding</button>
        </div> -->
        <?php if($featured_product_list){
          foreach ($featured_product_list as $list) {
        ?>
          <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter new">
            <div class="card">
               <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/product/<?php echo $list->product_image; ?>" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-title"><?php echo $list->product_name; ?></h6>
                  <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> <?php echo $list->product_mrp_inr; ?> </span>
                <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> <?php echo $list->product_price_inr; ?> </span> </p>
                <div class="hover-show">
                  <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                  <div class="row">
                    <div class="col-2">
                       <span class="color-home1"><i class="far fa-heart"></i></span>
                    </div>
                    <div class="col-8 w-100 text-center">
                        <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                    </div>
                    <div class="col-2">
                      <a href="<?php echo base_url(); ?>Product-Details/<?php echo $list->product_id; ?>">
                        <span class="color-home1"> <i class="fas fa-search"></i> </span>
                      </a>
                    </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        <?php   }  } ?>

            <!-- <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter new">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product1.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

           <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter treding">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product2.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

            <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter new">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product3.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

           <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter new">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product4.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

           <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter treding">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product1.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

           <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter new">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product2.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
            <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter treding">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product3.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

            <div class="gallery_product col-md-3 col-sm-3 col-xs-6 filter new">
                <div class="card">
                   <img class="card-img-top featured-card-img p-30" src="<?php echo base_url(); ?>assets/images/website/product4.png " alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title">Kolhapur Handcrafted</h6>
                      <p class="text-center f-14"> <span class="line-through"><i class="fas fa-rupee-sign"></i> 220 </span>
                    <span class="ml-3 text-green"> <i class="fas fa-rupee-sign"></i> 220 </span> </p>
                    <div class="hover-show">
                      <p class="f-14"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                          <div class="row">
                          <div class="col-2">
                             <span class="color-home1"><i class="far fa-heart"></i></span>
                          </div>
                          <div class="col-8 w-100 text-center">
                              <button type="button" class="btn btn-sm add-card btn-primary"> Add to cart <i class="fas fa-cart-plus"></i> </button>
                          </div>
                          <div class="col-2">
                           <span class="color-home1"> <i class="fas fa-search"></i> </span>
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div> -->


        </div>
    </div>
    </section>

    <section class="health-banner">
        <div class="container">
          <div class="content">
             <div class="row">
            <div class="col-md-12">
              <h1>Health Benefits Of Jaggery</h1>
              <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            </div>
            <div class="col-md-12 d-none d-sm-block">
              <img class="" src="<?php echo base_url(); ?>assets/images/website/jaggery.png" width="100%">
            </div>
             <div class="col-md-12 d-block d-sm-none">
              <img class="" src="<?php echo base_url(); ?>assets/images/website/mobile_jaggery.jpg" width="100%">
            </div>
          </div>
          </div>

        </div>
    </section>


    <section class="blog">
        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Our Blog</h1>
            <p class=" space text-center">Lorem ipsum is placeholder text commonly used in the graphic,</p>
          </div>

          <?php if($blog_list){ $i=0;
            foreach ($blog_list as $list) {
              if($i<3){
                $added_info = $this->Master_Model->get_info_arr_fields3('user_name', '', 'user_id', $list->blog_addedby, '', '', '', '', 'kol_user');
            ?>
              <div class="col-md-4">
               <div class="card p-0 mmb-3">
                  <div class="blog-date">
                    <p class="ml-3 f-22"> <?php echo date('d', strtotime($list->blog_created_at)); ?> </p>
                    <p class="ml-3"><?php echo date('M', strtotime($list->blog_created_at)); ?></p>
                  </div>
                  <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/blog/<?php echo $list->blog_image; ?>" alt="Card image cap">
                  <div class="card-body">
                    <div class="blog-name">
                      <h4 class="f-22"> Blog <?php echo $i+1; ?> </h4>
                    </div>
                    <h5 class="card-title text-center"><?php echo $list->blog_name; ?></h5>
                    <!-- <p class="inline text-center"> -->
                    <p>
                      <span class="text-left">Posted By <?php if($added_info){ echo $added_info[0]['user_name']; } ?> </span>
                      <span class="float-right"><i class="far fa-comment"></i> <i class="fas fa-share-alt ml-2"></i> </span>
                    </p>
                    <!-- <p class="card-text text-center">  enim eiusmod high life accusamus terry richardson ad squid.  raw denim aesthetic synth nesciunt </p> -->
                    <p class="text-center color-home1 font-weight-bold">
                      <a href="<?php echo base_url(); ?>Blog-Details/<?php echo $list->blog_id; ?>" class="text-center color-home1 font-weight-bold" >Continue Reading ...</a>
                    </p>
                  </div>
                </div>
              </div>
          <?php $i++; } } } ?>


            <!-- <div class="col-md-4">
               <div class="card p-0 mmb-3">
                  <div class="blog-date">
                    <p class="ml-3 f-22"> 22 </p>
                    <p class="ml-3">Jun</p>
                  </div>
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/blog1.png " alt="Card image cap">
                    <div class="card-body">
                         <div class="blog-name">
                        <h4 class="f-22"> Blog 1 </h4>
                      </div>
                    <h5 class="card-title text-center">Anim pariatur cliche reprehenderit enim eiusmod</h5>
                     <p class="inline text-center"> <span>Posted By Admin </span>  <span><i class="far fa-comment"></i> <i class="fas fa-share-alt ml-2"></i> </span>  </p>
                      <p class="card-text text-center">  enim eiusmod high life accusamus terry richardson ad squid.  raw denim aesthetic synth nesciunt </p>
                      <p class="text-center color-home1 font-weight-bold"> Continue Reading ...</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
               <div class="card p-0 mmb-3">
                  <div class="blog-date">
                    <p class="ml-3 f-22"> 22 </p>
                    <p class="ml-3">Jun</p>
                  </div>
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/blog2.png " alt="Card image cap">
                    <div class="card-body">
                         <div class="blog-name">
                        <h4 class="f-22"> Blog 2 </h4>
                      </div>
                    <h5 class="card-title text-center">Anim pariatur cliche reprehenderit enim eiusmod</h5>
                     <p class="inline text-center"> <span>Posted By Admin </span>  <span><i class="far fa-comment"></i> <i class="fas fa-share-alt ml-2"></i> </span>  </p>
                      <p class="card-text text-center">  enim eiusmod high life accusamus terry richardson ad squid.  raw denim aesthetic synth nesciunt </p>
                      <p class="text-center color-home1 font-weight-bold"> Continue Reading ...</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
               <div class="card p-0 mmb-3">
                  <div class="blog-date">
                    <p class="ml-3 f-22"> 22 </p>
                    <p class="ml-3">Jun</p>
                  </div>
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/blog3.png " alt="Card image cap">
                    <div class="card-body">
                         <div class="blog-name">
                        <h4 class="f-22"> Blog 3 </h4>
                      </div>
                    <h5 class="card-title text-center">Anim pariatur cliche reprehenderit enim eiusmod</h5>
                     <p class="inline text-center"> <span>Posted By Admin </span>  <span><i class="far fa-comment"></i> <i class="fas fa-share-alt ml-2"></i> </span>  </p>
                      <p class="card-text text-center">  enim eiusmod high life accusamus terry richardson ad squid.  raw denim aesthetic synth nesciunt </p>
                      <p class="text-center color-home1 font-weight-bold"> Continue Reading ...</p>
                    </div>
                  </div>
            </div> -->
          </div>
        </div>
      </section>


       <section class="chappal-banner">
        <div class="container">
          <div class="content">
             <div class="row">
            <div class="col-md-6">
              <h1>Kolhapuri Chappal</h1>
              <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            </div>
            <div class="col-md-6">
              <img class="chappal1" src="<?php echo base_url(); ?>assets/images/website/chappal1.png">
            </div>
          </div>
          </div>
        </div>
    </section>

    <section class="testomonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            <h1 class="text-center">Testimonials</h1>
            <p class="text-center">Lorem ipsum is placeholder text commonly used in the graphic,</p>
          </div>


            <div class="owl-carousel owl-theme owl-four">
                <div class="item">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/stevan.png " alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Stevan</h5>
                      <p class="text-center">Lorem ipsum is placeholder text commonly used in the graphic Lorem ipsum is placeholder text </p>
                      <p class="text-center"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="fas fa-star bg-grey"></i> </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                    <div class="card card-yellow">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/stevan.png " alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Stevan</h5>
                      <p class="text-center">Lorem ipsum is placeholder text commonly used in the graphic Lorem ipsum is placeholder text </p>
                      <p class="text-center"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="fas fa-star bg-grey"></i> </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/stevan.png " alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Stevan</h5>
                      <p class="text-center">Lorem ipsum is placeholder text commonly used in the graphic Lorem ipsum is placeholder text </p>
                      <p class="text-center"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="fas fa-star bg-grey"></i> </p>
                    </div>
                  </div>
                </div>
               <div class="item">
                    <div class="card card-yellow">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/stevan.png " alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Stevan</h5>
                      <p class="text-center">Lorem ipsum is placeholder text commonly used in the graphic Lorem ipsum is placeholder text </p>
                      <p class="text-center"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="fas fa-star bg-grey"></i> </p>
                    </div>
                  </div>
                </div>
               <div class="item">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/website/stevan.png " alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Stevan</h5>
                      <p class="text-center">Lorem ipsum is placeholder text commonly used in the graphic Lorem ipsum is placeholder text </p>
                      <p class="text-center"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="fas fa-star bg-grey"></i> </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </section>

      <?php include('footer.php'); ?>
