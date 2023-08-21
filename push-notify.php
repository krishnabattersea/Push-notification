<?php

// if there is anything to notify, then return the response with data for
// push notification else just exit the code
$webNotificationPayload['title'] = 'Push Notification from GetAssist';
$webNotificationPayload['body'] = 'Open browser to view.';
$webNotificationPayload['icon'] = './GAne.png';
$webNotificationPayload['url'] = 'https://getassist.net/';
echo json_encode($webNotificationPayload);
exit();












?>