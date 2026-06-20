<?php
session_start();
require_once __DIR__ . '/../config/db.php';

function checkAuth() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: /login.php");
        exit;
    }
}
?>