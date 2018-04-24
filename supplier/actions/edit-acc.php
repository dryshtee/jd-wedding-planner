<?php
$result = mysql_query("select * from suppliers where supplier_id='$session_id'");
while ($row = mysql_fetch_array($result)) {

    if (isset($_POST['update1'])) {

        $supplier_name = $_POST['supplier_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];

        $query = mysql_query("update suppliers set supplier_name='$supplier_name', username='$username', password='$password', fname='$fname', address='$address', contact='$contact' where supplier_id='$session_id'");
        if ($query) {
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
            <input type="text" class="form-control" name="supplier_name" id="supplier_name" placeholder="Company Name" value="<?php echo $row['supplier_name']; ?>" required/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $row['username']; ?>" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,}$" title ="No special characters and at least 5 characters" required/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="password" id="password" pattern=".{5,}" placeholder="Password: more than 5 characters" value="<?php echo $row['password']; ?>" required/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name" value="<?php echo $row['fname']; ?>" pattern="^[a-zA-Z\s]+$" maxlength="15" title ="Must contain alphabets only" required/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $row['address']; ?>" pattern="/^[ A-Za-z0-9()[\]+-*/%]*$/"  title="Enter a valid address " required/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact Number" value="<?php echo $row['contact']; ?>" pattern="^\d{8}$" title="8 numeric characters only" required/>
        </div>
                <div class="form-group">
            <input type="text" class="form-control" name="position" id="position" value="<?php echo $row['posid']; ?>" disabled/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="status" id="status" value="<?php echo $row['status']; ?>" disabled/>
        </div>
        <div class="modal-footer">
            <button class="btn btn-success pull-right" name="update1" id="update1">Save Changes</button>
        </div>
    </form>
<?php }
?>