<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <header class="bg-gray-100 shadow-sm py-4">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <!-- LOGO HEADER -->
                <div class="mr-[180px]">
                    <img src="{{asset('img/AppleVerse.png')}}" class="absolute h-[62px] w-auto ">
                </div>
                <!-- END LOGO HEADER -->
                <!-- SEARCH BAR HEADER -->
                <div class="relative w-1/2 mx-4">
                    <label for="Search" class="sr-only">Search</label>
                    <input type="text" id="Search" placeholder="  Search for anything..." class="w-full rounded-md border-gray-200 py-2.5 pe-10 shadow-sm sm:text-sm"/>
                    <span class="absolute inset-y-0 right-0 grid w-10 place-content-center">
                        <button type="button" class="text-gray-600 hover:text-gray-700">
                            <span class="sr-only">Search</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                                </svg>
                        </button>
                    </span>
                </div>
                <!-- END SEARCH BAR HEADER -->
                <!-- Cart and Profile Section -->
                <div class="flex items-center space-x-6">
                    <!-- Cart Icon -->
                    <a href="#" class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.99 1.99 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921M17.307 15h-6.64l-2.5-6h11.39z"/>
                            <circle cx="10.5" cy="19.5" r="1.5" />
                            <circle cx="17.5" cy="19.5" r="1.5" />
                        </svg>
                    </a>
                    <!-- Profile Button -->
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
                                    <a href="#" class="flex items-center px-4 py-2 hover:text-white hover:bg-gray-700">
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
                                    <a href="#" class="flex items-center px-4 py-2 hover:text-white hover:bg-gray-700">
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
                                    <a href="#" class="flex items-center px-4 py-2 hover:text-white hover:bg-gray-700">
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
                </div>
            </div>
            <div class="mt-4 flex justify-center items-center space-x-6">
                <!-- Navigation Links -->
                <a href="#" class="text-sm text-gray-600 hover:text-black">Track Order</a>
                <a href="#" class="text-sm text-gray-600 hover:text-black">Customer Support</a>
                <a href="#" class="text-sm text-gray-600 hover:text-black">Need Help</a>
            </div>
        </div>
    </header>




<!-- 
    <div class="relative">

        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-sm flex items-center justify-between w-full py-2 px-3 text-gray-100 rounded hover:bg-black md:border-0 md:hover:text-black md:p-0 md:w-auto dark:text-black dark:hover:text-black dark:focus:text-black dark:border-gray-700 dark:hover:bg-gray-100 md:dark:hover:bg-transparent">Dropdown 

            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>

        <div id="dropdownNavbar" class="absolute left-0 z-10 hidden mt-2 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 peer-checked:block">
            <ul class="py-2 text-sm text-gray-700">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Iphone</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Computer & Laptop</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Airpods</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Ipads</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Macbook</a>
                </li>
            </ul>
        </div>
    </div>
-->