<?php
function check_mail($mail) {

    if (str_contains($mail, "@") == true && str_contains( $mail, ".") == true) {
        return true;
    } else {
        return false;
    }

}