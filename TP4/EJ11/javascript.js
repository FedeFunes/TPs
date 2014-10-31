function validar () {
	var nombre = document.getElementById('nombre').value;
	var apellido = document.getElementById('apellido').value;
	var dni = document.getElementById('dni').value;
	var email = document.getElementById('email').value;
	var sexo = document.getElementById('sexo').value;
	var fecha = document.getElementById('fecha').value;

	if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) || !/^([a-z]|[A-Z]){5,10}$/.test(nombre)) {
		alert("Error nombre: solo letras, minimo 5, maximo 10 letras y campo no vacio");
		return false;
	} 

	if (apellido == null || apellido.length == 0 || /^\s+$/.test(apellido) || !/^([a-z]|[A-Z]){5,10}$/.test(apellido)) {
		alert("Error apellido: solo letras, minimo 5, maximo 10 letras y campo no vacio");
		return false;
	} 

	if (!/^\d{8}$/.test(dni)) {
		alert("Error dni: solo 8 numeros");
		return	false;
	}

	if (!/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email)) {
		alert("Error email: formato incorrecto");
		return false;
	}	

    if (!/^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])\2(\d{4})$/.test(fecha)) {
		alert("Error fecha: formato valido xx/xx/xxxx");
    	return false;
    }

	return	true;
}