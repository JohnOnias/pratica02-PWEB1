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
     print("<h1> Seção 2: Estruturas Condicionais (if, else, switch)</h1> <br>");
    // 11
    print("<h3> 11 - Controle de acesso: </h3> <br>");
    $idade = 18; 
    if($idade >= 18){
        print("<p> Acesso Liberado!</p>"); 
    }
    else{
        print("<p> Acesso Negado!</p>"); 
    }

      // 12
    print("<h3> 12 - Classificação de temperatura: </h3> <br>");
    $temperatura = 0; 
    if($temperatura > 0){
        print("<p> Temperatura positiva! </p>");
    }
   elseif($temperatura < 0 ){
        print("<p> Temperatura negativa! </p>");

   }
   else{
    print("<p> Temperatura esta em Zero! </p>");

    }


    // 13
    print("<h3> 13 - Sistema de Avaliação: </h3> <br>");
    $nota1 = 5;
    $nota2 = 4;
    $media = ($nota1 + $nota2)/2;

    if($media >= 7){
        print("<p> Aluno Aprovado! </p>");
    }
    elseif($media >= 5 && $media <= 6.9){
    print("<p> Aluno em Recuperação!</p>");

    }
    else{
        print("<p> Aluno Reprovado</p>"); 
    }
    
    // 14
    print("<h3> 14 - Agendamento Semanal: </h3> <br>");
    $dia = 7;

    switch($dia){
        case 1:
            print("<p> Hoje é Domingo! </p>");
            break;
        case 2: 
            print("<p> Hoje é Segunda! </p>");
            break; 
        case 3: 
            print("<p> Hoje é Terça!</p>");
            break;
        case 4:
            print("<P> Hoje é Quarta!</p>");
            break; 
        case 5:
            print("<p> Hoje é Quinta!</p>");
            break; 
        case 6:
            print("<p> Hoje é Sexta </p>");
            break;
        case 7:
            print("<p> Hoje é Sabado!</p>");
            break;
        default:
            print("<p> Digite um numero valido!</p>");
        }

   // 15
    print("<h3> 15 - Escolha de Bebida: </h3> <br>");
        $bebida = "Chá";

    switch($bebida){
        case "Chá":
            print("<p> Você escolheu:  </p>" .$bebida);
            break;
        case "Café": 
            print("<p> Você escolheu:  </p>" .$bebida);
           
            break; 
        case "Suco": 
            print("<p> Você escolheu:  </p>" .$bebida);
            break;
            default:
            print("<p> Bebida: ".$bebida . " não disponivel!</p>");
        }
    // 16
    print("<h3> 16 - Cadastro de Usuario: </h3> <br>");
        $estado_civil = strtolower("s");

        switch($estado_civil){
            case "c":
                print("<p> Você é Casado(a)! </p>");
                break;
            case "s":
                print("<p> Você é Solteiro(a)! </p>");
                break;
            case "d":
                print("<p> Você é Divorciado(a)! </p>");
                break;
            case "o":
                print("<p> Outros! </p>");
                break;
            default:
                print("<p> Opção não disponível, tente novamente! </p>");
        }

   // 17
    print("<h3> 17 - Alerta Climatico: </h3> <br>");
        $temperatura = 0; 

        if ($temperatura <= 0) {
            print("<p> Alerta de Gelo! </p>");
        } elseif ($temperatura > 0 && $temperatura <= 15) {
            print("<p> Clima Ameno! </p>");
        } elseif ($temperatura > 15 && $temperatura <= 25) {
            print("<p> Clima Agradável! </p>");
        } else {
            print("<p> Atenção: Calor Extremo! </p>");
        }


   // 18
    print("<h3> 18 - Preferencia de Cor: </h3> <br>");
        $cor = strtolower("ciano"); 

        switch($cor){
            case "vermelho":
                print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            case "azul":
               print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            case "verde":
              print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            case "amarelo":
                  print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            default:
                print("<p> Você não escolheu uma opção valida, a padrão é Azul! </p>");
        }

     // 19
    print("<h3> 19 - Calculo de Salario: </h3> <br>");
        $cargo = strtolower("gerente"); 
        switch($cargo){
            case "desenvolvedor":
                print("<p> O cargo: ". $cargo. ", ganha R$ 7mil! </p>");
                break;
            case "designer":
             print("<p> O cargo: ". $cargo. ", ganha R$ 6mil! </p>");
                break;
            case "gerente":
               print("<p> O cargo: ". $cargo. ", ganha R$ 12mil! </p>");
                break;
            default:
                print("<p> Você não escolheu um cargo valido! </p>");
        }
        

        //20
    print("<h3> 20 - Verificar Acesso: </h3> <br>");
        $ativo = true; 
        $adm = true; 

        if($ativo && $adm){
            print("<p> Acesso total!");
        }
        elseif($ativo && !$adm){
            print("<P> Acesso, porem como usuario! </p>"); 

        }
        else{
            print("<p> Usuario Inativo! </p>");
        }



   
?>
  </div>


</body>

</html>