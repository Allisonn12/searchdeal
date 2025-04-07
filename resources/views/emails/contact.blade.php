<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>New Message from {{ $data['name'] }}</h2>
    <p>Email: {{ $data['email'] }}</p>
    <p>Subject: {{ $data['subject'] ?? '' }}</p>
    <p>Phone Number: {{ $data['phone'] ?? '' }}</p>
    <p><b>Message</b>: {{ $data['message'] }}</p>
</body>
</html>