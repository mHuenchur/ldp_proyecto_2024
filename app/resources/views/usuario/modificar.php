<h2>Usuario -> MODIFICAR</h2>

<form id="formularioConsulta" class="my-4 was-validated" action="usuario/alta" method="post">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-7">
                            <div class="card">
                                <h4 class="card-header text-center">Registrar nuevo usuario al sistema</h4>
                                <div class="card-body">
                                    <div class="mb-2">
                                        <label for="datoApellido" class="form-label">Apellido</label>
                                        <input type="text" id="datoApellido" name="datoApellido" class="form-control" maxlength="45" value="<?php echo $data["apellido"] ?>">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoNombres" class="form-label">Nombres</label>
                                        <input type="text" id="datoNombre" name="datoNombres" class="form-control" required maxlength="45" value="<?php echo $data["nombres"] ?>">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoCuenta" class="form-label">ID de la cuenta</label>
                                        <input type="text" id="datoCuenta" name="datoCuenta" class="form-control" required minlength="6" maxlength="20" value="<?php echo $data["cuenta"] ?>">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoCorreo" class="form-label">Correo electrónico</label>
                                        <input type="email" id="datoCorreo" name="datoCorreo" class="form-control" required maxlength="80" value="<?php echo $data["correo"] ?>">
                                        <div class="invalid-feedback">
                                            Completar campo
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoClave" class="form-label">Contraseña</label>
                                        <input type="password" id="datoClave" name="datoClave" class="form-control" required minlength="8" maxlength="15">
                                        <div class="invalid-feedback">
                                            Minimo de + caracteres y maximo de + caracteres
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoClaveConfirmacion" class="form-label">Confirmar contraseña</label>
                                        <input type="password" id="datoClaveConfirmacion" class="form-control" required minlength="8" maxlength="15">
                                    </div>
                                    <div class="mb-2">
                                        <label for="datoPerfil" class="form-label">Perfil de usuario</label>
                                        <select class="form-select" id="datoPerfil" name="datoPerfil" required>
                                            <option value="" selected>Seleccionar</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Operador</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Seleccionar un perfil
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <div>
                                        <button type="button" class="btn btn-primary btn-lg" onclick="">Actualizar</button>
                                        <button type="reset" class="btn btn-primary btn-lg">Resetear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>