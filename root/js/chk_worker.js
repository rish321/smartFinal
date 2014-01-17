function chk_worker()
{
//	return false;
	form = document.forms[0];
	mobileno = form.mobileno;
	name = form.name;
	loc = form.mark;
	language = form.language;
//	alert(language.value)
	photo = form.photo;
	id_proof = form.id_proof;
	id_type = form.id_proof_type;
	id_no = form.id_proof_no;
	if(mobileno.value == '' || name.value == ''  || loc.value == '' || language.value == '' )
	{
		alert("You must provide all the requested field.");
		return false;
	}
	var checked = false;
	var radios = form.question1;
	for (var i = 0, radio; radio = radios[i]; i++) {
		if (radio.checked) {
			checked = true;
		//	alert(radio.value);
			break;
		}
	}
	if (!checked) {
		alert("Please select Occupation");
		return false;
	}
	var matches = mobileno.value.match(/\d+/g);
	if (matches == null) {
		    alert('Enter vaild mobile no');
		    return false;
	}
	var len_mobile = mobileno.value.length;
	if(len_mobile!=10)
	{	
		alert("Error: Invalid mobile no.\n Please enter 10 digit mobile no OR land line without '0'. ");
		return false;
	}
	return true;
// to be removed
	return false;
}
