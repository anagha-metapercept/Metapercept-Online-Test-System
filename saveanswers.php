<?php
include_once('db.php');
        if(isset($_POST['next']))
        {
                $a=$_POST['a'];
        }
        if(!isset($a))
        {
                $a=0;
        }


        
     $sql1="SELECT * FROM questions order by RAND() LIMIT 1 OFFSET $a";
        $result=mysql_query($sql1,$con) or die(mysql_error($con));

        echo "<form method='post' action=''>";
        while ($row = mysql_fetch_array($result))
        {
          $question_no=$row['question_no'];
                echo $row['question']. "<br/>";
                echo "<input type='radio' value='opt1' name='answer'>" .$row['opt1']. "<br/>";
                echo "<input type='radio' value='opt2' name='answer'>" .$row['opt2']. "<br/>";
                echo "<input type='radio' value='opt3' name='answer'>" .$row['opt3']. "<br/>";
                echo "<input type='radio' value='opt4' name='answer'>" .$row['opt4']. "<br/>";
                 //echo "<input type='hidden' value='$question_no' name='question_no'>";
        }
        $a=$a+1;
        echo "<input type='hidden' value='$a' name='a'>";
        echo "<input type='submit' name='next' value='next'> ";
        
        echo "</form>";
        if(isset($_POST['answer']))
        {
            $value=$_POST['answer'];
            //$question_no=$_POST['question_no'];
            //echo "$value";
            $rs="insert into student_answer_tbl(question_no,answer)values ('$question_no','$value')";
            $result=mysql_query($rs,$con)or die(mysql_error());
        }

        ?>
