<html>
<head>
	<title>Admin Single Product</title>
</head>
<body>
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
		<a href=""><img src="" alt=""></a>Image <a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
		<a href=""><img src="" alt=""></a>Image <a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
		<a href=""><img src="" alt=""></a>Image<a href="">Delete</a><input type="checkbox" name="main_image" value="">main<br>
		<input type="submit" value="cancel" >
		<input type="submit" value="Preview" >
		<input type="submit" value="Update" >
	</form>

</body>
</html>