<?


$name = $_POST['user-name'];
$fomiliya = $_POST['user-fomiliya'];
$otchestvo = $_POST['user-otchestvo'];
$phone = $_POST['user-phone'];
$shoe_type = $_POST['user-shoe_type'];
$size = $_POST['user-size'];
$address = $_POST['user-address'];


$token = "8168141861:AAG_Cmoe9nODeYVpDMqPgBCXslskDsHNV2c";

    $chat_id = "1337887109";

    // https:api.telegram.org/bot8168141861:AAG_Cmoe9nODeYVpDMqPgBCXslskDsHNV2c/getUpdates

    $user = array(

        'Имя пользвателя:  ' => $name,
        'Фамилия пользвателя:  ' => $fomiliya,
        'Отчество пользвателя:  ' => $otchestvo,
        'Номер пользвателя:  ' => $phone,
        'Выбор обуви пользвателя:  ' => $shoe_type,
        'Размер пользвателя:  ' => $size,
        'Адрес пользвателя:  ' => $address,
        
    );

    foreach ($user as $key => $value) {
        $text .= "<b>" . $key . "</b>" . $value. "%0A";
    };

    $infoTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

    if ($infoTelegram) {
        header('Location: thank-you.html');
    }

    else{
        echo "ERROR";
    }

?>