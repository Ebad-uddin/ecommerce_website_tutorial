<?php 
session_start();
if(!isset($_SESSION['useremail'])){
  header('location:login.php');
}
include ("includes/header.php");
include ("includes/sidebar.php");
include ("includes/navbar.php");

?>






<div class="container-fluid">
    <!-- product modal start -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#add_product">
 Add Product
</button>

<!-- Modal -->
<div class="modal fade" id="add_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="register.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" name="pname" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                      <label for="floatingTextarea">Description</label>
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">SKU</label>
                    <input type="number" name="sku" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Product Code</label>
                    <input type="text" name="pcode" class="form-control">
                  </div>
                  <input type="submit" name="addproduct" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Add Product">
                  
                 
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- product modal end -->
    <div class="container mt-5">
        
        
        <div
        class="table-responsive"
    >
    <table
    class="table"
    >
        <thead class="table-dark" >
            <tr>
                <th scope="col">PID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">SKU</th>
                <th scope="col">product Code</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
                <td>R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
                <td>R1C3</td>
            </tr>
            
        </tbody>
    </table>
</div>
</div>

</div>





<?php 
include ("includes/footer.php");

?>
