
<?php /* Template Name: tmp_fetch_questions */ ?>

<?php
get_header();
include_once("connection.php");

 ?>
        <div id="primary" class="content-area boxed">
                <form action="" method = "post" id = "frm_manage_test">
                        <div id = "main_container">


<?php

        if(isset($_POST['next']))
        {
                $a=$_POST['a'];
        }
        if(!isset($a))
        {
                $a=0;
        }


        
     $sql1="SELECT * FROM questions order by RAND() LIMIT 1 OFFSET $a";
        $result=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
        echo "<form method='post' action=''>";
        while ($row = mysqli_fetch_array($result))
        {
                echo $row['question']. "<br/>";
                echo "<input type='radio' value='1' name='answer'>" .$row['opt1']. "<br/>";
                echo "<input type='radio' value='2' name='answer'>" .$row['opt2']. "<br/>";
                echo "<input type='radio' value='3' name='answer'>" .$row['opt3']. "<br/>";
                echo "<input type='radio' value='4' name='answer'>" .$row['opt4']. "<br/>";
        }
        $a=$a+1;
        echo "<input type='hidden' value='$a' name='a'>";
        echo "<input type='submit' name='next' value='next'> ";
        
        echo "</form>";
        ?>

                                                        </form>

                                        </div>
                                </div>
                </form>
</div>
<?php get_footer(); ?>

?> 
