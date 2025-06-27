<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=hancy', 'hancy', 'hancy@hancy');
    echo "Database connection successful!\n";
    echo "MariaDB version: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "\n";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage() . "\n";
}
?>
