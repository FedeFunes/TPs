function validar() {
	var nombreyapellido = document.getElementById("nombreyapellido").value;
	var telefono = document.getElementById("telefono").value;
	var email = document.getElementById("email").value;
	var tarjeta = document.getElementById("tarjeta").value;
	var direccion_postal = document.getElementById("direccion_postal").value;
	var codigo_postal = document.getElementById("codigo_postal").value;
	var password = document.getElementById("password").value;
	var password_2 = document.getElementById("password_2").value;

	var error_1 = document.getElementById("error_1");
	var error_2 = document.getElementById("error_2");
	var error_3 = document.getElementById("error_3");
	var error_4 = document.getElementById("error_4");
	var error_5 = document.getElementById("error_5");
	var error_6 = document.getElementById("error_6");
	var error_7 = document.getElementById("error_7");
	var error_8 = document.getElementById("error_8");


	if (nombreyapellido == null || nombreyapellido.length == 0 || /^\s+$/.test(nombreyapellido)) {
		error_1.style.display = "inline";
		return false;
	} else {
		error_1.style.display = "none";
	}

	if (!/^\d+$/.test(telefono)) {
		error_2.style.display = "inline";
		return false;
	} else {
		error_2.style.display = "none";
	}
	
	if (!/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/.test(email)) {
		error_3.style.display = "inline";
		return false;
	} else {
		error_3.style.display = "none";
	}

	if (tarjeta == "null") {
		error_4.style.display = "inline";
		return false;
	} else{
		error_4.style.display = "none";
	}

	if(direccion_postal == null || direccion_postal.length == 0 || /^\s+$/.test(direccion_postal)) {
		error_5.style.display = "inline";
		return false;
	} else {
		error_5.style.display = "none";
	}

	if (!/^\d\d\d\d$/.test(codigo_postal)) {
		error_6.style.display = "inline";
		return false;
	} else {
		error_6.style.display = "none";
	}

	if (!/^\w{6,}$/.test(password)) {
		error_7.style.display = "inline";
		return false;
	} else {
		error_7.style.display = "none";
	}

	if (password_2 != password) {
		error_8.style.display = "inline";
		return false;
	} else {
		error_8.style.display = "none";
	}

	return	true;
}