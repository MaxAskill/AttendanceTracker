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
                            <a href="#" onClick="showEmployeeSalary()" @click="open = !open"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <title>Ban</title>
                                    <circle cx="256" cy="256" r="208" fill="none" stroke="currentColor"
                                        stroke-miterlimit="10" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"
                                        d="M108.92 108.92l294.16 294.16" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Employee Salary</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="showSalaryMaintenance()" @click="open = !open"
                                class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M112.91 128A191.85 191.85 0 0064 254c-1.18 106.35 85.65 193.8 192 194 106.2.2 192-85.83 192-192 0-104.54-83.55-189.61-187.5-192a4.36 4.36 0 00-4.5 4.37V152"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <path
                                        d="M233.38 278.63l-79-113a8.13 8.13 0 0111.32-11.32l113 79a32.5 32.5 0 01-37.25 53.26 33.21 33.21 0 01-8.07-7.94z" />
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
                                    <title>Checkmark Circle</title>
                                    <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" d="M352 176L217.6 336 160 272" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Deduction Maintenance</span>
                            </a>
                        </li>

                        <li>
                            <a href="#"
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
        <div id="employeeSalary" class="grid bgcolor overflow-hidden rounded-lg mb-5" style="display: block">
            <div class="grid grid-rows-1 grid-col-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                <div class="row-start-1 col-span-1 flex">
                    <h1 class="text-white text-4xl font-bold px">Employee Salary</h1>
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
                    <thead class="bg-gray-100 flex text-gray w-full pr-5">
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
                            <td class="py-4 w-2/6">P5,093.66</td>
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
                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add Salary Maintenance
                                    </h3>
                                    <div class="grid grid-cols-5 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="text"
                                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch
                                                ID</label>
                                            <input type="text" name="name" id="name"
                                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Branch ID" required="">
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Region" required="">
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Municipality/City" required="">
                                        </div>
                                        <div class="col-start-4 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Chain" required="">
                                        </div>
                                        <div class="col-start-5 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Branch" required="">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic
                                                Rate</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Basic Rate" required="">
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                                Hour</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Per Hour" required="">
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                                Min</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Per Min" required="">
                                        </div>
                                        <div class="col-start-4 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="COLA" required="">
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="col-start-1 col-span-1 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
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
                    <thead class="bg-gray-100 flex text-gray w-full pr-5">
                        <tr class="flex w-full">
                            <th class="p-4 w-2/6">Branch ID</th>
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
                            <td class="p-4 w-2/6">BRANCH-0001</td>
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
                            <td class="p-4 w-2/6">BRANCH-0002</td>
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
                            <td class="p-4 w-2/6">BRANCH-0003</td>
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
                            <td class="p-4 w-2/6">BRANCH-0004</td>
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
                            <td class="p-4 w-2/6">BRANCH-0005</td>
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
                            <td class="p-4 w-2/6">BRANCH-0006</td>
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
                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add Deduction
                                        Maintenance</h3>
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="text"
                                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Salary
                                                ID</label>
                                            <input type="text" name="name" id="name"
                                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Salary ID" required="">
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Range
                                                Salary</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Range Salary" required="">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-2">
                                        <div class="col-start-1 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Basic
                                                Rate</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Basic Rate" required="">
                                        </div>
                                        <div class="col-start-2 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                                Hour</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Per Hour" required="">
                                        </div>
                                        <div class="col-start-3 col-span-1">
                                            <label for="date"
                                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per
                                                Min</label>
                                            <input type="text" name="birthdate" id="birthdate"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Per Min" required="">
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add</button>
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
                    <thead class="bg-gray-100 flex text-gray w-full pr-5">
                        <tr class="flex w-full">
                            <th class="p-4 w-2/6">Salary ID</th>
                            <th class="p-4 w-2/6">Branch ID</th>
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
                            <td class="p-4 w-2/6">SALARY-0001</td>
                            <td class="p-4 w-2/6">BRANCH-0001</td>
                            <td class="p-4 w-2/6">P20,000.00 and below</td>
                            <td class="p-4 w-1/6">P302.50</td>
                            <td class="p-4 w-1/6">P00.32</td>
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
                            <td class="p-4 w-2/6">SALARY-0002</td>
                            <td class="p-4 w-2/6">BRANCH-0001</td>
                            <td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P00.32</td>
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
                            <td class="p-4 w-2/6">SALARY-0003</td>
                            <td class="p-4 w-2/6">BRANCH-0001</td>
                            <td class="p-4 w-2/6">P25,001.00 - P27,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P00.32</td>
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
                            <td class="p-4 w-2/6">SALARY-0004</td>
                            <td class="p-4 w-2/6">BRANCH-0002</td>
                            <td class="p-4 w-2/6">P20,000.00 and below</td>
                            <td class="p-4 w-1/6">P302.50</td>
                            <td class="p-4 w-1/6">P00.32</td>
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
                            <td class="p-4 w-2/6">SALARY-0005</td>
                            <td class="p-4 w-2/6">BRANCH-0002</td>
                            <td class="p-4 w-2/6">P20,001.00 - P25,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P00.32</td>
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
                            <td class="p-4 w-2/6">SALARY-0006</td>
                            <td class="p-4 w-2/6">BRANCH-0002</td>
                            <td class="p-4 w-2/6">P25,001.00 - P27,000.00</td>
                            <td class="p-4 w-1/6">P387.50</td>
                            <td class="p-4 w-1/6">P00.32</td>
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
        <!--end deduction maintenance-->

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
                    <h3 class="text-2xl font-medium text-gray-900 dark:text-white">Employee Salary</h3>
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
                            <label for="text"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">ID
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
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">No. of Days</label>
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
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SEA Rate</label>
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
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">COLA Pay</label>
                            <input type="text" name="jobPosition" id="jobPosition"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Per Hour" required="" value="0.00" disabled>
                        </div>

                        <div class="col-start-3 col-span-1">
                            <label for="jobPosition"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">SEA Pay</label>
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

    <!-- edit-store modal -->
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
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit Salary Maintenance</h3>

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
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="NCR" required="" value="NCR">
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Las Pinas City" required="" value="Las Pinas City">
                        </div>
                        <div class="col-start-4 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Finds Finds Las Pinas" required="" value="Finds Finds Las Pinas">
                        </div>
                        <div class="col-start-5 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Vista Mall Las Pinas, Finds Finds Department Store" required=""
                                value="Vista Mall Las Pinas, Finds Finds Department Store">
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
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Hour</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="P46.25" required="" value="P46.25">
                        </div>
                        <div class="col-start-3 col-span-1">
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Per Min</label>
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
                        class="col-start-1 col-span-1 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!--end edit-store modal-->

    <!-- delete-store modal -->
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
                        <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                            delete this Salary Record?</h3>
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
    <!--end edit-store modal-->

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
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit Deduction Maintenance</h3>

                    <div class="grid grid-cols-2 gap-2">
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
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Range
                                Salary</label>
                            <input type="text" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="NCR" required="" value="P25,000 and below">
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
                                placeholder="P46.25" required="" value="P00.32">
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
                        class="col-start-1 col-span-1 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!--end edit-store modal-->

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
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
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

    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

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

function showSalaryMaintenance() {
    var x = document.getElementById("salaryMaintenance");
    if (x.style.display === "none") {
        x.style.display = "block";
    }

    console.log("salaryMaintenance");
    hideDeductionMaintenance();
    hideEmployeeSalary();

}

function showDeductionMaintenance() {
    var x = document.getElementById("deductionMaintenance");
    if (x.style.display === "none") {
        x.style.display = "block";
    }

    hideSalaryMaintenance();
    hideEmployeeSalary();
}

function showEmployeeSalary() {
    var x = document.getElementById("employeeSalary");
    if (x.style.display === "none") {
        console.log("show employee salary");
        x.style.display = "block";
    }

    hideSalaryMaintenance();
    hideDeductionMaintenance()
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

function hideEmployeeSalary() {
    var x = document.getElementById("employeeSalary");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}
</script>