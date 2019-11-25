<?php
    
    require "questoes.php";
    $enunciado = $_POST["enunciado"];
    $opA = $_POST["opA"];
    $opB = $_POST["opB"];
    $opC = $_POST["opC"];
    $opD = $_POST["opD"];
    $gabarito = $_POST["gabarito"];
  session_start();
    if ((empty($enunciado)) || (empty($opA)) || (empty($opB)) || (empty($opC)) || (empty($opD)) || (empty($gabarito)) || (empty($tipo))) {
        $erro = "Complementary data missing";        
        $_SESSION["erro"] = $erro;
        header("Location: questoesView.php");
        exit();
    }
    if (($gabarito != 'A')&&($gabarito != 'B')&&($gabarito != 'C')&&($gabarito != 'D')){
        $erro = "Gabarito Incorreto :( ";        
        $_SESSION["erro"] = $erro;
        header("Location: questoesView.php");
        exit();
    }
  if (enviarQuestao($enunciado, $opA, $opB, $opC, $opD, $gabarito) == true) {
        header("Location: questoesView.php");
        exit();
    } else {
        $erro = "Esta questão já foi enviada. Tente outra!";        
        $_SESSION["erro"] = $erro;
        header("Location: questoesView.php");
        exit();
    }
?>
