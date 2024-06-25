<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema TECMED</title>
    <link rel="icon" href="<?php echo base_url(); ?>/assets/dist/img/logotecmed.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script>
        function toggleSubmitButton() {
            const acceptRadio = document.getElementById('acepta');
            const submitButton = document.getElementById('submitBtn');
            submitButton.disabled = !acepta.checked;
        }
    </script>
</head>

<body class="hold-transition login-page" style="background-color: midnightblue;">
    <br><br><br>
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">TERMINOS Y CONDICIONES DE USO</h3>
            </div>
            <form method="POST" action="<?php echo base_url(); ?>/Usuarios/acepta_licencia_2">
                <!-- <input type="hidden" value="<?= session('credenciales.usuario') ?>" name="usuario" id="usuario" />
                <input type="hidden" value="<?= session('credenciales.password') ?>" name="password" id="password" /> -->
                <div class="card-body" style="height: 500px; overflow-y: auto;">
                    <ol>
                        <li style="font-weight: bold;">Introducción</li>
                        El Software de Seguimiento de Titulados de la Carrera de Tecnología Médica sido desarrollado con fines exclusivamente académicos para una retroalimentación de la Carrera de Tecnología Médica.
                        <li style="font-weight: bold;">Finalidad del Software</li>
                        El Software está destinado a la recolección y gestión de datos personales y profesionales de los titulados de la Carrera de Tecnología Médica. La información recopilada incluye datos personales, títulos de posgrado, experiencia laboral, experiencia docente, cursos, talleres, seminarios, publicaciones, artículos científicos, premios destacados y evaluaciones sobre la enseñanza de la carrera.
                        <li style="font-weight: bold;">Uso Exclusivo para Fines Académicos</li>
                        El uso del Software es exclusivamente para fines académicos y de investigación dentro del ámbito de la Carrera. La información recopilada se utilizará para mejorar la calidad de la enseñanza y realizar análisis estadísticos y estudios relacionados con el desempeño profesional de los titulados.
                        <li style="font-weight: bold;">Protección y Confidencialidad de la Información</li>
                        La Carrera se compromete a proteger y mantener la confidencialidad de toda la información recopilada a través del Software, implementando medidas de seguridad adecuadas para garantizar la integridad y confidencialidad de los datos personales y profesionales de los usuarios.
                        <li style="font-weight: bold;">Consentimiento Informado</li>
                        Al proporcionar sus datos en el Software, los titulados consienten expresamente el uso de su información conforme a estos Términos y Condiciones. La Carrera garantiza que la información no será compartida con terceros sin el consentimiento previo del titular de los datos, salvo cuando sea requerido por ley.
                        <li style="font-weight: bold;">Derechos de los Titulados</li>
                        Los titulados tienen derecho a acceder, rectificar, actualizar y eliminar sus datos personales y profesionales almacenados en el Software. Para ejercer estos derechos, pueden ponerse en contacto con la Carrera a través de los canales de comunicación establecidos.
                        <li style="font-weight: bold;">Responsabilidad del Usuario</li>
                        El usuario se compromete a proporcionar información veraz y exacta en el Software. La Carrera no se hace responsable por la veracidad de los datos proporcionados por los usuarios.
                        <li style="font-weight: bold;">Modificaciones de los Términos y Condiciones</li>
                        La Carrera se reserva el derecho de modificar estos Términos y Condiciones en cualquier momento. Las modificaciones serán notificadas a los usuarios a través de los medios de comunicación oficiales de la Universidad.
                        <li style="font-weight: bold;">Aceptación de los Términos y Condiciones</li>
                        El uso del Software implica la aceptación plena y sin reservas de estos Términos y Condiciones. Si el usuario no está de acuerdo con alguno de estos términos, debe abstenerse de utilizar el Software.
                    </ol>
                </div>
                <!-- /.card-body -->
                <div class="form-group">
                    <div class="custom-control custom-radio">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="custom-control-input custom-control-input-primary" type="radio" id="acepta" name="terminos" value="acepta" onclick="toggleSubmitButton()">
                        <label for="acepta" class="custom-control-label">Si acepto</label>
                    </div>
                    <div class="custom-control custom-radio">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="custom-control-input custom-control-input-primary" type="radio" id="declina" name="terminos" value="declina" onclick="toggleSubmitButton()">
                        <label for="declina" class="custom-control-label">No acepto</label>
                    </div>
                </div>
                <div class="card-footer">
                    <center>
                        <button type="submit" id="submitBtn" class="btn btn-success" disabled>CONTINUAR &nbsp;<i class="fas fa-sign-in-alt" style="color: black;"></i></button>
                        <a href="<?php echo base_url(); ?>/Usuarios/logout" class="btn btn-danger">CANCELAR</a>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>

</html>