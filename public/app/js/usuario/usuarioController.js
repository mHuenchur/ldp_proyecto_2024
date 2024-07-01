let userController = {
    data: {
        id: 0,
        apellido: "",
        nombres: "",
        cuenta: "",
        clave: "",
        correo: "",
        perfilId: 2,
        horaEntrada: "",
        horaSalida: ""
    },
    save: () => {
        let form = document.forms["formularioAlta"];

        if (form.checkValidity()){

            userController.data.apellido = form.datoApellido.value;
            userController.data.nombres = form.datoNombres.value;
            userController.data.cuenta = form.datoCuenta.value;
            userController.data.clave = form.datoClave.value;
            userController.data.correo = form.datoCorreo.value;
            userController.data.perfilId = form.datoPerfil.value;
            //userController.data.horaEntrada = form.datoLocalidad.value;
            //userController.data.horaSalida = form.datoTelefono.value;

            userService.save(userController.data)
            .then(response => {
                console.log("Respuesta del servidor", response)
                if(response.error == ""){
                    form.reset();
                }
            })
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let btnUsuarioAlta = document.getElementById("btnUsuarioAlta");
    //btnUsuarioAlta.onclick = userController.save;
    if(btnUsuarioAlta != null){
        btnUsuarioAlta.onclick = () => {
            userController.save()
        }
    }
})