

<div id="adright">


</div>


			<form id="sigForm" action="mod/Sig/action/new_sig">
		
				<fieldset>
					<legend>Step 1</legend>
					<input name="text"  value="Text is optional..." size="40" type="text" onfocus='if(this.value == "Text is optional...") this.value = ""' onkeyup="preview(this.form)"/>
					<input name="color" value="FF0000" maxlength="6" size="6" class="color" onchange="preview(this.form)"/>
					<?php $AJAX -> font_opts(); ?>
					<?php $AJAX -> size_opts(); ?>
					<select name="align" onchange="preview(this.form)" >
						<option value="0">-Align-</option>
						<option value="Left">Left</option>
						<option value="center">Center</option>
					</select>
				</fieldset>
				
				<fieldset>
					<legend>Step 2</legend>
					<?php $AJAX -> cat_opts(); ?>
					<span id="sig_list"></span>
					<span id="sub_list"></span>
				</fieldset>
				
				

			</form>
			<div>
				<a href="javascript:AJAX('sigForm','sig_done','sig');"><img src="style/create.png" alt="[Create]"/></a>
				<a href="javascript:pre_forms('sig');"><img src="style/reset.png" alt="[Reset]"/></a>
			</div>
			<div id="sig_preview">
				<fieldset>
					<legend>Preview</legend>
					<img id="sig_pre" src="mod/Sig/action/new_sig/text/Text is optional.../font/Arial/size/8/color/444444/cat/Internet/sub_cat/sub_Websites/image/NeedASig" alt="[Preview]"/>
				</fieldset>
			</div>
			<div id="sig_done"></div>
			
			