<?php
include('include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusion Mart</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- fontawesome link-->
<link rel="stylesheet" href="main.css">
</head>    
<body>
    <!-- navbar header starts-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
             <h1><a href="#" class="navbar-brand text-warning"><b>FusionMart</b></a></h1>
             <button class="navbar-toggler btn-warning" data-toggle="collapse" data-target="#mnav">
                <span class="navbar-toggler-icon btn-warning"></span>
             </button>
             <div class="collapse navbar-collapse" id="mnav">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item"><a href="" class="nav-link active text-light">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-light">About</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-light">Categories</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-light"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning " type="submit">Search</button>
                     </form>
             </div>
        </div>
    </nav>
    <!--navbar ends-->
    <!-- second navbar-->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a href="registration/login.php" class="nav-link">Login</a>
            </li>
             <li class="nav-item">
                <a href="adminarea/registration/registration.php" class="nav-link">Admin Panel</a>
            </li>
        </ul>
    </nav>
    <!--second navbar ends-->
    <!--  Home section-->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--home section close-->
<!-- third section starts-->
<div class="bg-light">
    <h3 class="text-center">Let's Shop</h3>
    <p class="text-center">Ghar betho shopping</p>
</div>
<!--third section ends-->
<!--fourth section starts-->
<div class="row">
    <div class="col-md-10">
        <!--products-->
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="top1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Crepe Top</h5>
                        <p class="card-text">Bottle green crepe top for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
               <div class="card">
                   <img src="foot4.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                       <h5 class="card-title">Jhuti</h5>
                       <p class="card-text">White jhuti for women's</p>
                       <a href="#" class="btn btn-primary">Add to cart</a>
                       <a href="#" class="btn btn-light">View More</a>
                   </div>
               </div>
            </div>
            <div class="col-md-4 mb-2">
               <div class="card">
                   <img src="tshirt1.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                       <h5 class="card-title">Tri Color T-shirt</h5>
                       <p class="card-text">Stylish tri color t-shirts for men's</p>
                       <a href="#" class="btn btn-primary">Add to cart</a>
                       <a href="#" class="btn btn-light">View More</a>
                   </div>
               </div>
            </div>
            <div class="col-md-4 mb-2">
               <div class="card">
                   <img src="tshirt3.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                       <h5 class="card-title">Men's Tshirt</h5>
                       <p class="card-text">Trendy t-shirt for men's</p>
                       <a href="#" class="btn btn-primary">Add to cart</a>
                       <a href="#" class="btn btn-light">View More</a>
                   </div>
               </div>
            </div>
            <div class="col-md-4 mb-2">
               <div class="card">
                   <img src="mshirt2.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                       <h5 class="card-title">Men's Shirt</h5>
                       <p class="card-text">Shirt for men's</p>
                       <a href="#" class="btn btn-primary">Add to cart</a>
                       <a href="#" class="btn btn-light">View More</a>
                   </div>
               </div>
            </div>
            <div class="col-md-4 mb-2">
               <div class="card">
                   <img src="fjeans2.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                       <h5 class="card-title">Trendy Jeans</h5>
                       <p class="card-text">Trendy blue color jeans for women's</p>
                       <a href="#" class="btn btn-primary">Add to cart</a>
                       <a href="#" class="btn btn-light">View More</a>
                   </div>
               </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="top/top10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Top</h5>
                        <p class="card-text">Stripes top's for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="foots wear/h3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pump Heel</h5>
                        <p class="card-text">Black pump heels for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="mens/fp1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Formal Pent</h5>
                        <p class="card-text">Black color formal pents for men's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="mens/s2.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Black Shoe</h5>
                        <p class="card-text">Stylish black shoes for men's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="accessories/h3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pink Handbag</h5>
                        <p class="card-text">Beautiful pink handbag for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="women/gown2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dotted Gown</h5>
                        <p class="card-text">Dotted long gown for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="kids/b10.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kurta pyjama</h5>
                        <p class="card-text">Off-white color kurta pyjama for kids</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="kids/g10.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Trendy Dress</h5>
                        <p class="card-text">Pista color dress for girls</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="women/j7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Skinny Jeans</h5>
                        <p class="card-text">Skinny jeans for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="accessories/t3.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Stone Tiara</h5>
                        <p class="card-text">Beautiful tiara for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="mens/w3.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Men's Watch</h5>
                        <p class="card-text">Watch for men's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="mens/s6.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sneakers</h5>
                        <p class="card-text">Black and white neakers for men's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="mens/c3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Plain Shirt</h5>
                        <p class="card-text">Normal plain shirt for men's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="women/w1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Western Top</h5>
                        <p class="card-text">Pink western top for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
             <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="foots wear/s4.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pink Slipper</h5>
                        <p class="card-text">Beautiful slippers for women's</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-light">View More</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <!--fourth section ends-->
    <div class="col-md-2 bg-light p-0">
        <!--sidenavbar-->
        <!--brands-->
        <ul class="navbr-nav me-auto text-center">
            <li class="nav-item bg-warning" >
                <a href="#" class="nav-link text-white"><h4>Our Brands</h4></a>
            </li>
            <?php
            $select_brands = "SELECT * FROM brands";
            $result_brands = mysqli_query($con,$select_brands);
            //$row_data = mysqli_fetch_assoc($result_brands);
            //echo $row_data['brand_title'];
            while($row_data = mysqli_fetch_assoc($result_brands)){
                $brand_title = $row_data['brand_title'];
                $brand_id = $row_data['brand_id'];
                echo "
                <li class='nav-item'>
                <a href='index.php?brand = $brand_id' class='nav-link text-dark'>$brand_title</a></li>";
            }
            ?>
            
        </ul>
        <!--categories-->
        <ul class="navbr-nav me-auto text-center">
           <li class="nav-item bg-warning">
               <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
           </li>
           <?php
            $select_categories = "SELECT * FROM categories";
            $result_categories = mysqli_query($con,$select_categories);
            //$row_data = mysqli_fetch_assoc($result_categories);
            //echo $row_data['brand_title'];
            while($row_data = mysqli_fetch_assoc($result_categories)){
                $category_title = $row_data['category_title'];
                $category_id = $row_data['category_id'];
                echo "<li class='nav-item'>
                <a href='index.php?category = $category_id' class='nav-link text-dark'>$category_title</a></li>";
            }

            
            ?>
       </ul>
    </div>
</div>
<!--sidenavbar ends-->
<!-- footer section start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">About</a></li>
                    <!-- <li><a href="#">FAQ</a></li>
                    <li><a href="#">Service</a></li> -->
                </ul>     
            </div> 
            <!--<div class="column">
                <h4>Help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Return</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Cancellation</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>     
            </div> -->
            <div class="column">
                <h4>Shop Now</h4>
                <ul>
                    <li><a href="mens/mens.html">Men's Wear</a></li>
                    <li><a href="accessories/access.html">Accessories</a></li>
                    <li><a href="foots wear/foot.html">Footwear</a></li>
                    <li><a href="watch/watch.html">Watches</a></li>
                    <li><a href="top/top.html">Tops</a></li>
                </ul>     
            </div>
            <div class="column">
                <h4>Address</h4>
                <ul>
                    <li><a href="mailto:fusionmart58@gmail.com">Send E-mail</a></li>
                    <li><a href="tel:+919977255739">phone</a></li>
                </ul>     
            </div>
            <div class="column">
                <h4>Connect with us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>   
            </div>
            <div class="column">
                <h4>
                    Location</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14868.072997192749!2d76.1989497788705!3d21.310295223543015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd83310b632f25d%3A0x34d5cd0e6e2e9b19!2sNew%20Indira%20Colony%2C%20Burhanpur%2C%20Madhya%20Pradesh%20450331!5e0!3m2!1sen!2sin!4v1658891680298!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="copy">
            <p>copyright &copy;FusionMart</p>
        </div> 
    </div>
</footer>
<!--footer section ends -->
</body>
</html>