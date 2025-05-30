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
        // 26
    print("<h3> 26 - Entrada de dados repetitiva: </h3> <br>");
      $lista = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0); 
      $aux = 10; 
      do{
          print("<p> Pedidno Informação!...". $lista[$aux]. "</p>");
          $aux--;
      }while($aux >=0);


    // 27
    print("<h3> 27 - Listagem de Participantes: </h3> <br>");
        $participantes = [
        '1' => ['nome' => 'Joao'],
        '2' => ['nome' => 'José'],
        '3' => ['nome' => 'Pedro'],
        '4' => ['nome' => 'Gabriel'],
        '5' => ['nome' => 'Rafel'],
        '6' => ['nome' => 'Maria'],
        '7' => ['nome' => 'Joana'],
        '8' => ['nome' => 'Miguel'],
        '9' => ['nome' => 'Marcela'],
        '10' => ['nome' => 'Lucas']
    ];
    $aux = 1; 
    while(true){
      print("<p> Participante numero: ". $aux. ". Nome: ". $participantes[$aux]['nome']);

      $aux++;
      if($aux >10){
        print("<p> Fim da Lista</p>");
        break;
      }
    }

    // 28
    print("<h3> 28 - Total de Vendas: </h3> <br>");
      $numeros = [];
      $total = 0; 
      for($i = 0; $i<=100; $i++){
        $numeros[] = rand(50, 5000); 
      }
    for($j = 0; $j<=100; $j++){
        $total += $numeros[$j]; 
    }
    print("<p> A soma total é: R$" .number_format($total, 4, '.', ","). "</p>"); 
  
// 29
print("<h3>29 - Ciclo de Produção:</h3><br>");
$produtos = array(); 
$produz = 1; 
while (true) {
    print("<p>Produzindo item...</p>");
    $produtos[] = $produz; 
    $qtd = count($produtos);
    $soma = 0; 
    $produz++; 

    for ($i = 0; $i < $qtd; $i++) {
        $soma += $produtos[$i]; 
    }
    print("<p>Quantidade atual: " . $soma . "</p>"); 
    if ($produz >= 50) {
        print("<p>Fim da produção!</p>");
        break;
    }
}

// 30
print("<h3>30 - Tabela de Referencia:</h3><br>");

echo '

<style>
    .tabuada{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 500px;
        width: 100px;
        background-color: antiquewhite;
        border: 1px solid black;
        border-radius: 5%;
    }
    #centro{
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 13px;
    }
</style>
    <div id="centro">
        <div class="tabuada"  >
        <p>1x1 = 1</p>
        <p>x2 = 2</p>
        <p>1x3 = 3</p>
        <p>1x4 = 4</p>
        <p>1x5 = 5</p>
        <p>1x6 = 6</p>
        <p>1x7 = 7</p>
        <p>1x8 = 8</p>
        <p>1x9 = 9</p>
        <p>1x10 = 10</p>

    </div>
     <div class="tabuada"  >
        <p>1x1 = 1</p>
        <p>x2 = 2</p>
        <p>1x3 = 3</p>
        <p>1x4 = 4</p>
        <p>1x5 = 5</p>
        <p>1x6 = 6</p>
        <p>1x7 = 7</p>
        <p>1x8 = 8</p>
        <p>1x9 = 9</p>
        <p>1x10 = 10</p>

    </div>
     <div class="tabuada"  >
        <p>2x1 = 1</p>
        <p>2x2 = 4</p>
        <p>2x3 = 6</p>
        <p>2x4 = 8</p>
        <p>2x5 = 10</p>
        <p>2x6 = 12</p>
        <p>2x7 = 14</p>
        <p>2x8 = 16</p>
        <p>2x9 = 18</p>
        <p>2x10 = 20</p>

    </div>
     <div class="tabuada"  >
        <p>3x1 = 3</p>
        <p>3x2 = 6</p>
        <p>3x3 = 9</p>
        <p>3x4 = 12</p>
        <p>3x5 = 15</p>
        <p>3x6 = 18</p>
        <p>3x7 = 21</p>
        <p>3x8 = 24</p>
        <p>3x9 = 27</p>
        <p>3x10 = 30</p>

    </div>
     <div class="tabuada"  >
        <p>4x1 = 4</p>
        <p>4x2 = 8</p>
        <p>4x3 = 12</p>
        <p>4x4 = 16</p>
        <p>4x5 = 25</p>
        <p>4x6 = 24</p>
        <p>4x7 =28</p>
        <p>4x8 = 32</p>
        <p>4x9 = 36</p>
        <p>4x10 = 40</p>

    </div>
         <div class="tabuada"  >
        <p>5x1 = 5</p>
        <p>5x2 = 10</p>
        <p>5x3 = 15</p>
        <p>5x4 = 20</p>
        <p>5x5 = 25</p>
        <p>5x6 = 30</p>
        <p>5x7 = 35</p>
        <p>5x8 = 40</p>
        <p>5x9 = 45</p>
        <p>5x10 = 50</p>

    </div>
    </div>
  ';


   
    

  
  ?>
  </div>


</body>

</html>