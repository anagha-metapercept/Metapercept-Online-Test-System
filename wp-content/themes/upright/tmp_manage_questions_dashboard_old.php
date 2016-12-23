<?php /* Template Name: tmp_manage_questions_dashboard */ ?>
<?php include_once("connection.php"); ?>
<?php
get_header();

 ?>
	<div id="primary" class="content-area boxed">
		<form id = "frm_manage_questions" action="" method = "post" >
			<div id = "main_container">			
					<div id = "sub_container">
						<!--Top buttons-->
						<div class = "top_btns">
								<a href ='http://localhost/wordpress_onlinetest/add-questions/'><input type = "button" name = "add" id= "add" title = "Add Question" style = "background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/11/Add-e1478255417718.png) no-repeat; width:50px;"></a>
								<input type = "submit" name = "delete" id= "delete" value = "" title = "Delete Question" onclick="return confirm('Are you sure to delete this Question?');" style = "background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/11/Remove-1-e1478255324396.png) no-repeat; width:40px;">
						</div>
						
						<!-- List all the values in the table -->

						<?php 
						echo '<table id = "display_questions">
							 <tr>
							 <td><label for = "course">Select Course : </label></td>
								<td id = "dropdown_course"><select name = "select_course" id = "course_name1" onchange="getText(this)">
									<option value = "Select_Course">Select Course</option>';
								 $sql="SELECT course_id, course_name from courses";
							$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			
							while($result=mysqli_fetch_array($rs))
							{
								echo "<option value = $result[course_name]>$result[course_name]</option>"; 
							}
							echo '</select> </td>
							<input type="text" name="course" id="course_hidden">
							
							 </tr>';
				$course_selected = $_POST['course'];
							echo '<tr>
							 <td><label for = "test">Select Test : </label></td>
								<td id = "dropdown_test"><select name = "test" id = "test">
									<option value = "Select_Test">Select Test</option>';
								echo"<option value = 1>one</option>";
										$sql1= "SELECT t.test_category FROM test_category t INNER JOIN courses c ON (c.course_id=t.course_id) WHERE c.course_name like '$course_selected'";
										$rs1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
										while($result1=mysqli_fetch_array($rs1))
										{

											echo "<option value = $result1[test_category]>$result1[test_category]</option>"; 
										}
									echo '</select> </td></tr>';
							 echo '<tr>
							 <th>&nbsp;</th>
							 <th>Question No. </th>
							 <th>Question </th>
							 <th>Correct Answer </th>
							 <th>Marks </th>
							 <th>Question Type </th>
							 <th>Edit Questions</th>
							 </tr>';
							$sql2="SELECT question_no, question, correct_ans, marks, question_type from questions";
							$rs2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
							$question_no=$_POST['question_no'] ;
							while($result2=mysqli_fetch_array($rs2))
							{
							echo '<tr class = "table_row">
							<td><input type = "checkbox" name = "checkbox[]" value = "'.$result2["question_no"].'", id="question_no[]"></td>
							<td> '.$result2["question_no"].'</td>
							<td> '.$result2["question"].'</td>
							<td> '.$result2["correct_ans"].'</td>
							<td> '.$result2["marks"].'</td>
							<td> '.$result2["question_type"].'</td>
							<td><a href="http://localhost/wordpress_onlinetest/add_questions/"><input type = "button" name = "edit_questions" style="background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/11/edit-e1478257301754.jpg) no-repeat; width:50px;"></a></td>
							</tr>';
							}
							echo "</table>";
	
						?>

						
		

					</div>
				</div>
		</form>
</div>


<?php get_footer(); ?>
<!--Function to delete record from table-->
<?php
if(isset($_POST['delete']))
	{ 
	    $box=$_POST['checkbox'];
		while(list($key,$val)= @each ($box))
		{
		mysqli_query($conn,"delete from questions where question_no=$val");
		}
		?>
	    <script type="text/javascript">
		window.location.href=window.location.href;
		</script>
		<?php
	}
?>				


<script type="text/javascript">
function selectCourse() {
	
		var sel = document.getElementById( "test" );
		var txt = document.getElementById( "my_option" );
		txt.value = sel.options[ sel.selectedIndex ].value;
	<?php		if(isset($_POST["select_course"]))
			{
				$sql1="SELECT test_category from test_category where course_name = '".$_POST["course_name"]."'";
				$rs1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
				while($result1=mysqli_fetch_array($rs1))
				{
					$course_name = $result1["test_category"]; 
				}
				return $course_name;
			}
	?>
}
</script>


<script type="text/javascript">
/*  $(document).ready(function() {
    $("#course_name1").change(function(){
      $("#course_hidden").val = $("#course_name1").find(":selected").text(); alert($("#course_hidden").val);
    });

  });*/
</script>

<script type="text/javascript">

  function getText(element) {
  var textHolder = element.options[element.selectedIndex].text;
  document.getElementById("course_hidden").value = textHolder;
<?php
  echo '<tr>
							 <td><label for = "test">Select Test : </label></td>
								<td id = "dropdown_test"><select name = "test" id = "test">
									<option value = "Select_Test">Select Test</option>';
								echo"<option value = 1>one</option>";
										$sql1= "SELECT t.test_category FROM test_category t INNER JOIN courses c ON (c.course_id=t.course_id) WHERE c.course_name like '$course_selected'";
										$rs1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
										while($result1=mysqli_fetch_array($rs1))
										{
											
											echo "<option value = $result1[test_category]>$result1[test_category]</option>"; 
										}
									echo '</select> </td></tr>'; ?>
  
}
</script>