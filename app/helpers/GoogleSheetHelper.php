<?php
require_once 'vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;



function save_to_gsheet($form, $details, $sheetId, $sheetName = "Sheet1") {
    // Create Google Client
    $client = new Client();
    $client->setAuthConfig('gservice.json'); // Path to your service account JSON key file
    $client->addScope(Sheets::SPREADSHEETS);
    
    // Create Google Sheets service
    $service = new Sheets($client);

    $spreadsheetId = $sheetId;
    $range = $sheetName.'!A1:E';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    // Calculate the next available row
    $nextRow = count($values) + 1;
    $range = 'Sheet1!A' . $nextRow . ':E';
    // Data to be written
    $data = array();

    if ($form == "learn-more" || $form == "call-back") {
        array_push($data, [$details['name'], $details['email'], $details['phone'], '-', $form.", ".date("Y-m-d H:i:s")]);
    } else if ($form == "contact") {
        array_push($data, [$details['name'], $details['email'], $details['phone'], $data['message'], $form.", ".date("Y-m-d H:i:s")]);
    }  else {
        return false;
    }

    // Prepare data for the request
    $requestBody = new Google_Service_Sheets_ValueRange([
        'values' => $data
    ]);

    $params = [
        'valueInputOption' => 'RAW'
    ];

    $result = $service->spreadsheets_values->update($spreadsheetId, $range, $requestBody, $params);

    if ($result->updatedCells > 0) {
        return true;
    } else {
        return false;
    }
}