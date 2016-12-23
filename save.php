<?php
if(isset($_POST['submit']))
{
  $a=$_POST['fname'];
  $b=$_POST['lname'];
$c=$_POST['mail'];
$to="anagha@metapercept.com";
//$from="gurwinder@metapercept.com";
$from="From: gurwinder@metapercept.com";
//$header.=" gurwinder@metapercept.com";
if(mail($to,$a,$b,$c,$from))

{
  echo "your mail send ";
}
else
{
  echo "error";
}
}

?>
<tr>
<table>
 <th><label for="id_contact_info">Address: </label></th>
        <td>
            <select name="contact_info" id="id_contact_info">
                <option value="1">select </option>
                <optgroup label="Address">
                <option value="5">Flatno</option>
                 <option value="6">Streetname</option>
                <option value="7">City</option>
                <option value="8">State</option>
                <option value="9">Country</option>
                </optgroup>
            </select></td>
          
        </td>
    </tr>

    
    </tr>
    <tr class="Flatno">

    </tr>
    </tr>
    <tr class="City">

    </tr>
</tr>
    <tr class="Street">
    </tr>
    <tr class="State">
    </tr>
    <tr class="Country">

    </tr>

</table>
</tr>
<script type="text/javascript" src="jquery-3.1.1.min.js"> </script>

 <script type="text/javascript">
$(document).ready(function() {

var Flatno = $("<th><label>Flatno/house_no:</label></th><td><input type='tel' name='cp' value=' ' maxlength='20' /></td>");
var Street  = $("<th><label>Street Name/ Area/ Apartment Name</label></th><td><input type='tel' name='wp' value=' ' maxlength='20' /></td>");
var State= $("<th><label>State/ Province</label></th><td><input type='number' name='wp' value=' ' maxlength='11' /></td>");
var City= $("<th><label>City:</label></th><td><input type='text name='wp' value=' ' maxlength='11' /></td>");
var Country= $("<th><label>Country:</label></th><td><input type='text name='wp' value=' ' maxlength='11' /></td>");
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
           console.log('Flatno');
           $('.Flatno').html(Flatno);
       }
       else if ($(this).val() == 6) {
           console.log('Street ');
           $('.Street ').html(Street);
       }
       else if ($(this).val() == 7) {
           console.log('City');
           $('.City').html(City);
       }
       else if ($(this).val() == 8) {
           console.log('State');
           $('.State').html(State);
       }
       else if ($(this).val() == 9) {
           console.log('Country');
           $('.Country').html(Country);
       }
        
        

    });


 });

</script>

<?php
if(isset($_POST['submit']))
{
$a=$_FILES['image']['name'];
$b=$_FILES['image']['tmp_name'];
$c=($_FILES['image']['size']/1024);
$d=$FILES['image']['type'];
$img_des='../wp-content/themes/upright/images/'.$a;
//print_r($FILES);
if($d=='image/gif'||$d=='image/jpeg'||'image/png')
{
  $img_des='../wp-content/themes/upright/images/'.$a;
  if(!file_exists('images')){

   mkdir('images');
  move_uploaded_file($b,$img_des);
  }
  else
  {
   move_uploaded_file($b,$img_des);
    
  }
  
}

else
{
  echo "invalidfile";
}
}?>

