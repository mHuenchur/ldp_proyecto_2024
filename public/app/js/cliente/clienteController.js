let clientController = {
    data: {
        id: 0,
        apellido: "Sanz",
        nombres: "Ricardo",
        dni: "94756131",
        cuit: "20947561315",
        tipo: 2,
        provinciaId: 6,
        localidad: "Las Heras",
        telefono: "298374632",
        correo: "rSanz@gmail.com"
    },
    save: () => {
        clientService.save(clientController.data);
    },
    load: (id) => {
        clientService.load(id);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let btnClienteAlta = document.getElementById("btnClienteAlta");
    //btnUsuarioAlta.onclick = clientController.save;
    btnClienteAlta.onclick = () => {
        clientController.save()
    }
    let btnClienteLoad = document.getElementById("btnClienteLoad");
    //btnUsuarioAlta.onclick = clientController.save;
    btnClienteLoad.onclick = () => {
        clientController.load(18)
    }
})