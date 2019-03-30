<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/style.css">
</head>
<body>
<div class="menu"> <!-- start menu -->
      <a href="<?php echo site_url('Home');?>">Home</a>
	  <a href="#news">Blog</a>
	  <a href="<?php echo site_url('Home/Contact');?>">Contact</a>
	  <a href="#about">About</a>
	  
	  
	
	  <?php if($this->session->userdata('user_id'))
		{?>
		<a href="<?php echo site_url('Home/AddPost');?>">Add Post</a>
	  <a href="<?php echo site_url('Home/AddCategory');?>">Add Category</a>
				<a href="<?=  base_url()?>index.php/login/logout">(<?=$this->session->userdata['username']?>)Logout</a>
		<?php
		} 
		else{ ?>
			<a href="<?=  base_url()?>index.php/Home/login">Login</a>
		<?php } ?>

	  
 
    </div> <!-- end menu -->

<?php $this->load->view($view_page);?>

    <div class="footer">
    	<div class="footer-content">
    		<p>Copyright © Unitor Tech Limited 2019 - All Rights Reserved</p>
    	</div>

    </div> <!-- end footer -->

</body>
</html>









