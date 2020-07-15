/**
 * 
 */

function imprimer(divName) {
		var printContents = document.getElementById(divName).innerHTML;
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		//fenetre=window.open("assets/img/logobmd.png");
		window.print();
		document.body.innerHTML = originalContents;
	}