
/*Check if the input login name is empty*/
function empty_name()
{
	var object = document.getElementById("logname");
	var name = object.value;
	if(name == "")
		alert("Please enter your login name!");
	else
		document.getElementById("logform").submit();
}

