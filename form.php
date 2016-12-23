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
                <option value="5">Address</option>
            </select>
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

</table>
<script type="text/javascript" src="jquery-3.1.1.min.js"> </script>

 <script type="text/javascript">
$(document).ready(function() {

var Name = $("<th><label>Full Name:</label></th><td><input type='tel' name='cp' value=' ' maxlength='20' /></td>");
var Email = $("<th><label>Email:</label></th><td><input type='tel' name='wp' value=' ' maxlength='20' /></td>");
var Phone= $("<th><label>Phone:</label></th><td><input type='number' name='wp' value=' ' maxlength='11' /></td>");
var Address= $("<th><label>Address:</label></th><td><textarea placeholder='Flat-no/House-no,&nbsp;City,&nbsp;Country,&nbsp;State,&nbsp;Pin' name='wp' value=' ' maxlength='11' cols='30' rows='5'/></textarea></td>");
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
        

    });

});</script>