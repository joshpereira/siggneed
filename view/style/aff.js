var aff = [
	['http://wimg.co.uk/pw1.gif', 'http://cubichost.org'],
	['http://wimg.co.uk/FhC.gif', 'http://underground.needasig.com/'],
	['http://wimg.co.uk/8yJv7h.gif', 'http://talkpark.net'],
                 ['http://elseandrew.com/ea.gif', 'http://elseandrew.com']


];

function ran_aff(){
	var r = Math.floor(Math.random()* aff.length);
	document.getElementById('aff_list').innerHTML = '<a href ="'+ aff[r][1] +'" onclick="ex(this); return true"><img src="'+ aff[r][0] +'"/></a>';
}


function view_affs(){
	var a = window.open('','','width=300,height=200');
	var b = '<style type="text/css">body{background-color: #dfdfdf!important;}</style><body>';
	for(var r = 0; r < aff.length; r ++)
	{
		b +=' <a href="'+aff[r][1]+'" target="_blank"><img src="'+aff[r][0]+'" border="0"/></a>   ';
	}
	a.document.body.innerHTML = b+'</body>';
}
