<?php 
    try{
        $connection = new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

    // crear una nueva tarea
    if(isset($_POST['tareaBoton'])) {
        $nombreTarea = $_POST['tareaNombre'];
        $query = 'INSERT INTO tarea (nombre) VALUE (?)';
        $sentencia = $connection->prepare($query);
        $sentencia->execute([$nombreTarea]);
        
    }

    //eliminar tarea
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = 'DELETE FROM tarea WHERE id=?';
        $sentencia = $connection->prepare($query);
        $sentencia->execute([$id]);
    }

    //actualizar estado de tarea
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $completada = isset($_POST['tareaEstado']) ? 1 : 0;
        $query = 'UPDATE tarea SET completada=? WHERE id=?';
        $sentencia = $connection->prepare($query);
        $sentencia->execute([$completada, $id]);
    }

    // obtener todas las tareas
    $query = "SELECT * FROM tarea";
    $tareas = $connection->query($query);

    ?>