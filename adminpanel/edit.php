<?php 
include('config.php');

$p_id = $_POST['pro_id'];

$result = mysqli_query($connection, "SELECT * from `product` where `pid` = '$p_id'");
if(mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
}

?>