<?php 
include('config.php');


if(isset($_POST['addproduct'])){
    $pid = $_POST['p_id'];
    $prod_cat = mysqli_real_escape_string($connection, $_POST['p_cat']);
    $prod_name = mysqli_real_escape_string($connection, $_POST['pname']);
    $prod_desc = mysqli_real_escape_string($connection, $_POST['pdesc']);
    $prod_price = mysqli_real_escape_string($connection, $_POST['price']);
    $prod_image_name = $_FILES['image']['name'];
    $prod_image_tmp = $_FILES['image']['tmp_name'];
    $prod_sku = mysqli_real_escape_string($connection, $_POST['sku']);
    $prod_code = mysqli_real_escape_string($connection, $_POST['pcode']);

    $check_prod = mysqli_query($connection, "SELECT * from product where `pcode`  = '$prod_code'");
    if(mysqli_num_rows($check_prod) > 0){
        echo "<script>
        alert('Product already exist');
        window.location.href ='addproduct.php';
        </script>";
    }else{
        move_uploaded_file($prod_image_tmp, 'uploads/' . $prod_image_name);
        $insert = mysqli_query($connection, "INSERT INTO `product` (`pid`,`p_cat`, `pname`, `pdesc`, `price`, `pimage`, `psku`, `pcode`, `pstatus`) VALUES ('$pid','$prod_cat', '$prod_name', '$prod_desc', '$prod_price', '$prod_image_name', '$prod_sku', '$prod_code', '1') ON DUPLICATE KEY UPDATE `p_cat` = '$prod_cat',  `pname` = '$prod_name', `pdesc` = '$prod_desc', `price` = '$prod_price', `pimage` = '$prod_image_name', `psku` = '$prod_sku'
        ");
        if($insert){
            echo "<script>
        alert('Product inserted successfully');
        window.location.href ='addproduct.php';
        </script>";
        }else{
            echo "<script>
        alert('failed to insert the product');
        window.location.href ='addproduct.php';
        </script>";
        }
    }


}


?>