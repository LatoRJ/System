<header class="sticky top-0 bg-[E7E8E7] shadow-md py-4 px-6 relative z-50">
    <div class="flex items-center justify-between">
        <!-- Left: Logo/Menu Button -->
        <div class="flex items-center space-x-4">
            <button id="sidebarToggle" class="text-gray-600 hover:text-gray-800">
                <i class="bx bx-menu text-2xl"></i>
            </button>
            <h1 class="text-lg font-semibold text-gray-700">Admin Dashboard</h1>
        </div>

        <!-- Center: Search Bar -->
        <div class="relative w-1/2 mx-4">
            <label for="Search" class="sr-only">Search</label>
            <input type="text" id="Search" placeholder="Search for anything..." class="w-full rounded-md border-gray-200 py-2.5 px-3 shadow-sm sm:text-sm focus:outline-none focus:ring-4 focus:ring-gray-600" />
            <span class="absolute inset-y-0 right-0 grid w-10 place-content-center">
                <button type="button" class="text-gray-600 hover:text-gray-700">
                    <span class="sr-only">Search</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </span>
        </div>

        <!-- Right: Notification and User Profile -->
        <div class="flex items-center space-x-4">
            <button class="text-gray-600 hover:text-blue-600">
                <i class="bx bx-bell text-2xl"></i>
            </button>
            <div class="flex items-center space-x-2">
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-black rounded-full hover:text-blue-600" type="button">
                    <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="img/Iphone.png" alt="user photo">
                    <span class="ml-2">John Doe</span>
                    <svg class="w-2.5 h-2.5 ml-2 text-black-100 dark:text-gray-300 group-hover:text-blue-500 dark:group-hover:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" ="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-50 hidden bg-gray-100 divide-y divide-[E7E8E7] rounded-lg shadow w-44 dark:divide-gray-600 absolute top-full mt-2 right-0">
                    <div class="px-4 py-3 text-sm text-black">
                        <div class="font-medium">John Doe</div>
                        <div class="truncate">Admin</div>
                    </div>
                    <ul class="py-2 text-sm text-black">
                        <li>
                            <a href="#" class="flex items-center px-4 py-2 hover:text-blue-500 hover:bg-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 24 24">
                                    <defs>
                                        <linearGradient id="gradient-blue-white" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="60%" stop-color="#1e90ff"/>
                                            <stop offset="100%" stop-color="#ffffff"/>
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#gradient-blue-white)" d="M10 4a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4m7 8a.26.26 0 0 0-.26.21l-.19 1.32c-.3.13-.59.29-.85.47l-1.24-.5c-.11 0-.24 0-.31.13l-1 1.73c-.06.11-.04.24.06.32l1.06.82a4.2 4.2 0 0 0 0 1l-1.06.82a.26.26 0 0 0-.06.32l1 1.73c.06.13.19.13.31.13l1.24-.5c.26.18.54.35.85.47l.19 1.32c.02.12.12.21.26.21h2c.11 0 .22-.09.24-.21l.19-1.32c.3-.13.57-.29.84-.47l1.23.5c.13 0 .26 0 .33-.13l1-1.73a.26.26 0 0 0-.06-.32l-1.07-.82c.02-.17.04-.33.04-.5s-.01-.33-.04-.5l1.06-.82a.26.26 0 0 0 .06-.32l-1-1.73c-.06-.13-.19-.13-.32-.13l-1.23.5c-.27-.18-.54-.35-.85-.47l-.19-1.32A.236.236 0 0 0 19 12zm-7 2c-4.42 0-8 1.79-8 4v2h9.68a7 7 0 0 1-.68-3a7 7 0 0 1 .64-2.91c-.53-.06-1.08-.09-1.64-.09m8 1.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5c-.84 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5"/>
                                </svg>Manage Account
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-2 hover:text-blue-500 hover:bg-blue-200">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                    <defs>
                                        <linearGradient id="gradient-pink-white" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="60%" stop-color="#ff69b4"/>
                                            <stop offset="100%" stop-color="#ffffff"/>
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#gradient-pink-white)" d="M216.57 39.43a80 80 0 0 0-132.66 81.35L28.69 176A15.86 15.86 0 0 0 24 187.31V216a16 16 0 0 0 16 16h32a8 8 0 0 0 8-8v-16h16a8 8 0 0 0 8-8v-16h16a8 8 0 0 0 5.66-2.34l9.56-9.57A79.7 79.7 0 0 0 160 176h.1a80 80 0 0 0 56.47-136.57M180 92a16 16 0 1 1 16-16a16 16 0 0 1-16 16"/>
                                </svg>Change Password
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-2 hover:text-blue-500 hover:bg-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                                    <defs>
                                        <linearGradient id="purple-white-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="60%" stop-color="#800080"/>
                                            <stop offset="100%" stop-color="#ffffff"/>
                                        </linearGradient>
                                    </defs>
                                    <path fill="none" stroke="url(#purple-white-gradient)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1-15.357-2m15.357 2H15"/>
                                </svg>Activity
                            </a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <a href="/" class="flex items-center px-4 py-2 text-sm hover:text-black hover:bg-red-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" style="fill: url(#red-white-gradient);">
                                <defs>
                                    <linearGradient id="red-white-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="10%" stop-color="#ff0000"/>
                                        <stop offset="100%" stop-color="#ffffff"/>
                                    </linearGradient>
                                </defs>
                                <path d="M3 3h8V1H3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8v-2H3z"/>
                                <path d="M13 5v4H5v2h8v4l6-5z"/>
                            </svg>Log Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div id="sidebar" class="w-[20%] h-screen bg-[E7E8E7] shadow-md fixed p-4 transition-all duration-200 ease-in-out">
        <!-- Sidebar -->
        <ul class="space-y-4">
            <li>
                <a href="/dashboard" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md transition-colors {{ request()->is('dashboard') ? 'bg-blue-100 text-blue-500' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M2 6.5c0-2.121 0-3.182.659-3.841S4.379 2 6.5 2s3.182 0 3.841.659S11 4.379 11 6.5s0 3.182-.659 3.841S8.621 11 6.5 11s-3.182 0-3.841-.659S2 8.621 2 6.5m11 11c0-2.121 0-3.182.659-3.841S15.379 13 17.5 13s3.182 0 3.841.659S22 15.379 22 17.5s0 3.182-.659 3.841S19.621 22 17.5 22s-3.182 0-3.841-.659S13 19.621 13 17.5m-11 0c0-2.121 0-3.182.659-3.841S4.379 13 6.5 13s3.182 0 3.841.659S11 15.379 11 17.5s0 3.182-.659 3.841S8.621 22 6.5 22s-3.182 0-3.841-.659S2 19.621 2 17.5m11-11c0-2.121 0-3.182.659-3.841S15.379 2 17.5 2s3.182 0 3.841.659S22 4.379 22 6.5s0 3.182-.659 3.841S19.621 11 17.5 11s-3.182 0-3.841-.659S13 8.621 13 6.5" />
                    </svg>
                    <span class="ml-3 sidebar-text">Dashboard</span>
                </a>
            </li>

            <!-- Product -->
            <li>
                <a href="/productstocks" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md group transition-colors {{ request()->is('productstocks') ? 'bg-blue-100 text-blue-500' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6 transition-colors text-gray-700 group-hover:text-blue-500" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 14L1 8l11-6l11 6zm0 4L1.575 12.325l2.1-1.15L12 15.725l8.325-4.55l2.1 1.15zm0 4L1.575 16.325l2.1-1.15L12 19.725l8.325-4.55l2.1 1.15z" />
                    </svg>
                    <span class="ml-3 sidebar-text group-hover:text-blue-500">Product Stocks</span>
                </a>
            </li>

            <!-- Inbox -->
            <li>
                <a href="/inbox" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md transition-colors {{ request()->is('inbox') ? 'bg-blue-200 text-blue-600' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.84 8.84 0 0 1-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7M7 9H5v2h2zm8 0h-2v2h2zM9 9h2v2H9z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3 sidebar-text">Inbox</span>
                </a>
            </li>

            <!-- Order Lists -->
            <li>
                <a href="orders" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md group transition-colors {{ request()->is('orders') ? 'bg-blue-100 text-blue-500' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6 transition-colors text-gray-700 group-hover:text-blue-500" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M5.586 4.586C5 5.172 5 6.114 5 8v9c0 1.886 0 2.828.586 3.414S7.114 21 9 21h6c1.886 0 2.828 0 3.414-.586S19 18.886 19 17V8c0-1.886 0-2.828-.586-3.414S16.886 4 15 4H9c-1.886 0-2.828 0-3.414.586M9 8a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2zm0 4a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2z" clip-rule="evenodd"/>
                    </svg>
                    <span class="ml-3 sidebar-text group-hover:text-blue-500">Order Lists</span>
                </a>
            </li>

            <!-- Invoice -->
            <li>
                <a href="/invoice" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md group transition-colors {{ request()->is('invoice') ? 'bg-blue-100 text-blue-500' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-colors text-gray-700 group-hover:text-blue-500" viewBox="0 0 24 24">
                        <defs>
                            <mask id="solarCardBold0">
                                <g fill="none">
                                    <path fill="#fff" d="M14 4h-4C6.229 4 4.343 4 3.172 5.172c-.844.843-1.08 2.057-1.146 4.078h19.948c-.066-2.021-.302-3.235-1.146-4.078C19.657 4 17.771 4 14 4m-4 16h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12q0-.662-.002-1.25H2.002Q1.999 11.338 2 12c0 3.771 0 5.657 1.172 6.828S6.229 20 10 20" />
                                    <path fill="#000" fill-rule="evenodd" d="M5.25 16a.75.75 0 0 1 .75-.75h4a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75m6.5 0a.75.75 0 0 1 .75-.75H14a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75" clip-rule="evenodd" />
                                </g>
                            </mask>
                        </defs>
                        <path fill="currentColor" d="M0 0h24v24H0z" mask="url(#solarCardBold0)" />
                    </svg>
                    <span class="ml-3 sidebar-text group-hover:text-blue-500">Invoice</span>
                </a>
            </li>

            <!-- Customer -->
            <li>
                <a href="#" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md group transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6 transition-colors text-gray-700 group-hover:text-blue-500" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z" clip-rule="evenodd"/>
                    </svg>
                    <span class="ml-3 sidebar-text group-hover:text-blue-500">Customer</span>
                </a>
            </li>
        </ul>
    </div>
<script>
    const dropdownButton = document.getElementById('dropdownAvatarNameButton');
    const dropdownMenu = document.getElementById('dropdownAvatarName');

    dropdownButton.addEventListener('click', function () {
        dropdownMenu.classList.toggle('hidden');
    });

    const sidebarToggle = document.querySelector("#sidebarToggle");
    const sidebar = document.querySelector("#sidebar");
    const sidebarTexts = document.querySelectorAll(".sidebar-text");

    sidebarToggle.addEventListener("click", function () {
    sidebar.classList.toggle("w-[5%]");
    sidebar.classList.toggle("w-[20%]");
    sidebarTexts.forEach((text) => {
    text.classList.toggle("hidden");
    });
});
</script>
