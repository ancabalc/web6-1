<div class="container">
<!--<h1>Create application page</h1>-->

<form id='application' name="application-form" class="form-horizontal"
	onsubmit='validateForm(); return false' method="POST"
	accept-charset='UTF-8'>

	<div id="modalCreateApp" class="row">
		<div class="col-md-4"></div>
		
		<div class="col-md-4 form-group form-group-sm">
			<div class="header-text">CREARE CERERE</div>
			</br>
			<div id='name-input-div' class="row input-div">
				<!--<label class="form-label">Sumar cerere*: </label> -->
				<input type='text' class="form-control" name='title' id='name' maxlength="50" placeholder="Sumar cerere*"/>
			</div>
			</br>
			<div id='categories-input-div' class="row input-div">
				<!--<label for='categories-form[]'>Categorie: </label>-->
				<select name="category_id" class="form-control">
				<?php if (isset($categories)) {
					 for($i=0; $i < count($categories); $i++) { ?>
					    <option value="<?php echo $categories[$i]["id"] ?>"><?php echo $categories[$i]["title"] ?></option>  
					 <?php   }
					 }
				?>
				</select>
			</div>
			</br>
			<div id='email-input-div' class="row input-div">
				<!--<label class="form-label">Descriere cerere*: </label> -->
				<textarea rows="4" cols="43" class="form-control" name='description' maxlength="50000" placeholder="Descriere cerere*"></textarea>
			</div>
            <div class="checkbox-div">
                <input type="checkbox" name="active" value=""/><span class="checkbox-publica">Publica</span></input>
            </div>
            </br>
			<div class="full-width">
				<button type="submit" class="btn btn-submit-app" id="app-submit">Creeaza cerere</button>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</form>
<br><br>

<div class="applications">
	
</div>

<script src="<?php echo base_url(); ?>assets/js/applications.js"
	type="text/javascript"></script>