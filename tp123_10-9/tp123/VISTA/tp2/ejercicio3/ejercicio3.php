<?php
    $Titulo ="TP2 | Ejercicio 3";
    include_once '../../estructura/cabecera.php';
?>
<body>
<!-- Ejercicio -->
<form class="needs-validation" novalidate action="accion.php" method="post">
    <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Ingrese su usuario y contraseña</p>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="usuario" required name="usuario" id="usuario" class="form-control form-control-lg" />
                                        <div class="valid-feedback">
                                            Formato Adecuado!
                                        </div>
                                        <div class="invalid-feedback">
                                            ¡Por favor checkear nombre de usuario!
                                        </div>
                                        <label class="form-label" for="usuario">Usuario</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                    <input type="password" id="clave" min="8" max="25" required name="clave" id="clave" class="form-control form-control-lg" />
                                    <label class="form-label" for="clave">Clave</label>
                                    <div style="color:red;" id="invalid-feedback1"></div>
                                    <div style="color:red;" id="invalid-feedback2"></div>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" id="bottonSubmit" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

    <script src="../../estructura/script.js"></script>

<?php
    include_once '../../estructura/footer.php';
?>
</body>
