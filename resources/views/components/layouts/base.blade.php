<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div><!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Linkora Home - Premium Dark</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#9F1D35", // Wine Red
                        "primary-hover": "#8a192e",
                        "background-dark": "#121212", // Dark Charcoal
                        "surface": "#1c1c1c",
                        "surface-highlight": "#2a2a2a",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Manrope", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "1rem",
                        "2xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background-dark font-body text-white antialiased overflow-x-hidden selection:bg-primary selection:text-white">
    <div class="relative flex h-auto min-h-screen w-full flex-col">
        <header
            class="fixed top-0 z-50 w-full bg-[#121212]/80 backdrop-blur-md border-b border-white/5 transition-all duration-300">
            <div class="flex items-center h-20 justify-between px-6 max-w-7xl mx-auto w-full">
                <div class="flex items-center">
                    <p class="text-white tracking-tight text-2xl font-display font-bold">LINKORA<span
                            class="text-primary">.</span></p>
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-medium text-white/70 hover:text-white transition-colors"
                        href="#">Work</a>
                    <a class="text-sm font-medium text-white/70 hover:text-white transition-colors"
                        href="#">Services</a>
                    <a class="text-sm font-medium text-white/70 hover:text-white transition-colors"
                        href="#">Agency</a>
                </nav>
                <div class="flex items-center gap-4">
                    <button
                        class="bg-white text-black px-6 py-2.5 rounded-full text-sm font-bold transition-all hover:bg-gray-200 hidden sm:block">
                        Start Project
                    </button>
                    <button class="text-white hover:text-primary transition-colors sm:hidden">
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </header>
    {{ $slot }}
        <footer class="bg-background-dark border-t border-white/5 text-white py-16 px-6">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-12">
                <div class="max-w-xs">
                    <p class="text-2xl font-display font-bold mb-6">LINKORA<span class="text-primary">.</span></p>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">
                        A premium creative agency tailored for the modern digital landscape. We craft experiences that
                        matter.
                    </p>
                    <div class="flex gap-4">
                        <a class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-primary transition-colors"
                            href="#">
                            <i class="text-xs">IG</i>
                        </a>
                        <a class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-primary transition-colors"
                            href="#">
                            <i class="text-xs">TW</i>
                        </a>
                        <a class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-primary transition-colors"
                            href="#">
                            <i class="text-xs">LI</i>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-12">
                    <div class="flex flex-col gap-4">
                        <h4 class="text-sm font-bold uppercase tracking-widest text-white/30">Company</h4>
                        <a class="text-sm text-white/70 hover:text-white transition-colors" href="#">About</a>
                        <a class="text-sm text-white/70 hover:text-white transition-colors" href="#">Careers</a>
                        <a class="text-sm text-white/70 hover:text-white transition-colors" href="#">Contact</a>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h4 class="text-sm font-bold uppercase tracking-widest text-white/30">Services</h4>
                        <a class="text-sm text-white/70 hover:text-white transition-colors"
                            href="#">Branding</a>
                        <a class="text-sm text-white/70 hover:text-white transition-colors"
                            href="#">Strategy</a>
                        <a class="text-sm text-white/70 hover:text-white transition-colors" href="#">Web
                            Design</a>
                    </div>
                    <div class="col-span-2 md:col-span-1 flex flex-col gap-4">
                        <h4 class="text-sm font-bold uppercase tracking-widest text-white/30">Get in touch</h4>
                        <a class="text-lg font-display font-bold text-white hover:text-primary transition-colors"
                            href="mailto:hello@linkora.com">
                            hello@linkora.com
                        </a>
                        <p class="text-sm text-white/40">New York, NY 10012</p>
                    </div>
                </div>
            </div>
            <div
                class="max-w-7xl mx-auto mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-xs text-white/30">
                <p>© 2024 Linkora Agency. All rights reserved.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a class="hover:text-white" href="#">Privacy Policy</a>
                    <a class="hover:text-white" href="#">Terms of Service</a>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
