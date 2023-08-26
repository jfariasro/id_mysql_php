<?php

require_once 'conexion.php';

$id = mysqli_insert_id($conexion);
echo 'ULTIMO ID INSERTADO: ' . $id;
