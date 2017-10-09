<?php
    /**
    *   Created by Diego Dantas on 01/10/2017 
    */
?>

<!DOCTYPE html>
    <hmtl>
        <head>
            <meta charset="utf-8">

            <link href="..\css\bootstrap\css\bootstrap.min.css" rel="stylesheet">
            <link href="..\css\style.css" rel="stylesheet">
        </head>
        <body>

            <!--include do cabeçalho-->
            <div>
                <?php include('fragments\header.php');?>
            </div>
            <!--include do carrossel-->
            <div>
                <?php include('fragments\carousel.php');?>
            </div>
             <div>
                <?php include('fragments\preArticle.php');?>
            </div> 
            <article class="container">
                <div class="row">
                    <hr class="col-md-4 col-sm-6" color="#014D8B" size="2">
                    <h2 class="col-md-3">Quem Somos</h2>
                    <hr class="col-md-4 col-sm-6" color="#014D8B" size="2">
                </div>
                <p>
                    Estamos no mercado há 32 anos atuando na compra e venda de aeronaves executivas, agrícolas e helicópteros e possuímos um 
                    grande cadastro de aeronaves. Providenciamos junto à ANAC e ANATEL a transferência de propriedade e trabalhamos em prol 
                    do nosso cliente para proporcionar um assessoramento na escolha da sua aeronave ou na venda.
                </p>
                <p>
                    Para comprar ou vender sua aeronave estamos à inteira disposição na orientação técnica, preço de mercado para realização 
                    de um bom negócio.  
                </p>
                <p>
                    Trabalhamos com vários tipos de aeronaves como:    
                </p>
                <p>
                    Monomotores, bimotores, turbo-hélices, jatos, agrícolas e helicopteros de diversas marcas e modelo.  
                </p>
                <p>
                    Contamos com sua confiança para realização do melhor negócio do mercado na compra ou  venda de sua aeronave.    
                </p>
            </article>

            <!--include parceiros-->
            <div>
                <?php include('fragments\parceiros.php');?>
            </div>
            <!--include do rodape-->
            <div>
                <?php include('fragments\footer.php');?>
            </div>
           
            <!-- Bootstrap core JavaScript -->
            <script src="..\js/jquery/jquery.min.js"></script>
            <script src="..\js\popper/popper.min.js"></script>
            <script src="..\css\bootstrap/js/bootstrap.min.js"></script>
        </body>
    </hmtl>