<?php include'connect.php'; 
$var1="INSERT INTO details(name,phone,email) VALUES ('Siraj','9876543210','siraj@webstacks.com')";
$var2="INSERT INTO details(name,phone,email) VALUES ('Rashid','9753186420','rashid@webstacks.com')";
$var3="INSERT INTO details(name,phone,email) VALUES ('Williamson','9988776655','williamson@webstacks.com')";
$var4="INSERT INTO details(name,phone,email) VALUES ('Mushfiqur','8976545678','mushfiqur@webstacks.com')";
$var5="INSERT INTO details(name,phone,email) VALUES ('Malinga','8877996644','malinga@webstacks.com')";
$db->query($var1);
$db->query($var2);
$db->query($var3);
$db->query($var4);
$db->query($var5);
?>