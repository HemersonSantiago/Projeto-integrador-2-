<?php 
include 'textos_alimentacao.php'; 
if(!isset($_GET['idioma']))
{
    $_GET['idioma']='pt-br';
}
     $altura = $_POST['altura']; 
     $peso = $_POST['peso'];
     $idade = $_POST['idade'];
     $sexo = $_POST['sexo'];
     $atividade = $_POST['atividade'];
         if ($sexo == "feminino")
         {
          switch($atividade) 
            { case 'sedentario':
                $emg = sed_fem($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
              break; 
              case 'leve': 
                $emg = leve_fem($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
              break; 
              case 'moderada':
                $emg = mod_fem($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
              break; 
              case 'intensa':
                $emg = int_fem($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
              break;
              case 'ext_alta':
                $emg = ext_fem($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
              break;
           }
        }

        else
        { 
          switch($atividade) 
         {  case 'sedentario':
                $emg = sed_masc($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
            break; 
            case 'leve': 
                $emg = leve_masc($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
            break; 
            case 'moderada':
                $emg = mod_masc($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
            break; 
            case 'intensa':
                $emg = int_masc($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
            break;
            case 'ext_alta':
                $emg = ext_masc($peso,$altura,$idade) * 0.8;
                echo msg_manter()."<h2>".round(sed_fem($peso,$altura,$idade),0)."</h2>";
                echo msg_emag()."<h2>". round($emg,0)."</h2>";
            break;
         }
       }
         function sed_fem($peso,$altura,$idade) 
            { return (655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $idade) * 1.2); }
         function leve_fem($peso,$altura,$idade)
            { return (655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $idade) *  1.375); }
         function mod_fem($peso,$altura,$idade) 
            { return (655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $idade) *  1.55); }
         function int_fem($peso,$altura,$idade)
            { return (655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $idade) * 1.725); } 
         function ext_fem($peso,$altura,$idade)
            { return (655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $idade) *  1.9); }

        function sed_masc($peso,$altura,$idade) 
            { return (66 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade) *  1.2); }
        function leve_masc($peso,$altura,$idade)
            { return (66 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade) * 1.375); }
        function mod_masc($peso,$altura,$idade) 
            { return (66 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade) * 1.55); }
        function int_masc($peso,$altura,$idade)
            { return (66 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade) * 1.725); } 
        function ext_masc($peso,$altura,$idade)
            { return (66 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade) * 1.9); }                
        function msg_manter() 
            {
            include 'textos_alimentacao.php'; 
                echo $textos_alimentacao [$_GET['idioma']]['resposta_manter']; 
            }
        function msg_emag() 
            {
            include 'textos_alimentacao.php'; 
                echo $textos_alimentacao [$_GET['idioma']]['resposta_emagre'];
            }
?>