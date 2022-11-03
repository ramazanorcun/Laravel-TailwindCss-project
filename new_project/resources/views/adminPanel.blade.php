<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Page</title>
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

    <form action="{{ route('addUser') }}" method="get">
        @csrf
        <div class="container mx-auto mt-12">
            <a class="text-5xl hover:underline">Users </a>
            <hr/>
            <div class=" flex  justify-end">
                <button type="submit"
                    class=" animate-bounce text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg  px-5 py-2.5  mb-5">Add
                    User</button>
            </div>
            @if(Session::has('success'))
            <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                  <span class="font-medium">{{Session::get('success')}}</span>
                </div>
              </div>
            @endif
    </form>

    <div class="overflow-x-auto relative shadow-md rounded-xl  ">
        <table class="  w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="  text-xs text-gray-700 uppercase bg-amber-300 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-2">
                        sıra no
                    </th>
                    <th scope="col" class="py-3 px-2">
                        Name
                    </th>
                    <th scope="col" class="  py-3 px-2">
                        E mail
                    </th>
                    <th scope="col" class="py-3 px-2">
                        Title
                    </th>
                    <th scope="col" class="text-center py-3 px-2">
                        Role
                    </th>
                    <th scope="col " class="m-2  text-end  py-1 px-2">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($users) > 0)
                    @foreach ($users as $user)
                        <tr
                            class=" odd:bg-white even:bg-slate-100 bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td scope="row" class=" px-2">
                                {{ $loop->iteration }}
                            </td>
                            <td class="  px-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->name }}
                            </td>
                            <td class=" px-2">
                                {{ $user->email }}
                            </td>
                            <td class=" px-2">
                                {{ $user->title }}
                            </td>
                            <td class="text-center  px-2">
                                {{ $user->role }}
                            </td>
                            <td class="py-1 px-2">
                                <div class=" responsive flex justify-end">

                                        <a href="{{url("/users/$user->id/edit")}}" class="  m-3 text-sky-500 ">Edit</a>

                                        <a href="{{url("/delete/$user->id")}}" class="  m-3 text-red-500 ">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th colspan="5" scope="row"
                            class="text-center py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Herhangi Bir kullanıcı bulunamadı.
                        </th>

                    </tr>
                @endif

            </tbody>
        </table>
    </div>

</div>
</body>

</html>
