<?php
$server ="localhost";
$user = "root";
$password = "";
$db= "try";

$conn = new mysqli($server,$user,$password,$db,"3308");
if($conn){
	?>
	<script>
		alert("Connection Success");
		//location.replace("index.php");
	</script>
	<?php
}else
{
	?>
	<script>
		alert("NO Connection");
	</script>
	<?php
}


?>