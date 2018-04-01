/*CRAZYBOARD FILES (C) ZAIN ALI 2018*/
function makeactive(){
	var m = document.querySelector("#menu");
	var linkhref=document.querySelectorAll("#menu ul li a");	
	var linkli = document.querySelectorAll("#menu ul li");
	for(var i=0; i < linkhref.length; i++) {
		console.log("normal loop:"+linkhref[i].href)
		if(linkhref[i].href===location.href) {
		console.log("main loop action:     "+linkhref[i].href);
		linkhref[i].parentNode.className = "active";



		}
	}

}

window.onload = function(){
	makeactive();
}
