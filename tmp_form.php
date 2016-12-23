<?php /* Template Name: tmp_form */ ?>
<?php
?>

<?php get_header();

 ?>
<div id="primary" class="content-area boxed">
    <?php upright_breadcrumb(); ?>
  <div class="form-fields">
  
<h2>Student Registration Form</h2>
<p><span class="error" id="error" style="color:red">* required field.</span></p>
    <tr>
<table>
 <th><label for="id_contact_info">Create Field: </label></th>
        <td>
           <select name="contact_info" id="id_contact_info">
                <option value="1">select </option>
                <optgroup label="Name">
                <option value="2">First Name</option></optgroup>
                 <option value="3">Last Name</option></optgroup>
                <option value="4">Email</option>
                <option value="5" >Phone</option>
                <optgroup label="Address">
                <option value="6">Flat_no/House_no</option>
                <option value="7">City</option>
               <option value="8">State</option>
                <option value="9" id="country">Country_code</option></optgroup>
                 
            </select></td>
          
        </td>
    </tr>

    <tr class="FirstName"></tr>
   <tr class="LastName"></tr>
    <tr class="Email"></tr>
    <tr class="Phone"></tr>
    <tr class="Flat_no"></tr>
    <tr class="City"></tr>
    <tr class="State"></tr>
    
    </table>

             


<form name="myform" action="" method="POST"  enctype="multipart/form-data" >
<input type="file"  name="image">
<input type="submit"  name="submit" id="submit">
<script type="text/javascript" src="../wp-content/themes/upright/jquery-3.1.1.min.js"> </script>
<script type="text/javascript">
$(document).ready(function() {

var FirstName = $("<th><label>First Name:</label></th><td><input type='text'  name='name' id='name' value=' '  maxlength='20'  /></td>");
var LastName = $("<th><label>Last Name:</label></th><td><input type='text' id='email' name='wp' value=' ' maxlength='20' /></td>");
var Email = $("<th><label>Email:</label></th><td><input type='text' name='wp' value=' ' maxlength='20' /></td>");
var Phone= $("<th><label>Phone Number:</label></th><td><input type='text' name='wp' value=' ' maxlength='10' /></td>");

var Flat_no= $("<th><label>Flat_no/House_no</label></th><td><input type='text name='wp' value=' ' maxlength='11' /></td>");
var City= $("<th><label>City:</label></th><td><input type='text name='wp' value=' ' maxlength='11' /></td>");
var State= $("<th><label>State:</label></th><td><input type='text' name='wp' value=' ' maxlength='11' /></td>");

$('#id_contact_info').change(function(){
        
        if ($(this).val() == 2) {
            console.log('FirstName');
            $('.FirstName').html(FirstName);
            
        }
        else if ($(this).val() == 3) {
           console.log('LastName');
           $('.LastName').html(LastName);
        }

         else if ($(this).val() == 4) {
           console.log('Email');
           $('.Email').html(Email);
        }
        else if ($(this).val() == 5) {
           console.log('Phone');
           $('.Phone').html(Phone);
       }
       else if ($(this).val() == 6) {
           console.log('Address');
           $('.Flat_no').html(Flat_no);
       }
           
       else if ($(this).val() == 7) {
           console.log('Address');
           $('.City').html(City);
       }
       
        else if ($(this).val() == 8) {
           console.log('State');
           $('.State').html(State);
       }
        else if ($(this).val() == 10) {
           console.log('Sub');
           $('.Sub').html(State);
       }

    });


 });


$(document).ready(function () {

    $("#submit").on('click', function (e) {  // <- capture the button click

        e.preventDefault();  
        var a =$('#name').val()  ;                // <- block the form submit
//alert(a);
        // test your form's validity

       if (a == '') {   
       
            // <- make name field required
            alert('form not valid');         // <- form not valid - somehow alert user
        } else {            
            $('#myform').submit();      // <- form is valid - submit it
        }

    });

});

</script>


<?php
$a=$_FILES['image']['name'];
$b=$_FILES['image']['tmp_name'];
$c=($_FILES['image']['size']/1024);
$d=$_FILES['image']['type'];
$img_des='../wp-content/themes/upright/images/'.$a;
print_r($FILES);
if($d=='image/gif'||$d=='image/jpeg'||'image/png')
{
  $img_des='../wp-content/themes/upright/image/'.$a;
  if(!file_exists('image')){

   mkdir('image');
  wp_upload_dir($b,$img_des);
  }
  else
  {
   wp_upload_dir($b,$img_des);
    
  }
  
}

else
{
  echo "invalidfile";
}
?>


    </form>
</div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>