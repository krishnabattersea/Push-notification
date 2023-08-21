<?php

include './dbconnect.php';
$conn = OpenCon();

// if there is anything to notify, then return the response with data for
// push notification else just exit the code
$webNotificationPayload['title'] = 'Push Notification from GetAssist';
$webNotificationPayload['body'] = 'Open browser to view.';
$webNotificationPayload['icon'] = './GAne.png';
$webNotificationPayload['url'] = 'https://getassist.net/';
echo json_encode($webNotificationPayload);
exit();



$query = "SELECT * FROM `details`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  echo result;
    // if ($result->num_rows > 0) 
    // {
    //     // OUTPUT DATA OF EACH ROW
    //     while($row = $result->fetch_assoc())
    //     {
    //         echo "id: " .
    //             $row["id"]. " - body: " .
    //             $row["body"]. " | title: " . 
    //             $row["title"]. " | payload: " . 
    //             $row["payload"]. "<br>";
    //     }
    // } 
    // else {
    //     echo "0 results";
    // }
  
 




CloseCon($conn);










?>
