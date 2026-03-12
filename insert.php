<?php
include 'db.php';

$name=$_POST['name'];
$description=$_POST['description'];
$category_id=$_POST['category_id'];
$brand_id=$_POST['brand_id'];

$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$image);

$sql="INSERT INTO products(category_id,brand_id,name,description,image)
VALUES('$category_id','$brand_id','$name','$description','$image')";

$conn->query($sql);

header("Location:index.php");
?>