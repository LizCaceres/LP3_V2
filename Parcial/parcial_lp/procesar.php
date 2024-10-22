<?php
include 'db_connection.php';

$action = $_POST['action'];

if ($action == 'agregar') {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contactos (name, message) VALUES ('$name', '$message')";
} elseif ($action == 'listar') {
    $sql = "SELECT * FROM contactos";
} elseif ($action == 'modificar') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $sql = "UPDATE contactos SET name='$name', message='$message' WHERE id='$id'";
} elseif ($action == 'eliminar') {
    $id = $_POST['id'];
    $sql = "DELETE FROM contactos WHERE id='$id'";
}

$result = $conn->query($sql);

if ($action == 'listar') {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["name"]. " - Mensaje: " . $row["message"]. "<br>";
    }
} else {
    if ($result === TRUE) {
        echo "Operación exitosa";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
