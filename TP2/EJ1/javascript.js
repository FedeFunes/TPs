function validar() {
	var nombreyapellido = document.getElementById("nombreyapellido").value;
	var telefono = document.getElementById("telefono").value;
	var email = document.getElementById("email").value;
	var tarjeta = document.getElementById("tarjeta").value;
	var direccion_postal = document.getElementById("direccion_postal").value;
	var codigo_postal = document.getElementById("codigo_postal").value;
	var password = document.getElementById("password").value;
	var password_2 = document.getElementById("password_2").value;

	if (nombreyapellido == null || nombreyapellido.length == 0 || /^\s+$/.test(nombreyapellido)) {
		alert("error: campo vacio");
		return false;
	} 

	if (!/^\d+$/.test(telefono)) {
		alert("error: solo caracteres numericos");
		return false;
	}	
	
	if (!/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/.test(email)) {
		alert("error: formato incorrecto");
		return false;
	}	

	if (tarjeta == "null") {
		alert("error: elija una opcion");
		return false;
	}
	
	if(direccion_postal == null || direccion_postal.length == 0 || /^\s+$/.test(direccion_postal)) {
		alert("error: campo vacio");
		return false;
	} 

	if (!/^\d\d\d\d$/.test(codigo_postal)) {
		alert("error: solo 4 caracteres numericos");
		return false;
	} 

	if (!/^\w{6,}$/.test(password)) {
		alert("error: minimo 6 caracteres alfanumericos");
		return false;
	} 

	if (password_2 != password) {
		alert("error: las contrasenas no son iguales");
		return false;
	} 

	return	true;
}