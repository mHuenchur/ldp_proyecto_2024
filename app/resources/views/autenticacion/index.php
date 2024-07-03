<div class="card text-bg-light mx-auto p-2" style="width: 500px;">
    <h3 class="card-header text-center">FORMULARIO DE AUTENTICACION</h3>
    <div class="card-body">
        <div class="mb-3">
            <label for="datoUsuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="datoUsuario">
        </div>
        <div class="mb-3">
            <label for="datoClave" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="datoClave">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button id="btnLogin" class="btn btn-success m-3 text-center">Autenticarse</button>
        </div>
    </div>
</div>

<div class="toast-container p-3 position-fixed top-0 start-50 translate-middle-x">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">ATENCION</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div id="messageConatiner" class="toast-body">
    </div>
  </div>
</div>