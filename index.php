<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style link -->
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header class="container-fluid p-0">
        <!-- first child  Navigation-->
       <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo/logo-2.png" class="logo" alt="Ecommerce logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-4 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <sup>1</sup>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Total Price:100/-  </a>
                    </li>
                </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Second Child  Greeting|login-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-2">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">Welcome guest</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Login</a>
            </li>
            
        </ul>
    </nav>

    <!-- Third Child  Store name-->
    <div class="bg-light p-2">
        <h3 class="text-center">
            Void Store
        </h3>
        <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, a.
        </p>
    </div>

    <!-- Fourth Child Products and Sidenav -->
    <div class="row m-0">
        <aside class="col-md-2 bg-secondary p-0">
            <!-- Brands to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info mb-1">
                    <a href="#" class="nav-link text-light">
                        <h4>Delivery Brand</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Brand1
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Brand2
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Brand3
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Brand4
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Brand5
                    </a>
                </li>
            </ul>

            <!-- Categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info mb-1">
                    <a href="#" class="nav-link text-light">
                        <h4>Categories</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Category 1
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Category 2
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Category 3
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Category 4
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        Category 5
                    </a>
                </li>
            </ul>
        </aside>
        <section class="col-md-10">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/logo/logo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/products/apple.jpg" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/products/peppers.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/products/strawberry.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/products/dress-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/products/dress-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/products/dress-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/products/dress-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info"> Add to cart</a>
                                <a href="#" class="btn btn-secondary"> View more</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                
            </div>
        </section>
    </div>

    <!-- Last child -->
    <footer class="bg-info p-4 text-center">
        <p class="m-0">All rights reserved &copy; Designed by Abdullah Ahmed-2022</p>
    </footer>
    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>