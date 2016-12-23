<?php /* Template Name: tmp_display_questions */ ?>
<?php
include_once("connection.php");?>

<?php
get_header();

 ?>
<div id="primary" class="content-area boxed">
	<form id = "frm_display_questions" action = "" method = "post">
		<div id = "main_container">
			<div id = "sub_container">
                <div id = "title" style = "color:blue; text-align:center;padding-top:-2px;"><h3>Test Conductor</h3></div>
                <table border = "1px solid black">
				
				<?php

        if(isset($_POST['next']))
        {
                $a=$_POST['a'];
        }
        if(!isset($a))
        {
                $a=0;
        }

         $id = $_GET['test_category_id'];
     $sql1="SELECT * FROM questions where test_category_id = '". $id . "' LIMIT 1 OFFSET $a"; /*order by RAND() LIMIT 1 OFFSET $a";*/
        $result=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr><td width = '33.33%'><div id = 'status'></div></td>
                  <td width = '33.33%'><div id = 'quest_no' style = 'text-align:center;'>Question No. : 1</div></td>
                  <td width = '33.33%'><div>&nbsp;</div></td>
            </tr>";
            echo "<tr>";
            echo "<td  colspan = '3'><div id = 'question' style = 'border:1px solid black!important; border-radius:5px; margin:2px; padding: 5px; height:100px;'>". $row['question']. "</div></td></tr>";  
            echo "<tr><td>1. <input type='radio' value='1' name='answer'>" . " " . $row['opt1'] . "</td></tr>";
            echo "<tr><td>2. <input type='radio' value='2' name='answer'>" . " " . $row['opt2'] . "</td></tr>";
            echo "<tr><td>3. <input type='radio' value='3' name='answer'>" . " " . $row['opt3'] . "</td></tr>";
            echo "<tr><td>4. <input type='radio' value='4' name='answer'>" . " " . $row['opt4'] . "</td></tr>";	 
        } 

        $a=$a+1;
        echo "<tr><td><input type='hidden' value='$a' name='a'></td></tr>";
        echo "<tr><td><input type='submit' id = 'next' name='next' value='next' onclick = 'onClick()''></td>";
           echo "</tr>";        
        ?>
                        </table>
  					</div>
             </div>
        </form>
           
	</div>

	<button type="button" onClick="onClick()">Click me</button>
    <p>Clicks: <a id="clicks">1</a></p>


 <?php get_footer(); ?>

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

<script type="text/javascript">
/*
function questNoAutogenerate() {
        
  <?php
        $id = $_GET['test_category_id'];
        $sql1="SELECT COUNT(question_no) AS question_no FROM questions where test_category_id = '". $id . "'"; 
        $result=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result); 
  ?>

  //alert('<?php $row['question_no']; ?>');
  var i=0;
  var j = "<?php echo $row['question_no']; ?>";
  while(i<=j) {

  document.getElementById('quest_no').innerHTML = "Question no. : " + i;


  }
  i++;
}*/
</script>
<script type="text/javascript">
   /*         var a;
             var countClicks = 0;

            function upCount() { 
          
              countClicks++;
              console.log(countClicks);
              document.getElementById('quest_no').innerHTML = "Question no. : " + countClicks;
              a = countClicks;
            }

            var countClicks */
        </script>

        <script type="text/javascript">
    var clicks = 1;
    function onClick() {
        clicks += 1;
        document.getElementById("quest_no").innerHTML = "Question no. : " + clicks;
    };
    </script>


<script type="text/javascript">
/*$(document).ready(function(){
  var i = 1;
  var a = 0;
document.getElementById('quest_no').innerHTML = "Question no. : " + (i+a);
a++;

});*/
 </script>