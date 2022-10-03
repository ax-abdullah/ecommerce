<?php 
    include('../includes/connection.php');

    $categories = "SELECT * FROM `categories`";
    $query = mysqli_query($connection, $categories);
    // $categories_result = mysqli_fetch_assoc($query);

    $brands = "SELECT * FROM `brands`";
    $brands_query = mysqli_query($connection, $brands);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style link -->
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- Form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required>
            </div>
            <!-- description -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off" required>
            </div>
            <!-- keywords -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required>
            </div>
            <!-- Categories -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php 
                        while($categories_result = mysqli_fetch_assoc($query)){
                           echo "<option value='".$categories_result['category_id']."'>".$categories_result['category_title']."</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- brands -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a brand</option>
                    <?php 
                        while($brands_result = mysqli_fetch_assoc($brands_query)){
                            echo "<option value=".$brands_result['brand_id'].">"
                            .$brands_result['brand_title'].
                            "</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- image 1 -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>            
            <!-- image 2 -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required>
            </div>            
        </form>
            <!-- image 3 -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required>
            </div>     
            <!-- price -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required>
            </div>                   
            <!-- price -->
            <div class="form-outline mb-4  col-md-8 col-lg-6 col-sm-10 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info mt-3 px-3 text-light bg-gradient" value="Insert Product">
            </div>                   
        </form>
    </div>

    <!-- Last child -->
    <!-- <footer class="bg-info bg-gradient p-4 text-center footer">
        <p class="m-0">All rights reserved &copy; Designed by Abdullah Ahmed-2022</p>
    </footer> -->
    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>