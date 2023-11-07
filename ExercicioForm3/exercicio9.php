<?php
$idade = $_POST['idade'];

if (!empty($_POST['idade']) && isset($_POST['idade']) ) {
    switch($idade) {
        case 5: echo"Infantil A"; break;
        case 6: echo"Infaltil A"; break;
        case 7: echo"Infaltil A"; break;
        case 8: echo"Infaltil B"; break;
        case 9: echo"Infaltil B"; break;
        case 10: echo"Infaltil B"; break;
        case 11: echo"Juvenil A"; break;
        case 12: echo"Juvenil A"; break;
        case 13: echo"Juvenil A"; break;
        case 14: echo"Juvenil B"; break;
        case 15: echo"Juvenil B"; break;
        case 16: echo"Juvenil B"; break;
        case 17: echo"Juvenil B"; break;
        default: echo "Adulto"; break;
    }
} else {
    echo "Preencha os dados";
    header("refresh:1, form3.php");
}