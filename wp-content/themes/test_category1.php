<?php
include_once("db.php");

$a=$_POST['cate'];
$b=$_POST['ques'];
$c=$_POST['time'];
$d=$_POST['inst'];

$rs="insert into test_category (test_category,no_of_questions,time,created,modified,instructions_for_test ) values ('$a','$b','$c',now(),now(),'$d')";
$result=mysql_query($rs,$con)  or die(mysql_error());
echo"inserted";
?>