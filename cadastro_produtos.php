<?php

    require_once ('db.class.php');
    
    $pro_nome = $_POST['pro_nome'];
    $pro_quantidade = $_POST['pro_quantidade'];
    $pro_preco= $_POST['pro_preco'];
    
    $objDb = new db();
    
    $link = $objDb->conecta_mysql();
    
    $sql = " INSERT INTO produtos(pro_nome, pro_quantidade, pro_preco) values('$pro_nome', '$pro_quantidade', '$pro_preco') ";     
    
    if (mysqli_query($link, $sql)){
        header('Location: produtos.php');
    } else {
        echo 'Erro ao cadastra o produto!';
    }


?>

