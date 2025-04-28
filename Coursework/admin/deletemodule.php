<?php
try {
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunction.php';


    // Delete the post from database
    deleteModules($pdo, $_POST['id']);
    header('location: managemodule.php');
    exit;
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Unable to delete post: ' . $e->getMessage();
}
include '../templates/layout_admin.html.php';