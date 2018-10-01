<?php include'connect.php'; ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <br>
  <form method="post" action="delete.php">
<center>
	<input type="email" name="deleteopt" placeholder="Enter email to delete record" class="form-control" style="width: 30%;"><br>
<button type="submit" name="delete" class="btn btn-danger">Delete</button></center>
<?php
$flag=0;
 if(isset($_POST['delete']))
 {

 	$var=$_POST['deleteopt'];
 	$qry="DELETE FROM details WHERE email='$var'";
 	$db->query($qry);
 }
?>
</form>