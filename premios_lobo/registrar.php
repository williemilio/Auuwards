<?php
error_reporting(0);
include("con_db.php");

if (isset($_POST["boton"])) {
    if(strlen($_POST["categoria"]) > 0 && strlen($_POST["nombre"]) > 0 && strlen($_POST["descripcion"]) > 0){
        $categoria = trim($_POST["categoria"]);
        $nombre = trim($_POST["nombre"]);
        $descripcion = trim($_POST["descripcion"]);
        $imagen_nombre = $_FILES['imagen']['name'];
        $imagen_tipo = $_FILES['imagen']['type'];
        $imagen_tamaño = $_FILES['imagen']['size'];
        $imagen_temp = $_FILES['imagen']['tmp_name'];
    
        // Verificar si el archivo es una imagen
        $permitidos = array("image/jpg", "image/jpeg", "image/png");
        if (in_array($imagen_tipo, $permitidos)) {
            // Ruta donde se almacenará la imagen
            $carpeta = "fotos/";
            $ruta = $carpeta . $imagen_nombre;
    
            // Mover la imagen al servidor
            move_uploaded_file($imagen_temp, $ruta);
        }
        // Sentencia preparada para prevenir inyección SQL
        $consulta = $conex->prepare("INSERT INTO `sugerir`(Categoria, Nombre, Descripción) VALUES ('$categoria','$nombre','$descripcion')");

        if ($consulta->execute()){
            ?>
                <h4 style="color: green; font-size: 20px; margin-left: 11%; margin-top: 10px;">Felicidades, tu sugerencia ha sido enviada</h4>
            <?php
        } else {
            ?>
                <h4 style="color: red; font-size: 20px; margin-left: 11%; margin-top: 10px;">Ha habido un error, porfavor, rellena otra vez la tabla</h4>
            <?php
        }
    } else {
        ?>
            <h4 style="color: red; font-size: 20px; margin-left: 11%; margin-top: 10px;">Rellena todos los campos obligatorios antes de enviar</h4>
        <?php
    }
}

?>
