 <?php
include('../include/connect.php');
if(isset($_POST['insert_brand'])){
    $brand_title=$_POST['brand_title'];
    //select data from database

    $result_query = mysqli_query($con,"SELECT * FROM brands WHERE 	brand_title='$brand_title'"); 
    $count = mysqli_num_rows($result_query);
    if($count>0)
    {
      echo "<script>alert('already present')</script>" ;
    }
    else
    {
       $query = "INSERT INTO brands(brand_title) VALUES('$brand_title')"; 
       $result = mysqli_query($con,$query) or die('Error querying database.');
       echo "<script>alert('successfully added')</script>";
    }
   
    
}

?>
<h2 class="text-center"> Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title"placeholder="Insert Brands" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
<input type="submit" class="bg-warning border-0 p-2 my-5" name="insert_brand"values="Insert brands"  placeholder="Insert brands"> 
</div>
</form>