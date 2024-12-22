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
        <x-admin-header />
        <div class="ml-[20%] p-6">
            <h1 class="text-3xl font-bold text-gray-700 mb-6">Product Stocks</h1>
            
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                <thead class="bg-[E7E8E7] border-b border-gray-200">
                    <tr>
                        <th class="p-4 text-left text-sm font-medium text-gray-500">Image</th>
                        <th class="p-4 text-left text-sm font-medium text-gray-500">Product Name</th>
                        <th class="p-4 text-left text-sm font-medium text-gray-500">Category</th>
                        <th class="p-4 text-left text-sm font-medium text-gray-500">Price</th>
                        <th class="p-4 text-left text-sm font-medium text-gray-500">Piece</th>
                        <th class="p-4 text-left text-sm font-medium text-gray-500">Available Color</th>
                        <th class="p-4 text-left text-sm font-medium text-gray-500">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-4"><img src="{{asset('img/Iphone.png')}}" alt="Product Image" class="w-10 h-10 rounded-md"></td>
                        <td class="p-4 text-gray-700">Iphone 11 Pro</td>
                        <td class="p-4 text-gray-700">Iphones</td>
                        <td class="p-4 text-gray-700">$338.00</td>
                        <td class="p-4 text-gray-700">69</td>
                        <td class="p-4">
                            <div class="flex space-x-2">
                                <span class="block w-4 h-4 bg-black rounded-full"></span>
                                <span class="block w-4 h-4 bg-gray-500 rounded-full"></span>
                                <span class="block w-4 h-4 bg-pink-500 rounded-full"></span>
                            </div>
                        </td>
                        <td class="p-4">
                            <button class="px-4 py-2 text-black bg-white rounded-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                </svg>
                            </button>                              
                            <button class="px-4 py-2 text-sm text-white bg-red-500 rounded-md">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-4"><img src="{{asset('img/airbuds.png')}}" alt="Product Image" class="w-10 h-10 rounded-md"></td>
                        <td class="p-4 text-gray-700">AirPods Max</td>
                        <td class="p-4 text-gray-700">AirPods</td>
                        <td class="p-4 text-gray-700">$190.00</td>
                        <td class="p-4 text-gray-700">43</td>
                        <td class="p-4">
                            <div class="flex space-x-2">
                                <span class="block w-4 h-4 bg-black rounded-full"></span>
                                <span class="block w-4 h-4 bg-pink-500 rounded-full"></span>
                                <span class="block w-4 h-4 bg-blue-500 rounded-full"></span>
                                <span class="block w-4 h-4 bg-orange-500 rounded-full"></span>
                            </div>
                        </td>
                        <td class="p-4">
                            <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md">Edit</button>
                            <button class="px-4 py-2 text-sm text-white bg-red-500 rounded-md">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-4"><img src="{{asset('img/AppleWatch.png')}}" alt="Product Image" class="w-10 h-10 rounded-md"></td>
                        <td class="p-4 text-gray-700">Apple Watch SE</td>
                        <td class="p-4 text-gray-700">Apple Watch</td>
                        <td class="p-4 text-gray-700">$420.00</td>
                        <td class="p-4 text-gray-700">52</td>
                        <td class="p-4">
                            <div class="flex space-x-2">
                                <span class="block w-4 h-4 bg-black rounded-full"></span>
                                <span class="block w-4 h-4 bg-violet-500 rounded-full"></span>
                                <span class="block w-4 h-4 bg-gray-500 rounded-full"></span>
                            </div>
                        </td>
                        <td class="p-4">
                            <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md">Edit</button>
                            <button class="px-4 py-2 text-sm text-white bg-red-500 rounded-md">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-4"><img src="{{asset('img/Applepencil.png')}}" alt="Product Image" class="w-10 h-10 rounded-md"></td>
                        <td class="p-4 text-gray-700">Apple Pencil 2nd Gen</td>
                        <td class="p-4 text-gray-700">Accessories</td>
                        <td class="p-4 text-gray-700">$190.00</td>
                        <td class="p-4 text-gray-700">15</td>
                        <td class="p-4">
                            <div class="flex space-x-2">
                                <span class="block w-4 h-4 bg-black rounded-full"></span>
                                <span class="block w-4 h-4 bg-gray-500 rounded-full"></span>
                                <span class="block w-4 h-4 bg-red-500 rounded-full"></span>
                            </div>
                        </td>
                        <td class="p-4">
                            <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md">Edit</button>
                            <button class="px-4 py-2 text-sm text-white bg-red-500 rounded-md">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-4"><img src="{{asset('img/Ipad.png')}}" alt="Product Image" class="w-10 h-10 rounded-md"></td>
                        <td class="p-4 text-gray-700">Ipad 10th Gen Pro</td>
                        <td class="p-4 text-gray-700">Ipad</td>
                        <td class="p-4 text-gray-700">$400.00</td>
                        <td class="p-4 text-gray-700">15</td>
                        <td class="p-4">
                            <div class="flex space-x-2">
                                <span class="block w-4 h-4 bg-black rounded-full"></span>
                                <span class="block w-4 h-4 bg-blue-500 rounded-full"></span>
                                <span class="block w-4 h-4 bg-red-400 rounded-full"></span>
                                <span class="block w-4 h-4 bg-pink-200 rounded-full"></span>
                            </div>
                        </td>
                        <td class="p-4">
                            <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md">Edit</button>
                            <button class="px-4 py-2 text-sm text-white bg-red-500 rounded-md">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>