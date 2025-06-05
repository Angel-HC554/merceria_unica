<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merceria - {{ $tituloPestaña ?? ''}}</title>

    <!-- Cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;900&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="https://placehold.co/100">
    <style>
        /*Simple scrollbar*/
        .scrollbars::-webkit-scrollbar {
            width: 6px;
        }

        .scrollbars::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px transparent;
            border-radius: 10px;
        }

        .scrollbars::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 10px;
        }

        .scrollbars.show::-webkit-scrollbar-thumb,
        .scrollbars:hover::-webkit-scrollbar-thumb {
            background: #777;
        }
    </style>
</head>

<body x-data="{ sidebar: false }" class="text-neutral-700 font-sans">
    <!--sidebar -->
    <aside :class="{ 'show': sidebar, '': !(sidebar) }"
        class="max-lg:[&.show]:translate-x-0 max-lg:-translate-x-full lg:[&.show]:-translate-x-full lg:translate-x-0 fixed start-0 top-0 w-64 h-full bg-white z-50 transition-transform">
        <div class="p-4 relative h-screen overflow-y-auto scrollbars">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 mb-6">

                <div class="size-8 bg-neutral-100 shadow flex items-center justify-center rounded">M</div>
                <h4 class="font-medium text-2xl uppercase">Merceria "La unica"</h4>
            </a>

            <!-- menu -->
            <ul class="relative flex flex-col gap-0.5 mb-12">
                <li class="relative">
                    <a href="#"
                        class=" flex items-center gap-3 justify-between py-2 px-4 hover:bg-neutral-100 [&.active]:bg-neutral-100 rounded">
                        <div class="flex items-center gap-2.5">
                            <i class="bi bi-house text-lg"></i>
                            <span class="text-sm">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="relative">
                    <a href="#"
                        class="active flex items-center gap-3 justify-between py-2 px-4 hover:bg-neutral-100 [&.active]:bg-neutral-100 rounded">
                        <div class="flex items-center gap-2.5">
                            <i class="bi bi-cart3 text-lg"></i>
                            <span class="text-sm">Productos</span>
                        </div>
                    </a>
                </li>
                <li class="relative">
                    <a href="#"
                        class="flex items-center gap-3 justify-between py-2 px-4 hover:bg-neutral-100 [&.active]:bg-neutral-100 rounded">
                        <div class="flex items-center gap-2.5">
                            <i class="bi bi-envelope text-lg"></i>
                            <span class="text-sm">Messages</span>
                        </div>
                        <span
                            class="size-4 flex justify-center items-center text-[8px] font-medium tracking-wide text-white bg-red-500 rounded-full">1</span>
                    </a>
                </li>
                <li class="relative">
                    <a href="#"
                        class="flex items-center gap-3 justify-between py-2 px-4 hover:bg-neutral-100 [&.active]:bg-neutral-100 rounded">
                        <div class="flex items-center gap-2.5">
                            <i class="bi bi-person text-lg"></i>
                            <span class="text-sm">Profile</span>
                        </div>
                    </a>
                </li>
                <li class="relative">
                    <a href="#"
                        class="flex items-center gap-3 justify-between py-2 px-4 hover:bg-neutral-100 [&.active]:bg-neutral-100 rounded">
                        <div class="flex items-center gap-2.5">
                            <i class="bi bi-gear text-lg"></i>
                            <span class="text-sm">Setting</span>
                        </div>
                    </a>
                </li>
                <li class="relative">
                    <a href="#"
                        class="flex items-center gap-3 justify-between py-2 px-4 hover:bg-neutral-100 rounded">
                        <div class="flex items-center gap-2">
                            <i class="bi bi-box-arrow-right text-lg"></i>
                            <span class="text-sm">Logout</span>
                        </div>
                    </a>
                </li>
            </ul>

            <!-- banner -->
    </aside>
    <button @click="sidebar = !sidebar" :class="{ 'show': sidebar, '': !(sidebar) }"
        class="max-lg:[&.show]:!block hidden fixed top-0 start-0 w-full h-full bg-black/50 z-40  sidebar-overlay"></button>

    <main :class="{ 'show': sidebar, '': !(sidebar) }"
        class="w-full lg:[&.show]:w-full lg:[&.show]:ms-0 lg:w-[calc(100%-256px)] lg:ms-64 bg-neutral-100 min-h-screen transition-all">
        <!-- navbar -->
        <nav class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 start-0 z-30">
            <button @click="sidebar = !sidebar" type="button" class="text-lg text-neutral-900 font-semibold">
                <i :class="{ 'show': sidebar, '': !(sidebar) }"
                    class="text-xl bi bi-list lg:hidden lg:[&.show]:block"></i>
                <i :class="{ 'show': sidebar, '': !(sidebar) }"
                    class="text-xl bi bi-arrow-left max-lg:hidden lg:[&.show]:hidden"></i>
            </button>

            <ul class="ms-auto flex items-center gap-4">
                <li class="relative">
                    <button id="fullscreen" class="text-neutral-500 hover:text-neutral-600">
                        <i class="pointer-events-none bi bi-arrows-angle-expand text-xl"></i>
                    </button>
                </li>
                <!-- Dropdown -->
                <li x-data="{ dropdown: false }" class="dropdown relative">
                    <button type="button" @click="dropdown = ! dropdown" :class="!dropdown ? '' : 'text-black'"
                        class="dropdown-toggle text-neutral-500 hover:text-neutral-600 size-8 rounded flex items-center justify-center relative">
                        <i class="pointer-events-none bi bi-envelope text-xl"></i>
                        <div
                            class="top-0 end-0 absolute size-4 flex items-center justify-center text-[8px] text-white bg-red-500 border border-white rounded-full">
                            1</div>
                    </button>

                    <div x-show="dropdown" x-transition.duration.500ms :class="!dropdown ? '' : 'show'"
                        @click.outside="dropdown = false"
                        class="[&.show]:!opacity-100 [&.show]:!visible max-md:[&.show]:!h-auto max-md:h-0 opacity-0 invisible md:z-50 absolute top-full end-0 md:-end-1/2 min-w-40 bg-white shadow-md shadow-black/5">
                        <div class="flex flex-col py-8 items-center">
                            <p class="text-sm">Message Content</p>
                        </div>
                    </div>
                </li>
                <!-- Dropdown -->
                <li x-data="{ dropdown: false }" class="dropdown relative">
                    <button type="button" @click="dropdown = ! dropdown" :class="!dropdown ? '' : 'text-black'"
                        class="dropdown-toggle text-neutral-500 hover:text-neutral-600 size-8 rounded flex items-center justify-center relative">
                        <i class="pointer-events-none bi bi-bell text-xl"></i>
                        <div
                            class="top-0 end-0 absolute size-4 flex items-center justify-center text-[8px] text-white bg-red-500 border border-white rounded-full">
                            3</div>
                    </button>

                    <div x-show="dropdown" x-transition.duration.500ms :class="!dropdown ? '' : 'show'"
                        @click.outside="dropdown = false"
                        class="[&.show]:!opacity-100 [&.show]:!visible max-md:[&.show]:!h-auto max-md:h-0 opacity-0 invisible md:z-50 absolute top-full end-0 md:-end-1/2 min-w-40 bg-white shadow-md shadow-black/5">
                        <div class="flex flex-col py-8 items-center">
                            <p class="text-sm">Notification Content</p>
                        </div>
                    </div>
                </li>
                <!-- Dropdown -->
                <li x-data="{ dropdown: false }" class="dropdown relative">
                    <button type="button" @click="dropdown = ! dropdown" :class="!dropdown ? '' : 'text-black'"
                        class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 size-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="size-8 rounded-full" src="https://placehold.co/400" alt="avatar" />
                                <div
                                    class="top-0 start-7 absolute w-3 h-3 bg-lime-500 border border-white rounded-full">
                                </div>
                            </div>
                        </div>
                        <div class="p-2 lg:block text-left">
                            <h4 class="text-sm font-medium text-neutral-800">{{ Auth::user()->name }}</h4>
                            <p class="text-xs text-neutral-500">Admin</p>
                        </div>
                    </button>

                    <ul x-show="dropdown" x-transition.duration.500ms :class="!dropdown ? '' : 'show'"
                        @click.outside="dropdown = false"
                        class="[&.show]:!opacity-100 [&.show]:!visible max-md:[&.show]:!h-auto max-md:h-0 opacity-0 invisible md:z-50 absolute top-full end-0 min-w-40 bg-white shadow-md shadow-black/5">
                        <li>
                            <a href="#"
                                class="flex items-center gap-2 py-2 px-6 hover:bg-neutral-100">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-2 py-2 px-6 hover:bg-neutral-100">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-2 py-2 px-6 hover:bg-neutral-100">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>


        <div class="py-12">
            {{ $slot}}<!-- Aqui se agrega el contenido principal -->
        </div>
        <!-- =========={ SCROLL TO TOP }==========  -->
        <a href="#"
            class="back-top fixed py-2 px-3 rounded bg-neutral-50 border border-neutral-200 text-neutral-500 end-4 bottom-4"
            aria-label="Scroll To Top">
            <i class="bi bi-arrow-up"></i>
        </a>

        <!-- full screen -->
        <script>
            // Back to top
            window.addEventListener('scroll', function() {
                var backToTopButton = document.querySelector('.back-top');
                if (window.scrollY > 100) {
                    backToTopButton.style.display = 'block';
                } else {
                    backToTopButton.style.display = 'none';
                }
            });
            document.querySelector('.back-top').addEventListener('click', function(e) {
                e.preventDefault();
                // Smooth scroll to the top
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Full Screen
            const fullscreenButton = document.getElementById('fullscreen');
            fullscreenButton.addEventListener('click', toggleFullscreen);

            function toggleFullscreen() {
                if (document.fullscreenElement) {
                    document.exitFullscreen();
                } else {
                    document.documentElement.requestFullscreen();
                }
            }
        </script>
</body>

</html>
