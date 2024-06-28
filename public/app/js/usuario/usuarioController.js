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
        userService.save(userController.data)
        .then(response => {
            console.log("Respuesta del servidor", response)
        })
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