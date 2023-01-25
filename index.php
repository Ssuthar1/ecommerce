<?php
include('C:\xampp\htdocs\subphp\ecommerce\includes\connect.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>


    <!-- link for css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- link for fontawsom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link for linking css file -->
    <link rel="stylesheet" href="1.css">


</head>

<body>

    <div class="container-fluid p-0 m-0">
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Subhash</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rigester</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price:100/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item ">
                    <a href="#" class="nav-link">welcome guest</a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">login</a>
                </li>
            </ul>

        </nav>

        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communication is the heart of ecommerce</p>
        </div>

        <div class="row">
            <div class="col-md-10">
                <!-- all products -->
                <div class="row">
                    <div class="col-md-4 mb-5 ">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/19090/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">add to cart</a>
                                <a href="#" class="btn btn-secondary">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/1478442/pexels-photo-1478442.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">add to cart</a>
                                <a href="#" class="btn btn-secondary">view more</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/1598508/pexels-photo-1598508.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">add to cart</a>
                                <a href="#" class="btn btn-secondary">view more</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/1598508/pexels-photo-1598508.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">add to cart</a>
                                <a href="#" class="btn btn-secondary">view more</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/1598508/pexels-photo-1598508.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">add to cart</a>
                                <a href="#" class="btn btn-secondary">view more</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/2048548/pexels-photo-2048548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">add to cart</a>
                                <a href="#" class="btn btn-secondary">view more</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 bg-secondary p-0">
                <!-- brands displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info p-0">
                        <a href="#" class="nav-link text-light">
                            <h4>delivery brands</h4>
                        </a>
                    </li>
                    <?php
                    $select_barnds="select * from brands";
                    $result_brands=mysqli_query($con,$select_barnds);
                    
                    while($row_data=mysqli_fetch_assoc($result_brands)){
                        $brand_title=$row_data['brand_title'];
                        $brand_id=$row_data['brand_id'];
                        echo" <li class='nav-item   p-0'>
                        <a href='index.php?brand=$brand_id' class='nav-link text-light'>
                        $brand_title
                        </a>
                    </li>";
                    }


                    ?>



                    
                    
                </ul>

                <!-- catgries displayed -->

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info p-0">
                        <a href="#" class="nav-link text-light">
                            <h4>Catgries</h4>
                        </a>
                    </li>


                    <?php
                    $select_catgries="select * from catgries";
                    $result_catgries=mysqli_query($con,$select_catgries);
                    
                    while($row_data=mysqli_fetch_assoc($result_catgries)){
                        $categray_title=$row_data['categray_title'];
                        $brand_id=$row_data['categray_id'];
                        echo" <li class='nav-item   p-0'>
                        <a href='#' class='nav-link text-light'>
                        $categray_title
                        </a>
                    </li>";
                    }


                    ?>


                </ul>


            </div>
        </div>




        <!-- footer -->

        <div class="bg-info p-3 text-center">
            <p>All rights reserve @- Designed by subhash-2023</p>
        </div>
    </div>



    <!-- linl for jasvascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>