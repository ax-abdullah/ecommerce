<?php 
    include('./includes/connection.php');

    function get_products(){
        global $connection;
        $products_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";
        $result = mysqli_query($connection, $products_query);
        if(!isset($_GET['category'])){
          if(!isset($_GET['brand'])){
           $products_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";

            // while($products_result = mysqli_fetch_assoc($result)){
            //   echo "
            //   <div class='col-md-4 mb-4'>
            //     <div class='card'>
            //       <img src='./admin_area/product_images/".$products_result["product_image1"]."' class='card-img-top' alt='".$products_result["product_image1"]."'>
            //       <div class='card-body'>
            //         <h5 class='card-title'>".$products_result['product_title']."</h5>
            //         <p class='card-text'>".$products_result['product_description']."</p>
            //         <a href='#' class='btn btn-info'> Add to cart</a>
            //         <a href='#' class='btn btn-secondary'> View more</a>
            //       </div>
            //     </div>
            //   </div>  
            //     ";
            //   } 
            }else{
              $products_query = "SELECT * FROM `products` WHERE brand_id=".$_GET['brand'].""; 
            //   $result = mysqli_query($connection, $products_query);
              
            //   if($products_result = mysqli_fetch_assoc($result)){
            //     echo "
            //     <div class='col-md-4 mb-4'>
            //       <div class='card'>
            //         <img src='./admin_area/product_images/".$products_result["product_image1"]."' class='card-img-top' alt='".$products_result["product_image1"]."'>
            //         <div class='card-body'>
            //           <h5 class='card-title'>".$products_result['product_title']."</h5>
            //           <p class='card-text'>".$products_result['product_description']."</p>
            //           <a href='#' class='btn btn-info'> Add to cart</a>
            //           <a href='#' class='btn btn-secondary'> View more</a>
            //         </div>
            //       </div>
            //     </div>
            //     ";
            //   }
            //   else{
            //     echo "
            //     <div class='col mt-4 fs-1 text-center text-danger'>
            //       Sorry, This Brand is not available for service.
            //     </div>
            //     ";
            //   }
            }
          }
          else{
            $products_query = "SELECT * FROM `products` WHERE category_id=".$_GET['category'].""; 
            // $result = mysqli_query($connection, $products_query);

            // if($products_result = mysqli_fetch_assoc($result)){
            //   echo "
            //   <div class='col-md-4 mb-4'>
            //     <div class='card'>
            //       <img src='./admin_area/product_images/".$products_result["product_image1"]."' class='card-img-top' alt='".$products_result["product_image1"]."'>
            //       <div class='card-body'>
            //         <h5 class='card-title'>".$products_result['product_title']."</h5>
            //         <p class='card-text'>".$products_result['product_description']."</p>
            //         <a href='#' class='btn btn-info'> Add to cart</a>
            //         <a href='#' class='btn btn-secondary'> View more</a>
            //       </div>
            //     </div>
            //   </div>
            //   ";
            // }
            // else{
            //   echo "
            //   <div class='col mt-4 fs-1 text-center text-danger'>
            //     Sorry, No Stock for this Category
            //   </div>
            //   ";
            // }
          }
          $result = mysqli_query($connection, $products_query);
          $rows = mysqli_num_rows($result);

          if(!$rows){
            if(isset($_GET['brand'])){
              echo "
              <div class='col mt-4 '><h2 class='fs-1 text-center text-danger'>Sorry, This Brand is not available for service</h2></div>
              ";

            }
            else{
              echo "
              <div class='col mt-4 fs-1 text-center text-danger'><h2 class='fs-1 text-center text-danger'>Sorry, No Stock Available.</h2></div>
              ";
            }
          }
          while($products_result = mysqli_fetch_assoc($result)){
            echo "
            <div class='col-md-4 mb-4'>
              <div class='card'>
                <img src='./admin_area/product_images/".$products_result["product_image1"]."' class='card-img-top' alt='".$products_result["product_image1"]."'>
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
            echo '<a href="index.php?'."$item".'='.$row_data["$item"."_id"].'" class="nav-link text-light">'
                   . $row_data["$item"."_title"].
                 '</a>' ;
        }
    }
?>