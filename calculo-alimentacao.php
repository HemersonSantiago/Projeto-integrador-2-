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
    <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
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
                    <li>
                        <?php echo $textos_alimentacao [$_GET['idioma']]['home-index'];
                        ?>
                    </li>
                    <li>
                        <?php echo $textos_alimentacao [$_GET['idioma']]['exercicios'];
                        ?>
                    </li>
                    <li>
                        <?php echo $textos_alimentacao [$_GET['idioma']]['hidra'];
                        ?>
                    </li>
                    <li class="active">
                        <?php echo $textos_alimentacao [$_GET['idioma']]['alimentacao'];
                        ?>
                    </li>
                    <li>
                        <?php echo $textos_alimentacao [$_GET['idioma']]['concentracao'];
                        ?>
                    </li>
                    <li>
                        <?php echo $textos_alimentacao [$_GET['idioma']]['contato'];
                        ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="wrapper">
        <div class="frequencia">
                      <center> <h1 style="background-color: #f0bf00; opacity: 0.9"> <?php echo $textos_alimentacao [$_GET['idioma']]['resultado_t'];?> </h1></center>
                       <hr>
                            <?php include 'processa_alimentacao.php'; ?> 
<hr>
<?php echo $textos_alimentacao [$_GET['idioma']]['voltar_alim'];?>           


</div>


      
    </section>
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