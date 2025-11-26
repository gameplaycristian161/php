<?php
// 1. Incluir la conexión a la base de datos, siempre es vital.
// Usamos require_once para asegurar que se incluya solo una vez y detenga
// la ejecución si el archivo no se encuentra.
require_once 'conexion.php'; 

// 2. Determinar qué acción se debe realizar
// Se verifica si el parámetro 'action' (o 'page', 'op') está presente en la URL.
$action = isset($_GET['action']) ? $_GET['action'] : 'list'; // Por defecto, si no hay 'action', listamos.

// 3. Enrutamiento (Routing) - Decidir qué archivo incluir
switch ($action) {
    case 'list':
        // Muestra la lista de productos (CRUD: Read)
        require_once 'list.php'; 
        break;

    case 'new':
        // Muestra el formulario para crear un nuevo producto
        require_once 'nuevo.php'; 
        break;
        
    case 'store':
        // Procesa los datos del formulario de 'new' (CRUD: Create)
        require_once 'store.php'; 
        break;

    case 'edit':
        // Muestra el formulario para editar un producto
        require_once 'edit.php'; 
        break;
        
    case 'update':
        // Procesa los datos del formulario de 'edit' (CRUD: Update)
        require_once 'update.php'; 
        break;

    case 'delete':
        // Procesa la solicitud de eliminación (CRUD: Delete)
        require_once 'delete.php'; 
        break;
        
    default:
        // Si la acción no existe, muestra la lista o un error 404
        require_once 'list.php'; 
        break;
}

// Opcionalmente, puedes incluir el HTML del footer aquí.
?>