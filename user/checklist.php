<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("jd", $connection);
?>
<!DOCTYPE HTML>
<html>
    <title>Checklist</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/owl.carousel.css" rel="stylesheet">
        <script src="../js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
        <script src="../js/bootstrap.js"></script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                height: 50%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 10px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

            .modalDialog {
                position: absolute;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                pointer-events: none;
            }

            .modalDialog:target {
                opacity:1;
                pointer-events: auto;
            }

            .modalDialog > div {
                width: 500px;
                position: relative;
                margin: 10% auto;
                padding: 5px 30px 13px 30px;
                border-radius: 10px;
                background: #fff;
                background: -moz-linear-gradient(#fff, #999);
                background: -webkit-linear-gradient(#fff, #999);
                background: -o-linear-gradient(#fff, #999);
            }

            .close {
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                right: -12px;
                text-align: center;
                top: -10px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                -moz-box-shadow: 1px 1px 3px #000;
                -webkit-box-shadow: 1px 1px 3px #000;
                box-shadow: 1px 1px 3px #000;
            }

            .close:hover { background: #00d9ff; }
        </style>
    </head>
    <body>
        <!--header-->
        <?php
        include 'user-header.php';
        ?>
        <!--header-->
        <!--body-->
        <br/>
        <!--checklist-->
        <div class="wedding-section">
            <div class="container">
                <h2>Checklist</h2>
				<p>Here’s a helpful list of things you may need to consider before the wedding.</p>
				<hr/>
                <table>
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th> Items </th>
                            <th> Status </th>
                            <th> Tips </th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $query = mysql_query("SELECT * FROM checklist WHERE item_id=1") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['item_id'];
                                ?>
                                <td>
                                    <script type="text/javascript">
        function ShowHideDiv1(chk1) {
            var dv1 = document.getElementById("dv1");
            dv1.style.display = chk1.checked ? "block" : "none";
        }
    </script>
	<label for="chk1">
        <input type="checkbox" id="chk1" onclick="ShowHideDiv1(this)" />
       
    </label>
                                        
                                </td>
                                <td><?php echo $row['item']; ?></td>
                                <td> <div id="dv1" style="display: none">
       
        <input type="text" id="txt1" value="Checked" disabled />
    </div></td>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="modal" href="#openModal1">View</button>
                                </td>
                      <div id="openModal1" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        $res = mysql_query("SELECT checklist.* FROM checklist WHERE checklist.item_id=1");
                                        while ($row = mysql_fetch_array($res)) {
                                            ?>
                                            <?php echo $row['tips']; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
							<?php }?>
                    </tr>
                    <tr>
                        <?php
                        $query = mysql_query("SELECT * FROM checklist WHERE item_id=2") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                            $id = $row['item_id'];
                            ?>

                            
        <td>
                                    <script type="text/javascript">
        function ShowHideDiv2(chk2) {
            var dv2 = document.getElementById("dv2");
            dv2.style.display = chk2.checked ? "block" : "none";
        }
    </script>
	<label for="chk2">
        <input type="checkbox" id="chk2" onclick="ShowHideDiv2(this)" />
       
    </label>
                                        
                                </td>
                                <td><?php echo $row['item']; ?></td>
                                <td> <div id="dv2" style="display: none">
       
        <input type="text" id="txt2" value="Checked" disabled />
    </div></td>
                            <td>
                                <button type="button" class="btn btn-default" data-toggle="modal" href="#openModal2">View</button>
                            </td>
                        <div id="openModal2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        $res = mysql_query("SELECT checklist.* FROM checklist WHERE checklist.item_id=2");
                                        while ($row = mysql_fetch_array($res)) {
                                            ?>
                                            <?php echo $row['tips']; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        </tr>
                        <tr>
                            <?php
                            $query = mysql_query("SELECT * FROM checklist WHERE item_id=3") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['item_id'];
                                ?>

                               <td>
                                    <script type="text/javascript">
        function ShowHideDiv3(chk3) {
            var dv3 = document.getElementById("dv3");
            dv3.style.display = chk3.checked ? "block" : "none";
        }
    </script>
	<label for="chk3">
        <input type="checkbox" id="chk3" onclick="ShowHideDiv3(this)" />
       
    </label>
                                        
                                </td>
                                <td><?php echo $row['item']; ?></td>
                                <td> <div id="dv3" style="display: none">
       
        <input type="text" id="txt3" value="Checked" disabled />
    </div></td>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="modal" href="#openModal3">View</button>
                                </td>
                            <div id="openModal3" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $res = mysql_query("SELECT checklist.* FROM checklist WHERE checklist.item_id=3");
                                            while ($row = mysql_fetch_array($res)) {
                                                ?>
                                                <?php echo $row['tips']; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </tr>
                        <tr>
                            <?php
                            $query = mysql_query("SELECT * FROM checklist WHERE item_id=4") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['item_id'];
                                ?>

                              <td>
                                    <script type="text/javascript">
        function ShowHideDiv4(chk4) {
            var dv4 = document.getElementById("dv4");
            dv4.style.display = chk4.checked ? "block" : "none";
        }
    </script>
	<label for="chk4">
        <input type="checkbox" id="chk4" onclick="ShowHideDiv4(this)" />
       
    </label>
                                        
                                </td>
                                <td><?php echo $row['item']; ?></td>
                                <td> <div id="dv4" style="display: none">
       
        <input type="text" id="txt4" value="Checked" disabled />
    </div></td>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="modal" href="#openModal4">View</button>
                                </td>
                            <div id="openModal4" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $res = mysql_query("SELECT checklist.* FROM checklist WHERE checklist.item_id=4");
                                            while ($row = mysql_fetch_array($res)) {
                                                ?>
                                                <?php echo $row['tips']; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </tr>
                        <tr>
                            <?php
                            $query = mysql_query("SELECT * FROM checklist WHERE item_id=5") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['item_id'];
                                ?>
 <td>
                                    <script type="text/javascript">
        function ShowHideDiv5(chk5) {
            var dv5 = document.getElementById("dv5");
            dv5.style.display = chk5.checked ? "block" : "none";
        }
    </script>
	<label for="chk5">
        <input type="checkbox" id="chk5" onclick="ShowHideDiv5(this)" />
       
    </label>
                                        
                                </td>
                                <td><?php echo $row['item']; ?></td>
                                <td> <div id="dv5" style="display: none">
       
        <input type="text" id="txt5" value="Checked" disabled />
    </div></td>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="modal" href="#openModal5">View</button>
                                </td>
                            <div id="openModal5" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $res = mysql_query("SELECT checklist.* FROM checklist WHERE checklist.item_id=5");
                                            while ($row = mysql_fetch_array($res)) {
                                                ?>
                                                <?php echo $row['tips']; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </tr>
                        <tr>
                            <?php
                            $query = mysql_query("SELECT * FROM checklist WHERE item_id=6") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['item_id'];
                                ?>

                                <td>
                                    <script type="text/javascript">
        function ShowHideDiv6(chk6) {
            var dv6 = document.getElementById("dv6");
            dv6.style.display = chk6.checked ? "block" : "none";
        }
    </script>
	<label for="chk6">
        <input type="checkbox" id="chk6" onclick="ShowHideDiv6(this)" />
       
    </label>
                                        
                                </td>
                                <td><?php echo $row['item']; ?></td>
                                <td> <div id="dv6" style="display: none">
       
        <input type="text" id="txt6" value="Checked" disabled />
    </div></td>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="modal" href="#openModal6">View</button>
                                </td>
                            <div id="openModal6" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $res = mysql_query("SELECT checklist.* FROM checklist WHERE checklist.item_id=6");
                                            while ($row = mysql_fetch_array($res)) {
                                                ?>
                                                <?php echo $row['tips']; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </tr>
                        <tr>
                            <?php
                            $query = mysql_query("SELECT * FROM checklist WHERE item_id=7") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['item_id'];
                                ?>

                             <td>
                                    <script type="text/javascript">
        function ShowHideDiv7(chk7) {
            var dv7 = document.getElementById("dv7");
            dv7.style.display = chk7.checked ? "block" : "none";
        }
    </script>
	<label for="chk7">
        <input type="checkbox" id="chk7" onclick="ShowHideDiv7(this)" />
       
    </label>
                                        
                                </td>
                                <td><?php echo $row['item']; ?></td>
                                <td> <div id="dv7" style="display: none">
       
        <input type="text" id="txt2" value="Checked" disabled />
    </div></td>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="modal" href="#openModal7">View</button>
                                </td>
                            <div id="openModal7" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $res = mysql_query("SELECT checklist.* FROM checklist WHERE checklist.item_id=7");
                                            while ($row = mysql_fetch_array($res)) {
                                                ?>
                                                <?php echo $row['tips']; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="clearfix"></div>

        <!--typography-page-->
        <div class="indicate">
            <div class="indicate-grids">
                <div class="col-md-3 indicate-grid">
                    <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Bagatelle Mall Mauritius</p>
                </div>
                <div class="col-md-3 indicate-grid">
                    <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Phone: +230 603 6035</p>
                </div>
                <div class="col-md-3 indicate-grid">
                    <p><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Fax: +230 603 6037</p>
                </div>
                <div class="col-md-3 indicate-grid">
                    <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email: <a href="mailto:jdweddingplanner@mail.com"> jd@mail.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!--footer-->
        <?php
        include 'user-footer.php';
        ?>
        <!--footer-->


    </body>
</html>