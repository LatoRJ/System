<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body 
        {
            background-color: #394956;
        }
    </style>
</head>
    <body class="min-h-screen flex items-center justify-center">
        
        <!-- WHOLE CONTAINER-->
        <div class="bg-[#E7E8E7] shadow-lg rounded-lg w-[1200px] h-[650px] flex relative">
            <!--LEFT SIDE CONTAINER -->
            <div class="w-1/2 h-full p-10 flex flex-col justify-center">
                <div class="text-center -mt-12 mb-6">
                    <h1 class="text-5xl font-bold">Login</h1>
                </div>
                <!-- LOG IN FORM-->
                <form action="#" method="POST" class="space-y-6">
                    <!-- EMAIL -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>
                    <!-- PASSWORD -->
                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <!-- Password Input -->
                            <input type="password" name="password" id="password" placeholder="Enter Password"
                                class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                            
                            <!-- Toggle Button with SVG Icon -->
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 px-3 flex items-center">
                                <svg id="toggle-icon" class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                    <path id="eye-path" fill="gray" d="M8.073 12.194L4.212 8.333c-1.52 1.657-2.096 3.317-2.106 3.351L2 12l.105.316C2.127 12.383 4.421 19 12.054 19c.929 0 1.775-.102 2.552-.273l-2.746-2.746a3.987 3.987 0 0 1-3.787-3.787M12.054 5c-1.855 0-3.375.404-4.642.998L3.707 2.293L2.293 3.707l18 18l1.414-1.414l-3.298-3.298c2.638-1.953 3.579-4.637 3.593-4.679l.105-.316l-.105-.316C21.98 11.617 19.687 5 12.054 5m1.906 7.546c.187-.677.028-1.439-.492-1.96s-1.283-.679-1.96-.492L10 8.586A3.96 3.96 0 0 1 12.054 8c2.206 0 4 1.794 4 4a3.94 3.94 0 0 1-.587 2.053z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!--REMEMBER ME AND FORGOT PASSWORD -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 text-[#F9E6E6] focus:ring-[#F9E6E6] border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 text-sm text-gray-900">Remember me</label>
                        </div>
                        <!-- FORGOT PASSWORD -->
                        <div class="text-sm">
                            <a href="" class="font-medium text-[#22303F] hover:text-[#394A56]">Forgot your password?</a>
                        </div>
                    </div>
                    <!-- SIGN IN BUTTON -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border rounded-md shadow-sm text-sm font-medium text-white bg-[#22303F] hover:bg-[#394A56] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F9E6E6]">
                            Sign In
                        </button>
                    </div>
                    <!--REGISTER HERE -->
                    <p class="text-sm text-center text-black mt-6">
                        Don't have an account? <a href="/signup" class="font-medium text-[#394A56] hover:text-[#22303F]">Sign up</a>
                    </p>
                </form>
            </div>
            <!-- IMG CONTAINER, RIGHTSIDE -->
            <div class="w-1/2 h-full flex items-center justify-center">
                <div class="w-full h-full shadow rounded-r bg-[#22303F]">
                    <!-- <img src="{{asset('img/pic1.png')}}" alt="" class="absolute right-2 w-[55%] h-auto"> -->
                </div>
            </div>
        </div>
    </body>
</html>