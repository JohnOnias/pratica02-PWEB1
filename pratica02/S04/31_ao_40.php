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
  print("<h1> Seçôa 4: Funçôes (void e com retorno, parametros e argumentos) e principio DRY</h1> <br>");
    
    //31
    print("<h3> 31 - Mensagem de boas-vindas: </h3> <br>");
    function BemVindo(){
        print("Ola Bem-vindo(a)!"); 
    }
    BemVindo();
  

    //32
    print("<h3> 32 - Calculadora Basica: </h3> <br>");
    function soma($a, $b):int{
      $soma = $a+$b;
      return $soma; 
    }
    $numero1 = 5;
    $numero2 = 6;
    print(soma($numero1, $numero2)); 
    
    //33
    print("<h3> 33 - Calculo de custo total: </h3> <br>");
    function custo($unidade, $preco):float{
      $total = $unidade * $preco; 
      return $total; 

    }   
    $qtd = 5;
    $precoUnit = 60.5;
    $preco = custo($qtd, $precoUnit);
    print("<p> O custo total é: R$". number_format( $preco, '2'). "</p>" );


      
    //34
    print("<h3> 34 - Media de Notas: </h3> <br>");
    function media($nota1, $nota2, $nota3, $nota4):float{
      $media =  ($nota1+$nota2+$nota3+$nota4)/4;
      return $media; 
    }
    $nota1 = 5;
    $nota2 = 7; 
    $nota3 = 8;
    $nota4 = 8;
    $media = media($nota1, $nota2, $nota3, $nota4); 
    print("<p> A media do aluno Joao é: ". number_format( media($nota1, $nota2, $nota3, $nota4), 2).  " </p>");


    //35
    print("<h3> 35 - Validação de Codigo: </h3> <br>");
    function teste($numero):int{
      if($numero%2 == 0){
        print("<p>O numero: ". $numero.  " é par!</p>");
        return 0; 
      }
      else{
         print("<p>O numero: ". $numero.  " é impar!</p>");
         return 1; 

      }
    }
  
    teste(3); 


   //36
   print("<h3> 36 - Sistema de elegibilidade: </h3> <br>");
 
      function elegivel($idade){
            if($idade >= 18){
                print("<p> Acesso Liberado!</p>"); 
            }
            else{
                print("<p> Acesso Negado!</p>"); 
            }
      }

  elegivel(18);

   //37
   print("<h3> 37 - Personalização de mensagens: </h3> <br>");
      function saudacao($nome){
        print("<p> Bem-vindo(a) ". $nome. " tenha um otimo dia</p>"); 
      }

      saudacao("Maria"); 


   //38
    print("<h3> 38 - Formatação de Preços: </h3> <br>");
      
      function formataPreco($valor) {
        print("R$" . number_format($valor, 2, ',', '.'));
      }
      formataPreco(1234.56);

    //39
    print("<h3> 39 - Calculo de Area de terreno: </h3> <br>");
      function area($base, $altura){
        $area = $base*$altura; 
        print("<p> A area do retangulo é: ". $area. "</p> "); 

      }
      area(4.5, 6); 

  //40
  print("<h3> 40 - Log de eventos: </h3> <br>");
      $current_timestamp = time();
      print("<p> O horario atual é: ". date('y-m-d H:i:s', $current_timestamp)); 
      
    







?>
  </div>


</body>

</html>