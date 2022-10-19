<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounting</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
</head>

<body class="xl:flex">
    <!-- component -->
    <div class="md:flex flex-col md:flex-row md:min-h-screen xl:w-2/12">
        <sidebar @click.away="open = false"
            class="flex flex-col w-full xl:h-screen sticky top-0 text-gray-700 bg-white flex-shrink-0  top-overflow-visible"
            x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row">
                <img src="img\logo.png" class="w-full" alt="Sample image" />
                <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                    @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block  items-center justify-between">
                <div class="flex justify-center">
                    <img src="img\profilepic.png" class="w-56 rounded-full bordercolor bordercolor border-4 "
                        alt="Sample image" />
                </div>

                <div class="overflow-y-auto py-4 px-3 rounded dark:bg-gray-800">
                    <ul class="space-y-2">
                        <li>
                            <a href="#" onClick="showDashboard()" @click="open = !open"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <title>Grid</title>
                                    <rect x="48" y="48" width="176" height="176" rx="20" ry="20" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <rect x="288" y="48" width="176" height="176" rx="20" ry="20" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <rect x="48" y="288" width="176" height="176" rx="20" ry="20" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <rect x="288" y="288" width="176" height="176" rx="20" ry="20" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="showEmployeeSalary()" @click="open = !open"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <title>Cash</title>
                                    <rect x="32" y="80" width="448" height="256" rx="16" ry="16"
                                        transform="rotate(180 256 208)" fill="none" stroke="currentColor"
                                        stroke-linejoin="round" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" d="M64 384h384M96 432h320" />
                                    <circle cx="256" cy="208" r="80" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                    <path
                                        d="M480 160a80 80 0 01-80-80M32 160a80 80 0 0080-80M480 256a80 80 0 00-80 80M32 256a80 80 0 0180 80"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Employee Payroll Salary</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="showSalaryMaintenance()" @click="open = !open"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <rect x="48" y="144" width="416" height="288" rx="48" ry="48" fill="none"
                                        stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                    <path d="M411.36 144v-30A50 50 0 00352 64.9L88.64 109.85A50 50 0 0048 159v49"
                                        fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Salary Maintenance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="showDeductionMaintenance()" @click="open = !open"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" d="M336 256H176" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Deduction Maintenance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="showBranchMaintenance()" @click="open = !open"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <title>Storefront</title>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32"
                                        d="M448 448V240M64 240v208M382.47 48H129.53c-21.79 0-41.47 12-49.93 30.46L36.3 173c-14.58 31.81 9.63 67.85 47.19 69h2c31.4 0 56.85-25.18 56.85-52.23 0 27 25.46 52.23 56.86 52.23s56.8-23.38 56.8-52.23c0 27 25.45 52.23 56.85 52.23s56.86-23.38 56.86-52.23c0 28.85 25.45 52.23 56.85 52.23h1.95c37.56-1.17 61.77-37.21 47.19-69l-43.3-94.54C423.94 60 404.26 48 382.47 48zM32 464h448M136 288h80a24 24 0 0124 24v88h0-128 0v-88a24 24 0 0124-24zM288 464V312a24 24 0 0124-24h64a24 24 0 0124 24v152" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Branch Maintenance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="showProfile()"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <title>Person</title>
                                    <path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                </svg><span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </sidebar>
    </div>

    <content class="xl:w-10/12 sm:w-full px-10 mt-5">
        <!-- component -->
        <div id="Dashboard" class="flex  overflow-hidden rounded-lg mb-5 py-52" style="display: block">
            <div class="grid grid-cols-2 gap-4">
            <div class="start-col-1 col-span-1 shadow-lg rounded-lg overflow-hidden border-2 border-gray-900">
                    <div class="text-gray-800 text-2xl font-bold px-5 py-5">TOP 5 BRANCH WITH THE HIGHEST BASIC RATE </div>
                    <canvas class="p-10" id="chartBarBasicRate"></canvas>
                </div>
                <div class="start-col-2 col-span-1 shadow-lg rounded-lg overflow-hidden border-2 border-gray-900">
                    <div class="text-gray-800 text-2xl font-bold px-5 py-5">TOP 5 BRANCH WITH A HIGH RATE OF DEDUCTION </div>
                    <canvas class="p-10" id="chartBarDeductionRate"></canvas>
                </div>
            </div>
        </div>
        <!--end dashboard salary-->

        <div id="employeeSalary" class="grid bgcolor overflow-hidden rounded-lg mb-5" style="display: none">
            <div class="grid grid-rows-1 grid-col-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                <div class="row-start-1 col-span-1 flex">
                    <h1 class="text-white text-4xl font-bold px">Employee Payroll Salary</h1>
                </div>

                <div class="row-start-1 col-span-1 flex">
                    <div class="mb-3 xl:w-full">
                        <input type="search" class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl" id="exampleSearch"
                            placeholder="Search" />
                    </div>
                </div>
            </div>
            <div>
                <table class="text-center w-full bg-white hover:table-fixed ">
                    <thead class="bg-gray-100 flex text-gray w-full">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <th class="p-4 w-2/6">ID Number</th>
                            <th class="p-4 w-2/6">Name</th>
                            <th class="p-4 w-2/6">Cut-Off Date</th>
                            <th class="p-4 w-2/6">No. of Days</th>
                            <th class="p-4 w-2/6">Basic Rate</th>
                            <th class="p-4 w-2/6">Total Pay</th>
                            <th class="p-4 w-2/6">Additional Pay</th>
                            <th class="p-4 w-2/6">Total Deduction</th>
                            <th class="p-4 w-2/6"></th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col w-full" style="height: 73vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">0000-0001</td>
                            <td class="py-4 w-2/6">Ibarra Crisostomo</td>
                            <td class="py-4 w-2/6">October 06, 2021</td>
                            <td class="py-4 w-2/6">4</td>
                            <td class="py-4 w-2/6">P370.00</td>
                            <td class="py-4 w-2/6">P1,480.00</td>
                            <td class="py-4 w-2/6">0.00</td>
                            <td class="py-4 w-2/6">P352.82</td>
                            <td class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-employee">View</button></td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">0000-0002</td>
                            <td class="py-4 w-2/6">Maria Clara</td>
                            <td class="py-4 w-2/6">October 06, 2021</td>
                            <td class="py-4 w-2/6">10</td>
                            <td class="py-4 w-2/6">P435.00</td>
                            <td class="py-4 w-2/6">P4,350.00</td>
                            <td class="py-4 w-2/6">0.00</td>
                            <td class="py-4 w-2/6">P387.50</td>
                            <td class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-employee">View</button></td>
                        </tr>
                    </tbody>
                </table>
                <div class="grid justify-center items-center mb-3 bg-white">
                    <nav aria-label="Page navigation example w-full">
                        <ul class="inline-flex -space-x-px">
                            <li>
                                <a href="#"
                                    class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end employee salary-->

        <div id="salaryMaintenance" class="grid bg-white sm:w-full rounded-lg overflow-hidden" style="display: none">
            <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                <div class="row-start-1 row-span-1 flex">
                    <h1 class="text-gray-800 text-4xl font-bold px">Salary Maintenance</h1>
                    <!-- Modal toggle -->
                    <button
                        class="bgcolor text-white hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none"
                        data-modal-toggle="authentication-modal">Add New</button>
                    <!-- Main modal -->
                    <div id="authentication-modal" aria-hidden="true"
                        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                                <div class="flex justify-end p-2">
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-toggle="authentication-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                                    <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Add
                                        Salary</h3>
                                    <div class="grid grid-cols-5 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="text"
                                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Salary
                                                ID</label>
                                            <input type="text" name="name" id="name"
                                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white outline-none"
                                                value="SALARY-0007" required="" readonly>
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                                            <select name="Region" id="Region"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Region</option>
                                                <option value="09:00">NCR</option>
                                                <option value="09:30">Region 1</option>
                                                <option value="10:00">Region 2</option>
                                                <option value="10:30">Region 3</option>
                                                <option value="11:00">Region 4</option>
                                                <option value="11:30">Region 5</option>
                                            </select>
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                                            <select name="starttime" id="starttime"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Municipality/City</option>
                                                <option value="09:00">Las Pinas City</option>
                                                <option value="09:30">Makati City</option>
                                                <option value="10:00">Malabon City</option>
                                                <option value="10:30">Mandaluyong City</option>
                                            </select>
                                        </div>
                                        <div class="col-start-4 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                            <select name="Chain" id="Chain"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Chain</option>
                                                <option value="Finds Finds Las Pinas">Finds Finds Las Pinas</option>
                                                <option value="Robinsons Las Pinas">Robinsons Las Pinas</option>
                                                <option value="Waltermart Makati">Waltermart Makati</option>
                                                <option value="Fisher Mall Malabon">Fisher Mall Malabon</option>
                                                <option value="Robinsons Malabon">Robinsons Malabon</option>
                                            </select>
                                        </div>
                                        <div class="col-start-5 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                                            <select name="Branch" id="Branch"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Branch</option>
                                                <option value="Vista Mall Department Store">Vista Mall Department Store
                                                </option>
                                                <option value="Robinsons Department Store">Robinsons Department Store
                                                </option>
                                                <option value="Waltermart Department Store">Waltermart Department Store
                                                </option>
                                                <option value="Fisher Mall Department Store">Fisher Mall Department
                                                    Store</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic
                                                Rate</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="0.00" required="">
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                                Hour</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="0.00" required="">
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                                Min</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="0.00" required="">
                                        </div>
                                        <div class="col-start-4 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="0.00" required="">
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 outline-none">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-start-1 row-span-2">
                    <div class="flex float-right">
                        <div class="mb-3 xl:w-96">
                            <input type="search" class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl" id="exampleSearch"
                                placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table
                    class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto">
                    <thead class="bg-gray-100 flex text-gray w-full">
                        <tr class="flex w-full">
                            <th class="p-4 w-2/6">Salary ID</th>
                            <th class="p-4 w-2/6">Region</th>
                            <th class="p-4 w-2/6">Municipality/City</th>
                            <th class="p-4 w-2/6">Chain</th>
                            <th class="p-4 w-2/6">Branch</th>
                            <th class="p-4 w-2/6">Basic Rate</th>
                            <th class="p-4 w-2/6">Per Hour</th>
                            <th class="p-4 w-2/6">Per Min</th>
                            <th class="p-4 w-2/6">COLA</th>
                            <th class="p-4 w-2/6"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-grey-light flex flex-col text-center items-left justify-left w-full"
                        style="height: 73vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">SALARY-0001</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">P370.00</td>
                            <td class="p-4 w-2/6">P46.25</td>
                            <td class="p-4 w-2/6">P0.77</td>
                            <td class="p-4 w-2/6">P0.00</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-store">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-store">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">SALARY-0002</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Robinsons Las Pinas</td>
                            <td class="p-4 w-2/6">Robinsons Department Store</td>
                            <td class="p-4 w-2/6">P373.00</td>
                            <td class="p-4 w-2/6">P46.63</td>
                            <td class="p-4 w-2/6">P0.78</td>
                            <td class="p-4 w-2/6">P0.00</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-store">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-store">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">SALARY-0003</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Makati City</td>
                            <td class="p-4 w-2/6">Waltermart Makati</td>
                            <td class="p-4 w-2/6">Waltermart Department Store</td>
                            <td class="p-4 w-2/6">P401.00</td>
                            <td class="p-4 w-2/6">P50.13</td>
                            <td class="p-4 w-2/6">P0.84</td>
                            <td class="p-4 w-2/6">P0.00</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-store">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-store">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">SALARY-0004</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Malabon City</td>
                            <td class="p-4 w-2/6">Fisher Mall Malabon</td>
                            <td class="p-4 w-2/6">Fisher Mall Department Store</td>
                            <td class="p-4 w-2/6">P435.00</td>
                            <td class="p-4 w-2/6">P54.38</td>
                            <td class="p-4 w-2/6">P0.91</td>
                            <td class="p-4 w-2/6">P0.00</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-store">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-store">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">SALARY-0005</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Malabon City</td>
                            <td class="p-4 w-2/6">Robinsons Malabon</td>
                            <td class="p-4 w-2/6">Robinsons Department Store</td>
                            <td class="p-4 w-2/6">P450.00</td>
                            <td class="p-4 w-2/6">P56.25</td>
                            <td class="p-4 w-2/6">P0.94</td>
                            <td class="p-4 w-2/6">P0.00</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-store">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-store">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">SALARY-0006</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Mandaluyong City</td>
                            <td class="p-4 w-2/6">Robinsons Forum Pioneer</td>
                            <td class="p-4 w-2/6">Robinsons Department Store</td>
                            <td class="p-4 w-2/6">P570.00</td>
                            <td class="p-4 w-2/6">P71.25</td>
                            <td class="p-4 w-2/6">P1.19</td>
                            <td class="p-4 w-2/6">P0.00</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-store">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-store">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="grid justify-center items-center mb-3 bg-white">
                    <nav aria-label="Page navigation example w-full">
                        <ul class="inline-flex -space-x-px">
                            <li>
                                <a href="#"
                                    class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end salary maintenance-->

        <div id="deductionMaintenance" class="grid bg-white sm:w-full rounded-lg overflow-hidden" style="display: none">
            <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                <div class="row-start-1 row-span-1 flex">
                    <h1 class="text-gray-800 text-4xl font-bold px">Deduction Maintenance</h1>
                    <!-- Modal toggle -->
                    <button
                        class="bgcolor text-white hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none"
                        data-modal-toggle="add-deduction">Add New</button>
                    <!-- Main modal -->
                    <div id="add-deduction" aria-hidden="true"
                        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                                <div class="flex justify-end p-2">
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-toggle="add-deduction">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                                    <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Add
                                        Deduction</h3>

                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="text"
                                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Deduction
                                                ID</label>
                                            <input type="text" name="name" id="name"
                                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white outline-none"
                                                placeholder="" required="" value="DEDUCTION-0007" readonly>
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Range
                                                Salary</label>
                                            <select name="Chain" id="Chain"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Range Salary</option>
                                                <option value="Finds Finds Las Pinas">P20,000.00 and below</option>
                                                <option value="Robinsons Las Pinas">P20,001.00 - P25,000.00</option>
                                                <option value="Waltermart Makati">P25,001.00 - P27,000.00</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                                            <select name="Region" id="Region"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Region</option>
                                                <option value="09:00">NCR</option>
                                                <option value="09:30">Region 1</option>
                                                <option value="10:00">Region 2</option>
                                                <option value="10:30">Region 3</option>
                                                <option value="11:00">Region 4</option>
                                                <option value="11:30">Region 5</option>
                                            </select>
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                                            <select name="starttime" id="starttime"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Municipality/City</option>
                                                <option value="09:00">Las Pinas City</option>
                                                <option value="09:30">Makati City</option>
                                                <option value="10:00">Malabon City</option>
                                                <option value="10:30">Mandaluyong City</option>
                                            </select>
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                            <select name="Chain" id="Chain"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Chain</option>
                                                <option value="Finds Finds Las Pinas">Finds Finds Las Pinas</option>
                                                <option value="Robinsons Las Pinas">Robinsons Las Pinas</option>
                                                <option value="Waltermart Makati">Waltermart Makati</option>
                                                <option value="Fisher Mall Malabon">Fisher Mall Malabon</option>
                                                <option value="Robinsons Malabon">Robinsons Malabon</option>
                                            </select>
                                        </div>
                                        <div class="col-start-4 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                                            <select name="Branch" id="Branch"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Branch</option>
                                                <option value="Vista Mall Department Store">Vista Mall Department Store
                                                </option>
                                                <option value="Robinsons Department Store">Robinsons Department Store
                                                </option>
                                                <option value="Waltermart Department Store">Waltermart Department Store
                                                </option>
                                                <option value="Fisher Mall Department Store">Fisher Mall Department
                                                    Store</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SSS</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="P370.00" required="" value="0.00">
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">PHIC</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="P46.25" required="" value="0.00">
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HMDF</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="P0.77" required="" value="0.00">
                                        </div>
                                        <div class="col-start-4 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">TOTAL</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="P0.00" required="" value="0.00">
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 outline-none">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-start-1 row-span-2">
                    <div class="flex float-right">
                        <div class="mb-3 xl:w-96">
                            <input type="search" class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl" id="exampleSearch"
                                placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table
                    class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto">
                    <thead class="bg-gray-100 flex text-gray w-full">
                        <tr class="flex w-full">
                            <th class="p-4 w-2/6">Deduction ID</th>
                            <th class="p-4 w-2/6">Region</th>
                            <th class="p-4 w-2/6">Municipality/City</th>
                            <th class="p-4 w-2/6">Chain</th>
                            <th class="p-4 w-2/6">Branch</th>
                            <th class="p-4 w-2/6">Range Salary</th>
                            <th class="p-4 w-1/6">SSS</th>
                            <th class="p-4 w-1/6">PHIC</th>
                            <th class="p-4 w-1/6">HMDF</th>
                            <th class="p-4 w-1/6">TOTAL</th>
                            <th class="p-4 w-2/6"></th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col text-center items-left justify-left w-full"
                        style="height: 73vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">DEDUCTION-0001</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">P20,000.00 and below</td>
                            <td class="p-4 w-1/6">P302.50</td>
                            <td class="p-4 w-1/6">P0.32</td>
                            <td class="p-4 w-1/6">P50.00</td>
                            <td class="p-4 w-1/6">P352.82</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-deduction">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-deduction">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">DEDUCTION-0002</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P0.32</td>
                            <td class="p-4 w-1/6">P50.00</td>
                            <td class="p-4 w-1/6">P437.82</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-deduction">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-deduction">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">DEDUCTION-0003</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">P25,001.00 - P27,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P0.32</td>
                            <td class="p-4 w-1/6">P50.00</td>
                            <td class="p-4 w-1/6">P437.82</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-deduction">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-deduction">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">DEDUCTION-0004</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">P20,000.00 and below</td>
                            <td class="p-4 w-1/6">P302.50</td>
                            <td class="p-4 w-1/6">P0.32</td>
                            <td class="p-4 w-1/6">P50.00</td>
                            <td class="p-4 w-1/6">P352.82</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-deduction">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-deduction">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">DEDUCTION-0005</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P0.32</td>
                            <td class="p-4 w-1/6">P50.00</td>
                            <td class="p-4 w-1/6">P437.82</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-deduction">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-deduction">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">DEDUCTION-0006</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">P25,001.00 - P27,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P0.32</td>
                            <td class="p-4 w-1/6">P50.00</td>
                            <td class="p-4 w-1/6">P437.82</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-deduction">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-deduction">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="grid justify-center items-center mb-3 bg-white">
                    <nav aria-label="Page navigation example w-full">
                        <ul class="inline-flex -space-x-px">
                            <li>
                                <a href="#"
                                    class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end branch maintenance-->

        <div id="branchMaintenance" class="grid bg-white sm:w-full rounded-lg overflow-hidden" style="display: none">
            <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                <div class="row-start-1 row-span-1 flex">
                    <h1 class="text-gray-800 text-4xl font-bold px">Branch Maintenance</h1>
                    <!-- Modal toggle -->
                    <button
                        class="bgcolor text-white hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none"
                        data-modal-toggle="add-branch">Add New</button>
                    <!-- Main modal -->
                    <div id="add-branch" aria-hidden="true"
                        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                                <div class="flex justify-end p-2">
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-toggle="add-branch">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                                    <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Add
                                        Branch</h3>

                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="col-start-1 col-span-2">
                                            <label for="text"
                                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Deduction
                                                ID</label>
                                            <input type="text" name="name" id="name"
                                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white outline-none"
                                                placeholder="" required="" value="BRANCH-0007" readonly>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                                            <select name="Region" id="Region"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Region</option>
                                                <option value="09:00">NCR</option>
                                                <option value="09:30">Region 1</option>
                                                <option value="10:00">Region 2</option>
                                                <option value="10:30">Region 3</option>
                                                <option value="11:00">Region 4</option>
                                                <option value="11:30">Region 5</option>
                                            </select>
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                                            <select name="starttime" id="starttime"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Municipality/City</option>
                                                <option value="09:00">Las Pinas City</option>
                                                <option value="09:30">Makati City</option>
                                                <option value="10:00">Malabon City</option>
                                                <option value="10:30">Mandaluyong City</option>
                                            </select>
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                            <select name="Chain" id="Chain"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Chain</option>
                                                <option value="Finds Finds Las Pinas">Finds Finds Las Pinas</option>
                                                <option value="Robinsons Las Pinas">Robinsons Las Pinas</option>
                                                <option value="Waltermart Makati">Waltermart Makati</option>
                                                <option value="Fisher Mall Malabon">Fisher Mall Malabon</option>
                                                <option value="Robinsons Malabon">Robinsons Malabon</option>
                                            </select>
                                        </div>
                                        <div class="col-start-4 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                                            <select name="Branch" id="Branch"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option hidden selected>Branch</option>
                                                <option value="Vista Mall Department Store">Vista Mall Department Store
                                                </option>
                                                <option value="Robinsons Department Store">Robinsons Department Store
                                                </option>
                                                <option value="Waltermart Department Store">Waltermart Department Store
                                                </option>
                                                <option value="Fisher Mall Department Store">Fisher Mall Department
                                                    Store</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 outline-none">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-start-1 row-span-2">
                    <div class="flex float-right">
                        <div class="mb-3 xl:w-96">
                            <input type="search" class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl" id="exampleSearch"
                                placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table
                    class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto">
                    <thead class="bg-gray-100 flex text-gray w-full">
                        <tr class="flex w-full">
                            <th class="p-4 w-2/6">Branch ID</th>
                            <th class="p-4 w-2/6">Region</th>
                            <th class="p-4 w-2/6">Municipality/City</th>
                            <th class="p-4 w-2/6">Chain</th>
                            <th class="p-4 w-2/6">Branch</th>
                            <th class="p-4 w-2/6"></th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col text-center items-left justify-left w-full"
                        style="height: 73vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">BRANCH-0001</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-branch">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-branch">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">BRANCH-0002</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Las Pinas City</td>
                            <td class="p-4 w-2/6">Robinsons Las Pinas</td>
                            <td class="p-4 w-2/6">Robinsons Department Store</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-branch">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-branch">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">BRANCH-0003</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Makati City</td>
                            <td class="p-4 w-2/6">Waltermart Makati</td>
                            <td class="p-4 w-2/6">Waltermart Department Store</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-branch">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-branch">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">BRANCH-0004</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Malabon City</td>
                            <td class="p-4 w-2/6">Fisher Mall Malabon</td>
                            <td class="p-4 w-2/6">Fisher Mall Department Store</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-branch">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-branch">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">BRANCH-0005</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Malabon City</td>
                            <td class="p-4 w-2/6">Robinsons Malabon</td>
                            <td class="p-4 w-2/6">Robinsons Department Store</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-branch">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-branch">Delete</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-2/6">BRANCH-0006</td>
                            <td class="p-4 w-2/6">NCR</td>
                            <td class="p-4 w-2/6">Mandaluyong City</td>
                            <td class="p-4 w-2/6">Robinsons Forum Pioneer</td>
                            <td class="p-4 w-2/6">Robinsons Department Store</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-branch">Edit</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="delete-branch">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="grid justify-center items-center mb-3 bg-white">
                    <nav aria-label="Page navigation example w-full">
                        <ul class="inline-flex -space-x-px">
                            <li>
                                <a href="#"
                                    class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end branch maintenance-->

        <div class="grid bgcolor overflow-hidden rounded-lg py-10 px-10 my-32" id="profile" style="display:none">

            <div class="grid bg-transparent grid-rows-2 grid-flow-col sm:w-full">
                <div class="row-start-1 row-span-1 flex">
                    <h1 class="text-white text-4xl font-bold px">Profile Information</h1>
                </div>
            </div>
            <div class="grid grid-rows-5 grid-cols-6 gap-4">
                <div class="row-start-1 row-span-2 col-span-2 justify-center flex items-center">
                    <img src="img\profilepic.png" class="w-2/6 rounded-full bordercolor bordercolor border-4 "
                        alt="Sample image" />
                </div>
                <div class="row-start-1 col-span-1">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Company
                        ID</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Company ID" required="" value="0000-0001" disabled>
                </div>
                <div class="row-start-1 col-span-1">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">First
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="First Name" required="" value="Padre" disabled>
                </div>
                <div class="row-start-1 col-span-1">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Middle
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Middle Name" required="" value="Bernardo" disabled>
                </div>
                <div class="row-start-1 col-span-1">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Last
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Last Name" required="" value="Salvi" disabled>
                </div>

                <div class="relative row-start-2 col-span-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <label for="number"
                        class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Birthdate</label>
                    <input datepicker type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select your birthdate" value="12/14/1989" disabled>
                </div>
                <div class="row-start-2 col-span-1">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Contact
                        No.</label>
                    <input type="number" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Contact No." required="" value="09123456789" disabled>
                </div>
                <div class="row-start-2 col-span-2">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Email</label>
                    <input type="email" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Email" required="" value="crisostomo.ibarra@barbizonfashion.com" disabled>
                </div>
                <div class="row-start-3 col-span-3">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Job
                        Position</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Job Position" required="" value="NBFI Sales" disabled>
                </div>
                <div class="row-start-3 col-span-3">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Company
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Company Name" required="" value="NBFI" disabled>
                </div>
                <div class="row-start-4 col-span-2">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Branch
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Branch Name" required="" value="RDS Bacolod" disabled>
                </div>
                <div class="row-start-4 col-span-2">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Chain
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Chain Name" required="" value="RDS" disabled>
                </div>
                <div class="row-start-4 col-span-2">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Brand
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Brand Name" required="" value="Barbizon" disabled>
                </div>
                <div class="row-start-5 col-span-2">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">RAS</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="RAS Name" required="" value="Ms. Revelyn Loyola" disabled>
                </div>
                <div class="row-start-5 col-span-2">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">HR</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="HR Name" required="" value="Helena Loyola" disabled>
                </div>
                <div class="relative row-start-5 col-span-2">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <label for="number" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Date
                        Started</label>
                    <input datepicker type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select your birthdate" value="10/21/2006" disabled>
                </div>

            </div>
        </div>
        <!--end profile  -->

    </content>

    <!-- Javascript Code -->
    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="inline-block p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5"
        id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
            </path>
        </svg>
    </button>

    <!-- view-employee modal -->
    <div id="view-employee" aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="view-employee">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-2xl font-medium text-gray-900 dark:text-white">Employee Payroll Salary</h3>
                    <div class="grid grid-cols-4 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="number"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Payroll
                                Number</label>
                            <input type="text" name="companyID" id="companyID"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="0000-0001" required="" value="0000-0001" disabled>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">ID
                                Number</label>
                            <input type="text" name="lName" id="lName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="340" required="" value="340" disabled>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name</label>
                            <input @input="capitalizeFName" type="text" name="fName" id="fName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Ibarra Crisostomo" required="" value="Ibarra Crisostomo" disabled>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Cut-Off
                                Date</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="9" required="" value="October 06, 2021" disabled>
                        </div>

                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">No. of
                                Days</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Basic Rate" required="" value="4" disabled>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Basic Rate" required="" value="Finds Finds Las Pinas" disabled>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Basic Rate" required="" value="Vista Mall Department Store" disabled>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">13th Month
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Basic Rate" required="" value="0.00" disabled>
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="jobPosition"
                            class="text-xl font-medium text-gray-900 dark:text-white">Earnings</label>
                    </div>

                    <div class="grid grid-cols-6 gap-1">
                        <div class="col-start-1 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic
                                Rate</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Basic Rate" required="" value="370.00" disabled>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA
                                Rate</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.00" disabled>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SEA
                                Rate</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.00" disabled>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Hour
                            </label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="46.25" disabled>
                        </div>
                        <div class="col-start-5 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Minute
                            </label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.77" disabled>
                        </div>
                        <div class="col-start-6 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total
                                Rate</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="370.00" disabled>
                        </div>
                    </div>
                    <div class="grid grid-cols-6 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="1,480.00" disabled>
                        </div>

                        <div class="col-start-2 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.00" disabled>
                        </div>

                        <div class="col-start-3 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SEA
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.00" disabled>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Overtime
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.00" disabled>
                        </div>
                        <div class="col-start-5 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Holiday
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.00" disabled>
                        </div>

                        <div class="col-start-6 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="1,480.00" disabled>
                        </div>
                    </div>
                    <div class="col-start-1 col-end-7 w-full">
                        <label for="jobPosition"
                            class="text-xl font-medium text-gray-900 dark:text-white">Deduction</label>
                    </div>
                    <div class="grid grid-cols-5 gap-1">
                        <div class="col-start-1 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SSS</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Basic Rate" required="" value="260" disabled>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">PHIC</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="150.32" disabled>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HMDF</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="50.00" disabled>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Others</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="50.00" disabled>
                        </div>
                        <div class="col-start-5 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="460.32" disabled>
                        </div>
                    </div>
                    <div class="col-start-1 col-end-7 w-full">
                        <label for="jobPosition" class="text-xl font-medium text-gray-900 dark:text-white">NET
                            PAY</label>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total
                                Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Basic Rate" required="" value="1,480.00" disabled>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Total
                                Deduction</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="460.32" disabled>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Salary</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="1,019.68" disabled>
                        </div>
                    </div>
                    <!-- <button type="submit" class="col-start-1 col-end-7 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                </form>
            </div>
        </div>
    </div>
    <!-- end view-employee modal -->

    <!-- edit salary modal -->
    <div id="edit-store" aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="edit-store">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Edit Salary
                    </h3>

                    <div class="grid grid-cols-5 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch
                                ID</label>
                            <input type="text" name="name" id="name"
                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="BRANCH-0001" required="" value="BRANCH-0001">
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                            <select name="Region" id="Region"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>NCR</option>
                                <option value="09:00">NCR</option>
                                <option value="09:30">Region 1</option>
                                <option value="10:00">Region 2</option>
                                <option value="10:30">Region 3</option>
                                <option value="11:00">Region 4</option>
                                <option value="11:30">Region 5</option>
                            </select>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                            <select name="starttime" id="starttime"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Las Pinas City</option>
                                <option value="09:00">Las Pinas City</option>
                                <option value="09:30">Makati City</option>
                                <option value="10:00">Malabon City</option>
                                <option value="10:30">Mandaluyong City</option>
                            </select>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                            <select name="Chain" id="Chain"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Finds Finds Las Pinas</option>
                                <option value="Finds Finds Las Pinas">Finds Finds Las Pinas</option>
                                <option value="Robinsons Las Pinas">Robinsons Las Pinas</option>
                                <option value="Waltermart Makati">Waltermart Makati</option>
                                <option value="Fisher Mall Malabon">Fisher Mall Malabon</option>
                                <option value="Robinsons Malabon">Robinsons Malabon</option>
                            </select>
                        </div>
                        <div class="col-start-5 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                            <select name="Branch" id="Branch"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Vista Mall Department Store</option>
                                <option value="Vista Mall Department Store">Vista Mall Department Store
                                </option>
                                <option value="Robinsons Department Store">Robinsons Department Store
                                </option>
                                <option value="Waltermart Department Store">Waltermart Department Store
                                </option>
                                <option value="Fisher Mall Department Store">Fisher Mall Department
                                    Store</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic
                                Rate</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P370.00" required="" value="P370.00">
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                Hour</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P46.25" required="" value="P46.25">
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                Min</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P0.77" required="" value="P0.77">
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P0.00" required="" value="P0.00">
                        </div>
                    </div>
                    <button type="submit"
                        class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!--end salary modal-->

    <!-- delete salary modal -->
    <div id="delete-store" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full  justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="delete-store">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this Salary?</h3>
                    <button data-modal-toggle="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-toggle="popup-modal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!--end delete salary modal-->

    <!-- edit-deduction modal -->
    <div id="edit-deduction" aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="edit-deduction">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Edit Deduction</h3>

                    <div class="grid grid-cols-2 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Deduction
                                ID</label>
                            <input type="text" name="name" id="name"
                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white outline-none"
                                placeholder="" required="" value="SALARY-0001" readonly>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Range
                                Salary</label>
                            <select name="Chain" id="Chain"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>P20,000.00 and below</option>
                                <option value="Finds Finds Las Pinas">P20,000.00 and below</option>
                                <option value="Robinsons Las Pinas">P20,001.00 - P25,000.00</option>
                                <option value="Waltermart Makati">P25,001.00 - P27,000.00</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                            <select name="Region" id="Region"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>NCR</option>
                                <option value="NCR">NCR</option>
                                <option value="Region 1">Region 1</option>
                                <option value="Region 2">Region 2</option>
                                <option value="Region 3">Region 3</option>
                                <option value="Region 4">Region 4</option>
                                <option value="Region 5">Region 5</option>
                            </select>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                            <select name="starttime" id="starttime"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Las Pinas City</option>
                                <option value="Las Pinas City">Las Pinas City</option>
                                <option value="Makati City">Makati City</option>
                                <option value="Malabon City">Malabon City</option>
                                <option value="Mandaluyong City">Mandaluyong City</option>
                            </select>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                            <select name="Chain" id="Chain"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Finds Finds Las Pinas</option>
                                <option value="Finds Finds Las Pinas">Finds Finds Las Pinas</option>
                                <option value="Robinsons Las Pinas">Robinsons Las Pinas</option>
                                <option value="Waltermart Makati">Waltermart Makati</option>
                                <option value="Fisher Mall Malabon">Fisher Mall Malabon</option>
                                <option value="Robinsons Malabon">Robinsons Malabon</option>
                            </select>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                            <select name="Branch" id="Branch"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Vista Mall Department Store</option>
                                <option value="Vista Mall Department Store">Vista Mall Department Store
                                </option>
                                <option value="Robinsons Department Store">Robinsons Department Store
                                </option>
                                <option value="Waltermart Department Store">Waltermart Department Store
                                </option>
                                <option value="Fisher Mall Department Store">Fisher Mall Department
                                    Store</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SSS</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P370.00" required="" value="P302.50">
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">PHIC</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P46.25" required="" value="P0.32">
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HMDF</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P0.77" required="" value="P50.00">
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">TOTAL</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P0.00" required="" value="P352.82">
                        </div>
                    </div>
                    <button type="submit"
                        class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!--end edit deduction modal-->

    <div id="delete-deduction" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full  justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="delete-deduction">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want
                            to
                            delete this Deduction of Salary?</h3>
                        <button data-modal-toggle="popup-modal" type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-toggle="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                            cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end delete-deduction modal-->

    <!-- edit-branch modal -->
    <div id="edit-branch" aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="edit-branch">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Edit Branch</h3>

                    <div class="grid grid-cols-1 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch
                                ID</label>
                            <input type="text" name="name" id="name"
                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white outline-none"
                                placeholder="" required="" value="BRANCH-0001" readonly>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-2">
                        <div class="col-start-1 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                            <select name="Region" id="Region"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>NCR</option>
                                <option value="NCR">NCR</option>
                                <option value="Region 1">Region 1</option>
                                <option value="Region 2">Region 2</option>
                                <option value="Region 3">Region 3</option>
                                <option value="Region 4">Region 4</option>
                                <option value="Region 5">Region 5</option>
                            </select>
                        </div>
                        <div class="col-start-2 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                            <select name="starttime" id="starttime"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Las Pinas City</option>
                                <option value="Las Pinas City">Las Pinas City</option>
                                <option value="Makati City">Makati City</option>
                                <option value="Malabon City">Malabon City</option>
                                <option value="Mandaluyong City">Mandaluyong City</option>
                            </select>
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                            <select name="Chain" id="Chain"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Finds Finds Las Pinas</option>
                                <option value="Finds Finds Las Pinas">Finds Finds Las Pinas</option>
                                <option value="Robinsons Las Pinas">Robinsons Las Pinas</option>
                                <option value="Waltermart Makati">Waltermart Makati</option>
                                <option value="Fisher Mall Malabon">Fisher Mall Malabon</option>
                                <option value="Robinsons Malabon">Robinsons Malabon</option>
                            </select>
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                            <select name="Branch" id="Branch"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>Vista Mall Department Store</option>
                                <option value="Vista Mall Department Store">Vista Mall Department Store
                                </option>
                                <option value="Robinsons Department Store">Robinsons Department Store
                                </option>
                                <option value="Waltermart Department Store">Waltermart Department Store
                                </option>
                                <option value="Fisher Mall Department Store">Fisher Mall Department
                                    Store</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit"
                        class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!--end edit branch modal-->

    <div id="delete-branch" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full  justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="delete-branch">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want
                            to
                            delete this Branch?</h3>
                        <button data-modal-toggle="popup-modal" type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-toggle="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                            cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end delete-branch modal-->

    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>

<!-- Javascript Code -->
<script>
var navmenu = document.getElementById('navmenu');

function toggleMenu() {
    navmenu.classList.toggle('hidden');
    navmenu.classList.toggle('w-full');
    navmenu.classList.toggle('h-screen');
}
// Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function showDashboard() {
    var x = document.getElementById("Dashboard");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideEmployeeSalary();
    hideSalaryMaintenance();
    hideDeductionMaintenance();
    hideBranchMaintenance();
    hideProfile();
}

function showEmployeeSalary() {
    var x = document.getElementById("employeeSalary");
    if (x.style.display === "none") {
        console.log("show employee salary");
        x.style.display = "block";
    }

    hideDashboard();
    hideSalaryMaintenance();
    hideDeductionMaintenance();
    hideBranchMaintenance();
    hideProfile();
}

function showSalaryMaintenance() {
    var x = document.getElementById("salaryMaintenance");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideDashboard();
    hideEmployeeSalary();
    hideDeductionMaintenance();
    hideBranchMaintenance();
    hideProfile();
}

function showDeductionMaintenance() {
    var x = document.getElementById("deductionMaintenance");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideDashboard();
    hideEmployeeSalary();
    hideSalaryMaintenance();
    hideBranchMaintenance();
    hideProfile();
}

function showBranchMaintenance() {
    var x = document.getElementById("branchMaintenance");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideDashboard();
    hideEmployeeSalary();
    hideSalaryMaintenance();
    hideDeductionMaintenance();
    hideProfile();
}

function showProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("hide profile");
    }
    hideDashboard();
    hideEmployeeSalary();
    hideSalaryMaintenance();
    hideDeductionMaintenance();
    hideBranchMaintenance();
}

function hideDashboard() {
    var x = document.getElementById("Dashboard");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideEmployeeSalary() {
    var x = document.getElementById("employeeSalary");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideSalaryMaintenance() {
    var x = document.getElementById("salaryMaintenance");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideDeductionMaintenance() {
    var x = document.getElementById("deductionMaintenance");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideBranchMaintenance() {
    var x = document.getElementById("branchMaintenance");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

const labelsBarChartBasicRate = [
    "BRANCH-0006",
    "BRANCH-0005",
    "BRANCH-0004",
    "BRANCH-0003",
    "BRANCH-0002",
];
const dataBarChartBasicRate = {
    labels: labelsBarChartBasicRate,
    datasets: [{
        label: "Salary",
        backgroundColor: "hsl(183.5,100%,33.9%)",
        borderColor: "hsl(0,0%,100%)",
        data: [570, 450, 435, 401, 373],
    }, ],
};

const configBarChartBasicRate = {
    type: "bar",
    data: dataBarChartBasicRate,
    options: {},
};

var chartBarBasicRate = new Chart(
    document.getElementById("chartBarBasicRate"),
    configBarChartBasicRate
);

const labelsBarChartDeductionRate = [
    "BRANCH-0002",
    "BRANCH-0003",
    "BRANCH-0005",
    "BRANCH-0006",
    "BRANCH-0001",
    "BRANCH-0002"
];
const dataBarChartDeductionRate = {
    labels: labelsBarChartDeductionRate,
    datasets: [{
        label: "Deduction",
        backgroundColor: "hsl(325.8,100%,33.3%)",
        borderColor: "hsl(0,0%,100%)",
        data: [437.82, 437.82, 437.82, 437.82, 352.82, 352.82],
    }, ],
};

const configBarChartDeductionRate = {
    type: "bar",
    data: dataBarChartDeductionRate,
    options: {},
};

var chartBarDeductionRate = new Chart(
    document.getElementById("chartBarDeductionRate"),
    configBarChartDeductionRate
);





</script>