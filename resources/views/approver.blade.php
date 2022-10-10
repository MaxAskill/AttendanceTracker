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
                            <a href="#" onClick="showPending()" @click="open = !open"
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
                                    <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
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
        <div id="pending" class="grid bg-orange-500 overflow-hidden  rounded-lg" style="display: block">
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
                                <label class="text-4xl">5<label></span></div>
                        <div class="row-start-1 col-span-1"><input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch"
                                placeholder="Search" /></div>
                    </div>
                </div>
            </div>
            <div>
                <table class="text-center w-full bg-white text-center hover:table-fixed">
                    <thead class="bg-gray-100 flex text-gray w-full">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <th class="py-4 w-2/6">Name</th>
                            <th class="py-4 w-2/6">Date Applied</th>
                            <th class="py-4 w-2/6">Target Overtime Date</th>
                            <th class="py-4 w-2/6">Duration</th>
                            <th class="py-4 w-2/6">Reason</th>
                            <th class="py-4 w-2/6">Remarks</th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col w-full " style="height: 72vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 21, 2022</td>
                            <td class="py-4 w-2/6">September 22, 2022</td>
                            <td class="py-4 w-2/6">2 hrs 20 mins</td>
                            <td class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></td>
                            <td class="py-4 w-2/6">
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="approved-modal">Approve</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="deny-ot">Deny</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 21, 2022</td>
                            <td class="py-4 w-2/6">September 22, 2022</td>
                            <td class="py-4 w-2/6">2 hrs 20 mins</td>
                            <td class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></td>
                            <td class="py-4 w-2/6">
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="approved-modal">Approve</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="deny-ot">Deny</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 21, 2022</td>
                            <td class="py-4 w-2/6">September 22, 2022</td>
                            <td class="py-4 w-2/6">2 hrs 20 mins</td>
                            <td class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></td>
                            <td class="py-4 w-2/6">
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="approved-modal">Approve</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="deny-ot">Deny</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 21, 2022</td>
                            <td class="py-4 w-2/6">September 22, 2022</td>
                            <td class="py-4 w-2/6">2 hrs 20 mins</td>
                            <td class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></td>
                            <td class="py-4 w-2/6">
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="approved-modal">Approve</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="deny-ot">Deny</button>
                            </td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 21, 2022</td>
                            <td class="py-4 w-2/6">September 22, 2022</td>
                            <td class="py-4 w-2/6">2 hrs 20 mins</td>
                            <td class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></td>
                            <td class="py-4 w-2/6">
                                <button
                                    class="bg-transparent hover:bg-white font-themecolor font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 bordercolor hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="approved-modal">Approve</button>
                                <button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-2 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="deny-ot">Deny</button>
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
        <!--end Pending Overtime Application-->

        <div id="approved" class="grid bgcolor overflow-hidden rounded-lg" style="display: none">
            <!--Start Approved Overtime Application-->
            <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                <div class="row-start-1 row-span-1 flex">
                    <h1 class="text-white text-4xl font-bold px">Approved Overtime History</h1>

                </div>
                <div class="row-start-2 row-span-1 flex items-center">
                    <div class="xl:w-96 xl:h-46">
                        <input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch"
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
                <table class="w-full bg-white hover:table-fixed">
                    <thead class="bg-gray-100 flex text-gray w-full">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <th class="py-4 w-2/6">Name</th>
                            <th class="py-4 w-2/6">Date Applied</th>
                            <th class="py-4 w-2/6">Target Overtime Date</th>
                            <th class="py-4 w-2/6">Duration</th>
                            <th class="py-4 w-1/6">Reason</th>
                            <th class="py-4 w-3/6">Approved By</th>
                            <th class="py-4 w-2/6">Approved Date</th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col w-full text-center" style="height: 73vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <td class="py-4 w-2/6">2 hrs 5 mins</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <td class="py-4 w-2/6">2 hrs 5 mins</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <td class="py-4 w-2/6">2 hrs 5 mins</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <td class="py-4 w-2/6">2 hrs 5 mins</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <td class="py-4 w-2/6">2 hrs 5 mins</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-3/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                        </tr>
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
        <!--end Approved history-->

        <div id="denied" class="grid bgpantone overflow-hidden rounded-lg" style="display: none">
            <!--Start Denied Overtime Application-->
            <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
                <div class="row-start-1 row-span-1 flex">
                    <h1 class="text-white text-4xl font-bold px">Denied Overtime Application</h1>

                </div>
                <div class="row-start-2 row-span-1 flex items-center">
                    <div class="xl:w-96 xl:h-46">
                        <input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid transition ease-in-out
								m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch"
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
                <table class="w-full bg-white hover:table-fixed">
                    <thead class="bg-gray-100 flex text-gray w-full pr-5">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <th class="py-4 w-2/6">Name</th>
                            <th class="py-4 w-2/6">Date Applied</th>
                            <th class="py-4 w-2/6">Target Overtime Date</th>
                            <th class="py-4 w-2/6">Reason</th>
                            <th class="py-4 w-2/6">Denied By</th>
                            <th class="py-4 w-2/6">Denied Date</th>
                            <th class="py-4 w-1/6">Remarks</th>
                        </tr>
                    </thead>
                    <tbody class="bg-grey-light flex flex-col  w-full text-center" style="height: 73vh;">
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <th class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="denied-ot"> VIEW</button></th>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <th class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="denied-ot">VIEW</button></th>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <th class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="denied-ot">VIEW</button></th>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <th class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="denied-ot">VIEW</button></th>
                        </tr>
                        <tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
                            <td class="py-4 w-2/6">Maria M. Clara</td>
                            <td class="py-4 w-2/6">September 19, 2021</td>
                            <td class="py-4 w-2/6">September 21, 2021</td>
                            <th class="py-4 w-2/6"><button
                                    class="bg-transparent hover:bg-white font-gray-700 font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-gray-700 hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="view-ot">VIEW</button></th>
                            <td class="py-4 w-2/6">Ms. Dianne L. Manlangit</td>
                            <td class="py-4 w-2/6">September 20, 2021</td>
                            <th class="py-4 w-1/6"><button
                                    class="bg-transparent hover:bg-white font-pantone font-semibold hover:text-opacity-50 py-0.5 px-4 border-2 border-pantone hover:bg-gray-200 rounded-2xl focus:outline-none"
                                    data-modal-toggle="denied-ot">VIEW</button></th>
                        </tr>
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
                        placeholder="First Name" required="" value="Crisostomo" disabled>
                </div>
                <div class="row-start-1 col-span-1">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Middle
                        Name</label>
                    <input type="text" name="mName" id="mName"
                        class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Middle Name" required="" value="Simon" disabled>
                </div>
                <div class="row-start-1 col-span-1">
                    <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Last
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
    <div id="approved-modal" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full  justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex justify-center p-2">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="approved-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M352 176L217.6 336 160 272" />
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
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-2xl font-medium text-center font-black dark:text-white font-extrabold">OVERTIME
                        REQUEST DENIED!</h3>
                    <div>
                        <label for="text"
                            class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant Name:
                            <span class="font-normal">Maria M. Clara</span></label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date Applied:
                            <span class="font-normal">September 21, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Target
                            Overtime Date:
                            <span class="font-normal">September 22, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <div class="flex justify-center">
                            <div class="mb-3 xl:w-full">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label inline-block mb-2 text-gray-700 font-bold">Reason</label>
                                <textarea
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid border-black rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none"
                                    id="exampleFormControlTextarea1" rows="8" placeholder="Your messge"></textarea>
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

    <!-- Denied modal -->
    <div id="denied-ot" aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-pantone">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="denied-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-2xl font-medium text-center font-pantone dark:text-white font-extrabold">
                        OVERTIME
                        REQUEST DENIED!</h3>

                    <div>
                        <label for="text"
                            class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant Name:
                            <span class="font-normal">Maria M. Clara</span></label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date Applied:
                            <span class="font-normal">September 21, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Target
                            Overtime Date:
                            <span class="font-normal">September 22, 2022</span></label>
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

    <!-- Request modal -->
    <div id="view-ot" aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-black">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="view-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-2xl font-medium text-center text-gray-900 dark:text-white font-extrabold">
                        OVERTIME
                        REQUEST</h3>

                    <div>
                        <label for="text"
                            class="capitalized font-medium text-gray-900 block dark:text-gray-300">Applicant Name:
                            <span class="font-normal">Maria M. Clara</span></label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Date Applied:
                            <span class="font-normal">September 21, 2022</span></label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class=" font-medium text-gray-900 block dark:text-gray-300">Target
                            Overtime Date:
                            <span class="font-normal">September 22, 2022</span></label>
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
<script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>

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


function showPending() {
    var x = document.getElementById("pending");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    hideApproved();
    hideDenied();

}

function showApproved() {
    var x = document.getElementById("approved");
    if (x.style.display === "none") {
        x.style.display = "block";
    }

    hidePending();
    hideDenied();
}

function showDenied() {
    var x = document.getElementById("denied");
    if (x.style.display === "none") {
        x.style.display = "block";
    }

    hidePending();
    hideApproved();
}

function showProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("hide profile");
    }
    hidePending();
    hideApproved();
    hideDenied();
}

function hideProfile() {
    var x = document.getElementById("profile");
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
</script>