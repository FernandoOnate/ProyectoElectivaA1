<?php
include('Conexion.php');
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['tel'];
    $identificacion = $_POST['identi'];
    $pass = $_POST['contra'];

    if (!empty($nombre) && !empty($apellidos) && !empty($telefono) && !empty($identificacion) && !empty($pass)) {

        $query = "INSERT INTO tb_usuarios(Nombre,Apellidos,Identificacion,Telefono,Pass) VALUES('$nombre','$apellidos','$identificacion','$telefono','$pass')";

        $resultado =$conexion->query($query);

        if ($resultado) {
            header("refresh:4;url=../Vistas/CrearUsuario.php");
            mostrarHtml1();
            exit();
            //header("Location:../Vistas/CrearUsuario.php");

        } else {
            header("refresh:4;url=../Vistas/CrearUsuario.php");
            mostrarHtml2();
            //header("Location:../Vistas/CrearUsuario.php");
            exit();
        }
    }
}
function mostrarHtml2(){

    echo "
                <!DOCTYPE html>
                <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                        <!-- Bootstrap CSS -->
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css\" integrity=\"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I\" crossorigin=\"anonymous\">
                        <link href=\"https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap\" rel=\"stylesheet\">
                        <script src=\"https://kit.fontawesome.com/ffec4ec2ed.js\" crossorigin=\"anonymous\"></script>
                        <link rel=\"\shortcut icon\" href=\"../Imagenes/IconWeb.jpg\" />
                        <title>Validar registro</title>

                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                            <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\" />
                            </symbol>
                            <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\" />
                            </symbol>
                            <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\" />
                            </symbol>
                        </svg>
                    </head>
                    <body>
                    <div class=\"mx-auto col-auto p-5\" style=\"width: 50%;\">
                        <div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">
                            <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Danger:\">
                                <use xlink:href=\"#exclamation-triangle-fill\" />
                            </svg>
                            <div class=\"texto-alerta\">
                                &nbsp;&nbsp;No se ha agregado al usuario!
                            </div>
                        </div>
                    <div>
                    </body>
                </html>";
    echo 'Redirigiendo en 4 segundos, si no, <a href="../Vistas/CrearUsuario.php">Clic aquí</a> para volver.';
}
function mostrarHtml1(){
    echo "<!DOCTYPE html>
                <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                        <!-- Bootstrap CSS -->
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css\" integrity=\"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I\" crossorigin=\"anonymous\">
                        <link href=\"https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap\" rel=\"stylesheet\">
                        <script src=\"https://kit.fontawesome.com/ffec4ec2ed.js\" crossorigin=\"anonymous\"></script>
                        <link rel=\"\shortcut icon\" href=\"../Imagenes/IconWeb.jpg\" />
                        <title>Validar registro</title>

                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                            <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\" />
                            </symbol>
                            <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\" />
                            </symbol>
                            <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\" />
                            </symbol>
                        </svg>
                    </head>
                    <body>
                    <div class=\"mx-auto col-auto p-5\" style=\"width: 50%;\">
                        <div class=\"alert alert-success d-flex align-items-center\" role=\"alert\">
                            <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\">
                                <use xlink:href=\"#check-circle-fill\" />
                            </svg>
                            <div class=\"texto-alerta\">
                                &nbsp;&nbsp;Se ha agregado al usuario correctamente!
                            </div>
                        </div>
                    <div>
                    </body>
                </html>";
    echo 'Redirigiendo en 4 segundos, si no, <a href="../Vistas/CrearUsuario.php">Clic aquí</a> para volver.';
}
?>