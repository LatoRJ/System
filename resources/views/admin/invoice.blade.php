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
            <h1 class="text-3xl font-bold text-gray-700 mb-6">Invoice</h1>
            <!-- CONATAINER FOR INVOICE TABLE-->
            <div class="bg-white shadow-md rounded-lg p-6">
                <!-- INVOICE DETAILS/HEADER -->
                <div class="grid grid-cols-3 gap-4 border-b pb-4 mb-4 text-gray-600">
                    <div>
                        <h2 class="font-semibold">Invoice From :</h2>
                        <p class="font-bold">John Doe</p>
                        <p>9694 Krajcik Locks Suite 635</p>
                    </div>
                    <div>
                        <h2 class="font-semibold">Invoice To :</h2>
                        <p class="font-bold">Austin Miller</p>
                        <p>Brookview</p>
                    </div>
                    <div class="text-right">
                        <p>Invoice Date : <span class="font-semibold">14 Dec 2024</span></p>
                        <p>Due Date : <span class="font-semibold">7 Jan 2025</span></p>
                    </div>
                </div>

                <!-- TABLE FOR INVOICE -->
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="p-3 border">Serial No.</th>
                            <th class="p-3 border">Description</th>
                            <th class="p-3 border">Quantity</th>
                            <th class="p-3 border">Base Cost</th>
                            <th class="p-3 border">Total Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3">1</td>
                            <td class="p-3">iPhone 16</td>
                            <td class="p-3">2</td>
                            <td class="p-3">$20</td>
                            <td class="p-3">$80</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">2</td>
                            <td class="p-3">iPhone 16</td>
                            <td class="p-3">2</td>
                            <td class="p-3">$50</td>
                            <td class="p-3">$100</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">3</td>
                            <td class="p-3">iPhone 16</td>
                            <td class="p-3">5</td>
                            <td class="p-3">$100</td>
                            <td class="p-3">$500</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">4</td>
                            <td class="p-3">iPhone 16</td>
                            <td class="p-3">4</td>
                            <td class="p-3">$1000</td>
                            <td class="p-3">$4000</td>
                        </tr>
                    </tbody>
                </table>
        
                <!-- RESULT FOR THE TOTAL PRICE -->
                <div class="flex justify-end mt-4">
                    <p class="text-lg font-bold">Total = <span class="text-gray-700">$4680</span></p>
                </div>
        
                <!-- BUTTONS FOR PRINT AND SEND -->
                <div class="flex justify-end items-center mt-6 space-x-3">
                    <button class="flex items-center justify-center bg-gray-100 p-2 rounded hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-black">
                            <path d="M16 8.616v-3H8v3H7v-4h10v4zm-11.423 1h14.846zm13.038 2.5q.425 0 .713-.288t.287-.712t-.287-.713t-.713-.288t-.712.288t-.288.713t.288.712t.713.288M16 19v-4.538H8V19zm1 1H7v-4H3.577v-5.384q0-.85.577-1.425t1.423-.576h12.846q.85 0 1.425.576t.575 1.424V16H17zm2.423-5v-4.384q0-.425-.287-.713t-.713-.288H5.577q-.425 0-.712.288t-.288.713V15H7v-1.538h10V15z"/>
                        </svg>
                    </button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2">
                        <span>Send</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>      
    </body>
</html