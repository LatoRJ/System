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
        <h1 class="text-3xl font-bold text-gray-700 mb-6">Order Lists</h1>
            <!-- Filters Section -->
            <div class="flex items-center bg-gray-100 px-8 py-4 rounded-md shadow-sm mb-6 w-[600px]">
                <div class="flex items-center space-x-8 w-full">
                    <button class="flex items-center text-gray-700 font-medium">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <ellipse cx="12" cy="5" rx="9" ry="2"/>
                            <path d="M3 5c0 2.23 3.871 6.674 5.856 8.805A4.2 4.2 0 0 1 10 16.657V19a2 2 0 0 0 2 2v0a2 2 0 0 0 2-2v-2.343c0-1.061.421-2.075 1.144-2.852C17.13 11.674 21 7.231 21 5"/>
                        </svg>
                        Filter By
                    </button>
                    <button class="border-0 border-b border-gray-300 focus:border-gray-500 text-gray-700 font-medium focus:outline-none">Date</button>
                    <button class="border-0 border-b border-gray-300 focus:border-gray-500 text-gray-700 font-medium focus:outline-none">Order Type</button>
                    <button class="border-0 border-b border-gray-300 focus:border-gray-500 text-gray-700 font-medium focus:outline-none">Order Status</button>
                    <button class="flex items-center text-red-500 font-medium ml-auto">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                            <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3.578 6.487A8 8 0 1 1 2.5 10.5"/>
                                <path d="M7.5 6.5h-4v-4"/>
                            </g>
                        </svg>
                        Reset Filter
                    </button>
                </div>
            </div>                                   
            <!-- Orders Table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100 text-gray-600 uppercase text-sm font-medium">
                        <tr>
                            <th class="p-4 text-left border-b">ID</th>
                            <th class="p-4 text-left border-b">Name</th>
                            <th class="p-4 text-left border-b">Address</th>
                            <th class="p-4 text-left border-b">Date</th>
                            <th class="p-4 text-left border-b">Type</th>
                            <th class="p-4 text-left border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <!-- Sample Rows -->
                        @foreach ($orders as $order)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-4">{{ $order->id }}</td>
                                <td class="p-4">{{ $order->name }}</td>
                                <td class="p-4">{{ $order->address }}</td>
                                <td class="p-4">{{ $order->date }}</td>
                                <td class="p-4">{{ $order->type }}</td>
                                <td class="p-4">
                                    <span class="px-3 py-1 rounded-full text-sm
                                        @if ($order->status === 'Completed') bg-green-100 text-green-700
                                        @elseif ($order->status === 'Processing') bg-purple-100 text-purple-700
                                        @elseif ($order->status === 'Rejected') bg-red-100 text-red-700
                                        @elseif ($order->status === 'On Hold') bg-yellow-100 text-yellow-700
                                        @elseif ($order->status === 'In Transit') bg-blue-100 text-blue-700
                                        @endif">
                                        {{ $order->status }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    </body>