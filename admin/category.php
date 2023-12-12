<?php 
include('adminpannel/header.php');
include('../middleware/adminmiddleware.php');
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                                <?php
                                            $category=getAll("Categories");
                                            if (mysqli_num_rows($category) > 0) 
                                            {
                                                foreach($category as $item)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?= $item['id']; ?></td>
                                                        <td><?= $item['name']; ?></td>
                                                        <td>
                                                        <img src="../uploads/<?= $item['image'];  ?>" width="50px" height="50px" alt="<?= $item['name'];  ?>">
                                                        </td>
                                                        <td>
                                                            <?= $item['status'] == '0' ? "visible" : "hidden"?>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary">Edit</a>
                                                        </td>
                                                        </tr>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                echo "No record found";
                                            }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php include('adminpannel/footer.php'); ?>