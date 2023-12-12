<?php 
include('adminpannel/header.php');
include('../middleware/adminmiddleware.php');
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-13">
                <div class="card">
                    <div class="card-header">
                        <h4>Categories</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>shoes</td>
                                    <td>Visible</td>
                                    <td>Edit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>

<?php include('adminpannel/footer.php'); ?>