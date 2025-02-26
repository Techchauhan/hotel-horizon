<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Horizon')</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto px-4  p-2 min-h-screen bg-black">
        <div class="flex flex-wrap md:flex-nowrap gap-8">
            <!-- 60% Section - Form -->
            <div class="w-full md:w-3/5 bg-white p-8 rounded-lg shadow-md">
              <!-- #form Area-->
               <div class="from-type">
                 @yield('form-type')
               </div>

            </div>
    
         <!-- 40% Section - Other Content -->
            <div class="w-full md:w-2/5  p-8 ">
                <h2 class="text-lg font-semibold mb-4">Hotel Managment</h2>
                <p class="text-gray-700 text-sm">Our Aim is to Make your Hotel Manament Eassy.</p>
            </div>
        </div>
    </div>

</body>
</html>