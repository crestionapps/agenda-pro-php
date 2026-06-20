<?php
require_once 'includes/auth.php';
checkAuth();
echo "Bem-vindo, utilizador " . $_SESSION['user_id'];
?>