<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include your CSS and other head content here -->
    <style>
        .dropdown-menu {
            z-index: 1000; /* Adjust the z-index to a higher value if needed */
        }
    </style>
</head>

<body class="font-sans ">

    <nav class="border-b border-gray-800  flex fixed top-0 w-full z-50">
        <div class="container mx-auto flex items-center justify-between px-4 py-2 text-slate-900 bg-white font-normal md:font-bold">
            <div class="flex-shrink">
                <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                    alt="Your Company">
            </div>
            <ul class="flex flex-col md:flex-row items-center ml-90">
                <!-- Your navigation links go here -->
                <li>

                </li>
                <li class="md:ml-6 mt-1 ">
                    <a href="{{ route("admin.all") }}" class="hover::text-gray-300">News</a>
                </li>
                <li class="md:ml-6 mt-1 ">
                    <a href="{{ route("admin.all") }}" class="hover::text-gray-300">Be Owner</a>
                </li>
                <li class="md:ml-6 mt-1 ">
                    <a href="{{ route("admin.all") }}" class="hover::text-gray-300">NGO</a>
                </li>
                <li class="md:ml-6 mt-1 ">
                    <a href="{{ route("admin.all") }}" class="hover::text-gray-300">Articles</a>
                </li>
                <li class="md:ml-6 mt-1 ">
                    <a href="{{ route("admin.all") }}" class="hover::text-gray-300">Articles</a>
                </li>
                <li class="md:ml-6 mt-1 ">
                    <a href="{{ route("admin.all") }}" class="hover::text-gray-300">Articles</a>
                </li>
                <li>
                    <input type="text" class="bg-white text-sm rounded-full focus:outline-none focus:shadow-outline px-2 py-1 ml-5 mt-1" placeholder="Search">
                </li>
                <!-- Add other navigation links as needed -->
            </ul>

            <div class="flex mt-2 ml-50">
                <div class="ml-50">

                </div>
                <div class="mr-2">
                    <div x-data="{ open: false }">
                        <div x-data="{ open: false }" class="flex-col md:flex-row relative ml-4">
                            <div class="w-10 h-10 rounded-full overflow-hidden border-2 dark:border-white border-gray-900 mb-2">
                                <img @click="open = !open" src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover">
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 w-60 px-5 py-3 dark:bg-gray-800 bg-slate-500 rounded-lg shadow border dark:border-transparent dropdown-menu">
                                <div class="dropdown">
                                    <div class="flex-row-reverse items-center mb-6">
                                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                            <div class="mr-3">
                                                <img class="hover:opacity-75 rounded-full overflow-hidden w-30 h-50" src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ddb mb-7 mt-8">
                                        <ul class="mt-4">
                                            <li class="font-medium mt-4">
                                                <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                                    <div class="mr-3">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                    </div>
                                                    Profile
                                                </a>
                                            </li>
                                            <li class="font-medium mt-4">
                                                <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                                    <div class="mr-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16"> <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/> </svg>
                                                    </div>
                                                    Notification
                                                </a>
                                            </li>
                                            <li class="font-medium mt-4">
                                                <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                                    <div class="mr-3">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                    </div>
                                                    Settings
                                                </a>
                                            </li>
                                            <li class="font-medium mt-4">
                                                <a href=" {{ route("admin.login")}}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                                    <div class="mr-3">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                                    </div>
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Include your other scripts or footer content here -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
</body>

</html>
