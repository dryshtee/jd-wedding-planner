<?php
include 'includes/dbcon.php';
$id = $_REQUEST['id'];
?>
<?php
$res = mysql_query("SELECT * FROM weddingplusbookings WHERE id='$id'");
while ($row = mysql_fetch_array($res)) {

    if (isset($_POST['delete'])) {
        if (!$conn) {
            die('could not connect: ' . mysql_error());
        }

        $query3 = mysql_query("DELETE FROM weddingplusbookings WHERE  id='$id'", $conn);
        if ($query3) {
            echo "<script>alert('Record deleted Successfully')</script>";
            echo "<meta http-equiv='refresh' content='0;url=../supplier/sbeachplanner.php'>";
        }
    }
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <center><strong>Delete booking of: <?php echo $row['fname']; ?></strong></center>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php $_PHP_SELF ?>" class="form-horizontal" role="form">
                            <center><p> Are you sure you want to delete this booking ?</p></center>

                            <div class="form-group">
                                <button class="button" style="vertical-align:middle" name="delete" id="delete">Delete</button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
