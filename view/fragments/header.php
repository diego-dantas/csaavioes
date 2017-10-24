<?php
    /**
    *   Created by Diego Dantas on 30/09/2017 
    */
    date_default_timezone_set('America/Sao_Paulo');
    $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
    $data = date('d/m/Y');
    $diasemana_numero = date('w', time());

?>
 <!--Menu com logo-->
            <nav id="navBarCustom1" class="navbar fixed-top navbar-expand-lg navbar-light bg-faded fixed-top" style="display: none;">
                <div class="container-fluid"> 
                    <div id="logo"> 
                        <a class="navbar-brand" href="index.php">                        
                            <img src="img/Logo.png" alt="">                               
                        </a>
                    </div>
                    <div class="row">                           
                        <!--Botão para menu responsivel-->
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive1" aria-controls="navbarResponsive1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>                        
                        <div class="collapse navbar-collapse" id="navbarResponsive1"> 
                            <ul id="" class="navbar-nav ml-auto">
                                <li><a href="quemSomos.php">Quem somos</a></li>
                                <li><a href="#">Aeronaves</a></li>
                                <li><a href="#">Cadastre sua aeronave</a></li>
                                <li><a href="#">Pedidos de aeronaves</a></li>
                                <li><a href="#">Contato</a></li>
                            </ul>
                        </div>
                    </div>                  
                </div> 
            </nav>

            <nav id="navBarCustom" class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container">
                    <div class="row">                           
                        <div class="col-md-12">
                            <!--Botão para menu responsivel-->
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>                        
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul id="" class="navbar-nav ml-auto">
                                    <li><a href="quemSomos.php">Quem somos</a></li>
                                    <li><a href="#">Aeronaves</a></li>
                                    <li><a href="#">Cadastre sua aeronave</a></li>
                                    <li><a href="#">Pedidos de aeronaves</a></li>
                                    <li><a href="#">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                  </div>                  
                </div>
            </nav>





            <header class="container-fluid">
                <div class="row">
                    <div id="logoMain" class="col-md-3"> 
                        <a class="navbar-brand" href="index.php">                        
                            <img src="img/Logo.png" alt="">                               
                        </a>
                    </div>
                    
                    <div id="inputBusca" class="input-group col-md-6">
                        <input type="text" class="form-control" placeholder="Digite aqui a aeronave que você procura" aria-label="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
            </header>
            <script>
                window.onscroll = function(){
                    var top = window.pageYOffset || document.documentElement.scrollTop
                   if( top > 70 ) {                      
                        document.getElementById("navBarCustom1").style.display = 'block';
                        document.getElementById("navBarCustom").style.display = 'none';
                    }else{
                        document.getElementById("navBarCustom1").style.display = 'none';
                        document.getElementById("navBarCustom").style.display = 'block';                       
                    }
                }
            </script>