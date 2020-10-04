<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Product  Informaiton</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card <?php if(!isset($update)){ echo 'collapsed-card'; } ?>">
              <div class="card-header">
                <h3 class="card-title"> <?php if(isset($update)){ echo 'Update'; } else{ echo 'Add New'; } ?> Product </h3>
                <div class="card-tools">
                  <?php if(!isset($update)){
                    echo '<button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>';
                  } else{
                    echo '<a href="'.base_url().'Master/product" type="button" class="btn btn-sm btn-outline-info" >Cancel Update</a>';
                  } ?>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0 " <?php if(isset($update)){ echo 'style="display: block;"'; } else{ echo 'style="display: none;"'; } ?>>
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row p-4">

                      <div class="form-group col-md-12 ">
                        <label>Enter Name Of Item</label>
                        <input type="text" class="form-control form-control-sm" name="product_name" id="product_name" value="<?php if(isset($product_info)){ echo $product_info['product_name']; } ?>" placeholder="Enter Name Of Item" required>
                      </div>

                       <div class="form-group col-md-4 select_sm">
                        <label>Main Category</label>
                        <select class="form-control select2" name="product_mcategory_id" id="product_mcategory_id" data-placeholder="Select Main Category" required>
                          <option value="">Select Main Category</option>
                          <?php if($main_product_category_list){
                            foreach ($main_product_category_list as $list) { ?>
                              <option value="<?php echo $list->product_category_id ?>" <?php if(isset($product_info) && $product_info['product_mcategory_id'] == $list->product_category_id){ echo 'selected'; } if($list->product_category_status == 0){ echo 'disabled'; }  ?>><?php echo $list->product_category_name ?></option>
                          <?php } } ?>
                        </select>
                      </div>

                      <div class="form-group col-md-4  select_sm">
                          <label>Sub Category</label>
                          <select class="form-control select2" name="product_scategory_id" id="product_scategory_id" data-placeholder="Select Sub Category" required>
                            <option value="">Select Sub Category</option>
                            <?php if($sub_product_category_list){
                              foreach ($sub_product_category_list as $list) { ?>
                                <option value="<?php echo $list->product_category_id ?>" <?php if(isset($product_info) && $product_info['product_scategory_id'] == $list->product_category_id){ echo 'selected'; } if($list->product_category_status == 0){ echo 'disabled'; } ?>><?php echo $list->product_category_name ?></option>
                            <?php } } ?>
                          </select>
                      </div>

                      <div class="form-group col-md-4  select_sm">
                        <label>Brand</label>
                        <select class="form-control select2" name="brand_id" id="brand_id" data-placeholder="Select Brand Name" required>
                          <option value="">Select Brand Name</option>
                          <?php if($brand_list){
                            foreach ($brand_list as $list) { ?>
                              <option value="<?php echo $list->brand_id ?>" <?php if(isset($product_info) && $product_info['brand_id'] == $list->brand_id){ echo 'selected'; } if($list->brand_status == 0){ echo 'disabled'; } ?>><?php echo $list->brand_name ?></option>
                          <?php } } ?>
                        </select>
                      </div>

                       <div class="form-group col-md-4  select_sm">
                          <label>Unit</label>
                          <select class="form-control select2" name="unit_id" id="unit_id" data-placeholder="Select Unit" required>
                            <option value="">Select Unit</option>
                            <?php if($unit_list){
                              foreach ($unit_list as $list) { ?>
                                <option value="<?php echo $list->unit_id ?>" <?php if(isset($product_info) && $product_info['unit_id'] == $list->unit_id){ echo 'selected'; } if($list->unit_status == 0){ echo 'disabled'; } ?>><?php echo $list->unit_name ?></option>
                            <?php } } ?>
                          </select>
                      </div>

                       <div class="form-group col-md-4  select_sm">
                          <label>Select GST % </label>
                          <select class="form-control select2" name="gst_slab_id" id="gst_slab_id" data-placeholder="Select Unit" required>
                            <option value="">Select Unit</option>
                            <?php if($gst_slab_list){
                              foreach ($gst_slab_list as $list) { ?>
                                <option value="<?php echo $list->gst_slab_id ?>" <?php if(isset($product_info) && $product_info['gst_slab_id'] == $list->gst_slab_id){ echo 'selected'; } if($list->gst_slab_status == 0){ echo 'disabled'; } ?>><?php echo $list->gst_slab_name ?></option>
                            <?php } } ?>
                          </select>
                      </div>

                       <div class="form-group col-md-4  select_sm">
                          <label>Stock Status </label>
                          <select class="form-control select2" name="product_stock_status" id="product_stock_status" data-placeholder="Select Stock Status" required>
                            <option value="">Select Stock Status</option>
                            <option value="1" <?php if(isset($product_info) && $product_info['product_stock_status'] == '1'){ echo 'selected'; } ?>>Available</option>
                            <option value="2" <?php if(isset($product_info) && $product_info['product_stock_status'] == '2'){ echo 'selected'; } ?>>Out of Stock</option>
                          </select>
                      </div>

                     <div class="form-group col-md-6 ">
                        <label>Enter HSN Code</label>
                        <input type="text" class="form-control form-control-sm" name="product_hsn" id="product_hsn" value="<?php if(isset($product_info)){ echo $product_info['product_hsn']; } ?>" placeholder="Enter HSN Code" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Enter SKU Code</label>
                        <input type="text" class="form-control form-control-sm" name="product_sku" id="product_sku" value="<?php if(isset($product_info)){ echo $product_info['product_sku']; } ?>" placeholder="Enter SKU Code" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Enter Weight in Kgs</label>
                        <input type="number" min="0.01" step="0.01" class="form-control form-control-sm" name="product_weight" id="product_weight" value="<?php if(isset($product_info)){ echo $product_info['product_weight']; } ?>" placeholder="Enter Weight in Kgs" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Enter Dimension (lenth * width * height ) </label>
                        <input type="text" class="form-control form-control-sm" name="product_dimension" id="product_dimension" value="<?php if(isset($product_info)){ echo $product_info['product_dimension']; } ?>" placeholder="Enter Dimension ( lenth * width * height ) " required>
                      </div>

                       <div class="form-group col-md-6 ">
                        <label>MRP in INR</label>
                        <input type="number" min="0" step="1" class="form-control form-control-sm" name="product_mrp_inr" id="product_mrp_inr" value="<?php if(isset($product_info)){ echo $product_info['product_mrp_inr']; } ?>" placeholder="MRP in INR" required>
                      </div>
                       <div class="form-group col-md-6 ">
                        <label>Sale Price in INR</label>
                        <input type="number" min="0" step="1" class="form-control form-control-sm" name="product_price_inr" id="product_price_inr" value="<?php if(isset($product_info)){ echo $product_info['product_price_inr']; } ?>" placeholder="Sale Price in INR" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>MRP in USD</label>
                        <input type="number" min="0" step="1" class="form-control form-control-sm" name="product_mrp_usd" id="product_mrp_usd" value="<?php if(isset($product_info)){ echo $product_info['product_mrp_usd']; } ?>" placeholder="MRP in USD" required>
                      </div>
                      <div class="form-group col-md-6 ">
                        <label>Sale Price in USD</label>
                        <input type="number" min="0" step="1" class="form-control form-control-sm" name="product_price_usd" id="product_price_usd" value="<?php if(isset($product_info)){ echo $product_info['product_price_usd']; } ?>" placeholder="Sale Price in USD" required>
                      </div>
                     <div class="form-group col-md-12">
                        <label>Enter Description</label>
                        <textarea class="form-control form-control-sm" rows="3" name="product_descr" id="product_descr" placeholder="Enter Description" required><?php if(isset($product_info)){ echo $product_info['product_descr']; } ?></textarea>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Product Image</label>
                        <input type="file" class="form-control form-control-sm valid_image" name="product_image" id="product_image" >
                          <label>.jpg/.jpeg/.png file. Size less than 500kb.</label>
                      </div>
                      <div class="form-group col-md-4">
                        <?php if(isset($product_info) && $product_info['product_image']){ ?>
                          <img width="150px" src="<?php echo base_url() ?>assets/images/product/<?php echo $product_info['product_image'];  ?>" alt="Product Image">
                          <input type="hidden" name="old_product_image" value="<?php echo $product_info['product_image']; ?>">
                        <?php } ?>
                      </div>
                      <div class="form-group col-md-12 ">
                        <label>Enter Product Video URL</label>
                        <input type="text" class="form-control form-control-sm" name="product_video_url" id="product_video_url" value="<?php if(isset($product_info)){ echo $product_info['product_video_url']; } ?>" placeholder="Enter Product Video URL" required>
                      </div>
                      <div class=" form-group col-md-6 text-left">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="product_featured" id="product_featured" value="1" <?php if(isset($product_info) && $product_info['product_featured'] == 1){ echo 'checked'; } ?>>
                          <label for="product_featured" class="custom-control-label">Mark As Featured</label>
                        </div>
                      </div>


                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="product_status" id="product_status" value="0" <?php if(isset($product_info) && $product_info['product_status'] == 0){ echo 'checked'; } ?>>
                            <label for="product_status" class="custom-control-label">Disable This</label>
                          </div>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?php echo base_url(); ?>Master/product" class="btn btn-sm btn-default px-4 mx-4">Cancel</a>
                          <?php if(isset($update)){
                            echo '<button class="btn btn-sm btn-primary float-right px-4">Update</button>';
                          } else{
                            echo '<button class="btn btn-sm btn-success float-right px-4">Save</button>';
                          } ?>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List All Product Information</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <th class="wt_50">Action</th>
                    <th>Name</th>
                    <th class="wt_50">MRP INR </th>
                    <th class="wt_50">MRP USD </th>
                    <th class="wt_50">Price INR </th>
                    <th class="wt_50">Price USD </th>
                    <th class="wt_50">Image</th>
                    <th class="wt_50">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($product_list)){
                     $i=0; foreach ($product_list as $list) { $i++;
                    ?>
                    <tr>
                      <td class="d-none"><?php echo $i; ?></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="<?php echo base_url() ?>Master/edit_product/<?php echo $list->product_id; ?>" type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="<?php echo base_url() ?>Master/delete_product/<?php echo $list->product_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Product Information');"><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                      <td><?php echo $list->product_name; ?></td>
                      <td><?php echo $list->product_mrp_inr; ?></td>
                      <td><?php echo $list->product_mrp_usd; ?></td>
                      <td><?php echo $list->product_price_inr; ?></td>
                      <td><?php echo $list->product_price_usd; ?></td>
                      <td class="text-center"><img width="50px" src="<?php echo base_url() ?>assets/images/product/<?php echo $list->product_image;  ?>" alt="Product Image">
                      <td>
                        <?php if($list->product_status == 0){ echo '<span class="text-danger">Inactive</span>'; }
                          else{ echo '<span class="text-success">Active</span>'; } ?>
                      </td>
                    </tr>
                  <?php } } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

</body>
</html>

<script type="text/javascript">
  $("#product_mcategory_id").on("change", function(){
    var product_mcategory_id =  $('#product_mcategory_id').find("option:selected").val();
    $.ajax({
      url:'<?php echo base_url(); ?>Master/get_sub_by_main_product_category',
      type: 'POST',
      data: {"product_mcategory_id":product_mcategory_id},
      context: this,
      success: function(result){
        $('#product_scategory_id').html(result);
      }
    });
  });

</script>
