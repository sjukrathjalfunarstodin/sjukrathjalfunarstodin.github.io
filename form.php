		    
		    <section>
		    	<div id="errors" class="alert alert-info"></div>
				<?php if ($fail == "true") { ?>
				<div id="errorsbak" class="alert alert-info">
					<?php if (sizeof($fyrirsp->errors()) > 0): ?>
						<?php foreach ($fyrirsp->errors() as $error): ?>
							<li><?php echo $error->error; ?></li>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
				<?php } ?>		

		    	<h3>Hefur þú spurningu?</h3>

		    	<div class="midjad">
		    		<p>Hægt er að hafa samband í gegnum netið hér fyrir neðan eða í síma</p>
		    		<p><strong>551-4646</strong></p>
		    		<p>alla virka daga milli klukkan 08:00 og 17:00.</p>
		    		<p>Tímabókanir fara fram í gegnum símann.</p>
		    	</div>
		
				<div class="mform"> 
			    	<form id="form" method="post">
			    			<!--php clausan í value er til þess að ef villa kemur upp í validationi í bakenda, þá hverfi ekki allt sem þú hefur skrifað úr forminu. (Hugmynd beint frá Ólafi)--> 
							<input class="form-control input-lg" type="text" name="Nafn" id="nafn" placeholder="Nafn" value="<?php echo $fyrirsp->nafn; ?>">	

							<input class="form-control input-lg" type="text" name="Netfang" id="netfang" placeholder="Netfang" value="<?php echo $fyrirsp->netfang; ?>">

							<input class="form-control input-lg" type="text" name="Simi" id="simi" placeholder="Símanúmer" value="<?php echo $fyrirsp->simi; ?>">
		
							<textarea class="form-control input-lg" rows="5" name="Fyrirspurn" id="fyrirspurn" maxLength="1000" placeholder="Fyrirspurn"><?php echo $fyrirsp->fyrirspurn; ?></textarea>
							<p>Hámark 1000 stafir. <span id="nidurteljari">1000</span> stafir eftir.</p>
							<input class="btn btn-primary btn-lg" type="submit" value="Senda">
			    	</form>
		    	</div>
		    </section>