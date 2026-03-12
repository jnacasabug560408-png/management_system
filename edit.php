<?php
include 'db.php';

$id=$_GET['id'];

$result=$conn->query("SELECT * FROM products WHERE id=$id");

$row=$result->fetch_assoc();
?>

<h2>Edit Product</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Name
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Description
<textarea name="description"><?php echo $row['description']; ?></textarea><br><br>

Image
<input type="file" name="image"><br><br>

<button type="submit">Update</button>

</form>