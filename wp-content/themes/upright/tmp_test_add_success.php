<?php /* Template Name: tmp_test_add_success */ ?>

<?php
get_header();?>
<div id="primary" class="content-area boxed">
		
	<form id = "frm_add_test_category">
		<div id = "main_container">
			<div>&nbsp;</div>
			<div>&nbsp;</div>
			<div>&nbsp;</div>
			
			<label><h3>Test Category added Successfully...!!! <br>
				Now Add Questions to Test..</h3> <br></label>
				<input type = "button" value = "Add Questions" name = "add_questions" id = "add_questions" class = "input_btn" onClick = "openAddQuestions()">
		 </div>
        </form>
           
	</div>

	<script type="text/javascript">
		function openAddQuestions() {
			window.location.assign("http://localhost/wordpress_onlinetest/add_questions/");
		}
	</script>
 <?php get_footer(); ?>

