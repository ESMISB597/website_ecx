<html>
<title>Product</title>
<body background ="images/bg22.jpg">
<?php
$con = mysql_connect("it2.sut.ac.th","php160_g5","333160");
if (!$con) die ('Could not connect: '. mysql_error());
mysql_select_db("php160_g5",$con);
$result = mysql_query("SELECT*FROM product");
while($row = mysql_fetch_array($result));
{
echo $row['product_id']." ".$row['product_name']." ".$row['product_detail']." ".
$row['product_price']." ".$row['product_pic'];
echo "<br/>";
}
mysql_close($con);
?>
</body>
</html>