<?php include'connect.php'; 
?>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	tr:nth-child(odd) {
    background-color: #5e90e0;
}
</style>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("showshow").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest) 
        {   
            xmlhttp = new XMLHttpRequest();
        } 
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showshow").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","select.php?a="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<br>
<center>
<table class="table table-hover">
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Mail</th>
	</tr>
	<?php
	$selectvar="SELECT * FROM details";
	$temp=$db->query($selectvar);
	while ($row = $temp->fetch_assoc()) 
	{
	?>
	<tr>
		<td><?php echo $row["sno"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
	</tr>
	<?php
	}
	?>
	
	
</table>
<form >
<input id="showTableBtn" class="form-control" style="width: 30%" type="text" name="fieldname" placeholder="Enter name to display data"><br>
<button  class="btn btn-primary" type="submit" name="enter" onsubmit="showUser((#showTableBtn).value)">Get details!</button>

<div id="showshow"></div>
<table id="dataTable" class="table table-hover">
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Mail</th>
	</tr>
	<?php
	$a= $_GET['fieldname'];
	 $dispvar="SELECT * FROM details WHERE name='$a'";
	$tempo=$db->query($dispvar);
	while ($row = $tempo->fetch_assoc()) 
	{
	?>
	<tr>
		<td><?php echo $row["sno"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
	</tr>
	<?php
	}
	?>
</table>
</form>
</center>
