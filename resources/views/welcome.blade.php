<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            background-image: url('https://radarlombok.co.id/wp-content/uploads/2023/03/slider-travel-go-lombok-2.jpg'); /* Ganti path/to/your/image.jpg dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-black shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-white">BrandName</a>
                </div>
                <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 mr-2">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700 mr-2">
                    Register
                </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to Our Landing Page</h1>
        <p class="text-lg text-gray-600 mb-12">Discover our amazing features and services.</p>
    </main>

    <!-- Footer -->
    <footer class="bg-black shadow-md mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-white text-center">© 2024 BrandName. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
