<?php
const ROOT = __DIR__ . '/';

const URL = 'http://localhost:3000/';


session_start();

function verif_role($role)
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']->role_id !== $role) {
            $url = URL . 'index.php';
            header("location: $url");
        }
      
    } else {
        $url = URL . 'index.php';
        header("location: $url");
    }
}
