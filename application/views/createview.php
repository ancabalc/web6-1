
<h1>Create account page</h1>

<form id='register' name="register-form"
	onsubmit='validateForm(); return false' action='register' method='post'
	accept-charset='UTF-8'>

	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Register</h4>
		</div>
		<div class="modal-body">

			<div id='name-input-div' class="row input-div">
				<label class="form-label">Full Name*: </label> 
				<input type='text'
					name='name' id='name' maxlength="50" />
			</div>

			<div id='localitate-input-div' class="row input-div">
				<label class="form-label">Localitate*: </label> 
				<input
					type='text' name='localitate' id='localitate' maxlength="50" />
			</div>

			<div id='email-input-div' class="row input-div">
				<label class="form-label">Email Address*: </label> 
				<input
					type='text' name='email' id='email' maxlength="50" />
			</div>

			<div id='password-input-div' class="row input-div">
				<label class="form-label">Password*: </label> 
				<input type='password'
					name='password' id='password1'
					maxlength="50" />
			</div>

			<div id='re-password-input-div' class="row input-div">
				<label class="form-label">Confirm Password*: </label> 
				<input
					type='password' name='re-password' id='re-password'
					maxlength="50" />
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Send</button>
		</div>
	</div>
</form>

<!-- Facebook login button start -->
<div id="fb-root"></div> 
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1285490414803865";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true"></div>

<!-- Facebook login button finish -->

