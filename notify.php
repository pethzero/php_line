<?php

// Set your access token
$accessToken = '';

// Set the message you want to send
$message = 'Hello, Line Notify!';

// API endpoint URL
$url = 'https://notify-api.line.me/api/notify';

// Set the headers
$headers = [
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer ' . $accessToken,
];

// Set the message data
$data = [
    'message' => $message,
];

// Send the notification
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

// Check the response
if ($response === false) {
    echo 'Error occurred: ' . curl_error($ch);
} else {
    echo 'Notification sent!';
}
?>
