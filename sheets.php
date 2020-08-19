<?php

require __DIR__.'./vendor/autoload.php';

$client = new \Google_Client();

$locations_arr = $_POST['locations'];
$locations = '';
foreach ($locations_arr as $location){

    $locations .=  $location . ', ';
}

$client->setApplicationName("Google Sheets API");
$scope = ['https://spreadsheets.google.com/feeds',
    'https://www.googleapis.com/auth/drive'];
$client->setScopes($scope);



$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$client->setAuthConfig('credentials.json');

$service = new Google_Service_Sheets($client);
$spreadsheetId = '1Dh13VddIubw9tgAAyRxzGB-jcUFqJ7jcOdfHEX_7hwQ';
$range = 'Sheet1';
$values = [
  [$_POST['fname'], $_POST['lname'] , $_POST['email'] , $locations],
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW'
];

$insert = [
    'insertDataOption' => 'INSERT_ROWS',
];
$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params
);
