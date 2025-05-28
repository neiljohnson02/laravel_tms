<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tour Booking Confirmation</title>
    <style>
        body {
            font-family: 'Georgia', serif;

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

   <div class="email-body" style="font-family: Arial, sans-serif; font-size: 15px; color: #333;">
    <h2 style="color: #2c3e50;">👋 Hello <span style="color: #3498db;">{{ $data['first_name'] }}</span>,</h2>

    <p>We’ve received your <strong>Premium Tour</strong> booking with the following details:</p>

    <p style="line-height: 1.6;">
        <strong>👥 Travel Group:</strong> {{ $data['travel_group'] }}<br>
        <strong>📧 Email:</strong> {{ $data['email'] }}<br>
        <strong>📞 Phone:</strong> {{ $data['phone'] }}<br>
        <strong>🏠 Address:</strong> {{ $data['address_line1'] }}, {{ $data['city'] }}, {{ $data['state'] }} - {{ $data['zip'] }}<br>
        <strong>💵 Amount Paid:</strong> ${{ $data['amount'] }}<br>
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

    <p style="margin-top: 20px;">✅ Our team will get in touch with you shortly to confirm the details and assist with your travel arrangements.</p>

    <p>🌍 Want to see more packages? Visit 👉 <a href="https://www.gtholidays.in" target="_blank">www.gtholidays.in</a></p>

    <p>🚀 Thank you for choosing <strong>GTHolidays</strong>. Let the adventure begin!</p>
</div>

<div class="email-footer" style="margin-top: 30px; text-align: center; color: #888; font-size: 13px;">
    © {{ date('Y') }} ✈️ GTHolidays. All rights reserved.
</div>


</div>

</body>
</html>
