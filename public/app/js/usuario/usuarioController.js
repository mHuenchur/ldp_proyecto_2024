let userController = {
    data: {
        id: 0,
        apellido: "Santana",
        nombres: "Juan",
        cuenta: "jSantana",
        clave: "gtre123",
        correo: "jSantana@gmail.com",
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