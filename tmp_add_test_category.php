<?php /* Template Name: tmp_add_test_category */ ?>

<?php
get_header();
include_once("connection.php");
 ?>


<div id="primary" class="content-area boxed">
		
	<form id = "frm_add_test_category" action="" method="post">
		<div id = "main_container">
				<input type = "button" name = "logout" value = "Logout" class = "top_btns">
				<a href = " http://localhost/wordpress/dashboard/" ><input type = "button" name = "dashboard" value = "Dashboard" class = "top_btns"></a>
				
				
					<div id = "sub_container">
						<table width = "100%" id = "add_test_table">
							<tr>
								<th colspan = 2 id = "table_heading">Test Category Details</th>
							</tr>
							<tr>
								<td id = "label"><label for = "test_category_id">Test Category Id : </label></td>
								<td id = "textbox"><input type = "text" name = "test_category_id" placeholder = "Test Category Id" id="test_category_id" class = "input_buttons1"> <input type = "button" name = "search" id = "search_test" value = "Search" style = "background:url(http://localhost/wordpress/wp-content/uploads/2016/10/search-e1477304610896-1.jpg) no-repeat;"></td>
							</tr>
							<tr>
								<td><label for = "test_category">Test Category : </label></td>
								<td><input type = "text" name = "test_category" placeholder = "Test Category" id="test_category" class = "input_buttons1"></td>
							</tr>	
							<tr>
								<td><label for = "no_of_questions">No. Of Questions : </label></td>
								<td><input type="number" min="1" max="100" step="1" value="1" name = "no_of_ques" id="no_of_ques" class = "input_buttons1" placeholder = "No Of Questions"></td>
							</tr>	
							<tr>
								<td><label for = "time">Time for Test(in Minutes) : </label></td>
								<td><input type="number" min="1" max="120" step="1" value="1" name="time" class = "input_buttons1" placeholder = "Time for test" required ></td>
							</tr>
							<tr>
								<td><label for = "test_secrete_code">Test Secrete Code: </label></td>
								<td><input type="text" min="1" max="100" step="1" value="1" name = "secrete_code" id="secrete_code" class = "input_buttons1" placeholder = "test_secrete_code"></td>
							</tr>		
							<tr>
								<td><label for = "instructions">Test Instructions : </label></td>
								<td><textarea col = 5 row = 5 name = "instructions" id = "instructions" placeholder = "Test Instructions"></textarea>
							</tr>	
						
							<tr>
								<td><input type = "submit" value = "Save" name = "save" id = "submit" style="background:url(http://localhost/wordpress/wp-content/uploads/2016/10/save-e1477299045595-1.jpg) no-repeat;"></td>
								<td><input type = "reset" value = "Reset" name = "reset" id = "reset" style="background:url(http://localhost/wordpress/wp-content/uploads/2016/10/save-e1477299045595-1.jpg) no-repeat;"></td>

							</tr>
  						</table>       
  					</div>
       
  

</div>
        </form>
           
	</div>


  <?php
if(isset($_POST['save']))
{
$id=$_POST['test_category_id'];	
$cate=$_POST['test_category'];
$question=$_POST['no_of_ques'];
$time=$_POST['time'];
$code=$_POST['secrete_code'];
$inst=$_POST['instructions'];
$rs="insert into test_category (test_category,no_of_questions,time,test_secrete_code,instructions_for_test ,created,modified) values ('$cate','$question','$time','$code','$inst',now(),now())";
$result=mysqli_query($conn,$rs)or die(mysqli_error($conn));

}

?>


 <?php get_footer(); ?>

