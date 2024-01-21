<?php 
session_start();
if(!isset($_SESSION['useremail'])){
  header('location:login.php');
}
include ("includes/header.php");
include ("includes/sidebar.php");
include ("includes/navbar.php");
include ('config.php');
?>

<div class="container mt-5">
        
        
        <div
        class="table-responsive"
    >
    <table
    class="table"
    >
        <thead class="table-dark">
            <tr>
                <th scope="col">PID</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">SKU</th>
                <th scope="col">product Code</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $users = mysqli_query($connection, "SELECT * from `admin` where `role` = 2 ");
        if(mysqli_num_rows($users) > 0){
          while($data = mysqli_fetch_assoc($users)){
            
        
        ?>
            <tr>
                <td scope="row"><?php echo $data['id']?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
               
                <td>
                  <a href="" class="btn btn-primary edit" data-id="<?php echo $data['id'] ?>">Edit</a>
                  <a href="" class="btn btn-danger delete" data-id="<?php echo $data['id'] ?>">Delete</a>
                </td>

                
            </tr>
            
         <?php 
          }
        }
         ?>
            
        </tbody>
    </table>
</div>
</div>
</div>






<?php 

include ("includes/footer.php");
?>

<script src="./user-crud.js"></script>