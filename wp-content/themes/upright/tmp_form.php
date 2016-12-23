<?php /* Template Name: tmp_form */ ?>
<?php
include_once("connection.php");?>

<?php get_header();

 ?>
<div id="primary" class="content-area boxed">
  <form id = "frm_display_questions" action = "" method = "post">
    <div id = "main_container">
      <div id = "sub_container">
<div class="form-fields">
<h2>Student Registration Form</h2>
    <tr>
<table>
 <th><label for="id_contact_info">Create Field: </label></th>
        <td>
            <select name="contact_info" id="id_contact_info">
                <option value="1">select </option>
                <option value="2">Name</option>
                <option value="3">Email</option>
                <option value="4" >Phone</option>
                <optgroup label="Address">
                //<option value="5">Address</option>
                <option value="6">City</option>
                <option value="7">House_no</option></optgroup>
            </select></td>
          
        </td>
    </tr>

    <tr class="Name">

    </tr>

    <tr class="Email">

    </tr>
    <tr class="Phone">

    </tr>
    </tr>
    <tr class="Address">

    </tr>
    </tr>
    <tr class="City">

    </tr>
</tr>
    <tr class="House_no">

    </tr>

</table>
</div> </div>
             </div>
        </form>
           
  </div>


 <?php get_footer(); ?>
 
 <script type="text/javascript">
$(document).ready(function() {

var Name = $("<th><label>Full Name:</label></th><td><input type='tel' name='cp' value=' ' maxlength='20' /></td>");
var Email = $("<th><label>Email:</label></th><td><input type='tel' name='wp' value=' ' maxlength='20' /></td>");
var Phone= $("<th><label>Phone:</label></th><td><input type='number' name='wp' value=' ' maxlength='11' /></td>");
//var Address= $("<th><label>Address:</label></th><td><textarea placeholder='Flat-no/House-no,&nbsp;City,&nbsp;Country,&nbsp;State,&nbsp;Pin' name='wp' value=' ' maxlength='11' cols='30' rows='5'/></textarea></td>");
var City= $("<th><label>City:</label></th><td><input type='text name='wp' value=' ' maxlength='11' /></td>");
var House_no= $("<th><label>House_no:</label></th><td><input type='text name='wp' value=' ' maxlength='11' /></td>");
$('#id_contact_info').change(function(){
        
        if ($(this).val() == 2) {
            console.log('Name');
            $('.Name').html(Name);
            
        } else if ($(this).val() == 3) {
           console.log('Email');
           $('.Email').html(Email);
        }
        else if ($(this).val() == 4) {
           console.log('Phone');
           $('.Phone').html(Phone);
       }
           else if ($(this).val() == 5) {
           console.log('Address');
           $('.Address').html(Address);
       }
       else if ($(this).val() == 6) {
           console.log('Address');
           $('.City').html(City);
       }
       else if ($(this).val() == 7) {
           console.log('Address');
           $('.House_no').html(House_no);
       }
        
        

    });


 });

   
</script>