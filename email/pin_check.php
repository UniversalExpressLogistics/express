<?php

$con = mysqli_connect("localhost","uni_log","JFq+0^xu?","universal_pincodes");
if(isset($_POST['name']))
{
$name=$_POST['name'];


$get="select * from servicable_pincodes where pincode='$name' ";
$query=mysqli_query($con,$get);
$row=mysqli_num_rows($query);


if($row==0)
{
echo "</br><h5 style='color:white;'>
Universal Logistics is not providing delivery services at
<span style='color:red;'>$name</span></h5>";
}
else{
echo"
<tr style='width:100%'>
<td style='width:25% color:#f51c4f; text-align:center;'><h5 style='color:red;'>Pincode</h5></td>
<td style='width:25%'><h5 style='color:red; text-align:center;'>Location</h5></td>
<td style='width:25%'><h5 style='color:red; text-align:center;'>State Name</h5></td>
<td style='width:25%'><h5 style='color:red;'text-align:center;'>Location Category</h5></td>
</tr>";
while($row1 = mysqli_fetch_array($query)){
    $pincode = $row1['pincode'];
    $cityname = $row1['location_name'];
    $statename = $row1['state'];
     $status = $row1['category'];

    echo"
        <tr style='width:100%'>
          <td style='width:25%; text-align:center;'>$pincode</td>
          <td style='width:25%; text-align:center;'>$cityname</td>
          <td style='width:25%; text-align:center;'>$statename</td>
          <td style='width:25%; text-align:center;'>$status</td>
        </tr>";

}
}

}
?>
