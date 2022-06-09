<?php

// __DIR__ mi resituisce il percorso assoluto della cartella in cui mi trovo
// parto sempre da lì per includere altri file

// include -> se è sbagliato il path genera un warning ma non blocca la pagina
// require -> se è sbagliato il path genera un fatal error e blocca la pagina
// require_once e include_once evitano in rischio di includere due volte lo stesso file

require_once __DIR__ . '/partials/template/header.php';

//

//echo __DIR__ . '/partials/template/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>INCLUSIONI</h1>

</body>
</html>
