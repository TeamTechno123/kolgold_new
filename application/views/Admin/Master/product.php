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
                    echo '<a href="'.base_url().'Master/tax_rate" type="button" class="btn btn-sm btn-outline-info" >Cancel Update</a>';
                  } ?>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0 " <?php if(isset($update)){ echo 'style="display: block;"'; } else{ echo 'style="display: none;"'; } ?>>
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row p-4">
                      
                      <div class="form-group col-md-12 ">
                        <label>Enter Name Of Item</label>
                        <input type="text" class="form-control form-control-sm" name="coupon_code" id="coupon_code" value="<?php if(isset($slider_info)){ echo $slider_info['coupon_code']; } ?>" placeholder="Enter Name Of Item" required>
                      </div>

                       <div class="form-group col-md-4  select_sm">
                          <label>Select Main Category</label>
                          <select class="form-control select2" name="main_category_id" id="main_category_id" data-placeholder="Select Main Category" required>
                            <option value="">1</option>                       
                            </select>
                      </div>

                      <div class="form-group col-md-4  select_sm">
                          <label>Select Sub Category</label>
                          <select class="form-control select2" name="sub_category_id" id="sub_category_id" data-placeholder="Select Sub Category" required>
                            <option value="">1</option>                       
                            </select>
                      </div>

                      <div class="form-group col-md-4  select_sm">
                          <label>Select Brand Name</label>
                          <select class="form-control select2" name="brand_id" id="brand_id" data-placeholder="Select Brand Name" required>
                            <option value="">1</option>                       
                            </select>
                      </div>

                     



                       <div class="form-group col-md-4  select_sm">
                          <label>Select Unit</label>
                          <select class="form-control select2" name="unit_id" id="unit_id" data-placeholder="Select Unit" required>
                            <option value="">1</option>                       
                            </select>
                      </div>

                     

                       <div class="form-group col-md-4  select_sm">
                          <label>Select GST % </label>
                          <select class="form-control select2" name="gst_id" id="gst_id" data-placeholder="Select GST % " required>
                            <option value="">1</option>                       
                            </select>
                      </div>

                       <div class="form-group col-md-4  select_sm">
                          <label>Stock Status </label>
                          <select class="form-control select2" name="stock_id" id="stock_id" data-placeholder="Stock Status " required>
                            <option value="">1</option>                       
                            </select>
                      </div>

                     <div class="form-group col-md-6 ">
                        <label>Enter HSN Code</label>
                        <input type="text" class="form-control form-control-sm" name="hsn_code" id="hsn_code" value="<?php if(isset($slider_info)){ echo $slider_info['hsn_code']; } ?>" placeholder="Enter HSN Code" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Enter SKU Code</label>
                        <input type="text" class="form-control form-control-sm" name="hsn_code" id="hsn_code" value="<?php if(isset($slider_info)){ echo $slider_info['hsn_code']; } ?>" placeholder="Enter SKU Code" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Enter Weight in Kgs</label>
                        <input type="text" class="form-control form-control-sm" name="hsn_code" id="hsn_code" value="<?php if(isset($slider_info)){ echo $slider_info['hsn_code']; } ?>" placeholder="Enter Weight in Kgs" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Enter Dimension (lenth * width * height ) </label>
                        <input type="text" class="form-control form-control-sm" name="hsn_code" id="hsn_code" value="<?php if(isset($slider_info)){ echo $slider_info['hsn_code']; } ?>" placeholder="Enter Dimension ( lenth * width * height ) " required>
                      </div>

                       <div class="form-group col-md-6 ">
                        <label>MRP in INR</label>
                        <input type="text" class="form-control form-control-sm" name="mrp" id="mrp" value="<?php if(isset($slider_info)){ echo $slider_info['mrp']; } ?>" placeholder="MRP in INR" required>
                      </div>


                       <div class="form-group col-md-6 ">
                        <label>Sale Price in INR</label>
                        <input type="text" class="form-control form-control-sm" name="sale_price" id="sale_price" value="<?php if(isset($slider_info)){ echo $slider_info['sale_price']; } ?>" placeholder="Sale Price in INR" required>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>MRP in USD</label>
                        <input type="text" class="form-control form-control-sm" name="mrp" id="mrp" value="<?php if(isset($slider_info)){ echo $slider_info['mrp']; } ?>" placeholder="MRP in USD" required>
                      </div>


                       <div class="form-group col-md-6 ">
                        <label>Sale Price in USD</label>
                        <input type="text" class="form-control form-control-sm" name="sale_price" id="sale_price" value="<?php if(isset($slider_info)){ echo $slider_info['sale_price']; } ?>" placeholder="Sale Price in USD" required>
                      </div>
                     

                     <div class="form-group col-md-12">
                        <label>Enter Description</label>
                        <textarea class="form-control form-control-sm" rows="3" name="description" id="description" placeholder="Enter Description" required> </textarea>
                  </div>


                       <div class="form-group col-md-6">
                      <label>image </label>
                      <input type="file" class="form-control form-control-sm" name="coupon_image" id="coupon_image" >
                    </div>

                    <div class="form-group col-md-12 ">
                        <label>Enter Product Video URL</label>
                        <input type="text" class="form-control form-control-sm" name="coupon_amount" id="coupon_amount" value="<?php if(isset($slider_info)){ echo $slider_info['coupon_amount']; } ?>" placeholder="Enter Product Video URL" required>
                      </div>
              
                      <div class=" form-group col-md-6 text-left">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="tax_rate_status" id="tax_rate_status" value="0" <?php if(isset($tax_rate_info) && $tax_rate_info['tax_rate_status'] == 0){ echo 'checked'; } ?>>
                            <label for="tax_rate_status" class="custom-control-label">Mark As Featured</label>
                          </div>
                        </div>
                      
                     
                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="tax_rate_status" id="tax_rate_status" value="0" <?php if(isset($tax_rate_info) && $tax_rate_info['tax_rate_status'] == 0){ echo 'checked'; } ?>>
                            <label for="tax_rate_status" class="custom-control-label">Disable This</label>
                          </div>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?php base_url(); ?>product" class="btn btn-sm btn-default px-4 mx-4">Cancel</a>
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
                    <th>Item Name</th>
                    <th>MRP INR </th>
                    <th>MRP USD </th>
                    <th>Sale Price INR </th>
                    <th>Sale Price USD </th>
                    <th>Expiry Date</th>                   
                    <th>Image</th>                    
                    <th class="wt_50">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($tax_rate_list)){
                     $i=0; foreach ($tax_rate_list as $list) { $i++;
                    ?>
                    <tr>
                      <td class="d-none"><?php echo $i; ?></td>
                      <td class="text-center">
                        <div class="btn-tax_rate">
                          <a href="<?php echo base_url() ?>Master/edit_tax_rate/<?php echo $list->tax_rate_id; ?>" type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="<?php echo base_url() ?>Master/delete_tax_rate/<?php echo $list->tax_rate_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Test Information');"><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <?php if($list->tax_rate_status == 0){ echo '<span class="text-danger">Inactive</span>'; }
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
