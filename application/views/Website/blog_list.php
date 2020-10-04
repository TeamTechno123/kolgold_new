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

<section class="blog bg-white">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Our Blog</h1>
        <p class=" space text-center">Lorem ipsum is placeholder text commonly used in the graphic,</p>
      </div>

      <?php if($blog_list){ $i=0;
        foreach ($blog_list as $list) {
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
      <?php $i++; } } ?>
      </div>
    </div>
  </section>

<?php include('footer.php'); ?>
