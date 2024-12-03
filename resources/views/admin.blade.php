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

    <!-- Admin Header -->
    <x-admin-header />

    <!-- Admin Sidebar -->
    <x-admin-sidebar />

    <!-- Main Content -->
    <div class="ml-[20%] p-6">
        <h1 class="text-2xl font-bold text-gray-700">Welcome to the Admin Dashboard</h1>
        <p class="text-gray-600">Here you can manage your data and monitor performance.</p>
    </div>

</body>
</html>