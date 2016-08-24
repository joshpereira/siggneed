

			<form id="uploadForm" action="mod/AJAX/action/upload" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Upload</legend>
					<input type="file" name="file" id="file" size="40"/>
					<input type="submit" name="upload" value="Upload" onclick="pre_custom();"/>
					<span id="customImg"></span><span id="customFrame"></span>
				</fieldset>
			</form>
			<form id="customForm" action="mod/Sig/action/new_custom">
				<fieldset>
					<legend>Step 1</legend>
					<input name="image" type="hidden" value="0" maxlength="8" size="8"/>
					<input name="text" value="Text..." size="40" type="text" onfocus='if(this.value == "Text...") this.value = ""' onkeyup="preview(this.form)"/>
					<input name="color" value="FF0000" maxlength="6" size="6" class="color" onchange="preview(this.form)"/>
					<?php $AJAX -> font_opts(); ?>
					<?php $AJAX -> size_opts(21); ?>
				</fieldset>
				
				<fieldset>
					<legend>Step 2</legend>
					Position-X: <input name="px" type="text" value="10" maxlength="4" size="5" onkeyup="preview(this.form)"/>
					Position-Y: <input name="py" type="text" value="10" maxlength="4" size="5" onkeyup="preview(this.form)"/>
					Angle: <input name="angle" type="text" value="0" maxlength="3" size="4" onkeyup="preview(this.form)"/>
				</fieldset>
			</form>
			<div>
				<a href="javascript:AJAX('customForm','custom_done','custom');"><img src="style/create.png" alt="[Create]"/></a>
				<a href="javascript:pre_forms('custom');"><img src="style/reset.png" alt="[Reset]"/></a>
			</div>
			<div id="custom_preview">
				<fieldset>
					<legend>Preview</legend>
					<img id="custom_pre" src="style/NeedASig.png" alt="[Preview]"/>
				</fieldset>
			</div>
			<div id="custom_done"></div>
			
			