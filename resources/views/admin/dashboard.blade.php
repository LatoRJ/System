<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body class="bg-gray-100">
        <x-admin-header />
        <div class="ml-[20%] p-6 overflow-y-auto h-screen">
            <h1 class="text-3xl font-bold text-gray-700 mb-6">Dashboard</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <!-- CONTAINER FOR THE TOTAL USER CARD -->
                <div class="bg-white shadow rounded-lg p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-gray-500 font-medium">Total User</span>
                        <div class="bg-purple-100 text-purple-600 p-2 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-800">40,689</div>
                    <div class="text-green-500 text-sm mt-2">⬆ 8.5% Up from yesterday</div>
                </div>
                <!-- CONTAINER FOR THE TOTAL ORDERS CARD -->
                <div class="bg-white shadow rounded-lg p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-gray-500 font-medium">Total Order</span>
                        <div class="bg-yellow-100 text-yellow-600 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6 transition-colors text-yellow-600 bg-yellow-100" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 14L1 8l11-6l11 6zm0 4L1.575 12.325l2.1-1.15L12 15.725l8.325-4.55l2.1 1.15zm0 4L1.575 16.325l2.1-1.15L12 19.725l8.325-4.55l2.1 1.15z" />
                            </svg>
                        </div>                        
                    </div>
                    <div class="text-3xl font-bold text-gray-800">10,293</div>
                    <div class="text-green-500 text-sm mt-2">⬆ 1.3% Up from past week</div>
                </div>
                <!-- CONTAINER FOR THE TOTAL SALES CARD -->
                <div class="bg-white shadow rounded-lg p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-gray-500 font-medium">Total Sales</span>
                        <div class="bg-green-100 text-green-600 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                    <path d="M3.5 4v13.5a3 3 0 0 0 3 3H20"/>
                                    <path d="m6.5 15l4.5-4.5l3.5 3.5L20 8.5"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-800">$89,000</div>
                    <div class="text-red-500 text-sm mt-2">⬇ 4.3% Down from yesterday</div>
                </div>
                <!-- CONTAINER FOR THE TOTAL PENDING CARD -->
                <div class="bg-white shadow rounded-lg p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-gray-500 font-medium">Total Pending</span>
                        <div class="bg-orange-200 text-orange-500 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.5 8H12v5l4.28 2.54l.72-1.21l-3.5-2.08zM13 3a9 9 0 0 0-9 9H1l3.96 4.03L9 12H6a7 7 0 0 1 7-7a7 7 0 0 1 7 7a7 7 0 0 1-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42A8.9 8.9 0 0 0 13 21a9 9 0 0 0 9-9a9 9 0 0 0-9-9"/>
                            </svg>
                        </div>                        
                    </div>
                    <div class="text-3xl font-bold text-gray-800">2,040</div>
                    <div class="text-green-500 text-sm mt-2">⬆ 1.8% Up from yesterday</div>
                </div>
            </div>
            <!-- LINE CHART SECTION-->
            <div class="bg-white shadow rounded-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Sales Details</h2>
                    <!-- DROPDOWN FOR DATE SELECTION -->
                    <select class="bg-gray-100 border border-gray-300 text-gray-600 text-sm rounded px-3 py-1 focus:outline-none">
                        <option>October</option>
                        <option>September</option>
                        <option>August</option>
                    </select>
                </div>
                <canvas id="lineChart" class="w-full h-64"></canvas>
            </div>
        </div>
        <script>
            const ctx = document.getElementById('lineChart').getContext('2d');
            const lineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['5k', '10k', '15k', '20k', '25k', '30k', '35k', '40k', '45k', '50k', '55k', '60k'],
                    datasets: [{
                        label: 'Sales Overview',
                        data: [20, 25, 40, 35, 55, 45, 60, 30, 50, 48, 52, 57],
                        borderColor: '#2563eb',
                        backgroundColor: 'rgba(37, 99, 235, 0.2)',
                        pointBackgroundColor: '#2563eb',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 5,
                        pointHoverRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false },
                        tooltip: { enabled: true }
                    },
                    scales: {
                        x: { grid: { display: false } },
                        y: { beginAtZero: true }
                    }
                }
            });
        </script>
    </body>
</html>