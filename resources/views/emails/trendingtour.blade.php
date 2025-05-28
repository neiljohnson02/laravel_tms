<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tour Booking Confirmation</title>
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
            <h1>🌟 Thank You for Booking with GTHolidays!</h1>
        </div>
        <div class="email-body">
            <h2>👋 Hello <span class="highlight">{{ $data['name'] }}</span>,</h2>

            <p>We have received your tour inquiry with the following details:</p>

            <p>
                <strong>🧭 Tour Type:</strong> {{ $data['tourtype'] }}<br>
                <strong>📅 Departure Date:</strong> {{ $data['departure'] }}<br>
                <strong>👨 Adults:</strong> {{ $data['adult'] }}, 
                <strong>🧒 Children:</strong> {{ $data['children'] ?? 0 }}, 
                <strong>👶 Infants:</strong> {{ $data['infant'] ?? 0 }}<br>
                <strong>📞 Phone:</strong> {{ $data['phone'] }}<br>
                <strong>📧 Email:</strong> {{ $data['email'] }}
            </p>

            <p>🧳 Our team will contact you shortly with the best options for your travel preferences.</p>

            <p>🌍 Ready to explore? Visit us at 👉 <a href="http://127.0.0.1:8000/welcome">www.gtholidays.in</a> for more amazing packages.</p>

            <p>🚀 Let the adventure begin!</p>
        </div>
        <div class="email-footer">
            © {{ date('Y') }} ✈️ GTHolidays. All rights reserved.
        </div>
    </div>
</body>
</html>
