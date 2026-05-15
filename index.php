<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Portfolio | 2026 Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background: #0a0a0a; color: #fff; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .bento-item { transition: all 0.3s ease; }
        .bento-item:hover { transform: translateY(-5px); border-color: rgba(255, 255, 255, 0.3); background: rgba(255, 255, 255, 0.06); }
        .gradient-text { background: linear-gradient(90deg, #3b82f6, #8b5cf6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="p-4 md:p-10">

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-4">
        
        <!-- Profile Card -->
        <div class="md:col-span-2 md:row-span-2 glass rounded-3xl p-8 flex flex-col justify-between bento-item">
            <div>
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl mb-6"></div>
                <h1 class="text-4xl font-extrabold mb-2">Hello, I'm <span class="gradient-text">A Developer</span></h1>
                <p class="text-gray-400 text-lg">I build high-performance web applications and automated workflows.</p>
            </div>
            <div class="flex gap-4 mt-8">
                <a href="#contact" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition">Get in touch</a>
                <a href="#" class="px-6 py-3 glass rounded-full font-semibold flex items-center gap-2">
                    <i data-lucide="github"></i> GitHub
                </a>
            </div>
        </div>

        <!-- Tech Stack Card -->
        <div class="glass rounded-3xl p-6 bento-item">
            <h3 class="text-sm uppercase tracking-widest text-gray-500 font-bold mb-4">Core Stack</h3>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-blue-500/10 text-blue-400 rounded-lg border border-blue-500/20 text-sm">PHP</span>
                <span class="px-3 py-1 bg-orange-500/10 text-orange-400 rounded-lg border border-orange-500/20 text-sm">SQL</span>
                <span class="px-3 py-1 bg-yellow-500/10 text-yellow-400 rounded-lg border border-yellow-500/20 text-sm">JavaScript</span>
                <span class="px-3 py-1 bg-green-500/10 text-green-400 rounded-lg border border-green-500/20 text-sm">Apps Script</span>
            </div>
        </div>

        <!-- Experience/CV Card -->
        <div class="glass rounded-3xl p-6 bento-item flex flex-col justify-between">
            <h3 class="text-sm uppercase tracking-widest text-gray-500 font-bold mb-2">Experience</h3>
            <p class="text-xl font-semibold text-white">3+ Years Building Automation Tools</p>
            <a href="resume.pdf" class="text-blue-400 flex items-center gap-2 mt-4 hover:underline">
                View Full CV <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
            </a>
        </div>

        <!-- QR Code Card -->
        <div class="glass rounded-3xl p-6 bento-item flex flex-col items-center justify-center text-center">
            <div class="bg-white p-2 rounded-xl mb-3">
                <!-- Replace with your actual QR code image -->
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://your-portfolio.vercel.app" alt="QR Code" class="w-24 h-24">
            </div>
            <p class="text-xs text-gray-500">Scan to view <br>on mobile</p>
        </div>

        <!-- Project 1 -->
        <div class="md:col-span-2 glass rounded-3xl overflow-hidden bento-item group">
            <div class="h-48 bg-gray-800 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="Project" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
            </div>
            <div class="p-6">
                <h4 class="text-xl font-bold">Automated Proposal System</h4>
                <p class="text-gray-400 text-sm mt-2">Dynamic PDF generation with real-time price fetching from database.</p>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="md:col-span-1 glass rounded-3xl p-6 bento-item">
            <h4 class="text-lg font-bold">Sales Workflow</h4>
            <p class="text-gray-400 text-sm mt-2">Internal tools for sales team documentation.</p>
            <div class="mt-4 flex gap-2">
                <i data-lucide="database" class="text-gray-500"></i>
                <i data-lucide="file-text" class="text-gray-500"></i>
            </div>
        </div>

        <!-- Connect Card -->
        <div class="glass rounded-3xl p-6 bento-item flex items-center justify-between col-span-1">
            <span class="font-bold">Let's Work</span>
            <div class="flex gap-2">
                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                <span class="text-xs text-green-500 uppercase">Available</span>
            </div>
        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>