<?php include 'textos.php';
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
                        <a class="dropdown-item" href="index.php?idioma=pt-br"><img src="img/br.png">PT-BR</a>
                    </li>


                    <li>
                        <a  class="dropdown-item" href="index.php?idioma=en"><img src="img/gb.png">EN</a>
                    </li>
                    <li>
                        <a  class="dropdown-item" href="index.php?idioma=es"><img src="img/es.png">ES</a>
                    </li>
                </ul>
            </ul>
            <h1 class="brand"><?php echo $textos [$_GET['idioma']]['home'];
                        ?></h1>
            <nav class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav  pull-right">
                    <li class="active"><?php echo $textos [$_GET['idioma']]['home-index'];
                        ?></li>
                    <li><?php echo $textos [$_GET['idioma']]['exercicios'];
                        ?></li>
                    <li><?php echo $textos [$_GET['idioma']]['hidra'];
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
    <section class="parallax">
        <div class="wrapper">
            <div id="mensagem"> <a data-toggle="modal" data-target="#myModal-video" href="img/Strive.mp4"><i class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i></a>
                <center>
                    <h1><span><?php echo $textos [$_GET['idioma']]['viva'];?></span> <?php echo $textos [$_GET['idioma']]['estab'];
                        ?> </h1></center> <span>
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse" class="btn"><i class="fa fa-search"></i></a>
                            <div id="collapse" class="panel-collapse collapse fixed">
    <div class="cform" id="me-form"><input  type="text" name="pesquisa" placeholder="<?php echo $textos[$_GET['idioma']]['campo_busca']; ?> "></div>
      </div></span> </div>
        </div>
    </section>

<!--Início Modal Video-->
    <div class="modal fade" id="myModal-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 

             
                   <iframe width="100%" height="80%" src="https://www.youtube.com/embed/Afi2A7m4fWU" frameborder="0" allowfullscreen></iframe> 
      
    </div>


<!--Fim Modal Video-->


    <section class="sobre">
        <h1>
  <?php echo $textos [$_GET['idioma']]['sobre'];
                        ?>
</h1> </section>
    <section id="atividades">
        <h1> <?php echo $textos [$_GET['idioma']]['atividades'];
                        ?> </h1>
        <div class="row">
            <div class="container"> 
                <div class="col-md-3">
                    <div class="description">
                        <div class="thumbnail center-block"> <img src="img/d4.jpg">
                            <div class="caption"> <?php echo $textos [$_GET['idioma']]['exe-mais'];
                        ?> </div>
                            <h2><?php echo $textos [$_GET['idioma']]['exe1'];
                        ?></h2>
                            <h3 style="height: 6em;"> <?php echo $textos [$_GET['idioma']]['exe2'];
                        ?></h3> </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="description">
                        <div class="thumbnail center-block"> <img src="img/1-2.jpg">
                            <div class="caption"> <?php echo $textos [$_GET['idioma']]['hidra-mais'];
                        ?> </div>
                             <h2><?php echo $textos [$_GET['idioma']]['hidra1'];
                        ?></h2>
                           <h3 style="height: 6em;"><?php echo $textos [$_GET['idioma']]['hidra2'];
                        ?></h3> </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="description">
                        <div class="thumbnail center-block"> <img src="img/2.jpg">
                            <div class="caption"> <?php echo $textos [$_GET['idioma']]['alim-mais'];
                        ?></div>
                            <h2><?php echo $textos [$_GET['idioma']]['alim1'];
                        ?></h2>
                           <h3 style="height: 6em;"> <?php echo $textos [$_GET['idioma']]['alim2'];
                        ?></h3> </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="description">
                        <div class="thumbnail center-block"> <img src="img/bg_1.jpg">
                            <div class="caption"> <?php echo $textos [$_GET['idioma']]['conc-mais'];
                        ?> </div>
                             <h2><?php echo $textos [$_GET['idioma']]['conc1'];
                        ?></h2>
                            <h3 style="height: 6em;f"> <?php echo $textos [$_GET['idioma']]['conc2'];
                        ?></h3></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parallax section">
        <div id="plano">
            <h1><?php echo $textos [$_GET['idioma']]['planejamento'];?></h1>
       <div class="row">
                <div class="col-md-3">
                    <center>
                        <a href="#avaliacao" data-toggle="collapse" style="text-decoration:none; ">  <?php echo $textos [$_GET['idioma']]['row-plan_ava'];?> </a> 
                    </center> 
            <div id="avaliacao" class="collapse">
                <center><?php echo $textos [$_GET['idioma']]['cont_ava'];?>
                <a href="#avaliacao" data-toggle="collapse" style="color: #B2FF59;"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                </center>
           </div>
                </div>
           
           <div class="col-md-3">
                    <center>
                        <a href="#planejamento" data-toggle="collapse" style="text-decoration:none; ">  <?php echo $textos [$_GET['idioma']]['row-plan_plan'];?> </a> 
                    </center> 
            <div id="planejamento" class="collapse">
                    <center><?php echo $textos [$_GET['idioma']]['cont_plan'];?>
                    <a href="#planejamento" data-toggle="collapse" style="color: #B2FF59;"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                </center>
           </div>
        </div>
           
           <div class="col-md-3">
                    <center>
                        <a href="#metas" data-toggle="collapse" style="text-decoration:none; ">  <?php echo $textos [$_GET['idioma']]['row-plan_met'];?> </a> 
                    </center>    
            <div id="metas" class="collapse">
                <center><?php echo $textos  [$_GET['idioma']]['cont_met'];?>
                <a href="#metas" data-toggle="collapse" style="color: #B2FF59;"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                </center>
            
           </div>
        </div>
           
          <div class="col-md-3">
                    <center>
                        <a href="#evolucao" data-toggle="collapse" style="text-decoration:none; ">  <?php echo $textos [$_GET['idioma']]['row-plan_evo'];?> </a> 
              </center>     
            <div id="evolucao" class="collapse">
                <center><?php echo $textos  [$_GET['idioma']]['cont_evo'];?>
                    <a href="#evolucao" data-toggle="collapse" style="color: #B2FF59;"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                </center>
            
           </div>
        </div>
            </div>
            
            
            
        </div>
    </section>
 <!--Início Modal cardio-->
    <div class="modal fade" id="myModal-cardio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <section class="parallax3 banner">
                        <div class="exerci">
                            <center>
                            <h2><?php echo $textos [$_GET['idioma']]['t_calc_ex'];?></h2>
                            </center>
                        </div>
                    </section>
                </div>
                <div class="modal-body">
                   <section id="contato" style="background-color: #000; opacity: 0.9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cform" id="me-form">
                        <?php echo $textos [$_GET['idioma']]['form_ex'];?>
                          
                                <div class="col-md-12"> <span class="nome">
                <?php echo $textos [$_GET['idioma']]['nome_form_home'];?>
                </span> </div>
                                <div class="col-md-12"> <span class="email">
                <?php echo $textos [$_GET['idioma']]['email_form_home'];?>
                </span></div>    
                    <div class="col-md-12"> <span class="idade">
                <?php echo $textos [$_GET['idioma']]['idade_form_home'];?>
                </span> </div>
                                <div class="col-md-12"> 
                                    <span class="sexo">
                 <select type="text"  class="cform-text"  name="sexo">
          <option value="masculino"><?php echo $textos [$_GET['idioma']]['masc_form_home'];?></option>
             <option value="feminino"><?php echo $textos [$_GET['idioma']]['fem_form_home'];?></option>
                                    </select>
                </span> </div>
                            <center> <?php echo $textos [$_GET['idioma']]['calc_ex_home'];?> </center>
                        </form>   
                    </div>
                </div>

            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
    </div>

 <!--Fim Modal cardio-->


  <!--Início Modal calorias-->
    
    
<div class="modal fade" id="myModal-caloria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <section class="parallax" style="background-image: url(img/alim_ban_1.jpg); opacity: 0.9; " id="caloria">
                    <div class="cal">
                        <center>
                            <h1 style=" background-color:#0f580f">
                    <?php echo $textos [$_GET['idioma']]['t_calculo_alim_home'];?> </h1> </center>
                    </div> 
                    </section>
                </div>
                <div class="modal-body">
                    <section id="contato" style="background-color: #000; opacity: 0.9">
                        <div class="container">
            <div class="row">
              <div class="cform" id="me-form">
                  <?php echo $textos [$_GET['idioma']]['form_alim'];?>
                 <div class="col-md-12">
                                <div class="col-md-12"> <span class="nome">
                <?php echo $textos [$_GET['idioma']]['nome_form_home'];?>
                </span> </div>
                                <div class="col-md-12"> <span class="email">
                <?php echo $textos [$_GET['idioma']]['email_form_home'];?>
                </span></div>
                                <div class="col-md-12"> 
        <?php echo $textos [$_GET['idioma']]['peso_form_home'];?> <br/> 
        <?php echo $textos [$_GET['idioma']]['altura_form_home'];?><br/> 
        <?php echo $textos [$_GET['idioma']]['idade_form_home'];?> 
        </div>
                         <div class="col-md-12"> 
        <h3 class="subt_form_alim "> Nível de Atividade Física: </h3>
            <select type="text" name="atividade">
                <option value="sedentario" class="form_ativ_alim"> <?php echo $textos [$_GET['idioma']]['alim_input-sedentario'];?> <br>
                <option value="leve" class="form_ativ_alim"> <?php echo $textos [$_GET['idioma']]['alim_input-leve'];?> </option> <br>
                <option value="moderada" class="form_ativ_alim"> <?php echo $textos [$_GET['idioma']]['alim_input-moderada'];?> </option><br>
                <option value="intensa" class="form_ativ_alim"> <?php echo $textos [$_GET['idioma']]['alim_input-intensa'];?> </option> <br>
                <option value="ext_alta" class="form_ativ_alim"> <?php echo $textos [$_GET['idioma']]['alim_input-ext_alta'];?> </option> <br>
            </select>
         <br/> 
    <h3 class="subt_form_alim " > <?php echo $textos [$_GET['idioma']]['sexo_form_home'];?> </h3>
      <select type="text" name="sexo">
            <br /> <br/>
          <option value="feminino" class="form_sex_alim"> <?php echo $textos [$_GET['idioma']]['fem_form_home'];?> </option> <br>
          <option value="masculino" class="form_sex_alim"> <?php echo $textos [$_GET['idioma']]['masc_form_home'];?> </option><br>
              </select>
        <br/> <br/>
    </div>        
                            <center> <?php echo $textos [$_GET['idioma']]['calc_alim_home'];?> </center>
                     </form>
                  </div>
                </div>
                            </div>
                        </div>
                    </section>
                </div>
        </div>
    </div>
</div>
 <!--Fim Modal calorias-->

 <!--Início Modal hidratação-->
    <div class="modal fade" id="myModal-hidra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <section class="parallax" style="background-image: url(img/water123123.png);" id="caloria">
      
 <div class="agua">
                        <center>
                             <h2><?php echo $textos [$_GET['idioma']]['t_calc_hidra'];?> </h2></center>
                    </div>
              



        </section>


                    </div>
                <div class="modal-body">
                  <section id="contato" style="background-color: #000; opacity: 0.9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cform" id="me-form">
                       <?php echo $textos [$_GET['idioma']]['form_hid'];?>
                            <div class="row">
                                <div class="col-md-12"> <span class="nome">
                <?php echo $textos [$_GET['idioma']]['nome_form_home'];?>
                </span> </div>
                                <div class="col-md-12"> <span class="email">
               <?php echo $textos [$_GET['idioma']]['email_form_home'];?>
                </span></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> <span class="idade">
               <?php echo $textos [$_GET['idioma']]['idade_form_home'];?>
                </span> </div>
                               
                            </div>
                            <center>
                             <?php echo $textos [$_GET['idioma']]['calc_hid_home'];?>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

                </div>
            </div>
        </div>
    </div>

 <!--Fim Modal hidratação-->


  <!--Início Modal concentração-->
    <div class="modal fade" id="myModal-concentracao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <section class="parallax" id="quiz">
    
                    <div class="quiz">
                        <center>
                            <h1>  <?php echo $textos [$_GET['idioma']]['t_calc_conc'];?> </h1> </center>
                    </div>
              



       </section>


                    </div>
                <div class="modal-body">
                   <section id="contato" style="background-color: #000; opacity: 0.9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cform" id="me-form">
                       <?php echo $textos [$_GET['idioma']]['form_con'];?>
                            <div class="row">
                                <div class="col-md-12"> <span class="nome">
                 <?php echo $textos [$_GET['idioma']]['nome_form_home'];?>
                </span> </div>
                                <div class="col-md-12"> <span class="email">
                 <?php echo $textos [$_GET['idioma']]['email_form_home'];?>

                </span></div>
                            </div>



                            <div class="row">
                                
                         <div class="col-md-12"> 
      <p class="subt_form_q2">  <?php echo $textos [$_GET['idioma']]['concentracao_Q1'];?>  </p>
            <?php echo $textos [$_GET['idioma']]['conc_resp_1'];?>
         <br/> 
         <p class="subt_form_q2">  <?php echo $textos [$_GET['idioma']]['concentracao_Q2'];?> </p>
             <?php echo $textos [$_GET['idioma']]['conc_resp_2'];?>
         <br/> 
         <p class="subt_form_q2">  <?php echo $textos [$_GET['idioma']]['concentracao_Q3'];?></p>
            <?php echo $textos [$_GET['idioma']]['conc_resp_3'];?>
         <br/> 
         <p class="subt_form_q2">  <?php echo $textos [$_GET['idioma']]['concentracao_Q4'];?>  </p>
             <?php echo $textos [$_GET['idioma']]['conc_resp_4'];?>
         <br/> 
         <p class="subt_form_q2">  <?php echo $textos [$_GET['idioma']]['concentracao_Q5'];?></p>
            <?php echo $textos [$_GET['idioma']]['conc_resp_5'];?>
         <br/> 
  
    </div>        


 <div class="col-md-12"> 
        <p class="subt_form_q2"> <?php echo $textos [$_GET['idioma']]['concentracao_Q6'];?> </p>
             <?php echo $textos [$_GET['idioma']]['conc_resp_6'];?>
         <br/> 
         <p class="subt_form_q2">  <?php echo $textos [$_GET['idioma']]['concentracao_Q7'];?> </p>
             <?php echo $textos [$_GET['idioma']]['conc_resp_7'];?>
         <br/> 
         <p class="subt_form_q2"> <?php echo $textos [$_GET['idioma']]['concentracao_Q8'];?></p>
             <?php echo $textos [$_GET['idioma']]['conc_resp_8'];?>
         <br/> 
         <p class="subt_form_q2"> <?php echo $textos [$_GET['idioma']]['concentracao_Q9'];?> </p>
             <?php echo $textos [$_GET['idioma']]['conc_resp_9'];?>
         <br/> 
         <p class="subt_form_q2"> <?php echo $textos [$_GET['idioma']]['concentracao_Q10'];?>  </p>
             <?php echo $textos [$_GET['idioma']]['conc_resp_10'];?>   
         <br/> 
  
    </div>       
                            </div>
                        
                            <center>
                                <?php echo $textos [$_GET['idioma']]['calc_con_home'];?> </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
    </div>

 <!--Fim Modal concentração-->














    <section id="dg">
        <div class="container">
            <h1> <?php echo $textos [$_GET['idioma']]['diagnostico'];?></h1>

           <?php echo $textos [$_GET['idioma']]['row-diagnostico'];?> 
        
        </div>
    </section>
    <section id="contact" class="parallax section2">
        <h1> <?php echo $textos [$_GET['idioma']]['texto-contato'];?> </h1> </section>
    <section id="contato">
        <div class="container">
            <h1><?php echo $textos [$_GET['idioma']]['titulo-contato'];?>  </h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="cform" id="me-form">
                        <form action="#" method="post" class="cform-form">
                            <div class="row">
                                <div class="col-md-6"> <span class="nome">
                <?php echo $textos [$_GET['idioma']]['input-nome'];?> 
                </span> </div>
                                <div class="col-md-6"> <span class="email">

                    <?php echo $textos [$_GET['idioma']]['input-email'];?> 
                
                </span> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> <span class="mensagem">
                <textarea name="mensagem" class="cform-textarea" cols="40" rows="10" title=""></textarea>
                </span> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <center>
                                     <?php echo $textos [$_GET['idioma']]['enviar'];?>
                                         </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
     <?php echo $textos [$_GET['idioma']]['footer'];?> 
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