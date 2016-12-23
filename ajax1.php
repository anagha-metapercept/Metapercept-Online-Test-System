 <html>
 <script type="text/javascript" src="jquery-3.1.1.min.js"> </script>

 <script type="text/javascript">

 $(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "display.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
});

</script>

<body>

<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" value="display" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div>
</body>
</html>