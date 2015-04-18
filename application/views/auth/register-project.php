<?php include_once 'cjfksoft/common/header_view.php';?>
<div class="container-body">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="project-form">
                    <div id="infoMessage"><?php echo $message;?></div>
                    <?php $attributes = array('class' => 'form-horizontal', 'id' => 'login-form'); ?>
                    <?php echo form_open("auth/login", $attributes);?>

                    <fieldset>
                    	<legend><h3>A propos du projet</h3></legend>
                    	<div class="form-group">
                    	    <label for="projectName" class="col-sm-4">Nom du projet</label>
                    	    <div class="col-sm-8">
                    	    	<input type="text" class="form-control" id="projectName" placeholder="">
                    	    </div>
                    	</div>
                    	<div class="form-group">
                    		<label for="projectLanguage" class="col-sm-4">Langue principale du projet</label>
                    	    <div class="col-sm-8">
	                    	    <select class="form-control" id="projectLanguage">
	                    	      <option>English</option>
	                    	      <option>Francais</option>
	                    	      <option>Allemand</option>
	                    	      <option>...</option>
	                    	    </select>
                    	    </div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Votre objectif est de:</label>
                    	    <div class="col-sm-8">
	                    	    <div class="col-sm-6">
                    	    		<input class="form-control" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Atteindre un budget
                    	    	</div>
                    	    	<div class="col-sm-6">
	                    	    	<input class="form-control" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Toucher un nombre minimal de clients
                    	    	</div>
                    	    </div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Combien voulez-vous collecter?</label>
                    	    <div class="col-sm-8">
	                    	    <div class="col-sm-6">
                    	    		<input class="form-control" type="number" name="amount" id="amount">
                    	    	</div>
                    	    	<div class="col-sm-6">
	                    	    	<select class="form-control" id="projectLanguage">
	                    	    	  	<option>...</option>
	                    	    	</select>
                    	    	</div>
                    	    </div>
                    	</div>
                    	<div class="form-group">
                    		<label for="projectGoal">Description</label>
                    		<textarea class="form-control" id="description" rows="5"></textarea>
                    	</div>
                    	<div class="form-group">
                    		<label for="projectGoal">Recompenses</label>
                    		<textarea class="form-control" id="recompense" rows="5"></textarea>
                    	</div>
                    	<div class="form-group">
                    		<label for="projectGoal">References</label>
                    		<textarea class="form-control" id="reference" rows="5"></textarea>
                    	</div>
                    </fieldset>
                    <fieldset>
                    	<legend><h3>A propos de toi</h3></legend>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Noms et prenoms</label>
                    	    <div class="col-sm-8">
	                    	    <div class="col-sm-6">
                    	        	<input type="text" class="form-control" id="name" placeholder="Nom">
                    	        </div>
                    	        <div class="col-sm-6">
                    	        	<input type="text" class="form-control" id="surname" placeholder="Prenom">
                    	        </div>
                    	    </div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Structure</label>
                    	    <div class="col-sm-8">
                    	    	<input class="form-control" type="text" id="surname" placeholder="Nom de l'entreprise, association, ...">
                    	    </div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Adresses</label>
                    		<div class="col-sm-8">
                    			<textarea class="form-control" rows="4"></textarea>
                    		</div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Pays</label>
                    	    <div class="col-sm-8">
	                    	    <div class="col-sm-6">
	                    	        <select name="country" class="form-control" id="projectLanguage">
	                    	    	  <option>Pays 1</option>
	                    	    	  <option>Pays 2</option>
	                    	    	  <option>Pays 3</option>
	                    	    	  <option>...</option>
	                    	    	</select>
                    	    	</div>
                    	    	<div class="col-sm-6">
                    	        	<input type="text" class="form-control" id="city" placeholder="Ville">
                    	        </div>
                    	    </div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Nationalite</label>
                    	    <div class="col-sm-8">
	                    	    <select class="form-control" id="projectLanguage">
	                	    	  	<option>Choisir votre nationalite</option>
	                	    	  	<option>Pays 1</option>
	                	    	  	<option>Pays 2</option>
	                	    	  	<option>Pays 3</option>
	                	    	  	<option>...</option>
	                	    	</select>
                	    	</div>
                    	</div>
                    	<div class="form-group">
                    		<label for="projectGoal" class="col-sm-4">Anniversaire</label>
                    		<div class="col-sm-8">
	                    		<div class="input-group">
		                            <input type="date" class="form-control" id="password" placeholder="">
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                        </div>
	                        </div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="phoneNumber" class="col-sm-4">No Telephone</label>
                    	    <div class="col-sm-8">
	                    	    <div class="input-group">
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
		                            <input type="tel" class="form-control" id="surname" placeholder="">
		                        </div>
	                        </div>
                    	</div>
                    	<div class="form-group">
                    	    <label for="projectGoal" class="col-sm-4">Comment avez vous trouve Capital2Invest?</label>
                    	    <div class="col-sm-8">
	                    	    <div class="input-group">
		                    	    <select class="form-control" id="projectLanguage">
		                	    	  	<option>Choisir votre nationalite</option>
		                	    	  	<option>Choix 1</option>
		                	    	  	<option>Choix 2</option>
		                	    	  	<option>Choix 3</option>
		                	    	  	<option>...</option>
		                	    	</select>
		                	    	<span class="input-group-addon"><span class="caret"></span></span>
	                	    	</div>
                	    	</div>
                    	</div>
                    </fieldset>
                    <?php echo form_close();?>

                    <a href="#" class="invite-signup text-center">
                        <div class="form-group text-center">
                    	    <button type="submit" class="btn btn-primary btn-info btn-lg">Soumettre mon projet</button>
                    	</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'cjfksoft/common/footer_view.php';