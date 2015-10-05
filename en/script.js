function menu_parc_item(disp){
	var x = document.getElementsByClassName("menu_parc_item");
	for (var i = 0; i < x.length; i++) {
		x[i].style.display = disp;
	}
}

function menu_parc(disp){
	var x = document.getElementById("menu_parc");
	if(x.style.display=="table"){x.style.display = "none";}
	else{x.style.display = "table";}	
}
