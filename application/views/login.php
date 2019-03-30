
   <div class="row" style="min-height:calc(100vh - 120px)"> <!-- start row -->

<h3 class="contact">Login Page</h3>

   <div class="leftcolumn ">
     <form action="<?php echo site_url('Login/login'); ?>" method="post" >

     
     <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required style="width: 100%; padding: 12px; border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;margin-top: 6px;margin-bottom: 16px;resize: vertical">
        
    <!-- <button type="submit">Login</button> -->
    <input type="submit" value="Login">
     </form>
   </div>

   <div class="b_footer">

  </div>




</div><!-- end row -->














