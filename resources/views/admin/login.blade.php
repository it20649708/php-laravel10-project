<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="font-sans bg-gray-900 text-white">

    <div class="main-wrapper min-h-screen flex flex-col">
        @include('admin.body.header')
        <div class="">
            @include('admin.body.sideall')



        <div class="flex-1 flex flex-col lg:flex-row">


            <div class="flex-1 px-4 lg:px-100 py-10 bg-gray-800">
                <style>
                    .login_img_section {
                        background: linear-gradient(rgba(2, 2, 2, .7), rgba(0, 0, 0, .7)),
                            url(https://images.unsplash.com/photo-1650825556125-060e52d40bd0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)
                        center center;
                    }
                </style>
                <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-4 ml-80">
                    <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
                        <div class="bg-black opacity-20 inset-0 z-0"></div>
                        <div class="w-full mx-auto px-4 lg:px-10 flex-col items-center space-y-4">
                            <h1 class="text-white font-bold text-2xl lg:text-4xl font-sans">Simple App</h1>
                            <p class="text-white mt-1 text-sm lg:text-base">The simplest app to use</p>
                            <div class="flex justify-center lg:justify-start mt-4">
                                <a href="#"
                                    class="hover:bg-indigo-700 hover:text-white hover:-translate-y-1 transition-all duration-500 bg-white text-indigo-800 mt-2 px-3 py-1.5 rounded-lg font-bold mb-2 text-sm lg:text-base">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-4">
                        <div class="w-full px-4 md:px-10 lg:px-12">
                            <form class="bg-white rounded-md shadow-2xl p-3 lg:p-5">
                                <h1 class="text-gray-800 font-bold text-xl lg:text-2xl mb-1">Hello Again!</h1>
                                <p class="text-sm font-normal text-gray-600 mb-4 lg:mb-8">Welcome Back</p>
                                <div
                                    class="flex items-center border-b-2 mb-4 lg:mb-8 py-1 px-2 lg:py-2 lg:px-3 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 lg:h-5 lg:w-5 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round"
                                            strokeWidth="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                    <input id="email"
                                        class=" pl-2 w-full outline-none border-none text-sm lg:text-base" type="email"
                                        name="email" placeholder="Email Address" />
                                </div>
                                <div
                                    class="flex items-center border-b-2 mb-6 lg:mb-12 py-1 px-2 lg:py-2 lg:px-3 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 lg:h-5 lg:w-5 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fillRule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clipRule="evenodd" />
                                    </svg>
                                    <input
                                        class="pl-2 w-full outline-none border-none text-sm lg:text-base"
                                        type="password" name="password" id="password"
                                        placeholder="Password" />
                                </div>
                                <button type="submit"
                                    class="block w-full bg-indigo-600 mt-3 lg:mt-5 py-1.5 lg:py-2 rounded-lg hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-sm lg:text-base">Login</button>
                                <div class="flex justify-between mt-2 lg:mt-4">

                                    <span
                                        class="text-xs lg:text-sm ml-1 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot
                                        Password ?</span>
                                    <a href="#"
                                        class="text-xs lg:text-sm ml-1 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't
                                        have an account yet?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @yield('admin')
        @include('admin.body.footer')
    </div>
</body>

</html>
