<!DOCTYPE html>
<?php
    require_once 'alerta.php';
?>

<html lang="pt-BR">
    

<head>
  <meta charset="UTF-8">
  
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
  print("<h1> Seção 5: HTML + PHP, Funçoes Nativas (include, require, divisão de templates)</h1> <br>");
    
    //41
    print("<h3> 41 - Titulo dinamico de paginas: </h3> <br>");
    $titulo = "41 ao 50"; 
     print("<title>$titulo</title>");
     print("<p> Titulo dessa pagina</p>"); 

    //42
    print("<h3> 42 - Mensagem de alerta padrão: </h3> <br>");
    Alerta('Mensagem de alerta padrão');


    //43
    print("<h3> 43 - Estrutura reutilizavel: </h3> <br>");
        print('<a href="\pratica02\S05\43\index.php">Ir para o site da questao! </a><p> ');

    //44
      print("<h3> 44 - Cabeçalho personalizado: </h3> <br>");
    
    print("<p> Resposta no titulo da pagina da questão anterior(43)</p>");



    //45
      print("<h3> 45 - Biblioteca de Funções: </h3> <br>");
      print("<p> Funçoes adcionadas a apenas um arquivo e importadas!</p>");


    //46
    print("<h3> 46 - Tratamentos de arquivos essenciais: </h3>"); 

    print("<p>Uma grande diferença entre include e require: quando um arquivo é incluído com a includeinstrução e o PHP não consegue encontrá-lo, o script continuará a ser executado!</p>"); 
  
    //47
    print("<h3> 47 - Arquivos de configuração: </p>");
      define('DB_HOST', 'localhost');
      define('DB_USER', 'seu_usuario');
      define('DB_PASS', 'sua_senha');
      define('DB_NAME', 'seu_banco');

    require_once 'config.php';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }













?>
  </div>


</body>

</html>