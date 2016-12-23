<p><b>Subcat1:</b><br />
<?php
  $course_name = $_POST['course_name']
  $query="SELECT t.test_category FROM test_category t INNER JOIN courses c ON (c.course_id=t.course_id) WHERE c.course_name = '$course_name'";
  $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  
  {
 
  echo"<select name='sselect1' class='e1'><option value='0'>Please Select A Category</option>";
  // printing the list box select command
  while($result=mysqli_fetch_array($rs)){//Array or records stored in $nt
      echo "<option value=$result[course_name]>$result[course_name]></option>";

  }

 echo"</select>";
?>