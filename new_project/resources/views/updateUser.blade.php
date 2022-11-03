<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Update Page</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-200">
    <div class="container mx-auto">
        <div class="w-full md:w-1/6 px-3 pt-4 mx-2  border-gray-400">
            <button type="button"
                class='appearance-none flex items-center justify-center block  bg-gray-100 text-gray-700 shadow border border-blue-500 rounded-lg py-3 px-3 leading-tight hover:bg-gray-200 hover:text-gray-700 focus:outline-none'>
                <a href="/admin">
                    <svg class="w-12 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">

                        </path>
                    </svg>
            </button>
        </div>

        <form method="POST" action="{{ url("/users/$users->id") }}">
            @csrf
            @method('PUT')
            <div class=" text-center m-5 ">
                <a class=" italic text-5xl  text-amber-500 ">Update User Form </a>
            </div>

            <div class="container mx-auto mt-12 shadow bg-gray-100 border border-blue-500 rounded-md   ">
                @if (Session::has('success'))
                    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">{{ Session::get('success') }}</span>
                        </div>
                    </div>
                @endif

                @if (Session::has('fail'))
                    <div class=" text-center p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <span class="font-medium "> {{ Session::get('fail') }}</span>
                    </div>
                @endif

                <div class="row m-5">

                    <div class="relative  z-0 mb-6 w-full group ">
                        <label for="email"
                            class="  text-emerald-600 peer-focus:font-medium absolute text-sm text-blue-600 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                         top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                          peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            E mail</label>
                        <input type="email" name="email" id="email" value="{{ $users->email }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none
                             dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            required />

                    </div>
                    <div class="relative z-0 mb-6 w-full group ">
                        <label for="email"
                            class="  text-emerald-600 peer-focus:font-medium absolute text-sm text-blue-600 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                         top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                          peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Name</label>
                        <input type="text" name="name" id="name" value="{{ $users->name }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none
                             dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            required />

                    </div>

                    <div class="relative z-0 mb-6 w-full group ">
                        <label for="email"
                            class="  text-emerald-600 peer-focus:font-medium absolute text-sm text-blue-600 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                             top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                              peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Title</label>
                        <input type="text" name="title" id="title" value="{{ $users->title }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none
                         dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />

                    </div>
                    <div class="relative z-0 mb-6 w-full group ">
                        <label for="email"
                            class="  text-emerald-600 peer-focus:font-medium absolute text-sm text-blue-600 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                             top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                              peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Role</label>
                        <input type="text" name="role" id="role" value="{{ $users->role }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />

                    </div>
                </div>
                <button type="submit"
                    class="m-3 text-white bg-blue-700 hover:bg-dark-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </form>
            </div>
        </div>
    </div>
</body>

</html>
