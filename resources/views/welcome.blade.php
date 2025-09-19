<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ticket App</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
            }
        </style>
    </head>

    <body class="bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">
        <!-- Header with Rogers Logo and Login -->
        <header class="w-full bg-white dark:bg-gray-900 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Rogers Logo on Left -->
                    <div class="flex-shrink-0">
                        <!-- Light mode logo (red) -->
                        <img src="{{ asset('images/rogers-brand-red.png') }}" alt="Rogers Logo" class="h-8 w-auto dark:hidden">
                        <!-- Dark mode logo (white) -->
                        <img src="{{ asset('images/rogers-brand-white.png') }}" alt="Rogers Logo" class="h-8 w-auto hidden dark:block">
                    </div>
                    
                    <!-- Login Button and Dark Mode Toggle on Right -->
                    @if (Route::has('login'))
                        <nav class="flex items-center gap-4">

                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-200"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md text-sm font-medium text-white bg-rogers-red hover:bg-rogers-red transition-colors duration-200"
                                >
                                    Log in
                                </a>
                            @endauth
                            <!-- Dark Mode Toggle -->
                            <div class="fixed top-4 right-4">
                                <x-dark-mode-toggle />
                            </div>
                        </nav>
                    @endif
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 flex items-center justify-center px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full text-center">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Welcome to Ticket App</h1>
                <p class="text-lg text-gray-600 dark:text-gray-400">Your ticketing solution powered by Rogers Back Office</p>
            </div>
        </main>

        <!-- Footer -->
        <footer class="w-full bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                    © {{ date('Y') }} Ticket-App.
                </div>
            </div>
        </footer>

        <!-- Dark Mode Toggle Script -->
        <script>
            // Check for saved dark mode preference or default to system preference
            const darkModeToggle = document.getElementById('darkModeToggle');
            const sunIcon = document.getElementById('sunIcon');
            const moonIcon = document.getElementById('moonIcon');
            
            // Function to update icons and theme
            function updateTheme(isDark) {
                if (isDark) {
                    document.documentElement.classList.add('dark');
                    sunIcon.classList.remove('hidden');
                    moonIcon.classList.add('hidden');
                    localStorage.setItem('darkMode', 'true');
                } else {
                    document.documentElement.classList.remove('dark');
                    sunIcon.classList.add('hidden');
                    moonIcon.classList.remove('hidden');
                    localStorage.setItem('darkMode', 'false');
                }
            }
            
            // Initialize theme based on saved preference or system preference
            function initializeTheme() {
                const savedTheme = localStorage.getItem('darkMode');
                if (savedTheme !== null) {
                    updateTheme(savedTheme === 'true');
                } else {
                    // Check system preference
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    updateTheme(prefersDark);
                }
            }
            
            // Toggle dark mode
            darkModeToggle.addEventListener('click', () => {
                const isDarkMode = document.documentElement.classList.contains('dark');
                updateTheme(!isDarkMode);
            });
            
            // Listen for system theme changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                if (localStorage.getItem('darkMode') === null) {
                    updateTheme(e.matches);
                }
            });
            
            // Initialize theme on page load
            initializeTheme();
        </script>
    </body>
</html>