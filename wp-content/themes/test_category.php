<?php
include_once("db.php");
//$id=$_POST['id'];
$cat=$_POST['cate'];
$que=$_POST['ques'];
$time=$_POST['time'];


$rs="insert into test_category(test_category,no_of_questions,time,created,modified)
values('$cat','$que','$time',now(),now())";
$result=(mysql_query($rs,$con)) or die (mysql_error());
echo "inserted";
?>