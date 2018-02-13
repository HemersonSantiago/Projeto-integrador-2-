<?php 
    include 'textos_hidratacao.php';
    include 'textos.php'; 

?>
<?php 

if(!isset($_GET['idioma']))
{
    $_GET['idioma']='pt-br';
}

?>


<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <title>Fou4 F!t</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <!-- Fontes -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" rel="stylesheet">
     </head>
    

<body>
 <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span> </button>
             <ul class="dropdown idioma pull-right">
                <a href="#"   class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php echo $textos [$_GET['idioma']]['bandeira'];?>
                       <span class="caret"></span></a> 
                <ul class="dropdown-menu">
                     <li>
                        <a class="dropdown-item" href="hidratacao.php?idioma=pt-br"><img src="img/br.png">PT-BR</a>
                    </li>


                    <li>
                        <a  class="dropdown-item" href="hidratacao.php?idioma=en"><img src="img/gb.png">EN</a>
                    </li>
                    <li>
                        <a  class="dropdown-item" href="hidratacao.php?idioma=es"><img src="img/es.png">ES</a>
                    </li>
                </ul>
            </ul>
            <h1 class="brand"><?php echo $textos [$_GET['idioma']]['home'];
                        ?></h1>
           <nav class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav  pull-right">
                    <li ><?php echo $textos [$_GET['idioma']]['home-index'];
                        ?></li>
                    <li><?php echo $textos [$_GET['idioma']]['exercicios'];
                        ?></li>
                    <li  class="active"><?php echo $textos [$_GET['idioma']]['hidra'];
                        ?></li>
                    <li><?php echo $textos [$_GET['idioma']]['alimentacao'];
                        ?></li>
                    <li><?php echo $textos [$_GET['idioma']]['concentracao'];
                        ?></li>
                    <li><?php echo $textos [$_GET['idioma']]['contato'];
                        ?></li>
                </ul>
            </nav>
        </div>
    </div>
        <!-- caixa de imagens-->
        <div class="container-fluid fundo_hidra">
            <section> 
                <div>
                    <h2 class="h2_hidra">
                       <?php echo $textos[$_GET['idioma']]['titulo']; ?>
                    </h2>
                </div>
                <div>
                    <div class="wrap">
                        <!--  imagem 1 -->
                        <div class="tile box-animacao"> 
                            <img src="img/sleep.jpg" class="img-responsive" alt="dormir bem">
                            <div class="text">
                                <h2> 
                                    <?php  echo $textos[$_GET['idioma']]['h2-1']; ?> 
                                </h2>
                                <h3 class="animate-text"> 
                                    <?php echo $textos[$_GET['idioma']]['h3-1']; ?> 
                                </h3>
                                <p class="animate-text"> 
                                   
                                    <?php echo $textos[$_GET['idioma']]['paragrafo1']; ?> 
                                </p>
                                
                            </div>
                        </div>
                        <!-- imagem 2 -->
                        <div class="tile box-animacao"> 
                            <img src="img/concentracao111.png" class="img-responsive" alt=" concentracao">
                            <div class="text">
                                <h2> 
                                    <?php echo $textos[$_GET['idioma']]['h2-2']; ?> 
                                </h2>
                                <h3 class="animate-text"> 
                                    <?php echo $textos[$_GET['idioma']]['h3-2']; ?> 
                                </h3>
                                <p class="animate-text"> 
                                    <?php echo $textos[$_GET['idioma']]['paragrafo2']; ?> 
                                </p>
                            </div>
                        </div>
                        <!-- imagem 3 -->
                        <div class="tile box-animacao"> 
                            <img src="img/2hidra.png" class="img-responsive" alt="hidratacao">
                            <div class="text">
                                <h2> 
                                    <?php echo $textos[$_GET['idioma']]['h2-3']; ?> 
                                </h2>
                                <h3 class="animate-text"> 
                                    <?php echo $textos[$_GET['idioma']]['h3-3']; ?> 
                                </h3>
                                <p class="animate-text"> 
                                   <?php echo $textos[$_GET['idioma']]['paragrafo3']; ?> 
                                </p> 
                                
                         
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- paralax -->
        <article class="sec-par">
            <div class="parallax_hidra ">
                <div class="a111"> 
                    <blockquote cite="https://www.saudedica.com.br/os-22-beneficios-da-agua-para-saude/" class="p_hidra_parallax"> 
                        <p style="font-family: 'PT Serif Caption', serif; font-size: 1.1em; "> <?php echo $textos[$_GET['idioma']]['paralax']; ?> </p>
                    </blockquote>
                </div>
            </div>
        </article>
        <!-- 2°caixa de imagens -->
        <div class="fundo2_hidra">
            </section>
                <div>
                    <h2 class="h2_hidra_2">
                        <?php echo $textos[$_GET['idioma']]['titulo_2']; ?>
                    </h2>
                </div>
                <div>
                    <div class="wrap">
                        <!-- primeira imagem -->
                        <div class="tile box-animacao"> 
                            <img src="img/cabeca.jpg" alt="dor de cabeça">
                            <div class="text">
                                <h2> 
                                    <?php echo $textos[$_GET['idioma']]['h2-1-2']; ?> 
                                </h2>         
                                <blockquote cite="https://drjulianopimentel.com.br/alimentacao/desidratacao-conheca-sintomas/" class="animate-text"> 
                                    <?php echo $textos[$_GET['idioma']]['paragrafo1-2']; ?>
                                </blockquote>
                            </div>
                        </div>
                        <!-- segunda imagem -->
                        <div class="tile box-animacao"> 
                            <img src="img/insonia.jpg" alt="insônia">
                            <div class="text">
                                <h2> 
                                    <?php echo $textos[$_GET['idioma']]['h2-2-2']; ?> 
                                </h2>
                                <blockquote cite="https://drjulianopimentel.com.br/alimentacao/desidratacao-conheca-sintomas/" class="animate-text"> 
                                    <?php echo $textos[$_GET['idioma']]['paragrafo2-2']; ?> 
                                </blockquote>
                            </div>
                        </div> 
                        <!-- terceira imagem -->
                        <div class="tile box-animacao"> 
                            <img src="img/pele.png" alt="pele">
                            <div class="text">
                                <h2>
                                    <?php echo $textos[$_GET['idioma']]['h2-3-2']; ?> 
                                </h2>
                                <blockquote cite="http://saude.ig.com.br/minhasaude/2012-06-20/6-sinais-de-que-voce-esta-desidratado.html" class="animate-text">
                                    <?php echo $textos[$_GET['idioma']]['paragrafo3-2']; ?> 
                                </blockquote>
                            </div>
                        </div>                         
                    </div>
                </div>
            </section>
        </div>
        <!-- fim do teste -->
        <section class="parallax" style="background-image: url(img/water123123.png);" id="caloria">
            <div class="row"> 
            <div class="agua">
                <center>
                    <h2><?php echo $textos[$_GET['idioma']]['t_calc_hidra']; ?></h2>
                </center>
            </div>
            </div>
        </section>
        <section id="contato" style="background-color: #000; opacity: 0.9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cform" id="me-form">
                            <?php echo $textos[$_GET['idioma']]['submit-agua']; ?>
                                <?php echo  $textos[$_GET['idioma']]['form-agua']; ?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
                <?php echo $textos[$_GET['idioma']]['footer-hidra']; ?>
            

        </footer>
        <div class="scroll-top-wrapper "> 
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-chevron-up"></i>  
            </span> 
        </div>
        <!--JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script>
            $(document).ready(function () {
                $("[rel='tooltip']").tooltip();
                $('.thumbnail').hover(function () {
                    $(this).find('.caption').fadeIn(250)
                }, function () {
                    $(this).find('.caption').fadeOut(205)
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $(function () {
                    $(document).on('scroll', function () {
                        if ($(window).scrollTop() > 100) {
                            $('.scroll-top-wrapper').addClass('show');
                        }
                        else {
                            $('.scroll-top-wrapper').removeClass('show');
                        }
                    });
                    $('.scroll-top-wrapper').on('click', scrollToTop);
                });

                function scrollToTop() {
                    verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
                    element = $('body');
                    offset = element.offset();
                    offsetTop = offset.top;
                    $('html, body').animate({
                        scrollTop: offsetTop
                    }, 500, 'linear');
                }
            });
        </script>
    </body>
</html>