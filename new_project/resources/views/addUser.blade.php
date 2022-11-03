<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>


    <title>Add User Page</title>
</head>

<body class="bg-slate-200">
    <div class="container mx-auto ">
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

    <div class=" text-center  ">
        <a class=" italic text-5xl text-amber-500 ">Add User Form </a>
    </div>

    <form method="post" action="{{ route('UserAdd') }}">

        @csrf
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
                        <span class="flex text-center font-medium">{{ Session::get('success') }}</span>
                    </div>
                </div>
            @endif

            <div class="row m-5">
                <div class="relative  z-0 mb-6 w-full group ">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">E
                        mail</label>
                    <input type="email" name="email" id="email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none
                             dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        required />
                </div>

                <div class="relative z-0 mb-6 w-full group ">
                    <label for="countries" class="block  text-sm  text-gray-900 dark:text-gray-400">Name</label>
                    <input type="text" name="name" id="name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none
                             dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        required />
                </div>

                <div class="relative z-0 mb-6 w-full group ">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Title</label>
                    <input type="text" name="title" id="title"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none
                         dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                </div>

                <div class="relative z-0 mb-6 w-full group ">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role</label>
                    <input type="text" name="role" id="role"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                </div>
            </div>

            <button type="submit"
                class="m-3 text-white bg-blue-700 hover:bg-dark-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">User
                Add
            </button>
    </form>
    </div>
    </div>
</div>
</body>

</html>
