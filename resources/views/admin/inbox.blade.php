<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    </head>

    <body class="bg-gray-100">
        <x-admin-header/>
        <div class="ml-[20%] p-6">
            <h1 class="text-3xl font-bold text-gray-700 mb-6">Inbox</h1>
            <div class="flex">
                <div class="w-1/4 bg-gray-100 rounded-lg p-4">
                    <!-- Compose Button -->
                    <button class="w-full bg-blue-500 text-white py-2 rounded mb-4">+ Compose</button>
        
                    <!-- My Email Links -->
                    <ul class="space-y-2">
                        <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                            <div class="flex items-center gap-x-3">
                                <!-- Inbox Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 4H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3m-.41 2l-5.88 5.88a1 1 0 0 1-1.42 0L5.41 6ZM20 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7.41l5.88 5.88a3 3 0 0 0 4.24 0L20 7.41Z"/>
                                </svg>
                                <!-- Main Text -->
                                <span class="font-medium text-gray-700 group-hover:text-blue-500">Inbox</span>
                            </div>
                            <!-- Email Count -->
                            <span class="text-sm text-gray-500">1253</span>
                        </li>
                        <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                            <div class="flex items-center gap-x-3">
                                <!-- Starred Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12M6 12h12" />
                                </svg>
                                <!-- Main Text -->
                                <span class="font-medium text-gray-700 group-hover:text-blue-500">Starred</span>
                            </div>
                            <!-- Email Count -->
                            <span class="text-sm text-gray-500">245</span>
                        </li>
                        <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                            <div class="flex items-center gap-x-3">
                                <!-- Sent Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3M13 9l3 3-3 3" />
                                </svg>
                                <!-- Main Text -->
                                <span class="font-medium text-gray-700 group-hover:text-blue-500">Sent</span>
                            </div>
                            <!-- Email Count -->
                            <span class="text-sm text-gray-500">24,532</span>
                        </li>
                        <!-- Additional Email Items -->
                        <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                            <div class="flex items-center gap-x-3">
                                <!-- Draft Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 10L3 12l3 2m9-2l3 2-3 2M6 6l3 2-3 2M9 18l3-2 3 2" />
                                </svg>
                                <span class="font-medium text-gray-700 group-hover:text-blue-500">Draft</span>
                            </div>
                            <span class="text-sm text-gray-500">09</span>
                        </li>
                    </ul>
                    <!-- Labels Section -->
                    <h3 class="mt-6 font-semibold text-gray-700">Label</h3>
                    <ul class="mt-2">
                        <li class="text-blue-400">Primary</li>
                        <li class="text-blue-500">Social</li>
                        <li class="text-yellow-500">Work</li>
                        <li class="text-pink-500">Friends</li>
                    </ul>
                    <!-- Create New Label Button -->
                    <button class="text-blue-400 mt-2 underline">+ Create New Label</button>
                </div>
            </div>
        </div>            
    </body>
</html>