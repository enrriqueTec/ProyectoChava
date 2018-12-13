with(document.Altas){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		valor=getElementByid('txt_Num_Control').value;
		if(ok && valor==null|| valor.length == 0 || /^\s+$/.test(valor)){
			ok=false;
			alert("Debe escribir un numero de control");
			txt_Num_Control.focus();
		}
		if(ok && txt_Nombre.value==""){
			ok=false;
			alert("Debe escribir un Nombre");
			txt_Nombre.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su password");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
