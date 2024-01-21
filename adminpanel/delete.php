<?php 
include('config.php');

$del_id = $_POST['del_id'];

$result = mysqli_query($connection, "DELETE from product where `pid` = '$del_id'");
if($result){
    echo 'Product Deleted Successfully';
}else{
    echo 'Query Failed';

}

?>