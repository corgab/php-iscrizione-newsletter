<?php 

$user_mail = $_POST['mail'] ?? '';
include __DIR__ . '/utilites.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center my-5">
        <form method="post">
            <input type="mail" name="mail" id="mail" placeholder="Inserisci la tua mail">
            <button class="bg-primary text-white">invia</button>
        </form>
    </div>
    <div class="d-flex justify-content-center align-items-center">
    <?php if(check_mail($user_mail) == true) { ?>
        <h2 class="alert" role="alert">ISCRITTO!</h2>
    <?php } 
    else{ ?>
        <h2 class="alert" role="alert">INSERISCI UN EMAIL VALIDA!</h2>
    <?php }?>
    </div>
</body>
</html>

