
<?php
    require_once 'pdo.php';
    $productConnection = new ProductConnection();
    $id = ['id' => $_POST['id']];
    $productConnection->deleteProdData($id);
    header("Location: http://localhost/btvnb11/product/index.php");
?>

