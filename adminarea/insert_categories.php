<?php
include('../include/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
    
    //select data from database

    $result_query = mysqli_query($con,"SELECT * FROM categories WHERE category_title='$category_title'"); 
    $count = mysqli_num_rows($result_query);
    if($count>0)
    {
      echo ("already present") ;
    }
    else
    {
       $query = "INSERT INTO categories(category_title) VALUES('$category_title')"; 
       $result = mysqli_query($con,$query) or die('Error querying database.');
       echo "<script>alert('successfully added')</script>";
    }
    // echo "customer present" ;
    
}

?>
<h2 class="text-center"> Insert Category</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title"placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="bg-warning border-0 p-2 my-5" name="insert_cat"values="Insert categories"  placeholder="Insert categories"> 
  </div>
</form>

