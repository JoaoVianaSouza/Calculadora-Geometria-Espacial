<?php
    $op = $_GET['op'];
    if($op == 1){
        echo"
        <html>
            <link rel='stylesheet' href='style.css'>
            <fieldset id='hp'><legend id='lg'>Calculadora Geométrica</legend>
                <form action='calculo.php' method='get'>
                    <h3>Digite os dados</h3>
                    Base:<input type='text' name='base'><br>
                    Altura:<input type='text' name='altura'><br>
                    Unidade de medida:<input type='text' name='um'><br>
                    <input type=hidden name=op value= $op>
                    <input type='submit' value='Enviar' id='enviar'>
                    <input type='reset' value='Limpar' id='reset'>
                </form>
            </fieldset>
            <a href='https://github.com/JoaoZalli' target='_blank'>
                <img src='imagens/calculator.jpg' alt='calculadora' id='calculator'>
            </a>
        </html> 
        ";
    }

    $op = $_GET['op'];
    if($op == 2){
        echo"
        <html>
            <link rel='stylesheet' href='style.css'>
            <fieldset id='hp'><legend id='lg'>Calculadora Geométrica</legend>
                <form action='calculo.php' method='get'>
                    <h3>Digite os dados</h3>
                    Área da Base:<input type='text' name='base'><br>
                    Altura:<input type='text' name='altura'><br>
                    Unidade de medida:<input type='text' name='um'><br>
                    <input type=hidden name=op value= $op>
                    <input type='submit' value='Enviar' id='enviar'>
                    <input type='reset' value='Limpar' id='reset'>
                </form>
            </fieldset>
            <a href='https://github.com/JoaoZalli' target='_blank'>
                <img src='imagens/calculator.jpg' alt='calculadora' id='calculator'>
            </a>
        </html> 
        ";
    }
    $op = $_GET['op'];
    if($op == 3){
        echo"
        <html>
            <link rel='stylesheet' href='style.css'>
            <fieldset id='hp'><legend id='lg'>Calculadora Geométrica</legend>
                <form action='calculo.php' method='get'>
                    <h3>Digite os dados</h3>
                    Raio:<input type='text' name='raio'><br>
                    Unidade de medida:<input type='text' name='um'><br>
                    <input type=hidden name=op value= $op>
                    <input type='submit' value='Enviar' id='enviar'>
                    <input type='reset' value='Limpar' id='reset'>
                </form>
            </fieldset>
            <a href='https://github.com/JoaoZalli' target='_blank'>
                <img src='imagens/calculator.jpg' alt='calculadora' id='calculator'>
            </a>
        </html> 
        ";
    }
?>