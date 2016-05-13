<?php
$con=mysqli_connect('10.85.18.69', 'mysql', 'Tgi4MLeacock','namelist');
// Check connection
if (mysqli_connect_errno())
  {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM user");
while($row = mysqli_fetch_array($result))
  {
  echo "<td>".$row['username'] . "   " . $row['password'];
  echo "<br>";
  }
mysqli_close($con);               

?>
