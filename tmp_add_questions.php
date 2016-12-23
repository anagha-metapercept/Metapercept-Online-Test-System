<?php /* Template Name: tmp_add_questions */ ?>
<!--<link rel="stylesheet" href="css/bootstrap-3.1.1.min.css" type="text/css" /-->

<?php
get_header();

 ?>
<?php include_once("connection.php"); ?>
<div id="primary" class="content-area boxed">
		
	<form id = "frm_add_questions" action = "" method = "post">
		<div id = "main_container">
				<input type = "button" name = "logout" value = "Logout" class = "top_btns">
				<a href = "http://localhost/wordpress_onlinetest/manage-questions-dashboard/"><input type = "button" name = "dashboard" value = "Dashboard" class = "top_btns"></a>
				<input type = "submit" name = "save" value = "Save" class = "top_btns" id = "save">
				<!--<input type = "button" name = "save" value = "Save" class = "top_btns" id = "save" onClick = "addQuestions()">-->
				
				
					<div id = "sub_container">

						<table width = "100%" id = "add_question_table">
							<tr>
								<th colspan = 2 id = "table_heading">Add Questions for test</th>
							</tr>
							<tr>
								<td id = "label"><label for = "question_no">Question No. : </label></td>
								<td id = "textbox"><input type = "text" name = "question_no" placeholder = "Question No." id="question_no" class = "input_buttons1"> <input type = "button" name = "search" id = "search_question" value = "Search" style = "background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/10/search-e1477304610896.jpg) no-repeat;"></td>
							</tr>
							<tr>
								<td><label for = "question">Question : </label></td>
								<td><textarea name = "question" placeholder = "Enter Question Here" id="question" rows = 3 cols = 20></textarea> </td>
							</tr>	
							<tr>
								<td><label for = "Option_1">Option 1: </label></td>
								<td id = "textbox"><input type = "text" name = "option1" placeholder = "Option 1" id="option1" class = "input_buttons1"> </td>
							</tr>
							<tr>
								<td><label for = "Option_2">Option 2: </label></td>
								<td id = "textbox"><input type = "text" name = "option2" placeholder = "Option 2" id="option2" class = "input_buttons1"> </td>
							</tr>
							<tr>
								<td><label for = "Option_3">Option 3: </label></td>
								<td id = "textbox"><input type = "text" name = "option3" placeholder = "Option 3" id="option3" class = "input_buttons1"> </td>
							</tr>	
							<tr>
								<td><label for = "Option_4">Option 4: </label></td>
								<td id = "textbox"><input type = "text" name = "option4" placeholder = "Option 4" id="option4" class = "input_buttons1"> </td>
							</tr>	
							<tr>
								<td><label for = "correct_answer">Correct Answer: </label></td>
								<td id = "dropdown"><select id = "correct_answer" name="correct_ans">
									<option value="option1">Choose correct answer</option>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
								</select> </td>
								<!-- 
								<td id = "dropdown">									
									<select id="correct_answer_multiple" multiple="multiple">
									<option value="choose">Choose the correct answer</option>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
									</select><br /><br />

								 </td>-->
							</tr>	
							<tr>
								<td><label for = "Question Type">Question Type: </label></td>
								<td id = "drp_quest_type"><select id = "quest_type" name="question_type">
									<option value="select">Choose Question Type</option>
									<option value="radio_buttons">Radio Button</option>
									<option value="checkbox">Checkbox</option>
								</select> </td>
							</tr>	
							<tr>
								<td><label for = "marks">Marks : </label></td>
								<td><input type="number" min="1" max="5" step="1" value="1" name = "marks" id="marks" class = "input_buttons1" placeholder = "Marks for question"></td>
							</tr>	
						
							<tr>
								<td><input type = "reset" value = "Reset" name = "reset" class = "reset" style="background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/10/download-2-e1477048720204.jpg) no-repeat;"></td>
							</tr>
  						</table>       
  					</div>
             </div>
        </form>
           
	</div>



		
	<?php  
						if(isset($_POST['save'])) 
						{
						$question=$_POST['question'];
						$opt1 = $_POST['option1'];
						$opt2 = $_POST['option2'];
						$opt3 = $_POST['option3'];
						$opt4 = $_POST['option4'];
						$correct_answer = $_POST['correct_ans'];
						$marks = $_POST['marks'];
						$question_type = $_POST['question_type'];
						
						$rs="insert into questions (question, opt1, opt2, opt3, opt4, correct_ans, marks, question_type)
						values('$question','$opt1','$opt2','$opt3','$opt4','$correct_answer','$marks','$question_type')";
						
						$result = mysqli_query($conn, $rs) or die(mysqli_error($conn));

						}	
						 ?>

			



<?php get_footer(); ?>
