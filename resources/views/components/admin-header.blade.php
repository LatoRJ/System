<header class="bg-gray-100 shadow-md py-4 px-6">
    <div class="flex items-center justify-between">
        <!-- Left: Logo/Menu Button -->
        <div class="flex items-center space-x-4">
            <button class="text-gray-600 hover:text-gray-800">
                <i class="bx bx-menu text-2xl"></i>
            </button>
            <h1 class="text-lg font-semibold text-gray-700">Admin Dashboard</h1>
        </div>

        <!-- Center: Search Bar -->
    <div class="relative w-1/2 mx-4">
        <label for="Search" class="sr-only">Search</label>
        <input type="text" id="Search" placeholder="Search for anything..." class="w-full rounded-md border-gray-200 py-2.5 px-3 shadow-sm sm:text-sm focus:outline-none focus:ring focus:ring-blue-500"
        />
        <span class="absolute inset-y-0 right-0 grid w-10 place-content-center">
        <button type="button" class="text-gray-600 hover:text-gray-700">
            <span class="sr-only">Search</span>
            
            <svg  xmlns="http://www.w3.org/2000/svg"  fill="none"  viewBox="0 0 24 24"  stroke-width="1.5"  stroke="currentColor" class="size-4 w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
            </svg>
        </button>
        </span>
    </div>

    <!-- Right: Notification and User Profile -->
    <div class="flex items-center space-x-4">
        <!-- Notification Bell -->
        <button class="text-gray-600 hover:text-gray-800">
            <i class="bx bx-bell text-2xl"></i>
        </button>
        <!-- User Profile -->
        <div class="flex items-center space-x-2">
            <img src="https://via.placeholder.com/32" alt="User Avatar" class="w-8 h-8 rounded-full"/>
            <div class="text-gray-700 text-sm">
                <p>Admin Name</p>
            </div>
            <button>
            <i class="bx bx-chevron-down text-gray-600"></i>
            </button>
        </div>

    </div>
    </div>
</header>