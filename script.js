document.getElementById("res").style.display="none";
function validatePassword(){
	let chk_capital = document.getElementById('chk_capital');
	let chk_number = document.getElementById('chk_number');
	let chk_length = document.getElementById('chk_length');
	let bool_capital;
	let bool_number;
	let bool_length;
	let password = document.getElementById('password');
	
	if(password.value.length > 12){
		chk_length.removeAttribute('class');
		chk_length.setAttribute('class', 'alert-success');
		chk_length.innerHTML = "&#10004; Must be a 12 characters long";
		bool_length = true;
	}else{
		chk_length.removeAttribute('class');
		chk_length.setAttribute('class', 'alert-danger');
		chk_length.innerHTML = "X Must be a 12 characters long";
		bool_length = false;
	}
	
	if(password.value.search(/[0-9]/) > 0){
		chk_number.removeAttribute('class');
		chk_number.setAttribute('class', 'alert-success');
		chk_number.innerHTML = "&#10004; Must have a number digit";
		bool_number = true;
	}else{
		chk_number.removeAttribute('class');
		chk_number.setAttribute('class', 'alert-danger');
		chk_number.innerHTML = "X Must have a number digit";
		bool_number = false;
	}
	
	if(password.value.match(/[A-Z]/)){
		chk_capital.removeAttribute('class');
		chk_capital.setAttribute('class', 'alert-success');
		chk_capital.innerHTML = "&#10004; Must have one Uppercase letter";
		bool_capital = true;
	}else{
		chk_capital.removeAttribute('class');
		chk_capital.setAttribute('class', 'alert-danger');
		chk_capital.innerHTML = "X Must have one Uppercase letter";
		bool_capital = false;
	}
	
	document.getElementById("res").style.display="inline-block";
	
	if(bool_capital && bool_length && bool_number){
		document.getElementById('btn_check').innerHTML = "Password Validated";
	}else{
		document.getElementById('btn_check').innerHTML = "Validate";
	}
	
}