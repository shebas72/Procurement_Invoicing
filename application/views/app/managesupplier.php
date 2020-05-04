  <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Suppliers</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6" align="right">
                                <a href="<?=base_url().'app/newsupplier';?>" class="btn btn-primary">Create New</a>
                              
                            </div>
                        </div>

                        <!-- products -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('errors'); ?>
        </div>
    <?php } ?>
                                        <h5 class="card-title mt-0 mb-0 header-title">Recent Orders</h5>

                                        <div class="table-responsive mt-4">
                                       <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Action</th>
                                                    
                                                
                                                </tr>
                                            </thead>
                                        
                                        
                                           <tbody id="show_data">
                                                <?php
  $i=1;
  foreach($suppliers as $supplier)
  { ?>
                                                <tr>
                                                    <td><?php echo $supplier->name; ?></td>
                                                    <td><?php echo $supplier->company; ?></td>
                                                    <td><?php echo $supplier->email; ?></td>
                                                    <td><?php echo $supplier->phone; ?></td>
                                                    <td>
                                                 <a href="<?php echo base_url('app/managesupplierfull/updatesupplier/'.$supplier->sid) ?>" class="btn btn-info width-xs">View/Update</a>


                                                    
                                                     <input type="button" href="#" class="btn btn-danger width-xs" value="Delete"/></td>
                                                   
                                                </tr>
                                                <?php
                                                 $i++;
  }
   ?>
                                              
                                            
                                            </tbody>
                                        </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                      
                        </div>
                        <!-- end row -->

                    </div>
                </div> <!-- content -->

             