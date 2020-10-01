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
            <h4>Coupon  Informaiton</h4>
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
                <h3 class="card-title"> <?php if(isset($update)){ echo 'Update'; } else{ echo 'Add New'; } ?> Coupon </h3>
                <div class="card-tools">
                  <?php if(!isset($update)){
                    echo '<button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>';
                  } else{
                    echo '<a href="'.base_url().'Master/coupon" type="button" class="btn btn-sm btn-outline-info" >Cancel Update</a>';
                  } ?>
                </div>
              </div>
              <!--  -->
                <div class="card-body px-0 py-0 " <?php if(isset($update)){ echo 'style="display: block;"'; } else{ echo 'style="display: none;"'; } ?>>
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row p-4">
                      <div class="form-group col-md-12 ">
                        <label>Enter Coupon Code</label>
                        <input type="text" class="form-control form-control-sm" name="coupon_code" id="coupon_code" value="<?php if(isset($coupon_info)){ echo $coupon_info['coupon_code']; } ?>" placeholder="Enter Coupon Code" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label>Enter Description</label>
                        <textarea class="form-control form-control-sm" rows="3" name="coupon_descr" id="coupon_descr" placeholder="Enter Description" required><?php if(isset($coupon_info)){ echo $coupon_info['coupon_descr']; } ?></textarea>
                      </div>
                      <div class="form-group col-md-6  select_sm">
                        <label>Discount Type</label>
                        <select class="form-control select2" name="coupon_type" id="coupon_type" data-placeholder="Select Discount Type" required>
                          <option value="">Select Discount Type</option>
                          <option value="1" <?php if(isset($coupon_info) && $coupon_info['coupon_type'] == '1'){ echo 'selected'; } ?> >Percent</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6 ">
                        <label>Coupon Discount Value</label>
                        <input type="text" class="form-control form-control-sm" name="coupon_disc_value" id="coupon_disc_value" value="<?php if(isset($coupon_info)){ echo $coupon_info['coupon_disc_value']; } ?>" placeholder="Coupon Amount" required>
                      </div>

                      <!-- <div class="form-group col-md-6  select_sm">
                        <label>Select Product Categories</label>
                        <select class="form-control select2" name="coupon_group_id" id="coupon_group_id" data-placeholder="Select Product Categories" required>
                          <option value="">1</option>
                          </select>
                      </div> -->

                       <!-- <div class="form-group col-md-6  select_sm">
                        <label>Select Products</label>
                        <select class="form-control select2" name="coupon_group_id" id="coupon_group_id" data-placeholder="Select Products" required>
                          <option value="">1</option>
                          </select>
                      </div> -->

                      <div class="form-group col-md-6 ">
                        <label>Usage Pre User</label>
                        <input type="text" class="form-control form-control-sm" name="coupon_per_user" id="coupon_per_user" value="<?php if(isset($coupon_info)){ echo $coupon_info['coupon_per_user']; } ?>" placeholder="Usage Pre User" required>
                      </div>
                       <div class="form-group col-md-6 ">
                        <label>Coupon Expiry date</label>
                        <input type="text" class="form-control form-control-sm" name="coupon_exp_date" value="<?php if(isset($coupon_info)){ echo $coupon_info['coupon_exp_date']; } ?>" id="date1" data-target="#date1" data-toggle="datetimepicker" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask placeholder="Coupon Expiry date" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Coupon Image</label>
                        <input type="file" class="form-control form-control-sm valid_image" name="coupon_image" id="coupon_image" >
                          <label>.jpg/.jpeg/.png file. Size less than 500kb.</label>
                      </div>
                      <div class="form-group col-md-4">
                        <?php if(isset($coupon_info) && $coupon_info['coupon_image']){ ?>
                          <img width="150px" src="<?php echo base_url() ?>assets/images/coupon/<?php echo $coupon_info['coupon_image'];  ?>" alt="Coupon Image">
                          <input type="hidden" name="old_coupon_image" value="<?php echo $coupon_info['coupon_image']; ?>">
                        <?php } ?>
                      </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="coupon_status" id="coupon_status" value="0" <?php if(isset($coupon_info) && $coupon_info['coupon_status'] == 0){ echo 'checked'; } ?>>
                            <label for="coupon_status" class="custom-control-label">Disable This</label>
                          </div>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?php echo base_url(); ?>Master/coupon" class="btn btn-sm btn-default px-4 mx-4">Cancel</a>
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
                <h3 class="card-title">List All Coupon Information</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <th class="wt_50">Action</th>
                    <th>Coupon Code</th>
                    <th class="wt_50">Discount</th>
                    <th class="wt_75">Expiry Date</th>
                    <th class="wt_50">Image</th>
                    <th class="wt_50">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($coupon_list)){
                     $i=0; foreach ($coupon_list as $list) { $i++;
                       if($list->coupon_type == '1'){ $discount_type = '%'; }
                       else{ $discount_type = 'Rs.'; }
                    ?>
                    <tr>
                      <td class="d-none"><?php echo $i; ?></td>
                      <td class="text-center">
                        <div class="btn-coupon">
                          <a href="<?php echo base_url() ?>Master/edit_coupon/<?php echo $list->coupon_id; ?>" type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="<?php echo base_url() ?>Master/delete_coupon/<?php echo $list->coupon_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Test Information');"><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                      <td><?php echo $list->coupon_code; ?></td>
                      <td><?php echo $list->coupon_disc_value.''.$discount_type; ?></td>
                      <td><?php echo $list->coupon_exp_date; ?></td>
                      <td class="text-center"><img width="50px" src="<?php echo base_url() ?>assets/images/coupon/<?php echo $list->coupon_image;  ?>" alt="Coupon Image">
                      <td>
                        <?php if($list->coupon_status == 0){ echo '<span class="text-danger">Inactive</span>'; }
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
