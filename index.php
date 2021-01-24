<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE html>
<!-- -->
<html>
    <head>
	<meta charset="utf-8" />
	<title>Projeto 1</title>
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
            
            //ferifica se o objeto document foi carregado ou esta pronto
            //caso esteja pronto executa uma function
            $(document).ready( function(){	

                var campo_vazio = false;

                //verificar se os campos Usuário s Senha foram devidamente preenchidos
                //associar via função seletora do jquery ao elemento btn_login, um evento de click
                $('#btn_login').click(function(){
                    //teste
                    //alert('Botão Entrar foi clicado');

                    //verificar se o campo possui valor
                    if($('#c_usuario').val() == ''){
                        $('#c_usuario').css({'border-color': '#A94442'});
                            campo_vazio = true;
                    } else {
                        $('#c_usuario').css({'border-color': '#CCC'});
                    }

                    //verificar se o campo possui valor
                    if($('#c_senha').val() == ''){
                        $('#c_senha').css({'border-color': '#A94442'});
                            campo_vazio = true;
                    } else {
                        $('#c_senha').css({'border-color': '#CCC'});
                    }

                    if (campo_vazio) return false;

                });
            });

        </script>
        
 
    </head>
    <body>
        
        <div class="geral container">
        
        <!-- cabeçalho -->    
        <header>
            <div class="cabecalho container">
                <div class="row">
                    <div id="cabecalho" class="col-sm-12">
                    
                        <div class="col-sm-6 logo">
                            LOGO
                        </div><!--Fim logo-->
                        
                        <div class="col-sm-6 menu">
                            
                            <ul>
                                <li>MENU-1</li>
                                <li>MENU-2</li>
                                <li>MENU-3</li>
                            </ul>
                            
                        </div><!--Fim menu-->
                        
                    </div><!--Fim cabecalho-->
                </div><!--Fim row-->
            </div>
        </header>
        <!-- fim do cabeçalho -->   
        
        <!-- ------------------------------ --> 
        
        <!-- corpo -->
        <section>
            <div class="conteudo container">
                <div class="row">
                    <div class="col-sm-12 conteudo_geral">
                        
                        <div class="col-sm-6 conteudo_1">
      
                            <form method="post" action="valida_acesso.php" id="form_login">
                                <label><h3>Usuário</h3></label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="c_usuario" name="usuario">
                                </div>
                               
                                <label><h3>Senha</h3></label>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="c_senha" name="senha">
                                </div>                                
                                <br/>
                                <button type="submit" class="btn btn-primary form-control" id="btn_login">Entrar</button>
        
                            
                                <?php
                                        if ($erro == 1) {
                                                echo '<font color="#FF0000">Usuário ou senha inválido(s)</font>';
                                        }

                                ?>                           
                            
                            </form>
                            
                        </div><!-- fim do conteudo02 --> 
                        <!-- fim do conteudo01 -->

                        <div class="col-sm-6 conteudo_2">
                            <h1 class="Conteudo_h1">CONTEUDO-2</h1>
                        </div><!-- fim do conteudo02 --> 
                        
                    </div><!-- fim do conteudo_geral --> 
                </div><!-- fim do row -->
            </div><!-- fim do conteudo -->
        </section>
        <!-- fim do corpo -->
        
        <!-- ------------------------------ -->  
        
        <!-- rodape -->   
        <footer>
            <div class="rodape container">
                <div class="row">
                    <div class="col-sm-12 rodape_1">
                        RODAPE
                    </div>
                </div>
            </div>
        </footer>
        <!-- fim do rodape -->        
        
        <!-- ------------------------------ -->    
        
        </div><!--Fim geral-->
        
        <!--
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        --> 
        
        
    </body>
</html>
