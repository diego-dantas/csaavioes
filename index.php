<?php
    /**
    *   Created by Diego Dantas on 30/09/2017 
    */
?>

<!DOCTYPE html>
    <hmtl>
        <head>
            <meta charset="utf-8">

            <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="css/styleCustom.css" rel="stylesheet">
        </head>
        <body>

            <!--include do cabeçalho-->
            <div>
                <?php include('view/fragments/header.php');?>
            </div>
            <!--include do carrossel-->
            <div>
                <?php include('view/fragments/carousel.php');?>
            </div>

            <div>
                <?php include('view/fragments/preArticle.php');?>
            </div>            
            <div class="container">

                <div class="row">
                    <hr class="col-md-4 col-sm-6" color="#014D8B" size="2">
                    <h2 class="col-md-2">Aeronaves</h2>
                    <hr class="col-md-4 col-sm-6" color="#014D8B" size="2">
                </div>           
                                 
                <div id="vitrineCustom" class="row">
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                                <a href="#"><img class="card-img-top" src="img/monomotor.jpg" alt=""></a>
                                <figcaption>Monomotor</figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                                <a href="#"><img class="card-img-top" src="img/bimotor.jpg" alt=""></a>
                                <figcaption>Binomotor</figcaption>
                            </figure>                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                                <a href="#"><img class="card-img-top" src="img/turboHelice.jpg" alt=""></a>
                                <figcaption>Turbo Hélice</figcaption>
                            </figure>                                                        
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                                <a href="#"><img class="card-img-top" src="img/jato.jpg" alt=""></a>
                                <figcaption>Jato</figcaption>
                            </figure>                                               
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                               <a href="#"><img class="card-img-top" src="img/helicoptero.jpg" alt=""></a>
                                <figcaption>Helicóptero</figcaption>
                            </figure>                                                    
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                               <a href="#"><img class="card-img-top" src="img/agricola.jpg" alt=""></a>
                                <figcaption>Agrícola</figcaption>
                            </figure>                                              
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                               <a href="#"><img class="card-img-top" src="img/Experimental.jpg" alt=""></a>
                                <figcaption>Experimental</figcaption>
                            </figure>                                           
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                               <a href="#"><img class="card-img-top" src="img/imoveis.jpg" alt=""></a>
                                <figcaption>Imóveis</figcaption>
                            </figure>                                               
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <figure class="imgVitrine">
                               <a href="#"><img class="card-img-top" src="img/outro.jpg" alt=""></a>
                                <figcaption>Outros</figcaption>
                            </figure>                             
                        </div>
                    </div>
                </div>
                
            </div>

            <!--include parceiros-->
            <div>
                <?php include('view/fragments/parceiros.php');?>
            </div>

            <!--include do rodape-->
            <div>
                <?php include('view/fragments/footer.php');?>
            </div>
           
            <!-- Bootstrap core JavaScript -->
            <script src="js/jquery/jquery.min.js"></script>
            <script src="js/popper/popper.min.js"></script>
            <script src="css/bootstrap/js/bootstrap.min.js"></script>
        </body>
    </hmtl>