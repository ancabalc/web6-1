function validateForm() {
    var invalid ;
    
    var name = document.forms["register"]["name"].value;
    if (name == null || name == "" || validateName(name)== false) {
    	$( "#name" ).addClass( "invalid-data" );
    	$("#name-input-div").append("<span class='span-requested'>This field is requested!*</span>")
    	invalid++;
    }
     
    var localitate = document.forms["register"]["localitate"].value;
    if (localitate == null || localitate == "" || validateName(localitate)== false) {
    	$( "#localitate" ).addClass( "invalid-data" );
    	$("#localitate-input-div").append("<span class='span-requested'>This field is requested!*</span>")
    	invalid++;
    }
    
    var email = document.forms["register"]["email"].value;
    if (email == null || email == "" || validateEmail(email) == false) {
    	$( "#email" ).addClass( "invalid-data" );
    	$("#email-input-div").append("<span class='span-requested'>"+email+" is not a valid email address!*</span>")
    	invalid++;
    }
    
    var password = document.forms["register"]["password"].value;
    if (password == null || password == "" || validatePassword(password) == false) {
    	$( "#password1" ).addClass( "invalid-data" );
    	$("#password-input-div").append("<span class='span-requested'>Requested password is unauthorised!*</span>")
    	invalid++;
    }
    
    var repassword = document.forms["register"]["re-password"].value;
    if (repassword !== password){
    	$( "#re-password" ).addClass( "invalid-data" );
    	$("#re-password-input-div").append("<span class='span-requested'>Your passwords do not match!*</span>")
    	invalid++;
    }
    
    
  
    
    if (invalid>0){
    	return false;
    }else{
    	return true;
    }
    
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateUsername(username){
	var usernameRegex = /^[a-zA-Z0-9]+$/;
	return usernameRegex.test(username);
}

function validateName(name){
	var nameRegex = /^[a-zA-Z\-]+$/;
	return nameRegex.test(name);
}

function validatePassword(password){
	var regularExpression = /^[a-zA-Z0-9]+$/;
	return regularExpression.test(password);
}