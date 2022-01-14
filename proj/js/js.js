

function enableButton(){
	if(document.getElementById("confirmation").checked){
		document.getElementById("bttn").disabled=false;
	}
	else{
		document.getElementById("bttn").disabled=true;
	}
}