
<?php
$con=mysqli_connect("localhost","root","","counter2");

extract($_POST);

//var_dump(($_REQUEST)); 
$flag = 0;
// echo $_POST['icon'];
if($item!="")
{	
	$select_query = "select * from counter2_table where items = '$item'";
	$query_result = mysqli_query($con,$select_query);
	var_dump($query_result);
	while ($data = mysqli_fetch_assoc($query_result)) {
		if ($data['items'] == $item) {
		$flag++;
		echo "Item: ".$data['items'];
		break;
		}
	}
	if ($flag > 0) {
		$query=mysqli_query($con, "UPDATE counter2_table SET item = '$item', icon = '$icons', noofitems = '$noofitems' ,
 	WHERE items = '$item'");
	}else{
		$query=mysqli_query($con,"INSERT into counter2_table(items,icon,noofitems) VALUES ('$item', '$icons','$noofitems')");
	}
	/*$item = $_POST['item'];
	$icons = $_POST['icons'];
	$noofitems = $_POST['noofitems'];*/	
  
}


?>
