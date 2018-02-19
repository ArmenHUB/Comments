<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Online Shop</title>
</head>

<style>
td{
	background: white;
}
</style>
<script>
$(document).ready(function(){

	$("tr #approve").click(function(){
		var id =  $(this).parent().attr('id'); 
       $.ajax({
       	  url: "http://[::1]/OnlineSite12/index.php/contr/approve",
       	  type: "post",
       	  data: ({id:id}),
       	  success: function(request){
             alert("Approved");
       	  }
       })
	})

	$("tr #reject").click(function(){
			var id =  $(this).parent().attr('id'); 
       $.ajax({
       	  url: "http://[::1]/OnlineSite12/index.php/contr/reject",
       	  type: "post",
       	  data: ({id:id}),
       	  success: function(request){
             alert("Rejected");
       	  }
       })
	})

   	$("tr #update").click(function(){
			var id =  $(this).parent().attr('id');
			var value = $(this).prev().prev().prev().text();
       $.ajax({
       	  url: "http://[::1]/OnlineSite12/index.php/contr/update_comm",
       	  type: "post",
       	  data: ({id:id,value:value}),
       	  success: function(request){
             alert("Updated");
       	  }
       })
	})
})
</script>
<body style='background: green;'>
 <?php
 echo "<table border='1' cellpadding='10'>";
foreach ($all_comments as $key => $value) {
	$id = $value['id'];
	$image = $value['image'];
	echo "<tr id='$id'>";
	  echo "<td>".$value['email']."</td>";
	  echo "<td>".$value['name']."</td>";
	  echo "<td contenteditable='true'>".$value['comment']."</td>";
	  echo "<td>".$value['date']."</td>";
	echo "<td id='$image'><img style='width:320px; height:240px;' src='http://localhost/OnlineSite12/images/$image'/></td>";
	  echo "<td id='update' style='cursor:pointer;'>Update</td>";
	  echo "<td id='approve'style='cursor:pointer;' >Approve</td>";
	  echo "<td id='reject' style='cursor:pointer;' >Reject</td>";
	echo "<tr>";
}
 echo "</table>";

 echo "<h2 style='text-align:center;'>Approve</h2>";
  echo "<table border='1' cellpadding='10'>";
foreach ($app_comments as $key => $value) {
	$id = $value['id'];
	$image = $value['image'];
	echo "<tr id='$id'>";
	  echo "<td>".$value['email']."</td>";
	  echo "<td>".$value['name']."</td>";
	  echo "<td contenteditable='true'>".$value['comment']."</td>";
	  echo "<td>".$value['date']."</td>";
	echo "<td id='$image'><img style='width:320px; height:240px;' src='http://localhost/OnlineSite12/images/$image'/></td>";
		  echo "<td id='update' style='cursor:pointer;'>Update</td>";
	  echo "<td id='approve'style='cursor:pointer;' >Approve</td>";
	  echo "<td id='reject' style='cursor:pointer;' >Reject</td>";

	echo "<tr>";
}
 echo "</table>";
  echo "<h2 style='text-align:center;'>Rejected</h2>";
    echo "<table border='1' cellpadding='10'>";
foreach ($rej_comments as $key => $value) {
	$id = $value['id'];
	$image = $value['image'];
	echo "<tr id='$id'>";
	  echo "<td>".$value['email']."</td>";
	  echo "<td>".$value['name']."</td>";
	  echo "<td contenteditable='true'>".$value['comment']."</td>";
	  echo "<td>".$value['date']."</td>";
	echo "<td id='$image'><img style='width:320px; height:240px;' src='http://localhost/OnlineSite12/images/$image'/></td>";
			  echo "<td id='update' style='cursor:pointer;'>Update</td>";
	  echo "<td id='approve'style='cursor:pointer;' >Approve</td>";
	  echo "<td id='reject' style='cursor:pointer;' >Reject</td>";
	echo "<tr>";
}
 echo "</table>";
 ?>
</form>
</body>
</html> 