<?php
$access_token = 'pyJmQBoqRC8Fd6NND4jUGIK5JLtTLI0LvC/IOLwxdmteMYUGi0enu7dWW4hSfz0oafEvBKzwR6bTaDEhgRiex1sAgiqOCPtKkiUbPMGGq2ixWFRtbBkCORCNE6sVOac4WJWTrGQf6/OB15btmAIIYgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
