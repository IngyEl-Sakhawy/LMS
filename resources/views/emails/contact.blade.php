<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 24px; color: #333; margin-bottom: 20px;">Contact Message</h1>
        <p style="font-size: 16px;"><strong>Name:</strong> {{ $details['name'] }}</p>
        <p style="font-size: 16px;"><strong>Email:</strong> {{ $details['email'] }}</p>
        <p style="font-size: 16px;"><strong>Message:</strong> {{ $details['message'] }}</p>
    </div>
</body>
</html>
