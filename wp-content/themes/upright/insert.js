
$('#frm_add_test_category').submit(function(){
 return false;
}); 

$('#save').click(function(){
 $.post( 
 $('#frm_add_test_category').attr('action'),
 $('#frm_add_test_category :input').serializeArray(),
 function(result){
 $('#result').html(result);
 }
 );
});
 