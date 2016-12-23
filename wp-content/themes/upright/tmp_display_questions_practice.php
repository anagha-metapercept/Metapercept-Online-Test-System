<?php /* Template Name: tmp_display_questions_practice */ ?>

<?php
include_once("connection.php");?>

<?php get_header();

 ?>
<div id="primary" class="content-area boxed">
	<form id = "frm_display_questions" action = "" method = "post">
		<div id = "main_container">
			<div id = "sub_container">
                <div id = "title" style = "color:blue; text-align:center;padding-top:-2px;"><h3>Test Conductor</h3></div>
                <div id ="question_display">
                <table border = "1px solid black" id = "questions">
                  <?php
                  /*if(isset($_POST['next']))
        {
                $a=$_POST['a'];
        }
        if(!isset($a))
        {
                $a=0;
        }*/
     //   $i = 1;
       
         $id = $_GET['test_category_id'];
     $sql1="SELECT * FROM questions LIMIT 1"; /*order by RAND() LIMIT 1 OFFSET $a";*/
        $result=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($result))
        {
           
          $ques_no = $row['question_no'];
          $ques = $row['question'];
          $opt1 = $row['opt1'];
          $opt2 = $row['opt2'];
          $opt3 = $row['opt3'];
          $opt4 = $row['opt4'];
            echo "<tr><td width = '33.33%'><div id = 'status'></div></td>
                  <td width = '33.33%'><div id = 'quest_no' style = 'text-align:center;'>Question No : ". $a ."</div></td>
                  <td width = '33.33%'><div>&nbsp;</div></td>
            </tr>";
            echo "<tr>";
            echo "<td  colspan = '3'><div id = 'question' style = 'border:1px solid black!important; border-radius:5px; margin:2px; padding: 5px; height:100px;'>".$ques."</div></td></tr>";  
            echo "<tr><td>1. <input type='radio' value='option1' name='answer' onclick = 'checkAnswer(this.value)'>" . " " . $opt1 . "</td></tr>";
            echo "<tr><td>2. <input type='radio' value='option2' name='answer' onclick = 'checkAnswer(this.value)'>" . " " . $opt2 . "</td></tr>";
            echo "<tr><td>3. <input type='radio' value='option3' name='answer' onclick = 'checkAnswer(this.value)'>" . " " . $opt3 . "</td></tr>";
            echo "<tr><td>4. <input type='radio' value='option4' name='answer' onclick = 'checkAnswer(this.value)'>" . " " . $opt4 . "</td></tr>";  

        } 

              //echo $_SESSION["cnt"];
        //$a=$a+1;
        echo "<tr><td><input type='hidden' value='$ques_no' name='question_no'></td></tr>";
        echo "<tr><td><input type='hidden' value='$a' name='a'></td></tr>";
        echo "<tr><td><input type='button' id = 'next' name='next' value='next' class = 'next_question'></td>
        <td><input type='submit' id = 'prev' name='prev' value='prev'></td>";
           echo "</tr>";        
        ?>
				         </table>
               </div>
  					</div>
             </div>
        </form>
           
	</div>


 <?php get_footer(); ?>


 

 <script type="text/javascript">

 $(document).ready(function() {
  //$(document).on("click","#question_display .next_question",function() {

    $("#next").click(function() {
      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "../wp-content/themes/upright/questions.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#questions").html(response); 
            //alert(response);
        }
});
});
});

</script>

<!--Function for Timer-->
<script type="text/javascript">
function formatTime(seconds) {
    var h = Math.floor(seconds / 3600),
        m = Math.floor(seconds / 60) % 60,
        s = seconds % 60;
    if (h < 10) h = "0" + h;
    if (m < 10) m = "0" + m;
    if (s < 10) s = "0" + s;
    return h + ":" + m + ":" + s;
}

var counter = setInterval(timer, 1000);

function timer() {
    count--;
    if (count < 0) return clearInterval(counter);
    document.getElementById('status').innerHTML = "Time Left : " + formatTime(count);
}

<?php     
        $id = $_GET['test_category_id'];
        $sql1="SELECT time FROM test_category where test_category_id = '". $id . "'"; 
        $result=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result);
    ?>
    var time = "<?php echo $row['time']; ?>";
    var seconds = time * 60;
    var count = seconds;

formatTime(seconds);
</script>
<!--<td width = '33.33%'><div id = 'quest_no' style = 'text-align:center;'>Question No : ". $a ."</div></td>-->




<!--Check Answers-->
 <script type="text/javascript">

function checkAnswer(answer) {
alert(answer);
var ans = answer;
//window.location.href = window.location.href+'?ans='+ans;
<?php
$answer = $_GET['ans'];
$id = $_GET['test_category_id'];
echo $answer;
 $sql1="SELECT correct_ans FROM questions where test_category_id = '". $id . "' AND question_no = '".$_POST['question_no']."'"; 
        $result=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
        while($row = mysqli_fetch_array($result)) {
         $a = $row['correct_ans'];
       }
if($answer == $a) {
  echo "true"; ?>
  alert("true");
  <?php
}
else
 echo "false";
?>
}
</script>
<script type="text/javascript">
/*  <?php if (!isset($_COOKIE['count']))
          {
              $cookie = 1;
              setcookie("count", $cookie);
              echo "hi";
          }
          else
          {
              $cookie = $_COOKIE['count']++;
              setcookie("count", $cookie);
              echo "hello";
          } ?>

}

n++;
localStorage.setItem("on_load_counter", n);
document.getElementById('quest_no').innerHTML = "Question No : " + n;
*/
 </script>

<?php
if(isset($_POST['answer']))
        {
            $value=$_POST['answer'];
            $question_no=$_POST['question_no'];
            //echo "$value";
            $rs="insert into student_answer_tbl(question_no,answer)values ('$question_no','$value')";
            $result=mysql_query($rs,$con)or die(mysql_error());
        }
?>

