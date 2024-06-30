<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="inicio/index">Home</a></li>
    <li class="breadcrumb-item"><a href="cliente/index">Cliente</a></li>
    <li class="breadcrumb-item active" aria-current="page">Alta</li>
  </ol>
</nav>

<form id="formularioAlta" class="my-4 was-validated" action="cliente/save" method="post">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-7">
                            <div class="card">
                                <h4 class="card-header text-center">Registrar nuevo cliente al sistema</h4>
                                <div class="card-body">
                                    <div class="mb-2">
                                        <label for="datoApellido" class="form-label">Apellido</label>
                                        <input type="text" id="datoApellido" name="datoApellido" class="form-control" maxlength="45" required>
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoNombres" class="form-label">Nombres</label>
                                        <input type="text" id="datoNombres" name="datoNombres" class="form-control" required maxlength="45">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoDni" class="form-label">DNI</label>
                                        <input type="number" id="datoDni" name="datoDni" class="form-control" required maxlength="8" minlength="8">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoCuit" class="form-label">CUIT</label>
                                        <input type="number" id="datoCuit" name="datoCuit" class="form-control" required maxlength="11">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    
                                    <div class="mb-2">
                                        <label for="datoPerfil" class="form-label">Tipo de usuario</label>
                                        <select class="form-select" id="datoPerfil" name="datoPerfil" required>
                                            <option value="" selected>Seleccionar</option>
                                            <option value="1">Empresa</option>
                                            <option value="2">Persona</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Seleccionar un perfil
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoProvincia" class="form-label">Provincia</label>
                                        <select class="form-select" id="datoProvincia" name="datoProvincia" required>
                                            <option value="" selected>Seleccionar</option>
                                            <option value="1">Santa Cruz</option>
                                            <option value="7">Rio Negro</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Seleccionar
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoLocalidad" class="form-label">Localidad</label>
                                        <input type="text" id="datoLocalidad" name="datoLocalidad" class="form-control" required maxlength="45">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoTelefono" class="form-label">Telefono</label>
                                        <input type="text" id="datoTelefono" name="datoTelefono" class="form-control" required maxlength="45">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoCorreo" class="form-label">Correo electrónico</label>
                                        <input type="email" id="datoCorreo" name="datoCorreo" class="form-control" required maxlength="80">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <div>
                                        <button id="btnClienteAlta" type="button" class="btn btn-primary btn-lg">Enviar</button>
                                        <button type="reset" class="btn btn-primary btn-lg">Resetear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>