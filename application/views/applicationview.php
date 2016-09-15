<div class="container">
<h1>Create application page</h1>

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

			<div id='categories-input-div' class="row input-div">
				<label for='categories-form[]'>Categorie</label>
				<select name="categories-form[]">
				<?php if (isset($categories)) {
					 for($i=0; $i < count($categories); $i++) { ?>
					    <option value="<?php echo $categories[$i]["id"] ?>"><?php echo $categories[$i]["title"] ?></option>  
					 <?php   }
					 }
				?>
				</select>
			</div>

			<div id='email-input-div' class="row input-div">
				<label class="form-label">Descriere cerere*: </label> 
				<textarea name='description' maxlength="50000"></textarea>
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
<br><br>

<div class="applications">
	
</div>

<script src="<?php echo base_url(); ?>/assets/js/main.js"
	type="text/javascript"></script>