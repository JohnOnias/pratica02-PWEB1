<?php

function soma($a, $b):int{
    $soma = $a+$b;
    return $soma; 
  }
  function custo($unidade, $preco):float{
    $total = $unidade * $preco; 
    return $total; 

  }   
  function media($nota1, $nota2, $nota3, $nota4):float{
    $media =  ($nota1+$nota2+$nota3+$nota4)/4;
    return $media; 
  }

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
  function elegivel($idade){
    if($idade >= 18){
        print("<p> Acesso Liberado!</p>"); 
    }
    else{
        print("<p> Acesso Negado!</p>"); 
    }
}
function saudacao($nome){
    print("<p> Bem-vindo(a) ". $nome. " tenha um otimo dia</p>"); 
  }
  function formataPreco($valor) {
    print("R$" . number_format($valor, 2, ',', '.'));
  }
  function area($base, $altura){
    $area = $base*$altura; 
    print("<p> A area do retangulo é: ". $area. "</p> "); 

  }