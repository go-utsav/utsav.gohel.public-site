<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            margin-bottom: 30px;
        }
        .message-details {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Hey Habibi! 🎉</h2>
    </div>

    <div class="content">
        <p>Good news! You've got a new contact form submission from your website.</p>

        <div class="message-details">
            <h3>Message Details:</h3>
            <p><strong>Name:</strong> {{ $firstName }} {{ $lastName }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Phone:</strong> {{ $phone ?: 'Not provided' }}</p>
            <p><strong>Project Type:</strong> {{ $projectType }}</p>
            <p><strong>Message:</strong></p>
            <p style="white-space: pre-wrap;">{{ $message }}</p>
        </div>

        <p>Best of luck with this potential opportunity! 🌟</p>
        <p>May this lead to another successful collaboration and bring fortune your way!</p>

        <div class="footer">
            <p>Sent from your lovely website<br><a href="https://utsav.cloud">utsav.cloud</a></p>
        </div>
    </div>
</body>
</html> 