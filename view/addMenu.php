<!--AddMenu view-->
<?php include('../header.php'); ?>

<main>

	<div id="select" class="section scrollspy">
		<div class=" row">
			<form class="col s12" method="POST" action="../controller/addMenu.php">
				<div class="row container">
					<div class="input-field col s12 m4">
						<select name="idR">
					      <option value="" disabled selected>Choose your room</option>
					      <option value="1"><?php print $name[0]?></option>
					      <option value="2"><?php print $name[1]?></option>
					      <option value="3"><?php print $name[2]?></option>
					      <option value="4"><?php print $name[3]?></option>
					    </select>
					    <label>Choose your room</label>
					</div>
				</div>

				<div class="row container">
					<div class="input-field col s12 m6">
			          <textarea id="menu" class="materialize-textarea" class="validate" name="menu" length="200"></textarea>
			          <label for="menu">Menu</label>
			        </div>
			        
			        <div class="section center-align">
					    <div class="chip orange darken-1">
					      Functionnality not working !
					      <i class="material-icons left">warning</i>
					    </div>
					 </div>
				</div>

				<!--submit button-->
			    <div class="row container">
			    	<button class="btn waves-light btn light-green darken-1" type="submit" name="action">send</button>
			   	</div>

			</form>
		</div>
	</div>

</main>

<?php include('../footer.php'); ?>