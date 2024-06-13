let clientController = {
    data: {
        id: 0,
        apellido: "Fort",
        nombres: "Ricardo",
        dni: "46578678",
        cuit: "20465786785",
        tipo: 1,
        provinciaId: 7,
        localidad: "Miami",
        telefono: "298374632",
        correo: "rickyFort@gmail.com"
    },
    save: () => {
        clientService.save(clientController.data);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let btnClienteAlta = document.getElementById("btnClienteAlta");
    //btnUsuarioAlta.onclick = clientController.save;
    btnClienteAlta.onclick = () => {
        clientController.save()
    }
})