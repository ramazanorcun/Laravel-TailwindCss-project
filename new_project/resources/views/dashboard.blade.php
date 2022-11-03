<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Page</title>
</head>

<body class="bg-slate-200">
    <div class="w-full md:w-1/6 px-3 pt-4 mx-2  border-gray-400">
        <button type="button"
        class='appearance-none flex items-center justify-center block  bg-gray-100 text-gray-700 shadow border border-blue-500 rounded-lg py-3 px-3 leading-tight hover:bg-gray-200 hover:text-gray-700 focus:outline-none'>
        <a href="/">
            <svg class="w-12 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
            </svg>
    </button>
    </div>
    <div class="md:container md:mx-auto bg-white raunded-t-lg  mt-12">
        <div class="grid grid-rows-2 grid-flow-col gap-2 ">
            <div class="row-span-3 mt-2 mb-2">
                <div
                    class=" bg-emerald-100 w-48 text-gray-900  rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <button type="button"
                        class=" inline-flex  items-center py-2 px-4 w-full text-sm font-medium rounded-lg  border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg aria-hidden="true" class="mr-2 w-4 h-4 fill-current" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Dashboard
                    </button>
                    <button type="button"
                        class="mt-5    inline-flex relative items-center py-2 px-4 w-full text-sm font-medium rounded-lg  border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        Campaigns
                    </button>
                    <button type="button"
                        class="mt-5  inline-flex relative items-center py-2 px-4 w-full text-sm font-medium  rounded-lg border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg aria-hidden="true" class="mr-2 w-4 h-4 fill-current" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Media
                    </button>
                    <button type="button"
                        class=" mt-5  inline-flex relative items-center py-2 px-4 w-full text-sm font-medium rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        Statistics
                    </button>
                    <button type="button"
                        class="mt-5 inline-flex relative items-center py-2 px-4 w-full text-sm font-medium rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                            <path fill-rule="evenodd"
                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Payments
                    </button>
                    <button type="button"
                        class="mt-5  inline-flex relative items-center py-2 px-4 w-full text-sm font-medium rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Activity Log
                    </button>
                    <button type="button"
                        class="mt-5  inline-flex relative items-center py-2 px-4 w-full text-sm font-medium  rounded-lg border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Settings
                    </button>

                    <footer class="mt-5 border-t-4">
                        @if (count($users) > 0)
                            @foreach ($users as $user)
                                @if ($user->id == Session::get('loginId'))
                                    <button type="button"
                                        class="mt-5  inline-flex relative items-center py-2 px-4 w-full text-sm font-medium rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                            data-dropdown-placement="bottom-start"
                                            class=" m-2 w-10 h-10 rounded-full cursor-pointer" src="/ımage/avatar.jpg"
                                            alt="User dropdown">
                                        {{ $user->name }}
                                        <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                            </path>
                                        </svg>
                                    </button>
                                @endif
                            @endforeach
                        @endif
                        <button type="button"
                            class="mt-5 bg-emerald-400  inline-flex relative items-center py-2 px-4 w-full text-sm font-medium  rounded-lg  hover:text-blue-700 focus:z-10 focus:ring-2 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            New Campaign
                        </button>
                    </footer>

                </div>
            </div>
            <div class="row-span-2 col-span-3  mt-3">

                <div class="flex items-stretch ">
                    <div class="col-start-1 col-span-4 ...">
                        <img class=" m-2 w-10 h-10 rounded-full cursor-pointer" src="/ımage/avatar.jpg"
                            alt="User dropdown">
                    </div>
                    <div class="self-center text-xl ">
                        Good Afternoon,
                        @if (count($users) > 0)
                            @foreach ($users as $user)
                                @if ($user->id == Session::get('loginId'))
                                    {{ $user->name }}!
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div
                        class="mt-5 border  inline-flex relative items-center   py-6 px-6 w-full text-sm font-medium  rounded-lg hover:bg-emerald-400   focus:ring-white-700    dark:border-gray-600 dark:hover:bg-green-600 dark:hover:text-white dark:focus:ring-green-500 dark:focus:text-white">
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <svg class="  bg-pink-200 rounded-full" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                    </path>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <label class="text-gray-200" for=""> Daily Budget</label>
                                <h4 class="mt-3 text-lg">$ 1,843,43</h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-5 border bg-emerald-400   inline-flex relative items-center   py-6 px-6 w-full text-sm font-medium  rounded-lg hover:bg-white-400   focus:ring-white-700    dark:border-gray-600 dark:hover:bg-green-600 dark:hover:text-white dark:focus:ring-green-500 dark:focus:text-white">
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <img class="border m-2 w-12 h-12 bg-slate-400 rounded-full cursor-pointer"
                                    src="/ımage/kulaklık.png" alt="User dropdown">
                            </div>
                            <div class="mt-3">
                                <label class="text-gray-200" for=""> Completion Rate</label>
                                <h4 class="mt-3 text-lg">74 %</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-span-1 col-span-3 ...">
                {{-- grafik Sayfası --}}
                @include('grapich')
            </div>
        </div>

</body>

</html>
