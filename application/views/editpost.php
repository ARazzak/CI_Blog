
   <div class="row"> <!-- start row -->

<h3 class="contact">Eidt Post</h3>

   <div class="leftcolumn ">
     <form action="<?php echo site_url('Post/update')?>/<?php echo $row->id; ?>" method="post">
       <label for="title">Title</label>
       <input type="text" id="title" name="title" value="<?php echo $row->title; ?>">

       <label for="description">Description</label>
       <textarea id="description" name="description"  style="height:100px"><?php echo $row->description; ?></textarea>
      
       <select name="category">
       <?php foreach($categories as $row) {?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->cat_name; ?></option>
            <?php } ?>
       </select>

       <input type="submit" value="Submit">
     </form>
   </div>




</div><!-- end row -->












