<!DOCTYPE html>
<html lang="ru">
<head>
<title>..........</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> </link>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container mt-4">
<h2><a href="new.php">добавление животных</a></h2>
<?php
class Seaa{
function live()
  {
    $servername="sqlserver";
    $username="root";
    $password="root";
    $dbname="registor";
$conn=new mysqli($servername,$username,$password,$dbname);
$Danish=mysqli_query($conn,"SELECT * FROM `animals`");
while ($win=mysqli_fetch_assoc($Danish))
{
	if($win['название']=="корова")
  {
  $milk=$milk+rand(8,12);
  }
  if($win['название']=="курица")
  {
  $eggs=$eggs+rand(0,1);
  }
  //$ddd =+ $win['рег.номер']." ".$win['название']; 
  $all=$milk+$eggs;
}
 print "молоко ".$milk;
   echo '<br>';
  print "яйца ".$eggs;
  echo '<br>';
  print "общее кол-во:".$all;
  
   }
 }
$gott=new Seaa();
echo $gott->live();
?>
</div>
</body>
</html>
