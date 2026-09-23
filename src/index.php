<?php
$host = 'db';
$db   = 'dwes_db';
$user = 'dwes_user';
$pass = 'dwes_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

echo "<h1>Entorno de Desarrollo con Docker (DWES)</h1>";
echo "<p>Versión de PHP: " . phpversion() . "</p>";

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "<p style='color: green; font-weight: bold;'>✔ Conexión exitosa a MySQL mediante PDO.</p>";
} catch (\PDOException $e) {
    echo "<p style='color: red; font-weight: bold;'>✘ Error al conectar a la base de datos: " . htmlspecialchars($e->getMessage()) . "</p>";
}