
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Openings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="success"><h2><?php echo $this->session->flashdata('success');unset($_SESSION['success']); ?></h3></div>
              <form action="<?php echo base_url('Opening/add'); ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">



                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="exampleInputEmail1">Title <span class="important"> *</span></label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="e:g PHP Developer,  ios developer">
                      <div class="error"><?php echo form_error('name'); ?></div>
                    </div>
                  </div>


                      <div class="form-group row">
                    <div class="col-md-12">
                      <label for="exampleInputEmail1">Sub Title <span class="important"> *</span></label>
                      <input type="text" name="sub_title" class="form-control" id="exampleInputEmail1" placeholder="e:g PHP Developer,  IOS Developer">
                      <div class="error"><?php echo form_error('name'); ?></div>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="exampleInputPassword1">Description </label>
                    <textarea name="description" class="form-control" rows="10"></textarea>
                  </div>
                  <div class="error"><?php echo form_error('description'); ?></div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



          </div>
          <!--/.col (left) -->


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
