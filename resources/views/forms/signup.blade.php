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
                <form action="#" method="POST" class="space-y-6 mt-28">
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
                    <!-- PASSWORD CREDENTIALS -->
                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <!-- Password Input -->
                            <input type="password" name="password" id="password" placeholder="Create a Password"
                                class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                            
                            <!-- Toggle Button with SVG Icon -->
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 px-3 flex items-center">
                                <svg id="toggle-icon" class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                    <path id="eye-path" fill="gray" d="M8.073 12.194L4.212 8.333c-1.52 1.657-2.096 3.317-2.106 3.351L2 12l.105.316C2.127 12.383 4.421 19 12.054 19c.929 0 1.775-.102 2.552-.273l-2.746-2.746a3.987 3.987 0 0 1-3.787-3.787M12.054 5c-1.855 0-3.375.404-4.642.998L3.707 2.293L2.293 3.707l18 18l1.414-1.414l-3.298-3.298c2.638-1.953 3.579-4.637 3.593-4.679l.105-.316l-.105-.316C21.98 11.617 19.687 5 12.054 5m1.906 7.546c.187-.677.028-1.439-.492-1.96s-1.283-.679-1.96-.492L10 8.586A3.96 3.96 0 0 1 12.054 8c2.206 0 4 1.794 4 4a3.94 3.94 0 0 1-.587 2.053z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- CONFIRM PASSWORD CREDENTIALS -->
                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <!-- Password Input -->
                            <input type="password" name="password" id="password" placeholder="Confirm Password"
                                class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                            
                            <!-- Toggle Button with SVG Icon -->
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 px-3 flex items-center">
                                <svg id="toggle-icon" class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                    <path id="eye-path" fill="gray" d="M8.073 12.194L4.212 8.333c-1.52 1.657-2.096 3.317-2.106 3.351L2 12l.105.316C2.127 12.383 4.421 19 12.054 19c.929 0 1.775-.102 2.552-.273l-2.746-2.746a3.987 3.987 0 0 1-3.787-3.787M12.054 5c-1.855 0-3.375.404-4.642.998L3.707 2.293L2.293 3.707l18 18l1.414-1.414l-3.298-3.298c2.638-1.953 3.579-4.637 3.593-4.679l.105-.316l-.105-.316C21.98 11.617 19.687 5 12.054 5m1.906 7.546c.187-.677.028-1.439-.492-1.96s-1.283-.679-1.96-.492L10 8.586A3.96 3.96 0 0 1 12.054 8c2.206 0 4 1.794 4 4a3.94 3.94 0 0 1-.587 2.053z"/>
                                </svg>
                            </button>
                        </div>
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
                    <a href="/login" class="font-medium text-[#22303F] hover:text-[#394A56]">Login</a>
                </p>
            </div>
        </div>
    </body>

</html>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyePath = document.getElementById('eye-path');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            // Modify SVG path to "eye-open"
            eyePath.setAttribute("d", "M12 5C7 5 3.5 8.5 2 12c1.5 3.5 5 7 10 7s8.5-3.5 10-7c-1.5-3.5-5-7-10-7zm0 12c-2.8 0-5-2.2-5-5s2.2-5 5-5 5 2.2 5 5-2.2 5-5 5zm0-8c-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3-1.3-3-3-3z");
        } else {
            passwordInput.type = 'password';
            // Modify SVG path back to "eye-closed"
            eyePath.setAttribute("d", "M8.073 12.194L4.212 8.333c-1.52 1.657-2.096 3.317-2.106 3.351L2 12l.105.316C2.127 12.383 4.421 19 12.054 19c.929 0 1.775-.102 2.552-.273l-2.746-2.746a3.987 3.987 0 0 1-3.787-3.787M12.054 5c-1.855 0-3.375.404-4.642.998L3.707 2.293L2.293 3.707l18 18l1.414-1.414l-3.298-3.298c2.638-1.953 3.579-4.637 3.593-4.679l.105-.316l-.105-.316C21.98 11.617 19.687 5 12.054 5m1.906 7.546c.187-.677.028-1.439-.492-1.96s-1.283-.679-1.96-.492L10 8.586A3.96 3.96 0 0 1 12.054 8c2.206 0 4 1.794 4 4a3.94 3.94 0 0 1-.587 2.053z");
        }
    }
</script>>