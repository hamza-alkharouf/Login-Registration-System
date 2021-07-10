function validation(){
	var valid = true;
	
	formLabels = document.getElementsByTagName("label");
	
	var firstName = document.regForm.firstName.value;
	if(firstName==""){
		formLabels[0].innerHTML="First Name: [Required]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else if( !isNaN(firstName)){
		formLabels[0].innerHTML="First Name: [Text Only]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else {
		formLabels[0].innerHTML="First Name:";
		formLabels[0].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var lastName = document.regForm.lastName.value;
	if(lastName==""){
		formLabels[1].innerHTML="Last Name: [Required]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else if( !isNaN(lastName)){
		formLabels[1].innerHTML="Last Name: [Text Only]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else {
		formLabels[1].innerHTML="Last Name:";
		formLabels[1].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var email = document.regForm.email.value;
	if(email==""){
		formLabels[2].innerHTML="Email: [Required]";
		formLabels[2].style="color: red";
		valid = false;
	}
	else {
		formLabels[2].innerHTML="Email:";
		formLabels[2].style="color: black";
		valid = (valid) ? true : false;
	}
	var mobile = document.regForm.mobile.value;
	if( isNaN(mobile)){
		formLabels[3].innerHTML="Mobile: [Numbers Only]";
		formLabels[3].style="color: red";
		valid = false;
	}
	else {
		formLabels[3].innerHTML="Mobile:";
		formLabels[3].style="color: black";
		valid = (valid) ? true : false;
	}

	var age = document.regForm.age.value;
	if(age < 0 || age > 100){
		formLabels[4].innerHTML="Age: [Must be between 0 and 100]";
		formLabels[4].style="color: red";
		valid = false;
	}
	else if( isNaN(age)){
		formLabels[4].innerHTML="Age: [Age must be a number]";
		formLabels[4].style="color: red";
		valid = false;
	}
	else {
		formLabels[4].innerHTML="Age:";
		formLabels[4].style="color: black";
		valid = (valid) ? true : false;
	}

	var password = document.regForm.password.value;
	if(password == ""){
		formLabels[5].innerHTML="Password: [Required]";
		formLabels[5].style="color: red";
		valid = false;
	}
	else if(password.length < 8){
		formLabels[5].innerHTML="Password: [Must be > 8]";
		formLabels[5].style="color: red";
		valid = false;
	}
	else {
		formLabels[5].innerHTML="Password:";
		formLabels[5].style="color: black";
		valid = (valid) ? true : false;
	}
	

	

	
	return valid;
}

function clear2(){
	var myArray = new Array();
	myArray[0] = "First Name: *";
	myArray[1] = "Last Name: *";
	myArray[2] = "Email: *";
	myArray[5] = "Password: *";
	myArray[4] = "Age:";
	myArray[3] = "Mobile:";
	for(var i=0 ; i < myArray.length ; i++){
		formLabels[i].innerHTML = myArray[i];
		formLabels[i].style = "color: black";
	}
}