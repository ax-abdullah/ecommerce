<?php 
    include('./includes/connection.php');

    function get_products(){
        global $connection;
        $products_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";
        $result = mysqli_query($connection, $products_query);

        while($products_result = mysqli_fetch_assoc($result)){
            echo "
            <div class='col-md-4 mb-4'>
              <div class='card'>
                <img src='./admin_area/product_images/".$products_result["product_image1"]."' class='card-img-top' alt='...'>
                <div class='card-body'>
                 <h5 class='card-title'>".$products_result['product_title']."</h5>
                 <p class='card-text'>".$products_result['product_description']."</p>
                 <a href='#' class='btn btn-info'> Add to cart</a>
                 <a href='#' class='btn btn-secondary'> View more</a>
                </div>
              </div>
            </div>
        ";
        } 
    }

    function get_nav_items($item, $database){
        global $connection;
        $select_item = "SELECT * FROM `$database`";
        $item_result = mysqli_query($connection, $select_item);
        while($row_data = mysqli_fetch_assoc($item_result)){
            echo '<a href="index.php?brand_id='.$row_data["$item"."_id"].'" class="nav-link text-light">'
                   . $row_data["$item"."_title"].
                 '</a>' ;
        }
    }
?>