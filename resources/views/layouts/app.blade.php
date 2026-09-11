<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mango Royal PH | Premium Mango Goodness</title>
    <!-- Tailwind CSS (Using CDN for preview purposes) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        mango: {
                            500: '#F5B041', // Royal Mango Yellow
                            600: '#D68910',
                        },
                        leaf: {
                            500: '#27AE60', // Mango Leaf Green
                            600: '#1E8449',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">
    
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>