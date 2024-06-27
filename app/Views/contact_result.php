<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p>Name: <?= esc($name) ?></p>
    <p>Email: <?= esc($email) ?></p>
    <p>Message: <?= esc($message) ?></p>
    <p>Your message has been sent successfully!</p>
</body>
</html>
