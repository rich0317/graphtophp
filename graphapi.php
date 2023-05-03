<?php

$url = "https://graph.microsoft.com/v1.0/me/events";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJub25jZSI6IjJyYy1qWXdkS0xEQmpJaWdZemF5c0t4OHNXSU9HbFZBYmJObEJyZVJEeWMiLCJhbGciOiJSUzI1NiIsIng1dCI6Ii1LSTNROW5OUjdiUm9meG1lWm9YcWJIWkdldyIsImtpZCI6Ii1LSTNROW5OUjdiUm9meG1lWm9YcWJIWkdldyJ9.eyJhdWQiOiIwMDAwMDAwMy0wMDAwLTAwMDAtYzAwMC0wMDAwMDAwMDAwMDAiLCJpc3MiOiJodHRwczovL3N0cy53aW5kb3dzLm5ldC85YTI3ZWZlYy0wODk5LTRjNWUtYTViZC1kM2YwODU5MjEyYTEvIiwiaWF0IjoxNjgwMTU2MDUyLCJuYmYiOjE2ODAxNTYwNTIsImV4cCI6MTY4MDI0Mjc1MiwiYWNjdCI6MCwiYWNyIjoiMSIsImFpbyI6IkUyWmdZTGcxeS9HNGIrY0UyNitSWEhhNmR5M0twSDZvelQ5dk1JZFJsTWVrL1RoalFtRzRWL1N0ZFh5T2ZDcHRrbzdySFhNZEFRPT0iLCJhbXIiOlsicHdkIiwicnNhIl0sImFwcF9kaXNwbGF5bmFtZSI6IkdyYXBoIEV4cGxvcmVyIiwiYXBwaWQiOiJkZThiYzhiNS1kOWY5LTQ4YjEtYThhZC1iNzQ4ZGE3MjUwNjQiLCJhcHBpZGFjciI6IjAiLCJkZXZpY2VpZCI6IjI5NjA2OTNkLWI0ZTUtNDYxZS1iMDI0LTA2Zjg0YzE3ODEzZSIsImZhbWlseV9uYW1lIjoi5p6XIiwiZ2l2ZW5fbmFtZSI6IuebiOmBlCIsImlkdHlwIjoidXNlciIsImlwYWRkciI6IjYxLjIxOC41LjE5MCIsIm5hbWUiOiIzMjExIOael-ebiOmBlCByaWNoYXJkbGluIiwib2lkIjoiNjFlZWJmMDItZmY4MC00ZDJiLWJmMDYtMjM5ZGE1YjM5ZDdiIiwib25wcmVtX3NpZCI6IlMtMS01LTIxLTQyNDUwNTU4MjQtMjMwOTQ2NjI4Ni00NTY3NzMxNzUtMTc2NDEiLCJwbGF0ZiI6IjMiLCJwdWlkIjoiMTAwMzIwMDIzMUZFQTZGMyIsInJoIjoiMC5BVWtBN084bm1wa0lYa3lsdmRQd2haSVNvUU1BQUFBQUFBQUF3QUFBQUFBQUFBQkpBSVEuIiwic2NwIjoib3BlbmlkIHByb2ZpbGUgVXNlci5SZWFkIGVtYWlsIENhbGVuZGFycy5SZWFkV3JpdGUiLCJzaWduaW5fc3RhdGUiOlsia21zaSJdLCJzdWIiOiJsd0RXMlVxS3ZVbFZ2cTd5UWVlNlh0eVhXSk5KS1hKckZ5V2d4TjdWZFB3IiwidGVuYW50X3JlZ2lvbl9zY29wZSI6IkFTIiwidGlkIjoiOWEyN2VmZWMtMDg5OS00YzVlLWE1YmQtZDNmMDg1OTIxMmExIiwidW5pcXVlX25hbWUiOiIxMTEwOTAwNUBwZXJzaGluZy5jb20udHciLCJ1cG4iOiIxMTEwOTAwNUBwZXJzaGluZy5jb20udHciLCJ1dGkiOiJCc3VncGRjWGgwdW40cGg4eFAwcEFBIiwidmVyIjoiMS4wIiwid2lkcyI6WyJiNzlmYmY0ZC0zZWY5LTQ2ODktODE0My03NmIxOTRlODU1MDkiXSwieG1zX2NjIjpbIkNQMSJdLCJ4bXNfc3NtIjoiMSIsInhtc19zdCI6eyJzdWIiOiJxR1IxZ3ZfSE41MmQzMmhjQWd2bnJyTURXWmhXRW01dzRGdTgtMm5nLTdrIn0sInhtc190Y2R0IjoxMzQ4MTQyNzY2fQ.fCCT4BLgpNWNw6_IjehGd-OVHCzOwWu5wqA3Ko9DE4xw-a5sCwyg79SJsXey5Zp9XufpNgcJF9JJweyFu4vN7xBEbOm-HrSGkuObuFf9ueSBsfOsng1hb_ynphJP6PygkTYNijDKXGzM2d9CJK3zTgf-76Abocep-Hio1OpVFe5FsQnZNJq0qmKQyJaR6PZhm9UETPBqmgUtyvN6VcvjmFdT8sWOgYrV4D4LrvRMkxJkumaLmVkdv_mODVmCHj5s7-iJWwU2SDTXL-FH7ruV01b_pY_kYeqv4dbkxSwgK738P0ijU8UfdjPnm6JEuenklNoi7wHuNDhFK9uD7bn52w",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "subject": "Let's go for lunch",
  "body": {
    "contentType": "HTML",
    "content": "Does noon work for you?"
  },
  "start": {
    "dateTime": "2023-04-04T17:00:00",
    "timeZone": "Asia/Taipei"
  },
  "end": {
    "dateTime": "2023-04-04T19:00:00",
    "timeZone": "Asia/Taipei"
  },
  "location": {
    "displayName": "Microsoft Teams"
  },
  "attendees": [
    {
      "emailAddress": {
        "address": "richardlin@pershing.com.tw",
        "name": "Richard Lin"
      },
      "type": "required"
    }
  ],
  "isOnlineMeeting": true,
  "allowNewTimeProposals": true,
  "transactionId": "7E163156-7762-4BEB-A1C6-729EA81755A2"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

