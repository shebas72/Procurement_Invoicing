  <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">View and Update</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6" align="right">
                             &nbsp;
                              
                            </div>
                        </div>

                        <!-- products -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                       <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
    <?php
  $i=1;
  foreach($data as $row)
  {
    ?>
    <form class="form" method="post" action="<?php echo base_url('app/managesupplierfull/updatesupplier/'.$row->sid) ?>">
  
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="simpleinput">Name</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="simpleinput" name="name"  value="<?php echo $row->name; ?>" required
                                                               >
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="example-email">Email</label>
                                                        <div class="col-lg-10">
                         <input type="email" id="example-email" name="email"
                                      value="<?php echo $row->email; ?>"                          class="form-control" required="">
                                                        </div>
                                                    </div>
                                                  <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="simpleinput">Company</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="simpleinput" name="company" value="<?php echo $row->company; ?>"
                                                               >
                                                        </div>
                                                    </div>
 <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="simpleinput">Phone</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="simpleinput" name="phone" value="<?php echo $row->phone; ?>"
                                                               >
                                                        </div>
                                                    </div>
                                               
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="example-textarea">Address</label>
                                                        <div class="col-lg-10">
                                                            <textarea class="form-control" rows="5"
                                                             name="address" placeholder="" id="example-textarea"><?php echo $row->address; ?></textarea>
                                                        </div>
                                                    </div>

                                       <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="simpleinput">City</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="simpleinput" name="city" value="<?php echo $row->city; ?>"
                                                               >
                                                        </div>
                                                    </div>
                                                   <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="simpleinput">Region</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="simpleinput" name="region" value="<?php echo $row->region; ?>"
                                                               >
                                                        </div>
                                                    </div>


                                                   <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="simpleinput">Country</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="simpleinput" name="country" value="<?php echo $row->country; ?>"
                                                               >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="simpleinput">Post Box</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="simpleinput" name="postbox" value="<?php echo $row->postbox; ?>"
                                                               >
                                                        </div>
                                                    </div>
                                                    <?php } ?>
   <button type="submit" name="update" class="btn btn-primary">Update</button>
                                                </div>
                                              
                                            </div>


                                           
                                        </form>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                      
                        </div>
                        <!-- end row -->

                    </div>
                </div> <!-- content -->

             

                <!-- Footer Start -->
          


