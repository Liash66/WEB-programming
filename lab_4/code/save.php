<?php

require_once 'vendor/autoload.php'; // Подключаем библиотеку Google API PHP Client

use Google\Client;
use Google\Service\Sheets;

// Функция для отправки данных в Google Sheets
function writeToGoogleSheets($category, $title, $description)
{
    $client = new Google\Client();
    $client->setAuthConfig('code/credentials.json'); // Путь к вашему файлу ключа доступа

    $client->addScope(Google\Service\Sheets::SPREADSHEETS);
    $service = new Google\Service\Sheets($client);

    $spreadsheetId = '1M6B1Ca_mxxe90fFw7ArMNLuhzJqjbOAtqMK90la';
    $range = 'Sheet1!A1:C1'; // Диапазон, куда вы хотите записать данные

    $values = [
        [$category, $title, $description]
    ];

    $body = new Google\Service\Sheets\ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'RAW'
    ];

    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

    return $result;
}

if (isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    $category = $_POST['category'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    // Отправляем данные в Google Sheets
    writeToGoogleSheets($category, $title, $desc);
}

header('Location: /');
exit();