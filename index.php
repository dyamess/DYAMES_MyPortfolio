<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>James Adrian | System Architect</title>
    <meta name="description" content="Portfolio of James Adrian C. Celestino, Full Stack Web Developer.">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&family=JetBrains+Mono:wght@400;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        base: '#030303',
                        surface: '#0a0a0a',
                        surfaceLight: '#111111',
                    }
                }
            }
        }
    </script>
    <style>
        body { 
            background-color: #030303; 
            color: #FFFFFF; 
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* --- ENHANCED PRELOADER --- */
        #preloader {
            position: fixed;
            inset: 0;
            background: #030303;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.8s ease-in-out;
        }
        
        .glow-text {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        /* Custom Cyber Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #030303; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #FFF; }

        /* Plexus Canvas Layer */
        #particle-canvas {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            z-index: -1; pointer-events: none; opacity: 0.6;
        }

        /* --- BORDERLESS FLOATING CARDS --- */
        .void-card {
            background: #0a0a0a;
            border-radius: 12px;
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        
        @media (hover: hover) {
            .void-card:hover {
                transform: translateY(-8px);
                background: #111111;
                box-shadow: 0 20px 40px rgba(255,255,255,0.03);
            }
            .group:hover img {
                filter: grayscale(0%);
                transform: scale(1);
            }
        }
        
        @media (hover: none) {
            .group:active img { filter: grayscale(0%); transform: scale(1); }
        }

        .img-container { background: #050505; border-radius: 12px 12px 0 0; }
        @media (min-width: 768px) {
            .img-container.side-img { border-radius: 12px 0 0 12px; }
        }
        
        img { transform: scale(1.05); transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1); }

        .typing-cursor::after { content: '█'; animation: blink 1s step-start infinite; }
        @keyframes blink { 50% { opacity: 0; } }

        .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal.active { opacity: 1; transform: translateY(0); }

        .marquee {
            white-space: nowrap; overflow: hidden; box-sizing: border-box;
            padding: 1.5rem 0; background: transparent;
        }
        .marquee span {
            display: inline-block; padding-left: 100%;
            animation: marquee 25s linear infinite;
            font-family: 'JetBrains Mono', monospace;
            font-size: 1rem; font-weight: 700; color: #444; text-transform: uppercase;
        }
        @keyframes marquee { 0% { transform: translate(0, 0); } 100% { transform: translate(-100%, 0); } }
    </style>
</head>
<body class="selection:bg-white selection:text-black">

    <div id="preloader">
        <div class="w-full max-w-md px-6 flex flex-col items-center">
            <div id="loading-text" class="font-mono text-xs sm:text-sm text-gray-400 mb-4 tracking-widest uppercase">ESTABLISHING CONNECTION...</div>
            <div class="w-full h-1 bg-[#111] rounded-full overflow-hidden mb-3">
                <div id="loading-bar" class="h-full bg-white w-0 transition-all duration-75 ease-out rounded-full"></div>
            </div>
            <div id="loading-percent" class="font-mono text-white text-lg font-bold glow-text">0%</div>
        </div>
    </div>

    <canvas id="particle-canvas"></canvas>

    <header class="fixed top-0 w-full bg-[#030303]/80 backdrop-blur-xl z-50 transition-transform duration-300 transform translate-y-0" id="navbar">
        <div class="max-w-6xl mx-auto px-6 h-20 sm:h-24 flex justify-between items-center">
            <span class="font-black text-white text-2xl sm:text-3xl tracking-tighter cursor-pointer" onclick="window.scrollTo(0,0)">JA.</span>
            <div class="flex items-center gap-4 sm:gap-6 text-xs sm:text-sm font-bold mono uppercase tracking-wider">
                <a href="https://github.com/dyamess" target="_blank" class="text-gray-500 hover:text-white transition-colors hidden sm:flex items-center gap-2">
                    <i data-lucide="github" class="w-4 h-4"></i> GitHub
                </a>
                <a href="pdfs/JACC_CV.pdf" target="_blank" class="px-5 py-2.5 sm:px-6 sm:py-3 bg-white text-black rounded-full hover:bg-gray-300 transition-colors flex items-center gap-2 shadow-[0_0_15px_rgba(255,255,255,0.2)]">
                    <i data-lucide="file-text" class="w-4 h-4"></i> CV.PDF
                </a>
            </div>
        </div>
    </header>

    <section class="pt-32 sm:pt-48 pb-16 sm:pb-24 px-6 max-w-6xl mx-auto min-h-[85vh] flex flex-col justify-center relative">
        <div class="max-w-4xl reveal active">
            <div class="inline-flex items-center gap-3 px-4 py-2 text-gray-300 text-[10px] sm:text-xs font-mono uppercase tracking-[0.2em] mb-6 sm:mb-8 bg-white/5 rounded-full backdrop-blur-md">
                <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-white rounded-full animate-pulse"></span>
                System Architect // Developer
            </div>
            
            <h1 class="text-4xl sm:text-6xl md:text-8xl font-black text-white tracking-tighter mb-6 sm:mb-8 leading-[1.05]">
                <span id="typewriter" class="typing-cursor"></span>
            </h1>
            
            <p class="text-lg sm:text-2xl text-gray-400 mb-8 sm:mb-12 leading-relaxed max-w-2xl font-light">
                I build secure web applications that turn manual workflows into highly automated systems. Engineered for absolute data integrity and zero-friction UI.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="mailto:celestino.jamesadrian.bsit@gmail.com" class="inline-flex items-center justify-center gap-3 px-8 py-4 sm:px-10 sm:py-5 bg-white text-black font-black rounded-full uppercase tracking-widest text-xs sm:text-sm hover:bg-gray-200 transition-transform hover:scale-105 active:scale-95 duration-200 shadow-[0_0_20px_rgba(255,255,255,0.1)]">
                    INITIALIZE CONTACT <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <div class="marquee w-full overflow-hidden">
        <span>SYS.ADMIN • AUTOMATION • BACKEND ARCHITECTURE • SECURE ROUTING • DATABASE MANAGEMENT • UI/UX DESIGN • FULL STACK DEV • SYS.ADMIN</span>
    </div>

    <section class="py-16 sm:py-24 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 reveal">
            <div class="void-card p-8">
                <div class="mb-6 font-mono text-xs text-gray-500 uppercase tracking-widest">CORE_LANGUAGES</div>
                <div class="flex flex-wrap gap-2 sm:gap-3">
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">JavaScript</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">PHP</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">Python</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">Node.js</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">Java</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">C++</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">HTML/CSS</span>
                </div>
            </div>
            <div class="void-card p-8">
                <div class="mb-6 font-mono text-xs text-gray-500 uppercase tracking-widest">DATA_&_APIS</div>
                <div class="flex flex-wrap gap-2 sm:gap-3">
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">MySQL</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">PayMongo API</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">REST Integrations</span>
                </div>
            </div>
            <div class="void-card p-8">
                <div class="mb-6 font-mono text-xs text-gray-500 uppercase tracking-widest">SYS_TOOLS</div>
                <div class="flex flex-wrap gap-2 sm:gap-3">
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">Google Apps Script</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">Git/GitHub</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-md font-mono text-xs sm:text-sm text-gray-300">Workspace Automations</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 sm:py-24 px-6 max-w-6xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-black text-white mb-12 sm:mb-16 tracking-tighter uppercase reveal">System Builds</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-12">
            
            <div class="void-card flex flex-col group reveal">
                <div class="relative w-full aspect-video overflow-hidden img-container">
                    <img src="assets/am-group.png" alt="AM Group UI" class="w-full h-full object-cover grayscale" loading="lazy">
                    <div class="absolute top-4 left-4 bg-white/10 backdrop-blur-md rounded-md text-white text-[10px] font-mono px-3 py-1">SYS_01</div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl sm:text-2xl font-black text-white mb-4 uppercase tracking-tight leading-tight">AM Group Machine Inventory</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">JS/PHP/MySQL</span>
                    </div>
                    <ul class="space-y-3 text-sm sm:text-base text-gray-400 font-medium mt-auto">
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Developed an inventory web app with secure routing for internal teams.</li>
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Automated PDF proposal generation by auto-fetching live data.</li>
                    </ul>
                </div>
            </div>

            <div class="void-card flex flex-col group reveal">
                <div class="relative w-full aspect-video overflow-hidden img-container">
                    <img src="assets/sole-avenue.png" alt="Sole Avenue UI" class="w-full h-full object-cover grayscale" loading="lazy">
                    <div class="absolute top-4 left-4 bg-white/10 backdrop-blur-md rounded-md text-white text-[10px] font-mono px-3 py-1">SYS_02</div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl sm:text-2xl font-black text-white mb-4 uppercase tracking-tight leading-tight">Sole Avenue PH Stockroom Hub</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">Apps Script</span>
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">JS/HTML</span>
                    </div>
                    <ul class="space-y-3 text-sm sm:text-base text-gray-400 font-medium mt-auto">
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Engineered an automated dashboard for instant SKU-to-rack matching.</li>
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Designed a strictly minimalist UI to reduce staff visual fatigue.</li>
                    </ul>
                </div>
            </div>

            <div class="void-card flex flex-col group reveal">
                <div class="relative w-full aspect-video overflow-hidden img-container">
                    <img src="assets/resort.png" alt="Resort Dashboard UI" class="w-full h-full object-cover grayscale" loading="lazy">
                    <div class="absolute top-4 left-4 bg-white/10 backdrop-blur-md rounded-md text-white text-[10px] font-mono px-3 py-1">SYS_03</div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl sm:text-2xl font-black text-white mb-4 uppercase tracking-tight leading-tight">Aleinah's Resort Management</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">PHP/MySQL</span>
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">PayMongo API</span>
                    </div>
                    <ul class="space-y-3 text-sm sm:text-base text-gray-400 font-medium mt-auto">
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Built a full-stack booking dashboard replacing legacy spreadsheet workflows.</li>
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Integrated live payments and automated employee payroll.</li>
                    </ul>
                </div>
            </div>

            <div class="void-card flex flex-col group reveal">
                <div class="relative w-full aspect-video overflow-hidden img-container">
                    <img src="assets/foodlab.png" alt="Food Lab UI" class="w-full h-full object-cover grayscale" loading="lazy">
                    <div class="absolute top-4 left-4 bg-white/10 backdrop-blur-md rounded-md text-white text-[10px] font-mono px-3 py-1">SYS_04</div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl sm:text-2xl font-black text-white mb-4 uppercase tracking-tight leading-tight">Prime Food Lab Inventory</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">Apps Script</span>
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">Google Sheets</span>
                    </div>
                    <ul class="space-y-3 text-sm sm:text-base text-gray-400 font-medium mt-auto">
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Developed a specialized tracking system to maintain precise stock levels.</li>
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Streamlined ingredient management entirely within Google Workspace.</li>
                    </ul>
                </div>
            </div>

            <div class="void-card flex flex-col md:flex-row group reveal md:col-span-2">
                <div class="md:w-5/12 h-48 md:h-auto relative overflow-hidden img-container side-img">
                    <img src="assets/am-group-purchase.png" alt="AM Group Purchase Order UI" class="w-full h-full object-cover grayscale" loading="lazy">
                    <div class="absolute top-4 left-4 bg-white/10 backdrop-blur-md rounded-md text-white text-[10px] font-mono px-3 py-1">SYS_05</div>
                </div>
                <div class="md:w-7/12 p-8 sm:p-10 flex flex-col justify-center">
                    <h3 class="text-xl sm:text-3xl font-black text-white mb-4 uppercase tracking-tight leading-tight">AM Group Purchase Order System</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">Apps Script</span>
                        <span class="text-[10px] sm:text-xs font-mono font-bold text-gray-400 bg-white/5 rounded px-2 py-1">HTML/CSS</span>
                    </div>
                    <ul class="space-y-3 text-sm sm:text-base text-gray-400 font-medium">
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Built an automated workflow engine to replace manual purchase order paperwork.</li>
                        <li class="flex items-start gap-3"><span class="font-mono text-white mt-0.5">>></span> Auto-generated formatted, error-free PO documents to streamline procurement.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="py-16 sm:py-24 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 sm:gap-20">
            
            <div>
                <h2 class="text-2xl sm:text-3xl font-black text-white mb-10 tracking-tighter uppercase reveal">Timeline</h2>
                <div class="space-y-10 pl-2">
                    <div class="reveal flex gap-6">
                        <div class="w-2 h-2 rounded-full bg-white shadow-[0_0_10px_#FFF] mt-2 shrink-0"></div>
                        <div>
                            <span class="text-[10px] sm:text-xs font-mono text-gray-500 block mb-2">MAR 2026 - MAY 2026</span>
                            <h3 class="text-base sm:text-lg font-bold text-white uppercase tracking-tight">Systems Developer Intern</h3>
                            <p class="text-gray-400 text-sm mt-1">AM Group / Prime Food Lab</p>
                        </div>
                    </div>
                    
                    <div class="reveal flex gap-6">
                        <div class="w-2 h-2 rounded-full bg-gray-500 mt-2 shrink-0"></div>
                        <div>
                            <span class="text-[10px] sm:text-xs font-mono text-gray-500 block mb-2">JAN 2026 - MAR 2026</span>
                            <h3 class="text-base sm:text-lg font-bold text-white uppercase tracking-tight">IT & Systems Developer Intern</h3>
                            <p class="text-gray-400 text-sm mt-1">ZWART Trading OPC (Sole Avenue PH)</p>
                        </div>
                    </div>

                    <div class="reveal flex gap-6">
                        <div class="w-2 h-2 rounded-full bg-gray-700 mt-2 shrink-0"></div>
                        <div>
                            <span class="text-[10px] sm:text-xs font-mono text-gray-500 block mb-2">SUMMER</span>
                            <h3 class="text-base sm:text-lg font-bold text-white uppercase tracking-tight">Administrative Intern</h3>
                            <p class="text-gray-400 text-sm mt-1">Elsa Liwanag Tinsay Accounting and CPA's</p>
                        </div>
                    </div>

                    <div class="reveal flex gap-6 pt-6">
                        <div class="w-2 h-2 rounded-full bg-[#111] mt-2 shrink-0"></div>
                        <div>
                            <span class="text-[10px] sm:text-xs font-mono text-gray-500 block mb-2">GRADUATION: 2026</span>
                            <h3 class="text-base sm:text-lg font-bold text-white uppercase tracking-tight">BS Information Technology</h3>
                            <p class="text-gray-400 text-sm mt-1">Bulacan State University Main Campus</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-2xl sm:text-3xl font-black text-white mb-10 tracking-tighter uppercase reveal">Certifications</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                    <div class="void-card p-6 reveal">
                        <i data-lucide="shield-check" class="w-6 h-6 text-white mb-4"></i>
                        <h4 class="font-bold text-sm text-white mb-2">Intro to Cybersecurity</h4>
                        <p class="text-[10px] font-mono text-gray-500">CISCO • 2025</p>
                    </div>
                    <div class="void-card p-6 reveal">
                        <i data-lucide="shield-alert" class="w-6 h-6 text-white mb-4"></i>
                        <h4 class="font-bold text-sm text-white mb-2">Cyber Threat Management</h4>
                        <p class="text-[10px] font-mono text-gray-500">CISCO • 2025</p>
                    </div>
                    <div class="void-card p-6 reveal">
                        <i data-lucide="server" class="w-6 h-6 text-white mb-4"></i>
                        <h4 class="font-bold text-sm text-white mb-2">IT Service Management</h4>
                        <p class="text-[10px] font-mono text-gray-500">ISO/IEC 20000 • 2024</p>
                    </div>
                    <div class="void-card p-6 reveal">
                        <i data-lucide="briefcase" class="w-6 h-6 text-white mb-4"></i>
                        <h4 class="font-bold text-sm text-white mb-2">Business Foundations</h4>
                        <p class="text-[10px] font-mono text-gray-500">ENTREPRENEURSHIP • 2024</p>
                    </div>
                    <div class="void-card p-6 reveal sm:col-span-2">
                        <i data-lucide="file-badge" class="w-6 h-6 text-white mb-4"></i>
                        <h4 class="font-bold text-sm text-white mb-2">Intellectual Property Course</h4>
                        <p class="text-[10px] font-mono text-gray-500">ILEAP • 2024</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="py-12 sm:py-16 bg-[#030303] text-center px-6 mt-10">
        <div class="w-16 h-1 bg-[#111] rounded-full mx-auto mb-8"></div>
        <p class="text-[10px] sm:text-xs font-mono text-gray-600 uppercase tracking-[0.2em] sm:tracking-[0.3em]">
            James Adrian C. Celestino // SYSTEM_ARCHITECT // 2026
        </p>
    </footer>

    <script>
        lucide.createIcons();

        // --- ENHANCED PRELOADER LOGIC ---
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            const loadingText = document.getElementById('loading-text');
            const loadingBar = document.getElementById('loading-bar');
            const loadingPercent = document.getElementById('loading-percent');
            
            const messages = [
                "ESTABLISHING SECURE CONNECTION...",
                "RETRIEVING ENCRYPTED ASSETS...",
                "COMPILING UI COMPONENTS...",
                "BYPASSING MAINFRAME...",
                "ACCESS GRANTED."
            ];
            
            let progress = 0;
            let messageIndex = 0;
            
            const interval = setInterval(() => {
                progress += Math.floor(Math.random() * 5) + 2; 
                if (progress > 100) progress = 100;
                
                loadingBar.style.width = progress + '%';
                loadingPercent.innerText = progress + '%';
                
                if (progress > 20 && messageIndex === 0) { messageIndex++; loadingText.innerText = messages[messageIndex]; }
                if (progress > 45 && messageIndex === 1) { messageIndex++; loadingText.innerText = messages[messageIndex]; }
                if (progress > 75 && messageIndex === 2) { messageIndex++; loadingText.innerText = messages[messageIndex]; }
                
                if (progress === 100) {
                    loadingText.innerText = messages[4];
                    clearInterval(interval);
                    
                    setTimeout(() => {
                        preloader.style.opacity = '0';
                        setTimeout(() => {
                            preloader.style.display = 'none';
                            startTypewriter(); 
                        }, 800);
                    }, 600);
                }
            }, 35); 
        });

        // --- TYPEWRITER EFFECT ---
        const text = "Hi, I'm James Adrian.";
        const typewriterElement = document.getElementById('typewriter');
        let i = 0;
        function startTypewriter() {
            if (i < text.length) {
                typewriterElement.innerHTML += text.charAt(i);
                i++;
                setTimeout(startTypewriter, Math.random() * 50 + 50); 
            }
        }

        // --- SCROLL REVEAL ENGINE ---
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -20px 0px" });
        revealElements.forEach(el => revealObserver.observe(el));

        // --- DYNAMIC NAVBAR ---
        let lastScrollY = window.scrollY;
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > lastScrollY && window.scrollY > 80) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            lastScrollY = window.scrollY;
        });

        // --- PLEXUS ZOOM CANVAS (Dots Removed, Mouse Magnet Added) ---
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');
        
        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resizeCanvas();

        let particlesArray = [];
        // Track mouse position
        let mouse = { x: null, y: null };
        window.addEventListener('mousemove', (event) => {
            mouse.x = event.x;
            mouse.y = event.y;
        });
        window.addEventListener('mouseout', () => {
            mouse.x = null;
            mouse.y = null;
        });

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.directionX = (Math.random() * 1) - 0.5;
                this.directionY = (Math.random() * 1) - 0.5;
            }
            // NO DOTS DRAWN. Only invisible nodes exist.
            update() {
                if (this.x > canvas.width || this.x < 0) { this.directionX = -this.directionX; }
                if (this.y > canvas.height || this.y < 0) { this.directionY = -this.directionY; }
                this.x += this.directionX; 
                this.y += this.directionY;
            }
        }

        function init() {
            particlesArray = [];
            const particleFactor = window.innerWidth < 768 ? 20000 : 12000; 
            let numberOfParticles = (canvas.height * canvas.width) / particleFactor;
            
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }

        function animate() {
            requestAnimationFrame(animate);
            ctx.clearRect(0, 0, innerWidth, innerHeight);
            
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
            }
            
            connectPlexus();
        }

        function connectPlexus() {
            let maxDistance = window.innerWidth < 768 ? (canvas.width / 6) * (canvas.height / 6) : (canvas.width / 9) * (canvas.height / 9);
            
            for (let a = 0; a < particlesArray.length; a++) {
                // Connect particles to each other
                for (let b = a; b < particlesArray.length; b++) {
                    let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x))
                                 + ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));
                    
                    if (distance < maxDistance) {
                        let opacity = 1 - (distance / maxDistance);
                        // Subtle background lines
                        ctx.strokeStyle = 'rgba(255,255,255,' + (opacity * 0.15) + ')';
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                        ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                        ctx.stroke();
                    }
                }
                
                // ZOOM EFFECT: Connect particles to the MOUSE
                if (mouse.x != null && mouse.y != null) {
                    let mouseDist = ((particlesArray[a].x - mouse.x) * (particlesArray[a].x - mouse.x))
                                  + ((particlesArray[a].y - mouse.y) * (particlesArray[a].y - mouse.y));
                    
                    // Increased radius for mouse connection to simulate light/zoom
                    if (mouseDist < maxDistance * 1.5) {
                        let mouseOpacity = 1 - (mouseDist / (maxDistance * 1.5));
                        // Brighter lines pulling toward cursor
                        ctx.strokeStyle = 'rgba(255,255,255,' + (mouseOpacity * 0.35) + ')';
                        ctx.lineWidth = 1.5;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                        ctx.lineTo(mouse.x, mouse.y);
                        ctx.stroke();
                    }
                }
            }
        }
        
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                resizeCanvas();
                init();
            }, 200);
        });

        init(); 
        requestAnimationFrame(animate);
    </script>
</body>
</html>