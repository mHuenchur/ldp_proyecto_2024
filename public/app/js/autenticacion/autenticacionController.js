let authController = {
    data: {
        //usuario: "",
        //clave: ""
        usuario: "mHuenchur",
        clave: "clave123"
        //usuario: "lMiguel",
        //clave: "12345678"
    },
    login: ()=>{
        //let formUsuario = document.getElementById("datoUsuario");
        //let formClave = document.getElementById("datoClave");
        //authController.data.usuario = formUsuario.value;
        //authController.data.clave = formClave.value;

        authService.login(authController.data)
        .then(response => {
            if(response.error === "" && response.mensaje === "OK"){
                window.location.href = "inicio/index"
            }else{
                const toastLiveExample = document.getElementById('liveToast')
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
                const message = document.getElementById("messageConatiner");
                message.innerHTML = response.error;
                toastBootstrap.show()
            }
        })
    }
}

document.addEventListener("DOMContentLoaded", ()=>{
    let btnLogin = document.getElementById("btnLogin")
    if(btnLogin != null){
        btnLogin.onclick = () => {
            authController.login()
        }
    }
})