<?php 
include('config.php');

$del_id = $_POST['del_id'];

$result = mysqli_query($connection, "DELETE from admin where `id` = '$del_id'");
if($result){
    echo 'User Deleted Successfully';
}else{
    echo 'Query Failed';

}

?>