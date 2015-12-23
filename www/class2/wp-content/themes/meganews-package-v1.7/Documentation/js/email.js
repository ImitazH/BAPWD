function emdecrypt (Str){
   var s = new String; var i;
   for (i=0; i<Str.length; i+=2) s = s + String.fromCharCode (parseInt (Str.substr(i ,2), 16)^(i/2));
   return s;
}

function email(){
	var rEX = RegExp(/(#EM#[\w]+#EM#)/g);
	ahrefs = document.getElementsByTagName('a');
	nr_ahrefs = ahrefs.length;
	for(var ahr = 0;ahr<nr_ahrefs;ahr++){
		var item = ahrefs[ahr];
		if(item.href.match('#EM#'))
			item.href = 'mailto:'+emdecrypt(item.href.replace(/#EM#/g,'').replace('mailto:',''));
		if(item.innerHTML.match('#EM#'))
			item.innerHTML = emdecrypt(item.innerHTML.replace(/#EM#/g,''));
	}		
}
window.addEvent('domready', function(){email();});