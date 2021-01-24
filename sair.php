<?php

    session_start();
    
    //elimina os indices - usuario e senha
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    
    header('LOcation: index.php');


?>