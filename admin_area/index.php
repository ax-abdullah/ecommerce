<?php 
    include('../includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style link -->
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info bg-gradient">
            <div class="container-fluid">
                <img src="../images/logo/logo-2.png" alt="void-logo" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light bg-gradient">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>
        <!-- Third child -->
        <div class="row m-0">
            <div class="col-md-12 bg-secondary bg-gradient d-flex p-1 align-items-center">
                <div class="p-3">
                    <a href="#" >
                        <img src="../images/products/pinapple.jpg" class="admin_image" alt="Pineapple Juice">
                    </a>
                    <p class="text-light text-center">
                        Admin Name
                    </p>
                </div>
                <div class="button d-flex flex-wrap gap-2">
                    <button class="p-0 border-0">
                            <a href="insert_products.php" class="nav-link px-3 py-1  py-1 text-light bg-info bg-gradient my-1 ">
                                Insert Products
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="#" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                View Products
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="index.php?insert_category" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                Insert Categories
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="#" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                View Categories
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="index.php?insert_brand" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                Insert Brands
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="#" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                View Brands
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="#" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                All Orders        
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="#" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                All Payments
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="#" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                List Users
                            </a>
                    </button>
                    <button class="p-0 border-0">
                            <a href="#" class="nav-link px-3 py-1 text-light bg-info bg-gradient my-1">
                                Logout
                            </a>
                    </button>

                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brand.php');
            }
            if(isset($_GET['insert_products'])){
                include('insert_products.php');
            }
        ?>
    </div>
    <!-- Last child -->
    <footer class="bg-info bg-gradient p-4 text-center footer">
        <p class="m-0">All rights reserved &copy; Designed by Abdullah Ahmed-2022</p>
    </footer>
    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script>
        // let category = document.querySelector('#insert_cat');
        // if(category) category.focus();
        (function focus(){
            let input = document.querySelector('.insert');
            input.focus();
            console.log(input);
            
        })();
    </script>
</body>
</html>