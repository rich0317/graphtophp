<html>
<head>
    <title>TestApiClick</title>
</head>

<body style="text-align:center;">
    <h1 style="color:green;">Graph Api Call Teams Meeting123</h1>
    
    <form method="post">
        <label for="stime">Start Date Time</label><br>
        <input type="datetime-local" id="stime" name="stime"><br>
        <label for="etime">End Date Time</label><br>
        <input type="datetime-local" id="etime" name="etime"><br>
        <br>
        <input type="submit" name="runapi1" class="button" value="Submit" />
    </form>  
    
<A HREF= >Click to refresh the page</A>    
<?php

if(array_key_exists('runapi1', $_POST)) {
            runapi();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }

function runapi() {
echo "<br><br>成功執行，請至TEAMS確認!<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  $url = "https://graph.microsoft.com/v1.0/me/events";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJub25jZSI6IlRkcXFGMEI2dHpwT29rUVNVOXBTTFc2TWNEeG5YYXFNX1hDRkNMSlFUcnciLCJhbGciOiJSUzI1NiIsIng1dCI6Ii1LSTNROW5OUjdiUm9meG1lWm9YcWJIWkdldyIsImtpZCI6Ii1LSTNROW5OUjdiUm9meG1lWm9YcWJIWkdldyJ9.eyJhdWQiOiIwMDAwMDAwMy0wMDAwLTAwMDAtYzAwMC0wMDAwMDAwMDAwMDAiLCJpc3MiOiJodHRwczovL3N0cy53aW5kb3dzLm5ldC85YTI3ZWZlYy0wODk5LTRjNWUtYTViZC1kM2YwODU5MjEyYTEvIiwiaWF0IjoxNjgzMDk2MzQzLCJuYmYiOjE2ODMwOTYzNDMsImV4cCI6MTY4MzE4MzA0MywiYWNjdCI6MCwiYWNyIjoiMSIsImFpbyI6IkUyWmdZTkFROHAxcFY5THlQYUY0U2xDQWxMN254Z2grSDVlUHVibThwOHdqQ201c1hmUkV1UG4yeXd3cHcvWGV1bnlsYlJMRkFBPT0iLCJhbXIiOlsicHdkIiwicnNhIl0sImFwcF9kaXNwbGF5bmFtZSI6IkdyYXBoIEV4cGxvcmVyIiwiYXBwaWQiOiJkZThiYzhiNS1kOWY5LTQ4YjEtYThhZC1iNzQ4ZGE3MjUwNjQiLCJhcHBpZGFjciI6IjAiLCJkZXZpY2VpZCI6IjI5NjA2OTNkLWI0ZTUtNDYxZS1iMDI0LTA2Zjg0YzE3ODEzZSIsImZhbWlseV9uYW1lIjoi5p6XIiwiZ2l2ZW5fbmFtZSI6IuebiOmBlCIsImlkdHlwIjoidXNlciIsImlwYWRkciI6IjEyNS4yMjkuNjYuODAiLCJuYW1lIjoiMzIxMSDmnpfnm4jpgZQgcmljaGFyZGxpbiIsIm9pZCI6IjYxZWViZjAyLWZmODAtNGQyYi1iZjA2LTIzOWRhNWIzOWQ3YiIsIm9ucHJlbV9zaWQiOiJTLTEtNS0yMS00MjQ1MDU1ODI0LTIzMDk0NjYyODYtNDU2NzczMTc1LTE3NjQxIiwicGxhdGYiOiIzIiwicHVpZCI6IjEwMDMyMDAyMzFGRUE2RjMiLCJyaCI6IjAuQVVrQTdPOG5tcGtJWGt5bHZkUHdoWklTb1FNQUFBQUFBQUFBd0FBQUFBQUFBQUJKQUlRLiIsInNjcCI6IkNhbGVuZGFycy5SZWFkIENhbGVuZGFycy5SZWFkLlNoYXJlZCBDYWxlbmRhcnMuUmVhZFdyaXRlIG9wZW5pZCBwcm9maWxlIFVzZXIuUmVhZCBlbWFpbCIsInNpZ25pbl9zdGF0ZSI6WyJrbXNpIl0sInN1YiI6Imx3RFcyVXFLdlVsVnZxN3lRZWU2WHR5WFdKTkpLWEpyRnlXZ3hON1ZkUHciLCJ0ZW5hbnRfcmVnaW9uX3Njb3BlIjoiQVMiLCJ0aWQiOiI5YTI3ZWZlYy0wODk5LTRjNWUtYTViZC1kM2YwODU5MjEyYTEiLCJ1bmlxdWVfbmFtZSI6IjExMTA5MDA1QHBlcnNoaW5nLmNvbS50dyIsInVwbiI6IjExMTA5MDA1QHBlcnNoaW5nLmNvbS50dyIsInV0aSI6Ikc3ZU4zcEFtbGtpbGhiZ0Yzb09LQUEiLCJ2ZXIiOiIxLjAiLCJ3aWRzIjpbImI3OWZiZjRkLTNlZjktNDY4OS04MTQzLTc2YjE5NGU4NTUwOSJdLCJ4bXNfY2MiOlsiQ1AxIl0sInhtc19zc20iOiIxIiwieG1zX3N0Ijp7InN1YiI6InFHUjFndl9ITjUyZDMyaGNBZ3ZucnJNRFdaaFdFbTV3NEZ1OC0ybmctN2sifSwieG1zX3RjZHQiOjEzNDgxNDI3NjZ9.XVH3rzAjRGE5oDMfZjE7C8PyN2fuTCvJ7oUW_jB3UTIKSkcsJn5RpeMdRZ0HUd70Y88ZvCE7bhMd-8VJQBCRIv7WX7J0-QYmAN8-bREqv3Olz6r2EFfMroSjVYcwWfdqHMWxsMqMUv9YrbKbZ-9TBwIOwD-KaybwJX-JxrErUci4G-uB5ZVXdnyBbpFRFo7TXv5CkRE2JN7-mYt3se_LtQdfiaTe1xpZfQii_TyzqCl0CZl9_2HvABm7I1ySIe3HEpPfpIWXuWmzARCDOaIgrhtRYi9TxVJ4fZqMkk8mksLDbx00OrjNujQqLppdv4NU-O7ALa0AhLV13YNY3T8NLQ",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "subject": "Richard Test Meeting",
  "body": {
    "contentType": "HTML",
    "content": "Scheduled from Graph api"
  },
  "start": {
    "dateTime": "2023-05-03T18:00:00",
    "timeZone": "Asia/Taipei"
  },
  "end": {
    "dateTime": "2023-05-03T18:30:00",
    "timeZone": "Asia/Taipei"
  },
  "location": {
    "displayName": "Microsoft Teams"
  },
  "attendees": [
    {
      "emailAddress": {
        "address": "11109005@pershing.com.tw",
        "name": "Richard"
      },
      "type": "required"
    }
  ],
  "isOnlineMeeting": true,
  "onlineMeetingProvider": "teamsForBusiness",
  "allowNewTimeProposals": true,
  "transactionId": "6E163156-7762-4BEB-A1C6-629EA61746Y9"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
}



?>



</body>
</html>

