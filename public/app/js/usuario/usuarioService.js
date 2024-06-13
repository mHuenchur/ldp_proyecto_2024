let userService = {
    save: (data) => {
        fetch("usuario/save", {
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
            return response.json()
        })
        .then(data => {
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
    }
}