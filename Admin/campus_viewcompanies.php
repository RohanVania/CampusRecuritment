<?php
require_once("../campus_config.php");
require_once("./campus_admin_header.php");
$select="SELECT * FROM campus_recuritment_company";
$query=mysqli_query($connect,$select);
?>

<div class="container-fluid">
    <div class="row ">   
        <div class="col">
        <h1 class="h3 text-uppercase text-dark mb-4 "> Companies</h1>
        </div>
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
                        <th>COMPANY</th>
                        <th>ESTABLISHED</th>
                        <th>EMAIL</th>
                        <th>CONTACT</th>
                        <th>HR NAME</th>
                        <th>USERNAME</th>
                    </thead>
                  <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $row['C_ID'];?></td>
                            <td><?php echo $row['C_COMPANY'];?></td>
                            <td><?php echo $row['C_ESTABLISHED'];?></td>
                            <td><?php echo $row['C_EMAIL'];?></td>
                            <td><?php echo $row['C_CONTACT'];?></td>
                            <td><?php echo $row['C_HR'];?></td>
                            <td><?php echo $row['C_USERNAME'];?></td>
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