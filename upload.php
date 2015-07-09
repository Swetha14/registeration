<?php
mysql_connect("localhost","root","");
mysql_select_db("swetha");
session_start();
$id=$_REQUEST['sid'];
$sname=$_REQUEST['name'];
$rno=$_REQUEST['rno'];
$dept=$_REQUEST['dept'];
$year=$_REQUEST['year'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$name1=$_FILES['file']['name'];
$id=1;
$refno='0000000'+$id;
echo $refno;
$captcha=$_REQUEST['captcha'];
if($_SESSION['digit']==$captcha)
{
mysql_query("insert into student(Name,Rollnumber,Department,YearOFstudy,Email,Password,Picture) values('$sname','$rno','$dept','$year','$email','$pass','$name1')");	
}
else
{
	header('location:registeration.html');
}
?>
