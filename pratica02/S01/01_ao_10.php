<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>01</title>
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
  print("<h1> Seção 01: Variaveis e Tipos de Dados</h1> <br>");
    // 01
    print("<h3> 01 - Registro de cliente: </h3> <br>");
      $nomecompleto = "Maria da Silva"; 
      print("<p> Bem-vindo(a) ". $nomecompleto. ". Espero que goste! </p>");


    // 02 
    print("<br>"); 
    print("<h3> 02 - Controle de Estoque: </h3> <br>");
      $estoque = 50; 
      print("<p> A quantidade de itens no seu estoque é: " . $estoque. " itens! </p>"); 

    // 03 

    print("<br>");
    print("<h3> 03 - Medição de terreno </h3> <br>");
      $largura = 35.6; 
      $comprimento = 60.34; 
      function area($x1, $x2):float{
          $Area = $x1*$x2; 
          return $Area; 
      }
      $resultado = area($largura, $comprimento); 
      print($resultado); 
    
    
    // 04
    print("<br>");
    print("<h3> 04 - Status de Pedido </h3> <br>");
      $entregue = false; 

      if($entregue){
        print("<p> Pedido entregue a um morador! </p>"); 
      }
      else{
        print("<p> Pedido em rota de entrega! </p>"); 
      }


    // 05
    print("<br>");
    print("<h3> 05 - Preco de venda e tipo de dado </h3> <br>");
      $item = 24.99; 
      print("<p> o preço do item é: ". $item. " a unidade </p>");
    
      print("<p> O tipo de dado é: ". gettype($item). "!</p>"); 


    // 06
    print("<br>");
    print("<h3> 06 - Calculo de orcamento </h3> <br>");
      $custoMaterial = 2500;
      $custoMaodeObra = 1500; 
      $custoTotal = $custoMaodeObra + $custoMaterial; 
      print("<p> O custo total da obra é: R$" .$custoTotal. " reais!</p>" );


    // 07 
    print("<br>");
    print("<h3> 07 - Endereco de entrega:</h3> <br>");
      $rua = 'Francisco Ferreira Ferraz';
      $numero = 38; 
      print("<p> Seu endereço é: rua: ". $rua. ". numero: " . $numero. "</p>"); 


    // 08
    print("<br>");
    print("<h3> 08 - Mudança de categoria:</h3><br>");
    $senha = 12345;  
    $temp = 54321; 
    print("<p> senha antiga: </p>" . $senha . "<br>");
       $senha = $temp;
       $temp = null; 
    print("<p> nova senha: </p>" . $senha. "<br>" );
 


    // 09
    print("<br>");
    print("<h3> 09 - Valor de π (Pi):</h3><br>");
     const pi = 3.14159265359; 
    print number_format(pi, 4,);


    // 10
    print("<br>");
    print("<h3> 10 - Contagem de caracteres:</h3>");
    $texto = 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries';
    print("<p> ". $texto. "</p>");

    $qtd = strlen($texto);
    print("<p> Quantidade de letras: </p>" . $qtd); 





    





   
?>
  </div>


</body>

</html>