<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variaveis e Constantes</title>
</head>
<body>

  <?php
  // As variaveis no PHP são salvas na memoria do servidor
    $nome = "Flavio";
    $sobrenome = "Lopes";

    // Para criar uma constante utilize o const, é boa pratica usar letras maiusculas para se referir a uma constante
    const PAIS = "Brasil";

    // A função var_dump loga o tipo da variavel
    var_dump($nome);  // string
    
    echo "Olá, $nome $sobrenome vc mora no " . PAIS;

    // Single quoted '' Double quoted ""
    // Nas aspas duplas existem a interpretação do conteudo das strings, ou seja, o php vai analisar o conteudo, já na aspas simples isso não ocorre
    echo "Olá $nome"; //aqui o codigo é interpretado e a variavel nome é logada
    echo 'Olá $nome'; //aqui já não ocorre nada, sendo assim irá ser logado o $nome, ao inves do valor da variavel

    // Para constantes a interpretacão não funciona tanto para aspas simples, ou duplas

    // para concatenar strings no PHP é utilizado o .
    
    // a double quoted é igual a crase no js moderno


  // Escape sequences
  // existem alguns escapes para adicionar algo a aspas duplas
  // \n  => Adiciona uma nova linha
  // \t  => tabulação, da um espaço
  // \\  => Barra invertida
  // \$  => Sinal de cifrão


  ?>
  
</body>
</html>