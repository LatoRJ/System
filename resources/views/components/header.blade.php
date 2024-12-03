<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


<header class="bg-gray-100 shadow-sm py-4">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="mr-[180px]">
                <img src="{{asset('img/AppleVerse.png')}}" class="absolute h-[62px] w-auto ">
            </div>

            <div class="relative w-1/2 mx-4">
                <label for="Search" class="sr-only">Search</label>
                    <input type="text" id="Search" placeholder="  Search for anything..." class="w-full rounded-md border-gray-200 py-2.5 pe-10 shadow-sm sm:text-sm"/>
                    <span class="absolute inset-y-0 right-0 grid w-10 place-content-center">
                    <button type="button" class="text-gray-600 hover:text-gray-700">
                        <span class="sr-only">Search</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                        </svg>
                    </button>
                </span>
            </div>

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
                <button class="px-4 py-2 bg-gray-800 text-white rounded-full hover:bg-gray-700">
                    <img src="{{asset('img/AppleVerse.png')}}" class=" h-[16px] w-[1px] ">
                </button>
            </div>
        </div>

        <div class="mt-4 flex justify-center items-center space-x-6">
            <div class="relative">
                <!-- Dropdown Toggle -->
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-sm flex items-center justify-between w-full py-2 px-3 text-gray-100 rounded hover:bg-black md:border-0 md:hover:text-black md:p-0 md:w-auto dark:text-black dark:hover:text-black dark:focus:text-black dark:border-gray-700 dark:hover:bg-gray-100 md:dark:hover:bg-transparent">Dropdown 
                    <!-- SVG -->
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    
                </button>

                <!-- Dropdown Menu -->
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
            
            <!-- Navigation Links -->
            <a href="#" class="text-sm text-gray-600 hover:text-black">Track Order</a>
            <a href="#" class="text-sm text-gray-600 hover:text-black">Customer Support</a>
            <a href="#" class="text-sm text-gray-600 hover:text-black">Need Help</a>
        </div>
    </div>
</header>
