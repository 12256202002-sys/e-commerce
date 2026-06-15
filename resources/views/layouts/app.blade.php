<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arang premium berkualitas tinggi dari tempurung kelapa untuk BBQ, restoran, dan industri. Ramah lingkungan dan tahan lama.">
    <meta name="keywords" content="eco briquette, arang, briquette kelapa, arang premium, charcoal, BBQ">
    <title>Eco Briquette - Arang Premium Berkualitas</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-poppins bg-eco-dark text-white min-h-screen flex flex-col">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20eco%20briquette"
       target="_blank"
       rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center shadow-lg shadow-green-500/30 transition-all hover:scale-110 whatsapp-pulse"
       aria-label="Chat WhatsApp">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    <!-- Scroll to Top Button -->
    <button onclick="window.scrollTo({top:0,behavior:'smooth'})"
            id="scrollTopBtn"
            class="fixed bottom-6 left-6 z-50 w-10 h-10 bg-eco-dark-3 hover:bg-eco-orange rounded-full items-center justify-center border border-white/10 hover:border-eco-orange transition-all hover:scale-110 hidden"
            aria-label="Scroll to top">
        <svg class="w-5 h-5 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

    <!-- Mobile Menu Script -->
    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            // Close menu on link click
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-eco-dark/95', 'backdrop-blur-md', 'shadow-lg', 'shadow-black/30');
                    navbar.classList.remove('bg-transparent');
                } else {
                    navbar.classList.remove('bg-eco-dark/95', 'backdrop-blur-md', 'shadow-lg', 'shadow-black/30');
                    navbar.classList.add('bg-transparent');
                }
            }

            // Scroll to top button
            const scrollTopBtn = document.getElementById('scrollTopBtn');
            if (scrollTopBtn) {
                if (window.scrollY > 500) {
                    scrollTopBtn.classList.remove('hidden');
                    scrollTopBtn.classList.add('flex');
                } else {
                    scrollTopBtn.classList.add('hidden');
                    scrollTopBtn.classList.remove('flex');
                }
            }
        });

        // Add to cart animation
        function addToCart(btn) {
            const originalHTML = btn.innerHTML;
            btn.innerHTML = `
                <svg class="w-4 h-4 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Ditambah
            `;
            btn.classList.remove('bg-eco-orange', 'hover:bg-eco-orange-light');
            btn.classList.add('bg-green-600');

            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.classList.add('bg-eco-orange', 'hover:bg-eco-orange-light');
                btn.classList.remove('bg-green-600');
            }, 2000);
        }

        // Contact form
        function handleContactForm(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = `
                <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Pesan Terkirim!
            `;
            btn.classList.remove('bg-eco-orange', 'hover:bg-eco-orange-light');
            btn.classList.add('bg-green-600');

            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.classList.add('bg-eco-orange', 'hover:bg-eco-orange-light');
                btn.classList.remove('bg-green-600');
                e.target.reset();
            }, 3000);
        }
    </script>
</body>
</html>
