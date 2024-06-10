<h2>vista -> cliente -> alta</h2>
<form id="formularioAlta" class="my-4 was-validated" action="usuario/alta" method="post">
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
                                        <input type="text" id="datoNombre" name="datoNombres" class="form-control" required maxlength="45">
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
                                        <label for="datoNombres" class="form-label">Provincia</label>
                                        <input type="text" id="datoNombre" name="datoNombres" class="form-control" required maxlength="45">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoNombres" class="form-label">Localidad</label>
                                        <input type="text" id="datoNombre" name="datoNombres" class="form-control" required maxlength="45">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoNombres" class="form-label">Telefono</label>
                                        <input type="text" id="datoNombre" name="datoNombres" class="form-control" required maxlength="45">
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
                                        <button type="button" class="btn btn-primary btn-lg" onclick="cuenta.alta()">Enviar</button>
                                        <button type="reset" class="btn btn-primary btn-lg">Resetear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>