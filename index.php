<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

body{
    text-align:center;
    padding-top:100px;
    font-size:28px;
    font-family: sans-serif;
}

</style>
<body>

<!-- 
1-Creare una variabile con assegnato un testo per popolare un paragrafo.

2-Visualizzare a schermo il paragrafo.

3-Visualizzare a schermo la lunghezza di testo del paragrafo.

4-Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e 
sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.

5-Stampare a schermo il paragrafo con il testo censurato. 

-->

    <?php

    //1 - Creare una variabile con assegnato un testo per popolare un paragrafo.

    $params = $_GET['badword'];
    
    $text = 'Lorem, ipsum dolor sit amet Lorem consectetur lorem adipisicing elit. Lorem Molestias, facere? lorem' ;

    // 4-Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e 
   // sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
    $text2 = str_replace($params, '***', $text)

    ?>

    <!-- 2 - Visualizzare a schermo il paragrafo. -->
    <p> <?php echo $text?></p>
    <p>Lunghezza stringa : <?php echo strlen($text)?> caratteri</p>

    <!-- 5-Stampare a schermo il paragrafo con il testo censurato.  -->
    <p>Stringa censurata : <?php echo $text2?></p>
    

</body>

</html>