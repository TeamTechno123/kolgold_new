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
            <h4>Brand</h4>
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
                <h3 class="card-title"> <?php if(isset($update)){ echo 'Update'; } else{ echo 'Add New'; } ?> Brand</h3>
                <div class="card-tools">
                  <?php if(!isset($update)){
                    echo '<button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>';
                  } else{
                    echo '<a href="'.base_url().'Master/brand" type="button" class="btn btn-sm btn-outline-info" >Cancel Update</a>';
                  } ?>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0 " <?php if(isset($update)){ echo 'style="display: block;"'; } else{ echo 'style="display: none;"'; } ?>>
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row p-4">
                      <div class="form-group col-md-12 ">
                        <label>Enter Brand Information</label>
                        <input type="text" class="form-control form-control-sm" name="brand_name" id="brand_name" value="<?php if(isset($brand_info)){ echo $brand_info['brand_name']; } ?>" placeholder="Enter Brand Information" required>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Enter Description</label>
                        <textarea class="form-control form-control-sm" rows="3" name="brand_descr" id="brand_descr" placeholder="Enter Description" required><?php if(isset($brand_info)){ echo $brand_info['brand_descr']; } ?></textarea>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Brand Logo</label>
                        <input type="file" class="form-control form-control-sm valid_image" name="brand_logo" id="brand_logo" >
                          <label>.jpg/.jpeg/.png file. Size less than 500kb.</label>
                      </div>
                      <div class="form-group col-md-4">
                        <?php if(isset($brand_info) && $brand_info['brand_logo']){ ?>
                          <img width="150px" src="<?php echo base_url() ?>assets/images/brand/<?php echo $brand_info['brand_logo'];  ?>" alt="Brand Logo">
                          <input type="hidden" name="old_brand_logo" value="<?php echo $brand_info['brand_logo']; ?>">
                        <?php } ?>
                      </div>
                      <div class="col-md-4">
                      </div>

                      <div class="form-group col-md-4">
                        <label>Brand Banner</label>
                        <input type="file" class="form-control form-control-sm valid_image" name="brand_image" id="brand_image" >
                          <label>.jpg/.jpeg/.png file. Size less than 500kb.</label>
                      </div>
                      <div class="form-group col-md-4">
                        <?php if(isset($brand_info) && $brand_info['brand_image']){ ?>
                          <img width="150px" src="<?php echo base_url() ?>assets/images/brand/<?php echo $brand_info['brand_image'];  ?>" alt="Brand Banner">
                          <input type="hidden" name="old_brand_image" value="<?php echo $brand_info['brand_image']; ?>">
                        <?php } ?>
                      </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="brand_status" id="brand_status" value="0" <?php if(isset($brand_info) && $brand_info['brand_status'] == 0){ echo 'checked'; } ?>>
                            <label for="brand_status" class="custom-control-label">Disable This Brand</label>
                          </div>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?php echo base_url(); ?>Master/brand" class="btn btn-sm btn-default px-4 mx-4">Cancel</a>
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
                <h3 class="card-title">List All Brand Information</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <th class="wt_50">Action</th>
                    <th>Brand Name</th>
                    <th class="wt_50">Logo</th>
                    <th class="wt_50">Banner</th>
                    <th class="wt_50">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($brand_list)){
                     $i=0; foreach ($brand_list as $list) { $i++;
                    ?>
                    <tr>
                      <td class="d-none"><?php echo $i; ?></td>
                      <td class="text-center">
                        <div class="btn-brand">
                          <a href="<?php echo base_url() ?>Master/edit_brand/<?php echo $list->brand_id; ?>" type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="<?php echo base_url() ?>Master/delete_brand/<?php echo $list->brand_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Brand Information');"><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                      <td><?php echo $list->brand_name; ?></td>
                      <td class="text-center"><img width="50px" src="<?php echo base_url() ?>assets/images/brand/<?php echo $list->brand_logo;  ?>" alt="Brand Logo">
                      <td class="text-center"><img width="50px" src="<?php echo base_url() ?>assets/images/brand/<?php echo $list->brand_image;  ?>" alt="Brand Image">
                      <td>
                        <?php if($list->brand_status == 0){ echo '<span class="text-danger">Inactive</span>'; }
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
