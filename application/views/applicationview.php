<h1>Create account page</h1>

<form id='application' name="application-form"
	onsubmit='validateForm(); return false' action='application' method='post'
	accept-charset='UTF-8'>

	<div class="modal-content">
		<div class="modal-header">
		
		</div>
		<div class="modal-body">

			<div id='name-input-div' class="row input-div">
				<label class="form-label">Sumar cerere*: </label> 
				<input type='text'
					name='name' id='name' maxlength="50" />
			</div>

			<div id='localitate-input-div' class="row input-div">
				<label class="form-label">Localitate*: </label> 
				<input
					type='text' name='localitate' id='localitate' maxlength="50" />
			</div>

			<div id='email-input-div' class="row input-div">
				<label class="form-label">Descriere cerere*: </label> 
				<input 
					type='textarea' name='description' maxlength="5000" />
			</div>
            <div>
                <input 
                    type="checkbox" name="publica" value="">Publica
            </div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Creeaza cerere</button>
		</div>
	</div>
</form>