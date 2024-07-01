let clientService = {
    save: (data) => {
        return fetch("cliente/save", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if(!response.ok){
                throw new Error(response.status);
            }
            return response.json();
        })
        .catch(error => {
            console.error("ERROR EN LA PETICION ", error)
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
            method: 'POST'
            //GET?
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