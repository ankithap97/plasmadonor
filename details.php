<?php
  $name = $_POST['name'];
  $dateofbirth  = $_POST['dateofbirth'];
  $phoneno    = $_POST['phoneno'];
  $age      = $_POST['age'];
  $bloodgroup  = $_POST['bloodgroup'];
  $location  = $_POST['location'];
  $tested  = $_POST['tested'];
  $date_of_testednegative  = $_POST['date_of_testednegative'];
     
       $conn=new mysqli('127.0.0.1','root','ankitha123','test');
      if($conn->connect_error)
{
die('connection failed :'.$conn->connect_error);
}
 else
{


$stmt=$conn->prepare("insert into users (name,dateofbirth,phoneno,age,bloodgroup,location,tested,date_of_testednegative)
             values(?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssiissss",$name,$dateofbirth,$phoneno,$age,$bloodgroup,$location,$tested,$date_of_testednegative);
$stmt->execute();
echo "Registration completed succesfully";
$stmt->close();
$conn->close();
}  
?>
  <html>
<body>
  <a href="index.php">Back to home</a>

</body>
</html>
