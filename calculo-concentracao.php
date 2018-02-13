<?php include 'textos_concentracao.php'; ?>
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
     </head>

<body>
 <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span> </button>
             <ul class="dropdown idioma pull-right">
                <a href="#"   class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php echo $textos_concentracao [$_GET['idioma']]['bandeira'];?>
                       <span class="caret"></span></a> 
                <ul class="dropdown-menu">
                     <li>
                        <a class="dropdown-item" href="concentracao.php?idioma=pt-br"><img src="img/br.png">PT-BR</a>
                    </li>


                    <li>
                        <a  class="dropdown-item" href="concentracao.php?idioma=en"><img src="img/gb.png">EN</a>
                    </li>
                    <li>
                        <a  class="dropdown-item" href="concentracao.php?idioma=es"><img src="img/es.png">ES</a>
                    </li>
                </ul>
            </ul>
            <h1 class="brand"><?php echo $textos_concentracao [$_GET['idioma']]['home'];
                        ?></h1>
           <nav class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav  pull-right">
                    <li ><?php echo $textos_concentracao [$_GET['idioma']]['home-index'];
                        ?></li>
                    <li><?php echo $textos_concentracao [$_GET['idioma']]['exercicios'];
                        ?></li>
                    <li><?php echo $textos_concentracao [$_GET['idioma']]['hidra'];
                        ?></li>
                    <li><?php echo $textos_concentracao [$_GET['idioma']]['alimentacao'];
                        ?></li>
                    <li  class="active"><?php echo $textos_concentracao [$_GET['idioma']]['concentracao'];
                        ?></li>
                    <li><?php echo $textos_concentracao [$_GET['idioma']]['contato'];
                        ?></li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="wrapper">
        <div class="foco_con">
         
            
                   
                      <center> <h1 style="background-color: #aae7ef; opacity: 0.9"> <?php echo $textos_concentracao [$_GET['idioma']]['t_result_con'];
                        ?> </h1></center>
                       <hr>
                        <?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];


 echo " <h2> ".$nome."</h2></br>";
  echo " <h2> ".$email."</h2></br>";


 echo " <h2>1. ".$q1. $textos_concentracao [$_GET['idioma']]['resp1'] . "</h2>";
 echo " <h2>2. ".$q2. $textos_concentracao [$_GET['idioma']]['resp2'] ."</h2>";
 echo " <h2>3. ".$q3. $textos_concentracao [$_GET['idioma']]['resp3']. "</h2>";
 echo " <h2>4. ".$q4. $textos_concentracao [$_GET['idioma']]['resp4']. "</h2>";
 echo " <h2>5. ".$q5. $textos_concentracao [$_GET['idioma']]['resp5']. "</h2>";
 echo " <h2>6. ".$q6. $textos_concentracao [$_GET['idioma']]['resp6']. "</h2>";
 echo " <h2>7. ".$q7. $textos_concentracao [$_GET['idioma']]['resp7']. "</h2>";
 echo " <h2>8. ".$q8. $textos_concentracao [$_GET['idioma']]['resp8']. "</h2>";
 echo " <h2>9. ".$q9. $textos_concentracao [$_GET['idioma']]['resp9']. "</h2>";
 echo " <h2>10. ".$q10. $textos_concentracao [$_GET['idioma']]['resp10']. "</h2>";
 





?> 
<hr>
 <center>  <?php echo $textos_concentracao [$_GET['idioma']]['voltar'];?> </center>              


</div>


      
    </section>
  
   

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

    <footer>
     <?php echo $textos_concentracao [$_GET['idioma']]['footer'];?> 
        </footer>
  
</body>

</html>