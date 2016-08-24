function AJAX(cat, id, typ){

	var xmlHttp = new XMLHttpRequest();
	var xmlInfo = document.getElementById(id);
	var imgTest = false, cusTest = false;
	
	if(typ == 'opts'){
		document.getElementById('sub_list').innerHTML = "";
		
	} else if(typ != 'contact'){
		document.getElementById(typ +'_preview').style.display = "none";
	}
	
	xmlInfo.innerHTML = "Loading...";
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			xmlInfo.innerHTML = xmlHttp.responseText;
		}
	}
	
	if(typ == 'opts' && cat != 0){
		xmlHttp.open("GET","mod/AJAX/cat/"+ cat +"/action/sub_opts", true);
		xmlHttp.send(null);
	} else {
		var nasForm = document.getElementById(cat).elements;
		var nasUrl = (typ == 'contact')? '': '/save/save/';
		
		for(var i = 0; i < nasForm.length; i ++){
			if(nasForm[i].nodeName.toLowerCase() != 'fieldset'){
				nasUrl += nasForm[i].name +'/'+ encodeURI(nasForm[i].value) +'/';
			}
			if(nasForm[i].name == 'image' && nasForm[i].value != 0){
				imgTest = true;
			}
		}
		if(cat == 'customForm'){
			var f = document.getElementById(cat);
			if(f.px.value != '' && f.py.value !='' && f.angle.value !=''){
				imgTest = true;
			} else {
				imgTest = false;
				cusTest = true;
			}
		}
		if(imgTest){
			xmlHttp.open("GET","mod/Sig/action/new_"+ typ + nasUrl, true);
			xmlHttp.send(null);
			
		} else if(typ == 'contact' && nasForm.subject.value != 0){
			xmlHttp.open("GET","mod/Contact/"+ nasUrl, true);
			xmlHttp.send(null);
		} else {
			xmlInfo.innerHTML = "Error: No "+ (typ == 'contact'? 'Subject': (cusTest)? 'Position/Angle' : 'Image') +" Selected";
		}
	}
}

function tabs(id){
	for(var i = 1; i < 5; i ++){
		document.getElementById("info-"+i).style.display = (id == i)? '' : 'none';
	}
}

function preview(f){
	var nasForm = f.elements; var typ = f.id.replace('Form','');
	var nasUrl = '/', imgTest = false;

	for(var i = 0; i < nasForm.length; i ++){
		if(nasForm[i].nodeName.toLowerCase() != 'fieldset' && nasForm[i].value !='Save'){
			nasUrl += nasForm[i].name +'/'+ encodeURI((nasForm[i].name.match(/^(text|email)$/gi))? ' '+nasForm[i].value : nasForm[i].value) +'/';
		}
		if(nasForm[i].name == 'image' && nasForm[i].value != 0){
			imgTest = true;
		}
	}
	
	if(f.id == 'customForm'){
		if(f.px.value != '' && f.py.value !='' && f.angle.value !=''){
			imgTest = true;
		} else {
			imgTest = false;
		}
	}
	
	if(imgTest){
		document.getElementById(typ +'_pre').src = "mod/Sig/action/new_"+ typ + nasUrl;
	}
}

function pre_forms(typ){

	document.forms.sigForm.reset();
	document.forms.emailForm.reset();
	document.forms.customForm.reset();
	document.forms.uploadForm.reset();
	
	if(typ){
		document.getElementById(typ +'_preview').style.display = '';
		document.getElementById(typ +'_done').innerHTML = '';
		document.getElementById('sig_list').innerHTML ='';
		document.getElementById('sub_list').innerHTML ='';
	}
}

function pre_custom(){
	document.getElementById('uploadForm').target = 'temp_store';
	document.getElementById('customFrame').innerHTML ='<iframe style="display:none" src="about:blank" id="temp_store" name="temp_store" onload="img_frame(this)"></iframe>';
}

function img_frame(info){

	var custom = document.getElementById('customImg');
	var pre = document.getElementById('custom_pre');
	var response = (info.contentWindow)? info.contentWindow : info.contentDocument;
	if(response.location.href != 'about:blank'){
		custom.innerHTML = response.document.body.innerHTML;
		if(document.forms.uploadForm.image){
			document.forms.customForm.image.value = document.forms.uploadForm.image.value;
			pre.src = document.forms.uploadForm.image.value +'.png';
		}
		document.getElementById('customFrame').innerHTML = '';
	}
}

function ex(a){
	a.target = "_blank";
}