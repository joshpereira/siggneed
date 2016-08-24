

			<img src="style/title.png" alt="Contact Us" style="margin-left: 100px;"/>
			<form id="contactForm" action="">
				<div><input type="text" maxlength="100" size="40" id="name" name="name" onblur='this.value = (this.value || "Name")' onfocus='if(this.value == "Name") this.value = ""' value="Name"/></div>
				<div><input type="text" maxlength="100" size="40" id="email" name="email" onblur='this.value = (this.value || "Email Address")' onfocus='if(this.value == "Email Address") this.value = ""' value="Email Address"/></div>
				<div><select name="subject">
					<option value="0">-Select Subject-</option>
					<option value="General">General</option>
					<option value="Advertising">Advertising</option>
					<option value="Affiliate">Affiliate</option>
					<option value="Technical">Technical</option>
					<option value="Wrong Category">Wrong Category</option>
					<option value="Request a Userbar">Request a Userbar</option>
				</select></div>
				<div><textarea cols="35" rows="10" id="message" name="message"></textarea></div>
				<div>
					<a href="javascript:AJAX('contactForm','contact_status','contact');"><img src="style/send.png" alt="[Send]"/></a>
					<a href="javascript:document.forms.contactForm.reset()"><img src="style/reset.png" alt="[Reset]"/></a>
				</div>
				<div id="contact_status"></div>
			</form>
			