<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin pannel</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- link for fountawsom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css -->
    <link rel="stylesheet" href="2.css">



</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Subhash</a>

                <nav class="navbar navbar-expand-lg  ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">welcome guest</a>
                        </li>

                    </ul>

                </nav>
            </div>

        </nav>

        <div class="bg-light">
            <h3 class="text-center p-2">manage details</h3>
            <div class="row">
                <div class="col-md-12 bg-secondary p-1  align-items-center">
                    <div class="p-3">
                        <a href=""><img src="..\images\pexels-photo-1478442.webp" class="admin_image" alt="">
                            <p class="text-center text-light">admin name</p>
                        </a>
                    </div>
                    <div class="button text-center">
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">insert products</a></button>
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">view products</a></button>
                        <button class="my-3"><a href="index.php?insert_catgries" class="nav-link text-center text-light bg-info my-1">insert catgries</a></button>
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">view catgries</a></button>
                        <button class="my-3"><a href="index.php?insert_brands" class="nav-link text-center text-light bg-info my-1">insert brand</a></button>
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">view brand</a></button>
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">all orders </a></button>
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">all payments</a></button>
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">list user</a></button>
                        <button class="my-3"><a href="" class="nav-link text-center text-light bg-info my-1">logout </a></button>
                    </div>
                </div>
            </div>
            </div>
            <div class="container my-5">
                <?php
                if(isset($_GET['insert_catgries'])){
                    include('insert_catgries.php');
                }
                if(isset($_GET['insert_brands'])){
                    include('insert_brands.php');
                }



                ?>
            </div>







        <!-- <div class="bg-info p-3 text-center">
            <p>All rights reserve @- Designed by subhash-2023</p>
        </div>
    </div> -->

    </div>







    <!-- bootstrap js lin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>