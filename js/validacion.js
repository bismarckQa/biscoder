var nombre=document.getElementById("nombre");
var email=document.getElementById("correo");
var mensaje=document.getElementById("texto");


nombre.addEventListener('blur', validarNombre);
email.addEventListener('blur', validarEmail);
mensaje.addEventListener('blur', validarMensaje);

/*Validar nombre*/
function validarNombre(){
var nombre = document.getElementById('nombre').value;
	if (nombre=="") {
		swal.fire({
				title:'Warning',
				text:'The name field cannot be empty',
				icon:'warning'
			});
	}else {
			if (isNaN(nombre)===false) {
		swal.fire({
				title:'Warning',
				text:'The name field cannot contain numbers',
				icon:'warning'
			});	
		document.getElementById('nombre').value="";
		}	
	}
	if (nombre.length >20) {
		swal.fire({
				title:'Warning',
				text:'The name field is too long',
				icon:'warning'
			});
		document.getElementById('nombre').value="";
	}
	
}


/*----------Email----------*/
	function validarEmail() {
		 var correo=document.getElementById("correo").value;
		var re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		if(correo==""){
			swal.fire({
				title:'Warning',
				text:'The email field cannot be empty',
				icon:'warning'
			});
		}
		else if (!re.exec(correo)){
			swal.fire({
				title:'Warning',
				text:'the email address '+correo+' is incorrect',
				icon:'warning'
			});
		}

	}

/*Validar Text Area*/
	
function validarText(){
	var texto=document.getElementById("texto").value;
	if (texto=="") {
		swal.fire({
				title:'Advertencía',
				text:'El campo Motivo no puede estar vacio',
				icon:'warning'
			});
	}
	if (texto.length>100) {
		swal.fire({
				title:'Advertencía',
				text:'El campo Motivo de Cita no puede exeder de 100 caracteres',
				icon:'warning'
			});
	}

}
function countChars(obj){
    var maxLength = 120;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 0){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">You have exceeded the '+maxLength+' character limit</span>';
        if (strLength > 130) {
        	document.getElementById("texto").value="";
        	document.getElementById("texto").value="Type here";
        }
    }else{
        document.getElementById("charNum").innerHTML = charRemain+' characters left';
    }
}


/*actualizar visitas*/
 // Obtener el valor almacenado en localStorage
var visitas = localStorage.getItem('visitas');

// Crear un objeto XMLHttpRequest
var xhr = new XMLHttpRequest();

// Establecer la URL y el método HTTP de la solicitud
xhr.open('POST', 'actualizar_visitas.php');

// Establecer el encabezado "Content-Type"
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// Enviar el valor de visitas como parámetro "visitas"
xhr.send('visitas=' + visitas);

// Manejar la respuesta del servidor
xhr.onreadystatechange = function() {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
    } else {
      console.error('Error al enviar la solicitud.');
    }
  }
}