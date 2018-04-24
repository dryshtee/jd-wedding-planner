<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("jd", $connection);
?>
<!DOCTYPE HTML>
<html>
    <title>Budget Planner</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/formstyle.css">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <style>
             table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 75%;
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
          
        </style>
		<script>
		$(function(){
		$('select[name="Venue"]').change(function(){
			var textId= $(this).data('text');
			var price = $( "option:selected" , this).data('price');
			$('#'+textId).val(price);  
		});
		});


				$(function(){
			$('select[name="Planner"]').change(function(){
				var textId= $(this).data('text');
				var price = $( "option:selected" , this).data('price');
				$('#'+textId).val(price);  
			});
		});

		$(function(){
			$('select[name="Caterer"]').change(function(){
				var textId= $(this).data('text');
				var price = $( "option:selected" , this).data('price');
				$('#'+textId).val(price);  
			});
		});
		$(function(){
			$('select[name="Cakemaker"]').change(function(){
				var textId= $(this).data('text');
				var price = $( "option:selected" , this).data('price');
				$('#'+textId).val(price);  
			});
		});
		$(function(){
			$('select[name="Transport"]').change(function(){
				var textId= $(this).data('text');
				var price = $( "option:selected" , this).data('price');
				$('#'+textId).val(price);  
			});
		});
		$(function(){
			$('select[name="Photography"]').change(function(){
				var textId= $(this).data('text');
				var price = $( "option:selected" , this).data('price');
				$('#'+textId).val(price);  
			});
		});
		$(function(){
			$('select[name="Entertainment"]').change(function(){
				var textId= $(this).data('text');
				var price = $( "option:selected" , this).data('price');
				$('#'+textId).val(price);  
			});
		});
	</script>
	<script>
		function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}
	</script>
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
                <h2>Budget Planner </h2>
				<center><p>Our intelligent budget calculator helps you decide how your budget might be divided across each key area of the wedding.</p>
				</br>
				</br>
				<table>
					<th> Category </th>
					<th> Items </th>
					<th> Selection </th>
					<th> Total Cost </th>
					<form action="" method="post">
					<tr>
						<td><label>Venue:</label></td>
						<td> Domaine des Aubineaux </td>
						<td>
						<?php
							$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=5") or die(mysql_error());
							while ($row = mysql_fetch_array($query)) {
							$id = $row['supplier_id'];
						?>
						<select name="Venue" data-text="inptxt1">
							<option value="1 Hour" data-price="<?php echo $row ['price']; ?>">1 Hour</option>
							<option value="2 Hours" data-price="<?php echo $row ['price2']; ?>">2 Hours</option>
							<option value="3 Hours" data-price="<?php echo $row ['price3']; ?>">3 Hours</option>
							<option value="4 Hours" data-price="<?php echo $row ['price4']; ?>">4 Hours</option>
							<option value="5 Hours" data-price="<?php echo $row ['price5']; ?>">5 Hours</option>
							<option value="Other" data-price="0.00">Other</option>
						</select>
							<?php 
						} ?>
						</td>
						<td></td>
					<tr>
						<td></td><td>Long Beach Resort&Spa </td>
						<td>
						<?php
							$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=6") or die(mysql_error());
							while ($row = mysql_fetch_array($query)) {
							$id = $row['supplier_id'];
						?>
						<select name="Venue" data-text="inptxt1">
							<option value="1 Hour" data-price="<?php echo $row ['price']; ?>">1 Hour</option>
							<option value="2 Hours" data-price="<?php echo $row ['price2']; ?>">2 Hours</option>
							<option value="3 Hours" data-price="<?php echo $row ['price3']; ?>">3 Hours</option>
							<option value="4 Hours" data-price="<?php echo $row ['price4']; ?>">4 Hours</option>
							<option value="5 Hours" data-price="<?php echo $row ['price5']; ?>">5 Hours</option>
							<option value="Other" data-price="0.00">Other</option>
						</select>
						<?php 
						} ?>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td><td>Royal Parbeaux Hall </td>
						<td>
						<?php
							$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=7") or die(mysql_error());
							while ($row = mysql_fetch_array($query)) {
							$id = $row['supplier_id'];
						?>
						<select name="Venue" data-text="inptxt1">
							<option value="1 Hour" data-price="<?php echo $row ['price']; ?>">1 Hour</option>
							<option value="2 Hours" data-price="<?php echo $row ['price2']; ?>">2 Hours</option>
							<option value="3 Hours" data-price="<?php echo $row ['price3']; ?>">3 Hours</option>
							<option value="4 Hours" data-price="<?php echo $row ['price4']; ?>">4 Hours</option>
							<option value="5 Hours" data-price="<?php echo $row ['price5']; ?>">5 Hours</option>
							<option value="Other" data-price="0.00">Other</option>
						</select>
							<?php 
							} ?>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td><td>Chateau Mon Desir </td>
						<td>
						<?php
							$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=8") or die(mysql_error());
							while ($row = mysql_fetch_array($query)) {
							$id = $row['supplier_id'];
						?>
						<select name="Venue" data-text="inptxt1">
							<option value="1 Hour" data-price="<?php echo $row ['price']; ?>">1 Hour</option>
							<option value="2 Hours" data-price="<?php echo $row ['price2']; ?>">2 Hours</option>
							<option value="3 Hours" data-price="<?php echo $row ['price3']; ?>">3 Hours</option>
							<option value="4 Hours" data-price="<?php echo $row ['price4']; ?>">4 Hours</option>
							<option value="5 Hours" data-price="<?php echo $row ['price5']; ?>">5 Hours</option>
							<option value="Other" data-price="0.00">Other</option>
						</select>
						<?php 
						} ?>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><td><b>Sub Cost:</b><td><input type="text"  onkeypress="return isNumber(event)" maxlength="6" value="0.00" name="num1" id="inptxt1"/></td></td></td>
					</tr>

				</tr>
				<tr>
					<td><label>Wedding Planner:</label></td>
					<td> Wedding Plus Planner </td>
					<td>
					<?php
						$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=2") or die(mysql_error());
						while ($row = mysql_fetch_array($query)) {
						$id = $row['supplier_id'];
					?>
					<select name="Planner" data-text="inptxt2">
						<option value="Standard" data-price="<?php echo $row ['price']; ?>">Standard</option>
						<option value="Deluxe" data-price="<?php echo $row ['price2']; ?>">Deluxe</option>
						<option value="Classic" data-price="<?php echo $row ['price3']; ?>">Classic</option>
						<option value="Premium" data-price="<?php echo $row ['price4']; ?>">Premium</option>
						<option value="Other" data-price="0.00">Other</option>
					</select>
					<?php 
					} ?>
					</td>
					<td></td>
				<tr>
					<td></td><td>KVS Wedding Planner </td>
					<td>
					<?php
						$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=3") or die(mysql_error());
						while ($row = mysql_fetch_array($query)) {
						$id = $row['supplier_id'];
					?>
					<select name="Planner" data-text="inptxt2">
						<option value="Standard" data-price="<?php echo $row ['price']; ?>">Standard</option>
						<option value="Deluxe" data-price="<?php echo $row ['price2']; ?>">Deluxe</option>
						<option value="Classic" data-price="<?php echo $row ['price3']; ?>">Classic</option>
						<option value="Premium" data-price="<?php echo $row ['price4']; ?>">Premium</option>
							<option value="Other" data-price="0.00">Other</option>
					</select>
					<?php 
					} ?>
					</td>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td><td>Lms Wedding Planner </td>

					<td>
					<?php
						$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=4") or die(mysql_error());
						while ($row = mysql_fetch_array($query)) {
						$id = $row['supplier_id'];
					?>
					<select name="Planner" data-text="inptxt2">
						<option value="Standard" data-price="<?php echo $row ['price']; ?>">Standard</option>
						<option value="Deluxe" data-price="<?php echo $row ['price2']; ?>">Deluxe</option>
						<option value="Classic" data-price="<?php echo $row ['price3']; ?>">Classic</option>
						<option value="Premium" data-price="<?php echo $row ['price4']; ?>">Premium</option>
						<option value="Other" data-price="0.00">Other</option>
					</select>
					<?php 
					} ?>
					</td>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td><td><td><b>Sub Cost:</b><td><input type="text" onkeypress="return isNumber(event)" maxlength="6" value="0.00" name="num2" id="inptxt2"/></td></td></td>
				</tr>
				</tr>
				<tr>
					<td><label>Food Catering:</label></td>
					<td> Taste Mauritius Private Caterer </td>
					<td>
					<?php
						$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=9") or die(mysql_error());
						while ($row = mysql_fetch_array($query)) {
							$id = $row['supplier_id'];
					?>
					<select name="Caterer" data-text="inptxt3">
						<option value="Buffer Menu 1" data-price="<?php echo $row ['price']; ?>">Buffer Menu 1</option>
						<option value="Buffer Menu 2" data-price="<?php echo $row ['price2']; ?>">Buffer Menu 2</option>
						<option value="Buffer Menu 3" data-price="<?php echo $row ['price3']; ?>">Buffer Menu 3</option>
						<option value="Other" data-price="0.00">Other</option>
					</select>
					<?php 
					} ?>
					</td>
				<tr>
					<td></td><td><td><b>Sub Cost:</b><td><input type="text" onkeypress="return isNumber(event)" maxlength="6" value="0.00" name="num3" id="inptxt3"/></td></td></td>
				</tr>
				</tr>
				<tr>
					<td><label>Cake Maker:</label></td>
					<td> Season's Delice </td>

					<td>
					<?php
						$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=10") or die(mysql_error());
						while ($row = mysql_fetch_array($query)) {
						$id = $row['supplier_id'];
					?>
					<select name="Cakemaker" data-text="inptxt4">
						<option value="CODE: REF001" data-price="<?php echo $row ['price']; ?>">CODE: REF001</option>
						<option value="CODE: REF002" data-price="<?php echo $row ['price2']; ?>">CODE: REF002</option>
						<option value="CODE: REF003" data-price="<?php echo $row ['price3']; ?>">CODE: REF003</option>
						<option value="CODE: REF004" data-price="<?php echo $row ['price4']; ?>">CODE: REF004</option>
						<option value="CODE: REF005" data-price="<?php echo $row ['price5']; ?>">CODE: REF005</option>
						<option value="CODE: REF006" data-price="<?php echo $row ['price6']; ?>">CODE: REF006</option>
						<option value="Other" data-price="0.00">Other</option>
					</select>
					<?php 
					} ?>
					</td>
				<tr>
					<td></td><td><td><b>Sub Cost:</b><td><input type="text" onkeypress="return isNumber(event)" maxlength="6" value="0.00" name="num4" id="inptxt4"/></td></td></td>
				</tr>
				</tr>
				<tr>
					<td><label>Transport:</label></td>
					<td> Random </td>
					<td>
					<select name="Transport" data-text="inptxt5">
							<option value="Other" data-price="0.00">Other</option>
						</select>
					</td>
				<tr>
					<td></td><td><td><b>Sub Cost:</b><td><input type="text" onkeypress="return isNumber(event)" maxlength="6" value="0.00" name="num5" id="inptxt5"/></td></td></td>
				</tr>
				</tr>
				<tr>
					<td><label>Photography and Videography:</label></td>
					<td> Girish Balgobin Phtography </td>
					<td>
					<?php
						$query = mysql_query("SELECT * FROM suppliers WHERE supplier_id=12") or die(mysql_error());
						while ($row = mysql_fetch_array($query)) {
						$id = $row['supplier_id'];
					?>
					<select name="Photography" data-text="inptxt6">
						<option value="Mini Package" data-price="<?php echo $row ['price']; ?>">Mini Package</option>
						<option value="Package 1" data-price="<?php echo $row ['price2']; ?>">Package 1</option>
						<option value="Package 2" data-price="<?php echo $row ['price3']; ?>">Package 2</option>
						<option value="Package 3" data-price="<?php echo $row ['price4']; ?>">Package 3</option>
						<option value="Other" data-price="0.00">Other</option>
					</select>
					<?php 
					} ?>
					</td>
				<tr>
					<td></td><td><td><b>Sub Cost:</b><td><input type="text" onkeypress="return isNumber(event)" maxlength="6" value="0.00" name="num6" id="inptxt6"/></td></td></td>
				</tr>
				<tr>
					<td><label>Music and Entertainment:</label></td>
					<td> Random </td>
					<td>
						<select name="Entertainment" data-text="inptxt7">
							<option value="Other" data-price="0.00">Other</option>
						</select>
					</td>
				<tr>
					<td></td><td><td><b>Sub Cost:</b><td><input type="text" onkeypress="return isNumber(event)" maxlength="6" value="0.00" name="num7" id="inptxt7"/></td></td></td>
				</tr>
				</tr>
				<tr>
					<td></td>
					<td>
					<td><input  type="submit" name="btn_submit" value="Calculate"></td>
					<td>
					<?php
						if(isset($_POST['btn_submit']))
						{
							$num1 = $_POST['num1'];
							$num2 = $_POST['num2'];
							$num3 = $_POST['num3'];
							$num4 = $_POST['num4'];
							$num5 = $_POST['num5'];
							$num6 = $_POST['num6'];
							$num7 = $_POST['num7'];
							
							$total =  $num1+$num2+$num3+$num4+$num5+$num6+$num7;
							
							echo "The total cost is: Rs ".$total;
						}
					?>
					</td>
				</tr>
					</form>
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
