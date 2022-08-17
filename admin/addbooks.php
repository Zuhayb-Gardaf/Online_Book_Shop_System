<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary"> Add Book </h5>
  </div>

  <div class="card-body">

     <form action="codepro.php" method="POST"> 

        <div class="modal-body">

            <div class="form-group">
                <label> PID </label>
                <input type="text" name="PID" class="form-control" placeholder="Enter PID" required>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="Title" class="form-control" placeholder="Enter Title" required>
            </div>
            <div class="form-group">
                <label> Author </label>
                <input type="text" name="Author" class="form-control" placeholder="Enter Author" required>
            </div>
            <div class="form-group">
                <label>MRP</label>
                <input type="text" name="MRP" class="form-control" placeholder="Enter MRP" required>
            </div>
            <div class="form-group">
                <label> Price </label>
                <input type="text" name="Price" class="form-control" placeholder="Enter Price" >
            </div>
            <div class="form-group">
                <label>Discount</label>
                <input type="text" name="Discount" class="form-control" placeholder="Enter Discount">
            </div>
            <div class="form-group">
                <label> Availabe </label>
                <input type="text" name="Availabe" class="form-control" placeholder="Enter Availabe">
            </div>
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" name="Publisher" class="form-control" placeholder="Enter Publisher">
            </div>
            <div class="form-group">
                <label> Edition </label>
                <input type="text" name="Edition" class="form-control" placeholder="Enter Edition">
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" name="Category" class="form-control" placeholder="Enter Category">
            </div>
            <div class="form-group">
                <label> Language </label>
                <input type="text" name="Language" class="form-control" placeholder="Enter Language">
            </div>
            <div class="form-group">
                <label>page</label>
                <input type="text" name="page" class="form-control" placeholder="Enter page">
            </div>
            <div class="form-group">
                <label> weight </label>
                <input type="text" name="weight" class="form-control" placeholder="Enter weights">
         </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="bookbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div> 





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>