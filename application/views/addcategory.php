
   <div class="row"> <!-- start row -->

<h3 class="contact">Add Post</h3>

   <div class="leftcolumn ">  
     <form action="<?php echo  site_url('Category/insert'); ?>" method="post">
       <!-- <label for="c_id">Category ID</label>
       <input type="text" id="c_id" name="c_id" placeholder="Enter Category ID"> -->

       <label for="c_name">Cateogry Name</label>
       <input type="text" id="c_name" name="c_name" placeholder="Enter Category Name">

       <input type="submit" value="Submit">
     </form>
   </div>





</div><!-- end row -->


<div class="row">

<div class="blog_view">
  
<table>
  <tr>
  <th>ID</th>
    <th>Category Name</th>
    <th>Action</th>
  </tr>
<?php foreach($result as $row) {?>
<tr>
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->cat_name; ?></td>
    <td> <a href="<?php echo site_url('Category/edit');?>/<?php echo $row->id;?>">Edit</a>  | 
        <a href="<?php echo site_url('Category/delete');?>/<?php echo $row->id;?>">Delete</a>
    </td>
</tr>

<?php } ?>


</table>
  
</div>

</div>











