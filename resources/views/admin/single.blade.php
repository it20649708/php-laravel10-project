
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


        <div class="dog-info border-b border-gray-800 flex-grow">
            @include('admin.body.sideall')
          <div class="container mx-auto ml-7  px-4 py-16 flex">


            <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="w-96" style="width:24rem">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Details Here</h2>
                <span>Name</span>
                <span class="ml-1"></span>
                <span mx-2>|</span>
                <span>Released Date</span>

            <p class="text-gray-300 mt-8">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odit, voluptatibus iste itaque id corporis suscipit hic
               neque dolor nihil deleniti inventore ea ex quis reprehenderit obcaecati, tempora laboriosam earum?
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quos repudiandae dicta obcaecati sequi incidunt laboriosam iusto natus eveniet esse.
               Minus maxime minima excepturi magni praesentium ipsum saepe in amet!
            </p>


        <div class="mt-12">
            <h4 class="text-white font-semibold">Featured</h4>
            <div class="flex mt-4">
                <div >
                    <div>Bong Jon ho</div>
                    <div class="text-sm text-gray-400">Sample,Feature</div>
                </div>
                <div class="ml-8">
                    <div>Bong Jon ho</div>
                    <div class="text-sm text-gray-400">Sample,Feature</div>
                </div>
            </div>
        <div class="mt-12"></div>
            <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                <span class="ml-2">Contact Us</span>
            </button>
        </div>
          </div>
          </div>
        </div>

        <div class="movie-cast border-b boreder-gray-800">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Related</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 ml-7 lg:grid-cols-5 gap-8 ">
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
        </div>



    </div>
    @include('admin.body.footer')
    </body>
</html>


