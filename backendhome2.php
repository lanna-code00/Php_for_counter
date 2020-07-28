
<?php
$con=mysqli_connect("localhost","root","","counter2");
//$id = $_GET['div_id'];

extract($_POST);

//var_dump(($_REQUEST)); 
$flag = 0;
// echo $_POST['icon'];
if($item!="")
{	
	$select_query = "select * from counter2_table where items = '$item'";
	$query_result = mysqli_query($con,$select_query);
	//var_dump($query_result);
	while ($data = mysqli_fetch_assoc($query_result)) {
		if ($data['items'] == $item) {
		$flag++;
		break;
		/*echo "Item: ".$data['items'];
		break;*/
		}
	}
	if ($flag > 0) {
		//echo "Item found.{Item: $item}, {Icons: $icons} {NoOfItems: $noofitems}";
		$query=mysqli_query($con, "UPDATE counter2_table SET items = '$item', icon = '$icons', noofitems = '$noofitems'
		 WHERE items = '$item'");
		 echo 1;
	}else{
		
		
			$query=mysqli_query($con,"INSERT into counter2_table(items,icon,noofitems) VALUES ('$item', '$icons','$noofitems')");
			
	}
	// $item = $_POST['item'];
	// $icons = $_POST['icons'];
	// $noofitems = $_POST['noofitems'];
  
}

// if ($_POST["divId"] != '') {
//  $query = " UPDATE `counter2_table` SET `icon`= $icons,`items`= $item,
//  `noofitems`= $noofitems, WHERE div_id = $divId";
//  mysqli_query($con, $query);
// }
// else{
//  $query = "INSERT into counter2_table(items,icon,noofitems) VALUES ('$item', '$icons','$noofitems')";
//  mysqli_query($con, $query);
//  echo mysqli_insert_id($con);
// }

?>
