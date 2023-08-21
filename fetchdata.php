
<?php

include 'dbconnect.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);




$getinfo = "select 
                   id, 
                    title, 
                   body,
                   icon,
                   payload
                   from  details ";


                   if ($result = $conn->query($getinfo)) {    
                    while ($row = $result->fetch_object()) {
                       $id = $row->id;
                       $title = $row->title;
                       $body =$row->body;
                       $icon =$row->icon;
                       $payload =$row->payload;
                       echo $body;
                   }
                   $result->close();
               }
               else
               {
                  echo'something went wrong.';
               }










?>
 
