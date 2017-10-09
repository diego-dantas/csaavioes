<?php
    /**
    *   Created by Diego Dantas on 30/09/2017 
    */
?>
<nav class="navbar fixed-top navbar-expand-lg bg-dark fixed-top">
    <div class="container">
        <div id="logo">
            <a class="navbar-brand" href="index.php">                        
                <img src="img\Logo.png" alt="">                               
            </a>
        </div>
        <!--Botão para menu responsivel-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul id="navBarCustom" class="navbar-nav ml-auto">
                <li><a href="quemSomos.php">Quem somos</a></li>
                <li><a href="#">Aeronaves</a></li>
                <li><a href="#">Cadastre sua aeronave</a></li>
                <li><a href="#">Pedidos de aeronaves</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>