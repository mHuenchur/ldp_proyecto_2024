let clientService = {
    save: (data) => {
        fetch("cliente/save", {
            method: "POST",
            headers: {
                "Content-Type": "text/javascript",
                "Accept": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            console.log(response);
            if(!response.ok){
                throw new Error(response.status);
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
            if(data.error != ""){
                console.error("Error interno")
            }else{
                console.log("Todo bien")
            }
            console.log("Respuesta del servidor ", data)
        })
        .catch(error => {
            console.error("Error en la peticion ", error)
        });
    },
    load: (id) => {
        fetch("cliente/load/"+ id)
        .then(response => {
            if(!response.ok){
                throw new Error(response.status);
            }
            return response.json();
        })
        .then(data => {
            console.log(data.result);
            if(data.error != ""){
                console.error("Error interno")
            }else{
                console.log("Todo bien")
            }
        })
        .catch(error => {
            console.error("Error en la peticion ", error)
        });
    },
    delete: (id) => {
        fetch("cliente/delete/"+ id, {
            method: 'DELETE'
        })
        .then(response => {
            if(!response.ok){
                throw new Error(response.status);
            }
            return response.json();
        })
        .then(data => {
            console.log(data.result);
            if(data.error != ""){
                console.error("Error interno")
            }else{
                console.log("Todo bien")
            }
        })
        .catch(error => {
            console.error("Error en la peticion ", error)
        });
    }
}