<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tour Booking Confirmation</title>
    <style>
      body {
        font-family: 'Georgia', serif;
        background: #e3f2fd; /* light blue for travel theme */
        margin: 0;
        padding: 40px;
        color: #1a237e; /* deep indigo */
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
        background: #1976d2; /* blue header */
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
        color: #0d47a1; /* deep blue */
        font-size: 22px;
      }

      .email-body p {
        font-size: 16px;
        line-height: 1.6;
      }

      .email-footer {
        background: #bbdefb; /* light blue footer */
        text-align: center;
        font-size: 13px;
        color: #0d47a1;
        padding: 20px;
      }

      .highlight {
        color: #1565c0;
        font-weight: bold;
      }

      a {
        color: #0d47a1;
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
        <h2>👋 Hello <span class="highlight">{{ $data['email'] }}</span>,</h2>

        <p>We’ve received your <strong>Asia Tour Package</strong> booking with the following details:</p>

        <p>
            <strong>📅 Departure Date:</strong> {{ $data['departure'] }}<br>
            <strong>👨 Adults:</strong> {{ $data['adult'] }}<br>
            <strong>🧒 Children:</strong> {{ $data['children'] ?? 0 }}<br>
            <strong>👶 Infants:</strong> {{ $data['infant'] ?? 0 }}<br>
            <strong>🌍 Package Chosen:</strong> {{ ucfirst($data['package']) }}<br>
            <strong>➕ Add-ons:</strong>
            @if(!empty($data['addons']))
                {{ is_array($data['addons']) ? implode(', ', $data['addons']) : implode(', ', json_decode($data['addons'])) }}
            @else
                None
            @endif<br>
            <strong>📝 Special Requests:</strong> {{ $data['requests'] ?? 'None' }}<br>
            <strong>📧 Email:</strong> {{ $data['email'] }}
        </p>

        <p>🗺️ Our travel experts will reach out to you shortly to confirm your adventure across Asia and help finalize all arrangements.</p>

        <p>🌐 Want to explore more destinations? Visit 👉 <a href="http://127.0.0.1:8000/welcome">www.gtholidays.in</a></p>

        <p>✈️ Thank you for choosing GTHolidays for your unforgettable Asia journey!</p>
    </div>

    <div class="email-footer">
        © {{ date('Y') }} 🌏 GTHolidays. All rights reserved.
    </div>
</div>
</body>
</html>
