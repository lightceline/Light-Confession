<?php
require_once '../includes/session.php';
require '../includes/DatabaseConnection.php';
require '../includes/DatabaseFunction.php';

checkLogin();

try {
    updateUser($pdo, $_POST['id'], $_POST['username'], $_POST['email'], $_POST['role']);
        
        header('Location: manageuser.php');
        exit();
    
} catch (PDOException $e) {
    $error = 'Error updating user: ' . $e->getMessage();
    include '../templates/layout_admin.html.php';
}