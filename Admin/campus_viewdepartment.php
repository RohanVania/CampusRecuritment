<?php

require_once("campus_admin_header.php");
require_once("../campus_config.php");
$select = "SELECT * FROM campus_recuritment_department";
$query = mysqli_query($connect, $select);

?>
<div class="container-fluid">
    <div class="row ">
        <div class="col">
            <h1 class="h2 text-success mb-3 ">Table</h1>
        </div>
    </div>
    <div class="row">
        <p class="mb-4">
            A table is an arrangement of data in rows and columns, or possibly in a more complex structure. Tables are
            widely used in communication, research, and data analysis,Please visit the
            <a href="#">official Data Tables documentation.</a>
        </p>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Department Details</h5>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped  table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>DEPARTMENT</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    <?php
          while ($row = mysqli_fetch_assoc($query)) {
          ?>
                    <tr>
                        <td><?php echo $row['D_ID']; ?></td>
                        <td><?php echo $row['D_DEPARTMENT']; ?></td>
                        <td><a href="#">Edit</a></td>
                    </tr>
                    <?php
          }
          ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php
require_once("campus_admin_footer.php");
?>