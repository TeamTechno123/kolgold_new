<?php include('header.php'); ?>

<section class="page-default">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-white"> Blog</h1>
          <p class="text-white text-center">Home / Blog </p>
      </div>
    </div>
  </div>
</section>

<section class="page-sec-two">
  <div class="container">
    <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <?php $blog_main_category_info = $this->Master_Model->get_info_arr_fields3('blog_category_name', '', 'blog_category_id', $blog_info['blog_mcategory_id'], '', '', '', '', 'kol_blog_category'); ?>
                <?php if($blog_main_category_info){ ?>
                  <h4 class="text-center w-100"><span class="badge badge-primary bg-green text-center"><?php echo $blog_main_category_info[0]['blog_category_name']; ?> </span></h4>
                <?php } ?>

                <h2 class="text-center py-2"><?php echo $blog_info['blog_name']; ?></h2>
                <?php $added_info = $this->Master_Model->get_info_arr_fields3('user_name', '', 'user_id', $blog_info['blog_addedby'], '', '', '', '', 'kol_user'); ?>
                <p class="text-center">Posted by <span><i class="far fa-user"></i></span> <?php if($added_info){ echo $added_info[0]['user_name']; } ?>  <span class="ml-5">Date : <i class="far fa-clock ml-2 mr-2"></i><?php echo date('d-m-Y', strtotime($blog_info['blog_created_at'])); ?></span></p>

                <img class="blog_detail mb-5" src="<?php echo base_url(); ?>assets/images/blog/<?php echo $blog_info['blog_image']; ?>" width="100%">

                <span>
                  <?php echo $blog_info['blog_descr']; ?>
                </span>
              </div>

            </div>



          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-12">
                  <ul class="category-menu">
                <h4 class="f-18">CATEGORIES</h4>
                <?php if($blog_main_category_list){
                  foreach ($blog_main_category_list as $list) { ?>
                    <li> <a href="#"><?php echo $list->blog_category_name; ?></a></li>
                <?php } } ?>
                <!-- <li> <a href="#">Kolhapuri Chappal</a></li>
                <li> <a href="#">Kolhapuri Handcrafts</a></li>
                <li> <a href="#">Kolhapuri Jaggery</a></li>
                <li> <a href="#">Kolhapuri Spices</a></li>
                <li> <a href="#">Uncategorized</a></li> -->
              </ul>

              <div class="product">
                <h4 class="f-18 bb-1 pb-2 mb-3" >PRODUCTS</h4>
                <a href="#">
                <div class="row">
                  <div class="col-4">
                    <img class="p-0 mb-3" src="<?php echo base_url(); ?>assets/images/website/small_blog.jpg" width="100%">
                  </div>
                  <div class="col-8">
                    <p class="f-14 text-left mb-0">Minimalist Japanese-inspired furniture</p>
                     <p class="f-10"> Date : 22/06/2017 <span class="ml-2">No Comments</span> </p>
                  </div>
                </div>
                </a>

               <div class="row">
                  <div class="col-4">
                    <img class="p-0 mb-3" src="<?php echo base_url(); ?>assets/images/website/small_blog.jpg" width="100%">
                  </div>
                  <div class="col-8">
                    <p class="f-14 text-left mb-0">Minimalist Japanese-inspired furniture</p>
                     <p class="f-10"> Date : 22/06/2017 <span class="ml-2">No Comments</span> </p>
                  </div>
                </div>

               <div class="row">
                  <div class="col-4">
                    <img class="p-0 mb-3" src="<?php echo base_url(); ?>assets/images/website/small_blog.jpg" width="100%">
                  </div>
                  <div class="col-8">
                    <p class="f-14 text-left mb-0">Minimalist Japanese-inspired furniture</p>
                     <p class="f-10"> Date : 22/06/2017 <span class="ml-2">No Comments</span> </p>
                  </div>
                </div>


                <div class="row">
                  <div class="col-4">
                    <img class="p-0 mb-3" src="<?php echo base_url(); ?>assets/images/website/small_blog.jpg" width="100%">
                  </div>
                  <div class="col-8">
                    <p class="f-14 text-left mb-0">Minimalist Japanese-inspired furniture</p>
                     <p class="f-10"> Date : 22/06/2017 <span class="ml-2">No Comments</span> </p>
                  </div>
                </div>
            </div>
              </div>
            </div>



          </div>
    </div>
  </div>

</section>

<?php include('footer.php'); ?>
