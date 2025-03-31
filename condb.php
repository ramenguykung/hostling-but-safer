<?php
require_once __DIR__ . '/vendor/autoload.php'; // Load Composer autoloader

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // Initialize Dotenv
$dotenv->load(); // Load .env variables

$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL, "DigiCertGlobalRootCA.crt.pem", "/DigiCertGlobalRootCA.crt.pem", NULL);

$db_password = $_ENV['DB_PASSWORD'];

if (!mysqli_real_connect($con, "dev-bc-house.mysql.database.azure.com", "bc_house_dev_root", $db_password, "bc_house", 3306, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error()); // Handle connection errors
}
?>