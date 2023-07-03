<!-- INSERIMENTO VARIABILI IN GET -->
<?php 
    $parola= $_GET['parola'];
    $paragrafo= $_GET['paragrafo'];


    // $replacedeString = str_replace('***', 'gnocchi', $nome);


    $concat= $parola." ".$paragrafo;

    $replacedeString = str_replace($parola, '***', $concat)." ".strlen($concat);


    echo $replacedeString;
  

?>