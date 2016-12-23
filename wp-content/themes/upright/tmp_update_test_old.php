<?php /* Template Name: tmp_update_test */ ?>


<?php
get_header();
include_once("connection.php");
 ?>


 <div class = "top_btns" style="margin-bottom:10px;">
			<a href =''><i class="fa fa-question-circle" aria-hidden="true" title = "Help" style = "width:20px;"></i></a>
			<a href ='http://localhost/wordpress_onlinetest/test-dashboard/'><i class="fa fa-home" title = "Home" style = "width:20px;"></i></a>
			<a href ='http://localhost/wordpress_onlinetest/logout/'><i class="fa fa-sign-out" aria-hidden="true" title = "Logout"></i></a>
		</div>
	<div id="primary" class="content-area boxed">
		<form action="" method = "post" id = "frm_update_test">
			<div id = "main_container">
					<div id = "sub_container">
						<?php $limit = 5;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  	
						//$sql = "SELECT * FROM test_category LIMIT $start_from, $limit";  ?>
						<!-- List all the values in the table -->
						
						<?php 
						echo '<table id = "display_table_data">
							 <tr class = "table_row"><th class = "table_heading" colspan = "8">Update Test</th></tr>
							 <tr class = "table_row">
							 <th> Test Id </th>
							 <th> Course</th>
							 <th> Description </th>
							 <th> No. Of Questions </th>
							 <th> Time Duration </th>
							 <th> Test Code </th>
							 <th> Instructions </th>
							 <th> Update</th>
							
							 </tr>';
							$sql="SELECT test_category_id, course_name, test_category, no_of_questions, time, test_secrete_code, instructions from test_category LIMIT $start_from, $limit";
							$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
							$test_category_id=$_POST['test_category_id'] ;
							while($result=mysqli_fetch_array($rs))
							{
							echo '<tr class = "table_row"> 
							<td class = "nr"> '.$result["test_category_id"].'</td>
							<td> '.$result["course_name"].'</td>
							<td> '.$result["test_category"].'</td>
							<td> '.$result["no_of_questions"].'</td>
							<td> '.$result["time"].'</td>
							<td> '.$result["test_secrete_code"].'</td>
							<td> '.$result["instructions"].'</td>
							<td class = "manage_buttons"><input type = "button" class = "use_address" name = "btn_update_course" style="background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/11/managequestion-e1478255782226.jpg) no-repeat; width:50px;"></td>
							</tr>';
							}
							echo "</table>";

							//simple pagination using jquery
							/*
						        $sql = "SELECT COUNT(test_category_id) FROM test_category";  
						        $rs_result = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
						        $row = mysqli_fetch_row($rs_result);  
						        $total_records = $row[0];  
						        $total_pages = ceil($total_records / $limit);  
						        $pagLink = "<nav><ul class='pagination'>";  
						        for ($i=1; $i<=$total_pages; $i++) {  
						                     $pagLink .= "<li><a href='http://localhost/wordpress_onlinetest/update-test?page=".$i."'>".$i."</a></li>";  
						        };  
						        echo $pagLink . "</ul></nav>";  */
						

							//simple pagination
							$sql = "SELECT COUNT(test_category_id) FROM test_category";  
							$rs_result = mysqli_query($conn, $sql) or die(mysqli_error($conn));  
							$row = mysqli_fetch_array($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<div class='pagination'>";  
							for ($i=1; $i<=$total_pages; $i++) {  
							             $pagLink .= "<a href='http://localhost/wordpress_onlinetest/update-test?page=".$i."'>".$i."</a>";  
							};  
							echo $pagLink . "</div>";  
							?>
						
					</div>
				</div>
		</form>
</div>
<?php get_footer(); ?>


<!--Function to update record from table-->
		
<script type="text/javascript">

$(document).ready(function(){
	$(".use_address").click(function() { 
    var test_category_id = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find(".nr")     // Gets a descendent with class="nr"
                       .text();        // Retrieves the text within <td>

    window.location = 'http://localhost/wordpress_onlinetest/update-test-page?test_category_id='+test_category_id;
    });
});
   
   //localStorage.setItem('course_id', course_id);
   //console.log(course_id);
</script>

<!-- <th> Manage Questions</th><td class = "manage_buttons"><a href= "http://localhost/wordpress_onlinetest/manage-questions-dashboard/"><input type = "button" name = "manege_questions" style="background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/11/managequestion-e1478255782226.jpg) no-repeat; width:50px;"></a></td-->

<script type="text/javascript">
        /*    $(document).ready(function(){
            $('.pagination').pagination({
                    items: <?php echo $total_records;?>,
                    itemsOnPage: <?php echo $limit;?>,
                    cssStyle: 'light-theme',
                    currentPage : <?php echo $page;?>,
                    hrefTextPrefix : 'http://localhost/wordpress_onlinetest/update-test?page='
                });
                });*/
            </script>


            $start=0;
$limit=10;
 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $start=($id-1)*$limit;
}
else{
    $id=1;
}
//Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
$query=mysqli_query($dbconfig,"select * from user LIMIT $start, $limit");
?>
<ul>
<?php
//print 10 items
while($result=mysqli_fetch_array($query))
{
    echo "<li>".$result['username']."</li>";
}
?>
</ul>
<?php
//fetch all the data from database.
$rows=mysqli_num_rows(mysqli_query($dbconfig,"select * from user"));
//calculate total page number for the given table in the database 
$total=ceil($rows/$limit);
if($id>1)
{
    //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
    echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
    ////Go to previous page to show next 10 items.
    echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}
?>
<ul class='page'>
<?php
//show all the page link with page number. When click on these numbers go to particular page. 
        for($i=1;$i<=$total;$i++)
        {
            if($i==$id) { echo "<li class='current'>".$i."</li>"; }
             
            else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
        }
?>
</ul>
</div>