<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mango Royal Milkshake</title>
    <!-- Tailwind CSS (Using CDN for preview purposes) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        royalred: {
                            500: '#cc0000',
                            600: '#a80000',
                            700: '#850000',
                        },
                        royalyellow: {
                            400: '#fcd34d',
                            500: '#f1b500', 
                            600: '#d9a300',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50 scroll-smooth">
    
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>