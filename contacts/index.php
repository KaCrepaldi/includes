<?php
     $projeto = "Agenda de Contatos";
     include('./includes/functions.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $projeto ?></title>
</head>
<body>
      <div class="container">
        <h1><?php echo $projeto ?></h1>
        <h2><?php echo boasVindas("Karla") ?></h2>
        <p><?php echo "Resultado :" .media(2, 4) ?></p>
      
         <?= $projeto ?><!--  shorttag = tag curta -->

      </div>
    
</body>
</html>