<?php 
    include('../includes/connection.php');

    if(isset($_POST['insert_cat'])){
        $category_title = $_POST['cat_title'];

        $selec_cat = "SELECT * FROM categories WHERE category_title='$category_title'";
        $selection_result = mysqli_query($connection, $selec_cat);
        $row_nums = mysqli_num_rows($selection_result);
        if($row_nums > 0){
            echo "<script>alert('Category already present in the database')</script>";
        }
        else{
            if($category_title == ''){
                echo "<script>alert('Category can not be empty')</script>";
            }
            else{
                $query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
                $result = mysqli_query($connection, $query);
                if($result){
                    echo "<script>alert('you have successfully inserted the category')</script>";
                }

            }
        }
    }
?>
<h2 class="text-center mb-3">Insert Categories</h2>
<form action="" method="POST">
    <div class="input-group w-90"> 
        <span class="input-group-text bg-info bg-gradient" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" name="cat_title" class="form-control insert" placeholder="Insert Category" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 my-3 ">
            <input type="submit" name="insert_cat" class="form-control bg-info text-light bg-gradient" value="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>
</form>