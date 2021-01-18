<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Examples</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="p-6 bg-green-300 mb-4 flex flex-wrap items-center">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <svg class="h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
            </svg>
            <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
        </div>


        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                Docs
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                Examples
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
                Blog
            </a>
        </div>
       
        </div>
    </nav>

    <div class="w-full flex justify-center overflow-visible">
        <div class="flex flex-col md:flex-row">
            <div class="flex-none bg-red-500 md:w-36 md:h-36 w-16 h-16 m-4"></div>
            <div class="flex-none bg-blue-700 md:w-36 md:h-36 w-16 h-16 m-4"></div>
            <div class="flex-none bg-purple-400 md:w-36 md:h-36 w-16 h-16 m-4"></div>
            <div class="flex-none bg-purple-400 md:w-36 md:h-36 w-16 h-16 m-4"></div>
        </div>
    </div>

    <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
        <div class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
            <div class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex-col md:items-center md:justify-evenly">
                <div class="my-3 text-4xl font-bold tracking-wider text-center"><a href="#">K-WD</a></div>
                <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
                    With the power of K-WD, you can now focus only on functionaries for your digital products, while leaving the
                    UI design on us!
                </p>
                <p class="flex flex-col items-center-justify-center mt-10 text-center">
                    <span>Don't have an account </span>
                    <a href="#" class="underline">Get Started!</a>
                </p>
                <p class="mt-6 text-center text-gray-300">
                 Read our <a href="#" class="underline">terms</a> and <a href="#" class="underline">conditions</a>
                </p>
            </div>
          
         <div class="p-5 bg-white md:flex-1">
         <h3 class="my-4 text-2xl font-semibold text-gray-700">Account Login</h3>
         <form class="flex flex-col space-y-5">
                <div class="flex flex-col space-y-1">
                    <label for="email" class="text-sm font-semibold text-gray-500">Email Address</label>
                    <input autofocus class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-purple-600" />
                </div>

                <div class="flex flex-col space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-em font-semibold text-gray-500">Password</label>
                        <a href="#" class="text-sm text-blue-600 hover:underline focus:text-blue-800">Forgot Password</a>
                    </div>      
                    <input autofocus class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-purple-600" />
                </div>

                <div class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200">
                    <label for="remember" class="text-sm font-semibold text-gray-500">Remember me</label>
                </div>
                <div>
                    <button class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">Log in</button>
                </div>

                <div class="flex flex-col space-y-5">
                    <span class="flex items-center justify-center space-x-2">
                        <span class="h-px bg-gray-400 w-14"></span>
                        <span class="font-normal text-gray-500">or login with</span>
                        <span class="h-px bg-gray-400 w-14"></span>
                    </span>
                    <div class="flex flex-col">
                      <button class="w-full px-4 py-2 text-lg font-semibold text-black transition-colors bg-white rounded-md shadow hover:bg-black hover:text-white focus:outline-none focus:ring-blue-200 focus:ring-4">Log in</button>
                    </div>
                </div>
          
         </form>
         </div>   
        </div>
    </div>


</body>

</html>