<?php
require_once 'config/db.php'; 

try {
    $sql_tables = "
        CREATE TABLE IF NOT EXISTS tenants (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL
        );
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            tenant_id INT,
            name VARCHAR(255),
            email VARCHAR(255) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            role ENUM('admin', 'manager', 'customer', 'professional') DEFAULT 'customer',
            FOREIGN KEY (tenant_id) REFERENCES tenants(id)
        );
        CREATE TABLE IF NOT EXISTS services (
            id INT AUTO_INCREMENT PRIMARY KEY,
            tenant_id INT,
            name VARCHAR(255),
            duration_minutes INT,
            price DECIMAL(10,2),
            FOREIGN KEY (tenant_id) REFERENCES tenants(id)
        );
        CREATE TABLE IF NOT EXISTS professionals (
            id INT AUTO_INCREMENT PRIMARY KEY,
            tenant_id INT,
            name VARCHAR(255),
            FOREIGN KEY (tenant_id) REFERENCES tenants(id)
        );
        CREATE TABLE IF NOT EXISTS appointments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            tenant_id INT,
            professional_id INT,
            service_id INT,
            customer_id INT,
            start_time DATETIME,
            end_time DATETIME,
            FOREIGN KEY (tenant_id) REFERENCES tenants(id),
            FOREIGN KEY (professional_id) REFERENCES professionals(id),
            FOREIGN KEY (service_id) REFERENCES services(id),
            FOREIGN KEY (customer_id) REFERENCES users(id)
        );
    ";
    $pdo->exec($sql_tables);
    echo "Tabelas criadas com sucesso!";

} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>