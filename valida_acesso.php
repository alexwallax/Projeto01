<?php
    
    session_start();

    require_once('db.class.php');
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    #echo "$usuario";
    #echo '<br />';
    #echo "$senha";
    
    //verificar se o usuário existe
    $sql = " SELECT * FROM entrar WHERE USUARIO = '$usuario' and SENHA = '$senha' ";
    
    //instancia da class db
    $objDb = new db();
    
    //executar função de conexão com o DB
    $link = $objDb->conecta_mysql();
    
    //executar consulta sql
    $resultado_id = mysqli_query($link, $sql);
    
    //testa se a consulta deu certo sem erros de sintax
    if ($resultado_id){
        
        //retorna os dados com estrutura de array
        $dados_usuario = mysqli_fetch_array($resultado_id);
        
        //imprimir um array
       //var_dump($dados_usuario);
        
        //fazer o teste se existe o campo usuário
        if (isset($dados_usuario['usuario'])) {
            
            $_SESSION['usuario'] = $dados_usuario['usuario'];
            $_SESSION['senha'] = $dados_usuario['senha'];
            
            header('location: produtos.php');
        } else {
            header('location: index.php?erro=1');
        }
        
    } else {
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site ";
    }
 
        
      

