<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("jd", $connection);

$query = mysql_query("SELECT * FROM checklist") or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
    $id = $row['item_id'];
?>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <?php
                    echo $row['tips'];
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            <?php } ?>
        </div>
    </div>
</div>