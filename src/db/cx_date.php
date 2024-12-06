<?php
    require_once "base/cx_database.php";

    $conn = createConnection();

    try {
        $stmt = $conn->prepare("
            SELECT fecha, descripcion
            FROM fecha;
        ");
        $stmt->execute();
    
        $result = $stmt->fetchAll(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
        echo "Error al realizar la consulta: " . $e->getMessage();
    }
?>