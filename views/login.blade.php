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

{{-- login --}}
   <div class="container py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Login</h2>
            <p class="text-gray-600 mb-6 text-sm">
                Welcome to
                <span class="font-semibold text-lg text-center text-red-500 mb-2">RentEase</span>
            </p>
            <form action="">
                <div class="space-y-4">
                    <div>
                        <label class="text-gray-500 mb-2 block">Email Address</label>
                        <input type="email" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="Email Address">
                    </div>
                    <div>
                        <label class="text-gray-500 mb-2 block">Password</label>
                        <input type="password" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="Password">
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="agreement" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="agreement" class="text-gray-500 ml-3 cursor-pointer">Remember me</label>
                        </div>
                        <a href="#" class="text-primary">Forgot Password</a>
                    </div>
                    <div class="mt-4">
                        <button type="submit"
                        class="block w-full py-2 text-center text-white bg-red-600 border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                            Login
                        </button>
                    </div>
                </div>
            </form>

            {{-- login w/ --}}
            <div class="mt-6 flex justify-center relative">
                <div class="text-gray-600 uppercase px-3 bg-white z-10 relative"> Or Login with</div>
                <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200"></div>
            </div>
            <div class="flex mt-4 gap-4">
                <a href="#" class="w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto fonr-medium text-sm hover:bg-blue-700">Facebook</a>
                <a href="#" class="w-1/2 py-2 text-center text-white bg-yellow-600 rounded uppercase font-roboto fonr-medium text-sm hover:bg-yellow-500">Google</a>
            </div>
            {{-- end of login w/ --}}

            <p class="mt-4 text-gray-500 text-center">
                Already got an Account? <a href="#" class="text-primary text-semibold">Register Now</a>
            </p>
        </div>
   </div>
{{-- end of login --}}

</body>
</html>

