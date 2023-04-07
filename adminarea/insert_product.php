<?php
include('../include/connect.php');

 if (isset($_POST['insert_product'])){

   $product_title = $_POST['product_title'];
   $description = $_POST['description'];
   $product_keyword = $_POST['product_keyword'];
   $product_category = $_POST['product_category'];
   $product_title = $_POST['product_title'];
   $product_brands = $_POST['product_brands'];
   $product_price = $_POST['product_price'];
   $product_status = 'true';

   //for img
   $product_image1 = $_FILES['product_image1']['name'];
   $product_image2 = $_FILES['product_image2']['name'];
   
   $temp_image1 = $_FILES['product_image1']['tmp_name'];
   $temp_image2 = $_FILES['product_image2']['tmp_name'];

    //select data from database

    $result_query = mysqli_query($con,"SELECT * FROM product "); 
    $count = mysqli_num_rows($result_query);
    if($count>0)
    {
      echo ("already present") ;
    }
//     else
//     {
//        $query = "INSERT INTO categories(title,description,product_keywords,category_id,brand_id, p_img1,p_img2,amount,Date,status) VALUES('$product_title','$description','$product_keyword','$product_category','$product_title','$product_brands','$product_image1','$product_image2','$product_price',NOW(),'$product_status')"; 
//        $result = mysqli_query($con,$query) or die('Error querying database.');
//        echo "<script>alert('successfully added')</script>";
//     }
//     // echo "customer present" ;
// }
 //checking condittion not compulsory as reqired is given
//  if($product_title == '' or $description == '' or $product_keyword == '' or $product_category == '' or $product_brands == '' or $product_price == '' or $product_image1 == '' or $product_image2 == ''){
//    echo "<script>alert('please enter all the fields')</script>";
   // exit();

else{
   move_uploaded_file($temp_image1,"../p_imgs/$product_image1");
   move_uploaded_file($temp_image2,"../p_imgs/$product_image2");

   // //insert
   mysqli_select_db("product",$con);
   $insert_query = "INSERT INTO product (title,description,product_keywords,category_id,brand_id, p_img1,p_img2,amount,Date,status) VALUES ('$product_title','$description','$product_keyword','$product_category','$product_title','$product_brands','$product_image1','$product_image2','$product_price',NOW(),'$product_status')";
   $result = mysqli_query($con,$insert_query) or die('Error querying database.');
   if($result_query){
      echo "<script>alert('Successfully inserted products')</script>";
   }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
     <!-- bootstrap css link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <!--font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!--css link-->
<link rel="stylesheet" href="../index.css">
</head>
<body class = "bg-light">
    <div class="container mt-3 w-50 m-auto ">
        <h1 class="text-center">Insert Product</h1>
        <!--form-->
        <form action = "" method = "" enctype = "multipart/form-data">
            <!--title-->
             <div class="form-outline mb-4">
                <label for = "product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
             </div>
             <!--description-->
             <div class="form-outline mb-4">
                <label for = "description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product description" autocomplete="off" required="required">
             </div>
             <!--key-->
             <div class="form-outline mb-4">
                <label for = "product_keyword" class="form-label">product keyword </label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter product keyword" autocomplete="off" required="required">
             </div>
             <!--categories-->
             <div class="form-outline mb-4">
                <select name="product_category" id="" class="form-control">
                    <option value="">Select category</option>
                    <?php
                      $select_query = "SELECT * FROM categories ";
                      $result_query = mysqli_query($con, $select_query);
                      while($row = mysqli_fetch_assoc($result_query)){
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";

                      }
                    ?>      
                </select>
             </div>
             <!--brands-->
             <div class="form-outline mb-4">
                <select name="product_brands" id="" class="form-control">
                <?php
                      $select_query = "SELECT * FROM brands ";
                      $result_query = mysqli_query($con, $select_query);
                      while($row = mysqli_fetch_assoc($result_query)){
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";

                      }
                    ?>    
                </select>
             </div>

             <!--img-->
             <div class="form-outline mb-4">
                <label for = "product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
             </div>
             <div class="form-outline mb-4">
                <label for = "product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
             </div>
             <!--Price-->
             <div class="form-outline mb-4">
                <label for = "product_price" class="form-label">product price </label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
             </div>
             <!--submit-->
             <div class="form-outline mb-4">
                <input type = "submit" name="insert_product" class="btn btn-info mb-auto px-3 " value="Insert Product">
             </div>
        </form>
    </div>
    
    
   
                        
    
</body>
</html>