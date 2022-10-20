<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/css/uikit.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/js/uikit.min.js"></script>
        <!-- <link href="/dist/output.css" rel="stylesheet"> -->
    </head>

<body class="xl:flex">
    <!-- component -->
    <div class="md:flex flex-col md:flex-row md:min-h-screen xl:w-2/12">
        <sidebar @click.away="open = false"
            class="flex flex-col w-full xl:h-screen sticky top-0 text-gray-700 bg-white flex-shrink-0  top-overflow-visible"
            x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row">
                <img src="img\logo.png" class="md:w-full w-6/12" alt="Sample image" />
                <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline ml-40"
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
            <nav :class="{'block': open, 'hidden': !open}"
                class="flex-grow md:block float-right items-center justify-between">
                <div class="flex justify-center ">
                    <img src="img\profilepic.png" class="w-56 rounded-full bordercolor bordercolor border-4 "
                        alt="Sample image" />
                </div>

                    <div class="overflow-y-auto py-4 px-3 rounded dark:bg-gray-800">
                        <ul class="space-y-2">
                            <li>
                                <a href="#" onClick="showDailyTimeRecord()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900  dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="showAttendanceSummary()" @click="open = !open"
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
                                <a href="#" onClick="showOT()" @click="open = !open"
                                    class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 w-6 h-6 hover:font-themecolor hover:font-bold transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0116 16v288a16 16 0 01-16 16c-128 0-177.45 25.81-208 64-30.37-38-80-64-208-64-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0116-16c131.57.59 192 32.84 208 96zM256 160v288"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Overtime History</span>
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

        <content class="xl:w-10/12 md:min-h-screen sm:w-full py-5 px-10">
            <div id="dailyTimeRecord" style="display:block">
                <div class="grid md:grid-cols-3 px-5 gap-5 mb-5">

                    <div class="bg-gray-400 rounded-lg px-2 py-5 text-white text-center">
                        <h1 class="font-bold">Worked Hour Today</h1>
                        <p><span id="hours" class="countdown font-mono text-2xl"> 00 : 00 : 00 : 00 </span></p>
                    </div>

                    <div class="bg-green-500 rounded-lg py-5 text-center text-white">
                        <h1 class="font-bold">Timed In Today</h1>
                        <span class="countdown font-mono text-2xl" id="timedIn">
                            00 : 00 : 00
                        </span>
                    </div>

                    <div class="bgpantone rounded-lg py-5 text-center text-white">
                        <h1 class="font-bold">Estimated Time Out</h1>
                        <span class="countdown font-mono text-2xl" id="time_out">
                            00 : 00 : 00
                        </span>
                    </div>
                </div>
                <!--END CLOCK-->
                <div class="px-5 md:flex">

                    <div class="md:w-3/12 md:mb-0 mb-5">
                        <div class="bg-white rounded-lg md:py-12 py-5 text-center text-white space-x-4 mb-5">
                            <h1 class="text-gray-700 text-2xl font-bold">FILE OVERTIME</h1>
                            <button
                                class="border-4 rounded-2xl text-xl bordercolor font-themecolor py-1 px-4 mt-1 hover:bg-gray-100 focus:outline-none"
                                data-modal-toggle="authentication-modal">FILE<button>
                        </div>

                        <div class="bg-white rounded-2xl px-10 py-20 text-center text-white overflow-hidden">
                            <h1 class="text-gray-700 text-6xl font-bold px">TODAY</h1>
                            <span class="text-gray-700 text-xl font-bold py-2" id="todayDate">SEPTEMBER 21, 2022</span>
                            <select id="timeschedule"
                            class="w-2/3 inline-flex items-center bg-gray-50 border-2 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option hidden selected>Time Schedule</option>
                            <option value="09:30">09:30 am - 06:00 pm</option>
                            <option value="09:00">09:00 am - 05:00 pm</option>
                            <option value="08:00">08:00 am - 04:00 pm</option>
                            <option value="11:00">11:00 am - 09:00 pm</option>
                        </select>
                            <div class="grid place-content-center py-5">
                                <input type="button"
                                    class="border-4 rounded-2xl text-xl bordercolor font-themecolor py-2 px-2 focus:outline-none"
                                    id="button-start" value="Check In">
                                <button
                                    class="border-4 rounded-2xl text-xl border-pantone font-pantone py-2 px-2 hidden focus:outline-none"
                                    id="button-stop" onClick="hideButton()">Check Out<button>
                            </div>
                            <table class="table-fixed w-full content-center text-left text-gray-700 border-separate">
                                <tr>
                                    <th class="py-1">AM IN :</th>
                                    <th class="font-medium"><span id="amIn">
                                            -- : -- : --
                                        </span></th>
                                </tr>
                                <tr>
                                    <th class="py-1">LB IN :</th>
                                    <th class="font-medium"><span id="lbIn">
                                            -- : -- : --
                                        </span></th>
                                </tr>
                                <tr>
                                    <th class="py-1">LB OUT :</th>
                                    <th class="font-medium"><span id="lbOut">
                                            -- : -- : --
                                        </span></th>
                                </tr>
                                <tr>
                                    <th class="py-1">CB IN :</th>
                                    <th class="font-medium"><span id="cbIn">
                                            -- : -- : --
                                        </span></th>
                                </tr>
                                <tr>
                                    <th class="py-1">CB OUT :</th>
                                    <th class="font-medium"><span id="cbOut">
                                            -- : -- : --
                                        </span></th>
                                </tr>
                                <tr>
                                    <th class="py-1">PM OUT :</th>
                                    <th class="font-medium"><span id="pmOut">
                                            -- : -- : --
                                        </span></th>
                                </tr>
                                <tr>
                                    <th class="py-1">DURATION :</th>
                                    <th class="font-medium"><span id="duration">
                                            -- : -- : --
                                        </span></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--END FILE AND TODAY-->

                <div class="md:w-9/12 md:ml-5">
                    <div class="md:row-start-1 md:row-span-2 md:col-span-4 sm:col-span-1 sm:col-span-1  drop-shadow-md">
                        <div
                            class="flex h-full bg-white rounded-2xl grid md:grid-flow-row md:grid-rows-2 md:grid-cols-4  mb-5">
                            <div class="md:row-start-1 md:col-span-4 text-center">
                                <h1 class="text-6xl font-bold text-gray-700">Summary</h1>
                                <h2 class="text-lg font-bold text-gray-700">SEPTEMBER 2022</h2>
                            </div>
                            <div class="md:row-start-2 col-span-1 text-center py-2 text-gray-700">
                                <h1 class="text-lg font-bold">Late</h1>
                                <h2 class="text-2xl">0 mins</h2>
                            </div>
                            <div class="md:row-start-2 col-span-1 text-center py-2 text-gray-700">
                                <h1 class="text-lg font-bold">Undertime</h1>
                                <h2 class="text-2xl">0 mins</h2>
                            </div>
                            <div class="md:row-start-2 col-span-1 text-center py-2 text-gray-700">
                                <h1 class="text-lg font-bold">Overtime</h1>
                                <h2 class="text-2xl">00 hrs 00 mins</h2>
                            </div>
                            <div class="md:row-start-2 col-span-1 text-center py-2 text-gray-700">
                                <h1 class="text-lg font-bold">Hours Rendered</h1>
                                <h2 class="text-2xl">110 hrs 08 mins</h2>
                            </div>
                        </div>
                    </div>

                        <div class="py-2 bgcolor drop-shadow-md rounded-xl ">
                            <div
                                class="grid md:grid-rows-2 md:grid-flow-col grid-cols-1 sm:px-5 sm:w-full md:mb-0 mb-2">
                                <div class="md:row-start-1 row-span-1 md:flex">
                                    <h1 class="text-white md:text-4xl text-2xl font-bold mx-4">Daily Time Record</h1>
                                </div>
                                <div class="md:row-start-2 row-span-1 md:flex pb-2 md:px-0 px-3">
                                    <div date-rangepicker class="md:flex items-center">
                                        <span class="md:mx-4 text-white"> Sort By:</span>
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true"
                                                    class="w-5 h-5 font-themecolor dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input name="start" type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Select date start">
                                        </div>
                                        <span class="md:mx-4 text-white">to</span>
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true"
                                                    class="w-5 h-5 font-themecolor dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                <div class="md:row-start-2 md:row-span-2 md:px-0 px-3">
                                    <div class="md:flex  md:float-right ">
                                        <button
                                            class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                            data-modal-toggle="upload-file">Upload</button>
                                        <button
                                            class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                            onClick="printDataTimeRecord()">Print</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row-start-2 row-span-5 col-span-2">

                            <div class="overflow-x-auto relative  sm:rounded-lg">
                                <table id="timeRecord"
                                    class="w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                                    <thead
                                        class="text-ml text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                            <th scope="col" class="py-3 px-6" data-sort="Date">Date</th>
                                            <th scope="col" class="py-3 px-6" data-sort="AM">AM In</th>
                                            <th scope="col" class="py-3 px-6" data-sort="LBIn">LB Out</th>
                                            <th scope="col" class="py-3 px-6" data-sort="LBOut">LB In</th>
                                            <th scope="col" class="py-3 px-6" data-sort="CBIn">CB Out</th>
                                            <th scope="col" class="py-3 px-6" data-sort="CBOut">CB In</th>
                                            <th scope="col" class="py-3 px-6" data-sort="PM">PM Out</th>
                                            <th scope="col" class="py-3 px-6" data-sort="Duration">Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="bg-transparent grid justify-center items-center mt-2 bg-white">
                                    <nav aria-label="Page navigation example w-full">
                                        <ul class="inline-flex -space-x-px">
                                            <li>
                                                <a href="" id="prevButton"
                                                    class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                            </li>
                                            <li>
                                                <a href=""
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                            </li>
                                            <li>
                                                <a href=""
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                            </li>
                                            <li>
                                                <a href="" aria-current="page"
                                                    class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                            </li>
                                            <li>
                                                <a href=""
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                            </li>
                                            <li>
                                                <a href=""
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                            </li>
                                            <li>
                                                <a href="" id="nextButton"
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HOME-->

            <div class="hide-show  px-5" id="attendanceSummary" style="display: none">
                <div class="py-2 bgcolor drop-shadow-md rounded-xl">
                    <div class="grid md:grid-rows-2 md:grid-flow-col grid-cols-1 sm:px-5 sm:w-full md:mb-0 mb-2">
                        <div class="md:row-start-1 row-span-1 md:flex">
                            <h1 class="text-white md:text-4xl text-2xl font-bold mx-4">Attendance Summary</h1>
                        </div>
                        <div class="md:row-start-2 row-span-1 md:flex pb-2 md:px-0 px-3">
                            <input type="text" class="md:w-2/12 w-full form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="searchBox"
                                placeholder="Search" />
                            <div date-rangepicker class="md:flex items-center">
                                <span class="md:mx-4 text-white"> Sort By:</span>
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
                                <span class="md:mx-4 text-white">to</span>
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
                        <div class="md:row-start-2 md:row-span-2 md:px-0 px-3">
                            <div class="md:flex  md:float-right ">
                                <button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    data-modal-toggle="upload-file">Upload</button>
                                <button
                                    class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none"
                                    onClick="printDataAttendanceSummary()">Print</button>
                            </div>
                        </div>
                    </div>

                    <div class="row-start-2 row-span-5 col-span-2">

                    <div class="overflow-x-auto relative  sm:rounded-lg">
                        <table id="attendanceSummaryTable"
                            class="w-full text-base text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                            <thead
                                class="text-sm text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Date">Date</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="TimeIn">Time In</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="TimeOut">Time Out
                                    </th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Late">Late</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Undertime">Undertime
                                    </th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Overtime">Overtime
                                    </th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="HoursRendered">Hours
                                        Rendered</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-900">

                            </tbody>
                            <tfoot
                                class="text-sm text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap">TOTAL</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap">110 hrs 08 hrs</th>
                                </tr>
                            </tfoot>
                        </table>

                        </div>
                        <div class="bg-transparent grid justify-center items-center mt-2 bg-white">
                            <nav aria-label="Page navigation example w-full">
                                <ul class="inline-flex -space-x-px">
                                    <li>
                                        <span href="#" id="prevButtonAttendanceSummary"
                                            class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</span>
                                    </li>
                                    <li>
                                        <span href="#"
                                            class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</span>
                                    </li>
                                    <li>
                                        <span href="#"
                                            class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</span>
                                    </li>
                                    <li>
                                        <span href="#" aria-current="page"
                                            class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</span>
                                    </li>
                                    <li>
                                        <span href="#"
                                            class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</span>
                                    </li>
                                    <li>
                                        <span href="#"
                                            class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</span>
                                    </li>
                                    <li>
                                        <span href="#" id="nextButtonAttendanceSummary"
                                            class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--END ATTENDANCE SUMMARY-->

            <div class="hide-show  px-5" id="history" style="display: none">
                <div class="py-2 bgcolor drop-shadow-md rounded-xl">
                    <div class="grid md:grid-rows-2 md:grid-flow-col grid-cols-1 sm:px-5 sm:w-full md:mb-0 mb-2">
                        <div class="md:row-start-1 row-span-1 md:flex">
                            <h1 class="text-white md:text-4xl text-2xl font-bold mx-4">Overtime History</h1>
                        </div>
                        <div class="md:row-start-2 row-span-1 md:flex pb-2 md:px-0 px-3">
                            <input type="text" class="md:w-2/12 w-full form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="searchBox"
                                placeholder="Search" />
                            <div date-rangepicker class="md:flex items-center">
                                <span class="md:mx-4 text-white"> Sort By:</span>
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
                                <span class="md:mx-4 text-white">to</span>
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

                    <div class="row-start-2 row-span-5 col-span-2">

                    <div class="overflow-x-auto relative  sm:rounded-lg">
                        <table class="w-full text-base text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                            <thead
                                class="text-sm text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="TimeIn">Target
                                        Overtime Date</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Date">Date Applied
                                    </th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="TimeOut">Overtime In
                                    </th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Late">Overtime Out
                                    </th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Undertime">Total OT
                                        Hours</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Undertime">Approved
                                        By</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="Overtime">Approval
                                        Date</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="HoursRendered">Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" class="text-gray-900">
                                    <td scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        September 21, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 19, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap font-bold text-orange-500">Pending</td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        September 15, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 16, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">06 : 05 pm</td>
                                    <td class="py-6 px-6 whitespace-nowrap">08 : 05 pm</td>
                                    <td class="py-6 px-6 whitespace-nowrap">02 hrs 00 mins</td>
                                    <td class="py-6 px-6 whitespace-nowrap">Kapitan Tiago</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 15, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap font-bold font-themecolor">Approved</td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        September 17, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 14, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">Kapitan Tiago</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 15, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap font-bold font-pantone"
                                        data-modal-toggle="denied-ot">Denied</td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        September 15, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 25, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">06 : 05 pm</td>
                                    <td class="py-6 px-6 whitespace-nowrap">08 : 05 pm</td>
                                    <td class="py-6 px-6 whitespace-nowrap">02 hrs 00 mins</td>
                                    <td class="py-6 px-6 whitespace-nowrap">Kapitan Tiago</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 25, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap font-bold font-themecolor">Approved</td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        September 11, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 15, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">06 : 05 pm</td>
                                    <td class="py-6 px-6 whitespace-nowrap">08 : 05 pm</td>
                                    <td class="py-6 px-6 whitespace-nowrap">02 hrs 00 mins</td>
                                    <td class="py-6 px-6 whitespace-nowrap">Kapitan Tiago</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 16, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap font-bold font-themecolor">Approved</td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        September 08, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 14, 20211</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">--</td>
                                    <td class="py-6 px-6 whitespace-nowrap">Kapitan Tiago</td>
                                    <td class="py-6 px-6 whitespace-nowrap">September 25, 2021</td>
                                    <td class="py-6 px-6 whitespace-nowrap font-bold font-pantone"
                                        data-modal-toggle="denied-ot">Denied</td>
                                </tr>
                            </tbody>
                            <tfoot
                                class="text-sm text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="w-full even:bg-gray-100 odd:bg-white-100">
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">TOTAL</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">06 hrs 00 mins</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">--</th>
                                    <th scope="col" class="py-3 px-6 whitespace-nowrap" data-sort="">--</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <div class="bg-transparent grid justify-center items-center mt-2 bg-white">
                        <nav aria-label="Page navigation example w-full">
                            <ul class="inline-flex -space-x-px">
                                <li>
                                    <span href="#" id="prevButtonAttendanceSummary"
                                        class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</span>
                                </li>
                                <li>
                                    <span href="#"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</span>
                                </li>
                                <li>
                                    <span href="#"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</span>
                                </li>
                                <li>
                                    <span href="#" aria-current="page"
                                        class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</span>
                                </li>
                                <li>
                                    <span href="#"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</span>
                                </li>
                                <li>
                                    <span href="#"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</span>
                                </li>
                                <li>
                                    <span href="#" id="nextButtonAttendanceSummary"
                                        class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--END overtime history-->

            <div class="grid bgcolor overflow-hidden rounded-lg py-10 px-10 my-32" id="profile" style="display:none">

                <div class="grid bg-transparent grid-rows-2 grid-flow-col sm:w-full">
                    <div class="row-start-1 row-span-1 flex">
                        <h1 class="text-white text-4xl font-bold px">Profile Information</h1>
                    </div>
                </div>
                <div class="grid grid-rows-4 grid-cols-6 gap-4">
                    <div class="row-start-1 row-span-2 col-span-2 justify-center flex items-center">
                        <img src="img\profilepic.png" class="w-2/6 rounded-full bordercolor bordercolor border-4 "
                            alt="Sample image" />
                    </div>
                    <div class="row-start-1 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Employee
                            No.</label>
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
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Email</label>
                        <input type="email" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Email" required="" value="crisostomo.ibarra@barbizonfashion.com" disabled>
                    </div>
                    <div class="row-start-3 col-span-2">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Job
                            Position</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Job Position" required="" value="New Barbizon Fashion Incorporation Sales"
                            disabled>
                    </div>
                    <div class="row-start-3 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Branch
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Branch Name" required="" value="RDS Bacolod" disabled>
                    </div>
                    <div class="row-start-3 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Chain
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Chain Name" required="" value="RDS" disabled>
                    </div>
                    <div class="row-start-3 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Company
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Company Name" required="" value="NBFI" disabled>
                    </div>
                    <div class="row-start-3 col-span-1">
                        <label for="text" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Brand
                            Name</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Brand Name" required="" value="Barbizon" disabled>
                    </div>
                    <div class="row-start-4 col-span-2">
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">RAS</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="RAS Name" required="" value="Ms. Revelyn Loyola" disabled>
                    </div>
                    <div class="row-start-4 col-span-2">
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">HR</label>
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
                        <label for="number" class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Date
                            Started</label>
                        <input datepicker type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select your birthdate" value="10/21/2006" disabled>
                    </div>
                    <div class="row-start-4 col-span-1">
                        <label for="text"
                            class="text-sm font-medium text-white block mb-2 dark:text-gray-300">Status</label>
                        <input type="text" name="mName" id="mName"
                            class="capitalized bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="HR Name" required="" value="Active" disabled>
                    </div>
                </div>
            </div>
            <!--end profile  -->

            <!-- Main modal -->
            <div id="denied-ot" aria-hidden="true"
                class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
                    <!-- Modal content -->
                    <div
                        class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-pantone">
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
                                    class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Approver
                                    Name: Capitan Tiago</label>
                                <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                            </div>
                            <div>
                                <label for="date"
                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date
                                    Applied:
                                    September 14, 2022</label>
                                <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                            </div>
                            <div>
                                <label for="date"
                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Denied Date:
                                    September 15, 2022</label>
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
                                            disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                        </form>
                    </div>
                </div>
            </div>

        <!-- Main modal -->
        <div id="authentication-modal" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative xl:w-2/5 sm:w-full xl:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 border-4 border-solid border-black">
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
                        action="{{ url('employee/send') }}">
                        {{ csrf_field() }}
                        <h3 class="text-2xl font-medium text-center text-gray-900 dark:text-white font-extrabold">
                            Filing Overtime</h3>

                        <div>
                            <label for="text"
                                class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name</label>
                            <input type="text" name="name" id="name"
                                class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="FirstName MiddleInitial LastName" required="">
                        </div>
                        <div class="relative ">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <label for="number"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Target OT
                                Date</label>
                            <input datepicker type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date" name="otdate" id="otdate">
                        </div>
                        <div>
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Duration</label>
                            <input type="text" name="otduration" id="otduration"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="(E.g 2hrs. and 30 minsearchBoxs)" required="" id="otduration">
                        </div>
                        <div>
                            <label for="date"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="fname.lname@gmail.com" required="" id="email">
                        </div>
                        <div hidden>
                            <label for="text"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Status</label>
                            <input type="text" name="status" id="status"
                                class="bg-gray-50  border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="pending" required="" readonly>
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-full">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label inline-block mb-2 text-gray-700 font-bold">Reason</label>
                                    <textarea
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlTextarea1" rows="8" placeholder="Your messge"
                                        name="otreason" id="otreason"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit"
                            class="w-full text-white bg-black hover:bg-white hover:text-black border-2 hover:border-black focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            name="send" value="Send" />
                    </form>
                </div>
            </div>
        </div>

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
                            <h1 class="text-2xl font-medium text-gray-900 dark:text-white font-extrabold text-center">
                                PROOF
                                OF ATTENDANCE / OVERTIME</h1>
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Upload file:</h3>

                            <div class="flex justify-center items-center w-full">
                                <label for="dropzone-file"
                                    class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">(PNG, IMG, JPEG, JPG, PDF)
                                        </p>
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


        </content>

    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="md:visible invisible inline-block p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase roun	-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5"
        id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
            </path>
        </svg>
    </button>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>

<script>
function showAttendanceSummary() {
    var x = document.getElementById("attendanceSummary");
    x.style.display = "block";
    hideDailyTimeRecord();
    hideOT();
    hideProfile();
}

function hideDailyTimeRecord() {
    var x = document.getElementById("dailyTimeRecord");
    x.style.display = "none";


}

function showDailyTimeRecord() {
    var x = document.getElementById("dailyTimeRecord");
    x.style.display = "block";

    hideAttendanceSummary();
    hideOT();
    hideProfile();
}

function hideAttendanceSummary() {
    var x = document.getElementById("attendanceSummary");
    x.style.display = "none";

}

function showOT() {
    var x = document.getElementById("history");
    x.style.display = "block";
    hideAttendanceSummary();
    hideDailyTimeRecord();
    hideProfile();
}

function hideOT() {
    var x = document.getElementById("history");
    x.style.display = "none";

}

function showProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "none") {
        x.style.display = "block";
        console.log("hide profile");
    }
    hideAttendanceSummary();
    hideDailyTimeRecord();
    hideOT();

}

function hideProfile() {
    var x = document.getElementById("profile");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function hideButton() {
    var x = document.getElementById("button-start");

    if (x.style.display === "none") {
        x.style.display = "block";
        time_in();
        console.log("Button - stop")
    } else {
        x.style.display = "none";

    }
    showButton();

}

function showButton() {
    var y = document.getElementById("button-stop");
    if (y.style.display === "block") {
        y.style.display = "none";
    } else {
        y.style.display = "block";
    }

}
//   if (y.style.display === "block") {
//     y.style.display = "none";
//   } else {
//     y.style.display = "block";
//   }

var cseconds = 00;
var ctens = 00;
var cminutes = 00;
var chours = 00;
var appendTens = document.getElementById("tens")
var appendSeconds = document.getElementById("seconds")
var appendMinutes = document.getElementById("minutes")
var appendHours = document.getElementById("hours")
var buttonStart = document.getElementById('button-start');
// var buttonStop = document.getElementById('button-stop');
var buttonReset = document.getElementById('button-reset');
var Interval;

buttonStart.onclick = function() {

    clearInterval(Interval);
    Interval = setInterval(startTimer, 10);
    time_in();

    if (buttonStart.value === "Check In") {
        buttonStart.value = "LB IN";
    } else if (buttonStart.value === "LB IN") {
        buttonStart.value = "LB OUT";
    } else if (buttonStart.value === "LB OUT") {
        buttonStart.value = "CB IN";
    } else if (buttonStart.value === "CB IN") {
        buttonStart.value = "CB OUT";
    } else if (buttonStart.value === "CB OUT") {
        buttonStart.value = "PM OUT";
    }

    // hideButton();

    //  document.getElementById("button-start").innerHTML = 'Check Out';
    //  document.getElementById("button-start").style.background='#AA0061';
}



function startTimer() {
    ctens++;

    if (ctens <= 9) {

        ctens = "0" + ctens;

    }

    // if (tens > 9){

    // 	tens = " " + tens
    // } 

    if (ctens > 99) {
        //   console.log("seconds");
        cseconds++;

        if (cseconds <= 9) {
            cseconds = "0" + cseconds;
        } else {
            cseconds = cseconds;
        }
        ctens = 0;
        ctens = "0" + 0;
    }

    if (cseconds == 0) {
        cseconds = "00"
    }
    if (cseconds > 60) {
        // console.log("minutes")
        cminutes++;
        if (cminutes <= 9) {
            cminutes = "0" + cminutes;
        } else {
            cminutes = cminutes;
        }

        cseconds = 0;
        cseconds = "0" + 0;
    }
    if (cminutes == 0) {
        cminutes = "00";
    }
    if (cminutes > 60) {
        // console.log("hours")
        chours++;
        if (chours <= 9) {
            chours = "0" + chours;
        } else {
            chours = chours;
        }
        cminutes = 0;
        cminutes = "0" + 0;
    }
    if (chours == 0) {
        chours = "00";
    }
    // console.log(hours + " : " + minutes + " : " + seconds + " : " + tens)
    document.getElementById('hours').innerHTML = chours + " : " + cminutes + " : " + cseconds + " : " + ctens;

}
var ctr = 1;

function time_in() {

    var rtClock = new Date();
    console.log(rtClock.toLocaleTimeString('PST'));


    var hours = rtClock.getHours();
    var minutes = rtClock.getMinutes();
    var seconds = rtClock.getSeconds();


    hours = ("0" + hours).slice(-2);
    minutes = ("0" + minutes).slice(-2);
    seconds = ("0" + seconds).slice(-2);

    var amPm = (hours <= 12) ? "AM" : "PM";
    hours = (hours > 12) ? hours - 12 : hours;
    if (ctr == 1) {

        document.getElementById('timedIn').innerHTML = rtClock.toLocaleTimeString('PST');
        document.getElementById('amIn').innerHTML =
            hours + " : " + minutes + " : " + seconds + " " + amPm;

        hours = parseInt(hours) + 9;

        timeAmPm = (hours <= 12 && amPm == "PM") ? "PM" : "AM";

        hours = (hours > 12) ? hours - 12 : hours;

        document.getElementById('time_out').innerHTML =
            hours + " : " + minutes + " : " + seconds + " " + timeAmPm;
        ctr = ctr + 1;
        console.log("AM In", ctr);
    } else if (ctr == 2) {
        document.getElementById('lbIn').innerHTML =
            hours + " : " + minutes + " : " + seconds + " " + amPm;
        ctr = ctr + 1;
    } else if (ctr == 3) {
        document.getElementById('lbOut').innerHTML =
            hours + " : " + minutes + " : " + seconds + " " + amPm;
        ctr = ctr + 1;
    } else if (ctr == 4) {
        document.getElementById('cbIn').innerHTML =
            hours + " : " + minutes + " : " + seconds + " " + amPm;
        ctr = ctr + 1;
    } else if (ctr == 5) {
        document.getElementById('cbOut').innerHTML =
            hours + " : " + minutes + " : " + seconds + " " + amPm;
        ctr = ctr + 1;
    } else if (ctr == 6) {
        document.getElementById('pmOut').innerHTML =
            hours + " : " + minutes + " : " + seconds + " " + amPm;
        console.log(chours + " : " + cminutes + " : " + cseconds);
        document.getElementById('duration').innerHTML =
            chours + " hours " + cminutes + " mins " + cseconds + " secs";
        clearInterval(Interval);
        chours = "00";
        cminutes = "00";
        chours = "00";
        document.getElementById('hours').innerHTML = chours + " : " + cminutes + " : " + cseconds + " : " + ctens;
        ctr = ctr + 1;

    }
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
// mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    //   var x = document.getElementById("history");
    //   if (x.style.display === "block") {
    //     x.style.display = "none";
    //   }

    //   var x = document.getElementById("attendanceSummary");
    //   if (x.style.display === "block") {
    //     x.style.display = "none";
    //   }
}

document.addEventListener('DOMContentLoaded', init, false);

let data, table, sortCol;
let sortAsc = false;
const pageSize = 6;
let curPage = 1;

respDTR = [{
        "Date": "September 16, 2021",
        "AM": "09 : 25 am",
        "LBIn": "01 : 47 am",
        "LBOut": "02 : 46 am",
        "CBIn": "05 : 10 pm",
        "CBOut": "05 : 35 pm",
        "PM": "06 : 34 pm",
        "Duration": "08 hrs 09 mins"
    },
    {
        "Date": "September 15, 2021",
        "AM": "09 : 28 am",
        "LBIn": "02 : 07 am",
        "LBOut": "03 : 05 am",
        "CBIn": "05 : 14 pm",
        "CBOut": "05 : 41 pm",
        "PM": "06 : 38 pm",
        "Duration": "08 hrs 10 mins"
    },
    {
        "Date": "September 14, 2021",
        "AM": "09 : 28 am",
        "LBIn": "02 : 07 am",
        "LBOut": "03 : 05 am",
        "CBIn": "05 : 14 pm",
        "CBOut": "05 : 41 pm",
        "PM": "06 : 38 pm",
        "Duration": "08 hrs 10 mins"
    },
    {
        "Date": "September 13, 2021",
        "AM": "12 : 15 am",
        "LBIn": "02 : 04 am",
        "LBOut": "03 : 01 am",
        "CBIn": "05 : 35 pm",
        "CBOut": "06 : 03 pm",
        "PM": "09 : 15 pm",
        "Duration": "08 hrs 00 mins"
    },
    {
        "Date": "September 11, 2021",
        "AM": "09 : 26 am",
        "LBIn": "01 : 29 am",
        "LBOut": "02 : 28 am",
        "CBIn": "05 : 00 pm",
        "CBOut": "05 : 26 pm",
        "PM": "06 : 34 pm",
        "Duration": "08 hrs 08 mins"
    },
    {
        "Date": "September 10, 2021",
        "AM": "09 : 26 am",
        "LBIn": "01 : 33 am",
        "LBOut": "02 : 29 am",
        "CBIn": "05 : 03 pm",
        "CBOut": "05 : 32 pm",
        "PM": "06 : 34 pm",
        "Duration": "08 hrs 08 mins"
    },
    {
        "Date": "September 09, 2021",
        "AM": "09 : 19 am",
        "LBIn": "02 : 31 am",
        "LBOut": "02 : 29 am",
        "CBIn": "05 : 05 pm",
        "CBOut": "05 : 33 pm",
        "PM": "06 : 34 pm",
        "Duration": "08 hrs 15 mins"
    },
    {
        "Date": "September 07, 2021",
        "AM": "09 : 24 am",
        "LBIn": "01 : 36 am",
        "LBOut": "02 : 35 am",
        "CBIn": "05 : 10 pm",
        "CBOut": "05 : 35 pm",
        "PM": "06 : 38 pm",
        "Duration": "08 hrs 14 mins"
    },
    {
        "Date": "September 06, 2021",
        "AM": "11 : 49 am",
        "LBIn": "02 : 06 am",
        "LBOut": "02 : 58 am",
        "CBIn": "06 : 07 pm",
        "CBOut": "06 : 20 pm",
        "PM": "09 : 02 pm",
        "Duration": "08 hrs 13 mins"
    },
    {
        "Date": "September 04, 2021",
        "AM": "09 : 27 am",
        "LBIn": "01 : 32 am",
        "LBOut": "02 : 29 am",
        "CBIn": "05 : 10 pm",
        "CBOut": "05 : 35 pm",
        "PM": "06 : 39 pm",
        "Duration": "08 hrs 12 mins"
    },
    {
        "Date": "September 03, 2021",
        "AM": "09 : 51 am",
        "LBIn": "01 : 44 am",
        "LBOut": "02 : 42 am",
        "CBIn": "05 : 15 pm",
        "CBOut": "05 : 44 pm",
        "PM": "06 : 39 pm",
        "Duration": "08 hrs 12 mins"
    },
    {
        "Date": "September 02, 2021",
        "AM": "09 : 51 am",
        "LBIn": "02 : 02 am",
        "LBOut": "02 : 55 am",
        "CBIn": "05 : 10 pm",
        "CBOut": "05 : 39 pm",
        "PM": "07 : 09 pm",
        "Duration": "08 hrs 18 mins"
    },
]

async function init() {
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "December"
    ];
    const y = new Date();
    const m = new Date();
    const d = new Date();
   
    let year = y.getFullYear();
    let month = months[m.getMonth()];
    let day = d.getDate();
   
    let todayDate = month + " " + day + ", " + year;
    document.getElementById('todayDate').innerHTML = todayDate;


    // Select the table (well, tbody)
    table = document.querySelector('#timeRecord tbody');
    // get the cats
    //   let resp = await fetch('https://www.raymondcamden.com/.netlify/functions/get-cats');
    //   data = await resp.json();
    console.log(respDTR);
    data = respDTR;
    renderTable();

    // listen for sort clicks
    document.querySelectorAll('#timeRecord thead tr th').forEach(t => {
        t.addEventListener('click', sort, false);
    });

    document.querySelector('#nextButton').addEventListener('click', nextPage, false);
    document.querySelector('#prevButton').addEventListener('click', previousPage, false);


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

    // Select the table (well, tbody)
    tableOvertimeHistory = document.querySelector('#otTable tbody');
    // get the cats
    //   let resp = await fetch('https://www.raymondcamden.com/.netlify/functions/get-cats');
    //   data = await resp.json();
    console.log(respOvertimeHistory);
    dataOvertimeHistory = respOvertimeHistory;
    renderTableOvertimeHistory();

    // listen for sort clicks
    document.querySelectorAll('#otTable thead tr th').forEach(t => {
        t.addEventListener('click', sortOvertimeHistory, false);
    });

    document.querySelector('#nextButtonOvertimeHistory').addEventListener('click', nextPageOvertimeHistory,
        false);
    document.querySelector('#prevButtonOvertimeHistory').addEventListener('click', previousPageOvertimeHistory,
        false);
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
     <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">${c.Date}</td>
     <td class="py-6 px-6 whitespace-nowrap">${c.AM}</td>
     <td class="py-6 px-6 whitespace-nowrap">${c.LBIn}</td>
     <td class="py-6 px-6 whitespace-nowrap">${c.LBOut}</td>
	 <td class="py-6 px-6 whitespace-nowrap">${c.CBIn}</td>
	 <td class="py-6 px-6 whitespace-nowrap">${c.CBOut}</td>
	 <td class="py-6 px-6 whitespace-nowrap">${c.PM}</td>
	 <td class="py-6 px-6 whitespace-nowrap">${c.Duration}</td>
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

//Attendance Summary

let dataAttendanceSummary, table1AttendanceSummary, sortColAttendanceSummary;
let sortAscAttendanceSummary = false;
const pageSizeAttendanceSummary = 10;
let curPageAttendanceSummary = 1;

respAttendanceSummary = [{
        "Date": "September 16, 2021",
        "TimeIn": "09 : 25 am",
        "TimeOut": "--",
        "Late": "--",
        "Undertime": "--",
        "Overtime": "--",
        "HoursRendered": "--"
    },
    {
        "Date": "September 15, 2021",
        "TimeIn": "09 : 25 am",
        "TimeOut": "06 : 34 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 09 mins"
    },
    {
        "Date": "September 14, 2021",
        "TimeIn": "09 : 28 am",
        "TimeOut": "06 : 38 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 10 mins"
    },
    {
        "Date": "September 13, 2021",
        "TimeIn": "12 : 15 am",
        "TimeOut": "09 : 15 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 00 mins"
    },
    {
        "Date": "September 11, 2021",
        "TimeIn": "09 : 26 am",
        "TimeOut": "06 : 34 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 08 mins"
    },
    {
        "Date": "September 10, 2021",
        "TimeIn": "09 : 26 am",
        "TimeOut": "06 : 34 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 08 mins"
    },
    {
        "Date": "September 09, 2021",
        "TimeIn": "09 : 19 am",
        "TimeOut": "06 : 34 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 15 mins"
    },
    {
        "Date": "September 07, 2021",
        "TimeIn": "09 : 24 am",
        "TimeOut": "06 : 38 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 14 mins"
    },
    {
        "Date": "September 06, 2021",
        "TimeIn": "11 : 49 am",
        "TimeOut": "09 : 02 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 13 mins"
    },
    {
        "Date": "September 04, 2021",
        "TimeIn": "09 : 27 am",
        "TimeOut": "06 : 39 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 12 mins"
    },
    {
        "Date": "September 03, 2021",
        "TimeIn": "09 : 27 am",
        "TimeOut": "06 : 39 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 12 mins"
    },
    {
        "Date": "September 02, 2021",
        "TimeIn": "09 : 51 am",
        "TimeOut": "07 : 39 pm",
        "Late": "0",
        "Undertime": "0",
        "Overtime": "0",
        "HoursRendered": "08 hrs 12 mins"
    }
]


function renderTableAttendanceSummary() {
    // create html
    let result = '';
    dataAttendanceSummary.filter((row, index) => {
        let start = (curPageAttendanceSummary - 1) * pageSizeAttendanceSummary;
        let end = curPageAttendanceSummary * pageSizeAttendanceSummary;
        if (index >= start && index < end) return true;
    }).forEach(c => {
        result += `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
     <td scope="row" class="py-5 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">${c.Date}</td>
     <td class="py-5 px-6 whitespace-nowrap">${c.TimeIn}</td>
     <td class="py-5 px-6 whitespace-nowrap">${c.TimeOut}</td>
     <td class="py-5 px-6 whitespace-nowrap">${c.Late}</td>
	 <td class="py-5 px-6 whitespace-nowrap">${c.Undertime}</td>
	 <td class="py-5 px-6 whitespace-nowrap">${c.Overtime}</td>
	 <td class="py-5 px-6 whitespace-nowrap">${c.HoursRendered}</td>
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

//Attendance Summary

let dataOvertimeHistory, tableOvertimeHistory, sortColOvertimeHistory;
let sortAscOvertimeHistory = false;
const pageSizeOvertimeHistory = 11;
let curPageOvertimeHistory = 1;

respOvertimeHistory = [{
        "DateApplied": "September 21, 2021",
        "TargetOvertimeDate": "September 19, 2021",
        "OvertimeIn": "09 : 05 am",
        "OvertimeOut": "--",
        "TotalOtHours": "--",
        "ApprovedBy": "--",
        "ApprovalDate": "--",
        "Status": "Pending"
    },
    {
        "DateApplied": "September 16, 2021",
        "TargetOvertimeDate": "September 18, 2021",
        "OvertimeIn": "06 : 05 pm",
        "OvertimeOut": "08 : 05 pm",
        "TotalOtHours": "02 hrs 00 mins",
        "ApprovedBy": "Maria D. Clara",
        "ApprovalDate": "September 15, 2021",
        "Status": "Approved"
    },
    {
        "DateApplied": "September 14, 2021",
        "TargetOvertimeDate": "September 17, 2021",
        "OvertimeIn": "--",
        "OvertimeOut": "--",
        "TotalOtHours": "--",
        "ApprovedBy": "Maria D. Clara",
        "ApprovalDate": "September 15, 2021",
        "Status": "Denied"
    },
    {
        "DateApplied": "September 25, 2021",
        "TargetOvertimeDate": "September 15, 2021",
        "OvertimeIn": "06 : 05 pm",
        "OvertimeOut": "08 : 05 pm",
        "TotalOtHours": "02 hrs 00 mins",
        "ApprovedBy": "Padre Damaso",
        "ApprovalDate": "September 25, 2021",
        "Status": "Approved"
    },
    {
        "DateApplied": "September 15, 2021",
        "TargetOvertimeDate": "September 11, 2021",
        "OvertimeIn": "06 : 05 pm",
        "OvertimeOut": "08 : 05 pm",
        "TotalOtHours": "02 hrs 00 mins",
        "ApprovedBy": "Maria D. Clara",
        "ApprovalDate": "September 16, 2021",
        "Status": "Approved"
    },
    {
        "DateApplied": "September 14, 2021",
        "TargetOvertimeDate": "September 08, 2021",
        "OvertimeIn": "--",
        "OvertimeOut": "--",
        "TotalOtHours": "--",
        "ApprovedBy": "Maria D. Clara",
        "ApprovalDate": "September 18, 2021",
        "Status": "Denied"
    },

]


function renderTableOvertimeHistory() {
    // create html
    let result = '';
    dataOvertimeHistory.filter((row, index) => {
        let start = (curPageOvertimeHistory - 1) * pageSizeOvertimeHistory;
        let end = curPageOvertimeHistory * pageSizeOvertimeHistory;
        if (index >= start && index < end) return true;
    }).forEach(c => {
        result += `<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
     <td class="py-5 w-2/6">${c.DateApplied}</td>
     <td class="py-5 w-2/6">${c.TargetOvertimeDate}</td>
     <td class="py-5 w-2/6">${c.OvertimeIn}</td>
     <td class="py-5 w-2/6">${c.OvertimeOut}</td>
	 <td class="py-5 w-2/6">${c.TotalOtHours}</td>
	 <td class="py-5 w-2/6">${c.ApprovedBy}</td>
	 <td class="py-5 w-2/6">${c.ApprovalDate}</td>
     <td class="py-5 w-2/6 font-bold" data-modal-toggle="denied-ot">${c.Status}</td>`

        if (c.Status == "Approved") {
            `<td class="py-5 w-2/6 font-bold font-themecolor">${c.Status}</td>`
            console.log("Approved Status");
        } else if (c.Status == "Denied") {
            `<td class="py-5 w-2/6 font-bold font-pantone">${c.Status}</td>`
            console.log("Denied Status");
        } else {
            `<td class="py-5 w-2/6 font-bold text-orange-500">${c.Status}</td>`
            console.log("Pending Status");
        }

        `
     </tr>`;
    });
    tableOvertimeHistory.innerHTML = result;
}

function sortOvertimeHistory(e) {
    let thisSort = e.target.dataset.sortOvertimeHistory;
    if (sortColOvertimeHistory === thisSort) sortAscOvertimeHistory = !sortAscOvertimeHistory;
    sortColOvertimeHistory = thisSort;
    console.log('sort dir is ', sortAscOvertimeHistory);
    dataOvertimeHistory.sortOvertimeHistory((a, b) => {
        if (a[sortColOvertimeHistory] < b[sortColOvertimeHistory]) return sortAscOvertimeHistory ? 1 : -1;
        if (a[sortColOvertimeHistory] > b[sortColOvertimeHistory]) return sortAscOvertimeHistory ? -1 : 1;
        return 0;
    });
    renderTableOvertimeHistory();
}

function previousPageOvertimeHistory() {
    if (curPageOvertimeHistory > 1) curPageOvertimeHistory--;
    renderTableOvertimeHistory();
}

function nextPageOvertimeHistory() {
    if ((curPageOvertimeHistory * pageSizeOvertimeHistory) < dataOvertimeHistory.length)
        curPageOvertimeHistory++;
    renderTableOvertimeHistory();
}

// declare elements
const searchBox = document.getElementById('searchBox');
const tableSearchAttendanceSummary = document.getElementById("attendanceSummaryTable");
const trs = tableSearchAttendanceSummary.tBodies[0].getElementsByTagName("tr");

// add event listener to search box
searchBox.addEventListener('keyup', performSearch);


// declare elements
const searchOT = document.getElementById('searchOT');
const tableSearchotTable = document.getElementById("otTable");
const trsOT = tableSearchotTable.tBodies[0].getElementsByTagName("tr");

// add event listener to search box
searchOT.addEventListener('keyup', performSearchOT);


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

function performSearchOT() {

    // Declare search string 
    var filter = searchOT.value.toUpperCase();

    // Loop through first tbody's rows
    for (var rowI = 0; rowI < trsOT.length; rowI++) {

        // define the row's cells
        var tds = trsOT[rowI].getElementsByTagName("td");
        // hide the row
        trsOT[rowI].style.display = "none";

        // loop through row cells
        for (var cellI = 0; cellI < tds.length; cellI++) {

            // if there's a match
            if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

                // show the row
                trsOT[rowI].style.display = "";

                // skip to the next row
                continue;

            }
        }
    }

}

function printDataTimeRecord() {
    var divToPrint = document.getElementById("timeRecord");
    newWin = window.open("", "", "width=1200,height=900");
    newWin.document.write(divToPrint.outerHTML);
    newWin.document.close();
    newWin.focus();
    newWin.print();
    newWin.close();
}

function printDataAttendanceSummary() {
    var divToPrint = document.getElementById("attendanceSummaryTable");
    newWin = window.open("", "", "width=1200,height=900");
    newWin.document.write(divToPrint.outerHTML);
    newWin.document.close();
    newWin.focus();
    newWin.print();
    newWin.close();
}
</script>