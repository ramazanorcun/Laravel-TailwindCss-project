<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>



    <title>Register page</title>
</head>

<body class="bg-slate-200">
    <div class="container mx-auto">
        <div class="mt-5">
            <h2 class="text-center font-semibold uppercase">Register Form</h2>
        </div>
        <div class="w-full lg:w-6/12 px-4 mx-auto pt-6 ">
            <div class="bg-amber-500 rounded-2xl ">
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center mb-3">
                        <div class="flex items-center justify-center">
                            <div class="  w-12 h-12 text-blue-500">
                                <img class="rounded-2xl" src="ımage/register.png">
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <div class=" uppercase text-center mb-3 font-bold">
                                <small>Or sign up with credentials</small>
                            </div>
                            <hr class="mt-6 border-b-1 border-blueGray-300">
                        </div>
                        <a class=" text-xl text-slate-900 items-center underline decoration-2 " href="/">login
                            page</a>
                    </div>

                    <form method="post" action=" {{ route('userAdd') }} ">
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

                        @csrf
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"> Name</label>
                            <input name="name" id="name" type="name"
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm   w-full  "
                                placeholder="Name">
                            <span class="text-red-500">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Email</label>
                            <input name="email" id="email" type="email"
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm  w-full "
                                placeholder="Email">
                            <span class="text-red-500">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Password</label>
                            <input name="password" id="password" type="password"
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm  w-full "
                                placeholder="Password">
                            <span class="text-red-500">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="text-center mt-6">
                            <button
                                class=" bg-slate-700 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none  w-full "
                                type="submit">
                                Create Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
