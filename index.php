<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- FORM IN GET COLLEGATO AL SECONDO FILE PHP-->
    <form action="script.php" method="GET">
        <!-- INPUT CHE CONTERRA LA PAROLA CENSURATA -->
        <input type="text" name="badword" placeholder="Key"><br>
        <!-- INPUT CHE CONTERRA IL PARAGRAFO -->
        <textarea name="paragrafo" placeholder="messaggio">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati officiis commodi provident. Repellat exercitationem nesciunt recusandae facere architecto similique veritatis labore asperiores, quam nostrum nihil ea maxime atque commodi!</textarea><br>
        <button>invia</button>
    </form>
    
</body>
</html>