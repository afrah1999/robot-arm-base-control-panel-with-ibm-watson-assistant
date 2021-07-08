<!DOCTYPE html>
<html>
<head>
	<title>robot control panel</title>
<link rel="stylesheet" type="text/css" href="control panel.css">

	<script type="text/javascript" src="control panel.js"></script>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

</head>
<body style="background-image: linear-gradient(to left, #535782,#2C3E50 );
">

<form id="main" action="control panel.php" method="POST">
	<h1>لوحة التحكم بالذراع الآلية</h1>

<table>
  <tr>
 	<td> </td>
    <td><button type="submit" id="Forward" name="forward" class="grad">Forward</button></td>
  </tr>
  <tr>
  	<td><button type="submit" id="left" name="left" class="grad">Left</button></td>
    <td><button type="submit" id="stop" name="stop" class="grad">Stop</button></td>
    <td><button type="submit" id="right" name="right" class="grad">Right</button>
</td>
  </tr>
  <tr>
  	<td> </td>
    <td><button type="submit" id="backward" name="backward" class="grad">backward</button></td>
     	<td> </td>

  </tr>
 
</table>



</form>

	<img id="design" src="background-copy.png"  width="490px" height="317px" >
	<img id="arm" src="arm.png"  width="200" height="300" >


</body>
</html>


<?php
$dsn="mysql:hsot=localhost;dbname=robot control panel";
$username ="root";
$password="";
try{
$conn=new PDO($dsn,$username,$password);

}

catch(PDOExeption  $Exception){
  throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );	exit();
}

if ($conn) {
  echo 'connected';
} else {
  echo 'not connected';
}

if(isset($_POST["right"]))

  $sql = "INSERT INTO direction (direction)
  VALUES ('r')";

  else if(isset($_POST["left"]))

 $sql = "INSERT INTO direction (direction)
  VALUES ('l')";

else if(isset($_POST["forward"]))

 $sql = "INSERT INTO direction (direction)
  VALUES ('f')";

else if(isset($_POST["backward"]))

 $sql = "INSERT INTO direction (direction)
  VALUES ('b')";

else if(isset($_POST["stop"]))

 $sql = "INSERT INTO direction (direction)
  VALUES ('s')";


  $conn->exec($sql);
   echo '<script>
        myFunction("تم حفظ قيم الزوايا للمحركات");
    </script>';
?>



</body>
</html>
<!--border-style: solid ;
  border-width: medium;
border-color: white;
border-radius: 16px;
 box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

//////////////////////////
// if(isset($_POST["run"])){
// 	$sql1 = "INSERT INTO run (run)
//   VALUES (1)";
//   $conn->exec($sql1);
//  echo '<script>
//         myFunction("robot arm is runing");
//     </script>';
// }
-->
