<?php
 $conn=new mysqli('plasmadonor1.herokuapp.com','ANKITHA P','ankitha123','test');
      if($conn->connect_error)
{
die('connection failed :'.$conn->connect_error);
}
 
   $sql = "SELECT id, name, location,bloodgroup FROM users ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "NAME: " . $row["name"]. 
 "LOCATION: " . $row["location"]. 
" BLOODGROUP: " . $row["bloodgroup"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
