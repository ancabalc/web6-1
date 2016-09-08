function validateForm() {
	var invalid;

	var name = document.forms["register"]["name"].value;
	if (name == null || name == "" || validateName(name) == false) {
		$("#name").addClass("invalid-data");
		$("#name-input-div > span").removeClass("invisible").addClass(
				"span-requested");
		invalid++;
	} else {
		$("#name").removeClass("invalid-data");
		$("#name-input-div > span").removeClass("span-requested").addClass(
				"invisible");
	}

	var localitate = document.forms["register"]["localitate"].value;
	if (localitate == null || localitate == ""
			|| validateName(localitate) == false) {
		$("#localitate").addClass("invalid-data");
		$("#localitate-input-div > span").removeClass("invisible").addClass(
				"span-requested");
		invalid++;
	} else {
		$("#localitate").removeClass("invalid-data");
		$("#localitate-input-div > span").removeClass("span-requested")
				.addClass("invisible");
	}

	var email = document.forms["register"]["email"].value;
	if (email == null || email == "" || validateEmail(email) == false) {
		$("#email").addClass("invalid-data");
		$("#email-input-div > span").removeClass("invisible").addClass(
				"span-requested");
		invalid++;
	} else {
		$("#email").removeClass("invalid-data");
		$("#email-input-div > span").removeClass("span-requested").addClass(
				"invisible");
	}

	var password = document.forms["register"]["password"].value;
	if (password == null || password == ""
			|| validatePassword(password) == false) {
		$("#password1").addClass("invalid-data");
		$("#password1-input-div > span").removeClass("invisible").addClass(
				"span-requested");
		invalid++;
	} else {
		$("#password1").removeClass("invalid-data");
		$("#password1-input-div > span").removeClass("span-requested")
				.addClass("invisible");
	}

	var repassword = document.forms["register"]["re-password"].value;
	if (repassword !== password) {
		$("#re-password").addClass("invalid-data");
		$("#re-password-input-div > span").removeClass("invisible").addClass(
				"span-requested");
		invalid++;
	} else {
		$("#re-password").removeClass("invalid-data");
		$("#re-password-input-div > span").removeClass("span-requested")
				.addClass("invisible");
	}

	
	if (invalid > 0) {
		return false;
	} else {
		return true;
	}

}

function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function validateUsername(username) {
	var usernameRegex = /^[a-zA-Z0-9]+$/;
	return usernameRegex.test(username);
}

function validateName(name) {
	var nameRegex = /^[a-zA-Z\-]+$/;
	return nameRegex.test(name);
}

function validatePassword(password) {
	var regularExpression = /^[a-zA-Z0-9]+$/;
	return regularExpression.test(password);
}