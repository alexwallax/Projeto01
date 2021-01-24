<?php
    
    //testa se o usuário esta tentando entrar direto na pagina produto.php 
    //sem fazer login
    session_start();
    
    if(!isset($_SESSION['usuario'])) {
        header('Location: index.php?erro=1');
    }

?>


<!DOCTYPE html>
<!-- -->
<html>
    <head>
	<meta charset="utf-8" />
	<title>Projeto 1 Produtos</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/estilo.css" />
        <!-- jquery - link cdn -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <!-- bootstrap - link cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!--  <script src="assets/js/jquery.js"></script> -->
        <!-- <script src="assets/js/bootstrap.js"></script>	 -->
	<link rel="icon" href="iconeX1.ico" type="imagens/x-icon" />
	<!--Bootstrap-->
	<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        
        <script>
            

        </script>
        
 
    </head>
    <body>
        
        <div class="geral">
        
        <!-- cabeçalho -->    
        <header>
            <div class="cabecalho">
                
                <div class="row">
                    
                    <div id="cabecalho" class="col-sm-12">
                    
                        <div class="col-sm-6 logo">
                            LOGO
                        </div><!--Fim logo-->
                        
                        <div class="col-sm-6 menu">
                            
                            <ul>
                                <li> <a href="sair.php"><h3>Sair</h3>  </a> </li>
                                <li> <a href="#"><h3>MENU-1</h3></a> </li>
                                <li> <a href="#"><h3>MENU-2</h3></a> </li>
                                <li> <a href="#"><h3>MENU-3</h3></a> </li>                           
                            </ul>
                            
                        </div><!--Fim menu-->
                        
                    </div><!--Fim class  col-sm-12-->
                     
                </div><!--Fim row-->   

            </div><!--Fim cabecalho-->
            
        </header><!-- fim do cabeçalho -->   
        
        
        <!-- ------------------------------ --> 
        
        <!-- corpo -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 conteudo_geral">
                        
                        <div class="col-sm-2 conteudo_1">     
                            

                            <h3 class="Conteudo_h1" style="text-align: center">CADASTRO DE PRODUTOS</h3>    
                            
                            <form method="post" action="cadastro_produtos.php" id="cadProd">
                                
                                
                                <div class="form-group">
                                    <label>Nome do Produto</label>
                                    <input type="text" class="form-control" id="pro_nome" name="pro_nome">
                                </div>
                                
                                <div class="form-group">
                                    <label>Quantidade do Produto</label>
                                    <input type="text" class="form-control" id="pro_quantidade" name="pro_quantidade">
                                </div>
                                
                                <div class="form-group">
                                    <label>Preço do Produto</label>
                                    <input type="text" class="form-control" id="pro_preco" name="pro_preco">
                                </div>
                                
                                <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
                                      
                            </form>
                            
                        </div><!-- fim do conteudo01 --> 


                        
                        
                        <div class="col-sm-10 conteudo_2">
                            <div class="row conteudo_produtos" >
                            
                            <div class="col-sm-2 conteudo_id">   
                                <fieldset>
                                    <legend>ID</legend>        
                                    <hr>
                                            <?php
                                            require_once './produtos_cadastrados_id.php';
                                            ?>

                                </fieldset>                             
                            </div> 
                                
                            <div class="col-sm-4 conteudo_id">    
                                <fieldset>
                                    <legend>Produtos</legend>        
                                    <hr>
                                            <?php
                                            require_once './produtos_cadastrados.php';
                                            ?>
                                </fieldset>
                            </div>                        
                                
                            <div class="col-sm-2 conteudo_id">    
                                <fieldset>
                                    <legend>Preços</legend>        
                                    <hr>
                                            <?php
                                            require_once './produtos_cadastrados_precos.php';
                                            ?>
                                   
                                </fieldset>
                            </div>  
                                
                            <div class="col-sm-2 conteudo_id">    
                                <fieldset>
                                    <legend>Quantidade</legend>        
                                    <hr>    

                                            <?php
                                            require_once './produtos_cadastrados_quantidade.php';
                                            ?>

                                </fieldset>                                
                            </div>   
                                
                            </div><!-- fim row --> 
                        </div><!-- fim do conteudo02 --> 
                        
                    </div><!-- fim do conteudo_geral --> 
                </div><!-- fim do row -->
            </div><!-- fim do container -->
        </section>
        <!-- fim do corpo -->
        
        <!-- ------------------------------ -->  
        
        <!-- rodape -  
        <footer>
            <div class="rodape container">
                <div class="row">
                    <div class="col-sm-12 rodape_1">
                        RODAPE
                    </div>
                </div>
            </div>
        </footer>
        fim do rodape -->        
        
        <!-- ------------------------------ -->    
        
        </div><!--Fim geral-->
        
        <!--
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        --> 
        
        
    </body>
</html>
