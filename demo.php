<HTML>
<HEAD>

<SCRIPT language="javascript">
function add(type) {

	
	var element = document.createElement("input");

	
	element.setAttribute("type", type);
	element.setAttribute("value", type);
	element.setAttribute("name", type);


	var get = document.getElementById("show");

	get.appendChild(element);

}
</SCRIPT>
</HEAD>
<BODY>
<FORM>
<H2></H2>

<BR/>
Create Field:&nbsp;<SELECT name="element">
	<label>first<option value="button">Button</option></label>
	<option value="Full name" >Name</option>
   <option value="mail">Email</option>
   <option value="number">phone</option>
	<option value="radio">Radio</option>
</SELECT>

<INPUT type="button" value="+" onclick="add(document.forms[0].element.value)"/><br/>

<div id="show">&nbsp;</div><br/>

</FORM>
</BODY>
</HTML>