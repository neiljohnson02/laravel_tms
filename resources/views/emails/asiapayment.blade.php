<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Asia Tour Booking Confirmation</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background: #f9f6f1;
            margin: 0;
            padding: 40px;
            color: #2c3e50;
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
            background: #27ae60;
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
            font-family: Arial, sans-serif;
            font-size: 15px;
            color: #333;
        }
        .email-body h2 {
            color: #27ae60;
            font-size: 22px;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.6;
        }
        .email-footer {
            background: #e9f7ef;
            text-align: center;
            font-size: 13px;
            color: #666;
            padding: 20px;
        }
        .highlight {
            color: #27ae60;
            font-weight: bold;
        }
        a {
            color: #d35400;
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
        <h1>🌏 Thank You for Booking Your Asia Tour with GTHolidays!</h1>
    </div>

    <div class="email-body">
        <h2>👋 Hello <span class="highlight">{{ $data['first_name'] }}</span>,</h2>

        <p>We’ve received your <strong>Asia Tour Package</strong> booking with the following details:</p>

        <p>
            <strong>👥 Travel Group:</strong> {{ $data['travel_group'] }}<br>
            <strong>📧 Email:</strong> {{ $data['email'] }}<br>
            <strong>📞 Phone:</strong> {{ $data['phone'] }}<br>
            <strong>🏠 Address:</strong> {{ $data['address_line1'] }}, {{ $data['city'] }}, {{ $data['state'] }} - {{ $data['zip'] }}<br>
            <strong>💵 Amount Paid:</strong> ₹{{ $data['amount'] }}<br>
            <strong>📝 Description:</strong> {{ $data['description'] }}<br>
            <strong>💳 Card Holder:</strong> {{ $data['card_first_name'] }} {{ $data['card_last_name'] }}<br>
            <strong>📅 Payment Date:</strong> {{ $data['date'] }}<br>
            <strong>🖋️ Signature:</strong>
            @if($data['signature_url'] !== 'N/A')
                <br><img src="{{ $data['signature_url'] }}" alt="Signature" style="height: 80px; border:1px solid #ccc;">
            @else
                N/A
            @endif
        </p>

        <p style="margin-top: 20px;">✅ Our Asia travel team will reach out shortly to finalize your travel plans and ensure everything is perfect for your journey.</p>

        <p>🌐 Discover more incredible tours at <a href="https://www.gtholidays.in" target="_blank">www.gtholidays.in</a></p>

        <p>🕌 Thank you for choosing <strong>GTHolidays</strong>. Get ready for your adventure across Asia!</p>
    </div>

    <div class="email-footer">
        © {{ date('Y') }} 🌏 GTHolidays. All rights reserved.
    </div>
</div>
</body>
</html>
