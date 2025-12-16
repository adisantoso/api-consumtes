<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>API Consumtes – Public REST API</title>

    <!-- SEO -->
    <meta name="description" content="Public REST API for frontend testing. Authentication, Products CRUD, fast and reliable." />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />

    <style>
        body { font-family: 'Inter', sans-serif; }
        .text-glow { text-shadow: 0 0 12px rgba(52,211,153,.6); }
        .card-glow { transition: all .25s ease; }
        .card-glow:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(16,185,129,.2); }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#10B981',
                        brandLight: '#34D399',
                        dark: '#0A0A0A',
                        darkSoft: '#111827'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark text-gray-300">

<!-- HEADER -->
<header class="sticky top-0 z-50 backdrop-blur bg-dark/80 border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="text-xl font-extrabold text-white">
            API<span class="text-brandLight">Consumtes</span>
        </div>
        <nav class="flex items-center gap-4">
            <a href="#features" class="text-sm hover:text-brandLight">Features</a>
            <a href="#docs" class="text-sm hover:text-brandLight">Docs</a>
            <a href="#" class="bg-brand text-black font-semibold px-4 py-2 rounded-lg hover:bg-brandLight">Buy Me Coffee</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand/10 via-transparent to-transparent"></div>
    <div class="relative max-w-7xl mx-auto px-6 py-28 text-center">
        <h1 class="text-4xl md:text-6xl xl:text-7xl font-black text-white mb-6">
            Public REST API for <span class="text-brandLight text-glow">Frontend Testing</span>
        </h1>
        <p class="text-gray-400 max-w-3xl mx-auto text-lg md:text-xl mb-10">
            Authentication, Products CRUD, pagination, and clean JSON responses.
            Perfect for Angular, React, and Vue experiments.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#docs" class="bg-brand text-black font-bold px-8 py-4 rounded-xl hover:bg-brandLight">View API Docs</a>
            <a href="#" class="border border-brand text-brandLight font-bold px-8 py-4 rounded-xl hover:bg-brand hover:text-black">Get API Key</a>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section id="features" class="max-w-7xl mx-auto px-6 py-24">
    <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-14">Core Features</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="card-glow bg-darkSoft border border-gray-800 p-8 rounded-2xl">
            <h3 class="text-xl font-bold text-white mb-2">⚡ Fast & Lightweight</h3>
            <p class="text-gray-400">Optimized API responses with low latency for rapid frontend iteration.</p>
        </div>
        <div class="card-glow bg-darkSoft border border-gray-800 p-8 rounded-2xl">
            <h3 class="text-xl font-bold text-white mb-2">🔐 Auth Ready</h3>
            <p class="text-gray-400">Register, login, reset password, token-based authentication.</p>
        </div>
        <div class="card-glow bg-darkSoft border border-gray-800 p-8 rounded-2xl">
            <h3 class="text-xl font-bold text-white mb-2">📦 Products CRUD</h3>
            <p class="text-gray-400">Create, update, delete, pagination, search, and filtering.</p>
        </div>
    </div>
</section>

<!-- SAMPLE ENDPOINT -->
<section id="docs" class="bg-darkSoft border-y border-gray-800">
    <div class="max-w-7xl mx-auto px-6 py-24">
        <h2 class="text-3xl font-bold text-white mb-8 text-center">Sample Endpoints</h2>
        <div class="bg-black/40 border border-gray-800 rounded-xl p-6 text-left max-w-3xl mx-auto text-sm">
            <pre class="text-green-400">POST   /api/auth/login
GET    /api/products
POST   /api/products
PUT    /api/products/{id}
DELETE /api/products/{id}</pre>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="max-w-7xl mx-auto px-6 py-24 text-center">
    <div class="bg-gradient-to-br from-brand/20 to-transparent border border-gray-800 rounded-2xl p-12">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to Test Your Frontend?</h2>
        <p class="text-gray-400 mb-8">No signup required. Free & public for learning purposes.</p>
        <a href="#" class="bg-brand text-black font-bold px-10 py-4 rounded-xl hover:bg-brandLight">Generate API Key</a>
    </div>
</section>

<!-- FOOTER -->
<footer class="border-t border-gray-800 py-8 text-center text-gray-500">
    © 2025 APIConsumtes. Built for frontend developers.
</footer>

</body>
</html>