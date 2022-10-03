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
	<div class="md:flex flex-col md:flex-row md:min-h-screen xl:w-3/12">
	<sidebar @click.away="open = false" class="flex flex-col w-full  text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
		<div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
		
		<button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
			<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
			<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
			<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
			</svg>
		</button>
		</div>
		<nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
			<img src="img\Login-image.png"
					class="w-56 xl:mx-20 lg:mx-20 rounded-full bordercolor bordercolor border-4 "
					alt="Sample image"
					/>
					<h1 class="text-center text-lg xl:mt-9 font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">FIRSTNAME MN. LASTNAME</h1>
					<h1 class="text-center text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Job Position</h1>
					<div class="basis-1 px-3 grid ">
						<table class="table-fixed w-full content-center text-left xl:mt-20 border-separate border-spacing-2">
							<tr>
								<th>ID NO. :</th>
								<th class="font-medium">0000-0001</th>
							</tr>
							<tr>
								<th>CONTACT NUMBER :</th>
								<th class="font-medium">09123456789</th>
							</tr>
							<tr>
								<th>EMAIL: </th>
								<th class="font-medium">fm.lastname@email.com</th>
							</tr>
							<tr>
								<th>BRANCH: </th>
								<th class="font-medium">SM Bicutan</th>
							</tr>
							<tr>
								<th>CHAIN: </th>
								<th class="font-medium">SM Department Store</th>
							</tr>
							<tr>
								<th>BIRTHDAY: </th>
								<th class="font-medium">January 01, 1993</th>
							</tr>
						</table>

						<!-- <button class="border-xl bordercolor border-4 rounded-xl px-2 py-1 absolute inset-x-0 bottom-0 flex-shrink-0">Log Out</button> -->
						<button class="border-xl bordercolor border-4 rounded-xl px-2 py-1 mt-72">Log Out</button>
					</div>
		</nav>
	</sidebar>
	</div>

	<content class="xl:w-9/12 sm:w-full px-10 py-5">
			<div class="grid md:grid-flow-row grid-rows-2 grid-cols-4 ">
				<div class="row-start-1 row-span-1 pt-2 drop-shadow-md">
					<div class="bg-gray-400 rounded-lg px-2 py-5 text-white text-center">
						<h1 class="font-bold">Worked Hour Today</h1>
						<span class="countdown font-mono text-2xl">
							07:30:20
						</span>
					</div>
				</div>
				<div class="row-start-2 row-span-1 pt-3 drop-shadow-md">
					<div class="bg-gray-500 rounded-lg px2 py-5 text-center text-white">
						<h1 class="font-bold">Timed In Today</h1>
						<span class="countdown font-mono text-2xl">
							07:30:20
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
							<button class="border-2 border-solid bordercolor rounded-2xl px-2 py-2 font-themecolor ml-16">View More</button>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg">Late</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg">Undertime</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg">Overtime</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
						<div class="text-center py-2 text-gray-700">
							<h1 class="text-lg">Hours Rendered</h1>
							<h2 class="text-4xl">0 Day/s</h2>
						</div>
					</div>
				</div>
			</div><!--1st Grid-->

			<div class="grid md:grid-flow-row grid-row-6 grid-cols-4 py-5 drop-shadow-md">
				<div class="row-start-1 row-span-1 pt-2">
					<div class="bg-green-500 rounded-lg px-2 py-5 text-white text-center">
						<h1 class="font-bold">Time In Today</h1>
						<span class="countdown font-mono text-2xl">
							07:30:20
						</span>
					</div>
				</div>
				<div class="row-start-2 row-span-1 pt-3">
					<div class="bg-red-500 rounded-lg px2 py-5 text-center text-white">
						<h1 class="font-bold">Estimated Out Today</h1>
						<span class="countdown font-mono text-2xl text-center ">
							06:00:20
						</span>
					</div>
				</div>
				<div class="row-start-3 row-span-4 bg-white drop-shadow-md rounded-2xl px-3 py-5 text-center text-white overflow-hidden mt-3">
					<h1 class="text-gray-700 text-6xl font-bold px">TODAY</h1>
					<h1 class="text-gray-700 text-xl font-bold">SEPTEMBER 21, 2022</h1>
					<button class="border-4 rounded-2xl text-xl bordercolor font-themecolor py-2 px-2 my-2">Check In<button>
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
				<div class="row-start-1 row-span-6 col-span-3 pl-3 drop-shadow-md">
					<div class="flex h-full rounded-lg px-2 pt-2 grid md:grid-flow-row grid-rows-6 grid-cols-2">
						<div class="row-start-1 row-span-1 col-span-2 bgcolor grid-rows-2 grid-cols-2 px-2 rounded-t-xl pl-5">
							<div class="row-start-1 row-span-1">
								<h1 class="text-white text-4xl font-bold pt-2">DAILY TIME RECORD</h1>
							</div>
							<div class="row-start-2 row-span-1 flex pt-4">
								<span class="text-white"> Sort By: <input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none"></input> to
								<input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none"></input> </span>
								<button class="ml-96 bg-transparent text-white font-themecolor px-2 py-1 rounded-lg border-2 border-white focus:outline-none float-right">Upload</button>
								<button class="ml-5 bg-transparent text-white font-themecolor px-2 py-1 rounded-lg border-2 border-white focus:outline-none float-right">Print</button>
							</div>
						</div><!--Daily Time Record end-->
						<div class="row-start-2 row-span-5 col-span-2">
							<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
								<thead class="bg-gray-100 flex text-gray w-full ">
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
								<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 53vh;">
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
										<td class="py-4 px-0.5 w-2/6">--</td>
										<td class="py-4 px-0.5 w-2/6">--</td>
										<td class="py-4 px-1 w-2/6">--</td>
										<td class="py-4 px-1 w-2/6">--</td>
										<td class="py-4 px-1 w-2/6">--</td>
										<td class="py-4 px-1 w-2/6">--</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
									<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
										<td class="py-4 w-2/6 px-5">September 19, 2021</td>
										<td class="py-4 px-0.5 w-2/6">07 : 30</td>
										<td class="py-4 px-0.5 w-2/6">12 : 05</td>
										<td class="py-4 px-0.5 w-2/6">01 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 00</td>
										<td class="py-4 px-1 w-2/6">04 : 20</td>
										<td class="py-4 px-1 w-2/6">06 : 20</td>
										<td class="py-4 px-1 w-2/6">10 hrs 50 mins</td>
									</tr>
								</tbody>
							</table> <!--Table div end-->
						</div><!--Daily Time Record end-->
					</div>
				</div><!--tABLE GRID END-->
			</div><!--2nd Grid-->

			<div class="grid bgcolor overflow-auto rounded-lg mb-5 drop-shadow-md">
    <div class="grid grid-rows-2 grid-flow-col lg:px-10 sm:px-5 py-5 sm:w-full">
        <div class="row-start-1 row-span-1 flex">
            <h1 class="text-white text-4xl font-bold">Attendance Summary</h1>
        </div>
		<div class="row-start-2 row-span-1 flex">
		<span class="text-white"> Sort By: <input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> to
			<input type="date" class="bg-transparent text-white font-themecolor px-1 py-1 rounded-lg border-2 border-white focus:outline-none mt-2"></input> </span>
		</div>
        
		<!-- <div class="row-start-2 row-span-1 flex bg-green-900 floar">
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">OT History</button>
			<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
		</div> -->
		<div class="row-start-2 row-span-2">
			<div class="flex  float-right">
				<button class="text-white px-1 py-1 border-2 border-white mt-2 mr-3 rounded-lg">OT History</button>
				<button class="text-white px-1 py-1 border-2 border-white mt-2 rounded-lg">Print</button>
			</div>
        </div>
    </div>
    <div>
	<table class="text-center w-full bg-white text-center rounded-lg hover:table-fixed " >
	<thead class="bg-gray-100 flex text-gray w-full ">
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
		<tbody class="bg-grey-light flex flex-col  overflow-y-scroll w-full " style="height: 65vh;">
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">--</td>
			<td class="py-4 px-0.5 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
			<td class="py-4 px-1 w-2/6">--</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">1</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		<tr class="flex w-full even:bg-gray-100 odd:bg-white-100">
			<td class="py-4 w-2/6 px-5">September 19, 2021</td>
			<td class="py-4 px-0.5 w-2/6">07 : 34 am</td>
			<td class="py-4 px-0.5 w-2/6">8 : 05 pm</td>
			<td class="py-4 px-0.5 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">0</td>
			<td class="py-4 px-1 w-2/6">9 hrs 5 mins</td>
		</tr>
		</tbody>
		<tfoot class="bg-gray-100 flex text-gray w-full ">
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
</div><!--end attendance summary-->
	</content>

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>