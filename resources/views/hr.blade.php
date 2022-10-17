<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HR</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <a href="#" onClick="showEmployeeList()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M336 304c-65.17 0-127.84 32.37-143.54 95.41-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                        <path
                                            d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M206 306c-18.05-8.27-37.93-11.45-59-11.45-52 0-102.1 25.85-114.65 76.2-1.65 6.66 2.53 13.25 9.37 13.25H154"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Employee Master List</span>
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
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Employee Payroll Salary</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" onClick="showattendanceSummary()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <rect fill="none" stroke="currentColor" stroke-linejoin="round"
                                            stroke-width="32" x="48" y="80" width="416" height="384" rx="48" />
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round"
                                            stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32" />
                                        <path fill="none" stroke="currentColor" stroke-linejoin="round"
                                            stroke-width="32" d="M464 160H48" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Attendance Summary</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="showOTSummary()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0116 16v288a16 16 0 01-16 16c-128 0-177.45 25.81-208 64-30.37-38-80-64-208-64-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0116-16c131.57.59 192 32.84 208 96zM256 160v288"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Overtime Application</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="showProfile()"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <title>Bar Chart</title>
                                        <path d="M32 32v432a16 16 0 0016 16h432" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                        <rect x="96" y="224" width="80" height="192" rx="20" ry="20" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" />
                                        <rect x="240" y="176" width="80" height="240" rx="20" ry="20" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" />
                                        <rect x="383.64" y="112" width="80" height="304" rx="20" ry="20" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Reports</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="showProfile()"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                                </a>
                            </li>

                        <div>
                            <button id="chaindp" data-dropdown-toggle="chaindropdown"
                                class="flex flex-row items-center h-12 px-2 py-2  ml-5 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none"
                                type="button">Branch<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="branchdropdown"
                                class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="branchdp">
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vista
                                            Mall Department Store</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Robinsons
                                            Department Store</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Waltermart
                                            Department Store</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3 xl:w-full ml-5 flex">
                            <input type="search" class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch"
                                placeholder="Search" />
                            <button
                                class="bgcolor text-white hover:bg-white xl:ml-10 h-12 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none"
                                onClick="printDataEmployeeMasterList()">Print</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table id="employeeMasterListTable"
                    class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-hidden">
                    <thead class="bg-gray-100 flex text-gray w-full">
                        <tr class="flex w-full">
                            <th class="p-4 w-1/6"><button type="button" id="btn" onClick="showprint()">Select
                                    All</button></th>
                            <th class="p-4 w-2/6">ID Number</th>
                            <th class="p-4 w-2/6">Name</th>
                            <th class="p-4 w-2/6">Branch</th>
                            <th class="p-4 w-2/6">Chain</th>
                            <th class="p-4 w-2/6 ">Status</th>
                            <th class="p-4 w-2/6 ">Remaining Days</th>
                            <th class="p-4 w-2/6 "></th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col text-center items-left justify-left w-full"
                        style="height: 73vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="p-4 w-2/6">0000-0001</td>
                            <td class="p-4 w-2/6">Crisostomo Ibarra</td>
                            <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                            <td class="p-4 w-2/6">Vista Mall Department Store</td>
                            <td class="p-4 w-2/6">Active</td>
                            <td class="p-4 w-2/6 "><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="resign-modal">Resign</button>
                            </td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-employee">View</button>
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-employee">Edit</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="p-4 w-2/6">0000-0002</td>
                            <td class="p-4 w-2/6">Maria Clara</td>
                            <td class="p-4 w-2/6">Fisher Mall Malabon</td>
                            <td class="p-4 w-2/6">Fisher Mall Department Store</td>
                            <td class="p-4 w-2/6">Active</td>
                            <td class="p-4 w-2/6 "><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="resign-modal">Resign</button>
                            </td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-employee">View</button>
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-employee">Edit</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="p-4 w-2/6">0000-0003</td>
                            <td class="p-4 w-2/6">Doña Victorina</td>
                            <td class="p-4 w-2/6">Waltermart Makati</td>
                            <td class="p-4 w-2/6">Waltermart Department Store</td>
                            <td class="p-4 w-2/6">Pending Resignation</td>
                            <td class="p-4 w-2/6 ">13 days left</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-employee">View</button>
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-employee">Edit</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="p-4 w-2/6">0000-0004</td>
                            <td class="p-4 w-2/6">Don Anastacio</td>
                            <td class="p-4 w-2/6">Robinsons Las Pinas</td>
                            <td class="p-4 w-2/6">Robinsons Department Store</td>
                            <td class="p-4 w-2/6">Pending Resignation</td>
                            <td class="p-4 w-2/6 ">25 days left</td>
                            <td class="p-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-employee">View</button>
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="edit-employee">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="grid justify-center items-center mb-5">
                    <nav aria-label="Page navigation example w-full">
                        <ul class="inline-flex -space-x-px">
                            <li>
                                <a href="/"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg><span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </sidebar>
        </div>

        <content class="xl:w-10/12 sm:w-full px-10 mt-5">
            <div id="employeeMasterList" class="grid bg-white sm:w-full rounded-lg overflow-hidden"
                style="display: block">
                <div class="grid grid-rows-1 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-gray-800 text-4xl font-bold px">Employee Master List</h1>

                        <!-- Modal toggle -->
                        <button
                            class="bgcolor text-white hover:bg-white xl:ml-10 h-12 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none"
                            data-modal-toggle="authentication-modal">Add New</button>
                        <button
                            class="bgcolor text-white hover:bg-white xl:ml-10 h-12 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none"
                            data-modal-toggle="upload-file">Upload File</button>
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
                                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8"
                                        action="{{ url('employee') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div id="personalInfo" style="display: block">
                                            <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">
                                                Personal Info
                                            </h3>
                                            <div class="grid grid-cols-4 gap-2">
                                                <div class="col-start-1 col-span-1">
                                                    <label for="number"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company
                                                        ID</label>
                                                    <input type="text" name="userID" id="userID"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Company ID" required="">
                                                </div>
                                                <div class="col-start-2 col-span-1">
                                                    <label for="text"
                                                        class="form-control capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">First
                                                        Name</label>
                                                    <input @input="capitalizeFName" type="text" name="firstName"
                                                        id="firstName"
                                                        class="form-control capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="First Name" required="">
                                                </div>
                                                <div class="col-start-3 col-span-1">
                                                    <label for="text"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Middle
                                                        Name</label>
                                                    <input type="text" name="middleName" id="middleName"
                                                        class="form-control capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Middle Name" required="">
                                                </div>
                                                <div class="col-start-4 col-span-1">
                                                    <label for="text"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Last
                                                        Name</label>
                                                    <input type="text" name="lastName" id="lastName"
                                                        class="form-control capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="relative col-start-1 col-span-1">
                                                    <div
                                                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                        <svg aria-hidden="true"
                                                            class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <label for="number"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Birthdate</label>
                                                    <input datepicker type="text" name="birthdate"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="Select your birthdate">
                                                </div>

                                                <div class="col-start-2 col-span-1">
                                                    <label for="number"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Contact
                                                        No.</label>
                                                    <input type="text" name="contactNo" maxlength="11" id="contactNo"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Contact Number" required="">
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="col-start-1 col-span-1">
                                                    <label for="jobPosition"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Job
                                                        Position</label>
                                                    <input type="text" name="jobPosition" id="jobPosition"
                                                        class="form-control capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Job Position" required="">
                                                </div>
                                                <div class="col-start-2">
                                                    <label for="email"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
                                                    <input type="email" name="email" id="email"
                                                        onkeyup="ValidateEmail()"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Email (Eg. name@email.com)" required="">
                                                    <span id="lblError" style="color: red"></span>
                                                </div>
                                            </div>
                                            <button type="button" onClick="nextPage()"
                                                class="w-full text-white mt-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Next</button>
                                        </div>
                                        <div id="companyInfo" style="display: none">
                                            <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">
                                                Personal Info
                                            </h3>
                                            <div class="grid grid-cols-4 gap-2">
                                                <div class="col-start-1 col-span-1">
                                                    <label for="text"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Store
                                                        Assignment</label>
                                                    <input type="text" name="storeAssignment" id="storeAssignment"
                                                        class="form-control capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Store Assignment" required="">
                                                </div>
                                                <div class="col-start-2 col-span-1">
                                                    <label for="text"
                                                        class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Brand</label>
                                                    <input @input="capitalizeFName" type="text" name="brand" id="brand"
                                                        class="form-control capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Brand" required="">
                                                </div>
                                                <div class="col-start-3 col-span-1">
                                                    <label for="number"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company</label>
                                                    <input type="text" name="company" id="company"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Company" required="">
                                                </div>
                                                <div class="col-start-4 col-span-1">
                                                    <label for="text"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                                    <input type="text" name="chain" id="chain"
                                                        class="form-control capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="Chain" required="">
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="col-start-1 col-span-1">
                                                    <label for="date"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">RAS</label>
                                                    <input type="text" name="RAS" id="RAS"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="RAS" required="">
                                                </div>

                                                <div class="col-start-2 col-span-1">
                                                    <label for="number"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HR</label>
                                                    <input type="text" name="HR" id="HR"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="HR" required="">
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="relative col-start-1 col-span-1">
                                                    <div
                                                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                        <svg aria-hidden="true"
                                                            class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <label for="number"
                                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date
                                                        Started</label>
                                                    <input datepicker type="text" name="dateStarted"
                                                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="Select date">
                                                </div>
                                                <button type="button" onClick="back()"
                                                    class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Back</button>
                                                <button type="submit"
                                                    class="col-start-2 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Add
                                                    Account</button>

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-start-1 row-span-1">
                        <div class="flex">
                            <div>
                                <button id="branchdp" data-dropdown-toggle="branchdropdown"
                                    class="flex flex-row items-center h-12 px-2 py-2 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none"
                                    type="button">Chain<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="chaindropdown"
                                    class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                    data-popper-reference-hidden="" data-popper-escaped=""
                                    data-popper-placement="bottom"
                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="chaindp">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vista
                                                Mall Las Pinas</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Robinsons
                                                Las Pinas</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Waltermart
                                                Makati</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div>
                                <button id="chaindp" data-dropdown-toggle="chaindropdown"
                                    class="flex flex-row items-center h-12 px-2 py-2  ml-5 bg-transparent font-themecolor font-bold rounded-lg border-2 bordercolor  focus:outline-none"
                                    type="button">Branch<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="branchdropdown"
                                    class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                    data-popper-reference-hidden="" data-popper-escaped=""
                                    data-popper-placement="bottom"
                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="branchdp">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vista
                                                Mall Department Store</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Robinsons
                                                Department Store</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Waltermart
                                                Department Store</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3 xl:w-full ml-5 flex">
                                <input type="search" class="form-control block w-full px-3 py-2.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch"
                                    placeholder="Search" />
                                <button
                                    class="bgcolor text-white hover:bg-white xl:ml-10 h-12 font-themecolor font-semibold hover:text-teal-700 px-2 border-2 bordercolor hover:bordercolor rounded-2xl focus:outline-none"
                                    onClick="printDataEmployeeMasterList()">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <table id="employeeMasterListTable"
                        class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-hidden">
                        <thead class="bg-gray-100 flex text-gray w-full pr-5">
                            <tr class="flex w-full">
                                <th class="p-4 w-1/6"><button type="button" id="btn" onClick="showprint()">Select
                                        All</button></th>
                                <th class="p-4 w-2/6">ID Number</th>
                                <th class="p-4 w-2/6">Name</th>
                                <th class="p-4 w-2/6">Branch</th>
                                <th class="p-4 w-2/6">Chain</th>
                                <th class="p-4 w-2/6 ">Status</th>
                                <th class="p-4 w-2/6 ">Remaining Days</th>
                                <th class="p-4 w-2/6 "></th>
                            </tr>
                        </thead>
                        <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                        <tbody class="bg-grey-light flex flex-col text-center items-left justify-left w-full"
                            style="height: 73vh;">
                            <!-- <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </td> -->
                            <!-- <td class="p-4 w-2/6">0000-0001</td>
                                <td class="p-4 w-2/6">Crisostomo Ibarra</td>
                                <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                                <td class="p-4 w-2/6">Vista Mall Department Store</td>
                                <td class="p-4 w-2/6">Active</td>
                                <td class="p-4 w-2/6 "><button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="resign-modal">Resign</button>
                                </td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="view-employee">View</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-employee">Edit</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </td>
                                <td class="p-4 w-2/6">0000-0002</td>
                                <td class="p-4 w-2/6">Maria Clara</td>
                                <td class="p-4 w-2/6">Fisher Mall Malabon</td>
                                <td class="p-4 w-2/6">Fisher Mall Department Store</td>
                                <td class="p-4 w-2/6">Active</td>
                                <td class="p-4 w-2/6 "><button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="resign-modal">Resign</button>
                                </td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="view-employee">View</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-employee">Edit</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </td>
                                <td class="p-4 w-2/6">0000-0003</td>
                                <td class="p-4 w-2/6">Doña Victorina</td>
                                <td class="p-4 w-2/6">Waltermart Makati</td>
                                <td class="p-4 w-2/6">Waltermart Department Store</td>
                                <td class="p-4 w-2/6">Pending Resignation</td>
                                <td class="p-4 w-2/6 ">13 days left</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="view-employee">View</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-employee">Edit</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </td>
                                <td class="p-4 w-2/6">0000-0004</td>
                                <td class="p-4 w-2/6">Don Anastacio</td>
                                <td class="p-4 w-2/6">Robinsons Las Pinas</td>
                                <td class="p-4 w-2/6">Robinsons Department Store</td>
                                <td class="p-4 w-2/6">Pending Resignation</td>
                                <td class="p-4 w-2/6 ">25 days left</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="view-employee">View</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-employee">Edit</button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                    <div class="grid justify-center items-center mb-5">
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
            <!--end employee list-->

            <div id="employeeSalary" class="grid bgcolor overflow-hidden rounded-lg" style="display: none">
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
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="view-employee-salary">View</button></td>
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
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="view-employee-salary">View</button></td>
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

            <div class="grid mb-5" id="attendanceSummary" style="display: none">
                <div class="grid bgcolor overflow-hidden rounded-lg">
                    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                        <div class="row-start-1 row-span-1 flex">
                            <h1 class="text-white text-4xl font-bold px">Employees Attendance Summary</h1>
                        </div>
                        <div class="row-start-2 row-span-1 flex items-center">
                            <div class="xl:w-96 xl:h-46">
                                <input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="searchBox"
                                    placeholder="Search" />
                            </div>
                            <span class="text-white ml-2"> Sort By:</span>
                            <div date-rangepicker class="flex items-center pl-5">
                                <div class="relative">

                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                        <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>

                                    <input name="start" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-white">to</span>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="end" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date end">
                                </div>
                            </div>
                        </div>
                        <div class="row-start-2 row-span-2">
                            <div class="flex  float-right">
                                <button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    data-modal-toggle="upload-file-attendance">Upload File</button>
                                <!-- <a href="#individualovertimeHistory"><button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    onClick="showindividualOT()">OT History</button></a> -->
                                <button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    onClick="printDataAttendanceSummary()">Print</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <table id="attendanceSummaryTable" class="text-center w-full bg-white hover:table-fixed ">
                            <thead class="bg-gray-100 flex text-gray w-full">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <th class="p-4 w-2/6" data-sort="Name">Name</th>
                                    <th class="p-4 w-2/6" data-sort="Date">Date</th>
                                    <th class="p-4 w-2/6" data-sort="TimeIn">Time In</th>
                                    <th class="p-4 w-2/6" data-sort="TimeOut">Time Out</th>
                                    <th class="p-4 w-2/6" data-sort="Late">Late</th>
                                    <th class="p-4 w-2/6" data-sort="Undertime">Undertime</th>
                                    <th class="p-4 w-2/6" data-sort="Overtime">Overtime</th>
                                    <th class="p-4 w-2/6" data-sort="HoursRendered">Hours Rendered</th>
                                    <th class="p-4 w-2/6" data-sort="Record">Record</th>
                                </tr>
                            </thead>
                            <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                            <tbody class="bg-grey-light flex flex-col w-full" style="height: 73vh">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td colspan="9" class="py-4 w-2/6"><i>Loading...</i></td>
                                </tr>
                                <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Crisostomo Ibarra</td>
                                <td class="py-4 w-2/6">September 19, 2021</td>
                                <td class="py-4 w-2/6">08 : 34 am</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="p-4 w-2/6"><a href="#individualattendanceSummary"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualAttendance()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Maria Clara</td>
                                <td class="py-4 w-2/6">September 19, 2021</td>
                                <td class="py-4 w-2/6">09 : 00 am</td>
                                <td class="py-4 w-2/6">02 : 07 am</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">08 hrs 10 mins</td>
                                <td class="p-4 w-2/6"><a href="#individualattendanceSummary"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualAttendance()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Doña Victorina</td>
                                <td class="py-4 w-2/6">September 19, 2021</td>
                                <td class="py-4 w-2/6">09 : 00 am</td>
                                <td class="py-4 w-2/6">02 : 07 am</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">08 hrs 10 mins</td>
                                <td class="p-4 w-2/6"><a href="#individualattendanceSummary"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualAttendance()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Don Anastacio</td>
                                <td class="py-4 w-2/6">September 19, 2021</td>
                                <td class="py-4 w-2/6">08 : 28 am</td>
                                <td class="py-4 w-2/6">02 : 07 am</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">08 hrs 10 mins</td>
                                <td class="p-4 w-2/6"><a href="#individualattendanceSummary"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualAttendance()">View</button></a></td>
                            </tr> -->
                        </table>
                        <div class="grid justify-center items-center mb-3 bg-white">
                            <nav aria-label="Page navigation example w-full">

                                <ul class="inline-flex -space-x-px">
                                    <li>
                                        <a href="#" id="prevButtonAttendanceSummary"
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
                                        <a href="#" id="nextButtonAttendanceSummary"
                                            class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                    </li>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--end attendance summary-->

            <div class="grid xl:pt-12 mb-5" id="individualattendanceSummary" style="display: none">
                <div class="grid bgprofile overflow-hidden rounded-lg py-10 px-10 mb-10">
                    <div class="grid bg-transparent grid-rows-2 grid-flow-col sm:w-full">
                        <div class="row-start-1 row-span-1 flex">
                            <h1 class="text-black text-4xl font-bold px">EMPLOYEE'S PROFILE</h1>
                        </div>
                    </div>
                    <div class="grid grid-rows-4 grid-cols-6 gap-4">
                        <div class="row-start-1 row-span-2 col-span-2 justify-center flex items-center">
                            <img src="img\profilepic.png" class="w-2/6 rounded-full bordercolor bordercolor border-4 "
                                alt="Sample image" />
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Employee
                                No.</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Company ID" required="" value="0000-0001" disabled>
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">First
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="First Name" required="" value="Crisostomo" disabled>
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Middle
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Middle Name" required="" value="Simon" disabled>
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Last
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Last Name" required="" value="Ibarra" disabled>
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
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Birthdate</label>
                            <input datepicker type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select your birthdate" value="12/14/1989" disabled>
                        </div>
                        <div class="row-start-2 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Contact
                                No.</label>
                            <input type="number" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Contact No." required="" value="09123456789" disabled>
                        </div>
                        <div class="row-start-2 col-span-2">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Email</label>
                            <input type="email" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Email" required="" value="crisostomo.ibarra@barbizonfashion.com" disabled>
                        </div>
                        <div class="row-start-3 col-span-2">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Job
                                Position</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Job Position" required="" value="New Barbizon Fashion Incorporation Sales"
                                disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Branch
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Branch Name" required="" value="RDS Bacolod" disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Chain
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Chain Name" required="" value="RDS" disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Company
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Company Name" required="" value="NBFI" disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Brand
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Brand Name" required="" value="Barbizon" disabled>
                        </div>
                        <div class="row-start-4 col-span-2">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">RAS</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="RAS Name" required="" value="Ms. Revelyn Loyola" disabled>
                        </div>
                        <div class="row-start-4 col-span-2">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">HR</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="HR Name" required="" value="Helena Loyola" disabled>
                        </div>
                        <div class="relative row-start-4 col-span-1">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <label for="number"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Date
                                Started</label>
                            <input datepicker type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select your birthdate" value="10/21/2006" disabled>
                        </div>
                        <div class="row-start-4 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Status</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="HR Name" required="" value="Active" disabled>
                        </div>
                    </div>
                </div>

                <div class="grid bgcolor overflow-hidden rounded-lg">
                    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                        <div class="row-start-1 row-span-1 flex">
                            <h1 class="text-white text-4xl font-bold px">Employee's Attendance</h1>
                        </div>
                        <div class="row-start-2 row-span-1 flex">
                            <span class="text-white ml-2 mt-2"> Sort By:</span>
                            <div date-rangepicker class="flex items-center pl-5">
                                <div class="relative">

                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                        <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>

                                    <input name="start" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-white">to</span>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="end" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date end">
                                </div>
                            </div>
                            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                                class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none ml-5 text-center inline-flex items-center"
                                type="button">Duration<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefault">
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Weekly</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monthly</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Annually</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row-start-2 row-span-2">
                            <div class="flex  float-right">
                                <button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    data-modal-toggle="upload-file">Upload</button>
                                <button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    onClick="printDataEmployeeAttendance()">Print</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <table class="text-center w-full bg-white rounded-lg hover:table-fixed "
                            id="employeeAttendance">
                            <thead class="bg-gray-100 flex text-gray w-full pr-5">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <th class="p-4 w-2/6">Date</th>
                                    <th class="p-4 w-2/6">Time In</th>
                                    <th class="p-4 w-2/6">Time Out</th>
                                    <th class="p-4 w-2/6">Late</th>
                                    <th class="p-4 w-2/6">Undertime</th>
                                    <th class="p-4 w-2/6">Overtime</th>
                                    <th class="p-4 w-2/6">Hours Rendered</th>
                                </tr>
                            </thead>
                            <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                            <tbody class="bg-grey-light flex flex-col w-full" style="height: 68vh;">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 16, 2021</td>
                                    <td class="py-4 w-2/6">09 : 25 am</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 15, 2021</td>
                                    <td class="py-4 w-2/6">09 : 25 am</td>
                                    <td class="py-4 w-2/6">06 : 34 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 09 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 14, 2021</td>
                                    <td class="py-4 w-2/6">09 : 28 am</td>
                                    <td class="py-4 w-2/6">06 : 38 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 10 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 13, 2021</td>
                                    <td class="py-4 w-2/6">12 : 15 am</td>
                                    <td class="py-4 w-2/6">09 : 15 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 00 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 11, 2021</td>
                                    <td class="py-4 w-2/6">09 : 26 am</td>
                                    <td class="py-4 w-2/6">06 : 34 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 08 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 10, 2021</td>
                                    <td class="py-4 w-2/6">09 : 26 am</td>
                                    <td class="py-4 w-2/6">06 : 34 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 08 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 09, 2021</td>
                                    <td class="py-4 w-2/6">09 : 19 am</td>
                                    <td class="py-4 w-2/6">06 : 34 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 15 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 07, 2021</td>
                                    <td class="py-4 w-2/6">09 : 24 am</td>
                                    <td class="py-4 w-2/6">06 : 38 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 14 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 06, 2021</td>
                                    <td class="py-4 w-2/6">11 : 49 am</td>
                                    <td class="py-4 w-2/6">09 : 02 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 13 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 04, 2021</td>
                                    <td class="py-4 w-2/6">09 : 27 am</td>
                                    <td class="py-4 w-2/6">06 : 39 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 12 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 03, 2021</td>
                                    <td class="py-4 w-2/6">09 : 27 am</td>
                                    <td class="py-4 w-2/6">06 : 39 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 12 mins</td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 02, 2021</td>
                                    <td class="py-4 w-2/6">09 : 51 am</td>
                                    <td class="py-4 w-2/6">07 : 39 pm</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">09 hrs 12 mins</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-gray-100 flex text-gray w-full">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <th class="p-4 w-2/6">TOTAL</th>
                                    <th class="p-4 w-2/6">--</th>
                                    <th class="p-4 w-2/6">--</th>
                                    <th class="p-4 w-2/6">--</th>
                                    <th class="p-4 w-2/6">--</th>
                                    <th class="p-4 w-2/6">--</th>
                                    <th class="p-4 w-2/6">110 hrs 08 hrs</th>
                                </tr>
                            </tfoot>
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
            </div>
            <!--end Employee's Attendance-->

            <div class="grid bgcolor overflow-hidden rounded-lg" id="OTSummary" style="display:none">

                <div class="grid bg-transparent  grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-white text-4xl font-bold px">Employees Overtime Application</h1>

                    </div>
                    <div class="row-start-2 row-span-1 flex items-center">
                        <div class="xl:w-96 xl:h-46">
                            <input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch"
                                placeholder="Search" />
                        </div>
                        <span class="text-white ml-2"> Sort By:</span>
                        <div date-rangepicker class="flex items-center pl-5">
                            <div class="relative">

                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                    <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-white">to</span>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date end">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row-start-2 row-span-2">
                    <div class="flex  float-right">
                        <button
                            class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                            data-modal-toggle="authentication-modal">File Overtime</button>
                    </div>
                </div> -->
                </div>
                <div>
                    <table class="text-center w-full bg-white text-center hover:table-fixed ">
                        <thead class="bg-gray-100 flex text-gray w-full">
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <th class="py-4 w-2/6">Name</th>
                                <th class="py-4 w-2/6">Date Applied</th>
                                <th class="py-4 w-2/6">Target Overtime Date</th>
                                <th class="py-4 w-2/6">Overtime In</th>
                                <th class="py-4 w-2/6">Overtime Out</th>
                                <th class="py-4 w-2/6">Total OT Hours</th>
                                <th class="py-4 w-2/6">Approved By</th>
                                <th class="py-4 w-2/6">Approval Date</th>
                                <th class="py-4 w-2/6">Status</th>
                                <th class="py-4 w-2/6">Overtime History</th>
                            </tr>
                        </thead>
                        <tbody class="bg-grey-light flex flex-col w-full" style="height: 70vh;">
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Crisostomo Ibarra</td>
                                <td class="py-4 w-2/6">September 21, 2021</td>
                                <td class="py-4 w-2/6">September 19, 2021</td>
                                <td class="py-4 w-2/6">09 : 05 am</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6 font-bold text-orange-500">Pending</td>
                                <td class="py-4 w-2/6"><a href="#individualovertimeHistory"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualOT()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Maria Clara</td>
                                <td class="py-4 w-2/6">September 16, 2021</td>
                                <td class="py-4 w-2/6">September 18, 2021</td>
                                <td class="py-4 w-2/6">06 : 05 pm</td>
                                <td class="py-4 w-2/6">08 : 05 pm</td>
                                <td class="py-4 w-2/6">02 hrs 00 mins</td>
                                <td class="py-4 w-2/6">Padre Damaso</td>
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
                                <td class="py-4 w-2/6"><a href="#individualovertimeHistory"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualOT()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Crisostomo Ibarra</td>
                                <td class="py-4 w-2/6">September 14, 2021</td>
                                <td class="py-4 w-2/6">September 17, 2021</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">Capitan Tiago</td>
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
                                <td class="py-4 w-2/6"><a href="#individualovertimeHistory"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualOT()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Maria Clara</td>
                                <td class="py-4 w-2/6">September 25, 2021</td>
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6">06 : 05 pm</td>
                                <td class="py-4 w-2/6">08 : 05 pm</td>
                                <td class="py-4 w-2/6">02 hrs 00 mins</td>
                                <td class="py-4 w-2/6">Padre Damaso</td>
                                <td class="py-4 w-2/6">September 25, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
                                <td class="py-4 w-2/6"><a href="#individualovertimeHistory"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualOT()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Crisostomo Ibarra</td>
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6">September 11, 2021</td>
                                <td class="py-4 w-2/6">06 : 05 pm</td>
                                <td class="py-4 w-2/6">08 : 05 pm</td>
                                <td class="py-4 w-2/6">02 hrs 00 mins</td>
                                <td class="py-4 w-2/6">Capitan Tiago</td>
                                <td class="py-4 w-2/6">September 16, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
                                <td class="py-4 w-2/6"><a href="#individualovertimeHistory"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualOT()">View</button></a></td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">Crisostomo Ibarra</td>
                                <td class="py-4 w-2/6">September 14, 2021</td>
                                <td class="py-4 w-2/6">September 08, 2021</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">Capitan Tiago</td>
                                <td class="py-4 w-2/6">September 18, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
                                <td class="py-4 w-2/6"><a href="#individualovertimeHistory"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualOT()">View</button></a></td>
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
            <!--end overtime summary  -->

            <div class="grid xl:pt-12" id="individualovertimeHistory" style="display:none">
                <div class="grid bgprofile overflow-hidden rounded-lg py-10 px-10 mb-10">
                    <div class="grid bg-transparent grid-rows-2 grid-flow-col sm:w-full">
                        <div class="row-start-1 row-span-1 flex">
                            <h1 class="text-black text-4xl font-bold px">EMPLOYEE'S PROFILE</h1>
                        </div>
                    </div>
                    <div class="grid grid-rows-4 grid-cols-6 gap-4">
                        <div class="row-start-1 row-span-2 col-span-2 justify-center flex items-center">
                            <img src="img\profilepic.png" class="w-2/6 rounded-full bordercolor bordercolor border-4 "
                                alt="Sample image" />
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Employee
                                No.</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Company ID" required="" value="0000-0001" disabled>
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">First
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="First Name" required="" value="Crisostomo" disabled>
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Middle
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Middle Name" required="" value="Simon" disabled>
                        </div>
                        <div class="row-start-1 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Last
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Last Name" required="" value="Ibarra" disabled>
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
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Birthdate</label>
                            <input datepicker type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select your birthdate" value="12/14/1989" disabled>
                        </div>
                        <div class="row-start-2 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Contact
                                No.</label>
                            <input type="number" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Contact No." required="" value="09123456789" disabled>
                        </div>
                        <div class="row-start-2 col-span-2">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Email</label>
                            <input type="email" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Email" required="" value="crisostomo.ibarra@barbizonfashion.com" disabled>
                        </div>
                        <div class="row-start-3 col-span-2">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Job
                                Position</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Job Position" required="" value="New Barbizon Fashion Incorporation Sales"
                                disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Branch
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Branch Name" required="" value="RDS Bacolod" disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Chain
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Chain Name" required="" value="RDS" disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Company
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Company Name" required="" value="NBFI" disabled>
                        </div>
                        <div class="row-start-3 col-span-1">
                            <label for="text" class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Brand
                                Name</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Brand Name" required="" value="Barbizon" disabled>
                        </div>
                        <div class="row-start-4 col-span-2">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">RAS</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="RAS Name" required="" value="Ms. Revelyn Loyola" disabled>
                        </div>
                        <div class="row-start-4 col-span-2">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">HR</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="HR Name" required="" value="Helena Loyola" disabled>
                        </div>
                        <div class="relative row-start-4 col-span-1">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <label for="number"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Date
                                Started</label>
                            <input datepicker type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select your birthdate" value="10/21/2006" disabled>
                        </div>
                        <div class="row-start-4 col-span-1">
                            <label for="text"
                                class="text-sm font-medium text-black block mb-2 dark:text-gray-300">Status</label>
                            <input type="text" name="mName" id="mName"
                                class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="HR Name" required="" value="Active" disabled>
                        </div>
                    </div>
                </div>
                <!--end profile  -->
                <div
                    class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full grid bgcolor overflow-hidden rounded-t-lg">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-white text-4xl font-bold px">Employee's Overtime Application</h1>

                    </div>
                    <div class="row-start-2 row-span-1 flex items-center">
                        <div class="xl:w-96 xl:h-46">
                            <input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch"
                                placeholder="Search" />
                        </div>
                        <span class="text-white ml-2"> Sort By:</span>
                        <div date-rangepicker class="flex items-center pl-5">
                            <div class="relative">

                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                    <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-white">to</span>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 font-themecolor dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date end">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed ">
                        <thead class="bg-gray-100 flex text-gray w-full pr-5">
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <th class="p-4 w-2/6" data-sort="DateApplied">Date Applied</th>
                                <th class="p-4 w-2/6" data-sort="TargetOvertimeDate">Target Overtime Date</th>
                                <th class="p-4 w-2/6" data-sort="Overtime">Overtime In</th>
                                <th class="p-4 w-2/6" data-sort="OvertimeOut">Overtime Out</th>
                                <th class="p-4 w-2/6" data-sort="TotalOtHours">Total OT Hours</th>
                                <th class="p-4 w-2/6" data-sort="ApprovedBy">Approved By</th>
                                <th class="p-4 w-2/6" data-sort="ApprovalDate">Approval Date</th>
                                <th class="p-4 w-2/6" data-sort="Status">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-grey-light flex flex-col w-full" style="height: 65vh;">
                            <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                             <td colspan="8" class="py-4 w-2/6"><i>Loading...</i></td>
                        </tr> -->
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">September 21, 2021</td>
                                <td class="py-4 w-2/6">September 19, 2021</td>
                                <td class="py-4 w-2/6">09 : 05 am</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6 font-bold text-orange-500">Pending</td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">September 16, 2021</td>
                                <td class="py-4 w-2/6">September 18, 2021</td>
                                <td class="py-4 w-2/6">06 : 05 pm</td>
                                <td class="py-4 w-2/6">08 : 05 pm</td>
                                <td class="py-4 w-2/6">02 hrs 00 mins</td>
                                <td class="py-4 w-2/6">Maria D. Clara</td>
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">September 14, 2021</td>
                                <td class="py-4 w-2/6">September 17, 2021</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">Maria D. Clara</td>
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">September 25, 2021</td>
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6">06 : 05 pm</td>
                                <td class="py-4 w-2/6">08 : 05 pm</td>
                                <td class="py-4 w-2/6">02 hrs 00 mins</td>
                                <td class="py-4 w-2/6">Padre Damaso</td>
                                <td class="py-4 w-2/6">September 25, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">September 15, 2021</td>
                                <td class="py-4 w-2/6">September 11, 2021</td>
                                <td class="py-4 w-2/6">06 : 05 pm</td>
                                <td class="py-4 w-2/6">08 : 05 pm</td>
                                <td class="py-4 w-2/6">02 hrs 00 mins</td>
                                <td class="py-4 w-2/6">Maria D. Clara</td>
                                <td class="py-4 w-2/6">September 16, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="py-4 w-2/6">September 14, 2021</td>
                                <td class="py-4 w-2/6">September 08, 2021</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">--</td>
                                <td class="py-4 w-2/6">Maria D. Clara</td>
                                <td class="py-4 w-2/6">September 18, 2021</td>
                                <td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-gray-100 flex text-gray w-full pr-4">
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <th class="p-4 w-2/6">TOTAL</th>
                                <th class="p-4 w-2/6">--</th>
                                <th class="p-4 w-2/6">--</th>
                                <th class="p-4 w-2/6">--</th>
                                <th class="p-4 w-2/6">6 hrs 00 hrs</th>
                                <th class="p-4 w-2/6">--</th>
                                <th class="p-4 w-2/6">--</th>
                                <th class="p-4 w-2/6">--</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="grid justify-center items-center mb-5 bgcolor">
                        <nav aria-label="Page navigation example w-full">
                            <ul class="inline-flex -space-x-px">
                                <li>
                                    <a href="#" id="prevButtonOvertimeHistory"
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
                                    <a href="#" id="nextButtonOvertimeHistory"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end individual overtime history-->

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
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Employee's
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
                            placeholder="First Name" required="" value="Sisa" disabled>
                    </div>
                    <div class="row-start-1 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Middle
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Middle Name" required="" value="Indio  " disabled>
                    </div>
                    <div class="row-start-1 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Last
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Last Name" required="" value="Narcisa" disabled>
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
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Email</label>
                        <input type="email" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Email" required="" value="sisa.narcisa@barbizonfashion.com" disabled>
                    </div>
                    <div class="row-start-3 col-span-3">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Job
                            Position</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Job Position" required="" value="Human Resource" disabled>
                    </div>
                    <div class="row-start-3 col-span-3">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Company
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Company Name" required="" value="Barbizon Everyday Group of Companies"
                            disabled>
                    </div>
                    <div class="row-start-4 col-span-2">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Branch
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Branch Name" required="" value="Robinson Department Store Bacolod" disabled>
                    </div>
                    <div class="row-start-4 col-span-2">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Chain
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Chain Name" required="" value="Robinson Department Store" disabled>
                    </div>
                    <div class="row-start-4 col-span-2">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Brand
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Brand Name" required="" value="Barbizon" disabled>
                    </div>
                    <div class="row-start-5 col-span-2">
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">RAS</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="RAS Name" required="" value="Ms. Revelyn Loyola" disabled>
                    </div>
                    <div class="row-start-5 col-span-2">
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">HR</label>
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

        <!-- file ot modal -->
        <div id="file-ot" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="file-ot">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Filing OT</h3>

                        <div>
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name</label>
                            <input type="text" name="name" id="name"
                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="FirstName MiddleInitial LastName" required="" disabled>
                        </div>
                        <div>
                            <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">OT
                                Date</label>
                            <input type="date" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Birthdate" required="">
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-full">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label inline-block mb-2 text-gray-700">Reason</label>
                                    <textarea
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlTextarea1" rows="8" placeholder="Your messge"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end file ot modal-->

        <!-- view ot modal -->
        <div id="view-ot" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-2/3 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="view-ot">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">OVERTIME REQUEST</h3>

                        <div>
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Applicant
                                Name: Maria M. Clara</label>
                            <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                        </div>
                        <div>
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date
                                Applied: September 21, 2022</label>
                            <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                        </div>
                        <div>
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Overtime Date:
                                September 22, 2022</label>
                            <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-full">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label inline-block mb-2 text-gray-700">Reason</label>
                                    <textarea
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlTextarea1" rows="8" placeholder="Your messge"
                                        disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. 
                            Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                    </form>
                </div>
            </div>
        </div>
        <!--end view ot modal-->

        <!-- denied ot modal -->
        <div id="denied-ot" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-pantone">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="denied-ot">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h3 class="text-xl font-medium text-center font-pantone dark:text-white font-extrabold">
                            OVERTIME REQUEST DENIED!</h3>

                        <div>
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Applicant
                                Name: Crisostomo Ibarra</label>
                            <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                        </div>
                        <div>
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date
                                Applied:
                                September 14, 2021</label>
                            <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                        </div>
                        <div>
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Target
                                Date:
                                September 17, 2021</label>
                            <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-full">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label inline-block mb-2 text-gray-700 font-bold">Reason</label>
                                    <textarea
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid border-pantone rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlTextarea1" rows="8" placeholder="Your messge"
                                        disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. 
                            Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                    </form>
                </div>
            </div>
        </div>
        <!--end denied ot modal-->

        <!-- print modal -->
        <div id="print" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bgcolor rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="print">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                        <div class="row-start-1 row-span-1 flex">
                            <h1 class="text-white text-4xl font-bold px">Attendance Summary</h1>
                        </div>
                        <div class="row-start-2 row-span-1 flex">
                            <span class="text-white"> Sort By: <input type="date"
                                    class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input>
                                to
                                <input type="date"
                                    class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input>
                            </span>
                        </div>

                        <div class="row-start-2 row-span-2">
                            <div class="flex  float-right">
                                <button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    data-modal-toggle="print">Print</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <table class="text-center w-full bg-white rounded-lg hover:table-fixed ">
                            <thead class="bg-gray-100 flex text-gray w-full pr-5">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <th class="p-4 w-2/6">Date</th>
                                    <th class="p-4 w-2/6">Time In</th>
                                    <th class="p-4 w-2/6">Time Out</th>
                                    <th class="p-4 w-2/6">Late</th>
                                    <th class="p-4 w-2/6">Undertime</th>
                                    <th class="p-4 w-2/6">Overtime</th>
                                    <th class="p-4 w-2/6">Hours Rendered</th>
                                    <th class="p-4 w-2/6"></th>
                                </tr>
                            </thead>
                            <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                            <tbody class="bg-grey-light flex flex-col w-full" style="height: 63vh;">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6">--</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <td class="py-4 w-2/6">September 19, 2021</td>
                                    <td class="py-4 w-2/6">07 : 34 am</td>
                                    <td class="py-4 w-2/6">8 : 05 pm</td>
                                    <td class="py-4 w-2/6">1</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">0</td>
                                    <td class="py-4 w-2/6">9 hrs 5 mins</td>
                                    <td class="py-4 w-2/6"><button
                                            class="bg-transparent hover:bg-white xl:ml-10 font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none">+</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-gray-100 flex text-gray w-full pr-5">
                                <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                    <th class="p-4 px-1 w-2/6">Date</th>
                                    <th class="p-4 px-1 w-2/6">--</th>
                                    <th class="p-4 px-1 w-2/6">--</th>
                                    <th class="p-4 px-1 w-2/6">1</th>
                                    <th class="p-4 px-1 w-2/6">0</th>
                                    <th class="p-4 px-1 w-2/6">1 hrs 5 mins</th>
                                    <th class="p-4 px-1 w-2/6">81 hrs 45 mins</th>
                                    <th class="p-4 px-1 w-2/6"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end print modal-->

        <div id="view-employee-salary" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="view-employee-salary">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
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
        <!--end view employee salary-->

        <!-- Main modal -->
        <div id="view-employee" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="view-employee">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <div id="personalInfoView" style="display: block">
                            <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Personal Info
                            </h3>
                            <div class="grid grid-cols-4 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company
                                        ID</label>
                                    <input type="text" name="companyID" id="companyID"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Company ID" required="" value="0000-0001" disabled>
                                </div>
                                <div class="col-start-2 col-span-1">
                                    <label for="text"
                                        class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">First
                                        Name</label>
                                    <input @input="capitalizeFName" type="text" name="fName" id="fName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="First Name" required="" value="Crisostomo" disabled>
                                </div>
                                <div class="col-start-3 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Middle
                                        Name</label>
                                    <input type="text" name="mName" id="mName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Middle Name" required="" value="Simon" disabled>
                                </div>
                                <div class="col-start-4 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Last
                                        Name</label>
                                    <input type="text" name="lName" id="lName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Last Name" required="" value="Ibarra" disabled>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="relative col-start-1 col-span-1">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Birthdate</label>
                                    <input datepicker type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select your birthdate" value="9/19/1999" disabled>
                                </div>

                                <div class="col-start-2 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Contact
                                        No.</label>
                                    <input type="text" name="cNumber" maxlength="11" id="cNumber"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Contact Number" required="" value="09405554125" disabled>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="jobPosition"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Job
                                        Position</label>
                                    <input type="text" name="jobPosition" id="jobPosition"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Job Position" required="" value="NBFI Sales" disabled>
                                </div>
                                <div class="col-start-2">
                                    <label for="email"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
                                    <input type="email" name="email" id="email" onkeyup="ValidateEmail()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Email (Eg. name@email.com)" required=""
                                        value="crisostomo.ibarra@barbizonfashion.com" disabled>
                                    <span id="lblError" style="color: red"></span>
                                </div>
                            </div>
                            <button type="button" onClick="nextPageView()"
                                class="w-full mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Next</button>
                        </div>
                        <div id="companyInfoView" style="display: none">
                            <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Personal Info
                            </h3>
                            <div class="grid grid-cols-4 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company</label>
                                    <input type="text" name="companyID" id="companyID"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Company" required="" value="Cotton Mountain Corporation" disabled>
                                </div>
                                <div class="col-start-2 col-span-1">
                                    <label for="text"
                                        class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Brand</label>
                                    <input @input="capitalizeFName" type="text" name="fName" id="fName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Brand" required="" value="At Home" disabled>
                                </div>
                                <div class="col-start-3 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                    <input type="text" name="mName" id="mName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Chain" required="" value="ALL HOME" disabled>
                                </div>
                                <div class="col-start-4 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Store
                                        Assignment</label>
                                    <input type="text" name="lName" id="lName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Store Assignment" required="" value="ALL HOME ILOILO" disabled>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="date"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">RAS</label>
                                    <input type="text" name="birthdate" id="birthdate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="RAS" required="" value="MS. RAQUEL REYES" disabled>
                                </div>

                                <div class="col-start-2 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HR</label>
                                    <input type="text" name="cNumber" maxlength="11" id="cNumber"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="HR" required="" value="MS. EMMA GACCION" disabled>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="relative col-start-1 col-span-1">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date-Started</label>
                                    <input datepicker type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date" value="9/19/2022" disabled>
                                </div>
                                <div class="col-start-2 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Status</label>
                                    <input type="text" name="cNumber" maxlength="11" id="cNumber"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="HR" required="" value="Active">
                                </div>
                                <button type="button" onClick="backView()"
                                    class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Back</button>
                                <button type="button"
                                    class="col-start-2 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none"
                                    data-modal-toggle="view-employee">Close</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end view employee profile-->

        <!-- Main modal -->
        <div id="edit-employee" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="edit-employee">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <div id="personalInfoEdit" style="display: block">
                            <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Personal Info
                            </h3>
                            <div class="grid grid-cols-4 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company
                                        ID</label>
                                    <input type="text" name="companyID" id="companyID"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Company ID" required="" value="0000-0001">
                                </div>
                                <div class="col-start-2 col-span-1">
                                    <label for="text"
                                        class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">First
                                        Name</label>
                                    <input @input="capitalizeFName" type="text" name="fName" id="fName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="First Name" required="" value="Crisostomo">
                                </div>
                                <div class="col-start-3 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Middle
                                        Name</label>
                                    <input type="text" name="mName" id="mName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Middle Name" required="" value="Simon">
                                </div>
                                <div class="col-start-4 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Last
                                        Name</label>
                                    <input type="text" name="lName" id="lName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Last Name" required="" value="Ibarra">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="relative col-start-1 col-span-1">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Birthdate</label>
                                    <input datepicker type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select your birthdate" value="9/19/1999">
                                </div>

                                <div class="col-start-2 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Contact
                                        No.</label>
                                    <input type="text" name="cNumber" maxlength="11" id="cNumber"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Contact Number" required="" value="09405554125">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="jobPosition"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Job
                                        Position</label>
                                    <input type="text" name="jobPosition" id="jobPosition"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Job Position" required="" value="NBFI Sales">
                                </div>
                                <div class="col-start-2">
                                    <label for="email"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
                                    <input type="email" name="email" id="email" onkeyup="ValidateEmail()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Email (Eg. name@email.com)" required=""
                                        value="crisostomo.ibarra@barbizonfashion.com">
                                    <span id="lblError" style="color: red"></span>
                                </div>
                            </div>
                            <button type="button" onClick="nextPageEdit()"
                                class="w-full mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Next</button>
                        </div>
                        <div id="companyInfoEdit" style="display: none">
                            <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Personal Info
                            </h3>
                            <div class="grid grid-cols-4 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Company</label>
                                    <input type="text" name="companyID" id="companyID"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Company" required="" value="Cotton Mountain Corporation">
                                </div>
                                <div class="col-start-2 col-span-1">
                                    <label for="text"
                                        class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Brand</label>
                                    <input @input="capitalizeFName" type="text" name="fName" id="fName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Brand" required="" value="At Home">
                                </div>
                                <div class="col-start-3 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                    <input type="text" name="mName" id="mName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Chain" required="" value="ALL HOME">
                                </div>
                                <div class="col-start-4 col-span-1">
                                    <label for="text"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Store
                                        Assignment</label>
                                    <input type="text" name="lName" id="lName"
                                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Store Assignment" required="" value="ALL HOME ILOILO">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="col-start-1 col-span-1">
                                    <label for="date"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">RAS</label>
                                    <input type="text" name="birthdate" id="birthdate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="RAS" required="" value="MS. RAQUEL REYES">
                                </div>

                                <div class="col-start-2 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">HR</label>
                                    <input type="text" name="cNumber" maxlength="11" id="cNumber"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="HR" required="" value="MS. EMMA GACCION">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="relative col-start-1 col-span-1">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date-Started</label>
                                    <input datepicker type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date" value="9/19/2022">
                                </div>
                                <div class="col-start-2 col-span-1">
                                    <label for="number"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Status</label>
                                    <input type="text" name="cNumber" maxlength="11" id="cNumber"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="HR" required="" value="Active">
                                </div>
                                <button type="button" onClick="backEdit()"
                                    class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Back</button>
                                <button type="submit"
                                    class="col-start-2 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none">Edit
                                    Account</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end edit employee profile-->

        <div id="resign-modal" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full  justify-center items-center">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex justify-center p-2">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="resign-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                Are you really sure?
                            </h3>
                            <button data-modal-toggle="resign-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, I am sure
                            </button>
                            <button data-modal-toggle="resign-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- file upload attendance modal -->
        <div id="upload-file-attendance" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="upload-file-attendance">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h1 class="text-2xl font-medium text-gray-900 dark:text-white font-extrabold text-center">
                            ATTENDANCE
                            RECORDS</h1>
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Upload File:</h3>

                        <div class="flex justify-center items-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">(XLS, XLSX, PDF)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden">
                            </label>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end file upload modal-->

        <!-- file upload attendance modal -->
        <div id="upload-file-attendance-individual" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="upload-file-attendance-individual">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h1 class="text-2xl font-medium text-gray-900 dark:text-white font-extrabold text-center">
                            ATTENDANCE
                            RECORDS</h1>
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Upload File:</h3>

                        <div class="flex justify-center items-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">(XLS, XLSX, PDF)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden">
                            </label>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end file upload modal-->

        <!-- file upload modal -->
        <div id="upload-file" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="upload-file">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h1 class="text-2xl font-medium text-gray-900 dark:text-white font-extrabold text-center">LIST
                            OF
                            NEW EMPLOYEES</h1>
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Upload File:</h3>

                        <div class="flex justify-center items-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">(XLS, XLSX)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden">
                            </label>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end file upload modal-->

        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
            class="inline-block p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase roun	-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5"
            id="btn-back-to-top">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
                </path>
            </svg>
        </button>

        <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type='text/javascript'>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function() {

            // Search by userid
            $('#but_search').click(function() {
                var userid = Number($('#search').val().trim());

                if (userid > 0) {

                    // AJAX POST request
                    $.ajax({
                        url: 'getUserbyid',
                        type: 'post',
                        data: {
                            _token: CSRF_TOKEN,
                            userid: userid
                        },
                        dataType: 'json',
                        success: function(response) {

                            createRows(response);

                        }
                    });
                }

            });

        });

        // Create table rows
        function createRows(response) {
            console.log("create rows");
            var len = 0;
            $('#employeeMasterListTable tbody').empty(); // Empty <tbody>
            if (response['data'] != null) {
                len = response['data'].length;
            }

            if (len > 0) {
                for (var i = 0; i < len; i++) {
                    var userID = response['data'][i].userID;
                    var firstName = response['data'][i].firstName;
                    var lastName = response['data'][i].lastName;
                    var branch = response['data'][i].brand;
                    var chain = response['data'][i].chain;
                    var status = response['data'][i].status;

                    var tr_str = "<tr class='flex w-full even:bg-gray-100 odd:bg-white-100'>" +
                    '<td class="p-4 w-1/6"><input type="checkbox" name="employee" onClick="showPrint()"class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"></td>'+
                        "<td class='p-4 w-2/6'>" + userID + "</td>" +
                        "<td class='p-4 w-2/6'>" + firstName + " " + lastName + "</td>" +
                        "<td class='p-4 w-2/6'>" + branch + "</td>" +
                        "<td class='p-4 w-2/6'>" + chain + "</td>" +
                        "<td class='p-4 w-2/6'>" + status + "</td>" +
                        '<td class="p-4 w-2/6 "><button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="resign-modal">Resign</button></td>'+
                        '<td class="p-4 w-2/6"><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="view-employee">View</button><button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-employee">Edit</button> </td>'+
                        "</tr>";

                    $("#employeeMasterListTable tbody").append(tr_str);
                }
            } else {
                var tr_str = "<tr>" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                    "</tr>";

                $("#employeeMasterListTable tbody").append(tr_str);
            }
        }
        </script>

    </body>

</html>

<script>
document.getElementById("fName").addEventListener("keypress", isLetter)
document.getElementById("mName").addEventListener("keypress", isLetter)
document.getElementById("lName").addEventListener("keypress", isLetter)
document.getElementById("jobPosition").addEventListener("keypress", isLetter)

function isLetter(e) {
    console.log(e)
    let char = String.fromCharCode(e.keyCode); // Get the character
    if (/^[A-Za-z ]+$/.test(char)) return true;
    // Match with regex
    else e.preventDefault(); // If not match, don't add to input text
};
document.getElementById("companyID").addEventListener("keypress", isNumber)
document.getElementById("cNumber").addEventListener("keypress", isNumber)

function isNumber(e) {
    let char = String.fromCharCode(e.keyCode); // Get the character
    if (/^[0-9]+$/.test(char)) return true;
    // Match with regex
    else e.preventDefault(); // If not match, don't add to input text
};

function ValidateEmail() {
    var email = document.getElementById("email").value;
    var lblError = document.getElementById("lblError");
    lblError.innerHTML = "";
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (!expr.test(email)) {
        lblError.innerHTML = "Invalid email address.";
    }
}

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

    // var x = document.getElementById("attendanceSummary");
    // if (x.style.display === "block") {
    // 	x.style.display = "none";
    // 	} 

    // var x = document.getElementById("overtimeHistory");
    // 	if (x.style.display === "block") {
    // 		x.style.display = "none";
    // 		}
}

function showindividualAttendance() {
    var x = document.getElementById("individualattendanceSummary");
    if (x.style.display === "none") {
        x.style.display = "block";
    }

}

function hideindividualAttendance() {
    var x = document.getElementById("individualattendanceSummary");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
    hideindividualOT();
}

function showattendanceSummary() {
    var x = document.getElementById("attendanceSummary");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideProfile();
    hideEmployeeList();
    hideEmployeeSalary();
    hideOTSummary();
}

function hideattendanceSummary() {
    var x = document.getElementById("attendanceSummary");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function showindividualOT() {
    var x = document.getElementById("individualovertimeHistory");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
}

function hideindividualOT() {
    var x = document.getElementById("individualovertimeHistory");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function showOTSummary() {
    var x = document.getElementById("OTSummary");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideProfile();
    hideEmployeeList();
    hideEmployeeSalary();
    hideattendanceSummary();
}

function hideOTSummary() {
    var x = document.getElementById("OTSummary");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function showEmployeeList() {
    var x = document.getElementById("employeeMasterList");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideProfile();
    hideEmployeeSalary();
    hideattendanceSummary();
    hideOTSummary();

}

function showEmployeeSalary() {
    var x = document.getElementById("employeeSalary");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("hide employee list")
    }

    hideProfile();
    hideEmployeeList();
    hideattendanceSummary();
    hideOTSummary();
}

function hideEmployeeList() {
    var x = document.getElementById("employeeMasterList");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
    hideindividualAttendance();

}

function hideEmployeeSalary() {
    var x = document.getElementById("employeeSalary");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
    hideindividualAttendance();

}

function showProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("hide profile");
    }
    hideEmployeeList();
    hideEmployeeSalary();
    hideattendanceSummary();
    hideOTSummary();
}

function hideProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function nextPage() {
    var x = document.getElementById("personalInfo");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
    showCompany();
    console.log("Next page")
}

function nextPageEdit() {
    var x = document.getElementById("personalInfoEdit");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
    showCompanyEdit();
    console.log("Next page")
}

function nextPageView() {
    var x = document.getElementById("personalInfoView");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
    showCompanyView();
    console.log("Next page")
}

function showCompany() {
    var x = document.getElementById("companyInfo");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
}

function showCompanyEdit() {
    var x = document.getElementById("companyInfoEdit");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("Show Company Edit");
    }
}

function showCompanyView() {
    var x = document.getElementById("companyInfoView");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("Show Company View");
    }
}


function back() {
    var x = document.getElementById("personalInfo");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    console.log("back to personal info");
    hideCompany();
}

function backEdit() {
    var x = document.getElementById("personalInfoEdit");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    console.log("back to personal info");
    hideCompanyEdit();
}

function backView() {
    var x = document.getElementById("personalInfoView");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    console.log("back to personal view");
    hideCompanyView();
}

function hideCompany() {
    var x = document.getElementById("companyInfo");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideCompanyEdit() {
    var x = document.getElementById("companyInfoEdit");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideCompanyView() {
    var x = document.getElementById("companyInfoView");
    if (x.style.display === "block") {
        x.style.display = "none";
        console.log("Hide company view");
    }

}

function showPrint() {
    var x = document.getElementById("printshow");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    console.log("show Print")
}

function check(checked = true) {
    const checkboxes = document.querySelectorAll('input[name="employee"]');
    checkboxes.forEach((checkbox) => {
        checkbox.checked = checked;
    });
}

function checkAll() {
    check();
    this.onclick = uncheckAll;
    console.log("select all")
    showPrint();
}

function uncheckAll() {
    check(false);
    this.onclick = checkAll;
}

const btn = document.querySelector('#btn');
btn.onclick = checkAll;


document.addEventListener('DOMContentLoaded', init, false);

let dataAttendanceSummary, tableAttendanceSummary, sortColAttendanceSummary;
let sortAscAttendanceSummary = false;
const pageSizeAttendanceSummary = 11;
let curPageAttendanceSummary = 1;

respAttendanceSummary = [{
        "Name": "Crisostomo Ibarra",
        "Date": "September 19, 2021",
        "TimeIn": "08 : 34 am",
        "TimeOut": "--",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "--",
        "Record": "View"
    },
    {
        "Name": "Maria Clara",
        "Date": "September 19, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Doña Victorina",
        "Date": "September 19, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Don Anastacio",
        "Date": "September 19, 2021",
        "TimeIn": "08 : 28 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Crisostomo Ibarra",
        "Date": "September 18, 2021",
        "TimeIn": "08 : 34 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Maria Clara",
        "Date": "September 18, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Doña Victorina",
        "Date": "September 18, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Don Anastacio",
        "Date": "September 18, 2021",
        "TimeIn": "08 : 28 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Crisostomo Ibarra",
        "Date": "September 17, 2021",
        "TimeIn": "08 : 34 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Maria Clara",
        "Date": "September 17, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Doña Victorina",
        "Date": "September 17, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Don Anastacio",
        "Date": "September 17, 2021",
        "TimeIn": "08 : 28 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Crisostomo Ibarra",
        "Date": "September 16, 2021",
        "TimeIn": "08 : 34 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Maria Clara",
        "Date": "September 16, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Doña Victorina",
        "Date": "September 16, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Don Anastacio",
        "Date": "September 16, 2021",
        "TimeIn": "08 : 28 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Crisostomo Ibarra",
        "Date": "September 15, 2021",
        "TimeIn": "08 : 34 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Maria Clara",
        "Date": "September 15, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Doña Victorina",
        "Date": "September 15, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Don Anastacio",
        "Date": "September 15, 2021",
        "TimeIn": "08 : 28 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Crisostomo Ibarra",
        "Date": "September 14, 2021",
        "TimeIn": "08 : 34 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Maria Clara",
        "Date": "September 14, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Doña Victorina",
        "Date": "September 14, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Don Anastacio",
        "Date": "September 14, 2021",
        "TimeIn": "08 : 28 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Crisostomo Ibarra",
        "Date": "September 13, 2021",
        "TimeIn": "08 : 34 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Maria Clara",
        "Date": "September 13, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Doña Victorina",
        "Date": "September 13, 2021",
        "TimeIn": "09 : 00 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },
    {
        "Name": "Don Anastacio",
        "Date": "September 13, 2021",
        "TimeIn": "08 : 28 am",
        "TimeOut": "02 : 07 am",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "08 hrs 10 mins",
        "Record": "View"
    },


]

async function init() {
    $.ajax({
                    url: 'getUsers',
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {

                        createRows(response);

                    }
                });
    // // Select the table (well, tbody)
    // table = document.querySelector('#attendanceSummary tbody');
    // // get the cats
    // //   let resp = await fetch('https://www.raymondcamden.com/.netlify/functions/get-cats');
    // //   data = await resp.json();
    // console.log(respDTR);
    // data = respDTR;
    // renderTable();

    // // listen for sort clicks
    // document.querySelectorAll('#timeRecord thead tr th').forEach(t => {
    //     t.addEventListener('click', sort, false);
    // });

    // document.querySelector('#nextButton').addEventListener('click', nextPage, false);
    // document.querySelector('#prevButton').addEventListener('click', previousPage, false);


    // Select the table (well, tbody)
    tableAttendanceSummary = document.querySelector('#attendanceSummaryTable tbody');
    // get the cats
    //   let resp = await fetch('https://www.raymondcamden.com/.netlify/functions/get-cats');
    //   data = await resp.json();
    console.log(respAttendanceSummary);
    dataAttendanceSummary = respAttendanceSummary;
    renderTableAttendanceSummary();

    // listen for sort clicks
    document.querySelectorAll('#attendanceSummaryTable thead tr th').forEach(t => {
        t.addEventListener('click', sortAttendanceSummary, false);
    });

    document.querySelector('#nextButtonAttendanceSummary').addEventListener('click', nextPageAttendanceSummary,
        false);
    document.querySelector('#prevButtonAttendanceSummary').addEventListener('click', previousPageAttendanceSummary,
        false);

}

function renderTableAttendanceSummary() {
    // create html
    let result = '';
    dataAttendanceSummary.filter((row, index) => {
        let start = (curPageAttendanceSummary - 1) * pageSizeAttendanceSummary;
        let end = curPageAttendanceSummary * pageSizeAttendanceSummary;
        if (index >= start && index < end) return true;
    }).forEach(c => {
        result += `<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
     <td class="py-4 w-2/6">${c.Name}</td>
     <td class="py-4 w-2/6">${c.Date}</td>
     <td class="py-4 w-2/6">${c.TimeIn}</td>
     <td class="py-4 w-2/6">${c.TimeOut}</td>
     <td class="py-4 w-2/6">${c.Late}</td>
	 <td class="py-4 w-2/6">${c.Undertime}</td>
	 <td class="py-4 w-2/6">${c.Overtime}</td>
	 <td class="py-4 w-2/6">${c.HoursRendered}</td>
     <td class="p-4 w-2/6"><a href="#individualattendanceSummary"><button
                                            class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                            onClick="showindividualAttendance()">View</button></a></td>
     </tr>`;
    });
    tableAttendanceSummary.innerHTML = result;
}

function sortAttendanceSummary(e) {
    let thisSort = e.target.dataset.sortAttendanceSummary;
    if (sortColAttendanceSummary === thisSort) sortAscAttendanceSummary = !sortAscAttendanceSummary;
    sortColAttendanceSummary = thisSort;
    console.log('sort dir is ', sortAscAttendanceSummary);
    dataAttendanceSummary.sortAttendanceSummary((a, b) => {
        if (a[sortColAttendanceSummary] < b[sortColAttendanceSummary]) return sortAscAttendanceSummary ? 1 : -1;
        if (a[sortColAttendanceSummary] > b[sortColAttendanceSummary]) return sortAscAttendanceSummary ? -1 : 1;
        return 0;
    });
    renderTableAttendanceSummary();
}

function previousPageAttendanceSummary() {
    if (curPageAttendanceSummary > 1) curPageAttendanceSummary--;
    renderTableAttendanceSummary();
}

function nextPageAttendanceSummary() {
    if ((curPageAttendanceSummary * pageSizeAttendanceSummary) < dataAttendanceSummary.length)
        curPageAttendanceSummary++;
    renderTableAttendanceSummary();
}

// declare elements
const searchBox = document.getElementById('searchBox');
const tableSearchAttendanceSummary = document.getElementById("attendanceSummaryTable");
const trs = tableSearchAttendanceSummary.tBodies[0].getElementsByTagName("tr");

// add event listener to search box
searchBox.addEventListener('keyup', performSearch);

function performSearch() {

    // Declare search string 
    var filter = searchBox.value.toUpperCase();

    // Loop through first tbody's rows
    for (var rowI = 0; rowI < trs.length; rowI++) {

        // define the row's cells
        var tds = trs[rowI].getElementsByTagName("td");
        // hide the row
        trs[rowI].style.display = "none";

        // loop through row cells
        for (var cellI = 0; cellI < tds.length; cellI++) {

            // if there's a match
            if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

                // show the row
                trs[rowI].style.display = "";

                // skip to the next row
                continue;

            }
        }
    }

}

function printDataEmployeeMasterList() {
    var divToPrint = document.getElementById("employeeMasterListTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}

function printDataAttendanceSummary() {
    var divToPrint = document.getElementById("attendanceSummaryTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();

}

function printDataEmployeeAttendance() {
    var divToPrint = document.getElementById("employeeAttendance");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();

}
</script>