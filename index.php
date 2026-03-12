<?php
include 'db.php';

$sql="SELECT products.*,categories.category_name,brands.brand_name
FROM products
JOIN categories ON products.category_id=categories.id
JOIN brands ON products.brand_id=brands.id";

$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>

<title>Product Management</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Product Management System</h2>

<a href="create.php" class="btn btn-primary mb-3">Add Product</a>

<table class="table table-bordered">

<tr>
<th>Name</th>
<th>Category</th>
<th>Brand</th>
<th>Description</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['name']; ?></td>
<td><?php echo $row['category_name']; ?></td>
<td><?php echo $row['brand_name']; ?></td>
<td><?php echo $row['description']; ?></td>

<td>
<img src="uploads/<?php echo $row['image']; ?>" width="80">
</td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>