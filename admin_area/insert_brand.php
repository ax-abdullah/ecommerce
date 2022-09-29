<?php 
    include('../includes/connection.php');

    if(isset($_POST['insert_brand'])){
        $brand_title = $_POST['brand_title'];

        $selec_brand = "SELECT * FROM brands WHERE brand_title='$brand_title'";
        $selection_result = mysqli_query($connection, $selec_brand);
        $row_nums = mysqli_num_rows($selection_result);
        if($row_nums > 0){
            echo "<script>alert('Brand already present in the database')</script>";
        }
        else{
            $query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
            $result = mysqli_query($connection, $query);
            if($result){
                echo "<script>alert('you have successfully inserted the brand')</script>";
            }
        }
    }
?>
<form action="" method="POST">
    <div class="input-group w-90"> 
        <span class="input-group-text bg-info bg-gradient" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" name="brand_title" class="form-control" placeholder="Insert Brand" aria-label="Brand" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 my-3 ">
            <input type="submit" name="insert_brand" class="form-control bg-info text-light bg-gradient" value="Insert Brand" aria-label="Brand" aria-describedby="basic-addon1">
    </div>
</form>