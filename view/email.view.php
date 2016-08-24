
			
			<form id="emailForm" action="mod/Sig/action/new_email">
				<fieldset>
					<legend>Step 1</legend>
					<input type="hidden" name="cat" value="Email"/>
					<input type="text" name="email" value="Enter text..." size="40" onfocus='if(this.value == "Enter text...") this.value = ""' onkeyup="preview(this.form)"/> &#64; 
					<?php $AJAX -> sub_opts("Email"); ?>
				</fieldset>
			
				<fieldset>
					<legend>Step 2</legend>
					<input name="color" class="color" value="FF0000" maxlength="6" size="6" onchange="preview(this.form)"/>
					<?php $AJAX -> font_opts(); ?>
					<?php $AJAX -> size_opts(); ?>
				</fieldset>
			</form>
			<div>
				<a href="javascript:AJAX('emailForm','email_done','email');"><img src="style/create.png" alt="[Create]"/></a>
				<a href="javascript:pre_forms('email');"><img src="style/reset.png" alt="[Reset]"/></a>
			</div>
			<div id="email_preview">
				<fieldset>
					<legend>Preview</legend>
					<img id="email_pre" src="mod/Sig/action/new_email/email/Enter text.../font/Arial/size/8/color/FFFFFF/cat/Email/image/MSN" alt="[Preview]"/>
				</fieldset>
			</div>
			<div id="email_done"></div>
			