<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="mail" name="mail" id="mail">
        <button>invia</button>
    </form>
</body>
</html>

<?php 

// $user_mail = $_POST['mail'] ?? null

function check_mail() {
    $user_mail = $_POST['mail'] ?? null;

    if (str_contains("@", $user_mail) && (str_contains(".", $user_mail))) {
        var_dump($user_mail);
    } else {
        var_dump("error");
    }

}

check_mail()

?>