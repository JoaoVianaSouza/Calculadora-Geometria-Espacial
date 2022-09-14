<?php
    $op = $_GET ['op'];

    //Calculo área do Triângulo
    if($op == 1){
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        $um = $_GET['um'];
        $area = $base * $altura / 2;

        echo "
        <html>
            <link rel='stylesheet' href='style.css'>
            <fieldset id='hp'><legend id='lg'>Área do triângulo</legend>
                <h3>Dados Calculados:</h3>
                Base: $base <br>
                Altura: $altura <br>
                Área: $area$um ² <br>
                <a href='inicial.html'><input type='button' value='Novo Cálculo' id='back'></a>
                </form>
            </fieldset>
            <div id='triangulo'>
                <a href='https://github.com/JoaoZalli' target='_blank'>
                    <img src='imagens/triangulo.png' alt='formula triangulo'>
                </a>
            </div>
        </html> 
        ";
    }

    //Calculo volume da Pirâmide
    $op = $_GET ['op'];
    if($op == 2){
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        $um = $_GET['um'];
        $volume = ($base*$altura)/3;
        //O comando "round" nos indica arredondamento. Temos que colocar a variavel a ser arredondada na frente e depois o número de casas a serem impressas para o usuário.
        $numero =  round ($volume,1);
        $volume = $numero;

        echo"
        <html>
            <link rel='stylesheet' href='style.css'>
            <fieldset id='hp'><legend id='lg'>Volume da Pirâmide</legend>
                <h3>Dados Calculados:</h3>
                Área da Base: $base <br>
                Altura: $altura <br>
                Volume: $numero$um ³ <br>
                <a href='inicial.html'><input type='button' value='Novo Cálculo' id='back'></a>
                </form>
            </fieldset>
            <div id='piramide'>
                <a href='https://github.com/JoaoZalli' target='_blank'> 
                    <img src='imagens/piramide.png' alt='formula piramide'>
                </a>
            </div>
        </html> 
        ";
    }
    //Calculo volume da Esfera
    $op = $_GET ['op'];
    if($op == 3){
        $raio = $_GET['raio'];
        $um = $_GET['um'];
        $volume = (4/3*($raio**3));
        $numero =  round ($volume,1);
        $volume = $numero;

        echo"
        <html>
            <link rel='stylesheet' href='style.css'>
            <fieldset id='hp'><legend id='lg'>Volume da Pirâmide</legend>
                <h3>Dados Calculados:</h3>
                Raio: $raio <br>
                Volume: $numero.π $um ³  <br>
                <a href='inicial.html'><input type='button' value='Novo Cálculo' id='back'></a>
                </form>
            </fieldset>
            <div id='esfera'>
                <a href='https://github.com/JoaoZalli' target='_blank'> 
                    <img src='imagens/esfera.jpg' alt='formula esfera'>
                </a>
            </div>   
        </html> 
        ";
    }
?>