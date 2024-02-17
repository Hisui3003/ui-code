<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Page1</title>


   <link rel="stylesheet" href="{{ asset('css/app.css') }}">


   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
{{-- ito yung header ng page 1 --}}
   <header class="py-1 shadow-sm bg-white">
       <div class="container flex items-center justify-between">
           {{-- logo --}}
           <a href="#">
               <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
               <h1 class="text-gray-700 hover:text-primary transision">RentEase</h1>
           </a>


           {{-- search area --}}
           <div class="w-full max-w-xl relative flex">
               <span class="absolute left-4 top-3 text-lg text-gray-400">
                   <i class="fas fa-search"></i>
               </span>
               <input type="text" class="w-full border border-primary border-r-l-0 pl-12 py-3 pr-3 rounded-1-md focus:outline-none" placeholder="Search">
               <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
           </div>


           {{-- yung icons --}}
           <div class="flex items-center space-x-4">


               {{-- listing a property button --}}
               <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                   <div class="text-2xl">
                       <i class="fas fa-house-flag"></i>
                   </div>
                   <div class="text-sx leading-3">Property</div>
               </a>


               {{-- account button --}}
               <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                   <div class="text-2xl">
                       <i class="fas fa-user"></i>
                   </div>
                   <div class="text-sx leading-3">Account</div>
               </a>
           </div>
       </div>
   </header>

{{-- navbar (1) --}}
   <div class="bg-gray-700">
       <div class="container flex">

            {{-- categories --}}
            <div class="mr-5">
                <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All Categories</span>

                    <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">

                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-map-location-dot w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Location</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-list w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Property Type</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-peso-sign w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Price</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bed w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bedrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-calendar-days w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Short Term</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bath w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bathrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-ruler-combined w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Floor Area</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-person-shelter w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Amenities</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- end of categories --}}

            {{-- navbar links --}}
            <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="#" class="text-gray-200 hover:underline hover:text-white transition">Home</a>
                    <a href="#" class="text-gray-200 hover:underline hover:text-white transition">Rent</a>
                    <a href="#" class="text-gray-200 hover:underline hover:text-white transition">About Us</a>
                    <a href="#" class="text-gray-200 hover:underline hover:text-white transition">Contact Us</a>
                </div>
                {{-- login and register --}}
                <a href="#" class="text-gray-200 hover:underline hover:text-white transition">Login/Register</a>
                {{-- end of login and register --}}
            </div>
            {{-- end of navbar links --}}
       </div>
   </div>
{{-- end of navbar --}}

{{-- banner (do we need this ?)--}}
   <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('https://images.pexels.com/photos/5407074/pexels-photo-5407074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
        <div class="container">
            <h1 class="text-4xl text-white font-medium mb-4">
                RenEase
            </h1>
            <p class="text-xl text-white font-medium mb-4">
                Renting a place to stay is like unlocking a door to possibilities, <br>
                where every key moment becomes a chapter in the story of your life.
            </p>
            <div class="mt-12">
                <a href="#" class="bg-red-800 text-white px-8 py-3 font-medium rounded-md border border-red-800 hover:border-primary hover:bg-transparent hover:text-white">Rent Now</a>
            </div>
        </div>
   </div>
{{-- end of banner --}}

{{-- feature (do we need this also??)--}}
   <div class="container py-16">
        <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
            <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://www.svgrepo.com/show/521416/star-struck.svg" alt="1f" class="w-auto h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Browse to your hearts content</h4>
                    <p class="text-gray-500 text-sm">FOR FREE</p>
                </div>
            </div>

            <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://www.svgrepo.com/show/521348/drooling-face.svg" alt="1f" class="w-auto h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Browse to your hearts content</h4>
                    <p class="text-gray-500 text-sm">FOR FREE</p>
                </div>
            </div>

            <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://www.svgrepo.com/show/521357/face-screaming-in-fear.svg" alt="1f" class="w-auto h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Browse to your hearts content</h4>
                    <p class="text-gray-500 text-sm">FOR FREE</p>
                </div>
            </div>
        </div>
   </div>
{{-- end of feature --}}

{{-- browsing by categories --}}
    <div class="container py-16">
        <h2 class="text-3xl font-medium text-gray-800 mb-6">Rent by Category</h2>

        <div class="grid grid-cols-3 gap-3">
            <!-- Location -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1531761535209-180857e963b9?q=80&w=1548&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Location</a>
            </div>
            <!-- Property Type -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1546&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Property Type</a>
            </div>
            <!-- Price -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1561414927-6d86591d0c4f?q=80&w=1546&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Price</a>
            </div>
            <!-- Bedrooms -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://plus.unsplash.com/premium_photo-1670076505419-99468d952c61?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Bedrooms</a>
            </div>
            <!-- Short Term -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1434082033009-b81d41d32e1c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Short Term</a>
            </div>
            <!-- Bathrooms -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Bathrooms</a>
            </div>
            <!-- Floor Area -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://plus.unsplash.com/premium_photo-1676823547757-f00b51e17eff?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Floor Area</a>
            </div>
            <!-- Amenities -->
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1668911128602-9c03cf73df99?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Amenities</a>
            </div>
        </div>
    </div>
{{-- end of browing by categories --}}

{{-- product card ata ?--}}
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 mb-6">Top new Arrival</h2>

        {{-- grid --}}
        <div class="grid grid-cols-2 gap-5">
            {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}
        </div>
        {{-- end of grid --}}
    </div>
{{-- end of product card --}}

<div class="container pb-16">
    <h2 class="text-2xl font-medium text-gray-800 mb-6">Top new Arrival</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="bg-white shadow rounded overflow-hidden flex">
            <div class="w-1/2">
                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-white">
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                <a href="#" class="block w-full text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
        </div>

        <div class="bg-white shadow rounded overflow-hidden flex">
            <div class="w-1/2">
                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-white">
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                <a href="#" class="block w-full text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
        </div>

        <div class="bg-white shadow rounded overflow-hidden flex">
            <div class="w-1/2">
                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-white">
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                <a href="#" class="block w-full text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
        </div>

        <div class="bg-white shadow rounded overflow-hidden flex">
            <div class="w-1/2">
                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-white">
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                <a href="#" class="block w-full text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
