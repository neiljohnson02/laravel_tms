<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome Email</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fffbea;
            margin: 0;
            padding: 40px;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .email-header {
            background: #f1c40f;
            color: #fff;
            padding: 25px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 26px;
        }
        .email-body {
            padding: 30px;
        }
        .email-body h2 {
            color: #2d3436;
            font-size: 22px;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.6;
        }
        .email-footer {
            background: #fdf6d3;
            text-align: center;
            font-size: 13px;
            color: #666;
            padding: 20px;
        }
        .highlight {
            color: #f1c40f;
            font-weight: bold;
        }
        a {
            color: #e67e22;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>🌟 Welcome to GTHolidays!</h1>
        </div>
        <div class="email-body">
            <h2>👋 Hello <span class="highlight">{{ $data['name'] }}</span>,</h2>
            <p>📩 {{ $data['message'] }}</p>
            <p>🌴 We're thrilled to have you onboard. Whether you're planning a <strong>family vacation</strong> 🏖️ or a <strong>solo escape</strong> 🚴, we promise an unforgettable experience.</p>
            <p>🆘 <strong>Need help?</strong> Just reply to this email or visit us at 👉 <a href="http://127.0.0.1:8000/welcome">www.gtholidays.in</a>.</p>
            <p>🌍 Let the journey begin — and make it epic!</p>
        </div>
        <div class="email-footer">
            © {{ date('Y') }} ✈️ GTHolidays. All rights reserved.
        </div>
    </div>
</body>
</html>
