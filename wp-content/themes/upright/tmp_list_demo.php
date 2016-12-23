<?php /* Template Name: tmp_list_demo */ ?>

<html>
<body>
<select name = 'select1' onchange='return get_street()'>
<option name='test1'>test1</option>
<input type="text" name ="street" id="street" value="" />
</body>
</html>

<script> 
    function get_street()
    {

       var selected_val = $('option:selected', this).val();

       $.ajax({  //ajax call
        type: "POST",      //method == POST 
        url: "street.php", //url to be called
        data: "course_name="+selected_val, //data to be send 
        success: function(data){
               $('#street').val(data); // here we will set a value of text box
           }
        });
    } 

 </script>