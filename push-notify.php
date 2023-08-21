

<?php


include './fetchdata.php';

// if there is anything to notify, then return the response with data for
// push notification else just exit the code
$webNotificationPayload['title'] = $title;
$webNotificationPayload['body'] = $body;
$webNotificationPayload['icon'] = $icon;
$webNotificationPayload['url'] = $payload;
echo json_encode($webNotificationPayload);
exit();









?>
