<?php 
session_start();
include_once("connection.php"); ?>
<?php
 //code for result
//$_SESSION['correct_answer'] = 1;
//$_SESSION['wrong_answer'] = 1;
$student_id = $_SESSION['student_id'];
    $answer=$_POST['answer'];
    $question_no=$_POST['question_no'];
    $id = $_SESSION['test_category_id'];
     $sql1 = "SELECT correct_ans, marks FROM questions WHERE test_category_id='".$id."' and question_no='".$question_no."'"; 
     $result=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
    
     while ($row = mysqli_fetch_array($result)) {
          # code...
     
     	if($answer == $row["correct_ans"]) {     		
     		$_SESSION['correct_answer']+=1;
               $_SESSION['marks'] = $_SESSION['marks']+$row["marks"];

     	}
     	else {
     		$_SESSION['wrong_answer']+=1;
     	}
          $_SESSION['total_marks']=$_SESSION['total_marks']+$row["marks"];
     }		
?>