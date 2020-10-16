<?php
require_once("../campus_config.php");
require_once("./campus_admin_header.php");
$select = "SELECT * FROM campus_recuritment_students";
$query = mysqli_query($connect, $select);

?>

<div class="container-fluid">
    <div class="row ">
        <div class="col">
            <h1 class="h3 text-uppercase text-dark mb-4 ">STUDENTS</h1>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Student Details</h5>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped  table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>CONTACT</th>
                    <th>ADDRESS</th>
                    <th>PHOTO</th>
                    <th>DOB</th>
                    <th>SSC YP</th>
                    <th>HSC YP</th>
                    <th>SSC AGG</th>
                    <th>HSC AGG</th>
                    <th>COLLEGE</th>
                    <th>COLLEGE YP</th>
                    <th>COLLEGE AGG</th>
                    <th>OTHER QUALIFICATION</th>
                </thead>
                <tbody>
                    <?php
          while ($row = mysqli_fetch_assoc($query)) {
          ?>
                    <tr>
                        <td><?php echo $row['S_ID']; ?></td>
                        <td><?php echo $row['S_NAME']; ?></td>
                        <td><?php echo $row['S_EMAIL']; ?></td>
                        <td><?php echo $row['S_GENDER']; ?></td>
                        <td><?php echo $row['S_CONTACT']; ?></td>
                        <td><?php echo $row['S_ADDRESS']; ?></td>
                        <td><img style="border-radius:90%;" class="runded"
                                src="../Student/studentuploads/<?php echo $row['S_PHOTO']; ?>" width="200px"></td>
                        <td><?php echo $row['S_DOB']; ?></td>
                        <td><?php echo $row['S_SSC_YP']; ?></td>
                        <td><?php echo $row['S_HSC_YP']; ?></td>
                        <td><?php echo $row['S_SSC_AGG']; ?></td>
                        <td><?php echo $row['S_HSC_AGG']; ?></td>
                        <td><?php echo $row['S_COLLEGE']; ?></td>
                        <td><?php echo $row['S_COLLEGE_YP']; ?></td>
                        <td><?php echo $row['S_COLLEGE_AGG']; ?></td>
                        <td><?php echo $row['S_OTHER_QUA']; ?></td>

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