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
            <h4>Customer List Information</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">       

          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">List All Customer </h3>
              </div>
              <div class="card-body p-2">
                <div style="overflow-x: auto">
                <table id="example1" class="table table-bordered table-striped" style="width: 600px;" >
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <th class="wt_50">Action</th>
                    <th>Name </th>
                    <th>Last Active</th>
                    <th>Sign Up</th>
                    <th>Email</th>
                    <th>Orders</th>
                    <th>Total Spends</th> 
                    <th>AOV</th> 
                    <th>Country</th>   
                    <th>State</th>
                    <th>City</th> 
                    <th>Zip code</th>              
                    <th class="wt_75">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($unit_list)){
                      $i=0; foreach ($unit_list as $list) { $i++; ?>
                      <tr>
                        <td class="d-none"><?php echo $i; ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="<?php echo base_url() ?>Master/edit_unit/<?php echo $list->unit_id; ?>" type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                            <a href="<?php echo base_url() ?>Master/delete_unit/<?php echo $list->unit_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Unit');"><i class="fa fa-trash text-danger"></i></a>
                          </div>
                        </td>
                        <td><?php echo $list->unit_name; ?></td>
                        <td><?php echo $list->unit_short_name; ?></td>
                        <td>
                          <?php if($list->unit_status == 0){ echo '<span class="text-danger">Inactive</span>'; }
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
      </div>
    </section>
  </div>

</body>
</html>
