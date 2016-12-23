<?php /* Template Name: tmp_manage_test */ ?>

<?php
get_header();
include_once("connection.php");

 ?>
	<div id="primary" class="content-area boxed">
		<form action="" method = "post" id = "frm_manage_test">
			<div id = "main_container">
				<input type = "button" name = "logout" value = "Logout" class = "top_btns">
				<a href = " http://localhost/wordpress_onlinetest/dashboard/" ><input type = "button" name = "dashboard" value = "Dashboard" class = "top_btns"></a>
				<input type = "submit" name = "delete" value = "Delete" onclick="return confirm('Are you sure you wish to delete this item?');" class = "top_btns">
				<a href = " http://localhost/wordpress/add-test-category/" ><input type = "button" name = "add_test" value = "Add" class = "top_btns">
			
					<div id = "sub_container">
					</div>
					<form method="post" action="">
                        <?php
                        
						echo '<table id = "display_table_data">
							 <tr class = "table_row"><th id = "heading_table" colspan = "7">Test Categories</th></tr>
							 <tr class = "table_row">
							 <th>&nbsp;</th>
							 <th> Test Category </th>
							 <th> No. Of Questions </th>
							 <th> Time Duration </th>
							 <th> Test Secrete Code </th>
							 <th> Edit Test</th>
							 <th> Manage Questions</th>
							 </tr>';
							$sql="SELECT test_category_id, test_category, no_of_questions,time, test_secrete_code from test_category";
							$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));

							$test_category_id=$_POST['test_category_id'] ;
                             
                         while($result=mysqli_fetch_array($rs))
							{
							echo '<tr class = "table_row">
							<td><input type = "checkbox" name = "checkbox[]" value = "'.$result["test_category_id"].'",id="test_category_id[]"></td>
							<td> '.$result["test_category"].'</td>
							<td> '.$result["no_of_questions"].'</td>
							<td> '.$result["time"].'</td>
							<td> '.$result["test_secrete_code"].'</td>
							<td><a href= "  http://localhost/wordpress/edit/'.$test_category_id.'"><input type = "button" name = "edit_questions" style="background:url(http://localhost/wordpress/wp-content/uploads/2016/10/edit1-1.jpg) no-repeat;"></a></td>
							<td><a href= "http://localhost/wordpress_onlinetest/manage-questions-dashboard/"><input type = "button" name = "manege_questions" style="background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/10/manage_ques-e1477292670798.jpg) no-repeat;"></a></td>
							</tr>';
							}
							echo "</table>";
						
							
							if(isset($_POST['delete']))
							{
								
					            $box=$_POST['checkbox'];
								while(list($key,$val)= @each ($box))
								{
									mysqli_query($conn,"delete from test_category where test_category_id=$val");
								}
								?>
								<script type="text/javascript">
								window.location.href=window.location.href;
								</script>
								
								<?php
							}
							?>

								
						
							</form>

					</div>
				</div>
		</form>
</div>
<?php get_footer(); ?>