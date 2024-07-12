<?php 
include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name'])>= 1 &&
        strlen($_POST['email'])>= 1 &&
        strlen($_POST['direction'])>= 1 &&
        strlen($_POST['phone'])>= 1 &&
        strlen($_POST['password'])>= 1
    ){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $direction = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
        $consulta = "INSERT INTO register(name, gmail_address, address, number_phone, password)
            VALUES('$name', '$email', '$direction', '$phone', '$password')";
        $resultado = mysql_query($conex);
        if ($resultado) {
            ?>
            <h3 class="sucess">Tu registro se ha completado exitosamente<h3>
            <?php
        } else {
            ?>
              <h3 class="error">Ocurrio un error<h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">LLena todos los campos<h3>
        <?php
    }
}
?>