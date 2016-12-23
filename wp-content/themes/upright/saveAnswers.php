<?php
session_start();
include_once("connection.php");?>
    <?php       
   // $correct_answer = 0;
    //$wrong_answer = 0;
    $student_id = $_SESSION['student_id'];
    $answer=$_POST['answer'];
    $question_no=$_POST['question_no'];
    $id = $_SESSION['test_category_id'];
    
    if(isset($_POST['answer'])) {
    $rs="insert into student_answer_tbl(student_id, test_category_id, question_no, answer)values ('$student_id', '$id', '$question_no','$answer')";
    $result=mysqli_query($conn,$rs)or die(mysqli_error($conn));

}
    ?>
    
