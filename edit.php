<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("jd", $connection);
?>
<html>
<body>
<?php

if(isset($_GET['item_id']))
{
$id=$_GET['item_id'];
if(isset($_POST['submit']))
{
$item=$_POST['item'];
$query3=mysql_query("update checklist set item='$item' where item_id='$id'");
if($query3)
{
header('location:checklist.php');
}
}
$query1=mysql_query("select * from checklist where item_id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Item:<input type="text" name="name" value="<?php echo $query2['item']; ?>" /><br />

<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>