<?php /* Template Name: tmp_edit */ ?>
<?php
get_header();
include_once("connection.php");

 ?>

  <div id="primary" class="content-area boxed">
    <form action="" method = "post" id = "frm_manage_test">
      <div id = "main_container">

 <?php
 if(isset($_GET['test_category_id']))
{
$id=$_GET['test_category_id'];

if(isset($_POST['submit']))
{
$cate=$_POST['test_category'];
$questions=$_POST['no_of_questions'];
$query3=mysqli_query("update test_category set test_category='$cate', no_of_questions='$questions' where test_category_id='$id'");
if($query3)
{
window.location.assign(' http://localhost/wordpress/manage-test/ ');
}
}
$query1=mysqli_query("select * from test_category where test_category_id='$id'");
$query2=mysqli_fetch_array($query1,$conn)or die(mysqli_error($conn));
?>
<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $query2['test_category']; ?>" /><br />
Age:<input type="text" name="age" value="<?php echo $query2['no_of_questions']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
//<?php
}
?>

					</div>
				</div>
		</form>
</div>
<?php get_footer(); ?>