<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #394956;
        }
    </style>
</head>
    <body class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg w-[1200px] h-[650px] flex relative"> 
            <!--FILL WITH IMAGE !!- LEFT SIDE -!! -->
            <div class="w-1/2 h-full bg-[#22303F] rounded-l-lg flex items-center justify-center">
                <!--CALL IMG HERE-->
                <!-- <img src="{{asset('img/pic1.png')}}" alt="Signup Illustration" class="w-[80%] h-auto"> -->
            </div>
            <!-- THIS IS A FORM CONTAINER !!- RIGHT SIDE -!!  -->
            <div class="w-1/2 h-full p-12 flex flex-col justify-center relative">
                <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-6">
                    <!--FORM HEADER CONTAINER-->
                    <div class="text-center">
                        <h1 class="text-4xl font-bold mb-2">Create an account</h1>
                        <p class="text-gray-600">Enter your details below</p>
                    </div>
                </div>
                <!-- SIGN UP FORM CONTENT -->
                <form action="#" method="POST" class="space-y-5 mt-28">
                    <!-- USERNAME CREDENTIALS -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" name="username" id="username" placeholder="Create a username"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>
                    <!-- EMAIL ADDRESS CREDENTIALS -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Example@email.com"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>
                    <!-- PHONE NUMBER CREDENTIALS -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" name="phone" id="phone" placeholder="+1 e.g. 999-999-9999"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>
                    <!-- PASSWORD CREDENTIALS -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Create a Password"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>
                    <!-- CONFIRM PASSWORD CREDENTIALS -->
                    <div>
                        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>
                    <!-- SIGN UP BUTTON-->
                    <div>
                        <button type="submit"
                            class="w-full py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#22303F] hover:bg-[#394A56] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F9E6E6]">
                            Create An Account
                        </button>
                    </div>
                </form>
                <!-- IF HAVE ALREADY AN ACCOUNT, U CANT CLICK HERE -->
                <p class="text-sm text-center text-gray-500 mt-6">
                    Already have an account? 
                    <!-- ROUTE -->
                    <a href="/logintest" class="font-medium text-[#22303F] hover:text-[#394A56]">Login</a>
                </p>
            </div>
        </div>
    </body>

</html>