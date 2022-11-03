<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Grapich Page </title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto ">
        <div class="overflow-hidden  ">
            <div class="row-span-2   mt-3">
                <div class=" mb-1 grid grid-cols-3 gap-4">
                    <div>
                        <h5 class="grid justify-items-start font-bold w-13 h-12  ">
                            Podcasts Listened
                        </h5>
                    </div>
                    <div class="grid grid-cols-2 gap-4" >
                        <button type="button"
                            class=" justify-items-start inline-flex relative  py-2 px-4 w-full text-sm font-medium rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                            <svg class="   w-6 h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                                </path>
                            </svg> This Week
                        </button>
                        <button type="button"
                        class=" inline-flex relative  py-2 px-4 w-full text-sm font-medium rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        <svg class=" w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 12H4"></path>
                        </svg> Last Week
                    </button>
                    </div>
                    <div>
                        <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                            <div
                                class="w-28 h-8 bg-gray-200  peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['Hourly'] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-7 after:w-14 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Daily</span>
                        </label>

                    </div>
                </div>

            </div>

        </div>
        <canvas class="" id="chartLine"></canvas>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const labels = ["Monday", "Tuesday", "wednesday", "Thursday", "friday"];
        const data = {
            labels: labels,
            datasets: [{
                label: "User",
                backgroundColor: "blue",
                borderColor: 'rgb(75, 192, 192)',
                data: [0, 10, 5, 20, 30, 45],
                fill: false,
            }, ],

        };

        const configLineChart = {
            type: "line",
            data,
            options: {},
        };

        var chartLine = new Chart(
            document.getElementById("chartLine"),
            configLineChart
        );
    </script>

</body>

</html>
