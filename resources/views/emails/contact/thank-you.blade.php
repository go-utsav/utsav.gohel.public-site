<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You for Your Message</title>
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
        .content {
            margin-bottom: 30px;
        }
        .contact-info {
            background: #f5f5f5;
            padding: 15px;
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
        <h2>Thank You for Reaching Out!</h2>
    </div>

    <div class="content">
        <p>Dear {{ $firstName }},</p>

        <p>Thank you for taking the time to contact me. I truly appreciate your interest and will review your message carefully.</p>

        <p>I will get back to you as soon as possible with a detailed response.</p>

        <div class="contact-info">
            <p><strong>In the meantime:</strong></p>
            <ul>
                <li>Feel free to explore more of my work and projects at <a href="https://utsav.cloud">utsav.cloud</a></li>
                <li>For urgent matters, you can reach me at: +44 7774608622</li>
            </ul>
            
            <p><strong>Important Note:</strong> When calling, please:</p>
            <ul>
                <li>Clearly state the purpose of your call at the beginning</li>
                <li>Mention that you're calling regarding the website contact form</li>
            </ul>
            <p>This helps me provide you with the most focused and efficient attention.</p>
        </div>

        <p>Looking forward to our potential collaboration!</p>
    </div>

    <div class="footer">
        <p>Best regards,<br>Utsav Gohel</p>
        <p><a href="https://utsav.cloud">utsav.cloud</a></p>
    </div>
</body>
</html> 