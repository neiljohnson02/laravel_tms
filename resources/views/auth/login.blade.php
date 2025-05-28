<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GT Holidays - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    .custom-gradient {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #fff2c8, #7efbff);

    }
</style>

</head>
<body class="min-h-screen flex items-center justify-center custom-gradient">


    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md">
        <div class="text-center mb-6">
            
            <h2 class="text-3xl font-extrabold text-emerald-700"> ✈️ GT HOLIDAYS</h2>
            <p class="text-gray-500 text-sm">Login to plan your perfect vacation</p>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif


        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <input name="email" type="email" placeholder="Email"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>

            <input name="password" type="password" placeholder="Password"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>

            <button type="submit"
                    class="w-full bg-emerald-600 text-white font-semibold py-2 rounded hover:bg-emerald-700 transition duration-300">
                Login
            </button>
        </form>

        <p class="mt-4 text-sm text-center text-gray-600">
            No account?
            <a href="{{ route('register.form') }}" class="text-emerald-700 font-semibold hover:underline">
                Register here
            </a>
        </p>
    </div>
</body>
</html>
