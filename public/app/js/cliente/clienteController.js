let clientController = {
    data: {
        id: 0,
        apellido: "",
        nombres: "",
        dni: "",
        cuit: "",
        tipo: 0,
        provinciaId: 0,
        localidad: "",
        telefono: "",
        correo: ""
    },
    save: () => {
        let form = document.forms["formularioAlta"];

        if (form.checkValidity()){
            clientController.data.apellido = form.datoApellido.value;
            clientController.data.nombres = form.datoNombres.value;
            clientController.data.dni = form.datoDni.value;
            clientController.data.cuit = form.datoCuit.value;
            clientController.data.tipo = form.datoPerfil.value;
            clientController.data.provinciaId = form.datoProvincia.value;
            clientController.data.localidad = form.datoLocalidad.value;
            clientController.data.telefono = form.datoTelefono.value;
            clientController.data.correo = form.datoCorreo.value;

            clientService.save(clientController.data);
        }
    },
    load: (id) => {
        clientService.load(id);
    },
    delete: () => {
        clientService.delete(id);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let btnClienteAlta = document.getElementById("btnClienteAlta");
    //btnUsuarioAlta.onclick = clientController.save;
    btnClienteAlta.onclick = () => {
        clientController.save()
    }
    /*
    let btnClienteLoad = document.getElementById("btnClienteLoad");
    btnClienteLoad.onclick = () => {
        clientController.load(18)
    }
    let btnClienteDelete = document.getElementById("btnClienteDelete");
    btnClienteDelete.onclick = () => {
        clientController.delete(18)
    }*/
})