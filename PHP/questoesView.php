<html>
<body>
<div class='jumbotron text-center'><h1> Criar Questões: </h1><br>
<a href="../PHP/perfildoprofessor.php"><button class="btn btn-primary" type='button' value='Back'>Back</button></a></div>



<div class="container">
<form action="questoesCtrl.php" method="post">
    <p>
        <label for="enunciado">Enunciado</label>
        <input type="text" name="enunciado" id="enunciado">
    </p>
    <p>
        <label for="opA">Opção A:</label>
        <input type="text" name="opA" id="opA">
    </p>
    <p>
        <label for="opB">Opção B</label>
        <input type="text" name="opB" id="opB">
    </p>
    <p>
        <label for="opC">Opção C</label>
        <input type="text" name="opC" id="op´C">
    </p>
    <p>
        <label for="opD">Opção D</label>
        <input type="text" name="opD" id="opD">
    </p>
    <p>
        <label for="gabarito">Gabarito</label>
        <input type="text"  name="gabarito" id="gabarito">
    </p>
    

    
    <button type="submit" value="submit" class="btn btn-primary">Enviar</button>
  <?php
        //session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>

</form>
</div>
    
</body>
</html>