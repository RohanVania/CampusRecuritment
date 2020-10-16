<?php
require_once("campus_admin_header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPO Admin</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-primary pb-3">Add Department</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <form action="add_department.php" method="post">
                    <?php
                    if (isset($_GET['msg']) && ($_GET['msg'] == 1)) {
                        echo "<h5 class='mt-3 text-success'>Department Added  !!!</h5><br>";
                    }
                    ?>

                    <?php

                    if (isset($_GET['error_msg']) && ($_GET['error_msg'] == 1)) {
                        echo "<h5 class='mt-3 text-danger'>Department Already Exists !!!</h5><br>";
                    }
                    ?>


                    <div class="form-group">
                        <input class="form-control" required type="text" name="department"
                            placeholder="Enter Department">
                    </div>
                    <div class="form-group">
                        <div class="btn-group mt-3">
                            <input type="submit" class="btn btn-md btn-primary" value="Add">
                            <input type="reset" class="btn btn-md btn-warning" value="Clear">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>

</html>

<?php
require_once("campus_admin_footer.php");
?>