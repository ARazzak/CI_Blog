
   <div class="row"> <!-- start row -->

<h3 class="contact">Add Post</h3>

   <div class="leftcolumn ">
     <form action="<?php echo site_url('Post/create'); ?>" method="post" enctype="multipart/form-data" >
       <label for="title">Title</label>
       <input type="text" id="title" name="title" placeholder="Enter Your Title..">
      
       <label for="description">Description</label>
       <textarea id="description" name="description" placeholder="Write something.." style="height:120px"></textarea>
      
       <!-- <label for="category_name">Category Name</label>
       <input type="text" id="category_name" name="category_name" placeholder="Enter Your Category Name "> -->
       
       <select name="category">
       <?php foreach($categories as $row) {?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->cat_name; ?></option>
            <?php } ?>
       </select>


       <label for="p_img"> Image upload</label>
       <input type="file" name="p_img"  id="p_img"> <br><br>
     

       <input type="submit" value="Submit">
     </form>
   </div>




</div><!-- end row -->

<div class="row">

    <div class="blog_view">
      
    <table>
      <tr>
      <th>ID</th>
        <th>Blog Title</th>
        <th>Description</th>
        <th>Category ID</th>
        <th>Post Image</th>
        <th>Action</th>
      </tr>
  <?php foreach($result as $row) {?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->title; ?></td>
        <td><?php echo $row->description; ?></td>
        <td><?php echo $row->cat_id; ?></td>
        <td> <img src="<?php echo $row->p_img; ?>">  </td>
        <td> <a href="<?php echo site_url('Post/EditPost');?>/<?php echo $row->id;?>">Edit</a>  | 
            <a href="<?php echo site_url('Post/delete');?>/<?php echo $row->id;?>">Delete</a>
        </td>
    </tr>

  <?php } ?>


  </table>
      
    </div>

</div>












