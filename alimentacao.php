<?php include 'textos_alimentacao.php'; 
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
    <!--NAVEGAÇÃO-->
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span> </button>
             <ul class="dropdown idioma pull-right">
                <a href="#"   class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php echo $textos_alimentacao [$_GET['idioma']]['bandeira'];?>
                       <span class="caret"></span></a> 
                <ul class="dropdown-menu">
                     <li>
                        <a class="dropdown-item" href="alimentacao.php?idioma=pt-br"><img src="img/br.png">PT-BR</a>
                    </li>


                    <li>
                        <a  class="dropdown-item" href="alimentacao.php?idioma=en"><img src="img/gb.png">EN</a>
                    </li>
                    <li>
                        <a  class="dropdown-item" href="alimentacao.php?idioma=es"><img src="img/es.png">ES</a>
                    </li>
                </ul>
            </ul>
            <h1 class="brand">
                <?php echo $textos_alimentacao [$_GET['idioma']]['home'];?>
            </h1>
            <nav class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav  pull-right">
                    <li> <?php echo $textos_alimentacao [$_GET['idioma']]['home-index'];?> </li>
                    <li> <?php echo $textos_alimentacao [$_GET['idioma']]['exercicios'];?> </li>
                    <li> <?php echo $textos_alimentacao [$_GET['idioma']]['hidra'];?></li>
                    <li class="active"><?php echo $textos_alimentacao [$_GET['idioma']]['alimentacao'];?></li>
                    <li> <?php echo $textos_alimentacao [$_GET['idioma']]['concentracao'];?></li>
                    <li> <?php echo $textos_alimentacao [$_GET['idioma']]['contato'];?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- FIM DA NAVEGAÇÃO-->
    <hr>
    <section class="parallax section_alim" style="background-image: url(img/alim_ban_1.jpg);">
        <center>
            <h1 style="background-color: rgba(255, 255, 255, 0.4); color: #0b333f;">
                <?php echo $textos_alimentacao [$_GET['idioma']]['alimentacao_titulo']; ?> </h1>
        </center>
    </section>
    <!-- PRIMEIRA IMAGEM E TEXTO-->
    <section class="alimentacao">
        <div class="col-md-12 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-lg-offset-1" style="margin-top:3%;"> <img src="img/alim_img_1.jpg" alt="Imagem" class="img-responsive center-block img1_alim"> </div>
        <div class="text1_alim col-md-12 col-xs-12 col-sm-12 col-md-6 col-lg-5 col-lg-offset-1">
            <h2 style="margin-left:2%;"> 
                <?php echo $textos_alimentacao [$_GET['idioma']]['saudavel'];?> 
            </h2>
            <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em; "> 
                <?php echo $textos_alimentacao [$_GET['idioma']]['texto_intro'];?>
            </p>
        </div>
    </section>
    <hr style="margin-top:9%;">
    <section class="alimentacao"> 
        <div class="text2_alim col-md-12 col-xs-12 col-sm-12 col-md-6 col-lg-5 col-lg-offset-1">
            <h2>
                <?php echo $textos_alimentacao [$_GET['idioma']]['titulo-1']; ?> 
            </h2>
            <h1 style="margin-top:6%; margin-left:2%; font-size: 1.8em;">
                <?php echo $textos_alimentacao [$_GET['idioma']]['dica1']; ?> 
            </h1>
            <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em; ">
                <?php echo $textos_alimentacao [$_GET['idioma']]['texto1'];?>
            </p>
            <a href="#habitos" class="btn btn-info" data-toggle="collapse"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i> </a>
            <div id="habitos" class="collapse">
                <h1 style="font-size: 1.8em; margin-left: 2%;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['dica4']; ?> 
                </h1>
                <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em; ">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['texto4'];?>
                </p>
                <h1 style="font-size: 1.8em; margin-left: 2%;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['dica5']; ?> 
                </h1>
                <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['texto5'];?>
                </p>
                <h1 style="font-size: 1.8em; margin-left: 2%;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['dica6']; ?> 
                </h1>
                <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['texto6'];?>
                </p>
                <h1 style="font-size: 1.8em; margin-left: 2%;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['dica8']; ?> 
                </h1>
                <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em; ">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['texto8'];?>
                </p>
                <h1 style="font-size: 1.8em; margin-left: 2%;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['dica14']; ?> 
                </h1>
                <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['texto14'];?>
                </p>
                <center>
                <a href="#habitos" class="btn btn-info" data-toggle="collapse"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                    </center>
            </div>
        </div>
        <!-- SEGUNDA IMAGEM E TEXTO-->
        <div class="col-md-12 col-xs-12 col-sm-12 col-md-6 col-md-offset-0 col-lg-5" style="margin-top:1%;"> <img src="img/alim_img_2.jpg" alt="Imagem" class="img-responsive center-block img2_alim"> </div>
    </section>
    <hr style="margin-top:9%; margin-bottom:-5%;">
    <section class="wrapper parallax" id="alim" style="background-image: url(img/alim_ban_2.jpg);">
        <div class="row">
            <center>
                <div class="col-md-12 col-xs-12 col-sm-12 col-md-6 col-md-6 col-lg-5 col-lg-offset-1" style="background:#f0bf00; opacity:0.9; margin-top:-3%;">
                    <h2> <?php echo $textos_alimentacao [$_GET['idioma']]['titulo-2']; ?> </h2>
                    <h2 style="font-size: 1.8em; margin-left: 2%;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['dica3']; ?> </h2>
                    <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['texto3'];?>
                    </p>
                    <a href="#preferir" class="btn btn-info" data-toggle="collapse"> <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i> </a>
                    <div id="preferir" class="collapse">

                        <h2 style="font-size: 1.8em;">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['dica2']; ?> </h2>
                        <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['texto2'];?>
                        </p>
                        <h2 style="font-size: 1.8em; ">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['dica7']; ?> </h2>
                        <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['texto7'];?>
                        </p>
                        <h2 style="font-size: 1.8em; ">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['dica12']; ?> </h2>
                        <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['texto12'];?>
                        </p>
                        <h2 style="font-size: 1.8em; ">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['dica15']; ?> </h2>
                        <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                            <?php echo $textos_alimentacao [$_GET['idioma']]['texto15'];?>
                        </p>
                        <a href="#preferir" class="btn btn-info" data-toggle="collapse"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </center>
        </div>
        <br>
        <!--COMEÇO DO PARALLAX - DICAS -->
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-md-6 col-md-offset-6 col-lg-5 col-lg-offset-6" style="background:#fff; opacity:0.9; margin-bottom:3%;">
                <h2 style="font-size: 1.8em; margin-left: 2%;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['titulo-3']; ?> </h2>
                <h2 style="font-size: 1.8em; margin-left: 2%;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['dica16']; ?> </h2>
                <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['texto16'];?>
                </p>
                <a href="#evitar" class="btn btn-info" data-toggle="collapse"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i> </a>
                <div id="evitar" class="collapse">
                    <h2 style="font-size: 1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['dica9']; ?> </h2>
                    <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['texto9'];?>
                    </p>
                    <h2 style="font-size: 1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['dica10']; ?> </h2>
                    <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['texto10'];?>
                    </p>
                    <h2 style="font-size: 1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['dica11']; ?> </h2>
                    <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['texto11'];?>
                    </p>
                    <h2 style="font-size: 1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['dica13']; ?> </h2>
                    <p style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em;">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['texto13'];?>
                    </p>
                    <a href="#evitar" class="btn btn-info" data-toggle="collapse"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--FORMULÁRIO-->
    <section class="parallax" style="background-image: url(img/alim_ban_1.jpg);" id="caloria">
        <div class="cal">
            <center>
                <h1 style=" background-color:#0f580f">
                    <?php echo $textos_alimentacao [$_GET['idioma']]['t_calculo_alimentacao'];?> </h1>
            </center>
        </div>
    </section>
    <section id="contato" style="background-color: #000; opacity: 0.9;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cform" id="me-form">
                       <?php echo $textos_alimentacao [$_GET['idioma']]['submit'];?>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="nome">
                                        <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-nome'];?>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="email">
                                        <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-email'];?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-peso'];?> <br/>
                                    <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-altura'];?> <br/>
                                    <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-idade'];?>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="subt_form_alim">
                                        <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-atividade_t'];?> </h2>
                                    <select type="text" name="atividade">
                                        <option value="sedentario" class="form_ativ_alim"> <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-sedentario'];?> </option> <br>
                                        <option value="leve" class="form_ativ_alim"> <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-leve'];?> </option><br>
                                        <option value="moderada" class="form_ativ_alim"> <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-moderada'];?> </option><br>
                                        <option value="intensa" class="form_ativ_alim"> <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-intensa'];?></option><br>
                                        <option value="ext_alta" class="form_ativ_alim"> <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-ext_alta'];?></option><br>
                                    </select> <br/>
                                    <h2 class="subt_form_alim">
                                        <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-sexo'];?> </h2>
                                    <select type="text" name="sexo"> <br/> <br/>
                                        <option value="feminino" class="form_sex_alim"> <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-fem'];?></option><br>
                                        <option value="masculino" class="form_sex_alim"> <?php echo $textos_alimentacao [$_GET['idioma']]['alim_input-masc'];?> </option><br>
                                    </select> <br/> <br/>
                                </div>
                            </div>
                            <center>
                                <?php echo $textos_alimentacao [$_GET['idioma']]['calcular_alim'];?>
                            </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--FOOTER-->
     <footer>
     <?php echo $textos_alimentacao [$_GET['idioma']]['footer'];?> 
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
        $(document).ready(function() {
            $("[rel='tooltip']").tooltip();
            $('.thumbnail').hover(function() {
                $(this).find('.caption').fadeIn(250)
            }, function() {
                $(this).find('.caption').fadeOut(205)
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            $(function() {
                $(document).on('scroll', function() {
                    if ($(window).scrollTop() > 100) {
                        $('.scroll-top-wrapper').addClass('show');
                    } else {
                        $('.scroll-top-wrapper').removeClass('show');
                    }
                });
                $('.scroll-top-wrapper').on('click', scrollToTop);
            });

            function scrollToTop() {
                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
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
