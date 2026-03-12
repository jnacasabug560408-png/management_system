```php
<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Add Product</h2>

<form action="insert.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label class="form-label">Product Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<div class="mb-3">
<label class="form-label">Category</label>

<select name="category_id" class="form-control">

<?php
$result = $conn->query("SELECT * FROM categories");

while($row = $result->fetch_assoc()){
echo "<option value='".$row['id']."'>".$row['category_name']."</option>";
}
?>

</select>

</div>

<div class="mb-3">
<label class="form-label">Brand</label>

<select name="brand_id" class="form-control">

<?php
$result = $conn->query("SELECT * FROM brands");

while($row = $result->fetch_assoc()){
echo "<option value='".$row['id']."'>".$row['brand_name']."</option>";
}
?>

</select>

</div>

<div class="mb-3">
<label class="form-label">Image</label>
<input type="file" name="image" class="form-control" required>
</div>

<div class="mb-3">
<img id="preview" width="120">
</div>

<button type="submit" class="btn btn-primary">Save Product</button>

<a href="index.php" class="btn btn-secondary">Back</a>

</form>

</div>

<script>

document.querySelector('input[type="file"]').addEventListener('change', function(e){

const file = e.target.files[0];
const reader = new FileReader();

reader.onload = function(){
document.getElementById("preview").src = reader.result;
}

reader.readAsDataURL(file);

});

</script>

</body>
</html>
```
