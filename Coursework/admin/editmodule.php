<?php
require_once '../includes/session.php';
require '../includes/DatabaseConnection.php';
require '../includes/DatabaseFunction.php';

checkLogin();

try {
    updateModules($pdo, $_POST['id'], $_POST['moduleName']);
        header('Location: managemodule.php');
        exit();
    
} catch (PDOException $e) {
    $error = 'Error updating module: ' . $e->getMessage();
    include '../templates/layout_admin.html.php';
}

include '../templates/layout_admin.html.php';