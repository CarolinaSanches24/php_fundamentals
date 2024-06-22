<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);

    // Initialize the family list if not already initialized
    if (!isset($_SESSION['listFamily'])) {
        $_SESSION['listFamily'] = [];
    }

    // Check if the name field is empty
    if (empty($name)) {
        echo "Nome Completo é obrigatório.";
    } else {
      
        // equals push 

        $_SESSION['listFamily'][] = $name;
  
        header("Location: registerView.php");
        exit();
    }
}

