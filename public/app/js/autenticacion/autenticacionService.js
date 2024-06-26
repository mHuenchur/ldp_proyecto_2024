let authService = {
    login: (data)=>{
        return fetch("autenticacion/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if(!response.ok){
                throw new Error(response.status)
            }
            return response.json()
        })
        /* BORRAR ESTO LUEGO
        .then(data => {
            if(data.error != ""){
                console.error("Error interno")
            }
            else{
                console.info("todo bien")
            }
            console.log("Respuesta del servidor", data)
        })*/
        .catch(error => {
            console.error("ERROR EN LA PETICION", error)
        })
    }
}