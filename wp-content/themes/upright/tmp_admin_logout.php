<?php /* Template Name: tmp_admin_logout */ ?>

<?php
session_start();
get_header(); ?>
<!--div class = "top_btns" style="margin-bottom:10px;">
			<a href ='http://localhost/wordpress_onlinetest/dashboard/'><input type = "button" name = "home" id= "home" title = "Home" style = "background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/11/home-1-e1478254604371.jpg) no-repeat; width : 50px; height : 40px;"></a>
			<a href ='http://localhost/wordpress_onlinetest/logout/'><input type = "button" name = "logout" id= "logout" title = "Logout" style = "background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/11/logout-e1478256134465.jpg) no-repeat; width : 50px; height : 40px;"></a>
		</div-->
	<div id="primary" class="content-area boxed">
		<form id = "frm_admin_logout" action="" method = "post" >
			<div id = "main_container">
				<div id = "sub_container">
					<table id = "admin_logout_table"> 
						<tr>
							<?php //sleep(2); ?>
							<h2>You have Successfully Logged out..!!</h2>
							<?php //header("Location: http://localhost/wordpress_onlinetest/", true, 303); 
								
								$_SESSION['login_status'] = 0;
								/*if($_SESSION['login_status']==0) {
    								header("refresh:3; url=http://localhost/wordpress_onlinetest/");
    							}*/
							?>
							<script type="text/javascript">
								window.location.href = 'http://localhost/wordpress_onlinetest/';
							</script>
							
						</tr>					
					</table>
				</div>
			</div>
		</form>
</div>
<?php get_footer(); 

  ?>