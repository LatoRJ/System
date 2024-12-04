<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="style.css">
</head>
<!--BODY OF CONTENTS -->
    <body class="bg-gray-200">
    <!--THIS IS A COMPONENT, CTRL + CLICK TO SHOW. -->
    <x-header/>
    <!-- MAIN CONTAINER CONSIST PRODUCT LIST IN HOME CONTENT -->
        <div class="container h-screen mt-8 flex fixed">
            <!-- MAIN CONTAINER SIDEBAR CONSIST OF CATEGORY LIST, BELOW IS CATEGORY CONTAINER-->
            <div class="w-[20%] h-[100%] bg-white p-6 shadow-md">
                <!-- CATEGORY TITLE -->
                <h2 class="text-xl font-bold mb-4 text-gray-700">Category</h2>
                <!-- START OF CATEGORY LIST -->
                <ul class="space-y-2">
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>iPhone</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>Computer & Laptop</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>AirPods</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>iPad</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>MacBook</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>Apple Watch</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>Accessories</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center space-x-2">
                            <input id=checkboxes type="checkbox">
                            <span>Apple Gift Card</span>
                        </label>
                    </li>
                </ul>
                <h2 class="text-lg font-bold mt-8 mb-4 text-gray-700"></h2>
            </div>
            <!--MAIN CONTAINER ~LIST OF ALL PRODUCTS, THIS SECTION MUST GATHER ALL THE DATA FROM DATABASE PRODUCT LIST TO DISPLAY -->
            <div class="w-4/5 p-6 bg-gray-100">
                <!--MUST USE FOREACH LOOP TO RENDER ALL THE PRODUCT LIST -->
                <div class="text-center text-gray-500">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est veniam odit unde? Doloribus voluptates consequuntur exercitationem ducimus, totam nam ipsa numquam culpa modi eos, neque iure. Minus, iste laudantium?</p>
                </div>
            </div>
        </div>
    </body>
</html>