<?php
$rs_result = mysql_query("select * from suppliers where supplier_id='$session_id'");
while ($row = mysql_fetch_array($rs_result)) {

    if (isset($_POST['update'])) {

        $session_id = $_POST['supplier_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $supplier_name = $_POST['supplier_name'];
        $supplier_link = $_POST['supplier_link'];
        $price = $_POST['price'];
        $price2 = $_POST['price2'];
        $price3 = $_POST['price3'];
        $price4 = $_POST['price4'];
        $description = $_POST['description'];

        $query7 = mysql_query("update suppliers set username='$username', password='$password', supplier_name='$supplier_name', supplier_link='$supplier_link', price='$price', price2='$price2', price3='$price3', price4='$price4', description='$description' where supplier_id='$session_id'");
        if ($query7) {
            echo "<script>alert('Record Updated Successfully')</script>";
            echo "<meta http-equiv='refresh' content='0;url='$_SERVER[PHP_SELF]'>";
        }
    }
    ?>


    <form method="POST" action="<?php $_PHP_SELF ?>">
        <div class="form-group">
            <input type="hidden" class="form-control" name="supplier_id" id="supplier_id" value="<?php echo $row['supplier_id']; ?>"/>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="username" id="username" value="<?php echo $row['username']; ?>"/>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="password" id="password" value="<?php echo $row['password']; ?>"/>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="supplier_name" id="supplier_name" value="<?php echo $row['supplier_name']; ?>"/>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="supplier_link" id="supplier_link" value="<?php echo $row['supplier_link']; ?>"/>
        </div>
        <div class="form-group">
            <label for="description">About</label>
            <textarea type="text" class=" form-control" name="description" id="description" pattern="^[a-zA-Z\s]+$" title="Add a description (must contain only letters)" required><?php echo $row['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Standard</label>
            <input type="text" class="form-control" name="price" id="price" value="<?php echo $row['price']; ?>" pattern=".{3,}" title="Input your price (must contain numbers only)" required/>
        </div>
        <div class="form-group">
            <label for="price2">Deluxe</label>
            <input type="text" class="form-control" name="price2" id="price2" value="<?php echo $row['price2']; ?>" pattern=".{3,}" title="Input your price (must contain numbers only)" required/>
        </div>
        <div class="form-group">
            <label for="price3">Classic</label>
            <input type="text" class="form-control" name="price3" id="price3" value="<?php echo $row['price3']; ?>" pattern=".{3,}" title="Input your price (must contain numbers only)" required/>
        </div>
        <div class="form-group">
            <label for="price4">Premium</label>
            <input type="text" class="form-control" name="price4" id="price4" value="<?php echo $row['price4']; ?>" pattern=".{3,}" title="Input your price (must contain numbers only)" required/>
        </div>
        
        <label>Input values to calculate price</label><br/>
        <input type="text" name="input1" id="input1" onkeyup="calc()" value="" placeholder="value 1"><br/>
		X
		<br/><input type="text" name="input2" id="input2" onkeyup="calc()" value="" placeholder="value 2"><br/><br/>
		=
        <input type="text" name="output" id="output" value="" placeholder="Result">

        <div class="form-group">
            <button class="button" name="update" id="update">Save Changes</button>
        </div>
    </form>
    <?php
}
?>
