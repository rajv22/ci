


 <section class="content">
<div class="card">
  <div class="card-body p-0">
    <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
        <th >Title</th>
         <th >Sub Title</th>
        <th class="text-center">Description</th>
        <th class="text-center">Action</th>
         </tr>
      </thead>
   <tbody>
    <?php if(isset($category)){ foreach($category as $cat) { ?>
     <tr>
     <td><?php echo $cat['title']; ?></td>
     <td><?php echo $cat['sub_title']; ?></td>
          <td><?php echo $cat['description']; ?></td>

                <td>
          <a href="<?php echo base_url('Opening/del/').$cat['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="action_btn"><i class="fas fa-trash error"></i></a>

            <a href="<?php echo base_url('Opening/update/').$cat['id']; ?>" class="action_btn">
             <i class="fas fa-edit"></i>
            </a>
            </td>
            
            </tr>   
           <?php }} ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</section>
    