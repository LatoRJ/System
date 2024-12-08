<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    </head>

    <body class="bg-white">
      <x-admin-header />
      <div class="ml-[20%] p-6">
        <h1 class="text-3xl font-bold text-gray-700 mb-6">Order Lists</h1>
        <!-- Filters Section -->
          <div class="flex items-center bg-gray-100 p-3 rounded-lg shadow mb-6 w-[550px]">
              <div class="flex space-x-4">
                  <button class="flex items-center px-4 py-2 bg-gray-100 rounded-lg hover:bg-gray-200">
                      <svg class="w-5 h-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v16a1 1 0 01-1 1H4a1 1 0 01-1-1V4z" />
                      </svg>
                      Filter By
                  </button>
                  <select class="border rounded-lg p-2 text-gray-500">
                      <option>Date</option>
                  </select>
                  <select class="border rounded-lg p-2 text-gray-500">
                      <option>Order Type</option>
                  </select>
                  <select class="border rounded-lg p-2 text-gray-500">
                      <option>Order Status</option>
                  </select>
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