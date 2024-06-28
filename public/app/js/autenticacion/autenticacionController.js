let authController = {
    data: {
        usuario: "mHuenchur",
        clave: "clave123"
    },
    login: ()=>{
        authService.login(authController.data)
        .then(response => {
            if(response.error === "" && response.mensaje === "OK"){
                window.location.href = "usuario/index"
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