<!DOCTYPE html>
    <hmtl>
        <head>
            <meta charset="utf-8">

            <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="../../css/styleCustom.css" rel="stylesheet">
        </head>
        <body>
            <!--Menu com logo-->
            <nav id="navBarCustom1" class="navbar fixed-top navbar-expand-lg navbar-light bg-faded fixed-top" style="display: none;">
                <div class="container-fluid"> 
                    <div id="logo"> 
                        <a class="navbar-brand" href="index.php">                        
                            <img src="../../img/Logo.png" alt="">                               
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

            <nav id="navBarCustom" class="navbar navbar-expand-lg navbar-light bg-dark">
                <div class="container">
                    <div class="row">                           
                        <div class="">
                            <!--Botão para menu responsivel-->
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                <span id="testeCor" class="navbar-toggler-icon"></span>
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
                            <img src="../../img/Logo.png" alt="">                               
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
            <br><br><br><br><br><br><br><br><br><br><br><br>
            
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>to aui
            <!-- Bootstrap core JavaScript -->
            <script src="../../js/jquery/jquery.min.js"></script>
            <script src="../../js/popper/popper.min.js"></script>
            <script src="../../css/bootstrap/js/bootstrap.min.js"></script>   

            <script>
                window.onscroll = function(){
                    var top = window.pageYOffset || document.documentElement.scrollTop
                   if( top > 50 ) {
                    console.log('Maior que 50');                       
                        document.getElementById("navBarCustom1").style.display = 'block';
                        document.getElementById("navBarCustom").style.display = 'none';
                    }else{
                        document.getElementById("navBarCustom1").style.display = 'none';
                        document.getElementById("navBarCustom").style.display = 'block';
                        console.log('Menor que 50');
                    }
                }
            </script>
        </body>
    </hmtl>