<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Approver</title>
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
                    <img src="img\logo.png" class="w-full" alt="Samplgit e image" />
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
                                <a href="#" onClick="showPending()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M112.91 128A191.85 191.85 0 0064 254c-1.18 106.35 85.65 193.8 192 194 106.2.2 192-85.83 192-192 0-104.54-83.55-189.61-187.5-192a4.36 4.36 0 00-4.5 4.37V152"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M233.38 278.63l-79-113a8.13 8.13 0 0111.32-11.32l113 79a32.5 32.5 0 01-37.25 53.26 33.21 33.21 0 01-8.07-7.94z" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Pending Application</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="showApproved()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <title>Checkmark Circle</title>
                                        <path
                                            d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" d="M352 176L217.6 336 160 272" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Approved Application</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" onClick="showDenied()" @click="open = !open"
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
                                    <span class="flex-1 ml-3 whitespace-nowrap">Denied Application</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="showSchedule()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <rect x="48" y="80" width="416" height="384" rx="48" fill="none"
                                            stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32"
                                            d="M128 48v32M384 48v32M464 160H48M304 260l43.42-32H352v168M191.87 306.63c9.11 0 25.79-4.28 36.72-15.47a37.9 37.9 0 0011.13-27.26c0-26.12-22.59-39.9-47.89-39.9-21.4 0-33.52 11.61-37.85 18.93M149 374.16c4.88 8.27 19.71 25.84 43.88 25.84 28.59 0 52.12-15.94 52.12-43.82 0-12.62-3.66-24-11.58-32.07-12.36-12.64-31.25-17.48-41.55-17.48" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Schedule</span>
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
            <div id="Dashboard" class="flex  overflow-hidden rounded-lg mb-5" style="display: block">
                <div class="grid grid-rows-auto grid-cols-2 gap-5 px-24">
                    <div class="start-col-1 col-span-1 shadow-lg rounded-lg overflow-hidden border-2 border-gray-900">
                        <div class="text-gray-800 text-2xl font-bold px-5 pt-2">NUMBER OF DENIED APPLICATIONS 
                        </div>
                        <select name="Date" id="Date"
                            class="ml-5 bg-transparent w-1/4 border-2 border-gray-900 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option hidden selected>2022</option>
                            <option value="January">2018</option>
                            <option value="February">2019</option>
                            <option value="March">2020</option>
                            <option value="April">2021</option>
                            <option value="May">2022</option>
                        </select>
                        <canvas class="p-5" id="chartBarLateUndertime"></canvas>
                    </div>
                    <div class="start-col-2 col-span-1 shadow-lg rounded-lg overflow-hidden border-2 border-gray-900">
                        <div class="text-gray-800 text-2xl font-bold px-5 pt-2">NUMBER OF APPROVED APPLICATIONS
                        </div>
                        <select name="Date" id="Date"
                            class="ml-5 bg-transparent w-1/4 border-2 border-gray-900 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option hidden selected>2022</option>
                            <option value="January">2018</option>
                            <option value="February">2019</option>
                            <option value="March">2020</option>
                            <option value="April">2021</option>
                            <option value="May">2022</option>
                        </select>
                        <canvas class="p-5" id="chartBarHoursRendered"></canvas>
                    </div>
                    <div
                        class="start-col-1 col-span-2  shadow-lg rounded-lg overflow-hidden border-2 border-gray-900 text-center mx-96">
                        <div class="text-gray-800 text-2xl font-bold px-5 pt-2">TOTAL NUMBER OF APPLICATIONS</div>
                        <div class="mx-20">
                            <select name="Date" id="Date"
                                class="mx-20 bg-transparent w-2/4 border-2 border-gray-900 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option hidden selected>October</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <canvas class="p-5" id="chartBarAbsent"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--end dashboard -->

            <div id="pending" class="grid bg-yellow-400 overflow-hidden  rounded-lg" style="display: none">
                <!--Start Pending Overtime Application-->
                <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-white text-4xl font-bold px">Pending Overtime Application</h1>

                    </div>
                    <div class="row-start-2 row-span-1 flex items-center">
                        <div class="xl:w-full xl:h-46 flex grid grid-rows-1 grid-col-2 pt-1">
                            <div class="row-start-1 col-span-1 inset-x-0 bottom-0 "><span
                                    class="text-white font-bold align-middle hover:align-top text-xl">No. of
                                    Application:
                                    <label class="text-4xl">1<label></span></div>
                            <div class="row-start-1 col-span-1"><input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="searchBox"
                                    placeholder="Search" /></div>
                        </div>
                    </div>
                </div>
                <div>
                    <table id="pendingTable"
                        class="w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Name">Name</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="DateApplied">Date Applied
                                </th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="TargetOvertimeDate">
                                    Target
                                    Overtime Date</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Duration">Duration</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Reason">Reason</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Remarks">Remarks</th>
                            </tr>
                        </thead>

                        <tbody>
                        </tbody>

                    </table>
                    <div class="grid justify-center items-center mb-3 bg-white">
                        <nav aria-label="Page navigation example w-full">
                            <ul class="inline-flex -space-x-px">
                                <li>
                                    <a href="#" id="nextButton"
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
                                    <a href="#" id="prevButton"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end Pending Overtime Application-->

            <div id="approved" class="grid bgcolor overflow-hidden rounded-lg" style="display: none">
                <!--Start Approved Overtime Application-->
                <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-white text-4xl font-bold px">Approved Overtime Application</h1>

                    </div>
                    <div class="row-start-2 row-span-1 flex items-center">
                        <div class="xl:w-96 xl:h-46">
                            <input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="searchapproved"
                                placeholder="Search" />
                        </div>
                        <div class="row-start-2 row-span-1 flex">
                            <span class="text-white mt-2 ml-2"> Sort By:</span>
                            <div date-rangepicker class="flex items-center pl-5">
                                <div class="relative">

                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
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
                                <span class="mx-4 text-gray-500">to</span>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
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
                </div>
                <div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed"
                        id="approvedTable">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Name">Name</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="DateApplied">Date Applied
                                </th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="TargetOvertimeDate">
                                    Target
                                    Overtime Date</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Duration">Duration</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Reason">Reason</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="ApprovedBy">Approved By
                                </th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="ApprovedDate">Approved
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                    </table>
                    <div class="grid justify-center items-center mb-3 bg-white">
                        <nav aria-label="Page navigation example w-full">
                            <ul class="inline-flex -space-x-px">
                                <li>
                                    <a href="#" id="approvednextButton"
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
                                    <a href="#" id="approvedprevButton"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end Approved history-->

            <div id="schedule" class="grid bg-white sm:w-full rounded-lg overflow-hidden" style="display: none">
                <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-gray-800 text-4xl font-bold px">Schedule Maintenance</h1>
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
                                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8"
                                        action="{{ url('scheduleMaintenance') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Add
                                            Schedule
                                        </h3>
                                        <div class="grid grid-cols-5 gap-2">
                                            <div class="col-start-1 col-span-1">
                                                <label for="text"
                                                    class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Schedule
                                                    ID</label>
                                                <input type="text" name="scheduleID" id="scheduleID"
                                                    class="form-control capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white outline-none"
                                                    placeholder="Schedule ID" required="">
                                            </div>
                                            <div class="col-start-2 col-span-1">
                                                <label for="date"
                                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Region</label>
                                                <select name="region" id="region"
                                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                    <option hidden selected>Region</option>
                                                    <option value="NCR">NCR</option>
                                                    <option value="Region 1">Region 1</option>
                                                    <option value="Region 2">Region 2</option>
                                                    <option value="Region 3">Region 3</option>
                                                    <option value="Region 4">Region 4</option>
                                                    <option value="Region 5">Region 5</option>
                                                </select>
                                            </div>
                                            <div class="col-start-3 col-span-1">
                                                <label for="date"
                                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Municipality/City</label>
                                                <select name="municipalitycity" id="municipalitycity"
                                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black focus:border-1 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                    <option hidden selected>Municipality/City</option>
                                                    <option value="Las Pinas City">Las Pinas City</option>
                                                    <option value="Makati City">Makati City</option>
                                                    <option value="Malabon City">Malabon City</option>
                                                    <option value="Mandaluyong City">Mandaluyong City</option>
                                                </select>
                                            </div>
                                            <div class="col-start-4 col-span-1">
                                                <label for="date"
                                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Chain</label>
                                                <select name="chain" id="chain"
                                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                    <option hidden selected>Chain</option>
                                                    <option value="Finds Finds Las Pinas">Finds Finds Las Pinas</option>
                                                    <option value="Robinsons Las Pinas">Robinsons Las Pinas</option>
                                                    <option value="Waltermart Makati">Waltermart Makati</option>
                                                    <option value="Fisher Mall Malabon">Fisher Mall Malabon</option>
                                                    <option value="Robinsons Malabon">Robinsons Malabon</option>
                                                    <option value="Robinsons Forum Pioneer">11:30 am</option>
                                                </select>
                                            </div>
                                            <div class="col-start-5 col-span-1">
                                                <label for="date"
                                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Branch</label>
                                                <select name="branch" id="branch"
                                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                    <option hidden selected>Branch</option>
                                                    <option value="Vista Mall Department Store">Vista Mall Department
                                                        Store
                                                    </option>
                                                    <option value="Robinsons Department Store">Robinsons Department
                                                        Store
                                                    </option>
                                                    <option value="Waltermart Department Store">Waltermart Department
                                                        Store
                                                    </option>
                                                    <option value="Fisher Mall Department Store">Fisher Mall Department
                                                        Store</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-2 gap-2">
                                            <div class="col-start-1 col-span-1">
                                                <label for="date"
                                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Start
                                                    Time</label>
                                                <select name="startTime" id="startTime"
                                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                    <option hidden selected>Start Time</option>
                                                    <option value="09:00 am">09:00 am</option>
                                                    <option value="09:30 am">09:30 am</option>
                                                    <option value="10:00 am">10:00 am</option>
                                                    <option value="10:30 am">10:30 am</option>
                                                    <option value="11:00 am">11:00 am</option>
                                                    <option value="11:30 am">11:30 am</option>
                                                </select>
                                            </div>
                                            <div class="col-start-2 col-span-1">
                                                <label for="date"
                                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">End
                                                    Time</label>
                                                <select name="endTime" id="endTime"
                                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                    <option hidden selected>End Time</option>
                                                    <option value="06:00 pm">06:00 pm</option>
                                                    <option value="06:30 pm">06:30 pm</option>
                                                    <option value="07:00 pm">07:00 pm</option>
                                                    <option value="07:30 pm">07:30 pm</option>
                                                    <option value="08:00 pm">08:00 pm</option>
                                                    <option value="08:30 pm">08:30 pm</option>
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
						m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none rounded-xl" id="searchBoxSchedule"
                                    placeholder="Search" />
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <table id="scheduleMaintenance"
                        class="text-center w-full bg-white place-items-center rounded-lg  overflow-x-scroll px-10 overflow-auto">
                        <thead class="bg-gray-100 flex text-gray w-full">
                            <tr class="flex w-full">
                                <th class="p-4 w-2/6">Schedule ID</th>
                                <th class="p-4 w-2/6">Region</th>
                                <th class="p-4 w-2/6">Municipality/City</th>
                                <th class="p-4 w-2/6">Chain</th>
                                <th class="p-4 w-2/6">Branch</th>
                                <th class="p-4 w-2/6">Start Time</th>
                                <th class="p-4 w-2/6">End Time</th>
                                <th class="p-4 w-2/6"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-grey-light flex flex-col text-center items-left justify-left w-full"
                            style="height: 73vh;">
                            <!-- <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-2/6">BRANCH-0001</td>
                                <td class="p-4 w-2/6">NCR</td>
                                <td class="p-4 w-2/6">Las Pinas City</td>
                                <td class="p-4 w-2/6">Finds Finds Las Pinas</td>
                                <td class="p-4 w-2/6">Vista Mall Department Store</td>
                                <td class="p-4 w-2/6">09:30 am</td>
                                <td class="p-4 w-2/6">06:30 pm</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-schedule">Edit</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="delete-schedule">Delete</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-2/6">BRANCH-0002</td>
                                <td class="p-4 w-2/6">NCR</td>
                                <td class="p-4 w-2/6">Las Pinas City</td>
                                <td class="p-4 w-2/6">Robinsons Las Pinas</td>
                                <td class="p-4 w-2/6">Robinsons Department Store</td>
                                <td class="p-4 w-2/6">10:00 am</td>
                                <td class="p-4 w-2/6">06:00 pm</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-schedule">Edit</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="delete-schedule">Delete</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-2/6">BRANCH-0002</td>
                                <td class="p-4 w-2/6">NCR</td>
                                <td class="p-4 w-2/6">Las Pinas City</td>
                                <td class="p-4 w-2/6">Robinsons Las Pinas</td>
                                <td class="p-4 w-2/6">Robinsons Department Store</td>
                                <td class="p-4 w-2/6">11:00 am</td>
                                <td class="p-4 w-2/6">08:00 pm</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-schedule">Edit</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="delete-schedule">Delete</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-2/6">BRANCH-0004</td>
                                <td class="p-4 w-2/6">NCR</td>
                                <td class="p-4 w-2/6">Malabon City</td>
                                <td class="p-4 w-2/6">Fisher Mall Malabon</td>
                                <td class="p-4 w-2/6">Fisher Mall Department Store</td>
                                <td class="p-4 w-2/6">11:00 am</td>
                                <td class="p-4 w-2/6">08:00 pm</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-schedule">Edit</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="delete-schedule">Delete</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-2/6">BRANCH-0005</td>
                                <td class="p-4 w-2/6">NCR</td>
                                <td class="p-4 w-2/6">Malabon City</td>
                                <td class="p-4 w-2/6">Robinsons Malabon</td>
                                <td class="p-4 w-2/6">Robinsons Department Store</td>
                                <td class="p-4 w-2/6">11:00 am</td>
                                <td class="p-4 w-2/6">08:00 pm</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-schedule">Edit</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="delete-schedule">Delete</button>
                                </td>
                            </tr>
                            <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                                <td class="p-4 w-2/6">BRANCH-0006</td>
                                <td class="p-4 w-2/6">NCR</td>
                                <td class="p-4 w-2/6">Mandaluyong City</td>
                                <td class="p-4 w-2/6">Robinsons Forum Pioneer</td>
                                <td class="p-4 w-2/6">Robinsons Department Store</td>
                                <td class="p-4 w-2/6">12:00 pm</td>
                                <td class="p-4 w-2/6">09:00 pm</td>
                                <td class="p-4 w-2/6"><button
                                        class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="edit-schedule">Edit</button>
                                    <button
                                        class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                        data-modal-toggle="delete-schedule">Delete</button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                    <div class="grid justify-center items-center mb-3 bg-white">
                        <nav aria-label="Page navigation example w-full">
                            <ul class="inline-flex -space-x-px">
                                <li>
                                    <a href="#" id="prevButtonScheduleMaintenance"
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
                                    <a href="#" id="nextButtonScheduleMaintenance"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end schedule-->

            <div id="denied" class="grid bgpantone overflow-hidden rounded-lg" style="display: none">
                <!--Start Denied Overtime Application-->
                <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-white text-4xl font-bold px">Denied Overtime Application</h1>

                    </div>
                    <div class="row-start-2 row-span-1 flex items-center">
                        <div class="xl:w-96 xl:h-46">
                            <input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="searchdenied"
                                placeholder="Search" />
                        </div>
                        <div class="row-start-2 row-span-1 flex">
                            <span class="text-white mt-2 ml-2"> Sort By:</span>
                            <div date-rangepicker class="flex items-center pl-5">
                                <div class="relative">

                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
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
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
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
                </div>
                <div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed"
                        id="deniedTable">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Name">Name</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="DateApplied">Date Applied
                                </th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="TargetOvertimeDate">
                                    Target
                                    Overtime Date</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Reason">Reason</th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="DeniedBy">Denied By
                                </th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="DeniedDate">Denied Date
                                </th>
                                <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Remarks">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="grid justify-center items-center mb-3 bg-white">
                        <nav aria-label="Page navigation example w-full">
                            <ul class="inline-flex -space-x-px">
                                <li>
                                    <a href="#" id="deniednextButton"
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
                                    <a href="#" id="deniedprevButton"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end Denied history-->

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
                            placeholder="First Name" required="" value="Capitan" disabled>
                    </div>
                    <div class="row-start-1 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Middle
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Middle Name" required="" value="De Los Santos" disabled>
                    </div>
                    <div class="row-start-1 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Last
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Last Name" required="" value="Tiago" disabled>
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

        <div id="approved-modal" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full  justify-center items-center">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex justify-center p-2">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="approved-modal">
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
                                You successfully Approved
                            </h3>
                            <button data-modal-toggle="approved-modal" type="button"
                                class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Close
                            </button>
                            <!-- <button data-modal-toggle="approved-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end approved modal-->

        <!-- Deny modal -->
        <div id="deny-ot" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-black">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="deny-ot">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    @if(count($errors) >0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if($message = Session::get('success'))
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                    @endif
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" method="post"
                        action="{{ url('approver/denied') }}">
                        {{ csrf_field() }}

                        <h3 class="text-2xl font-medium text-center font-black dark:text-white font-extrabold"> DENYING
                            OVERTIME APPLICATION!</h3>
                        <div>
                            <label for="text"
                                class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant
                                Name:</label>
                            <input type="text" name="applicantname" id="applicantname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="Crisostomo Ibarra" required="" readonly>
                            <input type="text" name="approvername" id="approvername"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="Kapitan Tiago" required="" readonly>
                        </div>
                        <div>
                            <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date
                                Applied:</label>
                            <input type="text" name="dateapplied" id="dateapplied"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="09/21/2021" required="" readonly>
                        </div>
                        <div>
                            <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Target
                                Overtime Date:</label>
                            <input type="text" name="otdate" id="otdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="09/19/2021" required="" readonly>
                            <input type="text" name="status" id="status"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="denied" required="" readonly>
                            <input type="email" name="email" id="email"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="fname.lname@gmail.com" required="" id="email"
                                value="rolandalavera@gmail.com" readonly>
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-full">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label inline-block mb-2 text-gray-700 font-bold">Reason</label>
                                    <textarea
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black-600 focus:outline-none"
                                        id="exampleFormControlTextarea1" rows="8" placeholder="Your messge"
                                        name="otdeniedreason" id="otdeniedreason"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-black hover:bg-white hover:text-black border-2 hover:border-black focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end Deny Modal-->

        <!-- view ot modal -->
        <div id="view-pending" aria-hidden="true"
            class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
            <div class="modal-dialog relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto ">
                <!-- Modal content -->
                <div class="relative top-72 left-96 border w-full shadow-lg rounded-md bg-white">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            onClick="closeViewPending()">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h3 class="text-2xl font-medium text-center font-black dark:text-white font-extrabold">
                            OVERTIME REQUEST!</h3>

                        <div>
                            <label for="text"
                                class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant Name:
                                <span class="font-normal">Crisostomo Ibarra</span></label>
                            <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                        </div>
                        <div>
                            <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date Applied:
                                <span class="font-normal">September 21, 2021</span></label>
                            <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                        </div>
                        <div>
                            <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Target
                                Overtime Date:
                                <span class="font-normal">September 19, 2021</span></label>
                            <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-full">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label inline-block mb-2 text-gray-700 font-bold">Reason</label>
                                    <textarea
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid border-black rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlTextarea1" rows="8" placeholder="Your messge"
                                        disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                    </form>
                </div>
            </div>
        </div>

        <!-- edit schedule modal -->
        <div id="edit-schedule" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="edit-schedule">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h3 class="text-4xl font-medium text-gray-900 dark:text-white text-center">Edit Schedule
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

                        <div class="grid grid-cols-2 gap-2">
                            <div class="col-start-1 col-span-1">
                                <label for="date"
                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Start
                                    Time</label>
                                <select name="starttime" id="starttime"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option hidden selected>09:30 am</option>
                                    <option value="09:00">09:00 am</option>
                                    <option value="09:30">09:30 am</option>
                                    <option value="10:00">10:00 am</option>
                                    <option value="10:30">10:30 am</option>
                                    <option value="11:00">11:00 am</option>
                                    <option value="11:30">11:30 am</option>
                                </select>
                            </div>
                            <div class="col-start-2 col-span-1">
                                <label for="date"
                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">End
                                    Time</label>
                                <select name="endtime" id="endtime"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option hidden selected>06:30 pm</option>
                                    <option value="06:00">06:00 pm</option>
                                    <option value="06:30">06:30 pm</option>
                                    <option value="07:00">07:00 pm</option>
                                    <option value="07:30">07:30 pm</option>
                                    <option value="08:00">08:00 pm</option>
                                    <option value="08:30">08:30 pm</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit"
                            class="col-start-1 col-span-1 w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end edit schedule modal-->

        <!-- delete schedule modal -->
        <div id="delete-schedule" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full  justify-center items-center">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="delete-schedule">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
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
                            delete this Schedule Record?</h3>
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
        <!--end delete schedule modal-->

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

    </body>
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

    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

</html>

<!-- Javascript Code -->
<script>
 let modalPending = document.getElementById('view-pending');

function viewPending() {
    modalPending.style.display = "block";
}

function closeViewPending() {
    modalPending.style.display = "none";
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
}

function showDashboard() {
    var x = document.getElementById("Dashboard");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hidePending();
    hideApproved();
    hideDenied();
    hideSchedule();
    hideProfile();
}

function showPending() {
    var x = document.getElementById("pending");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideDashboard();
    hideApproved();
    hideDenied();
    hideSchedule();
    hideProfile();
}

function showApproved() {
    var x = document.getElementById("approved");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideDashboard();
    hidePending();
    hideDenied();
    hideSchedule();
    hideProfile();
}

function showDenied() {
    var x = document.getElementById("denied");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideDashboard();
    hidePending();
    hideApproved();
    hideSchedule();
    hideProfile();
}

function showSchedule() {
    var x = document.getElementById("schedule");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideDashboard();
    hidePending();
    hideApproved();
    hideDenied();
    hideProfile();
}

function showProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("hide profile");
    }
    hideDashboard();
    hidePending();
    hideApproved();
    hideDenied();
    hideSchedule();
}

function hideDashboard() {
    var x = document.getElementById("Dashboard");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hidePending() {
    var x = document.getElementById("pending");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideApproved() {
    var x = document.getElementById("approved");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideDenied() {
    var x = document.getElementById("denied");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideSchedule() {
    var x = document.getElementById("schedule");
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

// declare elements
const searchBox = document.getElementById('searchBox');
const tableSearchAttendanceSummary = document.getElementById("pendingTable");
const trs = tableSearchAttendanceSummary.tBodies[0].getElementsByTagName("tr");

// add event listener to search box
searchBox.addEventListener('keyup', performSearchPending);


function performSearchPending() {
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


// declare elements
const searchBoxApproved = document.getElementById('searchapproved');
const tableSearchApprovedTable = document.getElementById("approvedTable");
const trsApproved = tableSearchApprovedTable.tBodies[0].getElementsByTagName("tr");

// add event listener to search box
searchBoxApproved.addEventListener('keyup', performSearchApproved);


function performSearchApproved() {

    // Declare search string 
    var filter = searchBoxApproved.value.toUpperCase();

    // Loop through first tbody's rows
    for (var rowI = 0; rowI < trsApproved.length; rowI++) {

        // define the row's cells
        var tds = trsApproved[rowI].getElementsByTagName("td");
        // hide the row
        trsApproved[rowI].style.display = "none";

        // loop through row cells
        for (var cellI = 0; cellI < tds.length; cellI++) {

            // if there's a match
            if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

                // show the row
                trsApproved[rowI].style.display = "";

                // skip to the next row
                continue;

            }
        }
    }

}


// declare elements
const searchBoxDenied = document.getElementById('searchdenied');
const tableSearchDeniedTable = document.getElementById("deniedTable");
const trsDenied = tableSearchDeniedTable.tBodies[0].getElementsByTagName("tr");

// add event listener to search box
searchBoxDenied.addEventListener('keyup', performSearchDenied);


function performSearchDenied() {

    // Declare search string 
    var filter = searchBoxDenied.value.toUpperCase();

    // Loop through first tbody's rows
    for (var rowI = 0; rowI < trsDenied.length; rowI++) {

        // define the row's cells
        var tds = trsDenied[rowI].getElementsByTagName("td");
        // hide the row
        trsDenied[rowI].style.display = "none";

        // loop through row cells
        for (var cellI = 0; cellI < tds.length; cellI++) {

            // if there's a match
            if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

                // show the row
                trsDenied[rowI].style.display = "";

                // skip to the next row
                continue;

            }
        }
    }

}

respPendingApplication = [{
    "Name": "Crisostomo Ibarra",
    "DateApplied": "September 21, 2021",
    "TargetOvertimeDate": "September 19, 2021",
    "Duration": "2 hrs 20 mins",
}, ]

respApprovedApplication = [{
        "Name": "Crisostomo Ibarra",
        "DateApplied": "September 16, 2021",
        "TargetOvertimeDate": "September 18, 2021",
        "Duration": "2 hrs 00 mins",
        "ApprovedBy": "Kapitan Tiago",
        "ApprovedDate": "September 16, 2021"
    },
    {
        "Name": "Crisostomo Ibarra",
        "DateApplied": "September 14, 2021",
        "TargetOvertimeDate": "September 15, 2021",
        "Duration": "2 hrs 00 mins",
        "ApprovedBy": "Kapitan Tiago",
        "ApprovedDate": "September 15, 2021"
    },
    {
        "Name": "Crisostomo Ibarra",
        "DateApplied": "September 07, 2021",
        "TargetOvertimeDate": "September 08, 2021",
        "Duration": "2 hrs 00 mins",
        "ApprovedBy": "Kapitan Tiago",
        "ApprovedDate": "September 07, 2021"
    }
]

respDeniedApplication = [{
        "Name": "Crisostomo Ibarra",
        "DateApplied": "September 16, 2021",
        "TargetOvertimeDate": "September 18, 2021",
        "DeniedBy": "Kapitan Tiago",
        "DeniedDate": "September 15, 2021"
    },
    {
        "Name": "Crisostomo Ibarra",
        "DateApplied": "September 14, 2021",
        "TargetOvertimeDate": "September 17, 2021",
        "DeniedBy": "Kapitan Tiago",
        "DeniedDate": "September 10, 2021"
    }
]

document.addEventListener('DOMContentLoaded', init, false);

let data, table, sortCol;
let sortAsc = false;
const pageSize = 3;
let curPage = 1;

let approveddata, approvedtable, approvedsortCol;
let approvedsortAsc = false;
const approvedpageSize = 3;
let approvedcurPage = 1;

let denieddata, deniedtable, deniedsortCol;
let deniedsortAsc = false;
const deniedpageSize = 3;
let deniedcurPage = 1;

const pageSizeScheduleMaintenance = 10;
let curPageScheduleMaintenance = 1;
let tableScheduleMaintenance, dataScheduleMaintenance, sortColScheduleMaintenance;
let sortAscScheduleMaintenance = false;

async function init() {

    // Select the table (well, tbody)
    table = document.querySelector('#pendingTable tbody');
    // get the cats
    //   let resp = await fetch('https://www.raymondcamden.com/.netlify/functions/get-cats');
    data = respPendingApplication;
    renderTable();

    // listen for sort clicks
    document.querySelectorAll('#pendingTable thead tr th').forEach(t => {
        t.addEventListener('click', sort, false);
    });
    console.log(respApprovedApplication);

    document.querySelector('#nextButton').addEventListener('click', nextPage, false);
    document.querySelector('#prevButton').addEventListener('click', previousPage, false);


    // Select the table (well, tbody)
    approvedtable = document.querySelector('#approvedTable tbody');
    // get the cats
    //   let resp = await fetch('https://www.raymondcamden.com/.netlify/functions/get-cats');
    console.log(respApprovedApplication);
    approveddata = respApprovedApplication;
    approvedrenderTable();

    // listen for sort clicks
    document.querySelectorAll('#approvedTable thead tr th').forEach(t => {
        t.addEventListener('click', sortapproved, false);
    });

    document.querySelector('#approvednextButton').addEventListener('click', approvednextPage, false);
    document.querySelector('#approvedprevButton').addEventListener('click', approvedpreviousPage, false);


    // Select the table (well, tbody)
    deniedtable = document.querySelector('#deniedTable tbody');
    // get the cats
    //   let resp = await fetch('https://www.raymondcamden.com/.netlify/functions/get-cats');
    console.log(respApprovedApplication);
    denieddata = respApprovedApplication;
    deniedrenderTable();

    // listen for sort clicks
    document.querySelectorAll('#deniedTable thead tr th').forEach(t => {
        t.addEventListener('click', sortdenied, false);
    });

    document.querySelector('#deniednextButton').addEventListener('click', deniednextPage, false);
    document.querySelector('#deniedprevButton').addEventListener('click', deniedpreviousPage, false);

    //Schedule Maintenance
    $.ajax({
        url: 'getScheduleMaintenance',
        type: 'GET',
        dataType: 'json',
        success: function(response) {

            // createRows(response);
            dataScheduleMaintenance = response;
            renderTableScheduleMaintenance();

        }
        
    });
    console.log(dataScheduleMaintenance);
    tableScheduleMaintenance = document.querySelector('#scheduleMaintenanceTable tbody');
    document.querySelector('#nextButtonScheduleMaintenance').addEventListener('click', nextPageScheduleMaintenance,
        false);
    document.querySelector('#prevButtonScheduleMaintenance').addEventListener('click', previousPageScheduleMaintenance,
        false);
}

//Salary Maintenance
function renderTableScheduleMaintenance() {
    // create html

    // console.log(dataSalaryMaintenance[0][1]);
    // dataScheduleMaintenance = dataScheduleMaintenance[0][1];
    console.log(dataScheduleMaintenance.length);
    let result = '';
    dataScheduleMaintenance.filter((row, index) => {
        let start = (curPageScheduleMaintenance - 1) * pageSizeScheduleMaintenance;
        let end = curPageScheduleMaintenance * pageSizeScheduleMaintenance;
        if (index >= start && index < end) return true;
    }).forEach(c => {
        result += `<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
     <td class="py-4 w-2/6">${c.scheduleID}</td>
     <td class="py-4 w-2/6">${c.region}</td>
     <td class="py-4 w-2/6">${c.municipalitycity}</td>
     <td class="py-4 w-2/6">${c.chain}</td>
     <td class="py-4 w-2/6">${c.branch}</td>
	 <td class="py-4 w-2/6">${c.startTime}</td>
	 <td class="py-4 w-2/6">${c.endTime}</td>
     <td class="p-4 w-2/6"><button onClick="editSalary()" id="editSalary" class="btn bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="edit-store">Edit</button><button id="deleteSalary" onCLick="deleteSalary()" class="btn bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none" data-modal-toggle="delete-store">Delete</button></td>
     </tr>`;
    //  primaryKey = c.scheduleID;
    });
    tableScheduleMaintenance.innerHTML = result;
}

function previousPageScheduleMaintenance() {
    if (curPageScheduleMaintenance > 1) curPageScheduleMaintenance--;
    renderTableScheduleMaintenance();
}
function nextPageScheduleMaintenance() {
    if ((curPageScheduleMaintenance * pageSizeSalaryMaintenance) < dataScheduleMaintenance.length)
    curPageScheduleMaintenance++;
    renderTableScheduleMaintenance();
}

// declare elements
const searchBoxScheduleMaintenance = document.getElementById('searchBoxSchedule');
const tableSearchScheduleMaintenance = document.getElementById("scheduleMaintenanceTable");
const trsScheduleMaintenance = tableSearchScheduleMaintenance.tBodies[0].getElementsByTagName("tr");
// add event listener to search box
searchBoxScheduleMaintenance.addEventListener('keyup', performSearchSchedule);
function performSearchSchedule() {
    // Declare search string 
    var filter = searchBox.value.toUpperCase();
    // Loop through first tbody's rows
    for (var rowI = 0; rowI < trsScheduleMaintenance.length; rowI++) {
        // define the row's cells
        var tds = trsScheduleMaintenance[rowI].getElementsByTagName("td");
        // hide the row
        trsScheduleMaintenance[rowI].style.display = "none";
        // loop through row cells
        for (var cellI = 0; cellI < tds.length; cellI++) {
            // if there's a match
            if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {
                // show the row
                trsScheduleMaintenance[rowI].style.display = "";
                // skip to the next row
                continue;
            }
        }
    }
}

function renderTable() {
    // create html
    let result = '';
    data.filter((row, index) => {
        let start = (curPage - 1) * pageSize;
        let end = curPage * pageSize;
        if (index >= start && index < end) return true;
    }).forEach(c => {
        result += `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">${c.Name}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.DateApplied}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.TargetOvertimeDate}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.Duration}</td>
                            <td class="py-6 px-6 whitespace-nowrap"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    onClick="viewPending()">VIEW</button></td>
                            <td class="py-6 px-6 whitespace-nowrap">
                            <button class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="approved-modal">Approve</button>
                            <button class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="deny-ot">Deny</button>
                            </td>
                            </tr>`;
    });
    table.innerHTML = result;
}

function sort(e) {
    let thisSort = e.target.dataset.sort;
    if (sortCol === thisSort) sortAsc = !sortAsc;
    sortCol = thisSort;
    console.log('sort dir is ', sortAsc);
    data.sort((a, b) => {
        if (a[sortCol] < b[sortCol]) return sortAsc ? 1 : -1;
        if (a[sortCol] > b[sortCol]) return sortAsc ? -1 : 1;
        return 0;
    });
    renderTable();
}

function previousPage() {
    if (curPage > 1) curPage--;
    renderTable();
}

function nextPage() {
    if ((curPage * pageSize) < data.length) curPage++;
    renderTable();
}



function approvedrenderTable() {
    // create html
    let approvedresult = '';
    approveddata.filter((row, index) => {
        let start = (approvedcurPage - 1) * approvedpageSize;
        let end = approvedcurPage * approvedpageSize;
        if (index >= start && index < end) return true;
    }).forEach(c => {
        approvedresult += `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">${c.Name}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.DateApplied}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.TargetOvertimeDate}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.Duration}</td>
                            <td class="py-6 px-6 whitespace-nowrap"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.ApprovedBy}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.ApprovedDate}</td>
                            </tr>`;
    });
    approvedtable.innerHTML = approvedresult;
}

function sortapproved(e) {
    let thisSort = e.target.dataset.sort;
    if (approvedsortCol === thisSort) sortAsc = !sortAsc;
    approvedsortCol = thisSort;
    console.log('sort dir is ', sortAsc);
    data.sort((a, b) => {
        if (a[approvedsortCol] < b[approvedsortCol]) return sortAsc ? 1 : -1;
        if (a[approvedsortCol] > b[approvedsortCol]) return sortAsc ? -1 : 1;
        return 0;
    });
    approvedrenderTable();
}

function approvedpreviousPage() {
    if (approvedcurPage > 1) approvedcurPage--;
    approvedrenderTable();
}

function approvednextPage() {
    if ((approvedcurPage * approvedpageSize) < approveddata.length) approvedcurPage++;
    approvedrenderTable();
}


function deniedrenderTable() {
    // create html
    let deniedresult = '';
    denieddata.filter((row, index) => {
        let start = (deniedcurPage - 1) * deniedpageSize;
        let end = deniedcurPage * deniedpageSize;
        if (index >= start && index < end) return true;
    }).forEach(c => {
        deniedresult += `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">${c.Name}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.DateApplied}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.TargetOvertimeDate}</td>
                            <td class="py-6 px-6 whitespace-nowrap"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.ApprovedBy}</td>
                            <td class="py-6 px-6 whitespace-nowrap">${c.ApprovedDate}</td>
                            <td class="py-5 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="denied-ot"> VIEW</button></td>
                            </tr>`;
    });
    deniedtable.innerHTML = deniedresult;
}

function sortdenied(e) {
    let thisSort = e.target.dataset.sort;
    if (deniedsortCol === thisSort) sortAsc = !sortAsc;
    deniedsortCol = thisSort;
    console.log('sort dir is ', sortAsc);
    data.sort((a, b) => {
        if (a[deniedsortCol] < b[deniedsortCol]) return sortAsc ? 1 : -1;
        if (a[deniedsortCol] > b[deniedsortCol]) return sortAsc ? -1 : 1;
        return 0;
    });
    deniedrenderTable();
}

function deniedpreviousPage() {
    if (deniedcurPage > 1) deniedcurPage--;
    deniedrenderTable();
}

function deniednextPage() {
    if ((deniedcurPage * deniedpageSize) < denieddata.length) deniedcurPage++;
    deniedrenderTable();
}


const labelsBarChartLateUndertime = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];
const dataBarChartLateUndertime = {
    labels: labelsBarChartLateUndertime,
    datasets: [{
        label: "No. of Denied Application",
        backgroundColor: "hsl(325.8,100%,33.3%)",
        // borderColor: "hsl(0,0%,100%)",
        data: [15, 45, 35, 75, 73, 67, 89, 23, 53, 54, 60, 71],
    }, ],
};

const configBarChartLateUndertime = {
    type: "line",
    data: dataBarChartLateUndertime,
    options: {},
};

var chartBarLateUndertime = new Chart(
    document.getElementById("chartBarLateUndertime"),
    configBarChartLateUndertime
);

const labelsBarChartHoursRendered = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];

const dataBarChartHoursRendered = {
    labels: labelsBarChartHoursRendered,
    datasets: [{
        label: "Minutes",
        backgroundColor: "hsl(183.5,100%,33.9%)",
        // borderColor: "hsl(0,0%,100%)",
        data: [600, 583, 573, 540, 490],
    }, ],
};

const configBarChartHoursRendered = {
    type: "bar",
    data: dataBarChartHoursRendered,
    options: {},
};

var chartBarHoursRendered = new Chart(
    document.getElementById("chartBarHoursRendered"),
    configBarChartHoursRendered
);

const labelsBarChartAbsent = [
    "Denied",
    "Approved",
];
const dataBarChartAbsent = {
    labels: labelsBarChartAbsent,
    datasets: [{
        label: "No. of absent",
        backgroundColor: [
            "rgb(170,0,97)",
            "rgb(0,163,173)",
        ],
        borderColor: "hsl(0,0%,100%)",
        data: [10, 4],
    }, ],
};

const configBarChartAbsent = {
    type: "pie",
    data: dataBarChartAbsent,
    options: {},
};

var chartBarAbsent = new Chart(
    document.getElementById("chartBarAbsent"),
    configBarChartAbsent
);
</script>