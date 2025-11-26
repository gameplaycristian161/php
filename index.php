<?php
// Se incluye la conexión a la base de datos, que es esencial para todo.
require_once 'conexion.php';

// 1. Determinar la acción a ejecutar (Routing)
// Si el parámetro 'action' existe en la URL, lo usa. Si no, usa 'list' por defecto.
$action = $_GET['action'] ?? 'list';

// 2. Enrutamiento (Routing) - Decide qué archivo incluir
switch ($action) {
    // VISTAS Y ACCIONES DEL CRUD ESTÁNDAR
    case 'list':
        // Muestra la lista de productos (CRUD: Read)
        require_once 'list.php'; 
        break;

    case 'create':
        // Muestra el formulario para crear un nuevo producto
        require_once 'create.php'; 
        break;
        
    case 'store':
        // Procesa la inserción a la base de datos (CRUD: Create)
        require_once 'store.php'; 
        break;
        
    case 'edit':
        // Muestra el formulario para editar un producto
        require_once 'edit.php'; 
        break;
        
    case 'update':
        // Procesa la actualización en la base de datos (CRUD: Update)
        require_once 'update.php'; 
        break;

    case 'delete':
        // Procesa la eliminación de un producto (CRUD: Delete)
        require_once 'delete.php'; 
        break;
        
    // VISTAS Y ACCIONES DE TU FLUJO ALTERNATIVO
    case 'nuevo':
        // Muestra el formulario de nuevo producto (desde nuevo.php)
        require_once 'nuevo.php';
        break;

    case 'procesar':
        // Muestra el resultado de procesar.php
        require_once 'procesar.php';
        break;

    default:
        // Si se pide una acción desconocida, muestra la lista
        require_once 'list.php'; 
        break;
}
?>