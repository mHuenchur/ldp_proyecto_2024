let userController = {
    data: {
        id: 0,
        apellido: "Huenchur",
        nombres: "Mauricio",
        cuenta: "mHuenchur",
        clave: "clave123",
        correo: "huenchur@gmail.com",
        perfilId: 2,
        horaEntrada: "",
        horaSalida: ""
    },
    save: () => {
        userService.save(userController.data);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let btnUsuarioAlta = document.getElementById("btnUsuarioAlta");
    //btnUsuarioAlta.onclick = userController.save;
    btnUsuarioAlta.onclick = () => {
        userController.save()
    }
})