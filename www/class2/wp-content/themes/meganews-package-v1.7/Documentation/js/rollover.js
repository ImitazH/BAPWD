function roll()
{
	var imgs = document.getElementsByTagName("img");
	for(var i = 0; i<imgs.length; i++)
	{
		if (imgs[i].className.match("roll"))
		{
			var preload = new Image(); 
			preload.src = imgs[i].src.replace("_off.", "_on.");
			imgs[i].onmouseover = function () { this.src= this.src.replace("_off.","_on."); }
			if (!imgs[i].src.match("_on")) { 
				imgs[i].onmouseout = function () { this.src = this.src.replace("_on.","_off."); } 
			}
			imgs[i].style.cursor = "pointer";
		}
	}
}

window.onload = function() { roll(); }
