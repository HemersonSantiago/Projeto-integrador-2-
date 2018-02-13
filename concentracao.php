<?php 
  include 'textos_concentracao.php';

  if(!isset($_GET['idioma'])){
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
                    <li class="active"><?php echo $textos_concentracao [$_GET['idioma']]['concentracao'];
                        ?></li>
                    <li><?php echo $textos_concentracao [$_GET['idioma']]['contato'];
                        ?></li>
                </ul>
            </nav>
        </div>
    </div>
    <hr>
    <section class="parallax section-con">
       <h1> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_titulo']; ?></h1> </section>

         <section id="concentracao">
        <h1><?php echo $textos_concentracao [$_GET['idioma']]['concentracao_titulo2']; ?></h1>

        <div class="row">
            <div class="container">
                <div class="col-md-4">
                    <div class="description">
                        <div class="thumbnail" style="height:35em;"> <img src="img/concentracao-mental.jpeg">  <h2  style="height:2.5em;"><?php echo $textos_concentracao [$_GET['idioma']]['titulo_modal01']; ?></h2>
                                             
                                                    <!-- Button trigger modal 01 -->
                    <button type="button" class="btn-c btn-lg" data-toggle="modal" data-target="#myModal">
                      <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_clique']; ?>
                    </button>
                            
                                                                    <!-- Modal 01 -->
                            
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1><?php echo $textos_concentracao [$_GET['idioma']]['titulo_modal01']; ?></h1>
                                  </div>
                                  <div class="modal-body">
                                      <div style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em; color:black;">
                                          <?php echo $textos_concentracao [$_GET['idioma']]['texto_modal01']; ?></div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn-c btn-lg" data-dismiss="modal"><?php echo $textos_concentracao [$_GET['idioma']]['concentracao_fechar']; ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-4">
                    <div class="description">
                        <div class="thumbnail" style="height:35em;"> <img src="img/cinco-dicas.jpg">    <h2  style="height:2.5em;"><?php echo $textos_concentracao [$_GET['idioma']]['titulo_modal02']; ?></h2>
                            
                                                      <!-- Button trigger modal 02 -->
                    <button type="button" class="btn-c btn-lg" data-toggle="modal" data-target="#myModal02">
                      <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_clique']; ?>
                    </button>
                            
                                                                <!-- Modal 02 -->
                            
                           <div class="modal fade" id="myModal02" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1 class="modal-title"><?php echo $textos_concentracao [$_GET['idioma']]['titulo_modal02']; ?></h1>
                                  </div>
                                  <div class="modal-body">                                      
                                      <div style="font-family: 'PT Serif Caption', serif; font-size: 1.2em; line-height:1.8em; color:black;">
                                          <?php echo $textos_concentracao [$_GET['idioma']]['texto_modal02']; ?></div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn-c btn-lg" data-dismiss="modal"><?php echo $textos_concentracao [$_GET['idioma']]['concentracao_fechar']; ?></button>
                                  </div>
                                </div>
                              </div>
                            </div> 
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="description">
                        <div class="thumbnail"style="height:35em;"> <img src="img/concentracao-estudos.jpg">    <h2  style="height:2.5em;"><?php echo $textos_concentracao [$_GET['idioma']]['titulo_modal03']; ?></h2>                            
                     
                                                      <!-- Button trigger modal 03 -->
                    <button type="button" class="btn-c btn-lg" data-toggle="modal" data-target="#myModal03">
                      <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_clique']; ?>
                    </button>
                            
                                                            <!-- Modal 03 -->
                            
                            <div class="modal fade" id="myModal03" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1 class="modal-title"><?php echo $textos_concentracao [$_GET['idioma']]['titulo_modal03']; ?></h1>
                                  </div>
                                  <div class="modal-body">
                                      <div style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em; color:black;">
                                          <?php echo $textos_concentracao [$_GET['idioma']]['texto_modal03']; ?></div> 
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn-c btn-lg" data-dismiss="modal"><?php echo $textos_concentracao [$_GET['idioma']]['concentracao_fechar']; ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <section class="foco"> 
     


         <div class="col-md-12 col-xs-12 col-sm-12 col-md-6 col-md-6 col-lg-5 col-lg-offset-1"> <img src="img/y001.jpg" alt="Imagem" class="img-responsive"> </div>


        
              <div class=" col-md-12 col-xs-12 col-sm-12 col-md-6 col-md-6 col-lg-5 col-lg-offset-1"> 
                    <h2><?php echo $textos_concentracao [$_GET['idioma']]['titulo_texto01']; ?></h2><br>
                  <div style="font-family: 'PT Serif Caption', serif; font-size: 1.5em; line-height:1.8em; " style="font-size:1.75em; color:black;"><?php echo $textos_concentracao [$_GET['idioma']]['texto01']; ?></div>
         </div>


  </section>



  <section class="wrapper parallax" id="foco" style="background-image: url(img/y3.jpg);">
           
                    
                             <div class="col-md-12 col-xs-12 col-sm-12 col-md-6 col-md-6 col-lg-5 col-lg-offset-1 pull-right" style="background:#aae7ef; opacity:0.9; border-left: 2px solid #e24886; height: 40em;"> 
                    <h2><?php echo $textos_concentracao [$_GET['idioma']]['titulo_texto02']; ?></h2><br>
                                 <div style="font-family: 'PT Serif Caption', serif; font-size: 1.4em; line-height:1.8em; " style="font-size:1.75em; color:black;"><?php echo $textos_concentracao [$_GET['idioma']]['texto02']; ?></div>
                                 
                                                            <!-- Button trigger modal 04 -->
                            <button style="background: #e24886; margin-top: 2em;" type="button" class="btn-c btn-lg center-block" data-toggle="modal" data-target="#myModal04">
                                  <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_clique']; ?>
                                </button>
                              </div>   
    
                        </section>
                                                                  <!-- Modal 04 -->
                                 
                                <div class="modal fade" id="myModal04" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h1 style="color: #e24886" class="modal-title" id="myModalLabel"><?php echo $textos_concentracao [$_GET['idioma']]['titulo_modal04']; ?></h1>
                                      </div>                        
                                      <div class="modal-body">
                                          <div style="font-family: 'PT Serif Caption', serif; font-size: 1.2em; line-height:1.8em; color:black;">
                                              <?php echo $textos_concentracao [$_GET['idioma']]['texto_modal04']; ?>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn-c btn-lg" data-dismiss="modal"><?php echo $textos_concentracao [$_GET['idioma']]['concentracao_fechar']; ?></button>
                                      </div>
                                    </div>
                                  </div>
                                </div>                    
                                                                  
        


<section class="parallax" id="quiz">
    
                    <div class="quiz">
                        <center>
                            <h1> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_TITULO']; ?> </h1> </center>
                    </div>
              



       </section>
    <section id="contato" style="background-color: #000; opacity: 0.9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cform" id="me-form">
                        <?php echo $textos_concentracao [$_GET['idioma']]['FORM']; ?> 
                            <div class="row">
                                <div class="col-md-6"> <span class="nome">
                <input type="text" name="nome" placeholder="Digite seu Nome" class="cform-text" size="40" title="nome">
                </span> </div>
                                <div class="col-md-6"> <span class="email">
                <input type="text" name="email" placeholder="Digite seu Email" class="cform-text" size="10" title="email">

                </span></div>
                            </div>



                            <div class="row">
                                
                         <div class="col-md-6"> 
        <h2  class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q1']; ?> </h2>
             <input type="text" name="q1" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q1">
         <br/> 
         <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q2']; ?> </h2>
             <input type="text" name="q2" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q2">
         <br/> 
         <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q3']; ?> </h2>
             <input type="text" name="q3" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q3">
         <br/> 
         <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q4']; ?> </h2>
             <input type="text" name="q4" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q4">
         <br/> 
         <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q5']; ?> </h2>
             <input type="text" name="q5" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q5">
         <br/> 
  
    </div>        


 <div class="col-md-6"> 
        <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q6']; ?> </h2>
             <input type="text" name="q6" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q6">
         <br/> 
         <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q7']; ?> </h2>
             <input type="text" name="q7" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q7">
         <br/> 
         <h2 class="subt_form_q"><?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q8']; ?></h2>
             <input type="text" name="q8" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q8">
         <br/> 
         <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q9']; ?></h2>
             <input type="text" name="q9" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q9">
         <br/> 
         <h2 class="subt_form_q"> <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_Q10']; ?> </h2>
             <input type="text" name="q10" placeholder="<?php echo $textos_concentracao [$_GET['idioma']]['concentracao_resposta']; ?>" class="cform-text" size="10" title="q10">
         <br/> 
  
    </div>        




                            </div>
                            <center>
                                <?php echo $textos_concentracao [$_GET['idioma']]['concentracao_CALCULAR']; ?>
                                </center>

                    </div>
                </div>
            </div>
        </div>
    </section>










    <footer>
     <?php echo $textos_concentracao [$_GET['idioma']]['footer'];?> 
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