<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Honeymoon Booking Confirmation</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background: #fff0f5; /* romantic soft pink */
            margin: 0;
            padding: 40px;
            color: #4b2e2e; /* soft romantic brown */
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
            background: #c08497; /* soft mauve/pink */
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
            color: #6d4c41; /* rich chocolate tone */
            font-size: 22px;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.6;
        }
        .email-footer {
            background: #fde2e4; /* romantic blush pink */
            text-align: center;
            font-size: 13px;
            color: #a0522d;
            padding: 20px;
        }
        .highlight {
            color: #d2608c; /* romantic rose */
            font-weight: bold;
        }
        a {
            color: #a64d79; /* romantic plum */
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
        <h1>💖 Thank You for Booking Your Honeymoon with GTHolidays!</h1>
    </div>

    <div class="email-body" style="font-family: Arial, sans-serif; font-size: 15px;">
        <h2>💕 Dear <span class="highlight">{{ $data['first_name'] }}</span>,</h2>

        <p>We’re thrilled to confirm your <strong>Honeymoon Booking</strong>! Here's your sweet beginning to forever:</p>

        <p>
            <strong>👩‍❤️‍👨 Travel Group:</strong> {{ $data['travel_group'] }}<br>
            <strong>📧 Email:</strong> {{ $data['email'] }}<br>
            <strong>📞 Phone:</strong> {{ $data['phone'] }}<br>
            <strong>🏡 Address:</strong> {{ $data['address_line1'] }}, {{ $data['city'] }}, {{ $data['state'] }} - {{ $data['zip'] }}<br>
            <strong>💖 Package:</strong> {{ $data['description'] }}<br>
            <strong>💳 Card Holder:</strong> {{ $data['card_first_name'] }} {{ $data['card_last_name'] }}<br>
            <strong>📅 Payment Date:</strong> {{ $data['date'] }}<br>
            <strong>💵 Amount Paid:</strong> ${{ $data['amount'] }}<br>
            <strong>🖋️ Signature:</strong>
            @if($data['signature_url'] !== 'N/A')
                <br><img src="{{ $data['signature_url'] }}" alt="Signature" style="height: 80px; border:1px solid #ccc;">
            @else
                N/A
            @endif
        </p>

        <p style="margin-top: 20px;">💌 Our team will contact you shortly to finalize every romantic detail of your journey.</p>

        <p>🌸 Want to explore more dreamy destinations? Visit 👉 <a href="https://www.gtholidays.in" target="_blank">www.gtholidays.in</a></p>

        <p>🌅 Thank you for choosing <strong>GTHolidays</strong>. Wishing you a journey full of love and unforgettable memories!</p>
    </div>

    <div class="email-footer">
        © {{ date('Y') }} 💍 GTHolidays – Crafting Dreams Together.
    </div>
</div>

</body>
</html>
