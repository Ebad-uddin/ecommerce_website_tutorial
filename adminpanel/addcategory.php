<?php 
include('config.php');


if(isset($_POST['add_cat'])){
    $cat_name = $_POST['catname'];
    $cat_desc = $_POST['catdesc'];
    // echo $cat_name, $cat_desc;
    $check_cat = mysqli_query($connection, "SELECT * from `category` where `cat_name` = '$cat_name'");
    if(mysqli_num_rows($check_cat) > 0){
        echo "<script>
        alert('Category already exist');
        window.location.href ='addproduct.php';
        </script>";
    }else{
    $result = mysqli_query($connection, "INSERT INTO `category` (`cat_id`, `cat_name`, `cat_Desc`, `cat_status`) VALUES (NULL, '$cat_name', '$cat_desc', '1')
    ");
    if($result){
        echo "<script>
        alert('Category successfully added');
        window.location.href ='addproduct.php';
        </script>";
    }else{
        echo "<script>
        alert('Category addition failed');
        window.location.href ='addproduct.php';

        </script>";
        
    }
}

}

?>