
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

      <div class="main-wrapper">
        @include('admin.body.header')

        <div class="container mx-auto px-2 pt-16 bg-white">

            @include('admin.body.sideall')


            <div class="popular movies ml-24 mt-6 ">
                <div class="flex ml-10 mt-20">

                    <h2 class="uppercase tracking-wider text-gray-900 text-lg-7xl font-bold flex">Popular Breeds</h2>
                    <div class="flex flex-col justify-center mx-80">
                        <a href="#">
                            <x-primary-button>Create Ticket</x-primary-button>
                        </a>
                    </div>
                </div>


                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
                    <div>
                        <a href="{{ route("admin.single") }}">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">p 1</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Released Date</span>
                            </div>
                            <div class="text-gray-400">
                                    Categeory
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route("admin.single") }}">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">p 2</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Released Date</span>
                            </div>
                            <div class="text-gray-400">
                                    Categeory
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route("admin.single") }}">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">p 3</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Released Date</span>
                            </div>
                            <div class="text-gray-400">
                                    Categeory
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route("admin.single") }}">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">p 4</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Released Date</span>
                            </div>
                            <div class="text-gray-400">
                                    Categeory
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">P 5</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Birth Date</span>
                            </div>
                            <div class="text-gray-400">
                                Category
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">P 5</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Birth Date</span>
                            </div>
                            <div class="text-gray-400">
                                Category
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-60">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">P 5</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Birth Date</span>
                            </div>
                            <div class="text-gray-400">
                                Category
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">P 5</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Birth Date</span>
                            </div>
                            <div class="text-gray-400">
                                Category
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">P 5</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Birth Date</span>
                            </div>
                            <div class="text-gray-400">
                                Category
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">P 5</a>
                            <div class="flex items-center text-gray-400">
                                <span>Name</span>
                                <span class="ml-1"></span>
                                <span mx-2>|</span>
                                <span>Birth Date</span>
                            </div>
                            <div class="text-gray-400">
                                Category
                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>

                  </div>


              </div>
          </div>



        @include('admin.body.footer')

    </div>
    </body>
</html>

