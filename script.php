<!-- INSERIMENTO VARIABILI IN GET -->
<?php 
    // variabile che conterrà la parola da censurare 
    $badword= $_GET['badword'];
    // variabile in GET che conterrà il paragrafo
    $paragrafo= $_GET['paragrafo'];

    // indica la lunghezza del paragrafo
    $paragraphLenght = strlen($paragrafo);

    // variabile che sostrituirà tramite la funzione str_replace la parola inserita nel primo input verra sostituita con tre asterischi e con la funzione strlen verra indicata la lunghezza della stringa
    $replacedeString = str_replace($badword, '***', $paragrafo);


    $NewLenght = strlen($replacedeString)

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Paragraph:</h3>
    <p><?php echo $paragrafo ?></p>
    <p><strong>lunghezza:</strong><?php echo $paragraphLenght ?></p>
    <hr>
    <h3>Paragraph:</h3>
    <p><?php echo $replacedeString ?></p>
    <p><?php echo $NewLenght ?></p>


</body>
</html>