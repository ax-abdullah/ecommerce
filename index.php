<?php 
    include('./layout/user/header.php');
?>
    <header class="container-fluid p-0">
        <!-- first child  Navigation-->
       <nav class="navbar navbar-expand-lg bg-info bg-gradient">
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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="views/all_products.php
                    ">Products</a>
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
                    <form class="d-flex" role="search" action="index.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" name="search_data" aria-label="Search">
                        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                        <input type="submit"  id="search" class="btn btn-outline-light" name="search" value="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Second Child  Greeting|login-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient p-2">
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
    <div class="bg-light bg-gradient p-2">
        <h3 class="text-center">
            Void Store
        </h3>
        <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, a.
        </p>
    </div>

    <!-- Fourth Child Products and Sidenav -->
    <div class="row m-0">
        <aside class="col-md-2 bg-secondary bg-gradient p-0 rounded-top">
            <!-- Brands to be displayed -->
            <ul class="navbar-nav me-auto text-center ">
                <li class="nav-item bg-info bg-gradient mb-1 rounded-top">
                    <a href="#" class="nav-link text-light">
                        <h4>Delivery Brand</h4>
                    </a>
                </li>

                <li class="nav-item">
                    <?php 
                    get_nav_items('brand', 'brands');
                ?>
            </ul>

            <!-- Categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info bg-gradient mb-1">
                    <a href="index.php" class="nav-link text-light">
                        <h4>Categories</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <?php 
                        get_nav_items('category', 'categories');
                    ?>
                </li>
            </ul>
        </aside>
        <section class="col-md-10">
            <div class='row'>
                    <?php
                    if(isset($_GET['search_data'])){
                        searchBar();
                    }
                    else{
                        get_products();
                    }
                    ?>
                    </div>
        </section>
    </div>
    <script>

        document.addEventListener("DOMContentLoaded", function(event) { 
            let scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) {
                window.scrollTo(0, scrollpos);
                localStorage.removeItem('scrollpos');
            }
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
<?php include('./layout/user/bottom.php'); ?>