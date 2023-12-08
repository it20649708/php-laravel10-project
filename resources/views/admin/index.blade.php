@extends('admin.admin_dashboard')
@section('admin')

<div class="container mx-auto px-4 pt-16 flex-grow">
    @include('admin.body.sideall')
    <div class="popular movies">

        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Breeds</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
            <div>
                <a href="#">
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
                <a href="#">
                    <img src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="movie" class="hover:opacity-75 rounded-md overflow-hidden w-40 h-50">
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
                <a href="#">
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
                <a href="#">
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






        </div>
    </div>
</div>

          </div>


      </div>
  </div>

@endsection
