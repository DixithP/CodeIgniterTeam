<<<<<<< HEAD
<html>
<head>
	<title>Admin Single Product</title>
</head>
<body>
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" /> -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> -->
    <script>
    $(document).ready(function(){

    });

    </script>
    <title>Single Product Admin</title>
  </head>
>>>>>>> origin/master
	<form action="" method="post">
		Name:<input type="text" name="product_name"><br>
		Description:<textarea name='product_description'></textarea><br>
		Categories :<select name="categories">
						<option value='shirt'>Shirt</option>
						<option value='hat'>Hat</option>
						<option value='mug'>Mug</option>
						<option value='key chain'>Key Chain</option>
					</select><br>
		or Add a new Category : <input type="text" name="new_category"><br>
		<form  action="" method="post">
			Images : <input type="submit" value="Upload">
		</form>
<<<<<<< HEAD
		<a href=""><img src="" alt=""></a>Image <a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
		<a href=""><img src="" alt=""></a>Image <a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
		<a href=""><img src="" alt=""></a>Image<a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
=======
		<a href=""><img src="random.png" alt=""></a>Image <a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
		<a href=""><img src="random.png" alt=""></a>Image <a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
		<a href=""><img src="random.png" alt=""></a>Image<a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
>>>>>>> origin/master
		<input type="submit" value="cancel" >
		<input type="submit" value="Preview" >
		<input type="submit" value="Update" >
	</form>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/master
