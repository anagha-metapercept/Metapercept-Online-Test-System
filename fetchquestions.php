<form name="" method="POST">
                </br><h4># of Questions</h4>
                <?php
                include_once('db.php');
                $view_questions=mysql_query("SELECT * FROM questions ORDER BY RAND() LIMIT 1")or die(mysql_error());
                $i=1;
                    while($row=mysql_fetch_array($view_questions))
                    {

                ?>
                <div class="view_question fsize">

                    <p align="justify"><?php echo $i;?>) <?php echo $row['question'];?></p>
                    <div class="indent-question">
                        <input type="radio" value="opt1" id="" name="name"> <?php echo $row['opt1'];?>
                        </br>
                        <input type="radio" value="opt2" id="" name="name"> <?php echo $row['opt2'];?>
                        </br>
                        <input type="radio" value="opt3" id="" name="name"> <?php echo $row['opt3'];?>
                        </br>
                        <input type="radio" value="opt4" id="" name="name"> <?php echo $row['opt4'];?>

                    </div>
                </div>
                <?php
                $i++;
                    }

                ?>
                <?php

$rs=mysql_query("SELECT correct_ans FROM questions")or die(mysql_error());
while($row=mysql_fetch_array($rs))
{
    $r=$row['correct_ans'];
if(isset($_POST['name']))
{
$user_answer = $_POST['name'];
$correct=0;
$wrong=0;
if($user_answer == $r)
{
   $correct++; 
}
else
{
   $wrong++;
}
echo "correct=".$correct."<br>";
echo "wrong=".$wrong."<br>";
}
}


?>
                <center><button id='next<?php echo $i;?>' class='next btn btn-success' name="finish" type='submit'>NEXT</button></center>

            </form>