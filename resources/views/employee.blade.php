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
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
</head>

<body class="xl:flex">
    <!-- component -->
	<div class="md:flex flex-col md:flex-row md:min-h-screen xl:w-2/12">
	<sidebar @click.away="open = false" class="flex flex-col w-full xl:h-screen sticky top-0 text-gray-700 bg-white flex-shrink-0  overflow-hidden" x-data="{ open: false }">
		<div class="flex-shrink-0 px-8 py-4 flex flex-row">
			<button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
			<img src="img\logo.png" class="w-56 rounded-full bordercolor bordercolor border-4 "
				alt="Sample image"/>
				<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
				<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
				<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</button>
		</div>
		<nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block  items-center justify-between">
			<div class="flex justify-center">
				<img src="img\profilepic.png" class="w-56 rounded-full bordercolor bordercolor border-4 "
				alt="Sample image"/>
			</div>
			<!-- <img src="img\profilepic.png" class="w-56 rounded-full bordercolor bordercolor border-4 "
			alt="Sample image"/>
					<h1 class="text-center text-2xl break-words font-bold xl:mt-9 font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">CRISOSTOMO IBARRA</h1>
					<h1 class="text-center text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">NBFI Sales</h1>
					<div class="basis-1 px-5 grid">
						<div class="flex-none w-full text-left xl:mt-20 tracking-wide leading-loose">
							<p><span class="font-bold">ID NO. : </span><br>0000-0001</p>
							<p><span class="font-bold">CONTACT NUMBER : </span><br>09123456789</p>
							<p><span class="font-bold">EMAIL : </span><br>crisostomo.ibarra@barbizonfashion.com</p>
							<p><span class="font-bold">BRANCH : </span><br>SM Bicutan</p>
							<p><span class="font-bold">CHAIN : </span><br>SM Department Store</p>
							<p><span class="font-bold">BIRTHDAY : </span><br>January 12, 1995</p>
						</div>
						
						<a href="/" class="flex items-center justify-center">
							<button class="border-xl bordercolor border-4 rounded-xl px-2 py-1 mt-24 font-bold font-themecolor focus:outline-none">Log Out</button></a>
					</div> -->
					
			<div class="overflow-y-auto py-4 px-3 rounded dark:bg-gray-800">
				<ul class="space-y-2">
					<li>
						<a href="#" class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<!-- <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg> -->
						<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900  dark:group-hover:text-white" viewBox="0 0 512 512"><path d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
						<span class="flex-1 ml-3 whitespace-nowrap">Home</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg> -->
						<svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" x="48" y="80" width="416" height="384" rx="48"/><circle cx="296" cy="232" r="24"/><circle cx="376" cy="232" r="24"/><circle cx="296" cy="312" r="24"/><circle cx="376" cy="312" r="24"/><circle cx="136" cy="312" r="24"/><circle cx="216" cy="312" r="24"/><circle cx="136" cy="392" r="24"/><circle cx="216" cy="392" r="24"/><circle cx="296" cy="392" r="24"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M464 160H48"/></svg>
						<span class="flex-1 ml-3 whitespace-nowrap">Attendance Summary</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg> -->
						<svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 employesvg text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><path d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0116 16v288a16 16 0 01-16 16c-128 0-177.45 25.81-208 64-30.37-38-80-64-208-64-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0116-16c131.57.59 192 32.84 208 96zM256 160v288" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
						<span class="flex-1 ml-3 whitespace-nowrap">OT History</span>
						<!-- <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span> -->
						</a>
					</li>
					<li>
						<a href="/" class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg> -->
						<!-- <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><title>Salary History</title><path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg> -->
						<svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><rect x="48" y="144" width="416" height="288" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M411.36 144v-30A50 50 0 00352 64.9L88.64 109.85A50 50 0 0048 159v49" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M368 320a32 32 0 1132-32 32 32 0 01-32 32z"/></svg>
						<span class="flex-1 ml-3 whitespace-nowrap">Salary History</span>
						</a>
					</li>
					<li>
						<a href="/" class="flex items-center employesidebar p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg> -->
						<svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
					</svg><span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
						</a>
					</li>
					<!-- <li>
						<a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
						<span class="flex-1 ml-3 whitespace-nowrap">Users</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
						<span class="flex-1 ml-3 whitespace-nowrap">Products</span>
						</a>
					</li> -->
					
					<!-- <li>
						<a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
						<span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
						</a>
					</li> -->
				</ul>
				<!-- <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
					<li>
						<a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
						<svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white dark:text-gray-400" focusable="false" data-prefix="fas" data-icon="gem" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"></path></svg>
						<span class="ml-4">Upgrade to Pro</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
						<span class="ml-3">Documentation</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
						<span class="ml-3">Components</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
						<span class="ml-3">Help</span>
						</a>
					</li>
				</ul> -->
			</div>
		</nav>
	</sidebar>
	</div>

	<content class="xl:w-10/12 sm:w-full px-10">
			<div class="grid md:grid-flow-row grid-rows-2 grid-cols-4 ">
				<div class="row-start-1 row-span-1 pt-2 drop-shadow-md">
					<div class="bg-gray-400 rounded-lg px-2 py-5 text-white text-center">
						<h1 class="font-bold">Worked Hour Today</h1>
						<!-- <div class="countdown font-mono text-2xl" id="tens"></div> -->
						<p><span id="hours" class="countdown font-mono text-2xl"> 00 : 00 : 00 : 00  </span></p>
					</div>
				</div>
				<div class="row-start-2 row-span-1 pt-3 drop-shadow-md">
					<div class="bg-green-500 rounded-lg  py-5 text-center text-white">
						<h1 class="font-bold">Timed In Today</h1>
						<span class="countdown font-mono text-2xl" id="timedIn">
						00 : 00 : 00
						</span>
					</div>
				</div>
				<div class="row-start-1 row-span-2 col-span-3 pt-2 pl-5 drop-shadow-md">
					<div class="flex h-full bg-white rounded-lg px-2 py-2 grid md:grid-flow-row grid-rows-2 grid-cols-4">
						<div class="row-start-1 col-span-1 text-center pl-5">
							<h1 class="text-6xl font-bold text-gray-700">Summary</h1>
							<h2 class="text-lg font-bold text-gray-700">SEPTEMBER 2022</h2>
						</div>
						<div class="row-start-1  col-span-3 flex items-center ">
						<a href='#attendanceSummary'><button class="border-2 border-solid bordercolor rounded-2xl px-2 py-2 font-themecolor ml-16" onClick="hideShow()">View More </button></a>
						</div>
						
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Late</h1>
							<h2 class="text-3xl">0 mins</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Undertime</h1>
							<h2 class="text-3xl">0 mins</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Overtime</h1>
							<h2 class="text-3xl">00 hrs 00 mins</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg font-bold">Hours Rendered</h1>
							<h2 class="text-3xl">110 hrs 08 mins</h2>
						</div>
					</div>
				</div>
			</div><!--1st Grid-->

			<div class="grid md:grid-flow-row grid-row-6 grid-cols-4 pt-2 pb-5 drop-shadow-md">
				<div class="row-start-1 row-span-1 pt-1">
					<div class="bg-red-500  rounded-lg px-2 py-5 text-white text-center">
						<h1 class="font-bold">Estimated Time Out</h1>
						<span class="countdown font-mono text-2xl" id = "time_out">
							00 : 00 : 00
						</span>
					</div>
				</div>
				<div class="row-start-2 row-span-1">
					<div class="bg-white rounded-lg py-5 text-center text-white space-x-4">
						<h1 class="text-gray-700 text-4xl font-bold">FILING OT</h1>
						<button class="border-2 rounded-2xl text-xl bordercolor font-themecolor py-1 px-2 mt-1 hover:bg-gray-100 focus:outline-none" data-modal-toggle="authentication-modal">File OT<button>
						<!-- <a href="#history"><button class="border-2 rounded-2xl text-xl bordercolor font-themecolor py-1 px-2 mt-1 hover:bg-gray-100 focus:outline-none" onClick="showOT()">History<button></a> -->
					</div>
				</div>
				<div class="row-start-3 row-span-4 bg-white drop-shadow-md rounded-2xl px-3 py-2 text-center text-white overflow-hidden">
					<h1 class="text-gray-700 text-6xl font-bold px">TODAY</h1>
					<h1 class="text-gray-700 text-xl font-bold">SEPTEMBER 21, 2022</h1>
					<div class="grid place-content-center">
					<button class="border-4 rounded-2xl text-xl bordercolor font-themecolor py-2 px-2 my-2 focus:outline-none" id="button-start">Check In<button>
					<button class="border-4 rounded-2xl text-xl border-pantone font-pantone py-2 px-2 my-2 hidden focus:outline-none" id="button-stop" onClick="hideButton()">Check Out<button>
					</div>
					<table class="table-fixed w-full content-center text-left text-gray-700 border-separate border-spacing-2">
						<tr>
							<th>A.M. IN :</th>
							<th class="font-medium">08:00 am</th>
						</tr>
						<tr>
							<th>A.M. OUT :</th>
							<th class="font-medium">12:00 am</th>
						</tr>
						<tr>
							<th>P.M. IN :</th>
							<th class="font-medium">01:00 pm</th>
						</tr>
						<tr>
							<th>COFFEE IN :</th>
							<th class="font-medium">04:00 pm</th>
						</tr>
						<tr>
							<th>COFFEE OUT :</th>
							<th class="font-medium">04:20 pm</th>
						</tr>
						<tr>
							<th>P.M. OUT :</th>
							<th class="font-medium">06:30 pm</th>
						</tr>
						<tr>
							<th>DURATION :</th>
							<th class="font-medium">10 hrs 30 mins</th>
						</tr>
					</table>
				</div><!--Card CHECK IN-->

				<div class="row-start-1 row-span-6 col-span-3 pl-5 pt-1 drop-shadow-md">
					<div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full bgcolor rounded-t-lg">
						<div class="row-start-1 row-span-1 flex">
							<h1 class="text-white text-4xl font-bold px">Daily Time Record</h1>
						</div>
						<div class="row-start-2 row-span-1 flex">
						<span class="text-white mt-2"> Sort By:</span>
						<div date-rangepicker class="flex items-center pl-5">
							<div class="relative">
								
								<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

									<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
								
								<input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
							</div>
							<span class="mx-4 text-gray-500">to</span>
							<div class="relative">
								<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
									<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
								<input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
							</div>
							</div>
						</div>
						<div class="row-start-2 row-span-2">
							<div class="flex  float-right">
								<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="print">Upload</button>
								<!-- <a href="#history"><button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" onClick="showOT()">OT History</button></a> -->
								<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="print">Print</button>
							</div>
						</div>
					</div>
						<div class="row-start-2 row-span-5 col-span-2">
							<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
								<thead class="bg-gray-100 flex text-gray w-full">
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<th class="p-4 w-2/6">Date</th>
										<th class="p-4 w-2/6">A.M. In</th>
										<th class="p-4 w-2/6">A.M. Out</th>
										<th class="p-4 w-2/6">P.M. IN</th>
										<th class="p-4 w-2/6">COFFEE IN</th>
										<th class="p-4 w-2/6">COFEE OUT</th>
										<th class="p-4 w-2/6">P.M. OUT</th>
										<th class="p-4 w-2/6">DURATION</th>
									</tr>
								</thead>
								<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 55vh;">
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 16, 2021</td>
										<td class="py-4 w-2/6">09 : 34 am</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 15, 2021</td>
										<td class="py-4 w-2/6">09 : 25 am</td>
										<td class="py-4 w-2/6">01 : 47 am</td>
										<td class="py-4 w-2/6">02 : 46 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 09 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 14, 2021</td>
										<td class="py-4 w-2/6">09 : 28 am</td>
										<td class="py-4 w-2/6">02 : 07 am</td>
										<td class="py-4 w-2/6">03 : 05 am</td>
										<td class="py-4 w-2/6">05 : 14 pm</td>
										<td class="py-4 w-2/6">05 : 41 pm</td>
										<td class="py-4 w-2/6">06 : 38 pm</td>
										<td class="py-4 w-2/6">09 hrs 10 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 13, 2021</td>
										<td class="py-4 w-2/6">12 : 15 am</td>
										<td class="py-4 w-2/6">02 : 04 am</td>
										<td class="py-4 w-2/6">03 : 01 am</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 03 pm</td>
										<td class="py-4 w-2/6">09 : 15 pm</td>
										<td class="py-4 w-2/6">9 hrs 00 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 11, 2021</td>
										<td class="py-4 w-2/6">09 : 26 am</td>
										<td class="py-4 w-2/6">01 : 29 am</td>
										<td class="py-4 w-2/6">02 : 28 am</td>
										<td class="py-4 w-2/6">05 : 00 pm</td>
										<td class="py-4 w-2/6">05 : 26 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 08 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 10, 2021</td>
										<td class="py-4 w-2/6">09 : 26 am</td>
										<td class="py-4 w-2/6">01 : 33 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 03 pm</td>
										<td class="py-4 w-2/6">05 : 32 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 08 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 09, 2021</td>
										<td class="py-4 w-2/6">09 : 19 am</td>
										<td class="py-4 w-2/6">02 : 31 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 05 pm</td>
										<td class="py-4 w-2/6">05 : 33 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 15 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 07, 2021</td>
										<td class="py-4 w-2/6">09 : 24 am</td>
										<td class="py-4 w-2/6">01 : 36 am</td>
										<td class="py-4 w-2/6">02 : 35 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 38 pm</td>
										<td class="py-4 w-2/6">09 hrs 14 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 06, 2021</td>
										<td class="py-4 w-2/6">11 : 49 am</td>
										<td class="py-4 w-2/6">02 : 06 am</td>
										<td class="py-4 w-2/6">02 : 58 am</td>
										<td class="py-4 w-2/6">06 : 07 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">09 : 02 pm</td>
										<td class="py-4 w-2/6">09 hrs 13 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 04, 2021</td>
										<td class="py-4 w-2/6">09 : 27 am</td>
										<td class="py-4 w-2/6">01 : 32 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 39 pm</td>
										<td class="py-4 w-2/6">09 hrs 12 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 03, 2021</td>
										<td class="py-4 w-2/6">09 : 51 am</td>
										<td class="py-4 w-2/6">01 : 44 am</td>
										<td class="py-4 w-2/6">02 : 42 am</td>
										<td class="py-4 w-2/6">05 : 15 pm</td>
										<td class="py-4 w-2/6">05 : 44 pm</td>
										<td class="py-4 w-2/6">06 : 39 pm</td>
										<td class="py-4 w-2/6">9 hrs 12 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 02, 2021</td>
										<td class="py-4 w-2/6">09 : 51 am</td>
										<td class="py-4 w-2/6">02 : 02 am</td>
										<td class="py-4 w-2/6">02 : 55 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 39 pm</td>
										<td class="py-4 w-2/6">07 : 09 pm</td>
										<td class="py-4 w-2/6">09 hrs 18 mins</td>
									</tr>
								</tbody>
							</table> <!--Table div end-->
						</div><!--Daily Time Record end-->
					</div>
					
				</div><!--tABLE GRID END-->
			</div><!--2nd Grid-->

<div class="grid bg-transparent overflow-auto rounded-lg drop-shadow-md hide-show py-5 " id="attendanceSummary" style="display: none">
<a href="bottom"></a>
    <div class="grid bgcolor rounded-lg grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold">Attendance Summary</h1>
        </div>
		<div class="row-start-2 row-span-1 flex">
		<span class="text-white"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
			<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
				<button id="dropdownDefault" data-dropdown-toggle="dropdown" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none ml-5 mt-2 text-center inline-flex items-center" type="button">Duration<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
				<!-- Dropdown menu -->
				<div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
					<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Weekly</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monthly</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Annually</a>
					</li>
					</ul>
				</div>
		</div>
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<a href="#history"><button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" onClick="showOT()">OT History</button></a>
				<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="printSummary">Print</button>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full">
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
		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 70vh;">
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
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<td class="py-4 w-2/6">September 01, 2021</td>
				<td class="py-4 w-2/6">09 : 51 am</td>
				<td class="py-4 w-2/6">07 : 39 pm</td>
				<td class="py-4 w-2/6">0</td>
				<td class="py-4 w-2/6">0</td>
				<td class="py-4 w-2/6">0</td>
				<td class="py-4 w-2/6">09 hrs 12 mins</td>
			</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full pr-4">
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
    </div>
</div><!--end attendance summary-->

<div class="grid bg-transparent overflow-auto drop-shadow-md py-5 " id="history" style="display:none">
<div class="grid bgcolor  rounded-lg grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
			<div class="row-start-1 row-span-1 flex">
				<h1 class="text-white text-4xl font-bold px">Overtime History</h1>

			</div>
			<div class="row-start-2 row-span-1 flex items-center">
				<div class="xl:w-96 xl:h-46">
					<input type="search" class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border-2 border-solid bordercolor transition ease-in-out
						m-0 focus:text-gray-700 focus:bg-white focus:border-white focus:outline-none rounded-xl" id="exampleSearch" placeholder="Search"/>
				</div>
				<span class="text-white ml-5 h-10 mb-3"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
				<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
			</div>
			<div class="row-start-2 row-span-2">
				<div class="flex  float-right">
					<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="authentication-modal">File Overtime</button>
				</div>
			</div>
		</div>
  <div>
	<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full pr-5">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 w-2/6">Overtime Date</th>
				<th class="p-4 w-2/6">Date Applied</th>
				<th class="p-4 w-2/6">Overtime In</th>
				<th class="p-4 w-2/6">Overtime Out</th>
				<th class="p-4 w-2/6">Total OT Hours</th>
				<th class="p-4 w-2/6">Approved By</th>
				<th class="p-4 w-2/6">Approval Date</th>
				<th class="p-4 w-2/6">Status</th>
			</tr>
		</thead>
		<tbody class="bg-grey-light flex flex-col overflow-y-scroll w-full" style="height: 70vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 19, 2021</td>
			<td class="py-4 w-2/6">September 21, 2021</td>
			<td class="py-4 w-2/6">09 : 05 am</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6 font-bold text-orange-500">Pending</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 18, 2021</td>
			<td class="py-4 w-2/6">September 16, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 15, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 17, 2021</td>
			<td class="py-4 w-2/6">September 14, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 15, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 15, 2021</td>
			<td class="py-4 w-2/6">September 25, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">September 25, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 11, 2021</td>
			<td class="py-4 w-2/6">September 15, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 16, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 08, 2021</td>
			<td class="py-4 w-2/6">September 14, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 18, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 05, 2021</td>
			<td class="py-4 w-2/6">September 17, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">September 13, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">September 03, 2021</td>
			<td class="py-4 w-2/6">September 01, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">September 02, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 27, 2021</td>
			<td class="py-4 w-2/6">August 16, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">September 18, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 18, 2021</td>
			<td class="py-4 w-2/6">August 16, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">August 16, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 18, 2021</td>
			<td class="py-4 w-2/6">August 16, 2021</td>
			<td class="py-4 w-2/6">06 : 05 pm</td>
			<td class="py-4 w-2/6">08 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">August 16, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 13, 2021</td>
			<td class="py-4 w-2/6">August 09, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">August 11, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 11, 2021</td>
			<td class="py-4 w-2/6">August 09, 2021</td>
			<td class="py-4 w-2/6">6 : 05 pm</td>
			<td class="py-4 w-2/6">8 : 05 pm</td>
			<td class="py-4 w-2/6">02 hrs 00 mins</td>
			<td class="py-4 w-2/6">Maria D. Clara</td>
			<td class="py-4 w-2/6">August 09, 2021</td>
			<td class="py-4 w-2/6 font-bold font-themecolor">Approved</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6">August 09, 2021</td>
			<td class="py-4 w-2/6">August 09, 2021</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">--</td>
			<td class="py-4 w-2/6">Padre Damaso</td>
			<td class="py-4 w-2/6">August 10, 2021</td>
			<td class="py-4 w-2/6 font-bold font-pantone" data-modal-toggle="denied-ot">Denied</td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full pr-4">
			<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
				<th class="p-4 w-2/6">TOTAL</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">16 hrs 00 hrs</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
				<th class="p-4 w-2/6">--</th>
			</tr>
		</tfoot>
	</table>
    </div>
 </div><!--end attendance summary  -->

  <!-- Main modal -->
<div id="denied-ot" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/3 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="denied-ot">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">OVERTIME REQUEST DENIED!</h3>
                   
					<div>
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Applicant Name: Maria M. Clara</label>
                        <!-- <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled> -->
                    </div>
					<div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date Applied: September 21, 2022</label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
                    <div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Overtime Date: September 22, 2022</label>
                        <!-- <input type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Birthdate" required=""> -->
                    </div>
					<div>
					<div class="flex justify-center">
						<div class="mb-3 xl:w-full">
							<label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">Reason</label>
									<textarea
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
							id="exampleFormControlTextarea1"
							rows="8"
							placeholder="Your messge" disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in finibus enim. Phasellus nec dolor scelerisque, scelerisque sapien quis, viverra elit. Vestibulum vel aliquet nibh. Vivamus quis blandit est. Nullam id posuere velit, sed molestie justo. 
                            Aenean commodo faucibus purus, nec ullamcorper urna venenatis sed. Nunc aliquam viverra tellus eget gravida. In vel malesuada lacus. Mauris mattis eros id est egestas sollicitudin. Duis eu purus sapien. Nullam ut quam vitae diam egestas vulputate non eu tellus.</textarea>
									</div>
								</div>
						</div>
                    <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                </form>
            </div>
        </div>
    </div>

	 <!-- Main modal -->
	 <div id="printSummary" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bgcolor rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="printSummary">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                
					<a href="bottom"></a>
						<div class="grid bgcolor rounded-lg grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
							<div class="row-start-1 row-span-1 flex">
								<h1 class="text-white text-4xl font-bold">Attendance Summary</h1>
							</div>
							<div class="row-start-2 row-span-1 flex">
							<span class="text-white"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
								<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
									<button id="dropdownDefault" data-dropdown-toggle="dropdown" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none ml-5 mt-2 text-center inline-flex items-center" type="button">Duration<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
									<!-- Dropdown menu -->
									<div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
										<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
										<li>
											<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Weekly</a>
										</li>
										<li>
											<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monthly</a>
										</li>
										<li>
											<a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Annually</a>
										</li>
										</ul>
									</div>
							</div>
							<div class="row-start-2 row-span-2">
								<div class="flex  float-right">
									<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="printSummary">Print</button>
								</div>
							</div>
						</div>
						<div>
						<table class="text-center w-full bg-white rounded-lg hover:table-fixed " >
						<thead class="bg-gray-100 flex text-gray w-full">
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
							<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 70vh;">
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
								<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
									<td class="py-4 w-2/6">September 01, 2021</td>
									<td class="py-4 w-2/6">09 : 51 am</td>
									<td class="py-4 w-2/6">07 : 39 pm</td>
									<td class="py-4 w-2/6">0</td>
									<td class="py-4 w-2/6">0</td>
									<td class="py-4 w-2/6">0</td>
									<td class="py-4 w-2/6">09 hrs 12 mins</td>
								</tr>
							</tbody>
							<tfoot class="bg-gray-100 flex text-gray w-full pr-4">
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
						</div>
            </div>
        </div>
    </div> 
 <!-- Main modal -->
 <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-3/5 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-3 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Filing OT</h3>
                   
					<div>
                        <label for="text" class="capitalized text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name</label>
                        <input type="text" name="name" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="FirstName MiddleInitial LastName" required="" disabled>
                    </div>
					<div class="relative ">
						<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
									<svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
								<label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Target OT Date</label>
								<input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
						</div>
					<div>
                        <label for="date" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Duration</label>
                        <input type="text" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="(E.g 2hrs. and 30 mins)" required="">
                    </div>
					<div>
					<div class="flex justify-center">
						<div class="mb-3 xl:w-full">
							<label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">Reason</label>
									<textarea
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
							id="exampleFormControlTextarea1"
							rows="8"
							placeholder="Your messge"></textarea>
									</div>
								</div>
						</div>
                    <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                </form>
            </div>
        </div>
    </div> 

	  <!-- Main modal -->
<div id="print" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative xl:w-2/3 sm:w-full xl:px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bgcolor rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="print">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                
					<div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full bgcolor rounded-t-lg">
						<div class="row-start-1 row-span-1 flex">
							<h1 class="text-white text-4xl font-bold px">Daily Time Record</h1>
						</div>
						<div class="row-start-2 row-span-1 flex">
						<span class="text-white"> Sort By: <input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
							<input type="date" class="bg-white font-themecolor px-3 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
						</div>
						<div class="row-start-2 row-span-2">
							<div class="flex  float-right">
								<button class="px-1 py-1 bg-white font-themecolor border-2 border-white mt-2 mr-3 rounded-lg hover:bg-transparent hover:text-white focus:outline-none" data-modal-toggle="print">Print</button>
							</div>
						</div>
					</div>
						<div class="row-start-2 row-span-5 col-span-2">
							<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
								<thead class="bg-gray-100 flex text-gray w-full">
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<th class="p-4 w-2/6">Date</th>
										<th class="p-4 w-2/6">A.M. In</th>
										<th class="p-4 w-2/6">A.M. Out</th>
										<th class="p-4 w-2/6">P.M. IN</th>
										<th class="p-4 w-2/6">COFFEE IN</th>
										<th class="p-4 w-2/6">COFEE OUT</th>
										<th class="p-4 w-2/6">P.M. OUT</th>
										<th class="p-4 w-2/6">DURATION</th>
									</tr>
								</thead>
								<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 55vh;">
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 16, 2021</td>
										<td class="py-4 w-2/6">09 : 34 am</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
										<td class="py-4 w-2/6">--</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 15, 2021</td>
										<td class="py-4 w-2/6">09 : 25 am</td>
										<td class="py-4 w-2/6">01 : 47 am</td>
										<td class="py-4 w-2/6">02 : 46 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 09 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 14, 2021</td>
										<td class="py-4 w-2/6">09 : 28 am</td>
										<td class="py-4 w-2/6">02 : 07 am</td>
										<td class="py-4 w-2/6">03 : 05 am</td>
										<td class="py-4 w-2/6">05 : 14 pm</td>
										<td class="py-4 w-2/6">05 : 41 pm</td>
										<td class="py-4 w-2/6">06 : 38 pm</td>
										<td class="py-4 w-2/6">09 hrs 10 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 13, 2021</td>
										<td class="py-4 w-2/6">12 : 15 am</td>
										<td class="py-4 w-2/6">02 : 04 am</td>
										<td class="py-4 w-2/6">03 : 01 am</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 03 pm</td>
										<td class="py-4 w-2/6">09 : 15 pm</td>
										<td class="py-4 w-2/6">9 hrs 00 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 11, 2021</td>
										<td class="py-4 w-2/6">09 : 26 am</td>
										<td class="py-4 w-2/6">01 : 29 am</td>
										<td class="py-4 w-2/6">02 : 28 am</td>
										<td class="py-4 w-2/6">05 : 00 pm</td>
										<td class="py-4 w-2/6">05 : 26 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 08 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 10, 2021</td>
										<td class="py-4 w-2/6">09 : 26 am</td>
										<td class="py-4 w-2/6">01 : 33 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 03 pm</td>
										<td class="py-4 w-2/6">05 : 32 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 08 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 09, 2021</td>
										<td class="py-4 w-2/6">09 : 19 am</td>
										<td class="py-4 w-2/6">02 : 31 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 05 pm</td>
										<td class="py-4 w-2/6">05 : 33 pm</td>
										<td class="py-4 w-2/6">06 : 34 pm</td>
										<td class="py-4 w-2/6">09 hrs 15 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 07, 2021</td>
										<td class="py-4 w-2/6">09 : 24 am</td>
										<td class="py-4 w-2/6">01 : 36 am</td>
										<td class="py-4 w-2/6">02 : 35 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 38 pm</td>
										<td class="py-4 w-2/6">09 hrs 14 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 06, 2021</td>
										<td class="py-4 w-2/6">11 : 49 am</td>
										<td class="py-4 w-2/6">02 : 06 am</td>
										<td class="py-4 w-2/6">02 : 58 am</td>
										<td class="py-4 w-2/6">06 : 07 pm</td>
										<td class="py-4 w-2/6">06 : 20 pm</td>
										<td class="py-4 w-2/6">09 : 02 pm</td>
										<td class="py-4 w-2/6">09 hrs 13 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 04, 2021</td>
										<td class="py-4 w-2/6">09 : 27 am</td>
										<td class="py-4 w-2/6">01 : 32 am</td>
										<td class="py-4 w-2/6">02 : 29 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 35 pm</td>
										<td class="py-4 w-2/6">06 : 39 pm</td>
										<td class="py-4 w-2/6">09 hrs 12 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 03, 2021</td>
										<td class="py-4 w-2/6">09 : 51 am</td>
										<td class="py-4 w-2/6">01 : 44 am</td>
										<td class="py-4 w-2/6">02 : 42 am</td>
										<td class="py-4 w-2/6">05 : 15 pm</td>
										<td class="py-4 w-2/6">05 : 44 pm</td>
										<td class="py-4 w-2/6">06 : 39 pm</td>
										<td class="py-4 w-2/6">9 hrs 12 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6">September 02, 2021</td>
										<td class="py-4 w-2/6">09 : 51 am</td>
										<td class="py-4 w-2/6">02 : 02 am</td>
										<td class="py-4 w-2/6">02 : 55 am</td>
										<td class="py-4 w-2/6">05 : 10 pm</td>
										<td class="py-4 w-2/6">05 : 39 pm</td>
										<td class="py-4 w-2/6">07 : 09 pm</td>
										<td class="py-4 w-2/6">09 hrs 18 mins</td>
									</tr>
								</tbody>
							</table> <!--Table div end-->
            </div>
        </div>
    </div>
</div>
	</content>
	<button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase roun	-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5" id="btn-back-to-top">
		<svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
	</button>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
	<script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

<script>
function hideShow() {
  var x = document.getElementById("attendanceSummary");
  if (x.style.display === "none") {
    x.style.display = "block";
  }

}

function showOT() {
  var x = document.getElementById("history");
  if (x.style.display === "none") {
    x.style.display = "block";
  }

}
function hideButton() {
  var x = document.getElementById("button-start");
  
  if (x.style.display === "none") {
    x.style.display = "block";
	
	console.log("Button - stop")
  } else {
    x.style.display = "none";
	
  }
  showButton();
}
function showButton(){
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

var seconds = 00; 
var tens = 00; 
var minutes = 00;
var hours = 00;
var appendTens = document.getElementById("tens")
var appendSeconds = document.getElementById("seconds")
var appendMinutes = document.getElementById("minutes")
var appendHours = document.getElementById("hours")
var buttonStart = document.getElementById('button-start');
// var buttonStop = document.getElementById('button-stop');
var buttonReset = document.getElementById('button-reset');
var Interval ;

buttonStart.onclick = function() {
    
    clearInterval(Interval);
     Interval = setInterval(startTimer, 10);
	 time_in();
	 hideButton();

	//  document.getElementById("button-start").innerHTML = 'Check Out';
	//  document.getElementById("button-start").style.background='#AA0061';
  }



function startTimer(){
	tens++; 
    
    if(tens <= 9){
    
	  	tens = "0" + tens;
	  
    }
    
    // if (tens > 9){
   
	// 	tens = " " + tens
    // } 
    
    if (tens > 99) {
    //   console.log("seconds");
      seconds++;
   
		if(seconds <= 9){		
			seconds = "0" + seconds;		
		}else{
			seconds =  seconds;
		}
      tens = 0;   
		tens = "0" + 0;
    }
   
	if (seconds == 0){
		seconds = "00"
    }
	if (seconds > 60){	
		// console.log("minutes")
		minutes++;	
		if(minutes <= 9){		
			minutes = "0" + minutes;
		}else{
			minutes =  minutes;
		}	
		
		seconds = 0;		
		seconds = "0" + 0;
	}
	if (minutes == 0){
		minutes = "00";
	}
	if (minutes > 60){		
		// console.log("hours")
		hours++;		
		if(hours <= 9){		
			hours = "0" + hours;
		}else{
			hours =  hours;
		}	
		minutes = 0;
		minutes = "0" + 0;
	}
	if (hours == 0){
		hours = "00";
	}
	// console.log(hours + " : " + minutes + " : " + seconds + " : " + tens)
	document.getElementById('hours').innerHTML = hours + " : " + minutes + " : " + seconds + " : " + tens;

}
function time_in(){
	var rtClock = new Date();
	console.log(rtClock.toLocaleTimeString('PST'));
	document.getElementById('timedIn').innerHTML = rtClock.toLocaleTimeString('PST');

	var hours = rtClock.getHours();
	var minutes = rtClock.getMinutes();
	var seconds = rtClock.getSeconds();


	hours = ("0" + hours).slice(-2);
	minutes = ("0" + minutes).slice(-2);
	seconds = ("0" + seconds).slice(-2);

	var amPm = (hours <= 12 ) ? "AM" : "PM";

	hours = (hours > 12) ? hours - 12 : hours;
	document.getElementById('timedIn').innerHTML = 
		hours + " : " + minutes + " : "+ seconds + " " + amPm;

	hours = parseInt(hours) + 9 ;
	
	var amPm = (hours <= 12 ) ? "AM" : "PM";

	hours = (hours > 12) ? hours - 12 : hours;

	document.getElementById('time_out').innerHTML = 
		hours + " : " + minutes + " : "+ seconds + " " + amPm;
}

// Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
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

//   var x = document.getElementById("history");
//   if (x.style.display === "block") {
//     x.style.display = "none";
//   }

//   var x = document.getElementById("attendanceSummary");
//   if (x.style.display === "block") {
//     x.style.display = "none";
//   }
}
</script>
