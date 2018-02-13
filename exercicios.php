<?php include 'textos_exercicios.php'; ?>
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
                        <a class="dropdown-item" href="exercicios.php?idioma=pt-br"><img src="img/br.png">PT-BR</a>
                    </li>


                    <li>
                        <a  class="dropdown-item" href="exercicios.php?idioma=en"><img src="img/gb.png">EN</a>
                    </li>
                    <li>
                        <a  class="dropdown-item" href="exercicios.php?idioma=es"><img src="img/es.png">ES</a>
                    </li>
                </ul>
            </ul>
                    <h1 class="brand"><?php echo $textos [$_GET['idioma']]['home'];
                        ?></h1>
                    <nav class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav  pull-right">
                            <li>
                                <?php echo $textos [$_GET['idioma']]['home-index'];
                        ?>
                            </li>
                            <li class="active">
                                <?php echo $textos [$_GET['idioma']]['exercicios'];
                        ?>
                            </li>
                            <li>
                                <?php echo $textos [$_GET['idioma']]['hidra'];
                        ?>
                            </li>
                            <li>
                                <?php echo $textos [$_GET['idioma']]['alimentacao'];
                        ?>
                            </li>
                            <li>
                                <?php echo $textos [$_GET['idioma']]['concentracao'];
                        ?>
                            </li>
                            <li>
                                <?php echo $textos [$_GET['idioma']]['contato'];
                        ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <section class="parallax section3">
                <h1><?php echo $textos [$_GET['idioma']]['a'];
                        ?></h1> </section>
            <!--Início Modal 1-->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1> <?php echo $textos [$_GET['idioma']]['m1'];
                        ?></h1> </div>
                        <div class="modal-body">
                            <p style="font-family: 'PT Serif Caption', serif;"> <?php echo $textos [$_GET['idioma']]['modal1']; 
                                ?> </p>
                                <blockquote>https://new.reebokclub.com.br/modalidades/musculacao/</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!--Início Modal 2-->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1>Cardio</h1> </div>
                        <div class="modal-body">
                            <p style="font-family: 'PT Serif Caption', serif;"> <?php echo $textos [$_GET['idioma']]['modal2'];
                        ?>  </p>
                                <blockquote>https://new.reebokclub.com.br/modalidades/cardio/</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!--Início Modal 3-->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1>Cross Fit</h1> </div>
                        <div class="modal-body">
                            <p style="font-family: 'PT Serif Caption', serif;"> <?php echo $textos [$_GET['idioma']]['modal3'];
                                ?> </p>
                                <blockquote>https://new.reebokclub.com.br/modalidades/crossfit/</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!--Início Modal 4-->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1>Personal</h1> </div>
                        <div class="modal-body">
                              <p style="font-family: 'PT Serif Caption', serif;"> <?php echo $textos [$_GET['idioma']]['modal4'];
                        ?></p>
                                <blockquote>https://new.reebokclub.com.br/modalidades/personal/</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!--Início Modal 5-->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1> <?php echo $textos [$_GET['idioma']]['m5'];
                        ?> </h1> </div>
                        <div class="modal-body">
                            <p style="font-family: 'PT Serif Caption', serif;">  <?php echo $textos [$_GET['idioma']]['modal5'];
                                ?> </p> 
                                <blockquote>https://new.reebokclub.com.br/modalidades/ginastica/</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!--Início Modal 6-->
            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1><?php echo $textos [$_GET['idioma']]['m6'];
                        ?> </h1> </div>
                        <div class="modal-body">
                            <p style="font-family: 'PT Serif Caption', serif;"> <?php echo $textos [$_GET['idioma']]['modal6'];
                                ?> </p>
                                <blockquote>https://new.reebokclub.com.br/modalidades/luta/</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fim Modal-->
            <section id="atividades">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="maintitle">
                                <h1>      <?php echo $textos [$_GET['idioma']]['t-2'];
                        ?></h1>
                                <hr> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail  center-block"> <img src="img/d4.jpg">
                                    <div class="caption exe">
                                        <h1><?php echo $textos [$_GET['idioma']]['m1'];
                        ?></h1>
                                        <button type="button" class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
                                            <?php echo $textos [$_GET['idioma']]['b-saiba'];
                        ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/d5.jpg">
                                    <div class="caption exe">
                                        <h1>CARDIO</h1>
                                        <button type="button" class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
                                            <?php echo $textos [$_GET['idioma']]['b-saiba'];
                        ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/d6.jpg">
                                    <div class="caption exe">
                                        <h1>CROSS FIT</h1>
                                        <button type="button" class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
                                            <?php echo $textos [$_GET['idioma']]['b-saiba'];
                        ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/d9.jpg">
                                    <div class="caption exe">
                                        <h1>PERSONAL</h1>
                                        <button type="button" class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal4">
                                            <?php echo $textos [$_GET['idioma']]['b-saiba'];
                        ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/D8.jpg">
                                    <div class="caption exe">
                                        <h1> <?php echo $textos [$_GET['idioma']]['m5'];
                        ?> </h1>
                                        <button type="button" class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">
                                            <?php echo $textos [$_GET['idioma']]['b-saiba'];
                        ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/d3.jpg">
                                    <div class="caption exe">
                                        <h1><?php echo $textos [$_GET['idioma']]['m6'];
                        ?> </h1>
                                        <button type="button" class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal6">
                                            <?php echo $textos [$_GET['idioma']]['b-saiba'];
                        ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="parallax2" style="background-color: #000; opacity: 0.9 ">
                <h1><?php echo $textos [$_GET['idioma']]['agenda'];
                        ?></h1>
                <section id="dg">
                    <div class="container">
                        <div class="row">
                            <?php echo $textos [$_GET['idioma']]['semana'];
                        ?>
                        </div>
                    </div>
                </section>
            </section>
            <section id="time">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="maintitle">
                                <h1><?php echo $textos [$_GET['idioma']]['time'];
                        ?></h1>
                                <hr> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/t1.jpg"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/t2.jpg"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description">
                                <div class="thumbnail center-block"> <img src="img/t3.jpg"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="parallax3">
                <h1><?php echo $textos [$_GET['idioma']]['descubra'];
                        ?> </h1></section>
            <section id="contato" style="background-color: #000; opacity: 0.9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cform" id="me-form">
                                <?php echo $textos [$_GET['idioma']]['submit'];
                        ?>
                         
                                 <?php echo $textos [$_GET['idioma']]['form-exe'];
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <?php echo $textos[$_GET['idioma']]['footer-exe']; ?>
                  </footer>
            <div class="scroll-top-wrapper "> <span class="scroll-top-inner">
<i class="fa fa-2x fa-chevron-up"></i>  </span> </div>
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