<?php
$res = mysql_query("SELECT users.* FROM users WHERE users.email='$email'");
while ($row = mysql_fetch_array($res)) {
	
if(isset($_POST['update']))
{
	if (!$connection) {
            die('could not connect: ' . mysql_error());
        }
		
$user_id = $_POST['user_id'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$partnername = $_POST['partnername'];
$weddingdate = $_POST['weddingdate'];
$location = $_POST['location'];
$contact = $_POST['contact'];

$query3=mysql_query("update users set fullname='$fullname', username='$username', email='$email', password='$password', partnername='$partnername', weddingdate='$weddingdate', location='$location', contact='$contact' where email='$email'", $connection);
if($query3)
{
echo "<script>alert('Record Updated Successfully')</script>";
echo "<meta http-equiv='refresh' content='0;url=account.php'>";
}
}
?>
<body>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <center><strong>Account Settings of: <?php echo $row['fullname']; ?></strong></center>
                        </h3>
                    </div>
                    <div class="panel-body">
                            <form method="post" action="<?php $_PHP_SELF ?>" class="form-horizontal" role="form">
                  
								<div class="form-group">
								<label for="fullname">Fullname</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>"  pattern="^[a-zA-Z\s]+$" maxlength="30" title ="Fullname must contain alphabets only" required/>
                                </div>
								<div class="form-group">
								<label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $row['username']; ?>" maxlength="10"  pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,}$" title ="No special characters and at least 5 characters" required/>
                                </div>
								<div class="form-group">
								<label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" maxlength="25"title ="characters@characters.domain E.g: ****@hotmail.com " required/>
                                </div>
								<div class="form-group">
								<label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" value="<?php echo $row['password']; ?>"  maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least 1 number, 1 uppercase and 1 lowercase letter, and at least 8 or more characters" required/>
                                </div>
                                <div class="form-group">
                                    <label for="partnername">Partner Name</label>
                                    <input type="text" class="form-control" name="partnername" id="partnername" value="<?php echo $row['partnername']; ?>" pattern="^[a-zA-Z\s]+$" maxlength="30" title ="Partner Name must contain alphabets only"/>
                                </div>
								
								   <div class="form-group">
                                    <label for="weddingdate">Wedding Date</label>
                                <input type="text" class="form-control" name="weddingdate" id="weddingdate" value="<?php echo $row['weddingdate']; ?>" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="YYYY-MM-DD
Checks that
1) the year is numeric and starts with 19 or 20,
2) the month is numeric and between 01-12, and
3) the day is numeric between 01-29, or
b) 30 if the month value is anything other than 02, or
c) 31 if the month value is one of 01,03,05,07,08,10, or 12.

"/>
								 </div>
                               
								   <div class="form-group">
                                    <label for="location">Address</label>
                                  <input type="text" class="form-control" name="location" id="location" value="<?php echo $row['location']; ?>" pattern="/^[ A-Za-z0-9()[\]+-*/%]*$/"  title="Enter a valid address " maxlength="30" required/>
                                </div>
								 <div class="form-group">
                                    <label for="contact">Contact Number</label>
                                  <input type="text" class="form-control" name="contact" id="contact" value="<?php echo $row['contact']; ?>"pattern="^\d{8}$" title="8 numeric characters only" required/>
                                </div>
                                <div class="form-group">
                                    <button class="button" style="vertical-align:middle" name="update" id="update">Save Changes</button>
                                </div>
                            </form>
							<?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
