<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - UltraProMax Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #fff2c8, #7efbff);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
      <h2 class="text-2xl font-bold text-center text-emerald-600 mb-4">
         ✈️ GT HOLIDAYS
        </h2>

        <p class="text-sm text-center text-gray-500 mb-6">Create your account to start exploring dream destinations</p>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Full Name" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-400">

            <input type="email" name="email" placeholder="Email Address" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-400">

            <input type="password" name="password" placeholder="Password" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-400">

            <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-400">

            <button type="submit"
                    class="w-full bg-emerald-500 text-white py-2 rounded-md font-semibold hover:bg-emerald-600 transition">
                Register
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('login.form') }}" class="text-sm text-gray-600 hover:text-emerald-600">
                Already have an account? <span class="underline">Login</span>
            </a>
        </div>
    </div>

</body>
</html>
