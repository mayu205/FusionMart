<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="main.css">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<!--css link-->
<link rel="stylesheet" href="index.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first-->
            <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <h1 contenteditable="true"><a href="#" class="navbar navbar-brand text-dark "><label class="logo">FusionMart</label></a></h1>
            <nav class="navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="navlink text-dark">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
            </div>
        </nav>
        <!--second-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--third-->
        <div class="row">
            <div class="col md-12 bg-dark p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href="#"><img src="c2.jpg" alt="" class="admin_img"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-dark bg-warning my-1">Insert Products</a></button>
                    <button><a href="#" class="nav-link text-dark bg-warning my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-dark bg-warning my-1">Insert Categories</a></button>
                    <button><a href="#" class="nav-link text-dark bg-warning my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-dark bg-warning my-1">Insert Brands</a></button>
                    <button><a href="#" class="nav-link text-dark bg-warning my-1">View Brands</a></button>
                    <!-- <button><a href="#" class="nav-link text-dark bg-warning my-1">All Orders</a></button>
                    <button><a href="#" class="nav-link text-dark bg-warning my-1">All Payments</a></button>
                    <button><a href="#" class="nav-link text-dark bg-warning my-1">Registered user</a></button>
                    <button><a href="#" class="nav-link text-dark bg-warning my-1">Logout</a></button> -->
                </div>
            </div>
        </div>
        <!--forth-->
        <div class="forth my-4">
            <?php 
            if(isset($_GET['insert_category'])){
              include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
              }
            ?>
        </div>
    </div>
<!--bootsrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>