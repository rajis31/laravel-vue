<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>
</head>

<body>

    @if(isset($name))
    {{ $name }}
    @endif

    @if(isset($colors))
    @foreach($colors as $color)
    <p style="color:" .{{ $color }}.";">{{ $color }}</p>
    @endforeach
    @endif

    @for($i=0; $i<10; $i++) <p> {{ $i }} </p>
        @endfor

        <p> The count is {{ $count }} </p>

        @include("subsection")



        <div id="app">
            <example-component></example-component>
            <play-form></play-form>
            <slot-component>
                <template v-slot:default>
                    <p> <b> This is inside a slot component </b></p>
                </template>

                <template v-slot:section1="slotProps">
                    <p> This is section 1 named slot </p>
                </template>
            </slot-component>
            <bootstrap-card></bootstrap-card>
        </div>

        <!-- This is an example component -->
        <div>
            <div class="flex flex-col bg-white shadow-md w-1/2 mx-auto px-3 py-2">
                <div>
                    progress bar
                </div>
                <div class="py-3">
                    <div class='bg-gray-300 w-full mb-4' style="height: 4px">
                        <div class='bg-green-500 w-4/6 h-full'></div>
                    </div>

                    <div class='bg-gray-300 w-full mb-4' style="height: 10px">
                        <div class='bg-red-500 w-2/6 h-full'></div>
                    </div>

                    <div class='bg-gray-300 w-full' style="height: 30px">
                        <div class='bg-yellow-500 w-5/6 h-full'></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto bg-gray-100 py-10 flex justify-center">
            <div class="bg-white w-80 shadow-lg cursor-pointer rounded transform hover:scale-105 duration-300 ease-in-out">
                <div class="">
                    <img src="https://picsum.photos/400/300" alt="" class="rounded-t">
                </div>
                <div class="flex justify-around w-full transform -translate-y-5 px-4">
                    <div class="rounded-full shadow w-10 h-10 flex justify-center items-center bg-gray-100">
                        1
                    </div>
                    <div class="rounded-full shadow w-10 h-10 flex justify-center items-center bg-gray-100">
                        2
                    </div>
                    <div class="rounded-full shadow w-10 h-10 flex justify-center items-center bg-gray-100">
                        3
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="text-2xl uppercase">Item a</h2>
                    <p class="font-light text-gray-500 text-lg my-2">29,99 &euro;</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="#" class="block bg-gray-300 py-2 px-2 text-gray-600 text-center rounded shadow-lg uppercase font-light mt-6 hover:bg-gray-400 hover:text-white duration-300 ease-in-out">Add to cart</a>
                </div>
            </div>
        </div>

        <!-- This is an example component -->
        <div>
            <div class='flex space-x-2 w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
                <div class="card  min-w-sm border border-gray-100 bg-purple-100   transition-shadow shadow-xl hover:shadow-xl min-w-max">
                    <!---->
                    <div class="w-full card__media"><img src="https://image.freepik.com/free-vector/abstract-binary-code-techno-background_1048-12836.jpg" class="h-48 w-96"></div>
                    <div class="  card__media--aside "></div>
                    <div class="flex items-center p-4">
                        <div class="relative flex flex-col items-center w-full">
                            <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative" src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
                                <div class="absolute"></div>
                            </div>
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-800 font-semibold">Brahim</span><span class="text-md whitespace-nowrap text-gray-600">boussadjra</span>
                                <p class="text-sm text-gray-500">
                                    I can't start my day without a coffee cup
                                </p>
                                <div class="py-2 flex space-x-2">
                                    <button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent border-purple-700 text-purple-700 hover:border-purple-800 hover:border-purple-800 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"></span>FOLLOW<span class="ml-2"></span></button><button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"><svg height="20" width="20" viewBox="0 0 32 32" class="fill-current text-red-100">
                                                <path d="M22.5,4c-2,0-3.9,0.8-5.3,2.2L16,7.4l-1.1-1.1C12,3.3,7.2,3.3,4.3,6.2c0,0-0.1,0.1-0.1,0.1c-3,3-3,7.8,0,10.8L16,29	l11.8-11.9c3-3,3-7.8,0-10.8C26.4,4.8,24.5,4,22.5,4z"></path>
                                            </svg></span>SPONSOR <span class="ml-2"></span></button>
                                </div>
                                <div class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2"><span class="font-bold text-gray-700">56</span><span class="text-gray-600"> followers</span></span><span class="text-center px-2"><span class="font-bold text-gray-700">112</span><span class="text-gray-600"> following</span></span><span class="text-center px-2"><span class="font-bold text-gray-700">27</span><span class="text-gray-600"> repos</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
                <!---->
                <!---->
                <!---->
                <div class="card  min-w-sm border border-gray-700 bg-gray-700 text-gray-50   transition-shadow shadow-xl hover:shadow-xl min-w-max">
                    <!---->
                    <div class="w-full card__media"><img src="https://image.freepik.com/free-vector/abstract-binary-code-techno-background_1048-12836.jpg" class="h-48 w-96"></div>

                    <div class="flex items-center p-4">
                        <div class="relative flex flex-col items-center w-full">
                            <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-400 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative" src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
                                <div class="absolute"></div>
                            </div>
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span class="text-md whitespace-nowrap text-gray-50 font-semibold">Brahim</span><span class="text-md whitespace-nowrap text-gray-100">boussadjra</span>
                                <p class="text-sm text-gray-200">
                                    I can't start my day without a coffee cup
                                </p>
                                <div class="py-2 flex space-x-2">
                                    <button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent border-purple-400 text-purple-400 hover:border-purple-800 hover:border-purple-500 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"></span>FOLLOW<span class="ml-2"></span></button><button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"><svg height="20" width="20" viewBox="0 0 32 32" class="fill-current text-red-100">
                                                <path d="M22.5,4c-2,0-3.9,0.8-5.3,2.2L16,7.4l-1.1-1.1C12,3.3,7.2,3.3,4.3,6.2c0,0-0.1,0.1-0.1,0.1c-3,3-3,7.8,0,10.8L16,29	l11.8-11.9c3-3,3-7.8,0-10.8C26.4,4.8,24.5,4,22.5,4z"></path>
                                            </svg></span>SPONSOR <span class="ml-2"></span></button>
                                </div>
                                <div class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2"><span class="font-bold text-gray-50">56</span><span class="text-gray-100"> followers</span></span><span class="text-center px-2"><span class="font-bold text-gray-50">112</span><span class="text-gray-100"> following</span></span><span class="text-center px-2"><span class="font-bold text-gray-50">27</span><span class="text-gray-100"> repos</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
                <!-- This is an example component -->
<div>
	<div class='flex space-x-2 w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
		<div
			class="card  min-w-sm border border-gray-100 bg-purple-100   transition-shadow shadow-xl hover:shadow-xl min-w-max">
			<!---->
			<div class="w-full card__media"><img src="https://image.freepik.com/free-vector/abstract-binary-code-techno-background_1048-12836.jpg" class="h-48 w-96"></div>
				<div class="  card__media--aside "></div>
				<div class="flex items-center p-4">
					<div class="relative flex flex-col items-center w-full">
						<div
							class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-600 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
							<img class="h-24 w-24 md rounded-full relative" src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
							<div class="absolute"></div>
						</div>
						<div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
							<span class="text-md whitespace-nowrap text-gray-800 font-semibold">Brahim</span><span class="text-md whitespace-nowrap text-gray-600">boussadjra</span>
							<p class="text-sm text-gray-500">
								I can't start my day without a coffee cup
							</p>
							<div class="py-2 flex space-x-2">
								<button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent border-purple-700 text-purple-700 hover:border-purple-800 hover:border-purple-800 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"></span>FOLLOW<span class="ml-2"></span></button><button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"><svg height="20" width="20" viewBox="0 0 32 32" class="fill-current text-red-100"><path d="M22.5,4c-2,0-3.9,0.8-5.3,2.2L16,7.4l-1.1-1.1C12,3.3,7.2,3.3,4.3,6.2c0,0-0.1,0.1-0.1,0.1c-3,3-3,7.8,0,10.8L16,29	l11.8-11.9c3-3,3-7.8,0-10.8C26.4,4.8,24.5,4,22.5,4z"></path></svg></span>SPONSOR <span class="ml-2"></span></button>
							</div>
							<div
								class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
								<span class="text-center px-2"><span class="font-bold text-gray-700">56</span><span class="text-gray-600"> followers</span></span><span class="text-center px-2"><span class="font-bold text-gray-700">112</span><span class="text-gray-600"> following</span></span><span class="text-center px-2"><span class="font-bold text-gray-700">27</span><span class="text-gray-600"> repos</span></span>
							</div>
						</div>
					</div>
				</div>
				<!---->
			</div>
			<!---->
			<!---->
			<!---->
				<div
			class="card  min-w-sm border border-gray-700 bg-gray-700 text-gray-50   transition-shadow shadow-xl hover:shadow-xl min-w-max">
			<!---->
			<div class="w-full card__media"><img src="https://image.freepik.com/free-vector/abstract-binary-code-techno-background_1048-12836.jpg" class="h-48 w-96"></div>
			
				<div class="flex items-center p-4">
					<div class="relative flex flex-col items-center w-full">
						<div
							class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-400 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
							<img class="h-24 w-24 md rounded-full relative" src="https://avatars3.githubusercontent.com/u/11801238?v=4" alt="">
							<div class="absolute"></div>
						</div>
						<div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
							<span class="text-md whitespace-nowrap text-gray-50 font-semibold">Brahim</span><span class="text-md whitespace-nowrap text-gray-100">boussadjra</span>
							<p class="text-sm text-gray-200">
								I can't start my day without a coffee cup
							</p>
							<div class="py-2 flex space-x-2">
								<button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent border-purple-400 text-purple-400 hover:border-purple-800 hover:border-purple-500 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"></span>FOLLOW<span class="ml-2"></span></button><button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"><svg height="20" width="20" viewBox="0 0 32 32" class="fill-current text-red-100"><path d="M22.5,4c-2,0-3.9,0.8-5.3,2.2L16,7.4l-1.1-1.1C12,3.3,7.2,3.3,4.3,6.2c0,0-0.1,0.1-0.1,0.1c-3,3-3,7.8,0,10.8L16,29	l11.8-11.9c3-3,3-7.8,0-10.8C26.4,4.8,24.5,4,22.5,4z"></path></svg></span>SPONSOR <span class="ml-2"></span></button>
							</div>
							<div
								class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
								<span class="text-center px-2"><span class="font-bold text-gray-50">56</span><span class="text-gray-100"> followers</span></span><span class="text-center px-2"><span class="font-bold text-gray-50">112</span><span class="text-gray-100"> following</span></span><span class="text-center px-2"><span class="font-bold text-gray-50">27</span><span class="text-gray-100"> repos</span></span>
							</div>
						</div>
					</div>
				</div>
				<!---->
			</div>
		</div>
	</div>
                
            </div>
        </div>
        

    <div class="container mx-auto my-60">
        <div>

            <div class="bg-white relative shadow-xl w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto">
                <div class="flex justify-center">
                        <img src="https://pantazisoft.com/img/avatar-2.jpeg" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-2xl border-4 border-white">
                </div>
                
                <div class="mt-16">
                    <h1 class="font-bold text-center text-3xl text-gray-900">Eduard Pantazi</h1>
                    <p class="text-center text-sm text-gray-400 font-medium">Full Stack Developer at Pantazi Software</p>
                    <p>
                        <span>
                            
                        </span>
                    </p>
                    <div class="my-5">
                        <a href="#" class="text-indigo-200 block text-center font-medium leading-6 px-6 py-3 bg-indigo-600">Connect with <span class="font-bold">@eduardpantazi</span></a>
                    </div>
                    <div class="flex justify-evenly my-5">
                        <a href="" class="bg font-bold text-sm text-blue-800 w-full text-center py-3 hover:bg-blue-800 hover:text-white hover:shadow-lg">Facebook</a>
                        <a href="" class="bg font-bold text-sm text-blue-400 w-full text-center py-3 hover:bg-blue-400 hover:text-white hover:shadow-lg">Twitter</a>
                        <a href="" class="bg font-bold text-sm text-yellow-600 w-full text-center py-3 hover:bg-yellow-600 hover:text-white hover:shadow-lg">Instagram</a>
                        <a href="" class="bg font-bold text-sm text-gray-600 w-full text-center py-3 hover:bg-gray-600 hover:text-white hover:shadow-lg">Email</a>
                    </div>

                    <div class="w-full">
                        <h3 class="font-bold text-gray-600 text-left px-4">Recent activites</h3>
                        <div class="mt-5 w-full">
                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://pantazisoft.com/img/avatar-2.jpeg" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                    Updated his status
                                    <span class="text-gray-400 text-sm">24 min ago</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://pantazisoft.com/img/avatar-2.jpeg" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                    Added new profile picture
                                    <span class="text-gray-400 text-sm">42 min ago</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://pantazisoft.com/img/avatar-2.jpeg" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Posted new article in <span class="font-bold">Web Dev</span>
                                <span class="text-gray-400 text-sm">49 min ago</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://pantazisoft.com/img/avatar-2.jpeg" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Edited website settings
                                <span class="text-gray-400 text-sm">1 day ago</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://pantazisoft.com/img/avatar-2.jpeg" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Added new rank
                                <span class="text-gray-400 text-sm">5 days ago</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <script src="js/app.js"></script>

</body>

</html>