// Sign Up Form Validation
function validation(){

	// DOM Declarations
	fname = document.getElementById('fname');
	lname = document.getElementById('lname');
	college = document.getElementById('college');
	major = document.getElementById('major');
	email = document.getElementById('email');
	password = document.getElementById('password');
	re_password = document.getElementById('re_password');

	// Regex declarations
	valid_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	letters_only = /^[A-Za-z ]+$/;
	valid_password = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

	// Check for all required fields
	if(fname.value == "" || lname.value=="" || email.value=="" || password.value =="" || re_password.value=="")
	{
		alert("Required fields missing");
		if (fname.value=="")
		fname.style.border="2px solid #ffcccb";
		if (lname.value=="")
		lname.style.border="2px solid #ffcccb";
		if (email.value=="")
		email.style.border="2px solid #ffcccb";
		if (password.value=="")
		password.style.border="2px solid #ffcccb";
		if (re_password.value=="")
		re_password.style.border="2px solid #ffcccb";
		return false;
	}
	// Check for valid first name
	else if( letters_only.test(fname.value)==false)
	{
		alert("Name cannot contain a number");
		fname.style.border="2px solid #ff0000";
		return false;
	}
	// Check for valid last name
	else if( letters_only.test(lname.value)==false)
	{
		alert("Name cannot contain a number");
		lname.style.border="2px solid #ff0000";
		return false;
	}
	//Check for valid email
	else if(valid_email.test(email.value)==false)
	{
		alert("Please enter a valid email");
		email.style.border="2px solid #ff0000";
		return false;
	}	
	//Check for valid password
	else if(valid_password.test(password.value)==false)
	{
		alert("password should contain a minimum of 8 characters and have at least 1 capital letter and one numeric character");
		password.style.border="2px solid #ff0000";
		return false;
	}
	//Check for if passwords match
	else if(password.value != re_password.value)
	{
		alert("passwords do not match");
		password.style.border="2px solid #ff0000";
		re_password.style.border="2px solid #ff0000";
		return false;
	}

}

// Resets form styles
function reset() {
	fname.style.border="1px solid #ccc";
	lname.style.border="1px solid #ccc";
	email.style.border="1px solid #ccc";
	password.style.border="1px solid #ccc";
	re_password.style.border="1px solid #ccc";
} 

// Clears border after user fixes input
function clearborder() {

	if(fname.value != "")
		fname.style.border="1px solid #ccc";
	if(lname.value != "")
		lname.style.border="1px solid #ccc";
	if(password.value != "")
		password.style.border="1px solid #ccc";
	if(email.value != "")
		email.style.border="1px solid #ccc";
	if(re_password.value != "")
		re_password.style.border="1px solid #ccc";
}



// ******************  LOGIN FORM VERIFICATION ****************************


// Login Form Validation
function validate() {
	
	email = document.getElementById('email');
	password = document.getElementById('password');

	valid_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	valid_password = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{1,8}$/;

	// Check for all required fields
	if(email.value=="" || password.value =="")
	{
		alert("Required fields missing");
		if (email.value=="")
		email.style.border="2px solid #ffcccb";
		if (password.value=="")
		password.style.border="2px solid #ffcccb";
		return false;
	}
	//Check for valid email
	else if(valid_email.test(email.value)==false)
	{
		alert("Please enter a valid email");
		email.style.border="2px solid #ff0000";
		return false;
	}	
	//Check for valid password
	else if(valid_password.test(password.value)==false)
	{
		alert("password should contain a minimum of 8 characters and have at least 1 capital letter and one numeric character");
		password.style.border="2px solid #ff0000";
		return false;
	}

}

// Resets form styles
function reset_login() {

	email.style.border="1px solid #ccc";
	password.style.border="1px solid #ccc";
} 

// Clears border after user fixes input
function clear_login() {

	if(email.value != "")
		email.style.border="1px solid #ccc";
	if(password.value != "")
		password.style.border="1px solid #ccc";
}


function validate_add(){
	var month = document.getElementById('month');
	var day = document.getElementById('day');
	var hours = document.getElementById('hours');
	var mins = document.getElementById('mins');

	if(month.value==null||day.value==null||hours.value==null||mins.value==null){
		alert("Missing date/time values");
		return false;
	} else return true;

}

// validates description box
function desc(desc){
	var desc = document.getElementById('description');
	if(desc.value.length > 144){
		desc.style.border="2px solid #ff0000";
		alert("Must be shorter than 144 characters");
		return false; 
	} else desc.style.border="none";


}




