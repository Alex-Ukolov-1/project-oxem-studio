<?php
class Mos
{
	public $login;
	public $name;
public function read()
{
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);

if(mb_strlen($login)<0||mb_strlen($login)>90)
{
	echo "Недопустимые значения логина!";
	exit();
}else if(mb_strlen($name)<3||mb_strlen($name)>50)
{
	echo "Недопустимые значения! имени";
	exit();
}
$mysql=new mysqli('sqlserver','root','root','registor');
$mysql->query("INSERT INTO `animals` (`название`, `рег.номер`) VALUES ('$name','$login');");

$mysql->close();
header('Location: /файлсайт(1).php');
}
}
$gott=new Mos();
echo $gott->read();
?>