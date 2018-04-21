<?php 
include('conn.php');
if(isset($_POST['get_option']))
{
$state = $_POST['get_option'];
$sq="SELECT * FROM `projectcategory` WHERE `category`='".$_POST['get_option']."'";
 $find=mysqli_query($con,$sq);
 $row=mysqli_fetch_assoc($find);

$optionvalue=$row['subcategory'];
$optexp= explode('+', $optionvalue);
foreach ($optexp as $optval) {
	
  echo "<option value='".$optval."'>".$optval."</option>";

}
}
 ?>