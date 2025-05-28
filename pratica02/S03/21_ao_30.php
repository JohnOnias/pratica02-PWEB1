<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>02</title>
  <style>
    body {
      margin: 0px;
      height: 100vh;
      display: flex;
      justify-content: center;
      text-align: center;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

   
  </style>
</head>

<body>
  <div class="centro">
    
    <?php
     print("<h1> Seção 3: Estruturas de Repetiçao (for, while, do..while)</h1> <br>");
    // 21
    print("<h3> 21 - Contagem Regressiva Simples: </h3> <br>");

    for($i = 10; $i >= 0; $i--){
        print($i);
        print("<br>"); 
    }
    // 22
    print("<h3> 22 - Itens Pares em Lista: </h3> <br>");
    for($i = 2; $i <=20; $i++){
        if($i%2 == 0){
            print("<p> numero par: " .$i. "!</p>");
        }
    }
    // 23
    print("<h3> 22 - Preparando pra Lançamento: </h3> <br>");

    for($i = 5; $i >= 0; $i--){
        print($i);
        print("<br>"); 
        if($i ==0){
            print("Lançamento!");
        }
    }
    // 24
    print("<h3> 24 - Processamento Limitado: </h3> <br>");
    for($i = 0; $i <= 100; $i++){
        print("<p> Processando Item ".$i. "!</p>");
        if($i == 50){
            print("<p> Processamento limitado!</p>");
            break;
        }
     
    }
    // 25
    print("<h3> 25 - Exceção em Relatorio: </h3> <br>");

    $dicionario = [
        '1' => ['nome' => 'Joao', 'matricula' => '11111', 'nota' => 5],
        '2' => ['nome' => 'José', 'matricula' => '22222', 'nota' => 7],
        '3' => ['nome' => 'Pedro', 'matricula' => '33333', 'nota' => 8],
        '4' => ['nome' => 'Gabriel', 'matricula' => '44444', 'nota' => 4],
        '5' => ['nome' => 'Rafel', 'matricula' => '55555', 'nota' => 6],
        '6' => ['nome' => 'Maria', 'matricula' => '66666', 'nota' => 10],
        '7' => ['nome' => 'Joana', 'matricula' => '77777', 'nota' => 9],
        '8' => ['nome' => 'Miguel', 'matricula' => '88888', 'nota' => 5],
        '9' => ['nome' => 'Marcela', 'matricula' => '99999', 'nota' => 8],
        '10' => ['nome' => 'Lucas', 'matricula' => '101010', 'nota' => 7]
    ];

    $qtd = count($dicionario);
    for($i = 1; $i <= $qtd; $i++) {
        print( "<p>Nome: ". $dicionario[$i]['nome']. ".  Matricula: ". $dicionario[$i]['matricula']. ". Nota em PWEB1: ". $dicionario[$i]['nota']. "</p>");
        
    }


?>
  </div>


</body>

</html>